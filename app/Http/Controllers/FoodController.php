<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;

class FoodController extends Controller
{
     
    public function food_store(Request $request){
        // print '<pre>';
         return print $request->age;
           \Auth::user() -> choose($request->age);
           
           $this->validate($request, [
           'foodtype' => 'required',
           ]);
           
           
            $data = new Food;
            $data->foodtype = $request->foodtype;
            $data->user_id = $ID->user_id;
            
            $data->save();

            return redirect()->back();
 }
}
