<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /** @use HasFactory<\Database\Factories\CourseFactory> */
    use HasFactory;

    protected $filable =
    [
        'name',
        'description',
    ];

    public function section()
    {
        return $this->hasMany(Section::class);
    }
    public function lessons()
    {
        return $this->hasManyThrough(Lesson::class, Section::class);
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggable');
    }
}
