<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class InsComponent extends Component
{
    public $gradoin,$nombre_es,$f_nacimiento_es,$genero,$cui_es,$codigo_pe_es,$nac_es,$lug_nac_es,$tel_es,$cel_es,$direccion_es,$religion_es;
    public $nombre_en,$fnacimiento_en,$dpi_en,$extentido_en,$es_civil_en,$direccion_en,$tel_casa_en,$cel_en,$correo_en,$religion_en;
    public $a,$mensaje,$gradose,$correo_en2,$tipo,$profesion_en;
    public $val,$val1,$gestion,$errorfecha,$tipo_ins;
    public function render()
    {
        if($this->f_nacimiento_es!=null)
        {
            $valores = explode('-', $this->f_nacimiento_es);
            if(count($valores) == 3 && checkdate($valores[1], $valores[2], $valores[0]))
            {
                $this->errorfecha=0;
                //return true;
            }else{
                $this->errorfecha=1;
               // return false;
            }
           
        }
        if($this->tipo!=null && $this->tipo!="")
        {
            if($this->tipo=="Presencial"){
                $sql="SELECT ID_GR,GRADO,JORNADA FROM tb_grados where JORNADA='1'";
                $grados=DB::select($sql);
                
            }else{
                $sql="SELECT ID_GR,GRADO,JORNADA FROM tb_grados where JORNADA='4'";
                $grados=DB::select($sql);
                
            }

        return view('livewire.ins-component', compact('grados'));
        }
        else{

            return view('livewire.ins-component');
        }

    }

    public function valfecha(){
        
    }
    public function va1l(){
        $this->val=1;
        unset($this->mensaje);
    }
    public function selgrado($id,$gra){
        $this->gradose=$gra;
        $this->gradoin=$id;
    }
    public function asigrad($gra){
        $this->gradoin=="";
        $this->gradoin=$gra;
    }

    public function gene($id){
        $this->genero=$id;
    }
    public function val1(){
        if($this->validate([
            'gradoin' => 'required',
            ])==false){
            $mensaje="no encontrado";
           session(['message' => 'no encontrado']);
            return  back()->withErrors(['mensaje'=>'Validar el input vacio']);
        }else{
            $this->a=1;
        }
    }
    
    public function val2(){
        if($this->validate([
            'nombre_es' => 'required',
            'f_nacimiento_es' => 'required',
            'genero' => 'required',
            'cui_es' => 'required',
            'codigo_pe_es' => 'required',
            'nac_es' => 'required',
            'lug_nac_es' => 'required',
            'cel_es' => 'required',
            'direccion_es' => 'required',
            'religion_es' => 'required',


            ])==false){
            $mensaje="no encontrado";
           session(['message' => 'no encontrado']);
            return  back()->withErrors(['mensaje'=>'Validar el input vacio']);
        }else{
            $this->a=2;
        }
    }
    public function valmodalidad(){
        if($this->validate([
            'tipo' => 'required',
            ])==false){
            $mensaje="no encontrado";
           session(['message' => 'no encontrado']);
            return  back()->withErrors(['mensaje'=>'Validar el input vacio']);
        }else{
            $this->a=5;
        }
    }
    public function valtipoins(){
        if($this->validate([
            'tipo_ins' => 'required',
            ])==false){
            $mensaje="no encontrado";
           session(['message' => 'no encontrado']);
            return  back()->withErrors(['mensaje'=>'Validar el input vacio']);
        }else{
            $this->a=6;
        }
    }
    public function val3(){
        if($this->validate([
            'nombre_en' => 'required',
            'fnacimiento_en' => 'required',
            'dpi_en' => 'required',
            'extentido_en' => 'required',
            'es_civil_en' => 'required',
            'direccion_en' => 'required',
            'tel_casa_en' => 'required',
            'cel_en' => 'required',
            'correo_en' => 'required',
            'religion_en' => 'required',
            'profesion_en'=>'required',
            ])==false){
            $mensaje="no encontrado";
           session(['message' => 'no encontrado']);
            return  back()->withErrors(['mensaje'=>'Validar el input vacio']);
        }else{
           // $this->a=3;
            $this->val1=2;
        }
    }
    public function crearpreins(){
        if($this->validate([
            'gradoin' => 'required',
            'nombre_es' => 'required',
            'f_nacimiento_es' => 'required',
            'genero' => 'required',
            'cui_es' => 'required',
            'codigo_pe_es' => 'required',
            'nac_es' => 'required',
            'lug_nac_es' => 'required',
            'cel_es' => 'required',
            'direccion_es' => 'required',
            'religion_es' => 'required',
            'nombre_en' => 'required',
            'fnacimiento_en' => 'required',
            'dpi_en' => 'required',
            'extentido_en' => 'required',
            'es_civil_en' => 'required',
            'direccion_en' => 'required',
            'tel_casa_en' => 'required',
            'cel_en' => 'required',
            'correo_en' => 'required',
            'religion_en' => 'required',
            'profesion_en'=> 'required',
            'tipo_ins'=> 'required',
            
            ])==false){
            $mensaje="no encontrado";
           session(['message' => 'no encontrado']);
            return  back()->withErrors(['mensaje'=>'Validar el input vacio']);
        }else{

            DB::beginTransaction();
            $caracteres = '0123456789';
            $aleatoria="";
            for($x = 0; $x < 10; $x++){
                $aleatoria = substr(str_shuffle($caracteres), 0, 6);
               // echo $aleatoria . "\n";
            }
            $no_gestion=$aleatoria;
            $this->gestion=$no_gestion;
            $pre=DB::table('TB_PRE_INS')->insert(
                [
                    'NOMBRE_ES'=> $this->nombre_es,
                    'FEC_NAC'=> $this->f_nacimiento_es,
                    'GENERO'=> $this->genero,
                    'CUI_ES'=> $this->cui_es,
                    'CODIGO_PER'=> $this->codigo_pe_es,
                    'NACIONALIDAD_ES'=> $this->nac_es,
                    'LUGAR_NAC_ES'=> $this->lug_nac_es,
                    'CELULAR_ES'=> $this->cel_es,
                    'DIRECCION_RES_ES'=> $this->direccion_es,
                    'RELIGION_ES'=> $this->religion_es,
                    'NOMBRE_ENCARGADO_ES'=> $this->nombre_en,
                    'FEC_NAC_EN_ES'=> $this->fnacimiento_en,
                    'DPI_EN_ES'=> $this->dpi_en,
                    'EXTENDIDO_DPI_EN_ES'=> $this->extentido_en,
                    'ESTADO_CIVIL_EN_ES'=> $this->es_civil_en,
                    'DIRECCION_EN_ES'=> $this->direccion_en,
                    'TEL_EN_ES'=> $this->tel_casa_en,
                    'CEL_EN_ES'=> $this->cel_en,
                    'CORREO_EN_ES'=> $this->correo_en,
                    'CORREO_EN_ES2'=> $this->correo_en2,
                    'RELIGION_EN_ES'=> $this->religion_en,
                    'GRADO_ING_ES'=> $this->gradoin,
                    'ESTADO_PAGO'=> 0,
                    'ESTADO_PRE_INS'=>0,
                    'NO_GESTION'=> $no_gestion,
                    'FECHA_REGISTRO'=>  date("Y-m-d H:i:s"),
                    'FECHA_CAMBIOS_REG'=>  date("Y-m-d H:i:s"),
                    'MODALIDAD_EST'=> $this->tipo,
                    'PROFESION_EN_ES'=> $this->profesion_en,
                    'TIPO_INS'=> $this->tipo_ins,
                    
                ]
            );

                   if($pre){

             
            $subject = "No responder (Notificación Pre-Ins.Castaño)";
            $for = $this->correo_en;
            $arreglo= array($this->nombre_es,$this->codigo_pe_es,$this->gradose,$this->gestion);
            Mail::send('VistaCorreo.vista',compact('arreglo'), function($msj) use($subject,$for){
                $msj->from("ingresos@colegioelcastano.edu.gt","ColegioElCastaño");
                $msj->subject($subject);
                $msj->to($for);
              //  $msj->attach('images/a.jpg');
               
            });

            if($this->correo_en2!=null && $this->correo_en2!="" && $this->correo_en2!="."){
                if(false !== strpos($this->correo_en2, "@") && false !== strpos($this->correo_en2, ".")){
                    $subject = "No responder (Notificación Pre-Ins.Castaño)";
                    $for = $this->correo_en2;
                    $arreglo= array($this->nombre_es,$this->codigo_pe_es,$this->gradose,$this->gestion);
                    Mail::send('VistaCorreo.vista',compact('arreglo'), function($msj) use($subject,$for){
                        $msj->from("ingresos@colegioelcastano.edu.gt","ColegioElCastaño");
                        $msj->subject($subject);
                        $msj->to($for);
                      //  $msj->attach('images/a.jpg');
                       
                    });
                }
    
            }
            DB::commit();  
            $this->reset();

            $this->mensaje=1;
            
        }
        else{
            //$this->reset();
            DB::rollback();
            $this->mensaje=2;
        }
        }
    }

   
}
