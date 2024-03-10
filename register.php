<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
    <link rel="stylesheet" href="style.css">
    <title>Number</title>
</head>
<body>
    <div class="contain">
        <div class="box form-box">


<?php
    include("php\config.php");
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $email = $_POST['email'];
        $age = $_POST['age'];
        $password = $_POST['password'];

        $verify_query = mysqli_query($con,"SELECT Email FROM users WHERE Email='$email'");

        if(mysqli_num_rows($verify_query) !=0){
            echo "<div class='message'>
                    <p>This email is used, Try another One Please!</p>
                  </div><br>";
            echo "<a href='javascript:self.history.back()'><button class='btn'>Go back</button>";
        }
        else{
            mysqli_query($con,"INSERT INTO users(Username,Email,Age,Password) VALUES('$username','$email','$age','$password')") or die("Error Occured");

            echo "<div class='message'>
                    <p>Registration Successfully!</p>
                  </div><br>";
            echo "<a href='index.php'><button class='btn'>Login Now</button>";
            
        }
    }
    else{

    
?>

            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="age">Age</label>
                    <input type="number" name="age" id="age" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="text" name="password" id="password" required>
                </div>

                <div class="field">
                    <input type="submit" class="btn" name="submit" value="Register" required>
                </div>
                <div class="links">
                    Already have a account?<a href="index.php">Sign in</a>
                </div>
            </form>
        </div>
        <?php }?>
    </div>
</body>
</html>