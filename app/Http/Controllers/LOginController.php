<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class LOginController extends Controller
{
    public function index(){
   
        return view("Registro");
    
        
    }
    public function Iniciodesesion() {
        return view ('iniciodesesion');
        
    }
    


     
    
}
