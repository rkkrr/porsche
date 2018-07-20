<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function foodtype(){
        return $this->belongsToMany(Food::class, 'foods', 'user_id', 'foodtype');}
        
    public function users_foods(){
        return $this->belongsToMany(User::class, 'users_foods', 'id', 'user_id');
    }
    
    public function choose($userID){
        
    return $this->users_foods()->attach($userID);
    }
    
}
//     public function getData()
//   {
//     $data = DB::table($this->table)->get();

//     return $data;
//   }

    
    

