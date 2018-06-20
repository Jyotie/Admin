<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    @include('AdminTheme.themeAdmin.head')

    <body id="mimin" class="dashboard">

        @include('AdminTheme.themeAdmin.header')

        <div class="container-fluid mimin-wrapper">

            @include('AdminTheme.themeAdmin.menu')

            <!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                    <div class="panel-body">
                        <div class="col-md-12">
                            <h3 class="animated fadeInLeft">Calendario</h3>
                            <p class="animated fadeInDown">
                                Menú Principal <span class="fa-angle-right fa"></span> Calendario
                            </p>
                        </div>
                    </div>
                </div>
                <div class="panel">
                    <div class="panel-heading"><h3></h3></div>
                    <div class="panel-body">
                      <!--<div class="col-md-3">
                        <div id='external-events'>
                        <h4> Eventos arrastrables </h4>
                          <div class='fc-event label'>My Event 1</div>
                          <div class='fc-event label'>My Event 2</div>
                          <div class='fc-event label'>My Event 3</div>
                          <div class='fc-event label'>My Event 4</div>
                          <div class='fc-event label'>My Event 5</div>
                          <div class='fc-event label'>My Event 6</div>
                          <p>
                            <input type='checkbox' id='drop-remove' />
                            <label for='drop-remove'>Remover después de desplazar</label>
                          </p>
                        </div>
                      </div>-->
                      <div class="col-md-9">
                        <div id='calendar'> 
                            <iframe src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=danigd71%40gmail.com&amp;color=%231B887A&amp;ctz=Europe%2FMadrid" style="border-width:0" width="900" height="600" frameborder="0" scrolling="no"></iframe>
                        </div>
                      </div>
                      
                    </div>
                  </div>
            </div>
            <!-- end: content -->
        </div>

        <!-- end: Content -->
        <!-- start: Javascript -->
        <script src="asset/js/jquery.min.js"></script>
        <script src="asset/js/jquery.ui.min.js"></script>
        <script src="asset/js/bootstrap.min.js"></script>


        <!-- plugins -->
        <script src="asset/js/plugins/moment.min.js"></script>
        <script src="asset/js/plugins/fullcalendar.min.js"></script>
        <script src="asset/js/plugins/jquery.nicescroll.js"></script>


        <!-- custom -->
        <script src="asset/js/main.js"></script>
        <script type="text/javascript">
        $(document).ready(function(){
        $('#external-events .fc-event').each(function() {
        // store data so the calendar knows to render an event upon drop
        $(this).data('event', {
        title: $.trim($(this).text()), // use the element's text as the event title
                stick: true // maintain when user navigates (see docs on the renderEvent method)
        });
                // make the event draggable using jQuery UI
                $(this).draggable({
        zIndex: 999,
                revert: true, // will cause the event to go back to its
                revertDuration: 0  //  original position after the drag
        });
        });


        /* $('#calendar').fullCalendar({
         header: {
         left: 'prev,next today',
         center: 'title',
         right: 'month,agendaWeek,agendaDay'
         },
         editable: true,
         droppable: true, // this allows things to be dropped onto the calendar
         drop: function(date, jsEvent, ui ) {
 
         // is the "remove after drop" checkbox checked?
         if ($('#drop-remove').is(':checked')) {
         // if so, remove the element from the "Draggable Events" list
         $(this).remove();
         }
         }
         });
         });*/
        </script>
        <!-- end: Javascript -->
    </body>
</html>