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
                                <td>{$row['year']}</td>
                                <td>{$row['question_name']}</td>
                                <td>
                                    <a href='download.php' class ='download'> Download </a>
                                </td>
                            </tr>";
                    }
        ?>
        </tbody>
        </table>
            <?php
                }
            }
        ?>
</body>
</html>