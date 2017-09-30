<?php

namespace Gumball\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $fillable = ['title','first_name','middle_name','last_name', 'gender'];

    /**
     * Get all of the owning models.
     */
    public function model()
    {
        return $this->morphTo();
    }
}
