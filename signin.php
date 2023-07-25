

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flipzon Create Account</title>
    <link rel="Shortcut Icon" type="images" href="./imgs/favicon4.png">
    <link rel="stylesheet" href="signin_login.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <h1 class="neon-text">CREATE ACCOUNT</h1>
    </header>
    <form action="signin.php" method="post" id="form">
        
        <div class="container">
            <div class="image-container"><img src="img/gettyimages-1295823260-612x612-removebg (1).png" alt="OOPS something went wrong" width="100%"></div>
            
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
                    <span class="error">Your password should be8 characters long</span>
                </p>
                <p>On enrolling your email and mobile number, you will be receiving messages from us</p>
                <button type="submit" id="sub">Create account</button>
            </div>
            
        </div>
    </form>
    <p style="color: whitesmoke; text-align: center;">Already have an account? <a href="login.php">LOGIN?</a></p>

    <script src="signin.js"></script>
</body>
</html>



<?php

$errorMessage = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $host = 'localhost';  
    $dbname = 'coders';  
    $username = 'root';  
    $password = '';  

    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password);

        
    $name = $_POST['name'] ?? '';
    $mobile = $_POST['mobile'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    

    
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM signin WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $count1=$stmt->fetchColumn();


    $stmt = $pdo->prepare("SELECT COUNT(*) FROM signin WHERE mobile = :mobile");
    $stmt->bindParam(':mobile', $mobile);
    $stmt->execute();
    $count2=$stmt->fetchColumn();
    

        
        
if($count1===0 && $count2===0){


    $stmt = $pdo->prepare("INSERT INTO signin (name, mobile, email, password) VALUES (:name, :mobile, :email, :password)");
        
    
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':mobile', $mobile);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
            
            
    $stmt->execute();
    ?><script> 
    document.getElementById('email').parentElement.classList.add("success");
                document.getElementById('email').parentElement.classList.remove("error");
                 document.getElementById('mobile').parentElement.classList.add("success");
                document.getElementById('mobile').parentElement.classList.remove("error");
                document.getElementById('email').parentElement.querySelector('.error').innerText="";
                document.getElementById('mobile').parentElement.querySelector('.error').innerText=""; 
                Swal.fire(
                    'WELCOME!',
                    'An account has been Created',
                    'success'
                    )
                    </script><?php
}               

else if($count1>0){
    ?><script> document.getElementById('email').parentElement.classList.add("error");
               document.getElementById('email').parentElement.querySelector('.error').innerText="Email is already registered";
        </script>;<?php
}

else if($count2>0){
    ?><script> document.getElementById('mobile').parentElement.classList.add("error");
                document.getElementById('mobile').parentElement.querySelector('.error').innerText="Mobile Number  is aleready registered";
    </script>;<?php
}


    
        

}
?>