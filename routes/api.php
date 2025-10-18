
<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Machine02Controller;
use App\Http\Controllers\Api\Maintenance_recordsController;
use App\Http\Controllers\Api\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



    Route::middleware('api')->group(function () {
    Route::apiResource('machines', Machine02Controller::class);
        });

    Route::middleware('api')->group(function () {
    Route::apiResource('records',Maintenance_recordsController::class);
    });







