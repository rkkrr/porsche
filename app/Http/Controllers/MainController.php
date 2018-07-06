<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class MainController extends Controller
{
    public function index(){
        
        
        return view ('psychotest.index');
        
        
    }
    
    public function test(){
        
        return view ('psychotest.test');
    }
    
    
    public function show(){
        
        return view ('psychotest.show');
        
    }
}
