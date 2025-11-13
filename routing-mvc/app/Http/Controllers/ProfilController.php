<?php
  
namespace App\Http\Controllers; 
 
use Illuminate\Http\Request; 
 
class ProfilController extends Controller 
{ 
    public function index() 
    {         return view('profil.index'); 
}  
    public function about() 
    {         return view('profil.about'); 
    
    }      
    public function contact() 
    {         return view('profil.contact'); 
} 
} 
