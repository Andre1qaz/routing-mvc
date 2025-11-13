<?php  
use Illuminate\Support\Facades\Route; 
 
Route::get('/', function () {     return view('welcome'); 
});  use App\Http\Controllers\ProfilController; 
 
Route::get('/profil', [ProfilController::class, 'index']); 
Route::get('/profil/about', [ProfilController::class, 'about']); 
Route::get('/profil/contact', [ProfilController::class, 'contact']); 
