<?php

namespace App\Http\Controllers;

use App\Models\Postulant;
use App\Models\Inscription;
use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Country;
use App\Models\Representative;
use App\Models\TelephoneOperator;
use App\Models\TypeDocument;

class PostulantController extends Controller
{
  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    return view('postulant.index');
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create(Request $request)
  {
    /**
     * INCORPORAR UN CICLO PARA INTERARSE LA CANTIDAD DE USUARIOS A INSCRIBIR SEAN NECESARIOS
     * ESA CANTIDAD SE RECIBE DEL FORMULARIO
     * $request->cantidad_usuarios;
     */
    // $username = 'usuario'.Str::random(3)

    //       $path_file = $this->getPathTimer();
    //       $myfile = fopen($path_file, "r");
    //       $timer = json_decode(fread($myfile, filesize($path_file)));

    //       $link                 = URL('/login');
    // $random               = Str::random(6);
    //       $item = new User();
    //       $item->nombre_usuario        = $request->name_user;
    //       $item->apellido_usuario       = $request->surname_user;
    //       $item->username               = $username;
    //       $item->password              = Hash::make($random);
    //       $item->password_decrypt      = $random;
    //       $item->documento              = ' ';
    //       $item->telefono              = ' ';
    //       $item->email                 = ' ';
    //       $item->special_permission    = false;
    //       $item->sensitive_info      = false;
    //       $item->cambiar_password       = false;
    //       $item->bloqueado              = false;
    //       if (Auth::user()->special_permission == 1) {
    //         $item->tiempo_inactividad =  $request->time_inactivity;
    //       } else {
    //         $item->tiempo_inactividad =  $timer->timer;
    //       }
    //       $item->avatar              = '0001';
    //       $item->tipo_documento_id      = 1;
    //       $item->telefono_operador_id  = 1;
    //       $item->profile_id          = 3;
    //       $item->tema_id            = 1;
    //       $item->usuario_id            = Auth::user()->id;
    //       $item->fecha_registro        = now();
    //       $item->ip                   = $request->ip();
    // $item->save();

    // return view('postulant.list', compact('arrayPostulant'));

  }
  public function list()
  {
    return view('postulant.list');
  }
  public function list_inscription()
  {
    return view('postulant.list_inscription');
  }
  public function template()
  {
    // $path_file = $this->getPathTimer();
    //     $myfile = fopen($path_file, "r");
    //     $timer = json_decode(fread($myfile, filesize($path_file)));

    //     $country  		= Country::pluck('code_telefono', 'id');
    //     $operator 		= TelephoneOperator::pluck('code', 'id');
    //     $document_type  = TypeDocument::pluck('abreviacion', 'id');

    return view('postulant.create_postulant');
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    // $dataPostulant = new Postulant();
    // $dataPostulant->nombres_estudiante = $request->first_name_student;
    // $dataPostulant->apellidos_estudiante = $request->last_name_student;
    // $dataPostulant->cedula_estudianta = $request->document_type_student ? $request->document_type . " " . $request->document_type_student : '00000';
    // $dataPostulant->fecha_nacimiento = $request->date_birth;
    // $dataPostulant->grade = $request->grade;
    // $dataPostulant->nombre_representante = $request->first_name_parent;
    // $dataPostulant->apellido_representante = $request->last_name_parent;
    // $dataPostulant->cedula = $request->document_type . " " . $request->document_type_parent;
    // $dataPostulant->telefono = $request->operator . " " . $request->phone;
    // $dataPostulant->correo = $request->email;
    // $dataPostulant->correo = $request->address;
    // $dataPostulant->estatus = 0;
    // $dataPostulant->save();
    return view('postulant.parent1-inscription');
    /**
     * bloquear el usuario a esta persona, que es el usuario de postulación
     */
  }

  public function template_inscription()
  {
    // $path_file = $this->getPathTimer();
    //     $myfile = fopen($path_file, "r");
    //     $timer = json_decode(fread($myfile, filesize($path_file)));

    //     $country  		= Country::pluck('code_telefono', 'id');
    //     $operator 		= TelephoneOperator::pluck('code', 'id');
    //     $document_type  = TypeDocument::pluck('abreviacion', 'id');

    return view('postulant.create_inscription');
  }
  public function store_inscription(Request $request)
  {
    $dataInscription = new Student();
    $dataInscription->primer_nombre = $request->primer_nombre;
    $dataInscription->segundo_nombre = $request->segundo_nombre;
    $dataInscription->primer_apellido = $request->primer_apellido;
    $dataInscription->segundo_apellido = $request->segundo_apellido;
    $dataInscription->cedula = $request->cedula ? $request->cedula . " " . $request->cedula : '00000';
    $dataInscription->correo = $request->correo;
    $dataInscription->genero = $request->genero;
    $dataInscription->telefono = $request->telefono;
    $dataInscription->dia_nacimiento = $request->dia_nacimiento;
    $dataInscription->mes_nacimiento = $request->dia_nacimiento;
    $dataInscription->ano_nacimiento = $request->dia_nacimiento;
    $dataInscription->direccion = $request->direccion;
    $dataInscription->save();
    /**
     * bloquear el usuario a esta persona, que es el usuario de postulación
     */
  }

