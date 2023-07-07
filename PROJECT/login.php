

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="signin_login.css">
</head>
<body>
    
    <form action="login.php" method="post">
        
        <div class="container" style="margin-top: 4rem;">
            <div class="image-container"><img src="img/gettyimages-1295823260-612x612-removebg (1).png" alt="OOPS something went wrong" width=100% ></div>
            
            <div class="content">
                <header>
                    <h1 class="neon-text">WELCOME BACK</h1>
                </header>
                
                <p>
                    <label for="email"><b>Email</b></label>
                    <input type="email" id="email" name="email">
                </p>
                <p></p>
                <p>
                    <label for="password"><b>Password</b></label>
                    <input type="password" id="password" name="password">
                    
                </p>
                <p></p>
                <p>By continuing, you agree to our Conditions of Use and Privacy Notice.</p>
                
                <button type="submit">Continue</button>
            </div>
            
        </div>
    </form>
    <p style="color: whitesmoke; text-align: center;"> New around here? <a href="signin.php">CREATE ACCOUNT</a></p>
</body>
</html>