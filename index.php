<?php
if(isset($_POST['submit'])){
    $name = $_POST['userid'];
    $email = $_POST['emailid'];
    $pass = $_POST['pass'];
    
 
    $dbconnect = mysqli_connect('localhost','290720','123456789','290720');

    $sql = mysqli_query($dbconnect, "insert into registeration(userid,email,password) values('$name','$email','$pass')");
    
   
    if($sql){
        echo "Registration Successful!";
    }
else{
        echo "Please try to register using another userid or another email ID
             <br> Failed to Register!"; 
}
}

if(isset($_POST['submit1'])){
    $name = $_POST['userid'];
    $pass = $_POST['pass'];

    $dbconnect = mysqli_connect('localhost','290720','123456789','290720');

    $result = mysqli_query($dbconnect, "SELECT * FROM registeration WHERE userid = '$name' or email = '$name' && password ='$pass'");
    
    

    
    $count = mysqli_num_rows($result);
    
 

if ($count==1) 
{

        echo "Login Successful!";
    }
else{
        echo "Please recheck your userid or password <br>
        Failed to Login!"; 
}
   
   mysqli_free_result($result);
 


}
  
?>
