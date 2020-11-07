<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Client;
use App\Establishment;
use App\Fumigation_Type;
use App\Establishment_Type;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $clients=Client::all();
        
        return view('citas.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $clients=Client::all();
        $tipoFumigaciones = Fumigation_Type::all();
        $tipoEstablecimientos = Establishment_Type::all();
        return view('citas.create', compact('clients','tipoFumigaciones', 'tipoEstablecimientos'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        $user = Appointment::create([
            'codigo_fumigacion' => 123456789,
            'fecha' => $request['fecha'],
            'hora' => $request['hora'],
            'cancelado' =>0,
            'fumigation_type_id' => (int) $request['tipo_fumigacion'],
            'establishment_id' => (int) $request['lugar'],
            
        ]);

        return redirect('appoinments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $appointment = Appointment::find($id);
    
        $tipo_fumigacion = Fumigation_Type::find($appointment->fumigation_type_id);
        $establecimiento = Establishment::find($appointment->establishment_id);
      
        return view('citas.show',compact('appointment', 'tipo_fumigacion', 'establecimiento'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appointment $appointment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appointment $appointment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        

        $appointment = Appointment::find($id);

        $appointment->delete();
        return redirect('appoinments');
    }

    public function reporte1_captura()
    {
        return view('reportes/reporte1_captura');
    }

    public function reporte2_captura()
    {
        return view('reportes/reporte2_captura');
    }

    public function fetchEstablecimientos(Request $request)
    {
        $filtro = $request['id'];
        $data = Establishment::select("id", "nombre_establecimiento")
        ->where('client_id',$filtro)
        ->get();

        return response()->json($data);
    }

    public function fetchEstablecimientos_precio(Request $request)
    {
        $filtro = $request['id'];
        $data = Establishment_Type::select("costo_aproximado")
        ->where('id',$filtro)
        ->get();

        return response()->json($data);
    }

}
