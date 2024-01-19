<?php

namespace App\Http\Controllers;

use App\Interfaces\LessonRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

final class AjaxController extends Controller
{
    public LessonRepositoryInterface $lessonRepositoryInterface;

    public function __construct(LessonRepositoryInterface $lessonRepositoryInterface)
    {
        $this->lessonRepositoryInterface = $lessonRepositoryInterface;
    }
    public function getLessons(Request $request)
    {
        $lessons = $this->lessonRepositoryInterface->getAllLessonsForCalendar();
        return response()->json($lessons);
    }
}
