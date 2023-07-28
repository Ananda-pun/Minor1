
$(document).ready(function(){
    $(document).on('change','#faculty', function(){
        var facultyID = $(this).val();
        if(facultyID){
            $.ajax({
                type:'POST',
                url:'addaction.php',
                data:{'faculty_id':facultyID}, 
                success:function(result){
                    $('#program').html(result);  
                }
            }); 
        }
        else{
            $('#program').html('<option value="">faculty</option>');
            $('#semester').html('<option value="">program </option>');
            $('#course').html('<option value="">course </option>');  
        }
    });
            

    
    $(document).on('change','#semester', function(){
        var semesterID = $(this).val();
        var programID = $('#program').val();

        if(semesterID){
            $.ajax({
                type:'POST',
                url:'addaction.php',
                data: { 'semester': semesterID,
                        'program': programID},
                success:function(result){
                    $('#course').html(result);
                    // console.log(semesterID, programID);
                   // console.log("Succes");
                }
            }); 
        }else{
            $('#course').html('<option value="">course</option>');
            
        } 
    });
});
         
  