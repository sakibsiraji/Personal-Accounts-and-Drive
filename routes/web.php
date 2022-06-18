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

Route::get('/', function () {
    return view('welcome');
});
Route::post('MunirLogin', 'UserController@login');
Route::get('dashboard', function () {
    if(!session()->has('user_name'))
    {
        return redirect('/');
    }
    return view('dashboard');
});
Route::get('logout', function(){
    session()->forget('user_name');
    return view('welcome');
});

Route::get('add-account-record', function () {
    if(!session()->has('user_name'))
    {
        return redirect('/');
    }
    return view('add_account_record');
});
Route::post('add-account-record', 'AccountController@store');
Route::get('IncomeRecordsByYear', 'AccountController@IncomeRecordsByYear');
Route::get('IncomeRecordsByMonth/{year}', 'AccountController@IncomeRecordsByMonth');
Route::get('IncomeRecordView/{year}/{month}', 'AccountController@showIncome');
Route::get('ExpenseRecordsByYear', 'AccountController@ExpenseRecordsByYear');
Route::get('ExpenseRecordsByMonth/{year}', 'AccountController@ExpenseRecordsByMonth');
Route::get('ExpenseRecordView/{year}/{month}', 'AccountController@showExpense');
Route::get('viewVoucher/{id}', 'AccountController@view');
Route::get('MonthlySummaryByYear', 'AccountController@MonthlySummaryByYear');
Route::get('MonthlySummaryByMonth/{year}', 'AccountController@MonthlySummaryByMonth');
Route::get('MonthlySummaryView/{year}/{month}', 'AccountController@showMonthlySummary');
//Route::get('editAccountRecord', 'AccountController@edit');
//Route::post('editAccountRecord', 'AccountController@update');
Route::get('account_record/delete/{id}','AccountController@delete');

Route::get('/add-drive-record', function () {
    if(!session()->has('user_name'))
    {
        return redirect('/');
    }
    return view('add_drive_record');
});
Route::post('add-drive-record', 'DriveController@store');
Route::get('DriveRecordsByCategory', 'DriveController@DriveRecordsByCategory');
Route::get('DriveRecordView/{record_type}', 'DriveController@show');
Route::get('viewDocument/{id}', 'DriveController@view');
Route::get('drive_record/delete/{id}','DriveController@delete');