<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    //
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nameService', 'description', 'longDescription', 'imageService', 'url', 'publish'
    ];
}
