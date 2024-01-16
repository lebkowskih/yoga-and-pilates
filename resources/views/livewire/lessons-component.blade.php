<div class="d-flex">
    <!-- Modal -->
    
    @teleport('body')
    <div class="modal fade" id="addLessonsModal" tabindex="-1" aria-labelledby="addLessonsModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="addLessonsModalLabel">{{ __('Dodaj trening') }}</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div> 
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('Nazwa treningu') }}</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <x-select2 :id="'test'" inModal="{{ true }}" modalId="addLessonsModal"></x-select2>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Zamknij') }}</button>
                    <button type="button" class="btn btn-primary">{{ __('Dodaj') }}</button>
                </div>
            </div>
        </div>
    </div>
    @endteleport
    <div class="col-12">
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addLessonsModal">
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
                            <th scope="col">{{ __('Akcje') }}</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($lessons as $lesson)
                            <tr wire:key="{{ $lesson->id }}">
                                <td>{{ $lesson->id }}</td>
                                <td>{{ $lesson->name }}</td>
                                <td>{{ $lesson->start_date . ' - ' .  $lesson->end_date }}</td>
                                <td>
                                    <a class="me-2">
                                        <i class="fa-solid fa-pencil text-black"></i>
                                    </a>
                                    <a class="me-2">
                                        <i class="fa-solid fa-trash text-black"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>