<?php

use App\Http\Controllers\CompeticiesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;//llamado al controlador
use App\Http\Controllers\IndicatorsController;

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
