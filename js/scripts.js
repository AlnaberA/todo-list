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
                     alert("Task deleted.");
                     window.location.reload();
                 }
            });
        }
      });
      $( ".statusPending" ).change(function() {
             var id = $(this).attr('data-id');
             var title = $(this).attr('data-info1');
             var description = $(this).attr('data-info2');
             var date = $(this).attr('data-info3');
             var status = $(this).val();
             alert( id + ' ' + title + '' + description + ' ' + date + ' ' + status );
              $.ajax({
                type:'POST',
                url:'ajax/updatePendingTask.php',
                data:{
                    id:id,
                    title:title,
                    description:description,
                    date:date,
                    status:status
                },
                success:function(){
                     alert("Task status updated.");
                     window.location.reload();
                 }
            });
       });

});

