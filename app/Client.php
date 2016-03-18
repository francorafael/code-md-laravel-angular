<?php

namespace CodeProject;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    //falar quais campos que podem passar num processo de create com array
    protected $fillable = [
        'name',
        'responsible',
        'email',
        'phone',
        'address',
        'obs'
    ];
}
