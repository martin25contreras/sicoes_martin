<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\LoggedUser;
use App\Models\AccessHistory;
use App\Models\PasswordHistory;
use App\Models\Theme;
use DB;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\SuspendedUser;
use Illuminate\Support\Facades\Redirect;
use App\Models\Country;
use App\Models\Profile;
use App\Models\TelephoneOperator;
use App\Models\TypeDocument;
use App\Models\FailedLogin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Browser;

class UserController extends Controller
{
    private function kill_session()
    {
        if (Auth::check() == true) {
            $this->endLogin(Auth::user()->id);
        }
        session()->forget('currentModule');
        session()->flush();
        Auth::logout();
    }

    public function logout()
    {
        $this->kill_session();
        $result['tittle']  = __('');
        $result['type']    = 'info';
        $result['message'] = __('Your session has been closed');
        return Redirect::to('login')->with('msg', $result);
    }

    public function login(Request $request)
    {
        if (Auth::check() == false) {
            if ($request->isMethod('post')) {
                $Validator = \Validator::make(
                    $request->all(),
                    [
                        'username' => 'required',
                        'password' => 'required'
                    ],
                    [
                        'username.required' => __('Username is Required'),
                        'password.required' => __('Password is Required'),
                    ]
                );

                if ($Validator->fails()) {
                    $result['tittle'] = __('');
                    $result['type'] = 'error';
                    $result['message'] = __('Missing Required Fields');
                } else {
                    $User = User::where('username', $request->username)->first();

                    if ($User == null) { // if user exists
                        $result['tittle'] = '';
                        $result['type'] = 'error';
                        $result['message'] = __('Wrong Data');
                    } else {
                        $is_logged = LoggedUser::where('usuario_id', $User->id)->first();
                        $continue = true;
                        if ($is_logged != null) {//if exists login

                            $now = Carbon::now();
                            $to = Carbon::createFromFormat('Y-m-d H:i:s', $is_logged->fecha_inicio);
                            $diff = $now->diffInMinutes($to);
                            if ($diff > 3) {
                                $AccessHistory = AccessHistory::where('usuario_id', $is_logged->usuario_id)->whereNull('fecha_salida');
                                if ($AccessHistory != null) {
                                    $AccessHistory->update(['fecha_salida' => date('Y-m-d H:i:s')]);
                                }
                                $is_logged->delete();
                                $continue = true;
                            } else {
                                $continue = false;
                                // $this->endLogin($User->id);
                            }
                        }
                        if ($continue == true) {
                            if ($User->bloqueado == 0) {// if user is blocked
                                if ($User->isSuspended() == false) {
                                    $userdata = array(
                                        'username' => $request->username,
                                        'password' => $request->password
                                    );
                                    if ($User->getProfile->estatus == true) {
                                        if (Auth::attempt($userdata)) {
                                            $LoggedUser = new LoggedUser();
                                            $LoggedUser->usuario_id = $User->id;
                                            $LoggedUser->fecha_inicio = now();
                                            $LoggedUser->platform = Browser::platformName();
                                            $LoggedUser->browser = Browser::browserName();
                                            $LoggedUser->browser_engine = Browser::browserEngine();
                                            $LoggedUser->ip = $request->ip();
                                            $LoggedUser->save();

                                            $AccessHistory = new AccessHistory();
                                            $AccessHistory->usuario_id = $User->id;
                                            $AccessHistory->fecha_entrada = now();
                                            $AccessHistory->ip = $request->ip();
                                            $AccessHistory->save();

                                            FailedLogin::where('usuario_id', $User->id)->whereDate('fecha_inicio', '=', date('Y-m-d'))->delete();


                                            $result['tittle']  = __('Welcome');
                                            $result['type']    = 'success';
                                            $result['message'] = Auth::user()->username;
                                            return Redirect::to('home')->with('msg', $result);
                                        } else {
                                            $FailedLogin = new FailedLogin();
                                            $FailedLogin->usuario_id = $User->id;
                                            $FailedLogin->fecha_inicio = now();
                                            $FailedLogin->ip = $request->ip();
                                            $FailedLogin->save();

                                            if (FailedLogin::where('usuario_id', $User->id)->whereDate('fecha_inicio', '=', date('Y-m-d'))->count() >= 3) {
                                                $User->update(['bloqueado' => 1]);

                                                $result['tittle'] = '';
                                                $result['type'] = 'error';
                                                $result['message'] = __('User Lock');
                                            } else {
                                                $result['tittle'] = '';
                                                $result['type'] = 'error';
                                                $result['message'] = __('Wrong Data');
                                            }
                                        }
                                    } else {
                                        $result['tittle'] = '';
                                        $result['type'] = 'error';
                                        $result['message'] = __('inactive profile');
                                    }
                                } else {
                                    $result['tittle'] = '';
                                    $result['type'] = 'error';
                                    $result['message'] = __('User Suspended');
                                }
                            } else {
                                $result['tittle'] = '';
                                $result['type'] = 'error';
                                $result['message'] = __('User blocked');
                            }
                        } else {
                            $result['tittle'] = '';
                            $result['type'] = 'error';
                            $result['message'] = __('has an active session');
                        }
                    }
                }

                return Redirect::to('login')->with('msg', $result);
            } else {
                return view('users.login');
            }
        } else {
            return Redirect::to('home');
        }
    }

