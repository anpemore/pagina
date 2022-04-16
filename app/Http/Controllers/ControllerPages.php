<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;
use App;
class ControllerPages extends Controller
{
    public function inicio(){
        $notas =App\Models\Nota::paginate(3);
        return View('welcome',compact('notas'));
    }
    public function plantilla(){
        return View('plantilla');
    }

/*
public function updateNota(Request $request, $id){
  $addNota = App\Models\Nota::findOrFail($id);
  $addNota->nombre=$request->nombre;
  $addNota->nombre=$request->descripcion;
  $addNota->save();

  return back();

}*/

public function producto(){
  return View('producto');
}

    public function addNota(Request $request){
       // return $request->all();
        $addNota = new  App\Models\Nota;
        $addNota->id=$request->id;
        $addNota->nombre=$request->nombre;
        $addNota->descripcion=$request->descripcion;
        $addNota->save();
        return back()->with('mensaje','Operacion Exitosa');
    }

public function updateNota(Request $request, $id){
    $addNota = App\Models\Nota::findOrFail($id);
    $addNota->nombre=$request->nombre;
    $addNota->descripcion=$request->descripcion;
    $addNota->save();
    return back();


}


    public function addcrear(Request $request){
       // return $request->all();
       $request->validate(['id'=>'required',
       'nombre'=>'required','apellido'=>'required']);
       $datosNuevos = new  App\Models\Paciente;
       $datosNuevos->idpaciente = $request->id;
       $datosNuevos->nompaciente = $request->nombre;       
       $datosNuevos->apepaciente = $request->apellido;
       $datosNuevos->dirpaciente = $request->direccion;
       $datosNuevos->emailpaciente = $request->email;       
       $datosNuevos->save();

      return back()->with('mensaje','Operacion Exitosa');

    }

  public function ingresar(){
        return View('ingresar');
    } 

  public function detalles($id){
    $notas =App\Models\Nota::findOrFail($id);
        return View('detalles', compact('notas'));
    } 
//no esta funcionando aun esta funcion
  public function updatePasiente($id){
    $datos =App\Models\Nota::findOrFail($id);
    return View('ventanaactualizar', compact('datos'));
  }

  public function eliminar($id){
        $notas =App\Models\Nota::findOrFail($id);
        $notas->delete();
        return back()->with('mensaje','Registro fue eliminado');
  }
   
   public function consultar(){
    $notas =App\Models\Nota::paginate(3);
        return View('consultar',compact('notas'));
    }
  /*     
    public function consultar(){        
        $nombre=['Angel','Ramon','Manuela','Milagro','Maria'];
        //return view('arreglo',['nom'=>$nombre,'dato'=>$dato]);
        return view('arreglo',compact('nombre','dato'));         
    }*/
}