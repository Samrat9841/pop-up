<?php
$server="localhost";
$username="root";
$password="";
$database="login";


$conn =mysqli_connect($server,$username,$password,$database);

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $login="";
    
    $username =$_POST["name"];
    $password =$_POST["password"];


        $sql="Select * from users where name='$username' AND password='$password'";

        $result =mysqli_query($conn,$sql);
          $num=mysqli_num_rows($result);
          if($num>=1){
    
        $login="Welcome";
        // header('Content-Type:application/json');
        // echo json_encode($login);
    //     echo " <script>
    
    //     var result='$login';
            
    // </script> ";
        // // echo $login;
        // echo ($login);
        // header("location:index.php");

        echo"welcome";
          }

        
        else{
   
    $login="Invalid Credentails ";
    // header('Content-Type:application/json');
    // echo json_encode($login);
//     echo " <script>
    
//     var result='$login';
     
// </script> ";
    // echo  $login;
 
    // header("location:index.php");
    echo"Invalid Credentails";
        }

}

        

?>

