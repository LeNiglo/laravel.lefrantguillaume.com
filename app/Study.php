<?php

namespace LefrantGuillaume;

use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'studies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['year', 'school', 'title'];
}
