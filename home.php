<?php
    session_start();

    include("php/config.php");
    if(!isset($_SESSION['vaild'])){
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Number</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
<link rel="stylesheet" type="text/css" href="profile.css">
<link rel="stylesheet" type="text/css" href="style.css">
<div id="menu">
		<a href="/home/Home.php" class="page1">Home</a>
		<a href="/home/review.php" class="page2">Review</a>
		<a href="/shopping_cart/preview.php" class="page3">Store</a>
        <a href="\home.php" class="page4">Profile</a>
		<a href="\detail.php" class="detail"><i class="fa-regular fa-circle-question"></i></a>
</div>
<body>



		<div class="butt">	
			<a href="/php/logout.php"><button class="btn">Log Out</button></a>
		</div>

	
	


		<div class="right-links">

			<?php
				$id = $_SESSION['id'];
				$query = mysqli_query($con, "SELECT*FROM users WHERE Id=$id");

				while($result = mysqli_fetch_assoc($query)){
				$res_Uname = $result['Username'];
				$res_Email = $result['Email'];
				$res_Age = $result['Age'];
				$res_id = $result['Id'];
				}

				echo "<div class='change'><a href='edit.php?Id=$res_id'>Change Profile</a></div>";

			?>
		</div>
<div class="profilebox">
			<div class="img-container">
				<img src="/home/profileimg.webp" alt="Anna">
				<div class="prospan">
				<span></span>
				</div>
			</div>
		<div class="cols_container">
				<h2>name <b><?php echo $res_Uname ?></b><h2>
				<p>Email <b><?php echo $res_Email ?></b></p>
				<p1>Age <b><?php echo $res_Age ?></b></p1>
			<div class="content">
				<ul>
					<li><i class="fab fa-twitter"></i></li>
					<li><i class="fab fa-google"></i></li>
					<li><i class="fab fa-facebook"></i></li>
					<li><i class="fab fa-instagram"></i></li>
				</ul>
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
			<a href="/contacthome.php"><li><button class="contactbtn">Contact us?<br>feed back</button></li></a>
			</ul>
		</div>
		<div class="footerBottom">
			<p>Copyright &copy;2023; Designed by <span class="designer">LOSTARK</span></p>
			<div class="mylogo">
                <img src="/image/mylogoofficial.jpg" alt="">
            </div>
		</div>
	</div>
</div>
</body>
</html>