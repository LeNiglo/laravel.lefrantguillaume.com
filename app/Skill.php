<?php

namespace LefrantGuillaume;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'skills';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'progress'];


    /**
     * The experiences associated with the skill.
     */
    public function experiences()
    {
        return $this->belongsToMany('LefrantGuillaume\Experience');
    }

    public function bsClass()
    {
        if ($this->progress > 80) {
            return "success";
        } else if ($this->progress > 55) {
            return "info";
        } else if ($this->progress > 30) {
            return "warning";
        } else {
            return "danger";
        }
    }
}
