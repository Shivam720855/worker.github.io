
<form action="test.php" method="post">
	name : <input type="txt" name="name">
	<input type="submit" name="submit">
	
</form>





<?php

$name=$_POST["name"];

$servername ="localhost";
$username ="root";
$password ="";

$dbname ="sivam";

$conn = mysqli_connect($servername,$username,$password,$dbname);
$query="SELECT * FROM `workerdata` WHERE  name='$name' ";
$run=mysqli_query( $conn,$query);
while ($row=mysqli_fetch_array($run)) {
          $name=$row['name'];
          $phone=$row['phone'];
          $email=$row['email'];
         /* $gender=$row['gender'];
          $address=$row['address'];*/

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 
<table border="1" width="80%">
   <th> 
   	<tr> 
   	<td> name</td>
   	<td> phone</td>
   	<td> email</td>
   </tr>

   <tr>
   	<td>   <?php echo "$name";?>  </td>
   	<td>    <?php echo "$phone";?> </td>
   	<td>    <?php echo "$email";?> </td>
   </tr>
	</th> 

</table>
</body>
</html>
<?php } ?>

