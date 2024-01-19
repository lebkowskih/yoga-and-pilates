<?php

namespace App\Repositories;

use App\Interfaces\LessonRepositoryInterface;
use App\Models\Lesson;

class LessonRepository implements LessonRepositoryInterface 
{
    public function getAllLessons()
    {
        return Lesson::all();
    }
}
