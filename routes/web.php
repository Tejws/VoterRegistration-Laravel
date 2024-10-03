<?php

use Illuminate\Support\Facades\Route;

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


use App\Http\Controllers\VoterController;

Route::get('/register', [VoterController::class, 'create'])->name('register');
Route::post('/register', [VoterController::class, 'store']);
Route::get('/voters', [VoterController::class, 'index'])->name('voters.index');
use App\Models\Voter;
Route::get('/voters/{id}', [VoterController::class, 'show']);
Route::get('/api/voters', function () {
    $voters = Voter::all();
    return response()->json($voters);
});
