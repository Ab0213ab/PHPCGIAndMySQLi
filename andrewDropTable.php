<!-- Andrew Schaefer -->
<!-- 4/16/22 -->
<!-- CSD440 -->
<!-- Module 8 Assignment (d) -->

<!------------------------------------------------------------------------------------------------->
<!-- Assignment Instructions:                                                                    -->
<!-- For this assignment the database you will use is the one created in Module 8. Using MySQLi, --> 
<!-- write PHP programs (3 files) that provide:                                                  --> 
<!--                                                                                             -->
<!-- 1. Index page with links to all following PHPs                                              --> 
<!-- 2. Query page to search based on user form input                                            --> 
<!-- 3. Form page for adding a record                                                            -->
<!--                                                                                             --> 
<!-- Review the code documentation requirements and ensure you meet them in your code.           -->
<!-- Thoroughly test your code to verify it functions correctly and displays the correct output. -->
<!------------------------------------------------------------------------------------------------->
<?php
include_once 'andrewDBCon.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>PHPCGIAndMySQLi</title>

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

// Drop table
$sql = "DROP TABLE IF EXISTS authors;";
if (mysqli_query($con, $sql)) {
    echo "Table authors deleted successfully. <br>";
} else {
   die("Could not delete table. <br>");
}
// Close connection
mysqli_close($con);
?>