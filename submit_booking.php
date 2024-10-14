<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate and sanitize form inputs
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $phone = isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '';
    $address = isset($_POST['address']) ? htmlspecialchars($_POST['address']) : '';
    $pincode = isset($_POST['pincode']) ? htmlspecialchars($_POST['pincode']) : '';
    $date = isset($_POST['date']) ? htmlspecialchars($_POST['date']) : '';
   

    $requirements = isset($_POST['requirements']) ? $_POST['requirements'] : [];
    $description = isset($_POST['description']) ? htmlspecialchars($_POST['description']) : '';

    // Set session variables
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
   
    // Database connection parameters
    $servername = "localhost";
    $username = "root";
    $password = "1899"; 
    $database = "crafhomedb"; 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    // Format requirements as string
    $requirements;

    $booking_date = date('Y-m-d');

    // Prepare and bind SQL statement
    $sql = "INSERT INTO `crafhomedb`.`bookings` ( `name`, `email`, `phno`, `address`, `pin_code`, `pref_date`,`booking_date`, `reqest`, `description`) 
    VALUES ( '$name', '$email', '$phone', '$address', '$pincode', '$date','$booking_date', '$requirements', '$description');
    ";

    // $sql= "INSERT INTO pappudb.demo1 (name,age)values('acv','23')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        
        header("Location: confirmation.php");
    } else {
        imap_alerts("something is worong check your email");
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    // Execute SQL statement
    // $stmt->execute();

    // Close statement and connection
    //$stmt->close();
    $conn->close();

    // Redirect to confirmation page
    
    exit();
}
?>

<!-- INSERT INTO `crafhomedb`.`bookings` (`name`, `email`, `phno`, `address`, `pin_code`, `pref_date`, `pref_time`, `reqest`) VALUES ('pappu kumar', 'pappu2803@gmail.com', '8789165481', 'shanti', '431234', '2023-5-3', '9:0', 'Bathroom cleaning'); -->
<!-- $sql = "INSERT INTO `crafhomedb`.`bookings` ( `name`, `email`, `phno`, `address`, `pin_code`, `pref_date`, `pref_time`, `reqest`, `description`) 
    VALUES ( '$name', '$email', '$phone', '$address', '$pincode', '$date', '$time', '$req', '$description');
    "; -->