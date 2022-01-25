<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class MenuController extends Controller
{

    public function index()
    {
        $menu = Menu::all();
        return view('menu.index', compact('menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (\Request::ajax()) {
            $Cod = Menu::orderBy('id', "desc")->first();
            $Cde = $Cod['id'] + 1;
            $order = FullSerial($Cde, 1);
            return view('menu.create', compact('order'));
        } else {
            return Redirect::to('home');
        }
    }

    /**
     * Para la creacion de los menu se debe realizar la respectiva traduccion en la ruta resources/lang/en.json o  resources/lang/es.json
     * 
     * Para ver el menu registrado en el sidebar se deben ir al modulo de permisos y darle permisos al perfil asignado al usuario
     * 
     */
    public function store(Request $request)
    {
        if (\Request::ajax()) {
            $messages = [
                'name_menu.required'    => __('Nombre del Menu Requerida'),
                'description.required'  => __('Nombre de la Descripcion Requerida'),
                'icon.required'         => __('Nombre del Icono Requerida'),
            ];

            $validator = Validator::make($request->all(), [
                'name_menu'             => 'required|unique:menus,nombre_menu',
                'description'           => 'required',
                'icon'                  => 'required',
            ], $messages);

            if ($validator->fails()) {
                $result['status'] = 0;
                $result['title'] = __('Menu');
                $result['message'] = '';
                foreach ($validator->errors()->all() as $key => $value) {
                    $result['message'] .= $value.'<br/>';
                }
                $result['data'] = null;
                $result['type_message'] = 'error';
                $result['redirect']     = route('menu');
                return $result;
            } else {
                try {
                    $menu = new Menu();
                    $menu->nombre_menu = $request->name_menu;
                    $menu->descripcion = $request->description;
                    $menu->icon        = $request->icon;
                    $menu->order       = $request->order;
                    $menu->save();

                    $menu->order = FullSerial($menu->id, 1);
                    $menu->save();

                    $result['status']       = 1;
                    $result['title']        = __('Menu');
                    $result['message']      = __('Successfully Stored');
                    $result['type_message'] = 'success';
                    $result['redirect']     = route('menu');
                } catch (Exception $e) {
                    $result['status']       = 0;
                    $result['title']        = __('Menu');
                    $result['message']      = $e->getMessage();
                    $result['type_message'] = 'error';
                    $result['redirect']     = route('menu');
                }
                return $result;
            }
        } else {
            return Redirect::to('home');
        }
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (\Request::ajax()) {
            $item = Menu::find($id);
            return view('menu.edit', compact('item'));
        } else {
            return Redirect::to('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if (\Request::ajax()) {
            $messages = [
                'name_menu.required'    => __('Nombre del Menu Requerida'),
                'description.required'  => __('Nombre de la Descripcion Requerida'),
                'icon.required'         => __('Nombre del Icono Requerida'),
            ];

            $validator = Validator::make($request->all(), [
                'name_menu'             => 'required|unique:menus,nombre_menu,'.$request->id,
                'description'           => 'required',
                'icon'                  => 'required',
            ], $messages);

            if ($validator->fails()) {
                $result['status']  = 0;
                $result['title']   = __('Menu');
                $result['message'] = '';
                foreach ($validator->errors()->all() as $key => $value) {
                    $result['message'] .= $value.'<br/>';
                }
                $result['data'] = null;
                $result['type_message'] = 'error';
                $result['redirect']     = route('menu');
                return $result;
            } else {
                try {
                    $menu = Menu::find($request->id);
                    $menu->nombre_menu = $request->name_menu;
                    $menu->descripcion = $request->description;
                    $menu->icon        = $request->icon;
                    $menu->save();

                    $result['status']       = 1;
                    $result['title']        = __('Menu');
                    $result['message']      = __('Updated');
                    $result['type_message'] = 'success';
                    $result['redirect']     = route('menu');
                } catch (Exception $e) {
                    $result['status']       = 0;
                    $result['title']        = __('Menu');
                    $result['message']      = $e->getMessage();
                    $result['type_message'] = 'error';
                    $result['redirect']     = route('menu');
                }
                return $result;
            }
        } else {
            return Redirect::to('home');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function change_status($id, $action)
    {
        if (\Request::ajax()) {
            try {
                $item         = Menu::find($id);
                $item->status = $action;
                $item->save();
                $msg          = $action == 0 ? __('Deleted') : __('Restored');

                $result['status']       = 1;
                $result['title']        = __('Menu');
                $result['message']      = $msg;
                $result['type_message'] = 'success';
                $result['redirect']     = route('menu');
            } catch (Exception $e) {
                $result['status']       = 0;
                $result['title']        = __('Menu');
                $result['message']      = $e->getMessage();
                $result['type_message'] = 'error';
                $result['redirect']     = route('menu');
            }
            return $result;
        } else {
            return Redirect::to('home');
        }
    }
}
