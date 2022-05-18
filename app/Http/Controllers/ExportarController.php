<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Invoice;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Exports\ResumenExport;
use Maatwebsite\Excel\Facades\Excel;



class ExportarController extends Controller
{
    public function export() 
    {
        return Excel::download(new ResumenExport, 'resumen.xlsx');
    }
}
