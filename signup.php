<!-- 


$server="localhost";
$username="root";
$password="";
$database="texttologin";


$conn =mysqli_connect($server,$username,$password,$database);

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $showResult="";
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
      $showResult=" Username already exists " ;
      echo " <script>
      
       var result='$showResult';
   
    
    </script> ";

     
    }
    else{
      // $exists= false;
    

    if(($password==$cpassword)){
        $sql="INSERT INTO `users` ( `name`, `email`,`password`, `dt`) VALUES 
        ('$username', '$email','$password', current_timestamp());";

        $result =mysqli_query($conn,$sql);

        if($result){
          // $showAlert=true;
          $showResult="Your account is created";
            echo " <script>
      
            var result='$showResult';
            
        
        </script> ";
        }
      }
        else{
          // $showError="Passwords do not match " ;
          $showResult="Passwords do not match " ;
            echo " 
            <script>
         var result='$showResult';
  
           </script>
         ";
        }
    
      }
}

?> -->