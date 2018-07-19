<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class FoodController extends Controller
{
     
    public function food_store(Request $request){
           $this->validate($request, [
           'foodtype' => 'required',
           ]);
           
            $data = new User;
            $data->foodtype = $request->foodtype;
            
            $data->save();

            return redirect()->back();
 }
}
