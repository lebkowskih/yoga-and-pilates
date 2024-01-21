<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\User;
use App\Interfaces\LessonRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

final class AjaxController extends Controller
{
    public LessonRepositoryInterface $lessonRepositoryInterface;

    public function __construct(LessonRepositoryInterface $lessonRepositoryInterface)
    {
        $this->lessonRepositoryInterface = $lessonRepositoryInterface;
    }
    public function getLessons(Request $request)
    {
        $lessons = $this->lessonRepositoryInterface->getAvailableLessons();
        $user = Auth::user();

        $lessons = $lessons->map(function (Lesson $lesson) use ($user) {
            if ($user->lessons()->where('lesson_id', $lesson->id)->exists()) {
                $lesson->isEnrolled = true;
            } else {
                $lesson->isEnrolled = false;
            }
        
            return $lesson;
        });

        return response()->json($lessons);
    }
}
