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
    public $nacimientopadre, $nacimiento_padre, $nacionalidadpadre, $nacionalidad_padre,$lugar_profesion_padre;
    public $lugar_nacimiento_padre, $lugarnacimientopadre, $estadocivil, $estado_civil, $DPIpadre, $DPI_padre;
    public $celular_padre, $celularpadre, $telefono_padre, $telefonopadre, $direccion_residencia, $direccionresidencia;
    public $id_pre,$metodo,$archivo_comprobante,$img,$tipo,$mensaje24,$mensaje25,$observacion;
    public $correo_padre, $correopadre, $profesionpadre, $profesion_padre, $grado_hermano, $gradohermano,$vive_con_elpadre,$estadocivilma;
    public $direccion_residenciamadre, $correo_madre, $profesion_madre, $lugar_prof_madre, $cargo_madre, $religion_madre, $NIT_madre, $vive_madre;
    public $solo_alumno, $soloalumno, $encargado_alumno, $nombreencargado, $nombre_encargado, $bus_colegio, $bus_no_colegio, $codigo_fam, $nombre_fam, $nombrefam, $codigofam, $alumno_asegurado, $vacunas, $nombre_aseguradora, $nombreaseguradora;
    public $poliza, $carneseguro, $carne_seguro;
    public $religion_padre, $cargo_profesion_padre, $NIT_padre, $nombre_madre, $fechana_madre, $nacionalidad_madre, $lugar_nacimiento_madre, $DPI_madre, $telefono_madre, $celular_madre;

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


    public function confirmar_vive_padre($vive_con_padre){
        $this->vive_con_elpadre=$vive_con_padre;
    }

    public function estado_civil_madre($est){
        $this->estadocivilma=$est;
    }

    public function vive_con_la_madre($vive_madre){
        $this->vive_madre=$this->vive_madre;
    }

    public function tiene_alergia($tiene_alergia){
        $this->tiene_alergia=$this->tiene_alergia;
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
            'lugar_profesion_padre' => 'required',
            'cargo_profesion_padre' => 'required',
            'religion_padre' => 'required',
            'NIT_padre' => 'required',
            'tiene_alergia'=> 'required',
            'nombre_madre' => 'required',
            'fechana_madre' => 'required',
            'nacionalidad_madre' => 'required',
            'lugar_nacimiento_madre' => 'required',
            'DPI_madre' => 'required',
            'telefono_madre' => 'required',
            'celular_madre' => 'required',
            'direccion_residenciamadre'=> 'requiered',
            'correo_madre'=> 'requiered',
            'profesion_madre' =>'requiered',
            'lugar_prof_madre' =>'requiered',
            'cargo_madre' =>'requiered',
            'religion_madre' =>'requiered',
            'NIT_madre' =>'requiered',
            'nombre_aseguradora' => 'required',
            'nombre_encargado' => 'required',
            'poliza' => 'required',
            'carne_seguro' => 'required',
            'codigo_fam' => 'required',
            'nombre_fam' => 'required',

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
        $this->lugar_profesion_padre=$this->lugar_profesion_padre;
        $this->cargo_profesion_padre=$this->cargo_profesion_padre;
        $this->religion_padre=$this->religion_padre;
        $this->NIT_padre=$this->NIT_padre;
        $this->vive_con_elpadre=$this->vive_con_elpadre;
        $this->nombre_madre=$this->nombre_madre;
        $this->fechana_madre=$this->fechana_madre;
        $this->nacionalidad_madre=$this->nacionalidad_madre;
        $this->lugar_nacimiento_madre=$this->lugar_nacimiento_madre;
        $this->estadocivilma=$this->estadocivilma;
        $this->DPI_madre=$this->DPI_madre;
        $this->telefono_madre=$this->telefono_madre;
        $this->celular_madre=$this->celular_madre;
        $this->direccion_residenciamadre=$this->direccion_residenciamadre; 
        $this->correo_madre=$this->correo_madre;
        $this->rofesion_madre=$this->profesion_madre;
        $this->lugar_prof_madre=$this->lugar_prof_madre;
        $this->cargo_madre=$this->cargo_madre; 
        $this->religion_madre=$this->religion_madre;
        $this->NIT_madre=$this->NIT_madre;
        $this->Especifique_alerg=$this->Especifique_alerg;
        $this->nombreaseguradora=$this->nombre_aseguradora;
        $this->nombreencargado=$this->nombre_encargado;
        $this->poliza=$this->poliza;
        $this->carneseguro=$this->carne_seguro;
        $this->codigofam=$this->codigo_fam;
        $this->nombrefam=$this->nombre_fam;
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
                'VIVE_CON_LA_MADRE'=> $this->vive_madre,
                'DPI_PADRE'=>$this->DPIpadre,
                'TELEFONO_PADRE'=>$this->telefonopadre,
                'CELULAR_PADRE'=>$this->celularpadre,
                'DIRECCION_RECIDENCIA_P'=>$this->direccionresidencia,
                'CORREO_PADRE'=>$this->correopadre,
                'PROFECION_PADRE'=>$this->profesionpadre,
                'LUGAR_TRABAJO_P'=>$this->lugar_profesion_padre,
                'CARGO_PADRE'=>$this->cargo_profesion_padre,
                'RELIGION_PADRE'=>$this->religion_padre,
                'NIT_PADRE'=>$this->NIT_padre,
                'VIVE_CON_EL_PADRE'=>$this->vive_con_elpadre,
                'NOMB_MADRE'=>$this->nombre_madre,
                'FECHA_N_MADRE'=>$this->fechana_madre,
                'NACIONALIDAD_MADRE'=>$this->nacionalidad_madre,
                'LUGAR_NACIMIENTO_MADRE'=>$this->lugar_nacimiento_madre,
                'ESTADO_CIVIL_M'=>$this->estadocivilma,
                'DPI_MADRE'=>$this->DPI_madre,
                'TELEFONO_MADRE'=>$this->telefono_madre,
                'CELULAR_MADRE'=>$this->celular_madre,
                'DIRECCION_RECIDENCIA_M'=>$this->direccion_residenciamadre, 
                'CORREO_MADRE'=>$this->correo_madre,
                'PROFECION_MADRE'=>$this->rofesion_madre,
                'LUGAR_TRABAJO_M'=>$this->lugar_prof_madre,
                'CARGO_MADRE'=>$this->cargo_madre,
                'RELIGION_MADRE'=>$this->religion_madre,
                'NIT_MADRE'=>$this->NIT_madre,
                'ENFERMEDADES_ALERGIAS'=>$this->tiene_alergia,
                'ESPECIFICACION_ENF_O_ALERG'=>$this->Especifique_alerg,
                'VACUNAS'=>$this->$vacunas,
                'ALUMNO_ASEGURADO'=>$this->alumno_asegurado,
                'ASEGURADORA'=>$this->nombre_aseguradora,
                'POLIZA_SEGURO'=>$this->poliza,
                'NO_CARNET_SEGURO'=>$this->carne_seguro,
                'SALIDA_SOLO'=>$this->soloalumno,
                'SALIDA_CON_ENCARGADO'=>$this->encargado_alumno,
                'NOMBRE_ENCARGADO'=>$this->nombreencargado,
                'SALIDA_BUS_COLEGIO'=>$this->bus_colegio,
                'SALIDA_BUS_AJENO'=>$this->bus_no_colegio,
                'CODIGO_FAMILIA'=>$this->codigo_fam,
                'NOMBRE_FAMILIA'=>$this->nombre_fam,
            
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
    
    
    public function solo_alumno($solo_alumno){
        $this->soloalumno=$this->solo_alumno;
    }

    public function encargado_alumno($encargado_alumno){
        $this->encargado_alumno=$encargado_alumno;
    }

    public function bus_colegio($bus_colegio){
        $this->bus_colegio=$bus_colegio;
    }

    public function bus_no_colegio($bus_no_colegio){
        $this->bus_no_colegio=$bus_no_colegio;
    }

    public function vacunas($vacunas){
        $this->vacunas=$vacunas;
    }

    public function alumno_asegurado($alumno_asegurado){
        $this->alumno_asegurado=$alumno_asegurado;
    }
}
