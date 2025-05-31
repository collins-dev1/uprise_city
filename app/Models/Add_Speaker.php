<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Add_Speaker extends Model
{
    protected $fillable = [
        'speaker_name',
        'speaker_photo',
        'speaker_description1',
        'speaker_description2',
        'speaker_description3',
        'speaker_description4',
    ];
}
