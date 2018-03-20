<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserVotes extends Model
{
    protected $fillable = [
        'poll_id', 'answer_id', 'user_id', 'choice_selected'
    ];

}
