/**
 * Created by Brody on 4/3/2016.
 */
$(document).ready(function() {
    $("#date").datepicker({
        changeMonth: true,
        changeYear:true
    });

    $('#start_time').timepicker({
        'minTime': '8:00am'
    });

    $('#end_time').timepicker({
        'minTime': '8:00am'
    });
    
});