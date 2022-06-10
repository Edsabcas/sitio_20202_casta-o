<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class ValidacionComponent extends Component
{
    public $op;
    public $nogestion, $dpi, $fehencargado,$mensaje, $gradoprimeringreso, $grado_primer_ingreso, $nombrepadre;
    public $validar1, $confi, $val, $grados_selecionados, $grados_mostrar, $año_ingreso, $añoingreso, $nombre_padre;
    public $nacimientopadre, $nacimiento_padre, $nacionalidadpadre, $nacionalidad_padre,$lugar_profesion_padre;
    public $lugar_nacimiento_padre, $lugarnacimientopadre, $estadocivil, $estado_civil, $DPIpadre, $DPI_padre;
    public $celular_padre, $celularpadre, $telefono_padre, $telefonopadre, $direccion_residencia, $direccionresidencia;
    public $correo_padre, $correopadre, $profesionpadre, $profesion_padre, $grado_hermano, $gradohermano,$vive_con_elpadre,$estadocivilma;
    public $direccion_residenciamadre, $correo_madre, $profesion_madre, $lugar_prof_madre, $cargo_madre, $religion_madre, $NIT_madre, $vive_madre;

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