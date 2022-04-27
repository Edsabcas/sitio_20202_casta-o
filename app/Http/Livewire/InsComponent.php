<?php

namespace App\Http\Livewire;

use Livewire\Component;

class InsComponent extends Component
{
    public $gradoin,$nombre_es,$f_nacimiento_es,$genero,$cui_es,$codigo_pe_es,$nac_es,$lug_nac_es,$tel_es,$cel_es,$direccion_es,$religion_es;
    public $nombre_en,$fnacimiento_en,$dpi_en,$extentido_en,$es_civil_en,$direccion_en,$tel_casa_en,$cel_en,$correo_en,$religion_en;
    public $a;
    public $val,$val1;
    public function render()
    {
        if($this->val1==2){
            if($this->nombre_en=="" or $this->fnacimiento_en==""
            or $this->dpi_en=="" or $this->extentido_en==""
            or $this->es_civil_en=="" or $this->direccion_en==""
            or $this->tel_casa_en=="" or $this->cel_en==""
            or $this->correo_en=="" or $this->religion_en==""
                ){
                //$mensaje="no encontrado";
               //session(['message' => 'no encontrado']);
               $this->val1=0;
              // return  back()->withErrors(['mensaje'=>'Validar el input vacio']);
            }else{
               // $this->a=3;
                $this->val1=2;
            }
        }
        return view('livewire.ins-component');
    }

    public function va1l(){
        $this->val=1;
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
            ])==false){
            $mensaje="no encontrado";
           session(['message' => 'no encontrado']);
            return  back()->withErrors(['mensaje'=>'Validar el input vacio']);
        }else{
           
        }
    }
}
