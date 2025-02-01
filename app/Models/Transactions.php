<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transactions extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type',
        'dateandtime',
        'amount',
        'sourcetype',
        'sourceid',
        'desttype',
        'destid',
        'office_id',
        'category_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'dateandtime' => 'timestamp',
        'amount' => 'decimal',
        'sourceid' => 'integer',
        'destid' => 'integer',
    ];
}
