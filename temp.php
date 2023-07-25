<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon</title>
    <link rel="Shortcut Icon" type="images" href="./imgs/Favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="homepage.css">
    <style>
        .sidebar {
            height: 0;
            width: 0;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #202020;
            overflow: hidden;
            padding-top: 20px;
            transition: height 0.5s, width 0.5s;
            z-index: 2; /* Ensure the sidebar appears on top of the overlay */
        }

        .sidebar.active {
            height: 250px; /* Change the height value to adjust the expanded height */
            width: 250px;
        }

        /* Menu item styles */
        /* .sidebar a {
            padding: 25px;
            text-decoration: none;
            font-size: 35px;
            color: #ffffff;
            display: block;
            transition: background-color 0.3s, color 0.3s;
        }

        .sidebar a i {
            margin-right: 20px;
        }

        /* Menu item hover effect 
        .sidebar a:hover {
            background-color: #101010;
            color: #ffffff;
        } */

        /* Close button */
        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 20px;
            color: #ffffff;
        }

        /* Content container styles */
        /* .content {
            margin-left: 50px; /* Add some space on the left to avoid overlapping 
            padding: 20px;
            transition: margin-left 0.5s;
        } */

        /* .content.active {
            margin-left: 250px; /* Change the margin value to match the expanded sidebar width 
        } */

        /* Menu toggle button styles */
        .menu-toggle {
            cursor: pointer;
            transition: transform 0.3s;
            z-index: 3; /* Ensure the toggle button appears on top of the overlay */
        }

        .menu-toggle.active {
            transform: rotate(180deg);
        }

        /* Overlay styles */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Semi-transparent background */
            z-index: 3; /* Place the overlay below the sidebar and toggle button */
            display: none; /* Hide the overlay by default */
        }

        /* Apply the overlay when the sidebar is active */
        .sidebar.active + .overlay {
            display: block;
        }
    </style>
</head>

<body>

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
                <input class="search-input" type="text" placeholder="Search Amazon">
                <div class="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
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

            <div class="nav-cart border"><a href="cart.php">
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
                    <a href="">Mens</a>
                    <a href="">Womens</a>
                    <a href="">Kids</a>
                </div>
                </div>
                <div class="dropdown">
                <p class="border">Furniture</p>
                <div class="dropdown-content" style="left: 200px;">
                    <a href="">1</a>
                    <a href="">1</a>
                    <a href="">1</a>
                </div>
                </div>
                <div class="dropdown">
                <p class="border">Electronics</p>
                <div class="dropdown-content" style="left: 300px;">
                    <a href="">222222</a>
                    <a href="">444444</a>
                    <a href="">444444</a>
                </div>
                </div>
                <div class="dropdown">
                <p class="border">Books</p>
                <div class="dropdown-content" style="left: 400px;">
                    <a href="">Horror</a>
                    <a href="">Horror</a>
                    <a href="">Horror</a>
                </div>
                </div>
        </div>
    </header>
    <script src="cart.js"></script>
</body>

</html>
<?php
include('connectdb.php');
$query = "SELECT * FROM men_section";
$run_query = $conn->query($query);
echo '<div class="display-section">';
if ($run_query->num_rows) {
    while ($row = $run_query->fetch_assoc()) {
        $img = $row['image'];
        $cat = $row['category'];
        $name = $row['cloth-name'];
        $prize = $row['prize'];
        echo '<div class="container display-item">'; // Add the new CSS class to the parent div
        echo '<div class="container-img" style="background-image: url(./men_clothes/' . $img . ');"></div>
            <div class="details">
                <span class="category">' . $cat . '</span><br>
                <span class="cloth-name">' . $name . '</span><br>
                <span class="prize">M.R.P: ' . $prize . '</span><br>
                <span class="neon-text">Free delivery</span>
            </div>
            <div class="button content">
                <div class="button-container">
                    <form action="temp.php" method="post" class="add-to-cart-form">
                    <input type="hidden" name="image" value="' . $img . '">
                    <input type="hidden" name="name" value="' . $name . '">
                    <input type="hidden" name="prize" value="' . $prize . '">
                        <button type="submit" class="cart-button" onclick="add_cart()">Add to cart</button>
                    </form>
                    <div class="quan-content">
                    <strong>Quantity</strong>
                        <select name="quantity" class="quan">
                            <option value="1" selected>1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                    <form action="temp.php" method="post" class="freelook-form">
                    <input type="hidden" name="img" value="' . $img . '">
                    <input type="hidden" name="name" value="' . $name . '">
                    <input type="hidden" name="prize" value="' . $prize . '">
                    <div class="menu-toggle" style="cursor:pointer;"><button onclick="freelook(event)"> look</button></div>
                    <div class="sidebar">
            <span class="close-button" onclick="freelook(event)">
                <i class="fas fa-times"></i>
            </span>
            <div style="color: #fefefe;">
            <img src="./men_clothes/' . $img . '" style="width:100px;">
            <p>'.$name.'</p>
            <p>'.$prize.'</p>
            </div>
        </div>
                    </form>
                </div>
            </div>
            
        </div>';
    }
}
echo '</div>';
?>

<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $img = $_POST['image'] ?? '';
        $name = $_POST['name'] ?? '';
        $prize = $_POST['prize'] ?? '';

        $host= 'localhost';
        $username='root';
        $password1='';
        $dbname='coders';   

        
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password1);

        /* $stmt = $pdo->prepare("SELECT quantity FROM cart WHERE  (image, name, prize) VALUES (:image, :name, :prize)"); */

        $stmt = $pdo->prepare("INSERT INTO cart (image, name, prize,quantity) VALUES (:image, :name, :prize,1) ON DUPLICATE KEY UPDATE quantity = quantity + 1");
        
        
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':image', $img);
        $stmt->bindParam(':prize', $prize);
                
                
        $stmt->execute();
    }
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
        <div class="foot-panel1">
            <span>Back to top</span>
        </div>

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