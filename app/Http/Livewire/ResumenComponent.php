<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Exports\ResumenExport;
use Maatwebsite\Excel\Facades\Excel;

class ResumenComponent extends Component
{
    public $sum_res,$sumVirtual=0,$sumPre,$sumabus,$a22;
    public function render()
    {
        $sql="SELECT count(ID_RESPUESTA) as res FROM TB_RESPUESTAS_PRINCIPAL";
        $resp=DB::select($sql);
        foreach($resp as $rep){
            $this->sum_res=$rep->res;
        }
        
        $sql="SELECT * FROM TB_PREGUNTAS";
        $preguntas=DB::select($sql);

        $sql="SELECT * FROM TB_RESPUESTAS_PRINCIPAL ORDER BY ID_RESPUESTA DESC LIMIT 30";
        $respuestas=DB::select($sql);
        $sql="SELECT * FROM TB_RESPUESTAS_DETALLE";
        $resdetalles=DB::select($sql);

        $sql="SELECT count(RESPUESTA) as res FROM TB_RESPUESTAS_DETALLE where RESPUESTA='Virtual'";
        $resdetallesvir=DB::select($sql);

        $sql="SELECT count(RESPUESTA) as res FROM TB_RESPUESTAS_DETALLE where ID_PREGUNTA=6 and RESPUESTA='Si'";
        $resbus=DB::select($sql);

        foreach($resbus as $resbu)
        {
            $this->sumabus=$resbu->res;
        }

        $sql="SELECT count(RESPUESTA) as res FROM TB_RESPUESTAS_DETALLE where RESPUESTA='Presencial'";
        $resdetallespre=DB::select($sql);


        foreach($resdetallesvir as $resdetalle)
        {
            $this->sumVirtual=$resdetalle->res;
        }

        foreach($resdetallespre as $resdetallespr)
        {
            $this->sumPre=$resdetallespr->res;
        }


        return view('livewire.resumen-component',compact('preguntas','respuestas','resdetalles'));
    }

    public function export() 
    {
            $this->a22=1;
            $this->a22=0;
    }

}
