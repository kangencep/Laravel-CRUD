<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    //
    protected $table = 'user';
    use SoftDeletes;
    protected $data = 'delete_at';
}
