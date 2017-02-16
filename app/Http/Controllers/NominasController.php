<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Laracasts\Flash\Flash;

use App\User;
use App\Nomina;
use Carbon\Carbon;


class NominasController extends Controller
{
	public function index(){
		
		if (\Auth::user()->admin()) {
			$nominas = Nomina::all();
    		return view('admin.nominas.index')->with('nominas', $nominas);
		}
		return  redirect()->route('tesones.index');
	}

    public function create(){
    	return view('admin.nominas.create');
    }

    public function store(Request $request){
    	$nomina = new Nomina($request->all());
    	$nomina->fecha_emision = fecha_ymd($request->fecha_emision);
    	$nomina->save();

    	Flash::info('Nomina Generada exitosamente');

        return redirect()->route('info_nominas.index');
    }
    public function destroy($id){
    	$nomina = Nomina::find($id);
        $nomina->delete();

        Flash::error('La nomina ' . $nomina->nomina . ' ha sido borrada con exito!');
        return redirect()->route('info_nominas.index');
    }
}
