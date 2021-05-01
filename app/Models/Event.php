<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{

     /**
     * products  that the shop belongs to.
     */
    public function workshops()
    {
        return $this->hasMany('App\Models\Workshop');
    }
}
