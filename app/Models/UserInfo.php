<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    use HasFactory;
    
    protected $table = 'user_infos';
    protected $fillable = [
        'id',
        'firstname',
        'middlename',
        'lastname',
        'birthdate',
        'age',
        'birthplace',
        'phone_number',
        'address',
        'email',
        'username',
        'password'
    ];
}
