<?php

namespace App\Repositories;

use App\Interfaces\LessonRepositoryInterface;
use App\Models\Lesson;
use Illuminate\Database\Eloquent\Collection;

class LessonRepository implements LessonRepositoryInterface 
{
    public function getAllLessons(): Collection
    {
        return Lesson::all();
    }

    public function getAllLessonsForCalendar()
    {
        $allLessons = Lesson::all();

        $allLessons = $allLessons->map(function (Lesson $lesson) {
            $lesson->title = $lesson->name;
            $lesson->start = $lesson->start_date;
            $lesson->end = $lesson->end_date;

            unset($lesson->name, $lesson->start_date, $lesson->end_date);
            return $lesson;
        });

        return $allLessons;
    }
}
