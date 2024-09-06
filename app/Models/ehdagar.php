<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ehdagar extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'name_pedar' ,
        'role' ,
        'date_t' ,
        'ostan_id' ,
        'city_id'      ,
        'ostan_name',
        'city_name'  ,
        'meli_id'    ,
        'phone',
    ];
}
