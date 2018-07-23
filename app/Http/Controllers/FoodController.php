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
        
        
        $users = DB::table('foods')
           ->join('users', function($join ){
               $join->on('foods.user_id', '=', 'users.id')
           ->select('foods.foodtype', 'users.name')
           ->where('foodtype', '$age')
           ->value('name')
           ->inRandomOrder()
           ->first();})
           ->get();
           
        
           
           return view('newproduct.restaurant',['users'=>$users]);
           
    }
}

