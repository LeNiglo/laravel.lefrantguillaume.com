<?php

namespace LefrantGuillaume;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'experiences';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['begin_date', 'end_date', 'company', 'subject', 'rating', 'commentary'];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['created_at', 'updated_at', 'begin_date', 'end_date'];

    /**
     * The skills associated with the working experience.
     */
    public function skills()
    {
        return $this->belongsToMany('LefrantGuillaume\Skill');
    }

    public function bsClass()
    {
        if ($this->rating >= 4) {
            return "success";
        } else if ($this->rating >= 3) {
            return "info";
        } else if ($this->rating >= 2) {
            return "warning";
        } else {
            return "danger";
        }
    }
}
