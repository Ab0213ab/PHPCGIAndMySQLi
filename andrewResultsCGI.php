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


<center>
<br/>
<h3>Chosen Author Results: </h3>
<br/>

<?php
  $select = $_POST["select"];
  $sql = 'SELECT * FROM authors WHERE first_name = "' . $select . '"';
  $rs = mysqli_query($con, $sql);

  if (!$rs){
    exit("Error in SQL");
  }
?>

<table style='border: solid; background-color: lightblue; padding: 2%; margin-bottom: 5%;'>
  <tr>
    <td><b>Author ID</b></td>
    <td><b>First Name</b></td>
    <td><b>Last Name</b></td>
    <td><b>Age</b></td>
    <td><b>Home City</b></td>
  </tr>

<?php
  if (mysqli_num_rows($rs) > 0) {

    while($row = mysqli_fetch_assoc($rs)){
?>
      <tr>
        <td><?php echo($row["author_id"]); ?> </td>
        <td><?php echo($row["first_name"]); ?> </td>
        <td><?php echo($row["last_name"]); ?> </td>
        <td><?php echo($row["age"]); ?> </td>
        <td><?php echo($row["home_city"]); ?> </td>
      </tr>

<?php
    }
  }
  else{

    echo 'no records';
  }
?>

</center>









