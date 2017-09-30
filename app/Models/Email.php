<?php

namespace Gumball\Models;

use Illuminate\Database\Eloquent\Model;

class Email extends Model
{
    protected $fillable = ['address'];

    /**
     * Get all of the owning models.
     */
    public function model()
    {
        return $this->morphTo();
    }
}
