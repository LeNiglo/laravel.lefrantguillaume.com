<?php

namespace LefrantGuillaume;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'emails';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['from', 'email', 'subject', 'body'];

}
