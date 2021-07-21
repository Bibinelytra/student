<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class students extends Model
{

 protected $table = 'students';

 protected $fillable = [
        'name', 'age', 'gender', 'reporting_teacher'
    ];


 public function mark()
    {
    	return $this->belongsTo('App\mark','mark_id');
    }
            

    //
}
