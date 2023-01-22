<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'events';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'host', 'location', 'activity', 'distance', 'mode', 'entry_fee', 'reg_start_date', 'reg_end_date',
        'event_start_date', 'event_end_date', 'rewards', 'rules', 'max_enrolments', 'top_participants_count',
        'prize_distribution_type', 'prize_list', 'thumbnail_image', 'description', 'status',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'host' => 'string',
        'location' => 'string',
        'activity' => 'string',
        'distance' => 'float',
        'mode' => 'string',
        'entry_fee' => 'float',
        'reg_start_date' => 'date',
        'reg_end_date' => 'date',
        'event_start_date' => 'date',
        'event_end_date' => 'date',
        'rewards' => 'string',
        'rules' => 'string',
        'max_enrolments' => 'integer',
        'top_participants_count' => 'integer',
        'prize_distribution_type' => 'string',
        'prize_list' => 'string',
        'thumbnail_image' => 'string',
        'description' => 'string'
    ];
}
