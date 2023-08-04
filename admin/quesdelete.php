<?php 
    include('../include/dbconnection.php');

    if(isset($_GET['question_id']) && is_numeric($_GET['question_id'])){
        $question_id = $_GET['question_id'];

        $delete = "DELETE FROM questions WHERE question_id = $question_id";
        $result = $conn->query($delete);

        if($result){
            echo "success";
            header('Location: admindashboard.php');
            
        }
        else{
            echo "failed";
            header('Location: admindashboard.php');
        }
    }
    ?>