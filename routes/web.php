<?php

use App\Models\Signupuser;
use Illuminate\Support\Facades\Route;

use App\Http\Middleware\NoBackHistory;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\TxTFileController;
use App\Http\Controllers\NavbarUserController;

use App\Http\Controllers\ContentUserController;
use App\Http\Controllers\WelcomePageController;
use App\Http\Controllers\TextToSpeechController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Beginning Page
Route::get('/',[WelcomePageController::class, 'welcomepage'])->middleware('guest');

// User Account Page
Route::get('/loginpageuser',[AccountController::class, 'loginpageuser'])
    ->middleware(['guest', 'no-back-history'])
    ->name('login');
Route::get('/signuppageuser',[AccountController::class, 'signuppageuser'])->name('signuppageuser');
Route::post('/Save',[AccountController::class, 'Save'])->name('Save');
Route::post('/Check',[AccountController::class, 'Check'])->name('Check');

// Feature User Page
Route::get('/homepageuser',[AccountController::class, 'homepageuser'])->middleware(['auth', 'no-back-history']);
Route::get('/teknologiinformasidankomunikasi',[NavbarUserController::class, 'teknologiinformasidankomunikasi']);
Route::get('/aboutus',[NavbarUserController::class, 'aboutus']);
Route::get('/suggestionscriticism',[NavbarUserController::class, 'suggestionscriticism']);

// Content
Route::get('/sejarahperkembangantik',[ContentUserController::class, 'sejarahperkembangantik']);
Route::get('/pengertiantik',[ContentUserController::class, 'pengertiantik']);
Route::get('/komponenkomponen',[ContentUserController::class, 'komponenkomponen']);
Route::get('/manfaattik',[ContentUserController::class, 'manfaattik']);
Route::get('/dampaktik',[ContentUserController::class, 'dampaktik']);
Route::get('/penerapantik',[ContentUserController::class, 'penerapantik']);

Route::get('/masaprasejarah',[ContentUserController::class, 'masaprasejarah']);
Route::get('/masasejarah',[ContentUserController::class, 'masasejarah']);
Route::get('/masamodern',[ContentUserController::class, 'masamodern']);
Route::get('/sejarahperkembangankomputer',[ContentUserController::class, 'sejarahperkembangankomputer']);

// Route::post('/texttospeech', [TextToSpeechController::class, 'texttospeech']);
Route::get('/tts', [TextToSpeechController::class, 'index']);
Route::post('/tts/texttospeech', [TextToSpeechController::class, 'texttospeech']);

Route::get('/txtfile', [TxTFileController::class, 'other']);
Route::post('/txtfile/audiorequestcontrol', [TxTFileController::class, 'audiorequestcontrol']);

// Route::get('/tts/play', [TxTFileController::class, 'play']);
// Route::get('/tts/play/{filename}', [TxTFileController::class, 'play']);
Route::post('/tts/generate', [TxTFileController::class, 'generate']);
Route::get('/tts/play/{filename}', [TxTFileController::class, 'play']);


Route::post('/logoutuser',[AccountController::class, 'logoutuser'])->name('logoutuser');