    public function home($index = "")
    {
        $Menu = User::find(Auth::user()->id)->getMenu();
        return view('users.home', compact('Menu', 'index'));
    }

    public function change_password()
    {
        if (Auth::user()->cambiar_password == 1) {
            return view('users.users_changePassword');
        } else {
            return Redirect::to('home');
        }
    }

    public function password_update(Request $request)
    {
        $messages = [
            'password.required'       		 => __('Password is Required'),
            'password.min'      			 => __('Invalid password min length'),
            'password.max'      			 => __('Invalid password max length'),
            'password.regex'       		     => __('The password format is invalid'),
            'password_confirmation.required' => __('Password confirmation Required'),
        ];

        $validator = Validator::make($request->all(), [
            'password' => 'required|min:8|max:15|confirmed|regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[~!@#$%^&*-_.+=?><]).*$/',
            'password_confirmation' => 'required',

        ], $messages);

        if ($validator->fails()) {
            $result['status']       = 0;
            $result['title']        = __('Password');
            $result['message']      = '';
            foreach ($validator->errors()->all() as $key => $value) {
                $result['message'] .= $value;
            }
            $result['data'] = null;
            $result['type_message'] = 'error';
            return Redirect::to('U0001.change_password')->with('msg', $result);
        } else {
            DB::table('password_historial')->where('usuario_id', Auth::user()->id)->where('fecha_fin', null)->update(['fecha_inicio' => date('Y-m-d H:i:s')]);
            $history_pass = PasswordHistory::where('usuario_id', Auth::user()->id)->limit(5)->get()->toArray();
            $pass = false;
            for ($i = 0; $i < count($history_pass) && $pass == false; $i++) {
                $pass = Hash::check($request->password, $history_pass[$i]['password']);
            }
            if ($pass == true) {
                $result['status']       = 0;
                $result['title']        = __('Change Password');
                $result['message']      = __('Password already exists');
                $result['type_message'] = 'error';
                return Redirect::to('U0001.change_password')->with('msg', $result);
            } else {
                try {
                    $item = User::find(Auth::user()->id);
                    if ($item != null) {
                        $item->password  		  = Hash::make($request->password);
                        $item->password_decrypt   = $request->password;
                        $item->cambiar_password   = 0;
                        $item->save();

                        $history_pass = PasswordHistory::where('usuario_id', Auth::user()->id)->limit(5)->get()->toArray();
                        if (count($history_pass) == 5) {
                            $history_pass = PasswordHistory::where('usuario_id', Auth::user()->id)->first()->delete();
                            $history_pass = PasswordHistory::where('usuario_id', Auth::user()->id)->first()->delete();
                        }
                        $password_history = new PasswordHistory();
                        $password_history->password     = Hash::make($request->password);
                        $password_history->fecha_inicio = now();
                        $password_history->fecha_fin    = null;
                        $password_history->usuario_id   = Auth::user()->id;
                        $password_history->save();

                        $logout = LoggedUser::where('usuario_id', Auth::user()->id)->first()->delete();

                        $result['status']       = 1;
                        $result['title']        = __('Change Password');
                        $result['message']      = __('Password Updated');
                        $result['type_message'] = 'success';
                        return Redirect::to('/logout')->with('msg', $result)->withInput();
                    } else {
                        $result['status']       = 0;
                        $result['title']        = __('');
                        $result['message']      = __('User not found');
                        $result['type_message'] = 'error';
                    }
                } catch (Exception $e) {
                    $result['status']       = 0;
                    $result['title']        = __('Change Password');
                    $result['message']      = $e->getMessage();
                    $result['type_message'] = 'error';
                }
            return $result;

            }
            return $result;
        }
    }
    
