<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Calendar Display</title>
        <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />

        <script src="<?php echo base_url('scripts/jquery-3.3.1.min.js'); ?>"></script>
        <link rel="stylesheet" href="<?php echo base_url() ?>scripts/fullcalendar/fullcalendar.min.css" />
               <script src="<?php echo base_url() ?>scripts/fullcalendar/lib/moment.min.js"></script>
               <script src="<?php echo base_url() ?>scripts/fullcalendar/fullcalendar.min.js"></script>
               <script src="<?php echo base_url() ?>scripts/fullcalendar/gcal.js"></script>
               <script src="<?php echo base_url() ?>scripts/fullcalendar/locale/id.js"></script>


    </head>
    <body>

    <div class="container">
    <div class="row">
    <div class="col-md-12">

    <h1>Calendar</h1>
    <div id="calendar">
    <script type="text/javascript">
       $(document).ready(function() {
            $('#calendar').fullCalendar({
                locale: 'id',
				eventSources: [
            		{
                		color: '#18b9e6',   
                		textColor: '#000000',
                		events: function(start, end, timezone, callback){
							$.ajax({
								url:'<?php echo base_url() ?>calendar/get_events',
								dataType: 'json',
								data:{
									start: start.unix(),
									end: end.unix()
								},
								success: function(msg){
									var events = msg.events;
									callback(events);
								}
							});
						}
                        
            		},
        		]
            });
        });
</script>
    </div>    



    </div>
    </div>
    </div>


<script type="text/javascript">
$(document).ready(function() {

});
</script>
    </body>
</html>