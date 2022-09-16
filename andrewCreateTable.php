<!-- Andrew Schaefer -->

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
    <link rel="stylesheet" href="styles.css">

    <title>Module 8 Assignment (a)</title>

</head>

<body>
    
   <p id="a1"></p>
        
        <script>
            document.getElementById("a1").innerHTML = "Andrew Schaefer";
        </script>
        
        <center><h3>This webpage was created as an assignment in Bellevue University's <br> 
        Server-Side Scripting class. Although the HTML/CSS UI is admittedly basic, <br>
        the program also demonstrates the use of PHP CGIs and forms, MySQLi for <br>
        database CRUD operations, and local hosting with Apache Server.</h3></center>

        <hr>


<!-------------------------------------------------------------------------------------------------------------->

<?php

// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} else {
    echo "Database Connection Successful. <br>";
}

// Create table
$sql = "CREATE TABLE authors (
    author_id INT(10) AUTO_INCREMENT PRIMARY KEY, 
    first_name VARCHAR(30) NOT NULL,
    last_name VARCHAR(30) NOT NULL,
    age INT(120),
    home_city VARCHAR(30) NOT NULL
    )";

    if (mysqli_query($con, $sql)) {
        echo "Authors table created successfully. <br>";
    } else {
        echo "Error creating table: " . mysqli_error($con);
    }
    // Close connection
    mysqli_close($con);
    
?>
     
</body>
</html>