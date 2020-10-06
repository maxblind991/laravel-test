<?php

use App\Http\Controllers\QuestionnaireController;
use App\Http\Controllers\AnswersController;
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

//Route::get('questionnaire/{questionnaire}', [QuestionnaireController::class, 'single'])->name('questionnaire');
Route::get('questionnaire/{slug}', [QuestionnaireController::class, 'slug'])->name('slug');

Route::post('questionnaire/{slug}', [AnswersController::class, 'submitted']);
