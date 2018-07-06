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
    
    
    public function show(Request $request){
        
        return view ('psychotest.show');
        
    }
    
    public function store(){
        $data = new Result;
        $data->id = $request->id;
        $data->nickname = $request->nickname;
        $data->q1 =  $request->q1;
        $data->save();
    }
}
