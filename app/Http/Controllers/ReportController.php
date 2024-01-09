<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Detail_description;
use App\Models\Report;
use App\Models\Workspace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request, $id)
    {
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');

        $id = $request->route('id');
        $cashonhand = Workspace::where('id', $id)->get();

        $incomes = collect();
        $expands = collect();

        $total_price = 0;
        $total_pricex = 0;

        // Periksa apakah $startDate dan $endDate tidak kosong sebelum menjalankan query
        if ($startDate && $endDate) {
            $incomes = Detail_description::where('category_id', 1)->where('workspace_id', $id)->whereBetween(DB::raw('DATE(created_at)'), [$startDate, $endDate])->get();
            $expands = Detail_description::where('category_id', 2)->where('workspace_id', $id)->whereBetween(DB::raw('DATE(created_at)'), [$startDate, $endDate])->get();

            $idincome = Detail_description::select('id')->where('category_id', 1)->where('workspace_id', $id)->get();
            $idex = Detail_description::select('id')->where('category_id', 2)->where('workspace_id', $id)->get();

            foreach ($incomes as $incomes) {
                $total_price = Detail::whereIn('description_id', $idincome)->sum('price');
                if ($total_price == null) {
                    $incomes->total_price = 0;
                } else {
                    $incomes->total_price = $total_price;
                }
            }
    
            foreach ($expands as $expands) {
                $total_pricex = Detail::whereIn('description_id', $idex)->sum('price');
                if ($total_pricex == null) {
                    $expands->total_pricex = 0;
                } else {
                    $expands->total_pricex = $total_pricex;
                }
            }
            // if ($incomes->isEmpty() && $expands->isEmpty()) {
            //     session()->flash('error_message', 'Data tidak ditemukan');
            //     return redirect()->back();
            // }
        }

        $selisih = $total_price - $total_pricex;
        $totalcash = $total_price + $total_pricex;

        $persentaseincome = $totalcash > 0 ? round($total_price / $totalcash, 2) * 100 : 0;
        $persentaseexpand = $totalcash > 0 ? round($total_pricex / $totalcash, 2) * 100 : 0;
        $persentaseprofit = $totalcash > 0 ? round($selisih / $total_price,2) * 100 : 0;


        return view('report.index', [
            'profit' => $selisih,
            'startdate' => $startDate,
            'enddate' => $endDate,
            'perprof' => $persentaseprofit,
            'persentaseincome' => $persentaseincome,
            'persentaseexpand' => $persentaseexpand,
        ]);
    }

    function export_report_pdf(Request $request,$id){
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

        $detail_descriptionse = Detail_description::where('category_id', 2)->where('workspace_id',$id)->get();
        $expands = Detail_description::where('category_id', 2)->where('workspace_id',$id)->get();
        
        $idexpands = Detail_description::select('id')->where('category_id',2)->where('workspace_id',$id)->get();

        foreach ($detail_descriptionse as $detail_descriptione) {
            $total_price = Detail::all()
                ->where('description_id', $detail_description->id)
                ->sum('price');

            $detail_descriptione->total_price = $total_price;

        }
        foreach ($expands as $expands) {
            $total_price = Detail::whereIn('description_id', $idexpands)->sum('price');
            if ($total_price == null) {
                $expands->total_price = 0;
            }else{
                $expands->total_price = $total_price;
            }
        }
        $incomees = Detail_description::where('category_id', 1)->where('workspace_id', $id)->get();
        $expandss = Detail_description::where('category_id', 2)->where('workspace_id', $id)->get();
        $idincome = Detail_description::select('id')->where('category_id', 1)->where('workspace_id', $id)->get();
        $idex = Detail_description::select('id')->where('category_id', 2)->where('workspace_id', $id)->get();
        $totali = 0;
        $totale = 0;
        foreach ($incomees as $incomees) {
            $totali = Detail::whereIn('description_id', $idincome)->sum('price');
            if ($totali == null) {
                $incomees->total_price = 0;
            } else {
                $incomees->total_price = $totali;
            }
        }

        foreach ($expandss as $expandss) {
            $totale = Detail::whereIn('description_id', $idex)->sum('price');
            if ($totale == null) {
                $expandss->total_pricex = 0;
            } else {
                $expandss->total_pricex = $totale;
            }
        }
        $selisih = $totali - $totale;
        
        $pdf = FacadePdf::loadView('report.pdfview',[
            'dtli'=>$detail_descriptions,
            'toti'=>$incomes,
            'dtle'=>$detail_descriptionse,
            'tote'=>$expands,
            'profit'=>$selisih,
        ]);
        return $pdf->download('report.pdf');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Report $report)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Report $report)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Report $report)
    {
        //
    }
}
