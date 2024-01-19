<?php

namespace App\Livewire;

use App\Models\Lesson;
use Livewire\Attributes\On;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class LessonForm extends Component
{
    public ?Lesson $lesson;
    public string $name = '';
    public string $start_date = '';
    public string $end_date = '';
    public string $price = '';
    public string $clients_limit = '';
    public function render()
    {
        return view('livewire.lesson-form');
    }

    #[On('edit-lesson')]
    public function edit(Lesson $lesson): void
    {
        $this->lesson = $lesson;
        $this->name = $lesson->name;
        $this->start_date = $lesson->start_date;
        $this->end_date = $lesson->end_date;
        $this->price = $lesson->price;
        $this->clients_limit = $lesson->clients_limit;
    }

    #[On('create-lesson')]
    public function create(): void
    {
        $this->lesson = new Lesson();
    }

    public function save(): void
    {
        if (! $this->lesson->exists) {
            $this->lesson->fill($this->only(['name', 'start_date', 'end_date', 'price', 'clients_limit']))->save();
        } else {
            $this->lesson->update($this->all());
        }

        $this->dispatch('update-lessons');
    }
}
