<?php
 session_start();
 if($_SERVER['REQUEST_METHOD']=='POST'){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $message=$_POST['message'];

    $servername="localhost";
    $user="root";
    $password="1899";
    $Database="crafhomedb";

 
   $conn= new mysqli($servername,$user,$password,$Database);
  
    if($conn->connect_error){
        die("connection fail".$con->connect_error);
    }

    echo"connected to data base<br>";
    $_SESSION['user_name'] = $name;
    $sql="INSERT into crafhomedb.democustomer(name,email,message) values('$name','$email','$message') ";
     if($conn->query($sql)==TRUE){
        echo" new record insert successfully";
        header("Location:home.temploged.php");
     }else{
        echo "Error: " . $sql . "<br>" . $conn->error;
     }
     
    $conn->close();
}
?>
<!-- <script >
        alert(" thnaky for cantacting with us");
    </script> -->