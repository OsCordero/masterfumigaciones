<?php

namespace App\Http\Controllers;

use App\Appointment;
use App\Client;
use App\Establishment;
use App\Fumigation_Type;
use App\Establishment_Type;
use App\Employee;
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
        $date = date("Y");
        $total = Appointment::select('id')->orderBy('id', 'desc')->first();
        $codigo = 'F' . $date . ($total->id+1);
        return view('citas.create', compact('clients','tipoFumigaciones', 'tipoEstablecimientos','codigo'));

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
            'codigo_fumigacion' => $request['codigo'],
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
    
  
      
        return view('citas.show',compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $tipoFumigaciones = Fumigation_Type::all();
        $tipoEstablecimientos = Establishment_Type::all();
        $appointment = Appointment::find($id);
        return view('citas.edit',compact('appointment','tipoFumigaciones','tipoEstablecimientos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Appointment  $appointment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        
        $appointment = Appointment::find($id);
        $appointment->fecha = $request['fecha'];
        $appointment->hora = $request['hora'];
        $appointment->fumigation_type_id = $request['tipo_fumigacion'];
        $appointment->establishment_id = $request['lugar'];
        $appointment->save();
        return redirect('appoinments');
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

        $appointment->cancelado = true;
        $appointment->save();
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
        $establecimiento = Establishment::find($request['id']);
        $filtro = $establecimiento->establishment_type_id;
        $data = Establishment_Type::select("costo_aproximado")
        ->where('id',$filtro)
        ->get();

        return response()->json($data);
    }

    public function asignarEmpleado($id)
    {
        $appointment = Appointment::find($id);
        $employees = Employee::all();
        return view('citas.employees',compact('appointment','employees'));
    }

    public function asignarMonto($id){
        $appointment = Appointment::find($id);
        return view('citas.monto',compact('appointment'));
    }

    public function guardarMonto(Request $request, $id){
      
        $appointment = Appointment::find($id);
        $appointment->monto = $request['monto'];
        $appointment->save();
        return redirect('appoinments');
    }
}
