<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Teson;
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
    public function users_all()
    {
        $users = User::orderBy('adscripcion')->get();
        return view('users.index_all')->with('users', $users); 
    }

    public function edit($id)
    {
        $user = User::find($id);
        return view('users.edit')->with('user', $user);
    }

    public function edit_password($id)
    {
        $user = User::find($id);
        return view('users.edit_password')->with('user', $user);
    }

    public function update_password(Request $request, $id)
    {
        $user = User::find($id);
        $user->password = bcrypt($request->password);
        $user->save();
        Flash::info('Contraseña actualizada exitosamente');
        return redirect()->route('admin.users_all.index');

    }

    public function borrar($id)
    {
        $user = User::find($id);
        $user->delete();

        Flash::error('El usuario se ha eliminado exitosamente');
        return redirect()->route('admin.users_all.index');
    }
    public function ver_por_usuario($id)
    {
        $user = User::find($id);
        $tesones = Teson::orderBy('nomina_id', 'DESC')->where('user_id', '=', $user->id)->get();

        return view('tesones.ver_por_usuario')->with('tesones',$tesones)->with('user',$user);
    }


}
