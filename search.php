<?php 
session_start();
include("connectdb.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flipzon</title>
    <link rel="Shortcut Icon" type="images" href="./imgs/favicon4.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="homepage.css">
</head>

<body id="back2">
    <header>
        <div class="navbar">
            <div class="nav-logo border">
                <div class="logo" onclick="window.location.href = 'homepage.html'"></div>
            </div>
            <div class="nav-address border">
                <p class="add-first">Deliver to</p>
                <div class="add-icon">
                    <i class="fa-solid fa-location-dot"></i>
                    <p class="add-sec">India</p>
                </div>

            </div>
            <form action="search.php" method="post">
            <div class="nav-search">
                <select class="search-select" name="" id="">
                    <option value="">All</option>
                    <option value="">Clothes</option>
                    <option value="">Furniture</option>
                    <option value="">Electronics</option>
                    <option value="">Pet care</option>
                    <option value="">Books and Stationery</option>
                    <option value="">Sports outlet</option>
                    <option value="">Gadgets and accessories</option>
                    <option value="">Fitness and wellness</option>
                    <option value="">Beauty picks</option>
                    <option value="">Health and personal care</option>
                </select>
                
                <input class="search-input" type="text" placeholder="Search Amazon" name="keywords">
                <button class="search-icon" type="submit">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
                
            </div>
            <div class="nav-flag">
                <div>
                    <i class="fa-solid fa-language"></i>
                </div>
                <div>
                    <select class="select-lang" id="">
                        <option value="">EN</option>
                    </select>
                </div>

            </div>
            <div class="nav-singin border">
                <a href="login.php" style="color: #fefefe;"><p class="logout"><!-- <span>Hello, sign in</span> --><i class="fa-solid fa-right-from-bracket" id="log"></i></p></a>
                <!-- <p class="nav-second">Account & Lists</p> -->
            </div>
            <div class="nav-return border">
                <p><span>Returns</span></p>
                <p class="nav-second">& Orders</p>
            </div>

            <div class="nav-cart border"><a href="cart.php" style="color: white;">
                <i class="fa-solid fa-cart-shopping"><span class="cart-number"  id="cart">0</span></i>
                Cart</a>
            </div>
        </div>
        <div class="panel border">
            <div class="panel-all">
                <i class="fa-solid fa-bars"></i>
                All
            </div>
            <div class="panel-ops">
            <div class="dropdown">
                <p class="border">Clothes</p>
                <div class="dropdown-content" >
                    <a href="additem.php">Mens</a>
                    <a href="women.php">Womens</a>
                    <a href="kid.php">Kids</a>
                </div>
                </div>
                <div class="dropdown">
                <p class="border">Furniture</p>
                <div class="dropdown-content" style="left: 27em;">
                    <a href="">Chair</a>
                    <a href="">Sofa</a>
                    <a href="">Table</a>
                </div>
                </div>
                <div class="dropdown">
                <p class="border">Electronics</p>
                <div class="dropdown-content" style="left: 33em;">
                    <a href="">Mobile</a>
                    <a href="">Laptop</a>
                    <a href="">Refrigerator</a>
                </div>
                </div>
                <div class="dropdown">
                <a href="book.php" style="color: white;"><p class="border">Books</p></a>
                </div>
                </div>
        </div>
    </header>
    <script src="cart.js"></script>
</body>
</html>
<?php
if (isset($_POST['keywords'])){
    unset($_SESSION['key']);

}
if (isset($_SESSION['key'])){
    $key=$_SESSION['key'];
    $query = "SELECT * FROM products WHERE LOWER(keywords) LIKE '%" . strtolower($_SESSION['key']) . "%'";
    
        $run_query = $conn->query($query);
        echo '<div class="display-section">';
        if ($run_query->num_rows){
            while ($row = $run_query->fetch_assoc()){
                $img = $row['image'];
                $name = $row['name'];
                $cat = $row['category'];
                $prize = $row['prize'];
                echo '<div class="container display-item">'; // Add the new CSS class to the parent div
        echo '<div class="container-img" style="background-image: url(./all_images/' . $img . ');"></div>
            <div class="details">
                <span class="category">' . $cat . '</span><br>
                <span class="cloth-name">' . $name . '</span><br>
                <span class="prize">M.R.P: ' . $prize . '</span><br>
                <span class="neon-text">Free delivery</span>
            </div>
            <div class="button content">
                <div class="button-container">
                    <form action="search.php" method="post" class="add-to-cart-form">
                    <input type="hidden" name="image" value="' . $img . '">
                    <input type="hidden" name="name" value="' . $name . '">
                    <input type="hidden" name="prize" value="' . $prize . '">
                        <button type="submit" class="cart-button" onclick="add_cart()">Add to cart</button>
                    </form>
                    <button class="free-look">Free look</button>
                </div>
            </div>
        </div>';
    }
}
echo '</div>';

}

if(!isset($_SESSION['key'])){
    
        include("connectdb.php");
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $key = $_POST['keywords'] ?? '';
        
        $query = "SELECT * FROM products WHERE LOWER(keywords) LIKE '%" . strtolower($key) . "%'";
        $run_query = $conn->query($query);
        echo '<div class="display-section">';
        if ($run_query->num_rows){
            while ($row = $run_query->fetch_assoc()){
                $img = $row['image'];
                $name = $row['name'];
                $cat = $row['category'];
                $prize = $row['prize'];
                echo '<div class="container display-item">'; // Add the new CSS class to the parent div
        echo '<div class="container-img" style="background-image: url(./all_images/' . $img . ');"></div>
            <div class="details">
                <span class="category">' . $cat . '</span><br>
                <span class="cloth-name">' . $name . '</span><br>
                <span class="prize">M.R.P: ' . $prize . '</span><br>
                <span class="neon-text">Free delivery</span>
            </div>
            <div class="button content">
                <div class="button-container">
                    <form action="search.php" method="post" class="add-to-cart-form">
                    <input type="hidden" name="image" value="' . $img . '">
                    <input type="hidden" name="name" value="' . $name . '">
                    <input type="hidden" name="prize" value="' . $prize . '">
                        <button type="submit" class="cart-button" onclick="add_cart()">Add to cart</button>
                    </form>
                    
                    <button class="free-look">Free look</button>
                </div>
            </div>
        </div>';
    }
}
echo '</div>';

}
}

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $img = $_POST['image'] ?? '';
        $name = $_POST['name'] ?? '';
        $prize = $_POST['prize'] ?? '';

        $host= 'localhost';
        $username='root';
        $password1='';
        $dbname='coders';   
        
        
    
        if (isset($_SESSION['key'])){
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password1);

        /* $stmt = $pdo->prepare("SELECT quantity FROM cart WHERE  (image, name, prize) VALUES (:image, :name, :prize)"); */

        $stmt = $pdo->prepare("INSERT INTO cart (image, name, prize,quantity) VALUES (:image, :name, :prize,1) ON DUPLICATE KEY UPDATE quantity = quantity + 1");
        
        
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':image', $img);
        $stmt->bindParam(':prize', $prize);
                
                
        $stmt->execute();
    }
}
$_SESSION['key'] = $key;
?>
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <footer>
    <a href="#back2" style="color: white;"><div class="foot-panel1">
            <span >Back to top</span>
        </div></a>  

        <div class="foot-panel2">
            <div class="foot-list">
                <ul>
                    <li class="foot-li">Get to Know Us</li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About Amazon</a></li>
                    <li><a href="">Investor Relations</a></li>
                    <li><a href="">Amazon Devices</a></li>
                    <li><a href="">Amazon Science</a></li>
                </ul>
            </div>
            <div class="foot-list">
                <ul>
                    <li class="foot-li">Get to Know Us</li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About Amazon</a></li>
                    <li><a href="">Investor Relations</a></li>
                    <li><a href="">Amazon Devices</a></li>
                    <li><a href="">Amazon Science</a></li>
                </ul>
            </div>
            <div class="foot-list">
                <ul>
                    <li class="foot-li">Get to Know Us</li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About Amazon</a></li>
                    <li><a href="">Investor Relations</a></li>
                    <li><a href="">Amazon Devices</a></li>
                    <li><a href="">Amazon Science</a></li>
                </ul>
            </div>
            <div class="foot-list">
                <ul>
                    <li class="foot-li">Get to Know Us</li>
                    <li><a href="">Careers</a></li>
                    <li><a href="">Blog</a></li>
                    <li><a href="">About Amazon</a></li>
                    <li><a href="">Investor Relations</a></li>
                    <li><a href="">Amazon Devices</a></li>
                    <li><a href="">Amazon Science</a></li>
                </ul>
            </div>



        </div>
        <div class="foot-panel3">
            <div class="logo-bottom">

            </div>
        </div>
</footer>
</body>

</html>