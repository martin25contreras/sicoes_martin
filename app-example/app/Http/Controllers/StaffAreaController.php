<?php

namespace App\Http\Controllers;

use App\Models\Area;
use App\Models\Staff;
use App\Models\StaffArea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use App\Helpers\Encryptor;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Exception;
use DataTables;

class StaffAreaController extends Controller
{

    public function index()
    {
        $staffarea = Staff::get()->toArray();
        return view('Staffarea.index', compact('staffarea'));
    }
    public function viewAsigne($id)
    {

        $item            = Staff::find($id);
        $nombre_apellido = $item->nombres.' '.$item->apellidos;
        $areaMaterias    = Area::where('estatus', 1)->get()->pluck('materia_seccion', 'id');
        $areaGrado       = Area::get()->pluck('grado', 'crypt_id');
        $areaSeccion     = Area::get()->pluck('seccion', 'crypt_id');

        return view('Staffarea.asigne', compact('item','areaMaterias','areaGrado','areaSeccion','nombre_apellido'));
    }

    public function store(Request $request)
    {
        if (\Request::ajax()) {
                $messages = [
                    'materias.required' => __('La Área de Formación es Requerido'),
                ];

                $validator = Validator::make($request->all(), [
                    'materias'          => 'required',
                ], $messages);

                if ($validator->fails()) {
                    $result['status']  = 0;
                    $result['title']   = __('Área');
                    $result['message'] = '';
                    foreach ($validator->errors()->all() as $key => $value) {
                        $result['message'] .= $value.'<br/>';
                    }
                    $result['data'] = null;
                    $result['type_message'] = 'error';
                    $result['redirect']     = route('staff_area');
                } else {
                    try {

                        $Staff = Staff::get()->toArray();

                        $StaffArea = new StaffArea();
                        $StaffArea->personal_id      = $Staff[0]['id'];
                        $StaffArea->cedula_personal  = $request->cedula;
                        $StaffArea->area_id          = $request->materias;
                        $StaffArea->save();

                        $updateArea = Area::where('id', $request->materias)->update(['estatus' => 0]);

                        $result['status']       = 1;
                        $result['title']        = __('Área');
                        $result['message']      = __('Successfully Stored');
                        $result['type_message'] = 'success';
                        $result['redirect']     = route('staff_area');

                    } catch (Exception $e) {
                        $result['status']       = 0;
                        $result['title']        = __('Área');
                        $result['message']      = $e->getMessage();
                        $result['type_message'] = 'error';
                        $result['redirect']     = route('staff_area');
                    }
                }
            return $result;
        } else {
            return Redirect::to('home');
        }
    }
}
