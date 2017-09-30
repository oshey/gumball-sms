<?php

namespace Gumball\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
    ];

    protected $appends = ['full_name'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function birthday()
    {
        return $this->morphOne(Moment::class, 'model');
    }

    public function phone()
    {
        return $this->morphOne(Phone::class, 'model');
    }

    public function profile()
    {
        return $this->morphOne(Profile::class, 'model');
    }

    public function address()
    {
        return $this->morphOne(Address::class, 'model');
    }

    /**
     * Loads the profile for a specific teacher
     * @param $teacher_id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null|static|static[]
     */
    public static function getProfile($teacher_id){
        return User::with('profile', 'birthday', 'phone', 'address.countries')->find($teacher_id);
    }

    public function getFullNameAttribute(){

        if($profile = $this->profile) {
            $title = $profile->title ? $profile->title . ' ' : '';
            $f_name = $profile->first_name ? $profile->first_name : '';
            $m_name = $profile->middle_name ? ' ' . $profile->middle_name : '';
            $l_name = $profile->last_name ? ' '.$profile->last_name : '';
            return $title . $f_name . $m_name . $l_name;
        }

        return '';
    }
}
