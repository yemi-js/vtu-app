<?php

// use app;
use App\Http\Middleware\isAdminAuth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\BuyAirtime;
use App\Http\Controllers\AdminController;
use App\Http\Livewire\User\DashboardUser;

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

Route::get('/', function () {
    return view('auth.login');
});


Route::get('/users/dashboard', function () {
    return view('livewire.user.dashboard-user');
})->name('dashboard')->middleware('auth');


Route::get('/users/buy-airtime', [BuyAirtime::class, 'render'])->name('buy-airtime')->middleware('auth');
Route::get('/users/buy-data', [BuyAirtime::class, 'showData'])->name('buy-data')->middleware('auth');
Route::get('/users/transactions-history', [BuyAirtime::class, 'showHistory'])->name('transactions')->middleware('auth');

//  Route::get('/users/user', (DashboardUser::class))->middleware('auth');

Auth::routes();



// Admin Routes

Route::prefix('admin')->middleware('isAdminAuth')->group(function () {

        Route::get('/dashboard', [AdminController::class, 'index'])->name('admin_dashboard');
        Route::get('/userlist', [AdminController::class, 'userslist'])->name('admin_userlist');

        // Route::get('/userlist', function(){
        //     return view('admin.pages.userlist');
        // })->name('admin_userlist');

        Route::get('/fundwallet', function(){
            return view('admin.pages.fundwallet');
        })->name('admin_fundwallet');

});





