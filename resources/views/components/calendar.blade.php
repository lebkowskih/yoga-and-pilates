<script type="module">
    const calendarEl = document.getElementById('calendar');
    const calendar = new Calendar(calendarEl, {
        locales: [ plLocale ],
        locale: 'pl',
        themeSystem: 'bootstrap5',
        plugins: [
            dayGridPlugin, interactionPlugin, bootstrap5Plugin
        ],
        initialView: 'dayGridMonth',
        eventBackgroundColor: '#87676787',
        eventBorderColor: '#87676787',
        weekends: true,
        eventDidMount: function (instance) {
            if (!instance.event.extendedProps.isEnrolled) {
                tippy(instance.el, {
                    theme: 'tippyTheme',
                    placement: 'bottom',
                    content: '<div style="\ text-align: center\"><p>Cena zajęć: ' + instance.event.extendedProps.price + ' zł</p><a class="text-red" wire:click="$dispatch(\'enroll\', { lessonId: ' + instance.event.id + ' })">Zapisz się</a></div>',
                    allowHTML: true,
                    interactive: true,
                    trigger: 'mouseenter',
                    onShow(instance) {
                        instance.setProps({trigger: 'click'});
                    },
                    onHide(instance) {
                        instance.setProps({trigger: 'mouseenter'})
                    }
                });
            }

            if (instance.event.extendedProps.isEnrolled) {
                instance.event.setProp('backgroundColor', 'red' );
                instance.event.setProp('title' , instance.event.title + 'jesteś zapisany');
            }
        },
        displayEventEnd: true,
        eventDisplay: 'block',
        events: '{{ route('events') }}'
    });

    calendar.render();
</script>

<div wire:ignore class="bg-white" id="calendar">
</div>