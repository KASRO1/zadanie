<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;
use Illuminate\Database\Eloquent\Model;


class User extends Model implements Authenticatable
{
    use AuthenticableTrait;
    protected $fillable = [
       'email', 'password', 'role'
    ];

    public function hasRole($role)
    {
        return $this->role === $role;
    }
}
