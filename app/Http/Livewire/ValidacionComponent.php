<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;

class ValidacionComponent extends Component
{
    public $mensaje3,$mensaje4,$mensaje24,$mensaje25,$archivo_perfil,$img,$tipo,$metodo,$observacion,$id_pre;  
    public $op;
    public $nogestion, $dpi, $fehencargado,$mensaje;

    use WithFileUploads;

    public function render()
    {
        return view('livewire.validacion-component');        
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
    public function actualizar_metodo(){

        
        $metodo=$this->metodo;
        $observacion=$this->observacion;

        DB::beginTransaction();

        $metodo=DB::table('TB_PRE_INS')->where('ID_PRE'.$id_pre)->update(
            [
                'TIPO_PAGO'=>$metodo,
                'OBSERVACION_COMP'=>$observacion,
            ]);
            if($metodo){
                DB::commit();
                $this->reset();
                $this->mensaje3='Editado Correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensaje3);
                $this->mensaje4='No fue posible editar correctamente';
            }    

            
            $archivo_perfil="";
        if($this->archivo_perfil!=null){
            if($this->archivo_perfil->getClientOriginalExtension()=="jpg" or $this->archivo_perfil->getClientOriginalExtension()=="png" or $this->archivo_perfil->getClientOriginalExtension()=="jpeg"){
                $archivo_perfil = "img".time().".".$this->archivo_perfil->getClientOriginalExtension();
                $this->img=$archivo_perfil;
                $this->archivo_perfil->storeAS('public/comprobantes/', $this->img,'public_up');
            }
            if($this->archivo_perfil->getClientOriginalExtension()=="jpg" or $this->archivo_perfil->getClientOriginalExtension()=="png" or $this->archivo_perfil->getClientOriginalExtension()=="jpeg"){
                $this->tipo=1;
            }
            DB::beginTransaction();
                    $foto=DB::table('TB_PRE_INS')
                    ->where('ID_PRE',auth()->user()->id)
                    ->update ([
                        
                        'COMPROBANTE_PAGO'=>$this->img
                     ]);

                     if($foto){
                        DB::commit();
                        $this->mensaje24="Foto de perfil actualizada";
                    }
                    else{
                        DB::rollback();
                        $this->mensaje25="No se logró actualizar";
                    }
        }
    }

    public function comprobante(){

        

    }
}
