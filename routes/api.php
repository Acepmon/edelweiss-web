<?php

use App\Http\Controllers\MaintenanceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('maintenance/up', [MaintenanceController::class, 'up'])->name('api.maintenance.up');
Route::post('maintenance/down', [MaintenanceController::class, 'down'])->name('api.maintenance.down');
Route::post('maintenance/check', [MaintenanceController::class, 'check'])->name('api.maintenance.check');
