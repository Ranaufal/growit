<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IncomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\WorkspaceController;
use App\Http\Controllers\WorkspaceUserController;
use App\Models\Detail;
use Illuminate\Auth\Events\Login;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/team', function () {
    return view('team.index');
});
Route::get('/', [HomeController::class,'index']);
Route::get('/subs/{id}', [HomeController::class, 'show'])->name("subs");
Route::post('/checkout', [SubscriptionController::class, 'process'])->name("checkout-process");
Route::get('/checkout/{subs}', [SubscriptionController::class, 'checkout'])->name("checkout");
Route::get('/checkout/success/{subs}', [SubscriptionController::class, 'success'])->name("checkout-success");
// Route::get('/testpdf', function () {
//     return view('income.pdfview');
// });
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/register', [LoginController::class, 'register']);
Route::post('/register', [LoginController::class, 'registerProses']);
Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');
Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/workspace');
})->middleware(['auth', 'signed'])->name('verification.verify');


Route::get('/table',[IncomeController::class, 'table'])->name('table');
Route::get('/dash/{id}/{workspace_name}', [DashboardController::class, 'index'])->middleware(['auth', 'verified']);
Route::resource('/workspace',WorkspaceController::class)->middleware(['auth', 'verified']);
Route::get('/export_income_pdf/{id}',[IncomeController::class, 'export_income_pdf'])->middleware(['auth', 'verified']);
// Route::get('/export_expand_pdf/{id}',[IncomeController::class, 'export_expand_pdf'])->middleware(['auth', 'verified']);
Route::get('/export_report_pdf/{id}',[ReportController::class, 'export_report_pdf'])->middleware(['auth', 'verified']);
// Route::get('/income', function () {
//     return view('income.index');
// });

Route::post('/logout', [LoginController::class, 'logout']);
// Route::get('/create', function () {
//     return view('expand.create');
// });
// Route::get('/expand', function () {
//     return view('expand.index');
// });
Route::resource('/workspace-user', WorkspaceUserController::class)->middleware(['auth','verified']);


Route::get('/report-backend/{id}', [ReportController::class,'index'])->middleware(['auth', 'verified']);
// Route::resource('/expand-backend', DetailController::class)->middleware(['auth', 'verified']);
// Route::get('expand/list', [DetailController::class, 'index'])->name('expands.list');
Route::get('/expand-backend/{id}', [DetailController::class,'index'])->middleware(['auth', 'verified']);
Route::post('/expand-backend/{id}', [DetailController::class,'store'])->middleware(['auth', 'verified']);
Route::get('/expand-backend/create/{id}', [DetailController::class,'create'])->middleware(['auth', 'verified']);
Route::get('/{idi}', [DetailController::class,'show'])->middleware(['auth', 'verified']);


Route::get('/income-backend/{id}', [IncomeController::class,'index'])->middleware(['auth', 'verified']);
Route::post('/income-backend/{id}', [IncomeController::class,'store'])->middleware(['auth', 'verified']);
Route::get('/{idi}', [IncomeController::class,'show'])->middleware(['auth', 'verified']);
Route::get('/income-backend/create/{id}', [IncomeController::class,'create'])->middleware(['auth', 'verified']);
// Route::resource('/income-backend', DetailController::class);
Route::get('/team-backend/{id}', [TeamController::class,'index'])->middleware(['auth', 'verified']);
Route::delete('/{id}/{idi}', [TeamController::class,'destroy'])->middleware(['auth', 'verified']);
Route::post('/team-backend/{id}', [TeamController::class,'store'])->middleware(['auth', 'verified']);