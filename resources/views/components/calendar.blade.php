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
        eventClick: function (info) {
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