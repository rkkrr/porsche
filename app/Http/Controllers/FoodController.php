<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Food;

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
            
           return view('newproduct.restaurant', ['data'=>$data]);
            

 }
 
 
}
