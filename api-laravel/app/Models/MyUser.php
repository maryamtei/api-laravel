<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyUser extends Model
{
    protected $table = 'user';
    protected $fillable = ['firstName', 'lastName', 'email','password'];
    use HasFactory;
}
