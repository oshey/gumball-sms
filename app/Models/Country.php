<?php

namespace Gumball\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $fillable = ['name'];

    public function addresses()
    {
        return $this->belongsToMany(Address::class);
    }

    public function scopeName($query, $name)
    {
        return $query->where('name', $name);
    }
}
