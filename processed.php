<?php
/* 
We include the connection parameters from our connect.php file which allow us to access the database.
Then we create variables from each value that was submitted from the form */
require_once 'connected.php';
    
     $firstname = $_POST["fname"];
     $lastname = $_POST["lname"];
     $email = $_POST["mail"];
     $passcode = $_POST["pcode"];
     $confirm = $_POST["cpcode"];
     $phonenumber = $_POST["pnumber"];
     $birthdate = $_POST["bdate"];
     $course = $_POST["course"];
    

//with PDO, always use a try catch for better error handling. 
try{
	$dbh = new PDO("mysql:host=$host; dbname=$dbname", $user, $password);
	echo "Database connection successful....<br />......Writing values to Database......<br />";
	}
catch (PDOException $e){
	echo $e->getMessage();
	}
/*
Here we prepare our INSERT statement and then execute that statement. Note that the execution of the query is a 2 part process. First, we prepare the statement and then we explicitly execute it.
Also, here I am simply echoing that the record was added successfully.
*/
$sth = $dbh->prepare("INSERT INTO registration(firstname, lastname, email, passcode, confirm, phonenumber, birthdate, course)
VALUES ('$firstname', '$lastname', '$email', '$passcode', '$confirm', '$phonenumber', '$birthdate', '$course')");
$sth->execute();
if($sth){
echo "Record successfully added.......";

}
else{
echo "Record was not added to database";
}
/*
This next line is PDO's unique way of closing the database connection. Make sure that you note is is simply setting your connection variable to null.
*/
$dbh =null;
echo "<br />......Database connection is closed.";
?>
