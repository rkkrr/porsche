<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{

    public function score(){
        $result =intval($data->q1)+intval($data->q2)+intval($data->q3);
 
    }
    /**
     * 結果を所有するUserを取得
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
