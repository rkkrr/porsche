<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Food;
use App\User;

class Food extends Model
{
    protected $fillable = ['foodtype', 'user_id'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }
    
    // public function doukis(){   
        
    //     $data = [];
  
    //     $foodtype = $data->foodtype;
       
    //     $data = DB::table('foods')->pluck('foodtype')->get();
    //     $data = [
    //         'foodtype' => $foodtype,
    //     ];
    // }
    
}
