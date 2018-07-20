<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Food extends Model
{
    protected $fillable = ['foodtype', 'user_id'];
    
    public function user(){
        return $this->hasMany(User::class);
    }
}
