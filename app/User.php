<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

use App\Food;
use App\Result;

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
        return $this->hasOne(Food::class);}
        
    public function invitings()
    {
        return $this->belongsToMany(User::class, 'user_invite', 'user_id', 'invite_id')->withTimestamps();
    }

    public function inviters()
    {
        return $this->belongsToMany(User::class, 'user_invite', 'invite_id', 'user_id')->withTimestamps();
    }
    
    public function invite($userId)
{
    // confirm if already following
    $exist = $this->is_inviting($userId);
    // confirming that it is not you
    $its_me = $this->id == $userId;

    if ($exist || $its_me) {
        // do nothing if already following
        return false;
    } else {
        // follow if not following
        $this->invitings()->attach($userId);
        return true;
    }
}

public function uninvite($userId)
{
    // confirming if already following
    $exist = $this->is_inviting($userId);
    // confirming that it is not you
    $its_me = $this->id == $userId;


    if ($exist && !$its_me) {
        // stop following if following
        $this->invitings()->detach($userId);
        return true;
    } else {
        // do nothing if not following
        return false;
    }
}


    public function is_inviting($userId) {
    return $this->invitings()->where('invite_id', $userId)->exists();
}
    
}

    
    

