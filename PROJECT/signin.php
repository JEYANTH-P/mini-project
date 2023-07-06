<?php
$host = 'localhost';  // Change this to your WAMP server host if different
$dbname = 'coders';  // Replace with your actual database name
$username = 'root';  // Replace with your database username
$password = '';  // Replace with your database password

try {
    // Connect to the database
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);
    
    // Set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // Prepare the SQL statement for insertion
    $stmt = $pdo->prepare("INSERT INTO signin (name, mobile, email, password) VALUES (:name, :mobile, :email, :password)");
    
    // Set the parameter values
    $name = $_POST['name'];  // Replace with the actual name
    $mobile = $_POST['mobile'];  // Replace with the actual mobile number
    $email = $_POST['email'];  // Replace with the actual email
    $password = $_POST['password'];  // Replace with the actual password
    
    // Bind the parameters
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':mobile', $mobile);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    
    // Execute the statement
    $stmt->execute();
    
    echo "User information inserted successfully!";
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login a</title>
    <link rel="stylesheet" href="signin_login.css">
</head>
<body>
    <header>
        <h1 class="neon-text">CREATE ACCOUNT</h1>
    </header>
    <form action="signin.php" method="post" id="form">
        
        <div class="container">
            <div class="image-container"><img src="img/gettyimages-1295823260-612x612-removebg (1).png" alt="OOPS something went wrong" width=100% ></div>
            
            <div>
                <p>
                    <label for="name"><b>Your Name</b></label>
                    <input type="text" id="name" name="name">
                    <span class="error"></span>
                </p>
                <p>
                    <label for="mobile"><b>Mobile Number</b></label>
                    <input type="tel" id="mobile" name="mobile">
                    <span class="error"></span>
                    
                </p>
                <p>
                    <label for="email"><b>Email</b></label>
                    <input type="text" id="email" name="email">
                    <span class="error"></span>
                </p>
                <p>
                    <label for="password"><b>Password</b></label>
                    <input type="password" id="password" name="password">
                    <span class="error">Your password should be 8 characters long</span>
                </p>
                <p>On enrolling your email and mobile number you will be receiving messages from us</p>
                <button type="submit" id="submit">Create account</button>
            </div>
            
        </div>
    </form>
    <p style="color: whitesmoke; text-align: center;"> Already have an account? <a href="login.php">LOGIN?</a></p>

    <script src="signin.js"></script>
</body>
</html>