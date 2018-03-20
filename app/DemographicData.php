<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DemographicData extends Model
{
    protected $fillable = [
        'user_id', 'race', 'sex', 'age', 'latitude', 'longitude', 'city', 'state'
    ];

}
