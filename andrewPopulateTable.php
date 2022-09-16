<!-- Andrew Schaefer -->
<!-- 4/16/22 -->
<!-- CSD440 -->
<!-- Module 8 Assignment (b) -->

<!-------------------------------------------------------------------------------------------------------------->
<!-- Assignment Instructions:                                                                                 -->
<!-- Using MySQLi, write PHP programs (4 total) to create and populate a DB table to be used in Module 9.     -->
<!-- You will need PHP scripts to: Create your table, drop your table, populate your table, and query to test -->
<!-- your table. Your table is to have a minimum of 5 fields, with more than one data type.                   -->                                           
<!-- Review the code documentation requirements and ensure you meet them in your code.                        -->
<!-- Thoroughly test your code to verify it functions correctly and displays the correct output.              -->
<!-------------------------------------------------------------------------------------------------------------->
<?php
include_once 'andrewDBCon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>Module 8 Assignment (b)</title>

    <style>
    body {
    background-color: orange;
    }
</style>

</head>

<body>
    
   <p id="a1"></p>
   <p id="a2"></p>
   <p id="a3"></p>
   <p id="a4"></p>
        
        <script>
            document.getElementById("a1").innerHTML = "Andrew Schaefer";
            document.getElementById("a2").innerHTML = "4/16/22";
            document.getElementById("a3").innerHTML = "CSD-440";
            document.getElementById("a4").innerHTML = "Module 8 Assignment";
        </script>
        
<h1>This simple webpage was created as an assignment in Bellevue University's Server-Side Scripting class.</h1>
<br>
<hr>
<h3>This simple program demonstrates the use of PHP, JavaScript, HTML, CSS, and Apache Server.</h3>


<!-------------------------------------------------------------------------------------------------------------->

<?php

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} else {
    echo "Connected successful. <br>";
}

// Populate records
$sql = "INSERT INTO authors (author_id, first_name, last_name, age, home_city) 
    VALUES (1,'Stephen','King',50,'Bangor, Maine')";

$sql2 = "INSERT INTO authors (author_id, first_name, last_name, age, home_city) 
    VALUES (2,'Christopher','Hitchens',62,'Washington, D.C.')";

$sql3 = "INSERT INTO authors (author_id, first_name, last_name, age, home_city) 
    VALUES (3,'Richard','Dawkins',81,'Oxford, England')";

if (mysqli_query($con, $sql) && mysqli_query($con, $sql2) && mysqli_query($con, $sql3)) {
    echo "Records added successfully. <br>";
} else {
    echo "Error adding records: " . mysqli_error($con);
}
// Close connection
mysqli_close($con);

?>