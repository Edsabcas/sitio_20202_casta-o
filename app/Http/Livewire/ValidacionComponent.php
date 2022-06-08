<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ValidacionComponent extends Component
{
    public $op;
    public $nogestion, $dpi, $fehencargado,$mensaje;
    public $validar1, $confi, $val, $grados_selecionados, $grados_mostrar;
    public function render()
    {
        $sql= 'SELECT * FROM tb_grados';
        $grados=DB::select($sql);
        return view('livewire.validacion-component', compact('grados'));        
    }
    public function buspre() {
        if($this->validate([
            'nogestion' => 'required',
            'dpi' => 'required',
            'fehencargado' => 'required',
        ])==false){
            return back()->withErrors(['advertencia'=>'validar el input vacío']);
        }
        else{
            
            $sql = "SELECT * FROM TB_PRE_INS where NO_GESTION=? and DPI_EN_ES=? and FEC_NAC_EN_ES=?";
            $conpre= DB::select($sql,array($this->nogestion,$this->dpi,$this->fehencargado));

            if($conpre!=null){
                unset($this->mensaje);
                foreach($conpre as $comp){   
                    $this->op=$comp->ESTADO_PRE_INS;                    
                }
            }
            else{
                $this->mensaje=1;
            }

        }

    }

    public function ver_form_ins($validar){
        $this->validar1 = $validar;
    }

    public function confirmar_hermano($conf){
        $this->confi=$conf;


    }

    public function insertar_grados_hermanos($grado, $gradomostrar){
        $this->grados_selecionados=$this->grados_selecionados.";".$grado;
        $this->grados_mostrar=$this->grados_mostrar.";".$gradomostrar;

        
    }
}
