<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class FoodController extends Controller
{
     
    public function food_store(Request $request){
           $this->validate($request, [
           'foodtype' => 'required',
           ]);
           
            $data = new Food;
            $data->foodtype = $request->foodtype;
            
            $data->save();
            $results = $this->score($data);

             return view ('newproduct.restaurant');
 }
}
