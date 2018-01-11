$( function() {
    $('#date').datepicker({
        minDate : 0 //Only allow future dates and present.
    });
  });
$(document).ready(function(){
    $('#pendingTable').DataTable();
});

