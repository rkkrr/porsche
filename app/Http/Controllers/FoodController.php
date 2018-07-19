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

            return redirect()->back();
 }
}
