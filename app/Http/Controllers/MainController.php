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
        
        return view ('/');
        
    }
    
    public function store(Request $request){
        
        $this->validate($request, [
           'q1' => 'required',
           'q2' => 'required',
           'q3' => 'required',
       ]);
        
        $data = new Result;

        $data->q1 =  $request->q1;
        $data->q2 =  $request->q2;
        $data->q3 =  $request->q3;
        $data->save();
        
        $result =intval($data->q1)+intval($data->q2)+intval($data->q3);
 
        
      return view ('psychotest.show', $result);
        
    }
}
