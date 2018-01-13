$( function() {
    $('#date').datepicker({
        minDate : 0 //Only allow future dates and present.
    });
  });
$(document).ready(function(){
    $('#pendingTable').DataTable();
    $('#startedTable').DataTable();
    $('#completedTable').DataTable();
    $('#lateTable').DataTable();
    
    $( ".del_pendingTask_btn" ).click(function() {
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
             //alert( id + ' ' + title + '' + description + ' ' + date + ' ' + status );
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
       
       $( ".del_startedTask_btn" ).click(function() {
       var id = $(this).attr('data-id');
       //alert( id );
        if(confirm("Are you sure you want to delete this task?")) {
            $.ajax({
                type:'POST',
                url:'ajax/deleteStartedTask.php',
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
      $( ".statusStarted" ).change(function() {
             var id = $(this).attr('data-id');
             var title = $(this).attr('data-info1');
             var description = $(this).attr('data-info2');
             var date = $(this).attr('data-info3');
             var status = $(this).val();
             //alert( id + ' ' + title + '' + description + ' ' + date + ' ' + status );
              $.ajax({
                type:'POST',
                url:'ajax/updateStartedTask.php',
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
       
       $( ".del_completedTask_btn" ).click(function() {
       var id = $(this).attr('data-id');
       //alert( id );
        if(confirm("Are you sure you want to delete this task?")) {
            $.ajax({
                type:'POST',
                url:'ajax/deleteCompletedTask.php',
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
      $( ".statusCompleted" ).change(function() {
             var id = $(this).attr('data-id');
             var title = $(this).attr('data-info1');
             var description = $(this).attr('data-info2');
             var date = $(this).attr('data-info3');
             var status = $(this).val();
             //alert( id + ' ' + title + '' + description + ' ' + date + ' ' + status );
              $.ajax({
                type:'POST',
                url:'ajax/updateCompletedTask.php',
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
       
       $( ".del_lateTask_btn" ).click(function() {
       var id = $(this).attr('data-id');
       //alert( id );
        if(confirm("Are you sure you want to delete this task?")) {
            $.ajax({
                type:'POST',
                url:'ajax/deleteLateTask.php',
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
      $( ".statusLate" ).change(function() {
             var id = $(this).attr('data-id');
             var title = $(this).attr('data-info1');
             var description = $(this).attr('data-info2');
             var date = $(this).attr('data-info3');
             var status = $(this).val();
             //alert( id + ' ' + title + '' + description + ' ' + date + ' ' + status );
              $.ajax({
                type:'POST',
                url:'ajax/updateLateTask.php',
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

