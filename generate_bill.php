<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generate Bill</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4caf50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        .error-message {
            color: red;
            font-style: italic;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Generate Bill</h1>
        <?php
     session_start();
     $booking_id = "";
     $c_name = "";
     $service_name = "";
     $c_email = "";
     
     if ($_SERVER['REQUEST_METHOD'] == "POST") {
         $booking_id = $_POST['booking_id'];
         $c_name = $_POST['name'];
         // Changed $_POST=['name'] to $_POST['name'] for customer name
         $service_name = isset($_POST['reqest']) ? $_POST['reqest'] : '';
         // Use isset() to check if the index 'services' exists
         $c_email = $_POST['email'];
     }
     
     ?>
     
     <form action="submit_bill.php" method="post">
    <label for="Booking id">Booking id: <?php echo $booking_id; ?><br></label>
    <input type="hidden" name="booking_id" value="<?php echo $booking_id; ?>">
    <!-- Echo variables without double quotes -->
    <label for="customer name">customer name: <?php echo $c_name; ?> <br></label>
    <label for="customer email">customer email: <?php echo $c_email; ?> <br></label>
    <label for="service_name">service: <?php echo $service_name; ?> <br></label>
    <label for="service_cost">Service cost :</label>
    <input type="number" name="service_cost">
    <input type="submit" name="submit" value="submit bill">
</form>

                
    </div>
</body>
</html>