    public function theme($theme=1)
    {
        $theme=Theme::find($theme);
        $user=User::find(Auth::user()->id);
        $user->tema_id=$theme->id;
        $user->save();
        session()->put('theme', $theme->class_nombre);
    }

    public function index()
    {
        $users = User::all()->toArray();
        return view('users.users', compact('users'));
    }
    public function create()
    {
        $path_file = $this->getPathTimer();
        $myfile = fopen($path_file, "r");
        $timer = json_decode(fread($myfile, filesize($path_file)));

        $country  		= Country::pluck('code_telefono', 'id');
        $operator 		= TelephoneOperator::pluck('code', 'id');
        $profile  		= Profile::orderBy('id', "asc")->get();
        $document_type  = TypeDocument::pluck('abreviacion', 'id');

        return view('users.users_create', compact('country', 'operator', 'profile', 'document_type', 'timer'));
    }
    public function store(Request $request)
    {
        if (\Request::ajax()) {
            $messages = [
                'name_user.required' 	 => __('Name is Required'),
                'surname_user.required'  => __('Surname is Required'),
                'document.required'      => __('Document is Required'),
                'document.unique'        => __('Document already exists'),
                'document.max'           => __('length of maximum unsupported for document'),
                'phone.required'         => __('Phone number is Required'),
                'phone.max'              => __('length of maximum unsupported for phone'),
                'phone.min'              => __('length of minimum unsupported for phone'),
                'email.required'         => __('E-mail is Required'),
                'email.unique'           => __('E-mail already exists'),
                'document_type.required' => __('Document type is Required'),
                'operator.required'      => __('Phone operator is Required'),
                'profile.required'       => __('Profile operator is Required'),
                'avatar.required'        => __('Avatar is Required'),
            ];
            $rules = [
                'name_user'    	  => 'required',
                'surname_user'    => 'required',
                'document'        => 'required|max:8|unique:users,documento',
                'phone'           => 'required|min:7|max:7',
                'email'           => 'required|unique:users,email',
                'document_type'   => 'required',
                'operator'        => 'required',
                'profile'         => 'required',
                'avatar'          => 'required',
            ];
            if (Auth::user()->special_permission == 1) {
                $rules['time_inactivity']             = 'gt:179';
                $messages['time_inactivity.gt']       = __('The idle time value must be 00:03:00 minutes or greater');
            }

            $validator = Validator::make($request->all(), $rules, $messages);

            if ($validator->fails()) {
                $result['status'] = 0;
                $result['title'] = __('Users');
                $result['message'] = '';
                foreach ($validator->errors()->all() as $key => $value) {
                    $result['message'] .= $value.'<br/>';
                }
                $result['data'] = null;
                $result['type_message'] = 'error';
                $result['redirect']     = route('users');
                return $result;
            } else {
                try {
                    $name    = substr(strtolower(explode(' ', trim($this->setClearString($request->name_user)))[0]), 0, 1);
                    $surname = strtolower((explode(' ', trim($this->setClearString($request->surname_user)))[0]));
                    $username = $name.$surname;

                    $username = $this->getNameUser($username);

                    $path_file = $this->getPathTimer();
                    $myfile = fopen($path_file, "r");
                    $timer = json_decode(fread($myfile, filesize($path_file)));

                    $link				      	 = URL('/login');
                    $random    					 = Str::random(6);
                    $item = new User();
                    $item->nombre_usuario        = $request->name_user;
                    $item->apellido_usuario    	 = $request->surname_user;
                    $item->username        	  	 = $username;
                    $item->password              = Hash::make($random);
                    $item->password_decrypt      = $random;
                    $item->documento           	 = $request->document;
                    $item->telefono              = $request->phone;
                    $item->email              	 = $request->email;
                    $item->special_permission 	 = isset($request->special_permission[null]) ? 1 : 0;
                    $item->sensitive_info	 	 = isset($request->sensitive_info[null]) ? 1 : 0;
                    $item->cambiar_password    	 = 1;
                    $item->bloqueado       	  	 = 0;
                    if (Auth::user()->special_permission == 1) {
                        $item->tiempo_inactividad =  $request->time_inactivity;
                    } else {
                        $item->tiempo_inactividad =  $timer->timer;
                    }
                    $item->avatar       	  	 = $request->avatar;
                    $item->tipo_documento_id   	 = $request->document_type;
                    $item->telefono_operador_id  = $request->operator;
                    $item->profile_id       	 = $request->profile;
                    $item->tema_id       		 = 1;
                    $item->usuario_id            = Auth::user()->id;
                    $item->fecha_registro        = now();
                    $item->ip              		 = $request->ip();
                    $item->save();


                    // $info_mail = ['link'=>$link,'username'=> $item->username,'name'=>$item->name_user.' '.$item->surname_user, 'password'=> $random];
                    // $this->send_mail($request->email, 'users.users_mail', $info_mail);

                    $result['status']       = 1;
                    $result['title']        = __('Users');
                    $result['message']      = __('Successfully Stored');
                    $result['type_message'] = 'success';
                    $result['redirect']     = route('users');
                } catch (Exception $e) {
                    $result['status']       = 0;
                    $result['title']        = __('Users');
                    $result['message']      = $e->getMessage();
                    $result['type_message'] = 'error';
                    $result['redirect']     = route('users');
                }
                return $result;
            }
        } else {
            return Redirect::to('home');
        }
    }
    public function edit($id)
    {
        $path_file = $this->getPathTimer();
        $myfile = fopen($path_file, "r");
        $timer = json_decode(fread($myfile, filesize($path_file)));

        $item 			= User::find($id)->toArray();
        $operator 		= TelephoneOperator::pluck('code', 'id');
        $profile        = Profile::orderBy('id', "asc")->get();
        $document_type  = TypeDocument::pluck('abreviacion', 'id');

        return view('users.users_edit', compact('item', 'operator', 'profile', 'document_type', 'timer'));
    }

