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
$dbServerName = "localhost:3306";
$dbUsername = "student1";
$dbPassword = "pass";
$dbName = "baseball_01";

$con = mysqli_connect($dbServerName,$dbUsername, $dbPassword, $dbName);
?>