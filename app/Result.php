<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    public function score(){
        $result =intval($data->q1)+intval($data->q2)+intval($data->q3);
 
    }
}
