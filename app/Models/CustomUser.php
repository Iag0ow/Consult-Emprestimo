<?php

namespace App\Models;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Foundation\Auth\User as AuthenticatableUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomUser extends AuthenticatableUser implements Authenticatable
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];    
    protected $hidden = [
        'password',
    ];

    protected $username = 'email';

    protected $primaryKey = 'user_id';
    protected $table = 'user';

    const CREATED_AT = 'cadastrado';
    const UPDATED_AT = 'atualizado';
    
}
