<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name name of provice
 * @property string $description description about province
 * @property int $province_id province id of city
 * @property-read string $slug      unique slug based on name
 */
class City extends Model
{


    protected $fillable = [
        'name',
        'description',
        'province_id',
    ];

    protected $with = ['province'];
    public $timestamps = false;

    /**
     * Province of city.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function province()
    {
        return $this->belongsTo(Province::class);
    }

}
