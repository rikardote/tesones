<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use Laracasts\Flash\Flash;

class UsersController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
    	$user = \Auth::user();
    	return view('users.index')->with('user', $user);
    }
    public function update(Request $request)
    {
    	$user = \Auth::user();
    	$user->adscripcion = $request->adscripcion;
    	$user->unidad = $request->unidad;
    	$user->lugar = $request->lugar;
    	$user->titular_area = $request->titular_area;
    	$user->pagador_habilitado = $request->pagador_habilitado;
    	$user->save();
    	Flash::info('Informacion actualizada exitosamente');
        return redirect()->route('usuarios.index');

    }

}
