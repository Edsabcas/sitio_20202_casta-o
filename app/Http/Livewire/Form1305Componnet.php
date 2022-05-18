<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;

class Form1305Componnet extends Component
{
    public $gradoin,$tipo,$pre,$pre_cumplir, $pre_medidas;
    public $pre_imple,$pre_bus,$pre_zona,$virtual_cone;
    public $virtual_horario,$observa,$mensaje,$mensaje2;
    public function render()
    {
        if($this->tipo!=null && $this->tipo=='Presencial'){
            $this->pre=1;
        }
        else if($this->tipo!=null && $this->tipo=='Virtual'){
            $this->pre=2;
        }

        return view('livewire.form1305-componnet');
    }

    public function enviar(){

        if($this->pre==1){
            
            if($this->validate([
                'gradoin' => 'required',
                'tipo' => 'required',
                'pre_cumplir' => 'required',
                'pre_medidas' => 'required',
                'pre_imple' => 'required',
                'pre_bus' => 'required',


                ])==false){
                $mensaje="no encontrado";
               session(['message' => 'no encontrado']);
                return  back()->withErrors(['mensaje'=>'Validar el input vacio']);
            }else{
                $a=4;

                if($this->pre_bus!=null && $this->pre_bus=="Si"){
                    if($this->validate([
                        'pre_zona' => 'required',        
                        ])==false){
                        return  back()->withErrors(['mensaje'=>'Validar el input vacio']);
                    }else{
                        $a=5;
                    }
                }
                $sql='SELECT ifnull(MAX(ID_RESPUESTA+1),0) AS id FROM TB_RESPUESTAS_PRINCIPAL';
                $valor=DB::select($sql);
                $id=0;
                foreach($valor as $val){
                    $id=$val->id;
                }  
                if($id==0){
                    $id=1;
                }
                //$this->a=1;
                DB::beginTransaction();
                $tb1=DB::table('TB_RESPUESTAS_PRINCIPAL')->insert(
                    [
                        'ID_RESPUESTA'=>$id,
                        'FECHA_REALIZADO'=>date('Y-m-d H:i:s'),
                    ]
                );
                if($a==4){
                    //1
                        $tb21=DB::table('TB_RESPUESTAS_DETALLE')->insert(
                            [
                                'ID_RESPUESTA'=>$id,
                                'ID_PREGUNTA'=>1,
                                'RESPUESTA'=>$this->gradoin,
                            ]
                        );
                          //2
                        $tb22=DB::table('TB_RESPUESTAS_DETALLE')->insert(
                            [
                                'ID_RESPUESTA'=>$id,
                                'ID_PREGUNTA'=>2,
                                'RESPUESTA'=>$this->tipo,
                            ]
                        );
                          //3
                        $tb23=DB::table('TB_RESPUESTAS_DETALLE')->insert(
                            [
                                'ID_RESPUESTA'=>$id,
                                'ID_PREGUNTA'=>3,
                                'RESPUESTA'=>$this->pre_cumplir,
                            ]
                        );
                        //4
                        $tb24=DB::table('TB_RESPUESTAS_DETALLE')->insert(
                            [
                                'ID_RESPUESTA'=>$id,
                                'ID_PREGUNTA'=>4,
                                'RESPUESTA'=>$this->pre_medidas,
                            ]
                        );
                        //5
                        $tb25=DB::table('TB_RESPUESTAS_DETALLE')->insert(
                            [
                                'ID_RESPUESTA'=>$id,
                                'ID_PREGUNTA'=>5,
                                'RESPUESTA'=>$this->pre_imple,
                            ]
                        );
                        //6
                        $tb26=DB::table('TB_RESPUESTAS_DETALLE')->insert(
                            [
                                'ID_RESPUESTA'=>$id,
                                'ID_PREGUNTA'=>6,
                                'RESPUESTA'=>$this->pre_bus,
                            ]
                        );
                        $tb28=DB::table('TB_RESPUESTAS_DETALLE')->insert(
                            [
                                'ID_RESPUESTA'=>$id,
                                'ID_PREGUNTA'=>10,
                                'RESPUESTA'=>$this->observa,
                            ]
                        );

                }
               elseif($a==5){
                $tb21=DB::table('TB_RESPUESTAS_DETALLE')->insert(
                    [
                        'ID_RESPUESTA'=>$id,
                        'ID_PREGUNTA'=>1,
                        'RESPUESTA'=>$this->gradoin,
                    ]
                );
                  //2
                $tb22=DB::table('TB_RESPUESTAS_DETALLE')->insert(
                    [
                        'ID_RESPUESTA'=>$id,
                        'ID_PREGUNTA'=>2,
                        'RESPUESTA'=>$this->tipo,
                    ]
                );
                  //3
                $tb23=DB::table('TB_RESPUESTAS_DETALLE')->insert(
                    [
                        'ID_RESPUESTA'=>$id,
                        'ID_PREGUNTA'=>3,
                        'RESPUESTA'=>$this->pre_cumplir,
                    ]
                );
                //4
                $tb24=DB::table('TB_RESPUESTAS_DETALLE')->insert(
                    [
                        'ID_RESPUESTA'=>$id,
                        'ID_PREGUNTA'=>4,
                        'RESPUESTA'=>$this->pre_medidas,
                    ]
                );
                $tb25=DB::table('TB_RESPUESTAS_DETALLE')->insert(
                    [
                        'ID_RESPUESTA'=>$id,
                        'ID_PREGUNTA'=>5,
                        'RESPUESTA'=>$this->pre_imple,
                    ]
                );
                $tb26=DB::table('TB_RESPUESTAS_DETALLE')->insert(
                    [
                        'ID_RESPUESTA'=>$id,
                        'ID_PREGUNTA'=>6,
                        'RESPUESTA'=>$this->pre_bus,
                    ]
                );

                $tb27=DB::table('TB_RESPUESTAS_DETALLE')->insert(
                    [
                        'ID_RESPUESTA'=>$id,
                        'ID_PREGUNTA'=>7,
                        'RESPUESTA'=>$this->pre_zona,
                    ]
                );

                $tb28=DB::table('TB_RESPUESTAS_DETALLE')->insert(
                    [
                        'ID_RESPUESTA'=>$id,
                        'ID_PREGUNTA'=>10,
                        'RESPUESTA'=>$this->observa,
                    ]
                );

               }
                if($tb1 && $tb21 && $tb22 && $tb23 && $tb24 && $tb25 && $tb26){
            
                    DB::commit();
                    $this->reset();
                    $this->mensaje="Insertado correctamente";
                   // return view('livewire.anuncios-admin');
        
                }
                else{
                    DB::rollback();
                    $this->mensaje2="Insertado correctamente";
                }
           
                
            }

        }
        elseif($this->pre==2){
            if($this->validate([
                'gradoin' => 'required',
                'tipo' => 'required',
                'virtual_cone' => 'required',
                'virtual_horario' => 'required',
                ])==false){
                $mensaje="no encontrado";
               session(['message' => 'no encontrado']);
                return  back()->withErrors(['mensaje'=>'Validar el input vacio']);
            }else{
                $sql='SELECT ifnull(MAX(ID_RESPUESTA+1),0) AS id FROM TB_RESPUESTAS_PRINCIPAL';
                $valor=DB::select($sql);
                $id=0;
                foreach($valor as $val){
                    $id=$val->id;
                }  
                if($id==0){
                    $id=1;
                }

                DB::beginTransaction();
                $tb1=DB::table('TB_RESPUESTAS_PRINCIPAL')->insert(
                    [
                        'ID_RESPUESTA'=>$id,
                        'FECHA_REALIZADO'=>date('Y-m-d H:i:s'),
                    ]
                );

                $tb21=DB::table('TB_RESPUESTAS_DETALLE')->insert(
                    [
                        'ID_RESPUESTA'=>$id,
                        'ID_PREGUNTA'=>1,
                        'RESPUESTA'=>$this->gradoin,
                    ]
                );
                  //2
                $tb22=DB::table('TB_RESPUESTAS_DETALLE')->insert(
                    [
                        'ID_RESPUESTA'=>$id,
                        'ID_PREGUNTA'=>2,
                        'RESPUESTA'=>$this->tipo,
                    ]
                );


                $tb23=DB::table('TB_RESPUESTAS_DETALLE')->insert(
                    [
                        'ID_RESPUESTA'=>$id,
                        'ID_PREGUNTA'=>8,
                        'RESPUESTA'=>$this->virtual_cone,
                    ]
                );



                $tb24=DB::table('TB_RESPUESTAS_DETALLE')->insert(
                    [
                        'ID_RESPUESTA'=>$id,
                        'ID_PREGUNTA'=>9,
                        'RESPUESTA'=>$this->virtual_horario,
                    ]
                );

                $tb25=DB::table('TB_RESPUESTAS_DETALLE')->insert(
                    [
                        'ID_RESPUESTA'=>$id,
                        'ID_PREGUNTA'=>10,
                        'RESPUESTA'=>$this->observa,
                    ]
                );


                if($tb1 && $tb21 && $tb22 && $tb23 && $tb24 && $tb25){
            
                    DB::commit();
                    $this->reset();
                    $this->mensaje="Insertado correctamente";
                   // return view('livewire.anuncios-admin');
        
                }
                else{
                    DB::rollback();
                    $this->mensaje2="Insertado correctamente";
                }


            }
        }

    }
}
