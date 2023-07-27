<?php 
    include('../include/dbconection.php');


    if(isset($_POST['searchSubmit'])){
        $searchValue = $_POST['search'];


    $questioins = "SELECT * FROM questiondetail WHERE program_name = '$searchValue'";

    $result = $conn->query($questioins);
    $row = $result->fetch_assoc();
    echo $row['faculty_name'].$row['program_name']. $row['course_name'];
    
    }

?>