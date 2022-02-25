<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrutaController extends Controller
{
    public function index(){
        //Esto es como un SELECT * FROM frutas
        $frutas = DB::table('frutas')
            ->orderBy('id','desc')
            ->get();
        return view('fruta.index',['frutas'=>$frutas]);
    }
    public function detalle($id){
        $fruta = DB::table('frutas')->where('id','=',$id)->first();
        return view('fruta.detalle',['fruta'=>$fruta]);
    }
    public function create(){
        return view('fruta.crear');
    }
    public function save(Request $request){
        $fruta=DB::table('frutas')
            ->insert(
                array(
                    'nombre'=>$request->input('nombre'),
                    'descripcion'=>$request->input('descripcion'),
                    'precio'=>$request->input('precio'),
                    'fecha'=>date('Y-m-d')
                )
            );
        return redirect()->action([FrutaController::class, 'index'])->with('status','Fruta creada correctamente');
    }
    public function delete($id){
        $fruta = DB::table('frutas')->where('id',$id)->delete();
        return redirect()->action([FrutaController::class, 'index'])->with('status','Fruta Borrada correctamente');
    }
    public function edit($id){
        $fruta = DB::table('frutas')->where('id',$id)->first();
        return view('fruta.crear',['fruta'=>$fruta]);
    }
    public function update(Request $request,$id){
        $fruta = DB::table('frutas')
            ->where('id',$id)
            ->update(
                array(
                    'nombre'=>$request->input('nombre'),
                    'descripcion'=>$request->input('descripcion'),
                    'precio'=>$request->input('precio'),
                    'fecha'=>date('Y-m-d')
                )
            );
            return redirect()->action([FrutaController::class, 'index'])->with('status','Fruta actualizada correctamente');
    }
}
