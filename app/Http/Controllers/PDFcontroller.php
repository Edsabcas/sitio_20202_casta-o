<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;



class PDFcontroller extends Controller
{
    
    //
    public function PDF_export(){
        $id_pre = session('id_pre');
        $sql= 'SELECT * FROM  TB_PRE_INS WHERE ID_PRE=?';
        $preins=DB::select($sql, array($id_pre));
        $sql= 'SELECT * FROM  TB_PRE_INFO WHERE ID_PRE=?';
        $preinfo=DB::select($sql, array($id_pre));
        $año_en_curso=date('Y-m-d');
        $fecha_separada=explode("-", $año_en_curso);
        $contrato_correlativo=($fecha_separada[0]+1)."-00";
        if($preins!=null){
            foreach($preins as $prein){   
                $datos_padre=$prein->ESTADO_PRE_INS;
                $datos_padre2=$prein->ID_PRE;
                $datos_padre3=$prein->NACIONALIDAD_ES;     
                $datos_padre4=$prein->ESTADO_CIVIL_EN_ES;
                $datos_padre5=$prein->DPI_EN_ES;
                $datos_padre6=$prein->DIRECCION_EN_ES;
                $datos_padre7=$prein->TEL_EN_ES;//telefono de casa 
                $datos_padre8=$prein->CEL_EN_ES;//oficina 
                $datos_padre9=$prein->CELULAR_ES;//celular
                $datos_padre10=$prein->CORREO_EN_ES;  
                $datos_padre11=$prein->FEC_NAC_EN_ES;
                $datos_padre12=$prein->NOMBRE_ENCARGADO_ES;
                $datos_padre13=$prein->NOMBRE_ES;  
                if($prein->NO_CORRELATIVO_P1==null or $prein->NO_CORRELATIVO_P1==""){
                    

                    DB::beginTransaction();
                    $elevar=DB::table('TB_PRE_INS')
                ->where('ID_PRE', $id_pre)
                ->update(
                    [
 
                     'NO_CORRELATIVO_P1' => $contrato_correlativo,
 
                    ]);
                    if($elevar){
                        DB::commit();
                        $validar=1;
                    }
                    else{
                        DB::rollback();
                        $validar=2;
                    }
                }  
                //otra correlativa
                if($prein->NO_CORRELATIVO_P2==null){
                    $correlativo_valor=DB::table('TB_PRE_INS')

               ->where('ID_PRE', $id_pre)

               ->update(

                   [

                    'NO_CORRELATIVO_P2' => 1,

                   ]);

                }
                

                    
            } 
            
        }
        $sql= 'SELECT * FROM  TB_PRE_INS WHERE ID_PRE=?';
        $preinz=DB::select($sql, array($id_pre));
        foreach($preinz as $preinzz){
            if($preinzz->NO_CORRELATIVO_P2==1){

                $sql='SELECT MAX(TB_PRE_INS.NO_CORRELATIVO_P2+1) AS NO_CORRELATIVO_P2 FROM TB_PRE_INS';
                $consulta_val=DB::select($sql);
    
                foreach($consulta_val as $consulta_valor){
                    $consulta_correlativa=$consulta_valor->NO_CORRELATIVO_P2;
                }
    
                DB::beginTransaction();
                $correlativo2=DB::table('TB_PRE_INS')
            ->where('ID_PRE', $id_pre)
            ->update(
                [
    
                 'NO_CORRELATIVO_P2' => $consulta_correlativa,
    
                ]);
                if($correlativo2){
                    DB::commit();
                    $validar=1;
                }
                else{
                    DB::rollback();
                    $validar=2;
                }
            
            }
        }
        

        $sql= 'SELECT * FROM  TB_PRE_INS WHERE ID_PRE=?';
        $preinss=DB::select($sql, array($id_pre));
        if($preinss!=null){
            foreach($preinss as $preinz){
                $datos_padre14=$preinz->NO_CORRELATIVO_P1;
                $datos_padre15=$preinz->NO_CORRELATIVO_P2;
                $datos_padre16=$preinz->PROFESION_EN_ES;
                $datos_padre17=$preinz->GRADO_ING_ES;
            }
        }

        $sql = "SELECT * FROM cuentaestudiante where ID_PRE=?";
                $cuentas= DB::select($sql,array($id_pre));
                $monto="";
                $monto2="";
                $monto_anual="";
        if($cuentas!=null){
            foreach($cuentas as $cuenta){
                $monto=$cuenta->MONTO_INSCRIPCION;
                $monto2=$cuenta->MONTO_MENSUAL;
            }
            $monto_anual=$monto2*10;
        }

        $sql = "SELECT * FROM tb_grados WHERE ID_GR=?";
                $grados= DB::select($sql,array($datos_padre17));
                foreach($grados as $grado){
                    $datos_padre18=$grado->GRADO;
                    $datos_padre19=$grado->NIVEL_ACADEMICO;

                }

        $sql = "SELECT * FROM tb_nvlacademico WHERE ID_NVL=?";
                $grados= DB::select($sql,array($datos_padre19));
                foreach($grados as $grado){
                    $datos_padre18=$grado->GRADO;
                    $datos_padre19=$grado->NIVEL_ACADEMICO;

                }    
                
        $nacimiento=explode("-", $datos_padre11);
        $nacimiento_total=$fecha_separada[0]-$nacimiento[0];
        $datos=array($fecha_separada[0],$fecha_separada[1],$fecha_separada[2], $datos_padre, $datos_padre2, $datos_padre3, $datos_padre4, $datos_padre5, 
        $datos_padre6, $datos_padre7, $datos_padre8, $datos_padre9, $datos_padre10,$datos_padre12,$datos_padre13, $nacimiento_total, $datos_padre14, $datos_padre15,
        $monto, $monto_anual, $datos_padre16, $datos_padre18);
        $pdf = PDF::loadView('estados.PDFexport.PDFDIACO', compact('datos'));
        return $pdf->stream();
        return view('estados.PDFexport.PDFDIACO');
    }

    public function PDF_export2(){
        $pdf = PDF::loadView('estados.PDFexport.PDFReglas');
        return $pdf->stream();
        return view('estados.PDFexport.PDFReglas');
    }
}
