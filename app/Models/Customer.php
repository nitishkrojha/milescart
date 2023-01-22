<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;

class Customer extends Model
{
    use HasApiTokens;

    // Fillable fields for the model
    protected $fillable = [
        'username',
        'email',
        'phone',
        'password',
        'dob',
        'weight',
        'height',
        'profile_picture',
        'login_type',
        'email_otp',
        'email_otp_expire_at',
        'sms_otp',
        'sms_otp_expire_at',
    ];

    // Hidden fields for the model (used by the Hash facade to hide the password)
    protected $hidden = [
        'password',
    ];

    // Cast fields to a specific data type
    protected $casts = [
        'email_otp_expire_at' => 'datetime',
        'sms_otp_expire_at' => 'datetime',
    ];
}
