<?php

namespace App\Exports;

use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;


class ResumenExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //
    }
    public function view(): View
    {
        $sum_res=0;
        
        $sql="SELECT * FROM TB_PREGUNTAS";
        $preguntas=DB::select($sql);

        $sql="SELECT * FROM TB_RESPUESTAS_PRINCIPAL";
        $respuestas=DB::select($sql);

        $sql="SELECT * FROM TB_RESPUESTAS_DETALLE";
        $resdetalles=DB::select($sql);

        return view('resumen2', [
            'preguntas' => $preguntas,
            'respuestas' => $respuestas,
            'resdetalles' => $resdetalles,
        ]);
    }
}
