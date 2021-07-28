<?php

use App\Http\Controllers\AreaController;
use App\Http\Controllers\CompeticiesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;//llamado al controlador
use App\Http\Controllers\IndicatorsController;
use App\Http\Controllers\IndicatorsLapseController;
use App\Http\Controllers\StaffAreaController;
use App\Http\Controllers\StaffController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', HomeController::class);

// competicies
Route::get('competicies', [CompeticiesController::class, 'index'])->name('competicies.index');

Route::get('competicies/create', [CompeticiesController::class, 'create'])->name('competicies.create');

Route::post('competicies',  [CompeticiesController::class, 'store'])->name('competicies.store');

Route::get('competicies/{competicies}', [CompeticiesController::class, 'show'])->name('competicies.show');

Route::get('competicies/{competicies}/edit',  [CompeticiesController::class, 'edit'])->name('competicies.edit');

Route::put('competicies/{competicies}',  [CompeticiesController::class, 'update'])->name('competicies.update');

// INDICADORES === Indicators
Route::get('indicators', [IndicatorsController::class, 'index'])->name('indicators.index');

Route::get('indicators/create', [IndicatorsController::class, 'create'])->name('indicators.create');

Route::post('indicators',  [IndicatorsController::class, 'store'])->name('indicators.store');

Route::get('indicators/{indicators}', [IndicatorsController::class, 'show'])->name('indicators.show');

Route::get('indicators/{indicators}/edit',  [IndicatorsController::class, 'edit'])->name('indicators.edit');

Route::put('indicators/{indicators}',  [IndicatorsController::class, 'update'])->name('indicators.update');

// INDICADORES por Lapso === Indicators_lapse
Route::get('indicatorsLapse', [IndicatorsLapseController::class, 'index'])->name('indicatorsLapse.index');

Route::get('indicatorsLapse/create', [IndicatorsLapseController::class, 'create'])->name('indicatorsLapse.create');

Route::post('indicatorsLapse',  [IndicatorsLapseController::class, 'store'])->name('indicatorsLapse.store');

Route::get('indicatorsLapse/{indicators}', [IndicatorsLapseController::class, 'show'])->name('indicatorsLapse.show');

// Personal === Staff
Route::get('staff', [StaffController::class, 'index'])->name('staff.index');

Route::get('staff/create', [StaffController::class, 'create'])->name('staff.create');

Route::post('staff',  [StaffController::class, 'store'])->name('staff.store');

Route::get('staff/{staff}', [StaffController::class, 'show'])->name('staff.show');

Route::get('staff/{staff}/edit',  [StaffController::class, 'edit'])->name('staff.edit');

Route::put('staff/{staff}',  [StaffController::class, 'update'])->name('staff.update');

// Áreas === area
Route::get('area', [AreaController::class, 'index'])->name('area.index');

Route::get('area/create', [AreaController::class, 'create'])->name('area.create');

Route::post('area',  [AreaController::class, 'store'])->name('area.store');

Route::get('area/{area}', [AreaController::class, 'show'])->name('area.show');

Route::get('area/{area}/edit',  [AreaController::class, 'edit'])->name('area.edit');

Route::put('area/{area}',  [AreaController::class, 'update'])->name('area.update');

// Asignación de Personal a las areas de formacion = Staffarea
Route::get('Staffarea', [StaffAreaController::class, 'index'])->name('Staffarea.index');

Route::get('Staffarea/create', [StaffAreaController::class, 'create'])->name('Staffarea.create');

Route::post('Staffarea',  [StaffAreaController::class, 'store'])->name('Staffarea.store');

Route::post('Staffarea/asigne',  [StaffAreaController::class, 'asigne'])->name('Staffarea.asigne');

Route::post('Staffarea/show', [StaffAreaController::class, 'show'])->name('Staffarea.show');