    public function update(Request $request, User $user)
    {
        if (\Request::ajax()) {
            $messages = [
                'name_user.required' 	 => __('Name is Required'),
                'surname_user.required'  => __('Surname is Required'),
                'document.required'      => __('Document is Required'),
                'document.unique'        => __('Document already exists'),
                'document.max'           => __('length of maximum unsupported for document'),
                'phone.required'         => __('Phone number is Required'),
                'phone.max'          	 => __('length of maximum unsupported for phone'),
                'phone.min'          	 => __('length of minimum unsupported for phone'),
                'email.required'         => __('E-mail is Required'),
                'email.unique'           => __('E-mail already exists'),
                'document_type.required' => __('Document type is Required'),
                'operator.required'      => __('Phone operator is Required'),
                'profile.required'       => __('Profile operator is Required'),
                'avatar.required'        => __('Avatar is Required'),
            ];

            $rules = [
                'name_user'    => 'required',
                'surname_user' => 'required',
                'document'     => 'required|max:8|unique:users,documento,' . $request->id,
                'phone'        => 'required|min:7|max:7',
                'email'        => 'required|unique:users,email,' . $request->id,
                'document_type'=> 'required',
                'operator'     => 'required',
                'profile'      => 'required',
                'avatar'       => 'required',
            ];

            if (Auth::user()->special_permission == 1) {
                $rules['time_inactivity']             = 'gt:179';
                $messages['time_inactivity.gt']       = __('The idle time value must be 00:03:00 minutes or greater');
            }

            $validator = Validator::make($request->all(), $rules, $messages);

            if ($validator->fails()) {
                $result['status'] = 0;
                $result['title'] = __('Users');
                $result['message'] = '';
                foreach ($validator->errors()->all() as $key => $value) {
                    $result['message'] .= $value.'<br/>';
                }
                $result['data'] = null;
                $result['type_message'] = 'error';
                $result['redirect']     = route('users');
                return $result;
            } else {
                try {
                    $item = User::find($request->id);
                    if ($item != null) {
                        $path_file = $this->getPathTimer();
                        $myfile = fopen($path_file, "r");
                        $timer = json_decode(fread($myfile, filesize($path_file)));

                        $item->nombre_usuario        = $request->name_user;
                        $item->apellido_usuario    	 = $request->surname_user;
                        $item->documento           	 = $request->document;
                        $item->telefono              = $request->phone;
                        $item->email              	 = $request->email;
                        $item->special_permission 	 = isset($request->special_permission[null]) ? 1 : 0;
                        $item->sensitive_info	 	 = isset($request->sensitive_info[null]) ? 1 : 0;
                        if (Auth::user()->special_permission == 1) {
                            $item->tiempo_inactividad =  $request->time_inactivity;
                        } else {
                            $item->tiempo_inactividad =  $timer->timer;
                        }
                        $item->avatar       	  	 = $request->avatar;
                        $item->tipo_documento_id   	 = $request->document_type;
                        $item->telefono_operador_id  = $request->operator;
                        $item->profile_id       	 = $request->profile;
                        $item->usuario_id         	 = Auth::user()->id;
                        $item->fecha_registro   	 = now();
                        $item->ip              		 = $request->ip();
                        $item->save();

                        $result['status']       = 1;
                        $result['title']        = __('Users');
                        $result['message']      = __('User: ').$item->username.__(' has been updated');
                        $result['type_message'] = 'success';
                        $result['redirect']     = route('users');
                    } else {
                        $result['status']       = 0;
                        $result['title']        = __('Users');
                        $result['message']      = __('No data found');
                        $result['type_message'] = 'info';
                        $result['redirect']     = route('users');
                    }
                } catch (Exception $e) {
                    $result['status']       = 0;
                    $result['title']        = __('Users');
                    $result['message']      = $e->getMessage();
                    $result['type_message'] = 'error';
                    $result['redirect']     = route('users');
                }
                return $result;
            }
        } else {
            return Redirect::to('home');
        }
    }
    public function lock_user($id)
    {
        if (\Request::ajax()) {
            try {
                $item = User::find($id);
                $item->bloqueado        = 1;
                $item->save();

                $result['status']       = 1;
                $result['title']        = __('Users');
                $result['message']      = __('User: ').$item->username.__(' Locked');
                $result['type_message'] = 'success';
                $result['redirect']     = route('users');
            } catch (Exception $e) {
                $result['status']       = 0;
                $result['title']        = __('Users');
                $result['message']      = $e->getMessage();
                $result['type_message'] = 'error';
                $result['redirect']     = route('users');
            }
            return $result;
        } else {
            return Redirect::to('home');
        }
    }
    public function unlock_user($id)
    {
        if (\Request::ajax()) {
            try {
                $item = User::find($id);
                $item->bloqueado        = 0;
                $item->save();

                $result['status']       = 1;
                $result['title']        = __('Users');
                $result['message']      = __('User: ').$item->username.__(' Unlocked');
                $result['type_message'] = 'success';
                $result['redirect']     = route('users');
            } catch (Exception $e) {
                $result['status']       = 0;
                $result['title']        = __('Users');
                $result['message']      = $e->getMessage();
                $result['type_message'] = 'error';
                $result['redirect']     = route('users');
            }
            return $result;
        } else {
            return Redirect::to('home');
        }
    }
    public function reset_password($id)
    {
        if (\Request::ajax()) {
            try {
                $item = User::find($id);
                if ($item != null) {
                    $link				      = URL('/login');
                    $random    		 		  = Str::random(6);
                    $item->password  		  = Hash::make($random);
                    $item->password_decrypt   = $random;
                    $item->cambiar_password   = 1;
                    $item->save();

                    // $info_mail = ['link'=>$link,'username'=> $item->username,'name'=>$item->nombre_usuario.' '.$item->apellido_usuario, 'password'=> $random];
                    // $this->send_mail($item->email, 'users.users_resetPassword_mail', $info_mail);

                    $logout = LoggedUser::where('usuario_id', $id)->get();
                    if (count($logout) > 0) {
                        $logout = LoggedUser::where('usuario_id', $id)->first()->delete();
                    }

                    $result['status']       = 1;
                    $result['title']        = __('Users');
                    $result['message']      = __('User: ').$item->username.__(' password has been reset');
                    $result['type_message'] = 'success';
                    $result['redirect']     = route('users');
                } else {
                    $result['status']       = 0;
                    $result['title']        = __('Users');
                    $result['message']      = __('No data found');
                    $result['type_message'] = 'info';
                    $result['redirect']     = route('users');
                }
            } catch (Exception $e) {
                $result['status']       = 0;
                $result['title']        = __('Users');
                $result['message']      = $e->getMessage();
                $result['type_message'] = 'error';
                $result['redirect']     = route('users');
            }
            return $result;
        } else {
            return Redirect::to('home');
        }
    }

