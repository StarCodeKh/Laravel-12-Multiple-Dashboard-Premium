<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('auth.login');
});

Route::group(['middleware'=>'auth'],function()
{
    Route::get('crm-analytics',function()
    {
        return view('dashboard.crm-analytics');
    });
    Route::get('crm-analytics',function()
    {
        return view('dashboard.crm-analytics');
    });
});

Auth::routes();

Route::group(['namespace' => 'App\Http\Controllers\Auth'],function()
{
    // -----------------------------login-------------------------------------//
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'login')->name('login');
        Route::post('/login', 'authenticate')->name('loginssssssss');
        Route::get('/logout', 'logout')->name('logout');
        Route::get('/logout/page', 'logoutPage')->name('logout/page');
    });

    // ------------------------------ register -------------------------------//
    Route::controller(RegisterController::class)->group(function () {
        Route::get('register', 'register')->name('register');
        Route::post('register','storeUser')->name('register');    
    });

    // -------------------------- forget password ---------------------------//
    Route::controller(ForgotPasswordController::class)->group(function () {
        Route::get('forget-password', 'getEmail')->name('forget-password');
        Route::post('forget-password', 'postEmail')->name('forget-password');    
    });

    // --------------------------- reset password ---------------------------//
    Route::controller(ResetPasswordController::class)->group(function () {
        Route::get('reset-password/{token}', 'getPassword');
        Route::post('reset-password', 'updatePassword');    
    });
});

Route::group(['namespace' => 'App\Http\Controllers'],function()
{
        Route::middleware('auth')->prefix('dashboard')->group(function () {
        // --------------------- main dashboard ------------------//
        Route::controller(HomeController::class)->group(function () {
            Route::get('crm-analytics', 'index')->name('dashboard/crm-analytics');
            Route::get('orders', 'orders')->name('dashboard/orders');
            Route::get('crypto-1', 'cryptoOne')->name('dashboard/crypto-1');
            Route::get('crypto-2', 'cryptoTwo')->name('dashboard/crypto-2');
            Route::get('banking-1', 'cbankingOne')->name('dashboard/banking-1');
            Route::get('banking-2', 'bankingTwo')->name('dashboard/banking-2');
            Route::get('personal', 'personal')->name('dashboard/personal');
            Route::get('cms-analytics', 'cmsAnalytics')->name('dashboard/cms-analytics');
            Route::get('influencer', 'influencer')->name('dashboard/influencer');
            Route::get('travel', 'travel')->name('dashboard/travel');
            Route::get('teacher', 'teacher')->name('dashboard/teacher');
            Route::get('education', 'education')->name('dashboard/education');
            Route::get('authors', 'authors')->name('dashboard/authors');
            Route::get('doctor', 'doctor')->name('dashboard/doctor');
            Route::get('employees', 'employees')->name('dashboard/employees');
            Route::get('workspace', 'workspace')->name('dashboard/workspace');
            Route::get('meeting', 'meeting')->name('dashboard/meeting');
            Route::get('project-boards', 'projectBoards')->name('dashboard/project-boards');
            Route::get('widget-ui', 'widgetUI')->name('dashboard/widget-ui');
            Route::get('widget-contacts', 'widgetContacts')->name('dashboard/widget-contacts');
        });
    });

    // -------------------------- Apps ----------------------//
    Route::middleware('auth')->prefix('apps')->group(function () {
        Route::controller(AppsController::class)->group(function () {
            Route::get('list', 'list')->name('apps/list');
        });
    });
});