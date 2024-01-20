<script type="module">
    const calendarEl = document.getElementById('calendar');
    const calendar = new Calendar(calendarEl, {
        locales: [ plLocale ],
        locale: 'pl',
        themeSystem: 'bootstrap5',
        plugins: [
            dayGridPlugin, interactionPlugin, bootstrap5Plugin
        ],
        themeSystem: 'bootstrap5',
        initialView: 'dayGridMonth',
        weekends: true,
        eventDidMount: function (info) {
            tippy(info.el, {
                theme: 'tomato',
                trigger: 'click',
                placement: 'bottom',
                content: '<div style="\ text-align: center\"><p>Cena zajęć: ' + info.event.extendedProps.price + ' zł</p> <button wire>Test</button></div>',
                allowHTML: true,
                hideOnClick: false,
                interactive: true,
                animation: 'fade',
                arrow: true,

            });
        },
        displayEventEnd: true,
        eventColor: '#000000',
        eventDisplay: 'block',
        events: '{{ route('events') }}'
    });

    calendar.render();
</script>

<div class="bg-white" id="calendar">
</div>