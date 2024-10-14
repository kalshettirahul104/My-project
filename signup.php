<?php
   session_start();
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $mobileNo = $_POST["mobileNo"];
    $email = $_POST["email"];
    $cpassword = $_POST["password"];

    // TODO: Perform necessary validation on the collected data

    // Connect to your database (replace these values with your actual database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "1899";

// Create connection
   $conn = mysqli_connect($servername, $username, $password);


    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $_SESSION['user_name'] = $name;
    $_SESSION['user_email'] = $email;
    // Validate email uniqueness
     $emailCheck = "SELECT * FROM crafhomedb.customer WHERE c_email = '$email'";
     $result = $conn->query($emailCheck);
     
     if ($result->num_rows > 0) {
         echo "Email already exists. Please choose a different one.";
         $conn->close();
         exit();
     }

    // TODO: You can add more specific validation rules here if needed.

    // Hash the password before storing it in the database
    //$hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Insert data into your database (replace the table and column names with your actual ones)
     $sql = "INSERT INTO crafhomedb.customer (c_email, c_name, c_mob_no, c_password)
             VALUES ( '$email','$name','$mobileNo', '$cpassword')";
    // $sql= "INSERT INTO pappudb.demo1 (name,age)values('acv','23')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
         header("Location: temploged.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
