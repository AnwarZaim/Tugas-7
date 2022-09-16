<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Http\Controllers\AdminUserController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


use App\Models\UserDetail;

class User extends Authenticatable
{
    protected $table = 'user';
    use  HasFactory, Notifiable;

    function detail()
    {
        return $this->hasOne(UserDetail::class, 'id_user');
    }
}
