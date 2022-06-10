<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithFileUploads;


class ValidacionComponent extends Component
{
    use WithFileUploads;

    public $op;
    public $nogestion, $dpi, $fehencargado,$mensaje, $gradoprimeringreso, $grado_primer_ingreso, $nombrepadre;
    public $validar1, $confi, $val, $grados_selecionados, $grados_mostrar, $año_ingreso, $añoingreso, $nombre_padre;
    public $nacimientopadre, $nacimiento_padre, $nacionalidadpadre, $nacionalidad_padre;
    public $lugar_nacimiento_padre, $lugarnacimientopadre, $estadocivil, $estado_civil, $DPIpadre, $DPI_padre;
    public $celular_padre, $celularpadre, $telefono_padre, $telefonopadre, $direccion_residencia, $direccionresidencia;
    public $correo_padre, $correopadre, $profesionpadre, $profesion_padre, $grado_hermano, $gradohermano;
    public $id_pre,$metodo,$archivo_comprobante,$img,$tipo,$mensaje24,$mensaje25,$observacion;

    public function render()
    {
        if($this->archivo_comprobante!=null){
            if($this->archivo_comprobante->getClientOriginalExtension()=="jpg" or $this->archivo_comprobante->getClientOriginalExtension()=="png" or $this->archivo_comprobante->getClientOriginalExtension()=="jpeg"){
                $this->tipo=1;
            }
        }

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
                    $this->id_pre=$comp->ID_PRE;                    
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
        public function update_comprobante_p(){
            $archivo_comprobante="";
            if($this->archivo_comprobante!=null){
                if($this->archivo_comprobante->getClientOriginalExtension()=="jpg" or $this->archivo_comprobante->getClientOriginalExtension()=="png" or $this->archivo_comprobante->getClientOriginalExtension()=="jpeg"){
                    $archivo_comprobante = "img".time().".".$this->archivo_comprobante->getClientOriginalExtension();
                    $this->img=$archivo_comprobante;
                    $this->archivo_comprobante->storeAS('comprobantes/imagenes/', $this->img,'public_up');
                    $this->tipo=1;
                }
            /*  elseif($this->archivo_comprobante->getClientOriginalExtension()=="pdf"){
                    $archivo_comprobante = "pdf".time().".".$this->archivo_comprobante->getClientOriginalExtension();
                    $this->img=$archivo_comprobante;
                    $this->archivo_comprobante->storeAS('public/pdf/', $this->img,'public_up');
                    $this->tipo=3;
                    } */
            }
            $id_pre=$this->id_pre;
            $metodo=$this->metodo;
            $observacion=$this->observacion;

            DB::beginTransaction();
    
            $comprobantes=DB::table('TB_PRE_INS')
            ->where('ID_PRE',$id_pre)
            ->update(
                [
                    'FORMA_PAGO'=>$metodo,
                    'COMPROBANTE_PAGO'=>$archivo_comprobante,
                    'FECHA_CAMBIOS_REG'=> date('y-m-d:h:m:s'),
                    'ESTADO_PRE_INS'=>2,
                    'OBSERVACION_COMP'=>$observacion
                ]
                );
            if($comprobantes){

                DB::commit();
                $this->reset();
                unset($this->mensaje25);
                $this->mensaje24='Actualizado correctamente';
            }
            else{
                DB::rollback();
                unset($this->mensaje24);
                $this->mensaje25='No fue posible actualizar correctamente';
            }
        }
}
