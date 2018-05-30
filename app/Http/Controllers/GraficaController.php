<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Graphics;

class GraficaController extends Controller
{
    public function graphics()
    {
        $enero = DB::table('product_order')
            ->whereBetween('order_date',array('2017-1-01','2017-1-31'))
            ->count();
        $febrero = DB::table('product_order')
            ->whereBetween('order_date',array('2017-2-01','2017-2-28'))
            ->count();
        $marzo = DB::table('product_order')
            ->whereBetween('order_date',array('2017-3-01','2017-3-30'))
            ->count();
        $abril = DB::table('product_order')
            ->whereBetween('order_date',array('2017-4-01','2017-4-30'))
            ->count();
        $mayo = DB::table('product_order')
            ->whereBetween('order_date',array('2017-5-01','2017-5-30'))
            ->count();
        $junio = DB::table('product_order')
            ->whereBetween('order_date',array('2017-6-01','2017-6-30'))
            ->count();
        $julio = DB::table('product_order')
            ->whereBetween('order_date',array('2017-7-01','2017-7-30'))
            ->count();
        $agosto = DB::table('product_order')
            ->whereBetween('order_date',array('2017-8-01','2017-8-30'))
            ->count();
        $septiembre = DB::table('product_order')
            ->whereBetween('order_date',array('2017-9-01','2017-9-30'))
            ->count();
        $octubre = DB::table('product_order')
            ->whereBetween('order_date',array('2017-10-01','2017-10-30'))
            ->count();
        $noviembre = DB::table('product_order')
            ->whereBetween('order_date',array('2017-11-01','2017-11-30'))
            ->count();
        $diciembre = DB::table('product_order')
            ->whereBetween('order_date',array('2017-12-01','2017-12-30'))
            ->count();
        $chartjs = app()->chartjs
            ->name('lineChartTest')
            ->type('line')
            ->size(['width' => 400, 'height' => 200])
            ->labels(['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio','Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'])
            ->datasets([
                [
                    "label" => "Numero de ventas por año",
                    'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                    'borderColor' => "rgba(38, 185, 154, 0.7)",
                    "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                    "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                    "pointHoverBackgroundColor" => "#fff",
                    "pointHoverBorderColor" => "rgba(220,220,220,1)",
                    'data' => [$enero, $febrero, $marzo, $abril, $mayo, $junio, $julio,$agosto,$septiembre,$octubre,$noviembre,$diciembre],
                ],
            ])
            ->options([]);

        return view('reports.graphics', compact('chartjs'));
    }
}