  public function template_inscription_parent1()
  {
    // $path_file = $this->getPathTimer();
    //     $myfile = fopen($path_file, "r");
    //     $timer = json_decode(fread($myfile, filesize($path_file)));

    //     $country  		= Country::pluck('code_telefono', 'id');
    //     $operator 		= TelephoneOperator::pluck('code', 'id');
    //     $document_type  = TypeDocument::pluck('abreviacion', 'id');

    return view('postulant.create_inscription_parent');
  }
  public function template_inscription_parent2()
  {
    // $path_file = $this->getPathTimer();
    //     $myfile = fopen($path_file, "r");
    //     $timer = json_decode(fread($myfile, filesize($path_file)));

    //     $country  		= Country::pluck('code_telefono', 'id');
    //     $operator 		= TelephoneOperator::pluck('code', 'id');
    //     $document_type  = TypeDocument::pluck('abreviacion', 'id');

    return view('postulant.create_inscription_parent2');
  }

  
  public function store_representative(Request $request)
  {
    $dataInscription = new Representative();
    $dataInscription->primer_nombre = $request->primer_nombre;
    $dataInscription->segundo_nombre = $request->segundo_nombre;
    $dataInscription->primer_apellido = $request->primer_apellido;
    $dataInscription->segundo_apellido = $request->segundo_apellido;
    $dataInscription->principal = $request->principal_parent;
    $dataInscription->cedula = $request->cedula ? $request->cedula . " " . $request->cedula : '00000';
    $dataInscription->correo = $request->correo;
    $dataInscription->genero = $request->genero;
    $dataInscription->telefono = $request->telefono;
    $dataInscription->dia_nacimiento = $request->dia_nacimiento;
    $dataInscription->mes_nacimiento = $request->dia_nacimiento;
    $dataInscription->ano_nacimiento = $request->dia_nacimiento;
    $dataInscription->direccion = $request->direccion;
    $dataInscription->ocupacion = $request->ocupacion;
    $dataInscription->tipo_ocupacion = $request->tipo_ocupacion;
    $dataInscription->direccion_ocupacion = $request->direccion_ocupacion;
    $dataInscription->save();
    return view('postulant.create_inscription_parent2');
  }


  public function store_representative2(Request $request)
  {
    $dataInscription = new Representative();
    $dataInscription->primer_nombre = $request->primer_nombre;
    $dataInscription->segundo_nombre = $request->segundo_nombre;
    $dataInscription->primer_apellido = $request->primer_apellido;
    $dataInscription->segundo_apellido = $request->segundo_apellido;
    $dataInscription->principal = $request->principal_parent;
    $dataInscription->cedula = $request->cedula ? $request->cedula . " " . $request->cedula : '00000';
    $dataInscription->correo = $request->correo;
    $dataInscription->genero = $request->genero;
    $dataInscription->telefono = $request->telefono;
    $dataInscription->dia_nacimiento = $request->dia_nacimiento;
    $dataInscription->mes_nacimiento = $request->dia_nacimiento;
    $dataInscription->ano_nacimiento = $request->dia_nacimiento;
    $dataInscription->direccion = $request->direccion;
    $dataInscription->ocupacion = $request->ocupacion;
    $dataInscription->tipo_ocupacion = $request->tipo_ocupacion;
    $dataInscription->direccion_ocupacion = $request->direccion_ocupacion;
    $dataInscription->save();
    //Retornar al modulo de pago, esto es otro controlador
    // return view('postulant.create_inscription_parent2');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Models\Postulant  $postulant
   * @return \Illuminate\Http\Response
   */
  public function show(Postulant $postulant)
  {
    //
  }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Models\Postulant  $postulant
   * @return \Illuminate\Http\Response
   */
  public function edit(Postulant $postulant)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Models\Postulant  $postulant
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Postulant $postulant)
  {
    //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Models\Postulant  $postulant
   * @return \Illuminate\Http\Response
   */
  public function destroy(Postulant $postulant)
  {
    //
  }
}
