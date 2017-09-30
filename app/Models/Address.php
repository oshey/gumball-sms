<?php

namespace Gumball\Models;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = ['street', 'city', 'parish'];

    public function teacher(){
        return $this->belongsTo(User::class);
    }

    public function countries(){
        return $this->belongsToMany(Country::class);
    }

    /**
     * @param $country
     * @return mixed
     */
    public function setCountry($country){

        if(is_string($country)){
             $country = Country::name($country)->first()->id;
        }

        return $this->countries()->sync($country);
    }
}
