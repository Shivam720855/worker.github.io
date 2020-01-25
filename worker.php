<?php 

$name= $_POST["name"];

$phone = $_POST["phone"];
$email = $_POST["email"];
 
$pwd=$_POST["pwd"];

 
 
$conn = mysqli_connect("localhost","root","","sivam");   
 /* email verify*/    
$q="SELECT * FROM `workerdata` WHERE email = '$email'  ";
$result=mysqli_query($conn,$q);
$res=mysqli_num_rows($result);
if($res==TRUE)
{
	echo "email is  already registered  pleas try with another email id";

}
else
{   /* insert qury*/
 	$query ="INSERT INTO `workerdata`( `name`, `phone`, `email`,   `password`) VALUES ('$name','$phone','$email', '$pwd' )";  
    $run=mysqli_query($conn,$query);
 	if($run==TRUE)
 	{
 		echo "registered";
 		?><!--  data update of  worker-->
 		<p> Enter your data for Recruter</p>
<?php

 	}
 	else
 	{
 		echo " errror";
 	}

}
?>

