<div class="d-flex">
    <div class="col-12">
        <div class="d-flex justify-content-center mb-4">
            <a class="me-4 @if($showCalendar) active @endif" wire:click="$set('showCalendar', true)">
                <h5>{{ __('Kalendarz zajęć')}}</h5>
            </a>
            <a class="me-4 @if(! $showCalendar) active @endif" wire:click="$set('showCalendar', false)">
                <h5>{{ __('Twoje zapisy')}}</h5>
            </a>
        </div>
        @can('manage', App\Models\Lesson::class)
        <!-- Moderator view -->
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#lessonFormModal" wire:click="$dispatch('create-lesson')">
            <i class="fa-solid fa-plus"></i>
            {{ __('Dodaj zajęcia') }}
        </button>
        <div class="card mt-2">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">{{ __('ID') }}</th>
                            <th scope="col">{{ __('Nazwa treningu') }}</th>
                            <th scope="col">{{ __('Data') }}</th>
                            <th scope="col">{{ __('Cena')}}</th>
                            <th scope="col">{{ __('Limit klientów')}}</th>
                            <th scope="col">{{ __('Akcje') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lessons as $lesson)
                            <tr wire:key="{{ $lesson->id }}">
                                <td>{{ $lesson->id }}</td>
                                <td>{{ $lesson->name }}</td>
                                <td>{{ $lesson->start_date . ' - ' .  $lesson->end_date }}</td>
                                <td>{{ $lesson->price }}</td>
                                <td>{{ $lesson->clients_limit }}
                                <td>
                                    <a class="me-2" wire:click="emitEdit({{ $lesson }})" data-bs-toggle="modal" data-bs-target="#lessonFormModal">
                                        <i class="fa-solid fa-pencil text-black"></i>
                                    </a>
                                    <a class="me-2" wire:click="delete({{ $lesson->id }})">
                                        <i class="fa-solid fa-trash text-black"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <livewire:lesson-form/>
        @endcan
        @can ('enroll', App\Models\Lesson::class)
        <!-- Client view -->
            <div style="@if (! $showCalendar) display: none @endif">
                <x-calendar/>
            </div>
            <div>
                <!-- WIP: Lessons which user is enrolled -->
            </div>
        @endcan
    </div>
</div>