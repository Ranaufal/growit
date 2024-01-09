<?php

namespace App\Http\Controllers;

use App\Models\Detail;
use App\Models\Detail_description;
use App\Models\User;
use App\Models\Workspace;
use App\Models\WorkspaceUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    public function index(Request $request, $id, $workspacename)
    {
        session_start();

        // Set nilai sesi
        session()->put('myworkspaceid', $id);
        session()->put('myworkspacename', $workspacename);

        // $_SESSION['myworkspacename'] = $workspacename;
        $id = $request->route('id');
        $cashonhand = Workspace::where('id', $id)->get();
        $incomes = Detail_description::where('category_id', 1)->where('workspace_id', $id)->get();
        $expands = Detail_description::where('category_id', 2)->where('workspace_id', $id)->get();
        $idincome = Detail_description::select('id')->where('category_id', 1)->where('workspace_id', $id)->get();
        $idex = Detail_description::select('id')->where('category_id', 2)->where('workspace_id', $id)->get();
        $total_price = 0;
        $total_pricex = 0;
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
        $selisih = 0;
        $persentaseincome = 0;
        $persentaseexpand = 0;
        if ($incomes != null && $expands != null && $total_price != 0 && $total_pricex != 0) {
            # code...
            $selisih = $total_price - $total_pricex;
            $totalcash = $total_price + $total_pricex;
            $persentaseincome = round($total_price / $totalcash, 2) * 100;
            $persentaseexpand = round($total_pricex / $totalcash, 2) * 100;
        }
        return view(
            'dashboard',
            [
                'dtl' => $incomes,
                'dtl2' => $expands,
                'coh' => $cashonhand,
                'selisih' => $selisih,
                'persentaseincome' => $persentaseincome,
                'persentaseexpand' => $persentaseexpand,
            ]
        );
    }
}
