<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <title>Number</title>
</head>
<body>

<div id="menu1">
	<a href="/home/Home.php" class="page1">Home</a>
	<a href="/home/review.php" class="page2">Review</a>
    <a href="\detail.php" class="detail"><i class="fa-regular fa-circle-question"></i></a>
</div>


    <div class="contain">
        <div class="box form-box">
            <?php

                include("php\config.php");
                if(isset($_POST['submit'])){
                    $email = mysqli_real_escape_string($con, $_POST['email']);
                    $password = mysqli_real_escape_string($con, $_POST['password']);

                    $result = mysqli_query($con,"SELECT * FROM users WHERE Email='$email' AND Password='$password'") or die("Select Error!");
                    $row = mysqli_fetch_assoc($result);
                    if(is_array($row) && !empty($row)){
                        $_SESSION['vaild'] = $row['Email'];
                        $_SESSION['username'] = $row['Username'];
                        $_SESSION['age'] = $row['Age'];
                        $_SESSION['id'] = $row['Id'];
                    }
                    else{
                        echo "<div class='message'>
                        <p>Wrong username or Password!</p>
                      </div><br>";
                        echo "<a href='index.php'><button class='btn'>Go back</button>";
                    }
                    if(isset($_SESSION['vaild'])){
                        header("Location: home.php");
                    }
                }else{
            ?>
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Login" required>
                </div>
                <div class="links">
                    Don't have accout?<a href="register.php">Sign Up Now</a>
                </div>
            </form>
        </div>
        <?php }?>
    </div>
</body>
</html>