<?php

use Illuminate\Support\Facades\Route;
/** Agregamos el componente home*/
use App\Http\Livewire\HomeComponent;
/**Componente Shop */
use App\Http\Livewire\ShopComponent;
/**COmponente cart */
use App\Http\Livewire\CartComponent;
/**Copmponent checkout */
use App\Http\Livewire\CheckoutComponent;
/**Component User Dashboard */
use App\Http\Livewire\User\UserDashboardComponent;
/**Componente admin dashboard */
use App\Http\Livewire\Admin\AdminDashboardComponent;
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
/**Ruta shop */
Route::get('/shop',ShopComponent::class);
/**Ruta cart */
Route::get('/cart',CartComponent::class);
/**Ruta checout */
Route::get('/checkout',CheckoutComponent::class);

//dEFAULT
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//    return view('dashboard');
//})->name('dashboard');

// For User or Customer
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/user/dashboard',UserDashboardComponent::class)->name('user.dashboard');

});
// For Admin
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
    Route::get('/admin/dashboard', AdminDashboardComponent::class)->name('admin.dashboard');
});
