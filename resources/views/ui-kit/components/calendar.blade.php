{{-- Calendar: FullCalendar v6 with month/week/list views. --}}
<div class="card">
    <div class="card-header">
        <div class="card-title">Event calendar</div>
    </div>
    <div class="card-body">
        <div id="demo-calendar"></div>
    </div>
</div>

@push('js')
    <script>
        (function () {
            var el = document.getElementById('demo-calendar');
            var fc = window.FullCalendar;

            if (!el || !fc) {
                return;
            }

            var calendar = new fc.Calendar(el, {
                initialView: 'dayGridMonth',
                headerToolbar: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'dayGridMonth,timeGridWeek,listWeek',
                },
                height: 'auto',
                navLinks: true,
                events: [
                    { title: 'Sprint planning', start: '2026-10-05T10:00:00', color: '#206bc4' },
                    { title: 'Design review', start: '2026-10-09T14:00:00', color: '#2f9e44' },
                    { title: 'Release v1.2', start: '2026-10-15', end: '2026-10-16', color: '#d63939' },
                    { title: 'One-on-one', start: '2026-10-21T16:30:00', color: '#f59f00' },
                ],
            });

            calendar.render();
        })();
    </script>
@endpush