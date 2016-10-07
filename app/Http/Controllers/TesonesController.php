<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Laracasts\Flash\Flash;
use App\Teson;
use App\User;
use Carbon\Carbon;

class TesonesController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function show($id)
    {
    	$teson = Teson::find($id);
    	$user = User::find($teson->user_id);
    	return view('tesones.show')->with('teson', $teson)->with('user', $user);
    }
    public function create()
    {
    	return view('tesones.create');
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
}
