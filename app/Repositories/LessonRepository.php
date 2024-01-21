<?php

namespace App\Repositories;

use App\Interfaces\LessonRepositoryInterface;
use App\Models\Lesson;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;

class LessonRepository implements LessonRepositoryInterface 
{
    public function getAllLessons(): Collection
    {
        return Lesson::all();
    }

    public function getAvailableLessons()
    {
        $availableLessons = Lesson::where('clients_limit', '>', 0)->where('start_date', '>', Carbon::now())->get();

        $availableLessons = $availableLessons->map(function (Lesson $lesson) {
            $lesson->title = $lesson->name;
            $lesson->start = $lesson->start_date;
            $lesson->end = $lesson->end_date;

            unset($lesson->name, $lesson->start_date, $lesson->end_date);
            return $lesson;
        });

        return $availableLessons;
    }
}
