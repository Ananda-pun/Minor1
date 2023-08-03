<?php 
    include('../include/dbconnection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            width: 50%;
            border-collapse: collapse;
            margin:100px auto;
            
        }

        th, td{
            height: 40px;
            border: solid 1px;
            text-align: center;
        }
    </style>
</head>
<body>
    <!-- showing the question in table -->
    <table style="border:solid 2px ">
        <thead>
            <tr>
                <th> Course </th>
                <th>year</th>
                <th>File name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php 
            if(isset($_POST['view'])){
                $faculty_name = $_POST['faculty'];
                $faculty_id = $_POST['faculty'];
                $program_id = $_POST['program'];
                $semester = $_POST['semester'];
                $course_id = $_POST['course'];

                // retrieving the date from database
                $select_question = "SELECT * FROM questiondetail WHERE course_id = $course_id";
                $result = $conn->query($select_question);
                if($result){
                    while($row = $result->fetch_assoc()){
                        echo "<tr>
                        <td>{$row['course_name']}</td>
                        <td>{$row['year']}</td>
                        <td>{$row['question_name']}</td>
                        <td>
                            <a download='{$row['question_name']}' href='sets/{$row['question_name']}' class='download'>Download</a>
                        </td>
                    </tr>";

                    }
        
                }
            }
            // retrieving the data for search result
            if(isset($_POST["search_submit"])){
                
                $input=$_POST["sear"];
                if(!empty($input)){
                    $value="SELECT * FROM questiondetail WHERE course_name LIKE '%$input%'"; 
                    $result = $conn->query($value);
                    if($result){
                        while($row = $result->fetch_assoc()){
                            echo "<tr>
                            <td>{$row['course_name']}</td>
                            <td>{$row['year']}</td>
                            <td>{$row['question_name']}</td>
                            <td>
                                <a download='{$row['question_name']}' href='sets/{$row['question_name']}' class='download'>Download</a>
                            </td>
                        </tr>";
                        }
                    }
            }
        }
            ?>
        </tbody>
    </table>
</body>
</html>