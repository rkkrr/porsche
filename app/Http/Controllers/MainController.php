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
           'q4' => 'required',
           'q5' => 'required',
           'q6' => 'required',
           'q7' => 'required',
           'q8' => 'required',
           'q9' => 'required',
           'q10' => 'required',
           'q11' => 'required',
        
           
       ]);
        
        $data = new Result;
        
        $data->q1 =  $request->q1;
        $data->q2 =  $request->q2;
        $data->q3 =  $request->q3;
        $data->q4 =  $request->q4;
        $data->q5 =  $request->q5;
        $data->q6 =  $request->q6;
        $data->q7 =  $request->q7;
        $data->q8 =  $request->q8;
        $data->q9 =  $request->q9;
        $data->q10 = $request->q10;
        $data->q11 = $request->q11;
        
        $data->q12 = $request->q12;
       
       $data->save();
       
       $result = $this->score($data);
       
       $content =  $data->q12;
       
      return view ('psychotest.show', ['result' => $result, 'content'=>$content]);
       
   } }
    
    function score($data){
        $result =intval($data->q1)+intval($data->q2)+intval($data->q6)+intval($data->q7)+intval($data->q10)+intval($data->q11);
        return $result;
    }
}
