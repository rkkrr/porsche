<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Result;


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
    
    public function store(Request $request){
        
        $this->validate($request, [
           'q1' => 'required',
           'q2' => 'required',
           'q3' => 'required',
       ]);
        
        $data = new Result;
        //$data->id = $request->id;
        $data->q1 =  $request->q1;
        $data->q2 =  $request->q2;
        $data->q3 =  $request->q3;
        $data->save();
      
      return view ('psychotest.show', $data);
    }
    
    public function score($data){
        
       $result1 = $data->q1;
       $result2 = $data->q2;
       $result3 = $data->q3;
       
       $result = $result1+$result2+$result3;
       

       
        
        
    }
}
