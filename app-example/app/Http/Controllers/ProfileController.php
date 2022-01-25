<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Validator;
use Exception;

class ProfileController extends Controller
{
    public function index()
    {
        if (\Request::ajax()) {
            $profile = Profile::all();
            return view('profiles.profiles_index', compact('profile'));
        } else {
            return Redirect::to('home');
        }
    }

    public function create()
    {
        if (\Request::ajax()) {
            $Cod = Profile::orderBy('id', "desc")->first();
            $Cde = $Cod['id'] + 1;
            $Code = FullSerial($Cde, 4);
            return view('profiles.profiles_create', compact('Code'));
        } else {
            return Redirect::to('home');
        }
    }

    public function store(Request $request)
    {
        if (\Request::ajax()) {
            $messages = [
                'name_profile.required'    => __('Name Profile Required'),
                'name_profile.unique'      => __('Name Profile already exists'),
                'name_profile.max'         => __('Name Profile: Length of values not supported'),
                'description.required'     => __('Description Required'),
                'description.max'          => __('Description: Length of values not supported'),
                'code.required'            => __('code Required'),
                'code.numeric'             => __('The Code must be Numeric'),
                'code.digits'              => __('Maximum code length is 4 digits'),
                'code.unique'              => __('The code already exists')
            ];

            $validator = Validator::make($request->all(), [
                'name_profile'    => 'required|unique:perfil,nombre_perfil|max:50',
                'description'     => 'required|max:50',
                'code'            => 'required|numeric|digits:4|unique:perfil,code',
            ], $messages);

            if ($validator->fails()) {
                $result['status'] = 0;
                $result['title'] = __('Profile');
                $result['message'] = '';
                foreach ($validator->errors()->all() as $key => $value) {
                    $result['message'] .= $value.'<br/>';
                }
                $result['data'] = null;
                $result['type_message'] = 'error';
                return $result;
            } else {
                try {
                    $item = new Profile();
                    $item->nombre_perfil     =$request->name_profile;
                    $item->descripcion       =$request->description;
                    $item->code              =$request->code;
                    $item->estatus           =1;
                    $item->save();

                    $item->code = FullSerial($item->id, 4);
                    $item->save();

                    $result['status'] = 1;
                    $result['title'] = __('');
                    $result['message'] =  __('Successfully Stored');
                    $result['type_message'] = 'success';
                    $result['redirect'] = route('profiles');
                } catch (Exception $e) {
                    $result['status'] = 0;
                    $result['title'] = __('Search error');
                    $result['message']      = $e->getMessage();
                    $result['type_message'] = 'error';
                    $result['redirect'] = "";
                }
                return $result;
            }
        } else {
            return Redirect::to('home');
        }
    }

    public function edit(Request $request)
    {
        if (\Request::ajax()) {
            $item = Profile::find($request->id)->toArray();
            return view('profiles.profiles_edit', compact('item'));
        } else {
            return Redirect::to('home');
        }
    }

    public function update(Request $request)
    {
        if (\Request::ajax()) {
            $messages = [
                'name_profile_edit.required'   => __('Name Profile Required'),
                'name_profile_edit.unique'     => __('Name Profile already exists'),
                'name_profile_edit.max'        => __('Name Profile: Longitud de valores no admitida'),
                'description_edit.required'    => __('Description Required'),
                'description_edit.max'         => __('Description: Longitud de valores no admitida'),

            ];

            $validator = Validator::make($request->all(), [
                'name_profile_edit'    => 'required|max:50|unique:perfil,nombre_perfil,'.$request->id,
                'description_edit'     => 'required|max:50',
            ], $messages);

            if ($validator->fails()) {
                $result['status'] = 0;
                $result['title'] = __('Profile');
                $result['message'] = '';
                foreach ($validator->errors()->all() as $key => $value) {
                    $result['message'] .= $value.'<br/>';
                }
                $result['data'] = null;
                $result['type_message'] = 'error';
                return $result;
            } else {
                try {
                    $item = Profile::find($request->id);
                    $item->nombre_perfil      = $request->name_profile_edit;
                    $item->descripcion       = $request->description_edit;
                    $item->save();

                    $result['status'] = 1;
                    $result['title'] = __('');
                    $result['message'] =  __('Updated');
                    $result['redirect'] = route('profiles');
                    $result['type_message'] = 'success';
                } catch (Exception $e) {
                    $result['status'] = 0;
                    $result['title'] = __('Search error');
                    $result['message']      = $e->getMessage();
                    $result['type_message'] = 'error';
                    $result['redirect'] = "";
                }
                return $result;
            }
        } else {
            return Redirect::to('home');
        }
    }

    public function delete($id)
    {
        if (\Request::ajax()) {
            try {
                $item = Profile::find($id);
                $item->estatus       =0;
                $item->save();
                $result['status'] = 1;
                $result['title'] = __('');
                $result['message'] =  __('Deleted');
                $result['type_message'] = 'success';
                $result['redirect'] = route('profiles');
            } catch (Exception $e) {
                $result['status'] = 0;
                $result['title'] = __('Search error');
                $result['message']      = $e->getMessage();
                $result['type_message'] = 'error';
                $result['redirect'] = "";
            }
            return $result;
        } else {
            return Redirect::to('home');
        }
    }

    public function reactivate($id)
    {
        if (\Request::ajax()) {
            try {
                $item = Profile::find($id);
                $item->estatus       = 1;
                $item->save();
                $result['status'] = 1;
                $result['title'] = __('');
                $result['message'] =  __('Restored');
                $result['type_message'] = 'success';
                $result['redirect'] = route('profiles');
            } catch (Exception $e) {
                $result['status'] = 0;
                $result['title'] = __('Search error');
                $result['message']      = $e->getMessage();
                $result['type_message'] = 'error';
                $result['redirect'] = "";
            }
            return $result;
        } else {
            return Redirect::to('home');
        }
    }
}
