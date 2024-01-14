<?php

namespace App\Livewire;

use App\Models\Lesson;
use Livewire\Component;

class LessonsComponent extends Component
{
    public function render()
    {
        return view('livewire.lessons-component')
            ->layout('layouts.home')->with([
                'lessons' => Lesson::all()
            ]);
    }
}
