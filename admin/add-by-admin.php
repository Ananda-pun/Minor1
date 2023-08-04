<?php 
    include('../include/dbconnection.php');
        if(isset($_POST['add-course'])){

            // var_dump($_POST); die();
            
            
        
                $faculty_id = $_POST['faculty'];
                $program_id = $_POST['program'];
                $semester = $_POST['semester'];
                $newcoruse = $_POST['newcourse'];
                
              
                $insert_course = "CALL course_transaction('$program_id', '$newcoruse', '$semester')";
                $result = $conn->query($insert_course);
                if($result){
                    echo "success";
                }
                else{
                    echo "failed".$conn->error();

                }
    

               
                
               

          


        }
    ?>