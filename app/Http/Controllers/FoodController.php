<?php

namespace App\Http\FoodControllers;

use Illuminate\Http\Request;
use App\User;

class FoodController extends Controller
{
     
    public function food_store(Request $request){
           $this->validate($request, [
           'food' => 'required',
           ]);
           
            $data = new User;
            $data->food = $request->food;
            
            $data->save();

            return redirect()->back();
 }
}
