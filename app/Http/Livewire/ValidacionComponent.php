<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;

class ValidacionComponent extends Component
{
    public $mensaje3,$mensaje4,$mensaje24,$mensaje25,$archivo_perfil,$img,$tipo,$metodo,$observacion,$id_pre;  
    public $op;
<<<<<<< HEAD
    public $nogestion, $dpi, $fehencargado,$mensaje, $gradoprimeringreso, $grado_primer_ingreso, $nombrepadre;
    public $validar1, $confi, $val, $grados_selecionados, $grados_mostrar, $año_ingreso, $añoingreso, $nombre_padre;
    public $nacimientopadre, $nacimiento_padre, $nacionalidadpadre, $nacionalidad_padre;
    public $lugar_nacimiento_padre, $lugarnacimientopadre, $estadocivil, $estado_civil, $DPIpadre, $DPI_padre;
    public $celular_padre, $celularpadre, $telefono_padre, $telefonopadre, $direccion_residencia, $direccionresidencia;
    public $correo_padre, $correopadre, $profesionpadre, $profesion_padre, $grado_hermano, $gradohermano;

=======
    public $nogestion, $dpi, $fehencargado,$mensaje;

    use WithFileUploads;

    public $validar1, $confi, $val, $grados_selecionados, $grados_mostrar;
>>>>>>> 19bb7196e09121291d461af15f2210bfa3f55b0a
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

    public function estado_civil_padre($estado_civil){
        $this->estadocivil=$this->estado_civil;
    }

    public function insertar_datos(){
        if($this->validate([
            'año_ingreso' => 'required',
            'grado_primer_ingreso' => 'required',
            'nombre_padre' => 'required',
            'nacimiento_padre' => 'required',
            'nacionalidad_padre' => 'required',
            'lugar_nacimiento_padre' => 'required',
            'DPI_padre' => 'required',
            'celular_padre' => 'required',
            'telefono_padre' => 'required',
            'direccion_residencia' => 'required',
            'correo_padre' => 'required',
            'profesion_padre' => 'required',
        ])==false){
            $error="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['error' => 'Validar el input vacio']);
        }
        else{
            $this->añoingreso=$this->año_ingreso;
        $this->gradoprimeringreso=$this->grado_primer_ingreso;
        $this->nombrepadre = $this->nombre_padre;
        $this->nacimientopadre =$this->nacimiento_padre;
        $this->nacionalidadpadre=$this->nacionalidad_padre;
        $this->lugarnacimientopadre=$this->lugar_nacimiento_padre;
        $this->DPIpadre=$this->DPI_padre;
        $this->celularpadre=$this->celular_padre;
        $this->telefonopadre=$this->telefono_padre;
        $this->direccionresidencia=$this->direccion_residencia;
        $this->correopadre=$this->correo_padre;
        $this->profesionpadre=$this->profesion_padre;

        DB::beginTransaction();

        $inscripcion_datos=DB::table('TB_PRE_INFO')->insert(
            [
                'HERMANOS_COLE '=>$this->confi,
                'GRADO_HERMANOS_COLE '=>$this->grados_selecionados,
                'AÑO_1R_INGRESO'=>$this->añoingreso,
                'GRADO_1R_INGRESO'=>$this->gradoprimeringreso,
                'NOMB_PADRE'=>$this->nombrepadre,
                'FECHA_N_PADRE'=>$this->nacimientopadre,
                'NACIONALIDAD_PADRE'=>$idiomamaestro,
                'LUGAR_NACIMIENTO_PADRE'=>$this->lugarnacimientopadre,
                'ESTADO_CIVIL_P'=> $this->estadocivil,
                'DPI_PADRE'=>$this->DPIpadre,
                'TELEFONO_PADRE'=>$this->telefonopadre,
                'CELULAR_PADRE'=>$this->celularpadre,
                'DIRECCION_RECIDENCIA_P'=>$this->direccionresidencia,
                'CORREO_PADRE'=>$this->correopadre,
                'PROFECION_PADRE'=>$this->profesionpadre,

            ]
            );
            if($inscripcion_datos){
                DB::commit();
                $this->validar_info = 1;
            }
            else{
                DB::rollback();
                $this->validar_info = 0;
            }
        }
        
    }
}
