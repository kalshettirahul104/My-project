<?php


    // Connect to your database (replace these values with your actual database credentials)
    $servername = "localhost";
    $username = "root";
    $password = "1899";

// Create connection
   $conn = mysqli_connect($servername, $username, $password);
 
   session_start();
   $email=($_SESSION['user_email']);
     isset($_SESSION['user_email']) ? $_SESSION['user_email'] : ''; 
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Validate email uniqueness
     $emailCheck = "SELECT * FROM crafhomedb.customer WHERE  c_email = '$email'";
     $book="SELECT * FROM crafhomedb.bookings WHERE  email = '$email'";
     $result = $conn->query($emailCheck);
     $result1=$conn->query($book);

     echo"<br>";
     while($data =mysqli_fetch_assoc($result))
{
    $name=$data['c_name'];
    $email=$data['c_email'];
    $phno=$data['c_mob_no'];

}
// echo"name:$name <br> email:$email <br> PHone no:$phno <br>  <br>";

// echo"<b>Your Bookings <br></b>";
//  while($data=mysqli_fetch_assoc($result1)){
//     $bid=$data['booking_id'];
//     $req=$data['reqest'];
//     //  echo " booking id :$bid' for $req<br>";     
//  }

echo '<div class="container">';
echo '<h1>User Profile</h1>';
echo '<table class="profile-info">';
echo "<tr><th>Name:</th><td>$name</td></tr>";
echo "<tr><th>Email:</th><td>$email</td></tr>";
echo "<tr><th>Phone No:</th><td>$phno</td></tr>";
echo '</table>';

echo '<div class="bookings">';
echo '<h2>Your Bookings</h2>';
echo '<table border=2px >';
echo '<tr><th>Booking ID</th><th>Request</th> <th>  Address</th><th>Booking date</th><th>Prffered date</th><th>Booking Status</th><th> cost </th></tr>';
while ($data = mysqli_fetch_assoc($result1)) {
    $bid = $data['booking_id'];
    $req = $data['reqest'];
    $address=$data['address'];
    $b_date=$data['booking_date'];
    $pref_date=$data['pref_date'];
    $status=$data['status'];
    $cost=$data['cost'];
    echo "<tr><td>$bid</td><td>$req</td><td>$address</td><td>$b_date</td><td>$pref_date</td><td>$status</td><td>$cost</td></tr>";
}
echo '</table>';
echo '</div>';

echo '</div>';
  
    // Close the database connection
    $conn->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <link rel="stylesheet" href="./user_pg.css">
</head>
<body>
    
</body>
</html>
