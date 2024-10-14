<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You  </title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 40px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #333;
        }
        p {
            color: #666;
            font-size: 18px;
            line-height: 1.6;
        }
        .logo {
            width: 250px;
            margin: 0 auto;
            padding-bottom: 20px;
            border-radius: 50%;
        }
        .btn {
    display: block;
    margin-top: auto;
    padding: 10px;
    background-color: #1b1a0d;
    color: white;
    text-align: center;
    text-decoration: none;
    border-radius: 10px;
    transition: background-color 0.3s ease;
}

.btn:hover {
    background-color: #082d69;
}

    </style>
</head>
<body>
    <div class="container">
        <img src="./logo1.jpg" alt="Your Logo" class="logo">
        <h1>Thank You  <?php  
                //  session_start();
                // echo isset($_SESSION['user_name']) ? $_SESSION['user_name'] : ''; 
                ?></h1>
        <p>bill updated successfully . </p>
        <p></p>
       
        <a href="./welcomeadmin.php" class="btn"> click here to back to home page. </a>
    </div>
    
</body>
</html>
