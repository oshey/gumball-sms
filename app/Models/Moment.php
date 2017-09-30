<?php

namespace Gumball\Models;

use Illuminate\Database\Eloquent\Model;

class Moment extends Model
{
    protected $fillable = ['when'];

    /**
     * Get all of the owning models.
     */
    public function model()
    {
        return $this->morphTo();
    }
}
