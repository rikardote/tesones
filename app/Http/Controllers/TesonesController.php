<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Laracasts\Flash\Flash;
use App\Teson;
use App\User;
use App\Cancelation;
use Carbon\Carbon;

class TesonesController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
		$user = \Auth::user();
    	$tesones = Teson::orderBy('fecha_emision', 'DESC')->where('user_id', '=', $user->id)->paginate(10);
    	return view('tesones.index')->with('tesones', $tesones)->with('user', $user);
    }

    public function show($id)
    {
    	$teson = Teson::find($id);
    	$user = User::find($teson->user_id);
    	$cancelaciones = Cancelation::where('teson_id', '=', $teson->id)->get();
    	return view('tesones.show')->with('teson', $teson)->with('user', $user)->with('cancelaciones', $cancelaciones);
    }
    public function create()
    {
    	return view('tesones.create');
    }
    public function edit($id)
    {
    	$teson = Teson::find($id);
    	return view('tesones.edit')->with('teson', $teson);
    }
    public function store(Request $request)
    {
    	$user = \Auth::user();
    	$teson = new Teson($request->all());
    	$teson->user_id = $user->id;
    	$teson->fecha_emision = fecha_ymd($request->fecha_emision);
    	$teson->fecha_elaboracion = Carbon::today();
    	$teson->save();
    	Flash::info('Teson Generado exitosamente');
        return redirect()->route('tesones.show',[$teson->id]);
    }
    public function update(Request $request, $id)
    {
    	$teson = Teson::find($id);
    	$teson->fill($request->all());
        $teson->save();
    	Flash::info('Teson modificado exitosamente');
        return redirect()->route('tesones.show',[$teson->id]);
    }
    public function cancelar($teson_id)
    {
    	$teson = Teson::find($teson_id);
    	$cancelaciones = Cancelation::where('teson_id', '=', $teson_id)->get();
    	return view('tesones.cancelaciones')->with('teson', $teson)->with('cancelaciones', $cancelaciones);
    }
    public function cancelar_store(Request $request, $teson_id)
    {
    	$cancelacion = new Cancelation($request->all());
    	$cancelacion->teson_id = $teson_id;
    	$cancelacion->save();
    	Flash::info('Cancelacion exitosa');
        return redirect()->route('cancelar.teson',[$teson_id]);
    }
  
}
