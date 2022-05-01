<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class controlerCliente extends Controller
{
   public function updates(Request $request){


      $resultado = DB::table('paciente')
              ->where('idpaciente', $request->id)
              ->update(['nompaciente' => $request->nombre],['apepaciente' => $request->apellido]);
        return $resultado;
   }

//093-860-4916


}