<?php
session_start();

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    // Get the submitted username and password from the form
    $useremail = $_POST["email"];
    $usrpasswd = $_POST["password"];

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
    echo "connected <br>";
    // Prepare SQL query to check if the username exists
    $sql = "SELECT * FROM crafhomedb.customer WHERE c_email = '$useremail' and c_password='$usrpasswd'";
    $result = $conn->query($sql) or die ("con't execute");
    // echo $_SESSION['user_email'];
    // echo $_SESSION['user_name'];
    

    if ($result->num_rows == 1) {
        // User exists, fetch the row
        $row = mysqli_fetch_assoc($result);
        echo $_SESSION['user_name']= $row['c_name']; 
        
        $_SESSION['user_email'] = $useremail;

        // Redirect to the home page
        header("Location: temploged.php");
        exit();
    } else {
        // User does not exist
        echo "Invalid username or password.";
        header("Location:incorrect _login.html");
    }

    // Close connection
    $conn->close();
}
?>
