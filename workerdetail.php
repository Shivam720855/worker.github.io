<?php

#Qulification data
$hireeducation=$_POST["Qualification"];
$University=$_POST["University"];
$Roll_no=$_POST["Roll_no"];
$PassOut=$_POST["PassOut"];
$percenteg=$_POST["percenteg"];
#certificate
$certificate=$_POST["certificate"];
$field=$_POST["field"];
$experenced=$_POST["experenced"];
#SKILLS
$skill=$_POST["skill"];
#work in cnywher
$Compony=$_POST["Compony"];
$worktypen=$_POST["worktype"];
$startingtime=$_POST["startingtime"];
$enddingtime=$_POST["enddingtime"];
#FULL ADDRESS
$Country=$_POST["Country"];
$State=$_POST["State"];
$Distict=$_POST["Distict"];
$Block=$_POST["Block"];
$Post=$_POST["Post"];
$Area=$_POST["Area"];
$Pin_code=$_POST["Pin_code"];

 
 
 
$conn = mysqli_connect("localhost","root","","sivam");

$query = "INSERT INTO `qualification`(`Higher_education`, `Board`, `Roll_no`, `Passing_yr`, `Percentage`) VALUES ('$hireeducation','$University', '$Roll_no', '$PassOut','$percenteg')";

$run=mysqli_query($conn,$query);

if($run==TRUE)
{
	echo "record saved";
}
else
{
	echo "err";
}





















?>