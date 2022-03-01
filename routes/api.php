<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminEventLogController;
use App\Http\Controllers\CustomerInfoController;
use App\Models\AdminEventLog;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/{id}', [AdminController::class, 'show']);
Route::post('/admin', [AdminController::class, 'store']);

Route::get('/adminEventLog', [AdminEventLogController::class, 'index']);
Route::get('/adminEventLog/{id}', [AdminEventLogController::class, 'show']);
Route::post('/adminEventLog', [AdminEventLogController::class, 'store']);


Route::post('/customer', [CustomerInfoController::class, 'store']);
