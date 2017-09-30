<?php

namespace Gumball\Models;

use Illuminate\Database\Eloquent\Model;

class Phone extends Model
{
    protected $fillable = ['number', 'type'];

    /**
     * Get all of the owning models.
     */
    public function model()
    {
        return $this->morphTo();
    }
}
