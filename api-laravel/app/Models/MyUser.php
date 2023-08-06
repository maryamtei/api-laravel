<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyUser extends Model
{
    protected $table = 'user';
    protected $fillable = ['firstName', 'lastName', 'email','password','role_id'];
    public function favorites()
    {
        return $this->hasMany(Favorite::class, 'user_id')
                    ->as('favorites');
    }
    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'user_id')
                    ->as('schedules');
    }

    public function role()
    {
        return $this->belongsTo(Role::class, 'role_id')
                    ->as('role');
    }
    use HasFactory;
}
