<div wire:ignore class="modal fade" id="lessonFormModal" tabindex="-1" aria-labelledby="lessonFormModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="lessonFormModalLabel">{{ __('Dodaj trening') }}</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div> 
            <div class="modal-body">
                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('Nazwa treningu') }}</label>
                    <input type="text" wire:model="name" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <x-datetimepicker wire:model="start_date" :id="'start_date'" label="{{ __('Data rozpoczęcia treningu') }}"></x-datetimepicker>
                </div>
                <div class="mb-3">
                    <x-datetimepicker wire:model="end_date" :id="'end_date'" label="{{ __('Data zakończenia treningu') }}"></x-datetimepicker>
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">{{ __('Cena treningu') }}</label>
                    <input type="text" wire:model="price" class="form-control" id="price">
                </div>
                <div class="mb-3">
                    <label for="clients_limit" class="form-label">{{ __('Limit miejsc') }}</label>
                    <input type="text" wire:model="clients_limit" class="form-control" id="clients_limit">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Zamknij') }}</button>
                <button type="submit" class="btn btn-primary" wire:click="save">{{ __('Dodaj') }}</button>
            </div>
        </div>
    </div>
</div>
@script
<script>
    modal = new Modal($('#lessonFormModal'));
    $wire.on('update-lessons', () => {
        modal.hide();
        toastr.success('Sukces');
    });
</script>
@endscript