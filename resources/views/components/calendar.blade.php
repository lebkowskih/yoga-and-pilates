<script type="module">
    const calendarEl = document.getElementById('calendar');
    const calendar = new Calendar(calendarEl, {
        locales: [ plLocale ],
        locale: 'pl',
        themeSystem: 'bootstrap5',
        plugins: [
            dayGridPlugin, interactionPlugin
        ],
        initialView: 'dayGridMonth',
        weekends: true,
        selectable: true,
        dateClick: function() {
            
        }
    });

    calendar.render();
</script>

<div class="col-8 bg-white" id="calendar">
</div>
