<?php
defined('BASEPATH') OR exit('No direct script access allowed');
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Eloquent\SoftDeletes;
// use SoftDeletes;
class Users extends Eloquent
{
    protected $table = 'users';

    protected $fillable = [
        'name',
        'username',
        'remember_token',
        'password',
        'address',
    ];

    public $timestamps = false;
}
