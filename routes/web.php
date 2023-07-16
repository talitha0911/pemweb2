<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

use App\Http\Controllers\TokoController;


Route::prefix('toko')->group(function(){



    Route::get('/',
        [TokoController::class,'index']);
 
    Route::get('/detail',
        [TokoController::class,'detail']);
    
    Route::get('/about',
        [TokoController::class,'about']); 


    Route::group(['middleware' => ['auth']], function(){

        Route::get('/admin',
            [TokoController::class,'admin'])->name('produk.admin');

        Route::get('/create',
            [TokoController::class,'create'])->name('produk.create');

        Route::post('/',
            [TokoController::class,'store'])->name('produk.store');

         Route::get('/customers', 
             [TokoController::class, 'customers'])->name('produk.customers');

        Route::get('AddCustomer', 
            [TokoController::class, 'AddCustomer'])->name('produk.AddCustomer');

        Route::post('NewCustomer', 
            [TokoController::class, 'NewCustomer'])->name('produk.NewCustomer');
            
        Route::get('/{product}/edit',
            [TokoController::class,  'edit'])->name('produk.edit');

        Route::delete('/{product}',
            [TokoController::class,  'destroy'])->name('produk.destroy');

        Route::put('/{product}',
            [TokoController::class,  'update'])->name('produk.update');
        
    });    


   

    

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
