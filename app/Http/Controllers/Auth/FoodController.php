<?php

namespace App\Http\FoodControllers;

use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
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

            return view ('food.store', ['food' => $data ]);
 }
}
