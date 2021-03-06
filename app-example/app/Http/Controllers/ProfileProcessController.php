<?php

namespace App\Http\Controllers;

use App\Models\ProfileProcess;
use App\Models\Menu;
use App\Models\Process;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Exception;
use App\Helpers\Encryptor;

class ProfileProcessController extends Controller
{
    public function index($profile_id)
    {
        if (\Request::ajax()) {
            $menu = Menu::all()->toArray();
            $profile_id2 =  $profile_id;

            return view('profiles.profiles_process_index', compact('menu', 'profile_id','profile_id2'));
        } else {
            return Redirect::to('home');
        }
    }

    public function store(Request $request)
    {
        if (\Request::ajax()) {
            $messages = [
                'special_permission.required'     =>   __('At Least One Process Required'),
            ];
            $validator = Validator::make($request->all(), [
                'special_permission'     => 'required',
            ], $messages);

            if ($validator->fails()) {
                $result['status'] = 0;
                $result['title'] = __('Profile Process');
                $result['message'] = '';
                foreach ($validator->errors()->all() as $key => $value) {
                    $result['message'] .= $value.'<br/>';
                }
                $result['data'] = null;
                $result['type_message'] = 'error';
                return $result;
            } else {
                try {
                    ProfileProcess::where('profile_id', $request->profile_id)->delete();
                    foreach ($request->all()['special_permission'] as $value) {
                        $ProfileProcess = new ProfileProcess();
                        $ProfileProcess->process_id = Encryptor::decrypt($value);
                        $ProfileProcess->profile_id  = $request->profile_id;
                        $ProfileProcess->fecha_registro  = now();
                        $ProfileProcess->save();
                    }
                    $result['status'] = 1;
                    $result['title'] = __('');
                    $result['message'] =  __('Permissions stored successfully');
                    $result['type_message'] = 'success';
                    $result['redirect'] = route('profiles');
                    // $result['reload'] = 1;
                } catch (Exception $e) {
                    $result['status'] = 0;
                    $result['title'] = __('Error en busqueda');
                    $result['message']      = $e->getMessage();
                    // $result['message']      = __('Error al registrar datos. Comuniquese con el administrador');
                    $result['type_message'] = 'error';
                    $result['redirect'] = "";
                }
                return $result;
            }
        } else {
            return Redirect::to('home');
        }
    }
}
