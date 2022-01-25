<?php

namespace App\Http\Middleware;

use Closure;
use Session;
use App\Models\User;
use App\Models\Process;
use App\Models\RestrictedAccess;
use Illuminate\Support\Facades\Auth;
use App\Models\LoggedUser;
use Illuminate\Support\Facades\Redirect;

use Browser;

class CheckPermision
{
    /**
    * List of routes without login
    */
    protected $routesFree = array('home', 'theme');
    protected $exceptions = array('users.change_password','users.password_update');

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        //dd(request()->route()->uri());
        //dd(\Request::route()->getName());

        /*
        check if not is locked
        check if not is suspended
        */
        //dd(Session::getId());
        //Session::forget('currentModule');
        //dd($request->expectsJson());






        if (Auth::user()->bloqueado == 0) { // if not is blocked
            $User=User::find(Auth::user()->id);
            if ($User->isSuspended()==false) { //if not is suspended

                $position_point =  strpos(\Request::route()->getName(), '.');
                if ($position_point===false) {
                    $nameRoute = \Request::route()->getName();
                } else {
                    $nameRoute = explode(".", \Request::route()->getName());
                    $nameRoute = $nameRoute[0];
                }

                $LoggedUser = LoggedUser::where('usuario_id', Auth::user()->id)->first();
                //dd(Auth::user()->id);
                if ($LoggedUser != null) {  // if exists on table logged_user

                    $security = $LoggedUser->platform == Browser::platformName() &&
                        $LoggedUser->browser == Browser::browserName() &&
                        $LoggedUser->browser_engine == Browser::browserEngine() &&
                        $LoggedUser->ip == $request->ip();
                    if ($security == true) {
                        $Process = Process::where('route', $nameRoute)->first();

                        if (!in_array($nameRoute, $this->routesFree)) {// if require permission

                            if ($Process != null) {
                                $has_permision = in_array($nameRoute, $User->getProfile->getProcesses->pluck('route')->toArray()); // if has permision
                                $is_exemption = in_array(\Request::route()->getName(), $this->exceptions); // if is  exemption
                                if ($has_permision || $is_exemption) {
                                    if ($Process->special_permission ==1) { // if module require special permission
                                        if (Auth::user()->special_permission ==1) { // if user has special permission
                                            Session::put('currentModule', $nameRoute);
                                            return $next($request);
                                        } else {
                                            $RestrictedAccess = new RestrictedAccess();
                                            $RestrictedAccess->usuario_id = Auth::user()->id;
                                            $RestrictedAccess->process_id = $Process->id;
                                            $RestrictedAccess->fecha_inicio = now();
                                            $RestrictedAccess->ip = $request->ip();
                                            $RestrictedAccess->save();
                                            return redirect('/home');
                                        }
                                    } else {
                                        Session::put('currentModule', $nameRoute);
                                        return $next($request);
                                    }
                                } else {
                                    $RestrictedAccess = new RestrictedAccess();
                                    $RestrictedAccess->usuario_id = Auth::user()->id;
                                    $RestrictedAccess->process_id = $Process->id;
                                    $RestrictedAccess->fecha_inicio = now();
                                    $RestrictedAccess->ip = $request->ip();
                                    $RestrictedAccess->save();

                                    if ($request->expectsJson()) {
                                        $result['status'] = 0;
                                        $result['title'] = __('Permission Denied');
                                        $result['message'] = "";
                                        $result['data'] = null;
                                        $result['type_message'] = 'error';
                                        $result['redirect'] = '';
                                        return response()->json($result, 200);
                                    } else {
                                        return redirect()->route('errors.permission_denied');
                                    }
                                }
                            } else {
                                // dd('Modulo no Registrado');

                                $return = __("Modulo no Registrado"); // redirect('/logout');
                    //$return = __("Modulo no Registrado"); // redirect('/logout');

                               /*$result['tittle']  = __('');
                               $result['type']    = 'error';
                               $result['message'] = __('Modulo no Registrado');
                               return Redirect::to('home')->with('msg', $result)->withInput();*/
                            }
                        } else {
                            if (Auth::user()->cambiar_password == 1) {
                                return Redirect::to('U0001.change_password');
                            };
                            return $next($request);
                        }
                    } else {
                        return redirect('/logout');
                    }
                } else {
                    $return = __("Your session has been restarted"); // redirect('/logout');
                }
            } else {
                $return = __("Your user has been Suspended"); //return redirect('/logout');
            }
        } else {
            $return = __("Your user has been Blocked"); //return redirect('/logout');
        }
        //dd($request->expectsJson());
        if ($request->expectsJson()) {
            $result['status'] = 0;
            $result['title'] = __('');
            $result['message'] = $return;
            $result['data'] = null;
            $result['type_message'] = 'error';
            $result['redirect'] = '';
        } else {
            return redirect('/logout');
        }
    }
}
