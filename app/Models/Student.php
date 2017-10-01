<?php

namespace Gumball\Models;

use Gumball\Traits\ProfileTrait;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use ProfileTrait;

    public function profile()
    {
        return $this->morphOne(Profile::class, 'model');
    }

    public function birthday()
    {
        return $this->morphOne(Moment::class, 'model');
    }

    /**
     * Loads the profile for a specific teacher
     * @param $student_id
     * @return \Illuminate\Database\Eloquent\Collection|Model|null|static|static[]
     */
    public static function getProfile($student_id){
        return Student::with('profile', 'birthday')->find($student_id);
    }
}
