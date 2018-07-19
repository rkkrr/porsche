<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Food extends Model
{
    protected $fillable = ['foodtype', 'user_id'];
    
    public function users(){
        return $this->hasMany(User::class);
    }
}
