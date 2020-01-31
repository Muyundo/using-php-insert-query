<?php
//attempt database connection assuming you are running mysql server with the settings for user as "root" and password as "Brian1234" NOTE: if you dont have a passwrd then leave the password section blank.
//my database is called "brian " and my table is called  "persons"
$link = mysqli_connect("localhost", "root", "Brian1234", "brian");
if($link === false){
	die("Error: could not connect to the database"
.mysqli_connect_error());
}

//attempt insert query execution
$sql = "INSERT INTO persons(first_name, last_name, email) VALUES('brian', 'isaacs', 'brianisaacs@gmail.com'),
          ('vivian', 'Debra', 'viviandebra@gmail.com'),
            ('lilian', 'alex', 'lilianalex@gmail.com')";
if(mysqli_query($link, $sql)){
	echo "Records inserted successfully";
}else{
	echo "Error: could not be able to execute the $sql."
	.mysqli_error($link);

}
//close connection
mysqli_close($link); 
?>