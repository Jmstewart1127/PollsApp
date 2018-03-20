<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Choices extends Model
{
    protected $fillable = [
        'poll_id', 'choice_title', 'number_of_votes'
    ];
}
