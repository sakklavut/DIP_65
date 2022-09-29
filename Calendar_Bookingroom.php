<?php include('comtop.php'); ?>
<?php include('header.php'); ?>
<script>
     document.addEventListener('DOMContentLoaded', function() {
  var initialLocaleCode = 'th';
  var localeSelectorEl = document.getElementById('locale-selector');
  var calendarEl = document.getElementById('calendar');

  var calendar = new FullCalendar.Calendar(calendarEl, {
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
    },
    locale: initialLocaleCode,
    buttonIcons: false, // show the prev/next text
    weekNumbers: true,
    navLinks: true, // can click day/week names to navigate views
    editable: true,
    dayMaxEvents: true, // allow "more" link when too many events
//     events: 'https://fullcalendar.io/api/demo-feeds/events.json?overload-day'
    events: [
        {
          title: 'Meeting',
          start: '2020-09-13T11:00:00',
          constraint: 'availableForMeeting', // defined below
          color: '#257e4a'
        },
        {
          title: 'ห้องประชุม 2 ชั้น 3 13.00 - 18.00 ',
          start: '2022-09-13',
          end: '2022-09-15' ,
          color: '#82288C;'
          
        },
        {
          title: 'Party',
          start: '2020-09-29T20:00:00'
        },

        // areas where "Meeting" must be dropped
        {
          groupId: 'availableForMeeting',
          start: '2020-09-11T10:00:00',
          end: '2020-09-11T16:00:00',
          display: 'background'
        },
        {
          groupId: 'availableForMeeting',
          start: '2020-09-13T10:00:00',
          end: '2020-09-13T16:00:00',
          display: 'background'
        },

        // red areas where no events can be dropped
        {
          start: '2020-09-24',
          end: '2020-09-28',
          overlap: false,
          display: 'background',
          color: '#ff9f89'
        },
        {
          start: '2020-09-06',
          end: '2020-09-08',
          overlap: false,
          display: 'background',
          color: '#ff9f89'
        }
      ]

  });

  calendar.render();

  // build the locale selector's options
  calendar.getAvailableLocaleCodes().forEach(function(localeCode) {
    var optionEl = document.createElement('option');
    optionEl.value = localeCode;
    optionEl.selected = localeCode == initialLocaleCode;
    optionEl.innerText = localeCode;
    localeSelectorEl.appendChild(optionEl);
  });

  // when the selected option changes, dynamically change the calendar option
  localeSelectorEl.addEventListener('change', function() {
    if (this.value) {
      calendar.setOption('locale', this.value);
    }
  });

});
//   document.addEventListener('DOMContentLoaded', function() {
//     var calendarEl = document.getElementById('calendar');

//     var calendar = new FullCalendar.Calendar(calendarEl, {
//       headerToolbar: {
//         left: 'prev,next today',
//         center: 'title',
//         right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
//       },
//       initialDate: '2022-07-13',
//       navLinks: true, // can click day/week names to navigate views
//       businessHours: true, // display business hours
//       editable: true,
//       selectable: true,
//       events: [
//         {
//           title: 'ประชุมไอสัส <br> ddd',
//           start: '2022-07-012T13:00:00',
//           constraint: 'businessHours'
//         },
//         {
//           title: 'Meeting',
//           start: '2020-09-13T11:00:00',
//           constraint: 'availableForMeeting', // defined below
//           color: '#257e4a'
//         },
//         {
//           title: 'ประชุม',
//           start: '2022-07-13',
//           end: '2022-07-20'
//         },
//         {
//           title: 'Party',
//           start: '2020-09-29T20:00:00'
//         },

//         // areas where "Meeting" must be dropped
//         {
//           groupId: 'availableForMeeting',
//           start: '2020-09-11T10:00:00',
//           end: '2020-09-11T16:00:00',
//           display: 'background'
//         },
//         {
//           groupId: 'availableForMeeting',
//           start: '2020-09-13T10:00:00',
//           end: '2020-09-13T16:00:00',
//           display: 'background'
//         },

//         // red areas where no events can be dropped
//         {
//           start: '2020-09-24',
//           end: '2020-09-28',
//           overlap: false,
//           display: 'background',
//           color: '#ff9f89'
//         },
//         {
//           start: '2020-09-06',
//           end: '2020-09-08',
//           overlap: false,
//           display: 'background',
//           color: '#ff9f89'
//         }
//       ]
//     });

//     calendar.render();
//   });

</script>

<style>
     .logo_meet{
          width: 50px;
     }
     .H_meet{
          color:#82288C;
          font-weight: bold;
     }
     ul#sub_menu li {
          display: inline;
     }
     #calendar {
    max-width: 1100px;
    margin: 0 auto;
  }

</style>


<div class="container-fluid mar-spacehead" style="background-color: #F1EDEA">
    <div class="container ">
        <form id="contact-form" action="#" method="post" role="form" novalidate="novalidate">
            <div class="error-container"></div>
            <div class="row">
                <h4 class="col-12 text-center  font-h-search  pt-4 pb-4 H_meet">
                       <img class="logo_meet" src="images/2meet.png" alt="">  จองห้องประชุม
                </h4>
            </div>
        </form>
    </div>
</div>
<div class="container">
  <div class="row">
      <div class="col-xl-12">
          <h1 class="h2-color pt-4">ปฏิทินการจองห้องประชุมเดือน มิถุนายน</h1>
      </div>
  </div>
  <div class="row">
      <div class="col-xl-12">
          <ul id="sub_menu">
            <li>
                <a href="index.php">หน้าแรก</a>
            </li>
            <li>
                &gt; 
            </li>
            <li>
                <a href="#"> ปฏิทินจองห้องประชุม</a>
            </li>
          </ul>
      </div>
      <hr class="hr_news mt-3">
  </div>
</div>

<div class="container">
  <div class="row">
     <div class="col-xl-12">
          <div class="d-flex justify-content-end">
               <select  id="inputState" class="form-control col-xl-4 m-3">
                    <option selected>แสดงการจองห้องประชุมทั้งหมด</option>
                    <option>...</option>
               </select>
          </div>
     </div>
  </div>
  <div class="row">
     <div class="col-xl-12 col-sm-12 col-12 ">
          <div id='calendar' class="mb-3"></div>
     </div>
  </div>
</div>




<?php include('footer.php'); ?>
<?php include('combottom.php'); ?>

