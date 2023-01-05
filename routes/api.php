<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\OvertimeController;
use App\Http\Controllers\OvertimePayContoller;
use App\Http\Controllers\SettingController;

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
// Route::get('/pay', [OvertimePayContoller::class]);

Route::post('/employee', [EmployeeController::class, 'store']);
Route::post('/overtime', [OvertimeController::class, 'store']);
Route::get('/overtimePay/{no}', [OvertimePayContoller::class, 'index']);
Route::patch('/setting/{value}', [SettingController::class, 'update']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
