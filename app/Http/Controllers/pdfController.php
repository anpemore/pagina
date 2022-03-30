<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
use PDF;

class pdfController extends Controller
{
    public function PDF(){
       //$pdf= \PDF::loadView('prueba');
       //return $pdf->download('prueba.pdf');
       //return $pdf->stream('prueba.pdf');

       $prueba=App\Models\Nota::all();
       $pdf=PDF::loadView('prueba',compact('prueba'));
       return $pdf->stream('prueba.pdf');
   
    }
    

}
