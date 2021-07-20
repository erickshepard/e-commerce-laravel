<?php

use Illuminate\Support\Facades\Route;
/** Agregamos el componente */
use App\Http\Livewire\HomeComponent;

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

//te::get('/', function () {
// return view('welcome');
//

/**Ruta del home component */
Route::get('/',HomeComponent::class);
