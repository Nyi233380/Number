<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Number</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" type="text/css" href="Home.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<body>
<div id="menu">
	<a href="/home/Home.php" class="page1">Home</a>
	<a href="/home/review.php" class="page2">Review</a>
	<a href="previewcodition.php" class="page3">Store</a>
        <a href="\home.php" class="page4">Profile</a>
        <a href="\detail.php" class="detail"><i class="fa-regular fa-circle-question"></i></a>
    </div>
  


    <div class="slideshow1">
        <div class="slides2">
            <?php
           
                $images1 = glob('image/*.jpg');
                if ($images1) {
                    foreach ($images1 as $index => $image2) {
                        echo '<div class="slide3"><img src="' . $image2 . '" alt="Slide3" width=800px height=400px style="border-radius: 40px;""></div>';
                    }
                } else {
                    echo '<p>No images found.</p>';
                }
            ?>
        </div>
    </div>
    <div class="thumbnails">
        <?php
       
            if ($images1) {
                foreach ($images1 as $index => $image2) {
                    echo '<div class="thumbnail" onclick="goToSlide(' . $index . ')"><img src="' . $image2 . '" alt="Thumbnail"></div>';
                }
            }
        ?>
    </div>
    <script>
      
        const slides2 = document.querySelector('.slides2');
        const thumbnails = document.querySelectorAll('.thumbnail');
        if (slides2) {
            const slideWidth = slides2.clientWidth;
            let counter = 0;

            function slide3() {
                slides2.style.transform = `translateX(${-slideWidth * counter}px)`;
                updateThumbnails();
                counter++;
                if (counter === <?php echo count($images1); ?>) {
                    counter = 0;
                }
            }

            setInterval(slide3, 4000); 

            function goToSlide(index) {
                counter = index;
                slides2.style.transform = `translateX(${-slideWidth * counter}px)`;
                updateThumbnails();
            }

          
            function updateThumbnails() {
                thumbnails.forEach((thumbnail, index) => {
                    if (index === counter) {
                        thumbnail.classList.add('active');
                    } else {
                        thumbnail.classList.remove('active');
                    }
                });
            }
        } else {
            console.error('Slides container not found.');
        }
    </script>



    <div class="onlinep1">
        <p>An online shop, also known as an online store or e-commerce website, 
            is a virtual marketplace where<br><br> goods or services are sold over the internet.
            It allows businesses to showcase their products or services to<br><br> a global audience 
            and enables customers to browse, select, and purchase items from the comfort of 
            their<br><br> own homes using a computer or mobile device.</p>
    </div>
    <div class="online1">
        <img src="\home\what is online shop\online.jpg" width="400px" height="250px" alt="">
    </div>
    <div class="online2">
        <img src="\home\what is online shop\online1.jpg" width="400px" height="250px" alt="">
    </div>
    <div class="onlinep2">
        <p>Online shops typically include features such as product listings, detailed descriptions,
            pricing information,<br><br> shopping carts, secure payment gateways, and order management systems.
            Customers can often filter<br><br> products based on various criteria, such as price range, category, brand, or popularity.</p>
    </div>
    <div class="onlinep3">
        <p>The convenience and accessibility of online shopping have made it increasingly popular among consumers<br><br> worldwide.
            It offers several advantages over traditional brick-and-mortar stores, including 24/7<br><br> accessibility, 
            a wider selection of products, competitive pricing, and the ability to compare prices and<br><br> reviews easily.</p>
            </div>
    <div class="online3">
        <img src="\home\what is online shop\online3.jpg" width="400px" height="250px" alt="">
    </div>

    <div class="productheader"><h2>Products<h2></div>



	<?php
$images = array(
    "/shopping_cart/img/Apple AirPods.jpg",
    "/shopping_cart/img/Apple Magic Mouse in Black.jpg",
    "/shopping_cart/img/apple11ipadpro(4th gen).jpg",
    "/shopping_cart/img/Aroma 6-Cup Rice Cooker and Food Steamer.jpg",
    "/shopping_cart/img/Bose Soundlink Flex Bluetooth Speaker in Black.jpg",
    "/shopping_cart/img/cleandewfoamcleanser.jpg",
    "/shopping_cart/img/cliniquedramatically.jpg",
    "/shopping_cart/img/GoPro Hero11 Waterproof Action Camera in Black.jpg",
    "/shopping_cart/img/greendeartigercica.jpg",
    "/shopping_cart/img/h9hyaluronic.jpg",
    "/shopping_cart/img/jmsolutiontoner.jpg",
    "/shopping_cart/img/MacBookProAppleM3.webp",
    "/shopping_cart/img/niacinamide.jpg",
    "/shopping_cart/img/Ninja 8 Quart 2-Basket Air Fryer with DualZone Technology.jpg",
    "/shopping_cart/img/ordinarymultipeptide+copperpeptides.jpg",
    "/shopping_cart/img/ordinaryretinol.jpg",
    "/shopping_cart/img/ordinarysqualanecleanser.jpg",
    "/shopping_cart/img/Samsung SIM FREE Galaxy S23 Ultra 5G.jpg",
    "/shopping_cart/img/Sony DualSense Wireless Controller in Gray Camouflage.jpg",
    "/shopping_cart/img/wonderrice.jpg",
);
$name = array(
    "Apple AirPods",
    "Apple Magic Mouse in Black",
    "apple11ipadpro(4th gen)",
    "Aroma 6-Cup Rice Cooker and Food Steamer",
    "Bose Soundlink Flex Bluetooth Speaker",
    "cleandewfoamcleanser",
    "cliniquedramatically",
    "GoPro Hero11 Waterproof Action Camera",
    "greendeartigercica",
    "h9hyaluronic",
    "jmsolutiontoner",
    "MacBookProAppleM3",
    "niacinamide",
    "Ninja 8 Quart 2-Basket Air Fryer with DualZone Technology",
    "ordinarymultipeptide+copperpeptides",
    "ordinaryretinol",
    "ordinarysqualanecleanser",
    "Samsung SIM FREE Galaxy S23 Ultra 5G",
    "Sony DualSense Wireless Controller in Gray Camouflage",
    "wonderrice"
);

$currentSlideIndex = isset($_GET['slide']) ? intval($_GET['slide']) : 0;
$totalSlides = 5;
$currentSlideIndex = max(0, min($currentSlideIndex, $totalSlides - 1));
?>

<div class="slider-container">
  <div class="slides" style="transform: translateX(-<?php echo $currentSlideIndex * 100; ?>%);">
    <?php foreach ($images as $index => $image): ?>
      <div class="slide">
        <div class="imgname">
          <a href="\home\review.php"><img src="<?php echo $image; ?>" alt="Slide <?php echo ($index + 1); ?>"></a>
          <div class="slidename"><?php echo $name[$index]; ?></div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>
</div>

<script>
  var slideIndex = <?php echo $currentSlideIndex + 1; ?>;
  var totalSlides = <?php echo $totalSlides; ?>;

  function plusSlides(n) {
    showSlides(slideIndex += n);
  }

  function showSlides(n) {
    var slides = document.getElementsByClassName("slides")[0];
    slideIndex = (n > totalSlides) ? 1 : (n < 1) ? totalSlides : n;
    slides.style.transform = "translateX(-" + (slideIndex - 1) * 100 + "%)";
  }
</script>


<div class="but">
            <a href="review.php"  class="button">For Review</a>
			<a href="previewcodition.php"  class="button">For Charge</a>
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
				<a href="/contactfeedback.php"><li><button class="contactbtn">Contact us?<br>feed back</button></li></a>
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