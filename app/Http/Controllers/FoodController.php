<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Food;
use Illuminate\Support\Facades\DB;

class FoodController extends Controller
{
     public function food_store(Request $request){

           $this->validate($request, [
           'age' => 'required',
           ]);
           
            $data = new Food;
            $data->foodtype = $request->age;
            $data->user_id = \Auth::user()->id;
            $data->save();
            
           return redirect('/answer2');
    }    
        
    public function show(){
        
        $data = Food::where('user_id',\Auth::user()->id)
              ->first();
              
              
        $foods=Food::where('foodtype',$data->foodtype)
              ->inRandomOrder()
              ->take(3)
              ->get();
         
          
         return view('newproduct.restaurant',['foods'=>$foods]);     
              
           
    }
}

