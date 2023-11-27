# mini-project
<br>
Jeyanth 
<br>
# men-section
INSERT INTO `men_section`(`image`, `category`, `cloth-name`, `prize`) VALUES ('men-shirt1.jpg', 'Mens Shirt', 'Dennis Lingo', 499), ('men-shirt2.jpg', 'Mens Shirt', 'Denim Co', 399), ('men-shirt3.jpg', 'Mens Shirt', 'Denim Co', 499), ('men-track1.jpg', 'Mens Track', 'Puma', 599), ('men-track2.jpg', 'Mens Track', 'Alan Jones', 599), ('men-track3.jpg', 'Mens Track', 'Allen Solly', 799), ('men-tshirt1.jpg', 'Mens T-shirt', 'Lyriq', 299), ('men-tshirt2.jpg', 'Mens T-shirt', 'Lymio', 399), ('men-tshirt3.jpg', 'Mens T-shirt', 'Lymio', 199), ('men-jeans1.jpg', 'Mens Jeans', 'Peter England', 599), ('men-jeans2.jpg', 'Mens Jeans', 'Pepe Jeans', 699), ('men-jeans3.jpg', 'Mens Jeans', 'Levis', 599);

# women-section
INSERT INTO `women`(`image`, `category`, `name`, `prize`) VALUES ('women-saree1.jpg','Womens Saree','Gosriki','299'), ('women-saree2.jpg','Womens Saree','Srill','399'), ('women-saree3.jpg','Womens Saree','SGF11','299'), ('women-kurtha1.jpg','Womens Kurtha','Gosriki','199'), ('women-kurtha2.jpg','Womens Kurtha','Gosriki','199'), ('women-kurtha3.jpg','Womens Kurtha','Gosriki','299'), ('women-jeans1.jpg','Womens Jeans','Aka chic','499'), ('women-jeans2.jpg','Womens Jeans','Aka chic','399'), ('women-jeans3.jpg','Womens Jeans','Miss Chase','599');

# kid-section
INSERT INTO `kid_section`(`image`, `category`, `name`, `prize`) VALUES ('kid-shirt1.jpg','Kids Shirt','Max','299'), ('kid-shirt2.jpg','Kids Shirt','Icable','259'), ('kid-skirt1.jpg','Kids Skirt','Pw platypus','199'), ('kid-tshirt1.jpg','Kids T-shirt','Max','159'), ('kid-combo1.jpg','Kids Combo','Real basics','499'), ('kid-combo2.jpg','Kids Combo','Ariel','399');

# book-section
INSERT INTO `book_section`(`image`, `category`, `name`, `prize`) VALUES ('book1.jpg','Book','Tom Hanks','599'), ('book2.jpg','Book','Kunex','399'), ('book3.jpg','Book','Emily Henry','459'), ('book4.jpg','Book','Rebacca','399'), ('book5.jpg','Book','Holly Jackson','699');

# products
INSERT INTO `products`(`image`, `category`, `name`, `prize`, `keywords`) VALUES ('men-shirt1.jpg', 'Mens Shirt', 'Dennis Lingo', 499,'shirt dennis lingo'), ('men-shirt2.jpg', 'Mens Shirt', 'Denim Co', 499,'shirt denim'), ('men-shirt3.jpg', 'Mens Shirt', 'Denim Co', 499,'shirt denim'), ('men-track1.jpg', 'Mens Track', 'Puma', 499,'track puma'), ('men-track2.jpg', 'Mens Track', 'Alan Jones', 499,'track alan jones'), ('men-track3.jpg', 'Mens Track', 'Allen Solly', 499,'track allen solly'), ('men-tshirt1.jpg', 'Mens T-shirt', 'Lyriq', 499,'tshirt,lyriq'), ('men-tshirt2.jpg', 'Mens T-shirt', 'Lymio', 499,'tshirt lymio'), ('men-tshirt3.jpg', 'Mens T-shirt', 'Lymio', 499,'tshirt lymio'), ('men-jeans1.jpg', 'Mens Jeans', 'Peter England', 499,'jeans peter england'), ('men-jeans2.jpg', 'Mens Jeans', 'Pepe Jeans', 499,'jeans pepe'), ('men-jeans3.jpg', 'Mens Jeans', 'Levis', 499,'jeans levis'),('women-saree1.jpg','Womens Saree','Gosriki','200','saree gosriki'), ('women-saree2.jpg','Womens Saree','Srill','300','saree srill'), ('women-saree3.jpg','Womens Saree','SGF11','400','saree sgf11'), ('women-kurtha1.jpg','Womens Kurtha','Gosriki','200','kurtha gosriki'), ('women-kurtha2.jpg','Womens Kurtha','Gosriki','200','kurtha gosriki'), ('women-kurtha3.jpg','Womens Kurtha','Gosriki','200','kurtha gosriki'), ('women-jeans1.jpg','Womens Jeans','Aka chic','600','jeans aka chic'), ('women-jeans2.jpg','Womens Jeans','Aka chic','200','jeans aka chic'), ('women-jeans3.jpg','Womens Jeans','Miss Chase','400','jeans miss chase');

# close button
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 20px;
            color: #ffffff;
        }
        <span class="close-button" onclick="freelook(event)">
                <i class="fas fa-times"></i>
            </span>
