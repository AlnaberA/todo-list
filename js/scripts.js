$( function() {
    $('#date').datepicker({
        minDate : 0 //Only allow future dates and present.
    });
  });
$(document).ready(function(){
    $('#pendingTable').DataTable();
    
    $( "#del_pendingTask_btn" ).click(function() {
       var id = $(this).attr('data-id');
       //alert( id );
        if(confirm("Are you sure you want to delete this task?")) {
            $.ajax({
                type:'POST',
                url:'ajax/deletePendingTask.php',
                data:{
                    id:id
                },
                success:function(){
                     alert("Task deleted");
                     window.location.reload();
                 }
            });
        }
      });
      $( ".statusPending" ).change(function() {
             var id = $(this).attr('data-id');
             alert( id );
       });

});

