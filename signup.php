<?php
$server="localhost";
$username="root";
$password="";
$database="texttologin";


$conn =mysqli_connect($server,$username,$password,$database);

if($_SERVER["REQUEST_METHOD"]=="POST"){
  
    $username =$_POST["name"];
    $email=$_POST["email"];
    $password =$_POST["password"];
    $cpassword =$_POST["cpassword"];
    // $exists=false;

    //check wether this username exists
    $existSql="SELECT * FROM `users` WHERE name ='$username'";
    $result=mysqli_query($conn,$existSql);
    $numExistRows =mysqli_num_rows($result);


    if($numExistRows>0){
      // $exists= true;
      // $showError=" Username already exists " ;
      echo " <script>
      
        alert('username already exists');
    
    </script> ";

     
    }
    else{
      // $exists= false;
    

    if(($password==$cpassword)){
        $sql="INSERT INTO `users` ( `name`, `email`,`password`, `dt`) VALUES 
        ('$username', '$email','$password', current_timestamp());";

        $result =mysqli_query($conn,$sql);

        if($result){
           
            echo " <script>
      
            alert('Your account is created');
        
        </script> ";
        }
      }
        else{
            
            echo " 
      
          Passwords do not match 
        
         ";
        }
    
      }
}


?>