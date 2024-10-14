
<!-- painting update  -->

<?php
$servername = "localhost";
$username = "root";
$password = "1899";
$dbname = "crafhomedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update booking status
if(isset($_POST['update_status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];
    $sql = "UPDATE crafhomedb.bookings SET status='$status' WHERE booking_id=$id";
    $result = $conn->query($sql);
}
 
   $conn->close();
// Redirect back to the admin panel
header("Location: admin_flooring.php");
exit();

?>
<script>alert("updated susses fully");</script>
