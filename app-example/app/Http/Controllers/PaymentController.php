<?php

namespace App\Http\Controllers;

use App\Models\Inscription;
use App\Models\Payment;
use App\Models\PaymentHistory;
use App\Models\PaymentStudent;
use App\Models\Representative;
use App\Models\Student;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('payments.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    $id = Auth::user()->id;
    $currentUser = User::find($id);
    $representante = Representative::find($currentUser['documento']);
    $inscripcion= Inscription::find($representante['id']);
    foreach($inscripcion as $key){
      $estudiante = Student::find($key['id']);
      $arrayEstudiantes = $estudiante;
    }
    return view('payments.create_transfer', compact('arrayEstudiantes'));
  }

  public function search_payment()
  {
    $id = Auth::user()->id;
    $currentUser = User::find($id);
    return view('payments.search_payment');
  }

  public function create_payment(Request $request)
  {
    $id = Auth::user()->id;
    $currentUser = User::find($id);
    $dataEstudiante = Student::where('primer_nombre', "=", $request->primer_nombre)
      ->orWhere('segundo_nombre', "=", $request->segundo_nombre)
      ->orWhere('primer_apellido', "=", $request->primer_apellido)
      ->orWhere('segundo_apellido', "=", $request->segundo_apellido)
      ->get();
    return view('payments.list_payment', compact('dataEstudiante'));
  }
  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    $dataPagos = PaymentStudent::find($request->id);
    $historialPagos = new PaymentHistory();
    $historialPagos->pago_id = $dataPagos['id'];
    $historialPagos->mes_pago = $request->mes;
    $historialPagos->tipo_pago = $request->mensualidad? $request->mensualidad: $request->acajo;
    $historialPagos->fecha_pago = $request->fecha_pago;
    $historialPagos->estatus_pago = 'En Proceso';
    $historialPagos->envio_pago = 'Pago por transferencia';
    $historialPagos->save();
  }
  
  public function store_payment(Request $request)
  {
    $dataPagos = PaymentStudent::find($request->id);
    $historialPagos = new PaymentHistory();
    $historialPagos->pago_id = $dataPagos['id'];
    $historialPagos->mes_pago = $request->mes;
    $historialPagos->tipo_pago = $request->mensualidad? $request->mensualidad: $request->acajo;
    $historialPagos->fecha_pago = $request->fecha_pago;
    $historialPagos->estatus_pago = 'Pagado';
    $historialPagos->envio_pago = 'Pago en caja';
    $historialPagos->save();
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Payment  $payment
   * @return \Illuminate\Http\Response
   */
  public function show(Payment $payment)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Payment  $payment
   * @return \Illuminate\Http\Response
   */
  public function edit(Payment $payment)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Payment  $payment
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Payment $payment)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Payment  $payment
   * @return \Illuminate\Http\Response
   */
  public function destroy(Payment $payment)
  {
    //
  }
}
