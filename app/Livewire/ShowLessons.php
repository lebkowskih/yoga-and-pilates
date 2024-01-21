<?php

namespace App\Livewire;

use App\Interfaces\LessonRepositoryInterface;
use App\Models\Lesson;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class ShowLessons extends Component
{
    public Collection $lessons;
    private LessonRepositoryInterface $lessonRepositoryInterface;

    #[On('update-lessons')]
    public function mount(LessonRepositoryInterface $lessonRepositoryInterface): void
    {
        $this->lessonRepositoryInterface = $lessonRepositoryInterface;
        $this->lessons = $this->lessonRepositoryInterface->getAllLessons();
    }
    public function render()
    {
        return view('livewire.show-lessons')
            ->layout('layouts.home');
    }

    public function delete(int $id): void
    {
        Lesson::find($id)->delete();
        $this->dispatch('update-lessons');
    }

    public function emitEdit(Lesson $lesson): void
    {
        $this->dispatch('edit-lesson', $lesson)->to(LessonForm::class);
    }

    #[On('enroll')]
    public function enroll(int $lessonId) : void
    {
        $user = Auth::user();
        $user->lessons()->attach($lessonId, ['lesson_id' => $lessonId]);
    }
}
