<?php

$connect = mysqli_connect("localhost", "root", "", "shopping_cart") or die("Couldn't connect to database");
session_start();

function removeFromCart($index) {
    if (isset($_SESSION['cart']) && isset($_SESSION['cart'][$index])) {
        unset($_SESSION['cart'][$index]);
        
        $_SESSION['cart'] = array_values($_SESSION['cart']);
    }
}


if (isset($_POST['remove_item']) && isset($_POST['item_index'])) {
    $itemIndex = $_POST['item_index'];
    removeFromCart($itemIndex);
}


function calculateTotalPrice() {
    $totalPrice = 0;
    if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
        foreach ($_SESSION['cart'] as $item) {
            $totalPrice += $item['price'] * $item['quantity'];
        }
    }
    return $totalPrice;
}


if (isset($_POST['charge'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    
    if (!isset($_SESSION['cart'])) {
        $_SESSION['cart'] = array();
    }

    $product = array(
        'name' => $name,
        'price' => $price,
        'quantity' => $quantity
    );
    $_SESSION['cart'][] = $product;
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="cosmeticr.css">
<body>
<div id="menu">
<a href="/home/Home.php" class="page1">Home</a>
	<a href="/home/review.php" class="page2">Review</a>
	<a href="previewcodition.php" class="page3">Store</a>
        <a href="\home.php" class="page4">Profile</a>
        <a href="\detail.php" class="detail"><i class="fa-regular fa-circle-question"></i></a>
    </div>


    
    <div class="search-boxstyle">
        <div class="search-box">
        <form method="GET" action="reviewsearch.php">
            <input type="text" name="search" placeholder="Search..."> 
            <div class="btnsearch">
            <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
        </div>
    </div> 



    <div class="catagories">
            <a href="review.php" class="page5">All</a>
	        <a href="cosmeticr.php" class="page6">Cosmetic</a>
	        <a href="electricr.php" class="page7">Electronic</a>
	        <a href="guitarr.php" class="page8">Guitar</a>
            <a href="bagr.php" class="page9">Bags</a>
            <a href="furniturer.php" class="page10">Furniture</a>
        </div>




        <div class="col-md-12">

            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center"></h2>
                    <div class="col-md-12">
                        <div class="row">
                            <?php
                            $query = "SELECT * FROM cart_item where type='cosmetic'";
                            $result = mysqli_query($connect, $query);
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <div class="col-md-4 product">
                                    <form method="post" action="preview.php?id=<?= $row['id'] ?>">
                                        <img src="/shopping_cart/img/<?= $row['image'] ?>" style='height:200px;'>
                                        <div class="review-passage" id="review_<?= $row['id'] ?>" style="padding-left: 20%">
                                            <?= $row['review']; ?>
                                        </div>
                                        <div class="productlabel">
                                        <h5 class=""><?= $row['name']; ?></h5>
                                        <h5 class="">$<?= number_format($row['price'], 2); ?><h5>
                                        </div>
                                    </form>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                        
                    </div>
                </div>
            </div>
        </div>

    <div id="footer"></div>
	<div class="footerContainer">
		<div class="socialIcons">
			<a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a>
			<a href="https://www.instagram.com/accounts/login/"><i class="fa-brands fa-instagram"></i></a>
			<a href="https://twitter.com/login?lang=en"><i class="fa-brands fa-x-twitter"></i></a>
			<a href="https://accounts.google.com/ServiceLogin?ltmpl=mobNH"><i class="fa-brands fa-google"></i></a>
			<a href="https://www.youtube.com/account"><i class="fa-brands fa-youtube"></i></a>
		</div>
		<div class="footerNav">
			<ul>
            <a href="/contactreview.php"><li><button class="contactbtn">Contact us?<br>feed back</button></li></a>
			</ul>
		</div>
		<div class="footerBottom">
			<p>Copyright &copy;2023; Designed by <span class="designer">Number</span></p>
            <div class="mylogo">
                <img src="/image/mylogoofficial.jpg" alt="">
            </div>
		</div>
	</div>




    
</body>

</html>
