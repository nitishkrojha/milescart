<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AccessToken extends Model
{

    protected $table = 'personal_access_tokens';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'token', 'customer_id',
    ];

    /**
     * Get the customer that owns the access token.
     */
    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
