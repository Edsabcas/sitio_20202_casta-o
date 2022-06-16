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
        $datos_padre="";
        $datos_padre2="";
        $datos_padre3="";
        $datos_padre4="";
        $datos_padre5="";
        $datos_padre6="";
        $datos_padre7="";
        $datos_padre8="";
        $datos_padre9="";
        $datos_padre10="";
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
            }
            
            
        }
        $año_en_curso=date('Y-m-d');
        $fecha_separada=explode("-", $año_en_curso);
        $nacimiento=explode("-", $datos_padre11);
        $nacimiento_total=$fecha_separada[0]-$nacimiento[0];
        $datos=array($fecha_separada[0],$fecha_separada[1],$fecha_separada[2], $datos_padre, $datos_padre2, $datos_padre3, $datos_padre4, $datos_padre5, 
        $datos_padre6, $datos_padre7, $datos_padre8, $datos_padre9, $datos_padre10,$datos_padre12,$datos_padre13, $nacimiento_total);
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
