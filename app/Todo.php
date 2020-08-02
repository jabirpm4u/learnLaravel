<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    // either do fillable (to allow) or guarded (to restrict )
    protected $guarded = [];
}
