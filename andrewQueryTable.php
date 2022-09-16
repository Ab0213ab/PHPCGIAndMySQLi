<!-- Andrew Schaefer -->
<!-- 4/16/22 -->
<!-- CSD440 -->
<!-- Module 8 Assignment (c) -->

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

    <title>Module 8 Assignment (c)</title>

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
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error . "<br>";
  exit();
} else {
    echo "Connected successful.<br>";
}

// Select statement
$sql = "SELECT * FROM authors;";
$result = mysqli_query($con, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row['author_id'] . "<br>";
        echo $row['first_name'] . "<br>";
        echo $row['last_name'] . "<br>";
        echo $row['age'] . "<br>";
        echo $row['home_city'] . "<br>";
    }
}
// Close connection
mysqli_close($con);

?>