<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

/**
 * @property string $name name of province
 * @property string $description description about province
 * @property-read string $slug      unique slug based on name
 */
class Province extends Model
{

 
    protected $fillable = [
        'name',
        'description',
    ];

    public $timestamps = false;

    /**
     * Cities of province.
     *
     * @codeCoverageIgnore
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }


}
