<?php 
     include('../include/dbconnection.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src = "myscript.js"> </script>
    
</head>
<body>
    <?php 
        include('../include/headerLogout.php');
    ?>
   <div class="add-questions">
       <form action="addaction.php" method="POST">
            <!-- Faculty dropdown -->
            <div class="faculties">
                <lable>Faculty</lable>
                <select name="faculty" id="faculty" class="faculty">
                    <option value="">--select faculty--</option>
                    <?php
                        $facultyData="SELECT * FROM faculties";
                        $result = $conn->query($facultyData);
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                    ?>
                                <option value="<?php echo $row['faculty_id']; ?>"> <?php echo $row['faculty_name']; ?></option>
                                <?php
                        }
                    }
                                ?>
                </select>
            </div> 
            <!--program dropdown-->
            <div class="programs">
                <lable>Program</lable>
                <select name="program" id="program" >
                    <option value="">--select program--</option>
                </select> <br>
            </div>


            <!-- semester-->
            <div class="semesters">
                <lable>Semester</lable>
                <select name="semester" id="semester">
                    <option value="">--select semester--</option>
                    <option value="1">First semester</option>
                    <option value="2">Second semester</option>
                    <option value="3">THird semester</option>
                    <option value="4">Fourth semester</option>
                    <option value="5">Fifth semester</option>
                    <option value="6">SIxth semester</option>
                    <option value="7">Seventh semester</option>
                    <option value="8">EIghth semester</option>
                </select> <br>
            </div>

            <!-- course-->
            <div class="courses">
                <label>Course</lable>
                <select name="course" id="course">
                    <option value="">select course</option>
                </select>
            </div>

            <!-- year dropdown -->
            <div class="years">
                <label for="year"> Year</label>
                <select name="year" id="year" class ="year">
                    <option value="">--select year--</option>
                </select>
            </div>

            <button type = "submit" name= "add" id="add" class="add">ADD</button>
        </form>
   </div>

    
        
</body>
</html>