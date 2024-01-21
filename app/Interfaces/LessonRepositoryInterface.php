<?php

namespace App\Interfaces;
use Illuminate\Database\Eloquent\Collection;

interface LessonRepositoryInterface 
{
    public function getAllLessons(): Collection;
    public function getAvailableLessons();
}