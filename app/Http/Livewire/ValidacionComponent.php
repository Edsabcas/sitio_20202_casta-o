<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ValidacionComponent extends Component
{
    public $op;
    public $nogestion, $dpi, $fehencargado,$mensaje;
    public function render()
    {
        return view('livewire.validacion-component');        
    }
    public function buspre() {

        if($this->nogestion!=null && $this->dpi!=null && $this->fehencargado!=null){
            
            $sql = "SELECT * FROM TB_PRE_INS where NO_GESTION=? and DPI_EN_ES=? and FEC_NAC_EN_ES=?";
            $conpre= DB::select($sql,array($this->nogestion,$this->dpi,$this->fehencargado));

            if($conpre!=null){
                foreach($conpre as $comp){



                }
                
            }
            else{
                $this->mensaje="mensaje";
            }

        }

    }
}
