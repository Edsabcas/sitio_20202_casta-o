<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;



class PDFcontroller extends Controller
{
    
    //
    public function PDF_export(){
        $sql= 'SELECT * FROM tb_estudiantes';
        $this->preinfo=DB::select($sql);
        $pdf = PDF::loadView('estados.PDFexport.PDFDIACO');
        return $pdf->stream();
        return view('estados.PDFexport.PDFDIACO');
    }
}
