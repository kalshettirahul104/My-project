<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Booking Form</title>
<link rel="stylesheet" href="admin_servicies.css">
</head>
<body>
<div class="container">
    <h1>Plumbing bookings</h1>
    <!-- Your form for selecting services and entering booking details -->
    <form action="process_booking.php" method="post">
        <!-- Your form fields for selecting services and entering booking details -->
        <!-- Example: -->
        <label for="service">Select Service:</label>
        <select name="service" id="service">
            <option value="Plumbing">Plumbing</option>
            <option value="Carpentry">Carpentry</option>
            <!-- Add more options for other services -->
        </select>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="amount">Advance Payment Amount:</label>
        <input type="number" id="amount" name="amount" min="1" step="any" required> <!-- Allow users to enter the amount -->

        <!-- PayPal Button -->
        <!-- Replace this with your actual PayPal button code -->
        <!-- For demonstration purposes, I'm using a static button image -->
        <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_buynow_LG.gif" alt="PayPal Button" name="submit">
        <!-- Other hidden input fields required for PayPal processing -->
        <input type="hidden" name="cmd" value="_xclick">
        <input type="hidden" name="business" value="your_paypal_business_email@example.com">
        <input type="hidden" name="item_name" value="Advance Payment for Service">
        <input type="hidden" name="currency_code" value="USD">
    </form>
</div>
</body>
</html>
