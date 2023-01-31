<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;
    protected $table ='schools';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'email', 'phone', 'address', 'school_info', 'year_established', 'district_code', 'vcd_code', 'status','school_currency','currency_position', 'school_code', 'school_type_id'
    ];
}
