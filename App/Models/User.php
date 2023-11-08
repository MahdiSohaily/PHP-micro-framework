<?php

namespace App\Models;

use App\Models\Contracts\mysqlBaseModel;

class User extends mysqlBaseModel
{
    protected $table = 'users';
}
