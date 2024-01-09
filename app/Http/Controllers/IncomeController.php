<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Detail;
use App\Models\Detail_description;
use App\Models\Workspace;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $id)
    {
        $id = $request->route('id');
        $detail_descriptions = Detail_description::where('category_id', 1)->where('workspace_id',$id)->get();


        foreach ($detail_descriptions as $detail_description) {
            $total_price = Detail::all()
                ->where('description_id', $detail_description->id)
                ->sum('price');

            $detail_description->total_price = $total_price;

        }
        return view('income.index', 
        [
            'dtl' => $detail_descriptions,
            'id' => $id

    ]);
        // return DataTables::of($detail_descriptions)->addIndexColumn()->make(true);
    }
    public function table()
    {
        $detail_descriptions = Detail_description::where('category_id', 1)->get();

        foreach ($detail_descriptions as $detail_description) {
            $total_price = Detail::all()
                ->where('description_id', $detail_description->id)
                ->sum('price');

            $detail_description->total_price = $total_price;

        }
        return DataTables::of($detail_descriptions)->addIndexColumn()->make(true);
    }

    // Ambil data quantity dan price
    // $detail_quantities = Detail::all()
    //     ->where('description_id', $detail_description->id)
    //     ->pluck('quantity');
    
    // $detail_prices = Detail::all()
    //     ->where('description_id', $detail_description->id)
    //     ->pluck('price');
    
    // $detail_names = Detail::all()
    //     ->where('description_id', $detail_description->id)
    //     ->pluck('item_name');
    
    // $detail_description->detail_quantities = $detail_quantities;
    // $detail_description->detail_prices = $detail_prices;
    // $detail_description->detail_names = $detail_names;
    
    // dd($detail_descriptions);
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request,$id)
    {
        $id = $request->route('id');

        return view('income.create', ['category' => Category::all()]);
    }
    function export_income_pdf(Request $request,$id){
        $id = $request->route('id');
        $detail_descriptions = Detail_description::where('category_id', 1)->where('workspace_id',$id)->get();
        $incomes = Detail_description::where('category_id', 1)->get();
        
        $idincome = Detail_description::select('id')->where('category_id',1)->where('workspace_id',$id)->get();

        foreach ($detail_descriptions as $detail_description) {
            $total_price = Detail::all()
                ->where('description_id', $detail_description->id)
                ->sum('price');

            $detail_description->total_price = $total_price;

        }
        foreach ($incomes as $incomes) {
            $total_price = Detail::whereIn('description_id', $idincome)->sum('price');
            if ($total_price == null) {
                $incomes->total_price = 0;
            }else{
                $incomes->total_price = $total_price;
            }
        }
        $pdf = FacadePdf::loadView('income.pdfview',['dtl'=>$detail_descriptions,'dtl2'=>$incomes]);
        return $pdf->download('income.pdf');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, $id)
    {
        $data = $request->all();
        $id = $request->route('id');

        // dd($data);
        $expand = new Detail_description();
        $expand->description = $data['description'];
        $expand->workspace_id = $id;
        $expand->category_id = 1;
        $expand->user_id = auth()->user()->id;
        $expand->save();

        
        if (!empty($data['item'])) {
            foreach ($data['item'] as $item => $value) {
                $data2 = array(
                    'description_id' => $expand->id,
                    'item_name' => $data['item'][$item],
                    'quantity' => $data['quantity'][$item],
                    'price' => $data['total_item'][$item],
                );
                Detail::create($data2);
            }
        }
        $id = $request->route('id');
        $detail_descriptions = Detail_description::where('category_id', 1)->where('workspace_id',$id)->get();


        foreach ($detail_descriptions as $detail_description) {
            $total_price = Detail::all()
                ->where('description_id', $detail_description->id)
                ->sum('price');

            $detail_description->total_price = $total_price;

        }
        $workspace = Workspace::find($id);
        $workspace->increment('cash_on_hand', $total_price);
        $workspace->save();

        return redirect('income-backend/'.$id)->with('success', 'Expand created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request,$idi)
    {
        $idi = $request->route('idi');
        $details = Detail::where('description_id',$idi)->get();
        return view('income.show',['dtll' => $details]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Detail $detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Detail $detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Detail $detail)
    {
        //
    }
}
