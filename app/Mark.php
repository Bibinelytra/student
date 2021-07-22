<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mark extends Model
{
    //

    protected $table = 'mark';

 protected $fillable = [
        'term', 'science', 'maths', 'history','student_id'
    ];


    public function student_details()
    {
    return $this->belongsTo('App\Students', 'student_id');
    }
}
