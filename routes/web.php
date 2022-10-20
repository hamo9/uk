<?php

use App\Mail\ContactMail;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LangController;
use App\Http\Controllers\User\userController;
use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\User\ContactControler;
use App\Http\Controllers\User\DepartmentsController;

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


Route::group(['middleware' => 'Locale'], function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Route::get('/about-us', function () {
        return view('pages.about_us');
    });
  

    Route::get('/contact-us', [ContactControler::class, 'index']);

    Route::post('send-contact', [ContactControler::class, 'send_contact']);

    

    Route::controller(DepartmentsController::class)->group(function(){
        Route::get('/programs','index');
        Route::get('/programs/department-of-business-administration','department_of_business_administration');
        Route::get('/programs/department-of-crisis-management','department_of_crisis_management');
        Route::get('/programs/department-of-international-relations-and-diplomacy','department_of_international_relations_and_diplomacy');
        Route::get('/programs/department-international-arbitration-and-international-law','department_international_arbitration_and_international_law');
        Route::get('/programs/department-of-health-nutrition','department_of_health_nutrition');
        Route::get('/programs/department-of-Law-criminal-law','department_of_Law_criminal_law');
        Route::get('/programs/department-of-political-Science','department_of_political_Science');
        Route::get('/programs/department-of-integrated-quality-management-system','department_of_integrated_quality_management_system');
        Route::get('/programs/department-of-business-consulting','department_of_business_consulting');
        Route::get('/programs/department-of-human-resources-management','department_of_human_resources_management');
        Route::get('/programs/department-accounting-and-auditing','department_accounting_and_auditing');
        Route::get('/programs/department-of-physical-education','department_of_physical_education');
        Route::get('/programs/department-of-business-administration','department_of_business_administration');
        Route::get('/programs/department-of-integrated-non-surgical-aesthetic-medicine','department_of_integrated_non_surgical_aesthetic_medicine');

    });




    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');



    Route::group(['middleware' => 'auth'], function () {
        Route::controller(userController::class)->group(function(){
            Route::get('/complete-register','complete_register');
            Route::get('/profile','profile');
            Route::get('/edit-profile','edit_profile');
            Route::get('/change-pass','change_pass');
            Route::post('/completeRegister','completeRegister');
        });
    });

    Route::group(['middleware' => 'auth'], function () {
        Route::controller(adminController::class)->group(function(){
            Route::get('/dashboard','index');
        });
    });

    Route::get('/user-profile/{id}', [userController::class, 'user_profile']);

});

//language
Route::controller(LangController::class)->group(function(){
    Route::get('/lang/{lang}','index');
});



require __DIR__.'/auth.php';
