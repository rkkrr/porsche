<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Food;

class FoodController extends Controller
{
<<<<<<< HEAD
 
     
     
     
=======
>>>>>>> bd7d08c668a39473f883b5cd3742872d952b80a3
    public function food_store(Request $request){

           $this->validate($request, [
           'age' => 'required',
           ]);
           
            $data = new Food;
            $data->foodtype = $request->age;
            
            $data->user_id = \Auth::user()->id;
            
           $data->save();
            
           return view('newproduct.restaurant', [$data]);
            
<<<<<<< HEAD
=======
            $data->save();
            $results = $this->score($data);

             return view ('newproduct.restaurant' , ['results' => $results,]);
>>>>>>> bd7d08c668a39473f883b5cd3742872d952b80a3
 }
 
 
}
