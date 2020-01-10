<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    //
    protected $fillable = [
        'totalquestion1', 'totalanswer1a', 'totalanswer1b','totalanswer1c', 'totalanswer1d','totalquestion2', 'totalanswer2a','totalanswer2a',
         'totalanswer2b','totalanswer2c', 'totalanswer2d',
        'totalquestion3', 'totalanswer3a','totalanswer3b', 'totalanswer3c','totalanswer3d', 'totalquestion4','totalanswer4a', 'totalanswer4b',];
        
}
