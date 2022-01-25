<?php

namespace App\Http\Controllers;

use App\Models\Staff;
use App\Models\TypeDocument;
use App\Models\TelephoneOperator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use Exception;

class StaffController extends Controller
{

    public function index()
    {
        //Para mostrar los registros
        $staff = Staff::all();

        return view('staff.index', compact('staff'));
    }

    public function create()
    {
        $operator       = TelephoneOperator::pluck('code', 'id');
        $document_type  = TypeDocument::pluck('abreviacion', 'id');

        return view('staff.create', compact('document_type', 'operator'));
    }

    public function store(Request $request)
    {
        if (\Request::ajax()) {
            $messages = [
                'nombres.required'    => __('Nombre es Requerido'),
            ];

            $validator = Validator::make($request->all(), [
                'nombres' => 'required',
            ], $messages);

            if ($validator->fails()) {
                $result['title'] = __('Personal');
                $result['message'] = '';
                foreach ($validator->errors()->all() as $key => $value) {
                    $result['message'] .= $value.'<br/>';
                }
                $result['data'] = null;
                $result['type_message'] = 'error';
                $result['redirect']     = route('staff');
            } else {
                try {
                    $date = Carbon::now();
                    $date = Carbon::createFromFormat('d/m/Y', $request->fecha_nacimiento);
                    $staff = new Staff();

                    $staff->nombres            = $request->nombres;
                    $staff->apellidos          = $request->apellidos;
                    $staff->cedula             = $request->cedula;
                    $staff->direccion          = $request->direccion;
                    $staff->correo             = $request->correo;
                    $staff->telefono_movil     = $request->telefono_movil;
                    $staff->telefono_casa      = $request->telefono_casa;
                    $staff->tipo_documento_id  = $request->document_type;
                    $staff->dia_nacimiento     = $date->format('d');
                    $staff->mes_nacimiento     = $date->format('m');
                    $staff->ano_nacimiento     = $date->format('Y');
                    $staff->cargo              = $request->cargo;
                    $staff->save();

                    $result['status']       = 1;
                    $result['title']        = __('Personal');
                    $result['message']      = __('Successfully Stored');
                    $result['type_message'] = 'success';
                    $result['redirect']     = route('staff');
                } catch (Exception $e) {
                    $result['status']       = 0;
                    $result['title']        = __('Personal');
                    $result['message']      = $e->getMessage();
                    $result['type_message'] = 'error';
                    $result['redirect']     = route('staff');
                }
                return $result;
            }
        } else {
            return Redirect::to('home');
        }
    }

    public function edit($id)
    {
        if (\Request::ajax()) {
            $document_type  = TypeDocument::pluck('abreviacion', 'id');
            $item = Staff::find($id);
            $fecha_nacimiento = $item->dia_nacimiento.'/'.$item->mes_nacimiento.'/'.$item->ano_nacimiento;

            return view('staff.edit', compact('item', 'document_type', 'fecha_nacimiento'));
        } else {
            return Redirect::to('home');
        }
    }


    public function update(Request $request)
    {
        if (\Request::ajax()) {
            $messages = [
                'nombres.required'    => __('Nombre es Requerido'),
            ];

            $validator = Validator::make($request->all(), [
                'nombres'    => 'required',
                // 'nombre_competencia'    => 'required|max:5|unique:type_coins,symbol,'.$request->id,
            ], $messages);

            if ($validator->fails()) {
                $result['title']   = __('Personal');
                $result['message'] = '';
                foreach ($validator->errors()->all() as $key => $value) {
                    $result['message'] .= $value.'<br/>';
                }
                $result['data'] = null;
                $result['type_message'] = 'error';
                $result['redirect']     = route('staff');
            } else {
                try {
                    $staff = Staff::find($request->id);
                    $staff->nombres           = $request->nombres;
                    $staff->apellidos         = $request->apellidos;
                    $staff->cedula            = $request->cedula;
                    $staff->direccion         = $request->direccion;
                    $staff->correo            = $request->correo;
                    $staff->telefono_movil    = $request->telefono_movil;
                    $staff->telefono_casa     = $request->telefono_casa;
                    $staff->tipo_documento_id = $request->document_type;
                    $staff->dia_nacimiento    = $request->dia_nacimiento;
                    $staff->mes_nacimiento    = $request->mes_nacimiento;
                    $staff->ano_nacimiento    = $request->ano_nacimiento;
                    $staff->cargo             = $request->cargo;

                    $staff->save();

                    $result['status']       = 1;
                    $result['title']        = __('Personal');
                    $result['message']      = __('Updated');
                    $result['type_message'] = 'success';
                    $result['redirect']     = route('staff');
                } catch (Exception $e) {
                    $result['status']       = 0;
                    $result['title']        = __('Personal');
                    $result['message']      = $e->getMessage();
                    $result['type_message'] = 'error';
                    $result['redirect']     = route('staff');
                }
                return $result;
            }
        } else {
            return Redirect::to('home');
        }
    }
}
