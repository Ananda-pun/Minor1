<?php
    include('../include/dbconnection.php');
    include('../include/header.php');
    include('../include/nav.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questions</title>
    
</head>
<body>
    <!-- showing the faculties -->
    <div class="faculties">
        <ol>
            <?php
            // displaying the available faculties

                $sql = "SELECT * FROM faculties";
                $result = $conn -> query($sql);

                $count=1;
                if($result){
                    while($row = $result->fetch_assoc()){
                        echo "<li>" . $row['faculty_name'] . "</li>"."<br>";
                    }
                }
            ?>
        </ol>
    </div>

    <!-- showing the programs for the clicked faculty -->
    <div class="programs">
        <ul>

        </ul>
    </div>
</body>
</html>