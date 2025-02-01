<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Userbanks extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'codehesab',
        'sh_hesab',
        'sh_card',
        'sh_sheba',
        'type',
        'has_check',
        'balance',
        'office_id',
        'banklist_id',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'has_check' => 'boolean',
        'balance' => 'decimal',
    ];
}
