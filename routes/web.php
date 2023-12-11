<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userfeedbackController;
use App\Http\Controllers\whistleblowerController;
use App\Http\Controllers\complaintsController;
use App\Http\Controllers\complaintsViewController;
use App\Http\Controllers\userfeedbackViewController;
use App\Http\Controllers\whistleblowerViewController;
use App\Http\Controllers\ecomController;
use App\Http\Controllers\iAuditController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('/register');
});

// Route::get('/uf', function () {
//     return view('userfeedback');
// });

Route::get('/register', [AuthController::class, 'register'])->name('register.home');
Route::post('/register', [AuthController::class, 'registerPost'])->name('register');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'loginPost'])->name('login');
Route::delete('/logout', [AuthController::class, 'logout'])->name('logout');



Route::middleware(['auth', 'member'])->group(function () {
    // Routes for members
    Route::get('/home', [HomeController::class, 'index'])->name('index.home');
    Route::get('/complaints', [complaintsController::class, 'complaintsHome'])->name('complaints.home');
    Route::post('/complaints', [complaintsController::class, 'complaintsPost'])->name('complaints.post');

    Route::get('/complaintsView', [complaintsViewController::class, 'complaintsView'])->name('complaints.view');

    Route::get('/whistleblower', [whistleblowerController::class, 'whistleblowerhome'])->name('whistleblower.home');
    Route::post('/whistleblower', [whistleblowerController::class, 'whistleblowerPost'])->name('whistleblower.post');

    Route::get('/whistleblowerView', [whistleblowerViewController::class, 'whistleblowerView'])->name('whistleblower.view');

    Route::get('/userfeedback', [userfeedbackController::class, 'ufeedbackhome'])->name('userfeedback.home');
    Route::post('/userfeedback', [userfeedbackController::class, 'ufeedbackpost'])->name('ufeedbackpost');

    Route::get('/userfeedbackView', [userfeedbackViewController::class, 'userfeedbackView'])->name('userfeedback.view');
});

Route::middleware(['auth', 'ethics_com'])->group(function () {
    // Routes for ethics_com
    Route::get('/ethicscom', [ecomController::class, 'ecomHome'])->name('ethicsCom.home');

    Route::get('/analyticsEC', [ecomController::class, 'ecomAnalytics'])->name('ethicsCom.analytics');
});
Route::middleware(['auth', 'internal_audit'])->group(function () {

    Route::get('/complaintsIA', [iAuditController::class, 'iauditcomplaints'])->name('complaintsIA.home');
    Route::get('/whistleblowerIA', [iAuditController::class, 'iauditwblower'])->name('wblowerIA.home');

    Route::delete('/complaints/delete/{id}', [iAuditController::class, 'deleteComplaint'])->name('deleteComplaint');
    Route::patch('/complaints/update-status/{id}', [iAuditController::class, 'updateComplaintStatus'])->name('updateComplaintStatus');

    Route::delete('/whistleblowerreps/delete/{id}', [iAuditController::class, 'deleteWblower'])->name('deleteWblower');
    Route::patch('/whistleblowerreps/update-status/{id}', [iAuditController::class, 'updateWblowerStatus'])->name('updateWblowerStatus');
});