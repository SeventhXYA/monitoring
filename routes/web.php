<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PomodoroController;
use App\Http\Controllers\DailySdController;
use App\Http\Controllers\DailyBpController;
use App\Http\Controllers\DailyKlController;
use App\Http\Controllers\DailyIcController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MonthlyController;
use App\Http\Controllers\LongTermController;
use App\Http\Controllers\WeeklyController;
use App\Http\Controllers\Weekly2Controller;

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

Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [LoginController::class, 'login'])->name('/login');
    Route::post('/login', [LoginController::class, 'authenticate']);
});
Route::post('/logout', [LoginController::class, 'logout'])->name('/logout');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::group(['middleware' => ['cekUserLogin:admin']], function () {
        Route::get('/dailysd/viewadmin', [DailySdController::class, 'admview']);
        Route::get('/dailybp/viewadmin', [DailyBpController::class, 'admview']);
        Route::get('/dailykl/viewadmin', [DailyKlController::class, 'admview']);
        Route::get('/dailyic/viewadmin', [DailyIcController::class, 'admview']);
    });
    Route::group(['middleware' => ['cekUserLogin:user']], function () {
        Route::get('/pomodoro', [PomodoroController::class, 'pomodoro']);

        Route::get('/monthly', [MonthlyController::class, 'create']);
        Route::get('/ltt', [LongTermController::class, 'create']);
        Route::post('/monthly/store', [MonthlyController::class, 'store']);
        Route::get('/monthly/history', [MonthlyController::class, 'history']);

        Route::get('/weekly', [WeeklyController::class, 'create']);
        Route::get('/weekly2', [Weekly2Controller::class, 'create']);
        Route::post('/weekly/store', [WeeklyController::class, 'store']);
        Route::get('/weekly/history', [WeeklyController::class, 'history']);

        Route::get('/dailysd', [DailySdController::class, 'create']);
        Route::post('/dailysd/store', [DailySdController::class, 'store']);
        Route::get('/dailysd/history', [DailySdController::class, 'history']);

        Route::get('/dailybp', [DailyBpController::class, 'create']);
        Route::post('/dailybp/store', [DailyBpController::class, 'store']);
        Route::get('/dailybp/history', [DailyBpController::class, 'history']);


        Route::get('/dailykl', [DailyKlController::class, 'create']);
        Route::post('/dailykl/store', [DailyKlController::class, 'store']);
        Route::get('/dailykl/history', [DailyKlController::class, 'history']);


        Route::get('/dailyic', [DailyIcController::class, 'create']);
        Route::post('/dailyic/store', [DailyIcController::class, 'store']);
        Route::get('/dailyic/history', [DailyIcController::class, 'history']);
    });
    // return redirect()->intended('/home');
});
