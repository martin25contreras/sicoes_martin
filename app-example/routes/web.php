<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfileProcessController;
use App\Http\Controllers\CompeticiesController;
use App\Http\Controllers\IndicatorsController;
use App\Http\Controllers\IndicatorsLapseController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\AreaController;
use App\Http\Controllers\StaffAreaController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProcessController;
use App\Http\Controllers\AccessHistoryController;
use App\Http\Controllers\RestrictedAccessController;
use App\Http\Controllers\FailedLoginController;
use App\Http\Controllers\PostulantController;
use App\Http\Controllers\RatingsController;
use App\Http\Controllers\ControlRatingsController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\PaymentHistoryController;
use App\Http\Controllers\PaymentStudentController;
use App\Http\Controllers\StudentController;

/*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
 */

Route::get('language/{lang?}', function($lang = 'en') {
    session()->put('language', $lang);
    return redirect('/home');
})->name('language');

Route::get('login', [UserController::class, 'login'])->name('login');
Route::get('logout', [UserController::class, 'logout'])->name('logout');
Route::post('login', [UserController::class, 'login'])->name('login.in');

Route::get('unauthenticated', function (){
	return view('errors.unauthenticated');
})->name('errors.unauthenticated');

Route::get('permission_denied', function (){
  return view('errors.permission_denied');
})->name('errors.permission_denied');

Route::get('avatar/{code}', function ($code){
	
	
  $path = storage_path('app'.DIRECTORY_SEPARATOR.'img'.DIRECTORY_SEPARATOR.'avatar'.DIRECTORY_SEPARATOR . $code . '.png');
	
	if(!File::exists($path)) {
        return response()->json(['message' => 'Image not found.'], 404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);

    return $response;
})->name('avatar');

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/home');
    } else {
        return redirect('/login');
    }
})->name('main');


