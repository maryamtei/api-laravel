<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedule';
    protected $fillable = ['user_id', 'week'];
    public function meals()
    {
        return $this->hasMany(Meal::class, 'schedule_id')
                    ->as('meals');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id')
                    ->as('user');
    }
    use HasFactory;
}
