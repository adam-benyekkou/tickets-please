<?php


use App\Http\Controllers\AuthController;
use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/', function(){
    return response()->json([
        'message' => 'Hello API',

    ], 200);
});

Route::get('/tickets', function(){
    return Ticket::all();
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
