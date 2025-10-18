
<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\Machine02Controller;
use App\Http\Controllers\Api\Maintenance_recordsController;
use App\Http\Controllers\Api\AuthController;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

// ต้องใช้ Token ถึงจะเข้าได้
Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);

   // route ที่ต้องล็อกอินก่อนถึงจะเข้าได้
    Route::get('/user', function (Request $request) {
        return $request->user();
    });

    Route::middleware('api')->group(function () {
    Route::apiResource('machines', Machine02Controller::class);
        });

    Route::middleware('api')->group(function () {
    Route::apiResource('records',Maintenance_recordsController::class);
    });

});







