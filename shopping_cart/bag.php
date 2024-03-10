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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/slate/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="bag.css">
<body>
<div id="menu">
        <a href="/home/Home.php" class="page1">Home</a>
	    <a href="/home/review.php" class="page2">Review</a>
	    <a href="/shopping_cart/preview.php" class="page3">Store</a>
        <a href="\home.php" class="page4">Profile</a>
		<a href="\detail.php" class="detail"><i class="fa-regular fa-circle-question"></i></a>
</div>


    <div class="search-boxstyle">
        <div class="search-box">
        <form method="GET" action="previewsearch.php">
            <input type="text" name="search" placeholder="Search..."> 
            <div class="btnsearch">
            <button type="submit"><i class="fa fa-search"></i></button>
            </div>
        </form>
        </div>
    </div> 
        <div class="catagories">
            <a href="preview.php" class="page5">All</a>
	        <a href="cosmetic.php" class="page6">Cosmetic</a>
	        <a href="electric.php" class="page7">Electronic</a>
	        <a href="guitar.php" class="page8">Guitar</a>
            <a href="bag.php" class="page9">Bags</a>
            <a href="furniture.php" class="page10">Furniture</a>
        </div>

        </div>

        <div class="container-fluid">
        <div class="col-md-12">

            <div class="row">
                <div class="col-md-6">
                    <h2 class="text-center"></h2>
                    <div class="col-md-12">
                        <div class="row">
                            <?php
                            $query = "SELECT * FROM cart_item where type='bag'";
                            $result = mysqli_query($connect, $query);
                            while ($row = mysqli_fetch_array($result)) {
                            ?>
                                <div class="col-md-4 product">
                                    <form method="post" action="preview.php?id=<?= $row['id'] ?>">
                                        <img src="img/<?= $row['image'] ?>" style='height:150px;'>
                                        <div class="productlabel">
                                        <h5 class=""><?= $row['name']; ?></h5>
                                        <h5 class="">$<?= number_format($row['price'], 2); ?><h5>
                                        </div>
                                        <input type="hidden" name="name" value="<?= $row['name'] ?>">
                                        <input type="hidden" name="price" value="<?= $row['price'] ?>">
                                        <input type="number" name="quantity" value="1" class="form-control">
                                        <input type="submit" class="btn" value="add to charge" name="charge">
                                    </form>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="cart-section">
                        <h2 class="text-center">Items in Cart</h2>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Product</th>
                                    <th>Price</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if (isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
                                    foreach ($_SESSION['cart'] as $index => $item) {
                                        $totalPrice = $item['price'] * $item['quantity'];
                                ?>
                                    <div class="chargeitem">
                                        <tr>
                                            <td><?= $item['name']; ?></td>
                                            <td>$<?= number_format($item['price'], 2); ?></td>
                                            <td>$<?= number_format($totalPrice, 2); ?></td>
                                            <td>
                                                <form method="post">
                                                    <input type="hidden" name="item_index" value="<?= $index ?>">
                                                    <input type="submit" class="remove-button" value="drop" name="remove_item">
                                                </form>
                                            </td>
                                        </tr>
                                    </div>
                                <?php
                                    }
                                } else {
                                    echo "<tr><td colspan='4'>No items in cart</td></tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                        <h4 class="text-center totaltotal">Total Price: $<?= number_format(calculateTotalPrice(), 2); ?>
                        <a href="/test.php"><button class="btncharge" type="submit">Charge</button></a></h4>
                        
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
            <a href="/contactpreview.php"><li><button class="contactbtn">Contact us?<br>feed back</button></li></a>
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
