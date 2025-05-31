<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User_Regsitration extends Model
{
    //
    protected $fillable = [
        'full_name',
        'email',
        'phone_number',
        'state',
        'job_title',
        'company_name',
        'subscription_ticket'
    ];
}
