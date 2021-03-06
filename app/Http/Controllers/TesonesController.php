<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Laracasts\Flash\Flash;
use App\Teson;
use App\User;
use App\Nomina;
use App\Cancelation;
use Carbon\Carbon;
use PDF;

class TesonesController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
		$user = \Auth::user();
    	$tesones = Teson::where('user_id', '=', $user->id)->orderBy('nomina_id', 'desc')->get();
        $tesones->each(function($tesones) {
            $tesones->nomina;
        });
        
    	return view('tesones.index')->with('tesones', $tesones)->with('user', $user);
    }

    public function show($id)
    {
    	$teson = Teson::find($id);
        $teson->nomina;
    	$user = User::find($teson->user_id);
    	$cancelaciones = Cancelation::where('teson_id', '=', $teson->id)->get();
    	return view('tesones.show')->with('teson', $teson)->with('user', $user)->with('cancelaciones', $cancelaciones);
    }
    public function create()
    {
        $nominas = Nomina::all()->sortby('fecha_emision')->reverse()->lists('Fullnomina', 'id')->toArray();

    	return view('tesones.create')->with('nominas', $nominas);
    }
    public function edit($id)
    {
    	$teson = Teson::find($id);
        $nominas = Nomina::all()->sortby('fecha_emision')->reverse()->lists('Fullnomina', 'id')->toArray();
    	return view('tesones.edit')->with('teson', $teson)->with('nominas', $nominas);
    }
    public function store(Request $request)
    {
    	$user = \Auth::user();
    	$teson = new Teson($request->all());
    	$teson->user_id = $user->id;
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

    public function destroy($id){
        $teson = Teson::find($id);
        $teson->delete();

        Flash::error('El teson se ha eliminado exitosamente');
        return redirect()->route('tesones.index');
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
    public function print_teson(Request $request, $id)
    {

        $teson = Teson::find($id);
        $teson->nomina;
        $user = User::find($teson->user_id);
        $cancelaciones = Cancelation::where('teson_id', '=', $teson->id)->get();

        $archivo = 'Tson_emision_del_'.getDay($teson->nomina->fecha_emision).'_'.getMonth($teson->nomina->fecha_emision).'_'.getYear($teson->nomina->fecha_emision).'.pdf';

        $pdf = PDF::loadView('tesones.print_teson',['teson' => $teson, 'user' => $user, 'cancelaciones' => $cancelaciones])->setPaper('letter')->setOrientation('landscape')->setWarnings(false);
        return $pdf->download($archivo);
    }

    public function todas()
    {
       
        $tesones = Teson::paginate(10);
        $tesones->each(function($tesones) {
            $tesones->nomina;
        });
        return view('admin.todas.index')->with('tesones', $tesones);
    }

    public function borrar($id){
        $teson = Teson::find($id);
        $teson->delete();

        Flash::error('El teson se ha elimiado exitosamente');
        return redirect()->route('todas.index');
    }
    public function borrar_cancelacion($id){
        $cancelacion = Cancelation::find($id);
        $cancelacion->delete();

        Flash::error('Cancelacion borrada exitosamente');
        return redirect()->route('cancelar.teson',[$cancelacion->teson_id]);
    }
    public function editar_cancelacion($id){
        $cancelacion = Cancelation::find($id);

        return view('tesones.cancelaciones_edit')->with('cancelacion', $cancelacion);
    }
    public function update_cancelacion(Request $request, $id){
        $cancelacion = Cancelation::find($id);
        $cancelacion->fill($request->all());

        $cancelacion->save();
        Flash::success('Actualizacion exitosa');
        return redirect()->route('cancelar.teson',[$cancelacion->teson_id]);
    }
  
}
