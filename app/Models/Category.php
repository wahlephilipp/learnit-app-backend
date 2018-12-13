<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
    ];

    public function quizzes()
    {
        return $this->belongsToMany(Quiz::class, 'category_quizzes');
    }
}
