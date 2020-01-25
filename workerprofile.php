


<?php  

$Email=$_POST["Email"];
$Password=$_POST["Password"];
 



 



$servername ="localhost";
$username ="root";
$password ="";

$dbname ="sivam";

$conn = mysqli_connect($servername,$username,$password,$dbname);
$query="SELECT * FROM `workerdata` WHERE  email='$Email' && password = '$Password' ";
$run=mysqli_query( $conn,$query);
while ($row=mysqli_fetch_array($run)) {
          $name=$row['name'];
          $phone=$row['phone'];
          $email=$row['email'];
        
        
}




?>

<html>
<head>
 
<link rel="stylesheet" type="text/css"  href="pppg.css">
  <title> WOrker Profile page</title>
</head>
<body>
  
  <div class="homepage">  
      <ul >
   <li> <a> HOME  </a></li>
       <li> <a> ABOUT  </a>
           <ul> <li> <a> team  </a></li>
                 <li> <a> location </a></li>
                  <li> <a> resources </a></li>
                   <li> <a> goal </a></li>
            </ul>


       </li>
   <li> <a> SERVICES  </a>
      <ul> <li> <a> info  </a></li>
               <li> <a>collges </a></li>
               <li> <a> student  </a></li>
               <li> <a> parents </a></li>
           </ul>
   </li>
   <li> <a> CONTACT </a>
       <ul> <li> <a> location </a></li>
                <li> <a> map </a></li>
                <li> <a> direction </a></li>
                 <li> <a> phone no </a></li>
            </ul>
      </li>
  </ul><hr>
 
    <div class="form"> 
   
           <a href="homepage.html"> log out</a>
      <a href="works.html"> <td> FIND WORKER HERE</td></a>
   </div>
   <hr>
   <hr>
   <hr>
   <hr>
 
   <br>
   <br>
   <br>
   <div class="Profile"> 
    
  <ul style="color: blue; font-size: 20px; ">  
    <p style="text-align: left;">          <?php echo "$name";?></p>   
    <img src="tree.jpg" width="150" style="border-radius: 360px;"><br>
   

  <h2>Programmer</h2>
  <h4> I am a fressher but excelent in my field</h4>
    

    
    <p> contact :  <label style="color: green; border-bottom-style: solid; padding-left: 20px;" >  <?php echo "$phone";?> </label> </p>  
     <p>Email  :<?php echo "$email";?></p>  
  
   </ul>
 
</div>

  
  


</body>
</html>























<!--





$res=1245;
if($Password==$res)
{
     include("workerprofile.html");
}
else
{
    echo " wrong password";
}

?>
 