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
    public $lugar_nacimiento_padre, $lugarnacimientopadre, $estadocivil, $DPIpadre, $DPI_padre;
    public $celular_padre, $celularpadre, $telefono_padre, $telefonopadre, $direccion_residencia, $direccionresidencia;
    public $id_pre,$metodo,$archivo_comprobante,$img,$tipo,$mensaje24,$mensaje25,$observacion;
    public $correo_padre, $correopadre, $profesionpadre, $profesion_padre, $grado_hermano, $gradohermano,$vive_con_elpadre,$estadocivilma;
    public $direccion_residenciamadre, $correo_madre, $profesion_madre, $lugar_prof_madre, $cargo_madre, $religion_madre, $NIT_madre, $vive_madre;
    public $solo_alumno, $encargado_alumno, $nombreencargado, $nombre_encargado, $bus_colegio, $bus_no_colegio, $codigo_fam, $nombre_fam, $nombrefam, $codigofam, $alumno_asegurado, $vacunas, $nombre_aseguradora, $nombreaseguradora;
    public $poliza, $carneseguro, $carne_seguro, $tiene_alergia, $medicamento, $alimento, $archivo,$formato, $arch;
    public $religion_padre, $cargo_profesion_padre, $NIT_padre, $nombre_madre, $fechana_madre, $nacionalidad_madre, $lugar_nacimiento_madre, $DPI_madre, $telefono_madre, $celular_madre,$id_pre_ins,$id_no_gest,$mensaje_diaco,$mensaje_diaco1,$archivo_cdiaco,$id_pre_ins_arch,$id_no_gest_arch;
    public $prueba_ingreso, $validar_info, $entro_aca, $Especifique_alerg, $Especifique_medi, $Especifique_ali;
    public $estado_elevado;

    public function render()
    {
        if($this->archivo!=null){
            if($this->archivo->getClientOriginalExtension()=="pdf"){
                $archivo = "pdf".time().".".$this->archivo->getClientOriginalExtension();
                $this->arch=$archivo;
                $this->archivo->storeAS('images/temporalpdf/', $this->arch,'public_up');
            }
            if($this->archivo->getClientOriginalExtension()=="jpg" or $this->archivo->getClientOriginalExtension()=="png" or $this->archivo->getClientOriginalExtension()=="jpeg"){
                $this->formato=1;
            }
            elseif($this->archivo->getClientOriginalExtension()=="mp4" or $this->archivo->getClientOriginalExtension()=="mpeg"){
                $this->formato=2;
            }
            elseif($this->archivo->getClientOriginalExtension()=="pdf"){
                $this->formato=3;
            }

        }
        if($this->archivo_comprobante!=null){
            if($this->archivo_comprobante->getClientOriginalExtension()=="jpg" or $this->archivo_comprobante->getClientOriginalExtension()=="png" or $this->archivo_comprobante->getClientOriginalExtension()=="jpeg"){
                $this->tipo=1;
            }
        }

        $sql= 'SELECT * FROM tb_grados';
        $grados=DB::select($sql);
        $sql= 'SELECT * FROM TB_PRE_INFO';
        $inscripcion_datos=DB::select($sql);
        return view('livewire.validacion-component', compact('grados','inscripcion_datos'));        
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
            $this->obt_id_pre($this->id_pre,$this->op);
            $this->obt_arch_contrato($this->id_pre,$this->op);

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
        $this->estadocivil=$estado_civil;
    }


    public function confirmar_vive_padre($vive_con_padre){
        $this->vive_con_elpadre=$vive_con_padre;
    }

    public function estado_civil_madre($est){
        $this->estadocivilma=$est;
    }

    public function vive_con_la_madre($vive_con_madre){
        $this->vive_madre=$vive_con_madre;
    }

    public function tiene_alergia($tiene_alergias){
        $this->tiene_alergia=$tiene_alergias;
    }

    public function medicamento($medicamento){
        $this->medicamento=$medicamento;
    }

    public function alimento($alimento){
        $this->alimento=$alimento;
    }
    
    public function insertar_datos(){

        $this->entro_aca=1;
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
            'direccion_residenciamadre'=> 'required',
            'correo_madre'=> 'required',
            'profesion_madre' =>'required',
            'lugar_prof_madre' =>'required',
            'cargo_madre' =>'required',
            'religion_madre' =>'required',
            'NIT_madre' =>'required',
            'poliza' => 'required',
            'carne_seguro' => 'required',
            'codigo_fam' => 'required',
            'nombre_fam' => 'required',


        ])==false){
            $error="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['error' => 'Validar el input vacio']);
        }
        
            $this->prueba_ingreso=1;
        $añoingreso=$this->año_ingreso;
        $gradoprimeringreso=$this->grado_primer_ingreso;
        $nombrepadre = $this->nombre_padre;
        $nacimientopadre =$this->nacimiento_padre;
        $nacionalidadpadre=$this->nacionalidad_padre;
        $lugarnacimientopadre=$this->lugar_nacimiento_padre;
        $DPIpadre=$this->DPI_padre;
        $celularpadre=$this->celular_padre;
        $telefonopadre=$this->telefono_padre;
        $direccionresidencia=$this->direccion_residencia;
        $correopadre=$this->correo_padre;
        $this->profesionpadre=$this->profesion_padre;
        $lugar_profesion_padre=$this->lugar_profesion_padre;
        $cargo_profesion_padre=$this->cargo_profesion_padre;
        $religion_padre=$this->religion_padre;
        $NIT_padre=$this->NIT_padre;
        $this->vive_con_elpadre=$this->vive_con_elpadre;
        $nombre_madre=$this->nombre_madre;
        $fechana_madre=$this->fechana_madre;
        $nacionalidad_madre=$this->nacionalidad_madre;
        $lugar_nacimiento_madre=$this->lugar_nacimiento_madre;
        $this->estadocivilma=$this->estadocivilma;
        $DPI_madre=$this->DPI_madre;
        $telefono_madre=$this->telefono_madre;
        $celular_madre=$this->celular_madre;
        $direccion_residenciamadre=$this->direccion_residenciamadre; 
        $correo_madre=$this->correo_madre;
        $rofesion_madre=$this->profesion_madre;
        $lugar_prof_madre=$this->lugar_prof_madre;
        $cargo_madre=$this->cargo_madre; 
        $religion_madre=$this->religion_madre;
        $this->vive_madre=$this->vive_madre;
        $NIT_madre=$this->NIT_madre;
        $this->tiene_alergia=$this->tiene_alergia;
        if($this->Especifique_alerg==""){
            $this->Especifique_alerg=null;  
        }
            else{
                $this->Especifique_alerg=$this->Especifique_alerg;
        }
        if($this->nombreaseguradora==""){
                $this->nombreaseguradora=null;  
            }
            else{
                    $nombreaseguradora=$this->nombreaseguradora;
        }
        $this->nombreencargado=$this->nombre_encargado;
        $poliza=$this->poliza;
        $carneseguro=$this->carne_seguro;
        $codigofam=$this->codigo_fam;
        $nombrefam=$this->nombre_fam;
        if($this->Especifique_medi==""){
            $this->Especifique_medi=null;  
        }
            else{
                $Especifique_medi=$this->Especifique_medi;
        }
        if($this->Especifique_ali==""){
                $this->Especifique_ali=null;  
            }
            else{
                    $Especifique_ali=$this->Especifique_ali;
        }

        
        DB::beginTransaction();

        $inscripcion_datos=DB::table('TB_PRE_INFO')->insert(
            [
                'ID_PRE'=>$this->id_pre_ins,
                'HERMANOS_COLE'=>$this->confi,
                'GRADO_HERMANOS_COLE'=>$this->grados_selecionados,
                'AÑO_1R_INGRESO'=>$añoingreso,
                'GRADO_1R_INGRESO'=>$gradoprimeringreso,
                'NOMB_PADRE'=>$nombrepadre,
                'FECHA_N_PADRE'=>$nacimientopadre,
                'NACIONALIDAD_PADRE'=>$nacionalidadpadre,
                'LUGAR_NACIMIENTO_PADRE'=>$lugarnacimientopadre,
                'ESTADO_CIVIL_P'=> $this->estadocivil,
                'VIVE_CON_LA_MADRE'=> $this->vive_madre,
                'DPI_PADRE'=>$DPIpadre,
                'TELEFONO_PADRE'=>$telefonopadre,
                'CELULAR_PADRE'=>$celularpadre,
                'DIRECCION_RESIDENCIA_P'=>$direccionresidencia,
                'CORREO_PADRE'=>$correopadre,
                'PROFECION_PADRE'=>$this->profesionpadre,
                'LUGAR_TRABAJO_P'=>$lugar_profesion_padre,
                'CARGO_PADRE'=>$cargo_profesion_padre,
                'RELIGION_PADRE'=>$religion_padre,
                'NIT_PADRE'=>$NIT_padre,
                'VIVE_CON_EL_PADRE'=>$this->vive_con_elpadre,
                'NOMB_MADRE'=>$nombre_madre,
                'FECHA_N_MADRE'=>$fechana_madre,
                'NACIONALIDAD_MADRE'=>$nacionalidad_madre,
                'LUGAR_NACIMIENTO_MADRE'=>$lugar_nacimiento_madre,
                'ESTADO_CIVIL_M'=>$this->estadocivilma,
                'DPI_MADRE'=>$DPI_madre,
                'TELEFONO_MADRE'=>$telefono_madre,
                'CELULAR_MADRE'=>$celular_madre,
                'DIRECCION_RESIDENCIA_M'=>$direccion_residenciamadre, 
                'CORREO_MADRE'=>$correo_madre,
                'PROFECION_MADRE'=>$rofesion_madre,
                'LUGAR_TRABAJO_M'=>$lugar_prof_madre,
                'CARGO_MADRE'=>$cargo_madre,
                'ALERG_MEDICAMENTO'=>$this->medicamento,
                'ALERG_ALIMENTO'=>$this->alimento,
                'RELIGION_MADRE'=>$religion_madre,
                'NIT_MADRE'=>$NIT_madre,
                'ESPECIFICAR_ALERG_ME'=>$this->Especifique_medi,
                'ESPECIFICACION_ALERG_AL'=>$this->Especifique_ali,
                'ENFERMEDADES_ALERGIAS'=>$this->tiene_alergia,
                'ESPECIFICACION_ENF_O_ALERG'=>$this->Especifique_alerg,
                'VACUNAS'=>$this->vacunas,
                'ALUMNO_ASEGURADO'=>$this->alumno_asegurado,
                'ASEGURADORA'=>$this->nombre_aseguradora,
                'POLIZA_SEGURO'=>$poliza,
                'NO_CARNET_SEGURO'=>$this->carne_seguro,
                'SALIDA_SOLO'=>$this->solo_alumno,
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
                $this->op=null;
                $nuevo_estado=4;
                $elevar=DB::table('TB_PRE_INS')
                ->where('ID_PRE', $this->id_pre_ins)
                ->update(
                    [
 
                     'ESTADO_PRE_INS' => $nuevo_estado,
 
                    ]);
                $this->validar_info = 1;
                if($elevar){
                    $this->estado_elevado=1;
                }
                else{
                    $this->estado_elevado=0;
                }
            }
            else{
                DB::rollback();
                $this->validar_info = 0;
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
        $this->solo_alumno=$solo_alumno;
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

    Public function obt_id_pre($id,$no){
        $id_pre=$id;
        $id_gest=$no;
        $sql='SELECT * FROM TB_PRE_INS WHERE ID_PRE=?';
        $estactr=DB:: select($sql, array($id_pre));
        if($estactr !=null){
            foreach($estactr as $estac)
            {
                $this->id_pre_ins=$estac->ID_PRE;
                $this->id_no_gest=$estac->NO_GESTION;
            }
        }  
    }

    public function ins_contrato(){
        if($this->validate([
            'archivo' => 'required',         
        ])==false){
            $error="no encontrado";
            session(['message'=>'no encontrado']);
            return back()->withErrors(['error' => 'Validar el input vacio']);
        }
        else{
            $archivo="";
            if($this->archivo!=null){
                if($this->archivo->getClientOriginalExtension()=="jpg" or $this->archivo->getClientOriginalExtension()=="png" or $this->archivo->getClientOriginalExtension()=="jpeg"){
                    $archivo = "img".time().".".$this->archivo->getClientOriginalExtension();
                    $this->arch=$archivo;
                    $this->archivo->storeAS('imagen/pdf_diaco/', $this->arch,'public_up');
                    $this->formato=1;
                }
                elseif($this->archivo->getClientOriginalExtension()=="mp4" or $this->archivo->getClientOriginalExtension()=="mpeg"){
                    $archivo = "vid".time().".".$this->archivo->getClientOriginalExtension();
                    $this->arch=$archivo;
                    $this->archivo->storeAS('imagen/pdf_diaco/', $this->arch,'public_up');
                    $this->formato=2;
                }
                elseif($this->archivo->getClientOriginalExtension()=="pdf"){
                    $archivo = "pdf".time().".".$this->archivo->getClientOriginalExtension();
                    $this->arch=$archivo;
                    $this->archivo->storeAS('imagen/pdf_diaco/', $this->arch,'public_up');
                    $this->formato=3;
                }
            }
        $id_pre_ins=$this->id_pre_ins;
        $id_no_gest=$this->id_no_gest;


        DB::beginTransaction();

        $contrato_diaco=DB::table('tb_pre_diaco')->insert(
            [
                'ID_PRE'=>$id_pre_ins,
                'CONTRATO'=>$archivo,
                'NO_GESTION'=>$id_no_gest,
            
                ]
            );
            if($contrato_diaco){
                DB::commit();
                
                $this->op=null;
                $nuevo_estado=6;
                $elevar=DB::table('TB_PRE_INS')
                ->where('ID_PRE', $this->id_pre_ins)
                ->update(
                    [
 
                     'ESTADO_PRE_INS' => $nuevo_estado,
 
                    ]);
                    if($elevar){
                        $this->mensaje_diaco='Insertado correctamente';
                    }
                    else{
                        $this->mensaje_diaco1='No se inserto correctamente';
                    }

            }
            else{
                DB::rollback();
                $this->mensaje_diaco1='No se inserto correctamente';
            }
        }
    }

    Public function obt_arch_contrato($id,$no){
        $id_pre=$id;
        $id_gest=$no;
        $sql='SELECT * FROM tb_pre_diaco WHERE ID_PRE=?';
        $estactr=DB:: select($sql, array($id_pre));
        if($estactr !=null){
            foreach($estactr as $estac)
            {
                $this->id_pre_ins_arch=$estac->ID_PRE;
                $this->id_no_gest_arch=$estac->NO_GESTION;
                $this->archivo_cdiaco=$estac->CONTRATO;
            }
        }  
    }
}
