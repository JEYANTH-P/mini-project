<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amazon</title>
    <link rel="Shortcut Icon" type="images" href="./imgs/Favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="homepage.css">
    <link rel="stylesheet" href="cart.css">
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
                <form action="search.php" method="post"></form>
                <input class="search-input" type="text" placeholder="Search Amazon" name="keywords">
                <div class="search-icon">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </div>
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
                <p><span>Hello, sign in</span></p>
                <p class="nav-second">Account & Lists</p>
            </div>
            <div class="nav-return border">
                <p><span>Returns</span></p>
                <p class="nav-second">& Orders</p>
            </div>

            <!-- <div class="nav-cart border">
                <i class="fa-solid fa-cart-shopping"></i>
                Cart
            </div> -->
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
                <p class="border">Today's Deals</p>
                <p class="border">Customer Service</p>
                <p class="border">Registry</p>
                <p class="border">Gift Cards</p>
                <p class="border">Sell</p>
            </div>
            <div class="panel-deals">
                <p class="border">Shop deals in Electronics</p>
            </div>
        </div>
    </header>

    <body>
        <?php
        include('connectdb.php');
        $query = "SELECT * FROM cart";
        $run_query = $conn->query($query);
        echo '<div class="display-section">';
        if ($run_query->num_rows) {
            while ($row = $run_query->fetch_assoc()) {
                $img = $row['image'];
                $name = $row['name'];
                $prize = $row['prize'];
                $quantity = $row['quantity'];
                echo '<div class="container display-item">'; // Add the new CSS class to the parent div
                echo '<div class="container-img" style="background-image: url(./men_clothes/' . $img . ');"></div>
            <div class="details">
                <span class="cloth-name neonblue-text">' . $name . '</span><br>
                <span class="prize">M.R.P: ' . $prize . '</span><br>
                <span class="neon-text message">Free delivery</span>
                <span class="free-look neon-text">Quantity: ' . $quantity . '</span></span>
            
            <div class="button content">
                <div class="button-container">
                    <form action="cart.php" method="post" class="remove-from-cart-form">
                    <input type="hidden" name="image" value="' . $img . '">
                    <input type="hidden" name="name" value="' . $name . '">
                    <input type="hidden" name="prize" value="' . $prize . '">
                        <button type="submit" class="cart-button" onclick="removeCart()">Remove from cart</button>
                    </form>
                    
                </div>
            </div>

            </div>
            
        </div>';
            }
        }
        echo '</div>';
        ?>

        <script src="cart.js"></script>

    </body>

</html>
<?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        /* $img = $_POST['image'] ?? '';
        $name = $_POST['name'] ?? '';
        $prize = $_POST['prize'] ?? '';

        $host= 'localhost';
        $username='root';
        $password1='';
        $dbname='coders';

        
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password1);

        $stmt = $pdo->prepare("DELETE FROM cart WHERE image=:image AND name=:name AND prize=:prize");
        
    
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':image', $img);
        $stmt->bindParam(':prize', $prize);
                
                
        if ($stmt->execute()) {
            // Redirect back to the same page after the delete operation
            echo "<script>window.location.href = window.location.href;</script>";
            exit();
        } */
        $img = $_POST['image'] ?? '' ;
        $name = $_POST['name'] ?? '' ;
        $prize = $_POST['prize'] ?? '' ;

        $host= 'localhost';
        $username='root';
        $password1='';
        $dbname='coders';

        
        $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $username, $password1);

        // Prepare the query to fetch the current quantity for the given image, name, and prize
        $fetchQuery = "SELECT quantity FROM cart WHERE image = :image AND name = :name AND prize = :prize";

        // Prepare the statement for fetching the quantity
        $fetchStmt = $pdo->prepare($fetchQuery);

        // Bind the parameters to the placeholders for fetching the quantity
        $fetchStmt->bindParam(':image', $img, PDO::PARAM_STR);
        $fetchStmt->bindParam(':name', $name, PDO::PARAM_STR);
        $fetchStmt->bindParam(':prize', $prize, PDO::PARAM_INT);

        // Execute the fetch query
        $fetchStmt->execute();

        // Fetch the quantity from the result
        $row = $fetchStmt->fetch(PDO::FETCH_ASSOC);
        $currentQuantity = $row['quantity'] ?? 0;

        // Check if the current quantity is less than 2
        if ($currentQuantity < 2) {
            // If the quantity is less than 2, delete the row
            $deleteQuery = "DELETE FROM cart WHERE image = :image AND name = :name AND prize = :prize";
            $deleteStmt = $pdo->prepare($deleteQuery);
            $deleteStmt->bindParam(':image', $img, PDO::PARAM_STR);
            $deleteStmt->bindParam(':name', $name, PDO::PARAM_STR);
            $deleteStmt->bindParam(':prize', $prize, PDO::PARAM_INT);
            
            if ($deleteStmt->execute()) {
                // Redirect back to the same page after the delete operation
                echo "<script>window.location.href = window.location.href;</script>";
                exit();
            } 
        } else {
            // If the quantity is 2 or more, decrement the quantity by one
            $decrementQuery = "UPDATE cart SET quantity = quantity-1  WHERE image = :image AND name = :name AND prize = :prize";
            $decrementStmt = $pdo->prepare($decrementQuery);
            $decrementStmt->bindParam(':image', $img, PDO::PARAM_STR);
            $decrementStmt->bindParam(':name', $name, PDO::PARAM_STR);
            $decrementStmt->bindParam(':prize', $prize, PDO::PARAM_INT);
            if ($decrementStmt->execute()) {
                // Redirect back to the same page after the delete operation
                echo "<script>window.location.href = window.location.href;</script>";
                exit();
            } 
        }
    
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