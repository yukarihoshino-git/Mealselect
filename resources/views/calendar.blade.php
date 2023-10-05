<x-layout-top>
    <link rel="stylesheet" href="{{ asset('css/top.css') }}">
    <meta charset='utf-8' />
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.9/index.global.min.js'>
    </script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            events: '/setEvents',
            navLinks:true,
            selectable: true,
            eventClick:function (e) {
                var paramstr = e.event.id;
                location.href ='/editevent' +paramstr;
            },
            headerToolbar: {
                left: "dayGridMonth,listMonth",
                    center: "title",
                    right: "today prev,next"
            },
            buttonText: {
                    today: '今月',
                    month: '戻る',
                    list: '献立一覧',
                    prev:'back',
                    next:'next'
                },
            footerToolbar: {
                right: "prev,next"
            },
            dayMaxEvents: true,
            timeZone: "Asia/Tokyo",
            select: function (info) {
                var paramstr = info.startStr;
                var paramid = {{ Auth::id() }}
                location.href ='/addform' +paramstr +paramid;
            },
        });
        calendar.render();
      });
    </script>

<main id = "main">
    <div class="user_id">
{{ Auth::id() }}
    </div>
    <div class ="calendar">
        <div id='calendar'>
        </div>
    </div>
</main>
</x-layout-top>
