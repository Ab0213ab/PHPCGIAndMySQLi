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
<br>
<br>
<center>
<h3>Choose a page you'd like to visit:</h3>
<a href="index.php">Home</a>
<br>
<a href="andrewQueryForm.php">Select an Author Page</a>
<br>
<a href="andrewAddRecord.php">Add an Author Page</a>
</center>