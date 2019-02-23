<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

class User extends Eloquent
{
    protected $fillable = ['firstname', 'lastname','department_id', 'email','contact_number', 'password'];


    public static function userList()
    {
        $users = User::get();
        return $users;

    }

}