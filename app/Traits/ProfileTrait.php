<?php
/**
 * Created by PhpStorm.
 * User: Oshey
 * Date: 10/1/2017
 * Time: 8:48 AM
 */

namespace Gumball\Traits;


trait ProfileTrait
{
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