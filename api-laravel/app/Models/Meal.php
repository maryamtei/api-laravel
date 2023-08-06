<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meal extends Model
{
    protected $table = 'meal';
    protected $fillable = ['idDbMeal', 'schedule_id', 'name','image','position'];
    public function schedule()
    {
        return $this->belongsTo(Schedule::class, 'schedule_id')
                    ->as('schedule');
    }
    use HasFactory;
}
