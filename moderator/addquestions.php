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
    <style>
        .label{
            padding: 10px;
        }

        .add-select{
            padding: 10px;
        }
    </style>
    
</head>
<body>
    <?php  
        include('../include/headerLogout.php');
    ?>
   <div class="add-questions">
       <form action="addaction.php" method="POST" enctype = "multipart/form-data">
            <!-- Faculty dropdown -->
            <div class="faculties">
<<<<<<< HEAD
                <label class = "label">Faculty</label>
                <select class = "add-select" name="faculty" id="faculty" class="faculty">
=======
                <label class="label">Faculty</label class="label">
                <select name="faculty" id="faculty" class="faculty">
>>>>>>> b4db66496c6498ae6f23cf22d146b2fa666fafff
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
<<<<<<< HEAD
                <label class="label">Program</label>
                <select class = "add-select" name="program" id="program" >
=======
                <label class="label">Program</label class="label">
                <select name="program" id="program" >
>>>>>>> b4db66496c6498ae6f23cf22d146b2fa666fafff
                    <option value="">--select program--</option>
                </select> <br>
            </div>


            <!-- semester-->
            <div class="semesters">
<<<<<<< HEAD
                <label class ="label">Semester</label>
                <select class = "add-select" name="semester" id="semester">
=======
                <label class="label">Semester</label class="label">
                <select name="semester" id="semester">
>>>>>>> b4db66496c6498ae6f23cf22d146b2fa666fafff
                    <option value="">--select semester--</option>
                    <option value="1">First semester</option>
                    <option value="2">Second semester</option>
                    <option value="3">Third semester</option>
                    <option value="4">Fourth semester</option>
                    <option value="5">Fifth semester</option>
                    <option value="6">Sixth semester</option>
                    <option value="7">Seventh semester</option>
                    <option value="8">Eighth semester</option>
                </select> <br>
            </div>

            <!-- course-->
            <div class="courses">
<<<<<<< HEAD
                <label class ="label">Course</label>
                <select class = "add-select" name="course" id="course">
=======
                <label class="label">Course</label class="label">
                <select name="course" id="course">
>>>>>>> b4db66496c6498ae6f23cf22d146b2fa666fafff
                    <option value="">--select course--</option>
                </select>
            </div>

            <!-- year dropdown -->
            <div class="years">
<<<<<<< HEAD
                <label class ="label" for="year"> Year</label>
                <select class = "add-select" name="year" id="year"></select>
=======
                <label class="label" for="year"> Year</label class="label">
                <select name="year" id="year"></select>
>>>>>>> b4db66496c6498ae6f23cf22d146b2fa666fafff
                
                <script type="text/javascript">
                    window.onload = function (){

                        var givenYear = document.getElementById('year').value;
                        var currnetYear= (new Date()).getFullYear();

                        for (var i = 2015; i <= currnetYear; i++) {
                            var option= document.createElement("OPTION");
                            option.innerHTML = i;
                            option.value = i;
                            year.appendChild(option);
                        }
                    }

                </script>
                
            </div>

            <div class="file">
                
<<<<<<< HEAD
                    <label class ="label" for="">set</label>
=======
                    <label class="label" for="">set</label class="label">
>>>>>>> b4db66496c6498ae6f23cf22d146b2fa666fafff
                    <input type="file" name= "myfile" class ="">
                

                
            </div>

            <button type = "submit" name= "add" id="add" class="add">ADD</button>
        </form>
   </div>

      
</body>
</html>