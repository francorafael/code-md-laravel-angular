<?php

namespace CodeProject\Entities;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //falar quais campos que podem passar num processo de create com array
    protected $fillable = [
        'owner_id',
        'client_id',
        'name',
        'description',
        'progress',
        'status',
        'due_date'
    ];

    public function owner()
    {
        return $this->belongsTo('CodeProject\User');
    }

    public function client()
    {
        return $this->belongsTo('CodeProject\Client');
    }
}
