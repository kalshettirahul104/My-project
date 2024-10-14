<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
         $service_cost = $_POST['service_cost'];
         $booking_id= $_POST['booking_id'];
            
                // // Display generated bill
                 echo "<p><strong>Booking ID:</strong> $booking_id</p>";
                // echo "<p><strong>Customer Email:</strong> $customer_email</p>";
                // echo "<p><strong>Customer Name:</strong> $customer_name</p>";
                // echo "<p><strong>Service Name:</strong> $service_name</p>";
                 echo "<p><strong>Service Cost:</strong> $service_cost</p>";
                // echo "<p><strong>Total Cost:</strong> $total_cost</p>";

                // Update database with total cost
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

                // Update total cost in database
                $sql = "UPDATE crafhomedb.bookings SET cost = $service_cost WHERE booking_id = $booking_id";
                $result = $conn->query($sql);


                if ($conn->query($sql) === TRUE) {
                    echo "New record created successfully";
                    
                    header("Location: bill_conformation.php");
                } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                }
                // Close database connection
                $conn->close();

    
            ?> 