    /* TIME INACTIVITY */
    public function index_time_inactivity()
    {
        $path_file = $this->getPathTimer();
        $myfile = fopen($path_file, "r");
        $timer = json_decode(fread($myfile, filesize($path_file)));

        return view('users.time_inactivity', compact('timer'));
    }

    public function createTimeInactivity(Request $request)
    {
        if (\Request::ajax()) {
            $messages = [
                'inactivity_time.required' => __('Time of Inactivity is Required'),
                'inactivity_time.gt'       => __('The idle time value must be 00:03:00 minutes or greater'),
            ];

            $validator = Validator::make($request->all(), [
                'inactivity_time'          => 'required|gt:179',
            ], $messages);

            if ($validator->fails()) {
                $result['status']       = 0;
                $result['title']        = __('Time Inactivity');
                $result['message']      = '';
                foreach ($validator->errors()->all() as $key => $value) {
                    $result['message'] .= $value.'<br/>';
                }
                $result['data'] = null;
                $result['type_message'] = 'error';
            } else {
                try {
                    $path_file = $this->getPathTimer();

                    if (!file_exists($path_file)) {
                        $myfile = fopen($path_file, "w");
                        fwrite($myfile, "");
                    }
                    $myfile = fopen($path_file, "w");

                    $txt = '{"timer":'.$request->inactivity_time.'}';
                    fwrite($myfile, $txt);

                    User::query()->update(array('tiempo_inactividad' => $request->inactivity_time));

                    $result['status']       = 1;
                    $result['title']        = __('Time Inactivity');
                    $result['message']      = __('Successfully Stored');
                    $result['type_message'] = 'success';
                    $result['redirect']     = '';
                } catch (\Exception $e) {
                    $result['status']       = 0;
                    $result['title']        = __('Time Inactivity');
                    $result['message']      = $e->getMessage();
                    $result['type_message'] = 'error';
                    $result['redirect']     = '';
                }
            }
                return $result;
        } else {
            return Redirect::to('home');
        }
    }
}
