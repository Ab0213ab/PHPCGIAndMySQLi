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

    <title>Module 9 Assignment</title>

<style>
    #infoDisplay {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    float: center;
    background-color: darkblue;
    color: white;
    }
</style>

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
?>

<center>
<h4>Please fill out the following form and click submit to add the new record to the database.</h4>

<form action='andrewInsertCGI.php' method='POST' id='infoDisplay'>
    Author ID: <input type='number' name='author_id' style='margin: 1%;' required><br>
    Author First Name: <input type='text' name='first_name' style='margin: 1%;'required pattern='^[a-zA-Z ]*$'><br>
    Author Last Name: <input type='text' name='last_name' style='margin: 1%;'required pattern='^[a-zA-Z ]*$'><br>
    Author Age: <input type='number' name='age' style='margin: 1%;'required><br>
    Author Home City: <input type='text' name='home_city' style='margin: 1%;'required pattern='^[\.a-zA-Z0-9,!? ]*$'><br>
    <input type='submit' value='Submit'style='margin: 1%;'>
</form>
</center>