Route::group(array('middleware' => array('auth', 'CheckPermision', 'DataImportant', 'CryptId')), function() {

  /*Theme*/  
  Route::get('theme/{theme?}', [UserController::class, 'theme'])->name('theme');
  Route::get('home/{index?}',  [UserController::class, 'home'])->name('home');

  /**
   * Sintaxis para seguir el orden: las primeras inciales son el nombre del modulo, seguido del serial consecutivo a la tarea a realizar, ejemplo modulo Usuario  = U0001
   *  
   **/

  /*Users*/
  Route::get('U0001', [UserController::class, 'index'])->name('users');
  Route::get('U0001.create', [UserController::class, 'create'])->name('users.create');
  Route::get('U0001.edit/{id}', [UserController::class, 'edit'])->name('users.edit');
  Route::post('U0001.store', [UserController::class, 'store'])->name('users.store');
  Route::post('U0001.update', [UserController::class, 'update'])->name('users.update');
  Route::get('U0001.lock_user/{id}', [UserController::class, 'lock_user'])->name('users.lock_user');
  Route::get('U0001.unlock_user/{id}', [UserController::class, 'unlock_user'])->name('users.unlock_user');
  Route::get('U0001.reset_password/{id}', [UserController::class, 'reset_password'])->name('users.reset_password');
  Route::get('U0001.change_password', [UserController::class, 'change_password'])->name('users.change_password');
  Route::post('U0001.password_update', [UserController::class, 'password_update'])->name('users.password_update');
  Route::get('U0001.check_password', [UserController::class, 'check_password'])->name('users.check_password');

   /*restricted_access Routes*/

  Route::match(['get', 'post'], 'U0004', [RestrictedAccessController::class, 'restricted_access'])->name('restricted_access');

   /*access_history Routes*/

  Route::match(['get', 'post'], 'U0005', [AccessHistoryController::class, 'access_history'])->name('access_history');

   /*failed_login Routes*/

  Route::match(['get', 'post'], 'U0006', [FailedLoginController::class, 'failed_login'])->name('failed_login');

   /*Profiles Routes*/
  Route::get('P0001',  [ProfileController::class, 'index'])->name('profiles');
  Route::get('P0001.create',[ProfileController::class, 'create'])->name('profiles.create');
  Route::post('P0001.store',[ProfileController::class, 'store'])->name('profiles.store');
  Route::get('P0001.edit/{id}',[ProfileController::class, 'edit'])->name('profiles.edit');
  Route::post('P0001.update',[ProfileController::class, 'update'])->name('profiles.update');
  Route::get('P0001.delete/{id}',[ProfileController::class, 'delete'])->name('profiles.delete');
  Route::get('P0001.reactivate/{id}',[ProfileController::class, 'reactivate'])->name('profiles.reactivate');

   /*Time Inactivity*/
  Route::get('U0007', [UserController::class, 'index_time_inactivity'])->name('time_inactivity');
  Route::post('U0007.createTimeInactivity', [UserController::class, 'createTimeInactivity'])->name('users.time_inactivity');

   /*Menu Routes*/
  Route::get('U0008', [MenuController::class, 'index'])->name('menu');  
  Route::get('U0008.create', [MenuController::class, 'create'])->name('menu.create');
  Route::post('U0008.store',  [MenuController::class, 'store'])->name('menu.store');
  Route::get('U0008.edit/{id}',  [MenuController::class, 'edit'])->name('menu.edit');
  Route::post('U0008.update',  [MenuController::class, 'update'])->name('menu.update');
  Route::get('U0008.change_status/{id}/{action?}',  [MenuController::class, 'change_status'])->name('menu.change_status');

   /*Process Routes*/
  Route::get('U0009', [ProcessController::class, 'index'])->name('process');  
  Route::get('U0009.create', [ProcessController::class, 'create'])->name('process.create');
  Route::post('U0009.store',  [ProcessController::class, 'store'])->name('process.store');
  Route::get('U0009.edit/{id}', [ProcessController::class, 'edit'])->name('process.edit');
  Route::post('U009.update',  [ProcessController::class, 'update'])->name('process.update');
  Route::get('U0009.change_status/{id}/{action?}',  [ProcessController::class, 'change_status'])->name('process.change_status');


   /*Profiles Process Routes*/
  Route::get('P0001.profile_process/{id}',  [ProfileProcessController::class, 'index'])->name('profiles.process');
  Route::post('P0001.store.process',  [ProfileProcessController::class, 'store'])->name('profiles.process.store');
	
   /*Competencias Routes*/
  Route::get('C0001', [CompeticiesController::class, 'index'])->name('competicies');
  Route::get('C0001.create', [CompeticiesController::class, 'create'])->name('competicies.create');
  Route::post('C0001.store',  [CompeticiesController::class, 'store'])->name('competicies.store');
  Route::get('C0001.edit/{id}',  [CompeticiesController::class, 'edit'])->name('competicies.edit');
  Route::post('C0001.update',  [CompeticiesController::class, 'update'])->name('competicies.update');

  // Indicadores === Indicators
  Route::get('I0001', [IndicatorsController::class, 'index'])->name('indicators');
  Route::get('I0001.create', [IndicatorsController::class, 'create'])->name('indicators.create');
  Route::post('I0001.store',  [IndicatorsController::class, 'store'])->name('indicators.store');
  Route::get('I0001.edit/{id}',  [IndicatorsController::class, 'edit'])->name('indicators.edit');
  Route::post('I0001.update',  [IndicatorsController::class, 'update'])->name('indicators.update');

  // Indicadores de Lapso === Indicators_lapse
  Route::get('I0002', [IndicatorsLapseController::class, 'index'])->name('indicators_lapses');
  Route::get('I0002.create', [IndicatorsLapseController::class, 'create'])->name('indicators_lapses.create');
  Route::post('I0002.store',  [IndicatorsLapseController::class, 'store'])->name('indicators_lapses.store');
  Route::get('I0002.edit/{id}',  [IndicatorsLapseController::class, 'edit'])->name('indicators_lapses.edit');
  Route::post('I0002.update',  [IndicatorsLapseController::class, 'update'])->name('indicators_lapses.update');

  // Áreas === area
  Route::get('A0001', [AreaController::class, 'index'])->name('area');
  Route::get('A0001.create', [AreaController::class, 'create'])->name('area.create');
  Route::post('A0001.store',  [AreaController::class, 'store'])->name('area.store');
  Route::get('A0001.edit/{id}',  [AreaController::class, 'edit'])->name('area.edit');
  Route::post('A0001.update',  [AreaController::class, 'update'])->name('area.update');

  // Personal === Staff 
  Route::get('S0001', [StaffController::class, 'index'])->name('staff');
  Route::get('S0001.create', [StaffController::class, 'create'])->name('staff.create');
  Route::post('S0001.store',  [StaffController::class, 'store'])->name('staff.store');
  Route::get('S0001.edit{id}',  [StaffController::class, 'edit'])->name('staff.edit');
  Route::post('S0001.update',  [StaffController::class, 'update'])->name('staff.update');

  // Asignación de Personal a las areas de formación = Staffarea
  Route::get('SA001', [StaffAreaController::class, 'index'])->name('staff_area');
  Route::get('SA001.asigne/{id}',  [StaffAreaController::class, 'viewAsigne'])->name('staff_area.view_asigne');
  Route::post('SA001.store', [StaffAreaController::class, 'store'])->name('staff_area.store');
  Route::post('SA001.store', [StaffAreaController::class, 'store'])->name('staff_area.store');

  // Inscripción, Postulacion de nuevos ingresos
  Route::get('PI001', [PostulantController::class, 'index'])->name('users-new-ingreso');
  Route::post('PI001.create', [PostulantController::class, 'create'])->name('postulant.create');
  Route::get('PI001.list', [PostulantController::class, 'list'])->name('postulant-list');
  Route::get('PI001.list_inscripcion', [PostulantController::class, 'list_inscription'])->name('list-inscription');
  Route::get('PI001.template',  [PostulantController::class, 'template'])->name('user-inscription');
  Route::post('PI001.store', [PostulantController::class, 'store'])->name('postulant.store');
  Route::get('PI001.template_inscription',  [PostulantController::class, 'template_inscription'])->name('student-inscription');
  Route::get('PI001.template_inscription_parent1',  [PostulantController::class, 'template_inscription_parent1'])->name('parent1-inscription');
  Route::get('PI001.template_inscription_parent2',  [PostulantController::class, 'template_inscription_parent2'])->name('parent2-inscription');
  Route::post('PI001.store_inscription', [PostulantController::class, 'store_inscription'])->name('postulant.store_inscription');

  //Notas
  Route::get('N0001', [ControlRatingsController::class, 'index'])->name('upload-notes');
  Route::get('N0001.verify', [ControlRatingsController::class, 'index'])->name('verify-notes');

  //Asignación de estudiantes a las secciones
  Route::get('SE001', [StudentController::class, 'index'])->name('student-assignment');

  //Pagos
  Route::get('PT001', [PaymentController::class, 'index'])->name('payment-transfers');
  Route::get('PT001.create', [PaymentController::class, 'create'])->name('payments.create');
  Route::get('PT001.payment', [PaymentController::class, 'search_payment'])->name('payment');
  Route::get('PT001.list_payment', [PaymentController::class, 'list_payment'])->name('payments.list_payment');
  Route::post('PT001.store', [PaymentController::class, 'store'])->name('payments.create_payment');
  Route::post('PT001.store_payment', [PaymentController::class, 'store_payment'])->name('payments.store_payment');
  Route::get('PT001.report', [PaymentController::class, 'index'])->name('payment-report');
 });


