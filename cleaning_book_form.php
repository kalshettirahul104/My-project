<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Painting Service</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./booking-form.css">
</head>
<body>
    <?php
      session_start();
    ?>
    
    <div class="container">
        <h2>Book Cleaning Service</h2>
        <form action="submit_booking.php" method="POST" onsubmit="return validateForm()">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name"  set value="<?php echo ($_SESSION['user_name']) ? $_SESSION['user_name'] : ''?>">
            </div>
            
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" set value="<?php echo ($_SESSION['user_email']) ? $_SESSION['user_email'] : ''?>"; required>
                <div class="error-message" id="email-error"></div>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number:</label>
                <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
                <div class="error-message" id="phone-error"></div>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <textarea id="address" name="address" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="pincode">Pincode:</label>
                <input type="text" id="pincode" name="pincode" pattern="[0-9]{6}" minlength="6" maxlength="6" required>
                <div class="error-message" id="pincode-error"></div>
            </div>
            <div class="form-group">
                <label for="date">Preferred Date:</label>
                <input type="date" id="date" name="date" required> 
                <div class="error-message" id="date-error"></div>
            </div>
            <!-- <div class="form-group">
                <label for="time">Preferred Time:</label>
                <input type="number" id="hours" name="hours" min="1" max="12" required>
                <input type="number" id="minutes" name="minutes" min="0" max="59" required>
                <select id="ampm" name="ampm" required>
                    <option value="AM">AM</option>
                    <option value="PM">PM</option>
                </select>
                <div class="error-message" id="time-error"></div>
            </div> -->
            <div class="form-group">
                <label for="requirements">Requirements:</label><br>
                <select id="requirements" name="requirements" multiple="multiple" class="js-example-basic-multiple" required>
                    <option value="Kitchen cleaning">Kitchen cleaning</option>
                    <option value="Bathroom cleaning">Bathroom cleaning</option>
                    <option value="Full Home Cleaning">Full Home Cleaning</option>
                    <option value="Sofa & Carpet Cleaning">Sofa & Carpet Cleaning</option>
                </select>
            </div>
            <div class="form-group">
                <label for="description">Description:</label><br>
                <textarea id="description" name="description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <input type="checkbox" id="terms" name="terms" required>
                <label for="terms">I agree with the terms and conditions <br>
                
                </label>
            </div>
            <button type="submit" id="submit">Submit</button>
        </form>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });

        function validateForm() {
    var name = document.getElementById("name").value;
    var email = document.getElementById("email").value;
    var phone = document.getElementById("phone").value;
    var address = document.getElementById("address").value;
    var pincode = document.getElementById("pincode").value;
    var date = document.getElementById("date").value;

    var currentDate = new Date(); // Get the current date
    var selectedDate = new Date(date); // Convert the input date string to a Date object

    if (name == "" || email == "" || phone == "" || address == "" || pincode == "" || date == "") {
        alert("Please fill in all required fields.");
        return false;
    }

    // Check if the selected date is greater than or equal to the current date
    if (selectedDate <= currentDate) {
        document.getElementById("date-error").innerHTML = "Preferred date should be greater than the current date.";
        return false;
    }

    // Email validation
    var emailRegex = /\S+@\S+\.\S+/;
    if (!emailRegex.test(email)) {
        document.getElementById("email-error").innerHTML = "Please enter a valid email address.";
        return false;
    }

    // Phone number validation
    var phoneRegex = /^\d{10}$/;
    if (!phoneRegex.test(phone)) {
        document.getElementById("phone-error").innerHTML = "Please enter a valid 10-digit phone number.";
        return false;
    }

    // Pincode validation
    var pincodeRegex = /^\d{6}$/;
    if (!pincodeRegex.test(pincode)) {
        document.getElementById("pincode-error").innerHTML = "Please enter a valid 6-digit pincode.";
        return false;
    }

    return true;
}

        function toggleSubmitButton() {
        var submitButton = document.getElementById("submit");
        var termsCheckbox = document.getElementById("terms");

        if (termsCheckbox.checked) {
            submitButton.removeAttribute("disabled");
        } else {
            submitButton.setAttribute("disabled", "disabled");
        }
    }
    </script>
</body>
