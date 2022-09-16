<!-- Andrew Schaefer -->

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
    <link rel="stylesheet" href="styles.css">

    <title>PHPCGIAndMySQLi</title>

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
<p>Click here to go <a href="index.php">Home</a>
<br>


<?php
// Check connection
if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} else {
    echo "Database Connection Successful. <br>";
}

$sql = "SELECT first_name FROM authors"; 
$rs = mysqli_query($con, $sql);

if (!$rs){
  exit("Error in SQL");
}
?>

<center>
    <h3>
        Choose an author from the dropdown menu to see their information.
    </h3>
    <form action='andrewResultsCGI.php' method='post'>
        <p>
            <label>
            Author First Names
            <br/>
            <br/>
            </label>

        <select name='select'>
            <?php
            while ($rows = $rs->fetch_assoc()) {
                $first_name = $rows['first_name'];
                echo "<option value='$first_name'>$first_name</option>";
            }
            ?>
        </select>
        </p>
        <p>
            <input type='submit' value='Submit'/>
        </p>

    </form>
</center>
