<?php 
    include('../include/dbconnection.php');

    
    //fetching program data
    $faculty_id=!empty($_POST['faculty_id'])?$_POST['faculty_id']:'';
    if(!empty($faculty_id))
    {
    //   var_dump($faculty_id); die();
        $query="SELECT * FROM programs WHERE faculty_id=$faculty_id";
            
        $result = $conn->query($query);  
        if($result->num_rows>0)
        {
            echo "<option value=''>Select program</option>";
            while($arr= $result->fetch_assoc()){
                echo "<option value='".$arr['program_id']."'>".$arr['program_name']."</option><br>";        
            }
        }  
    }
    
    // fetching the course data
    $program=!empty($_POST['program'])?$_POST['program']:'';
    $semester=!empty($_POST['semester'])?$_POST['semester']:''; 
    if(!empty($program) && !empty($semester)){
        $query="SELECT * FROM coursedetail where program_id =$program AND semester= $semester";
        $result=$conn->query($query);
        if($result->num_rows>0){
            echo "<option value=''>Select course</option>";
            while($arr= $result->fetch_assoc()){
                echo "<option value='".$arr['course_id']."'>".$arr['course_name']."</option><br>";
            }
        }  
    }
        
?>