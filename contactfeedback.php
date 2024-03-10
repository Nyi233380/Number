<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Number</title>
</head>
<body>
<div class="back">
	<a href="/home/Home.php"  class="button">Back</a>
</div>

    <div class="boxcontactfeedback">
    <div class="boxcontact">
    <h2>Contact Us</h2>
    <form action="\phpmailercom\mail.php" method="post">
        <label for="name">Your Name:</label><br>
        <input type="text" class="write" id="name" name="name" required><br>
        <label for="email">Your Email:</label><br>
        <input type="email" class="write" id="email" name="email" required><br>
        <label for="message">Message:</label><br>
        <textarea id="message" name="message" required></textarea><br><br>
        <label for="no">Phone: 09665879899</label><br>
        <label for="no">nnyi60277@gmail.com</label><br>
        <input type="submit" class="submit" name="send" value="send" onclick="showAlert();">
    </form>

    <h2>Feedback</h2>
    <form method="post" action="\phpmailercom\mailfeed.php">
        <label for="feedback">Your Feedback:</label><br>
        <textarea id="feedback" name="feedback" required></textarea><br>
        <input type="submit" class="submit" name="send" value="send" onclick="showAlert();">
    </form>
</div>
</div>
<script type="text/javascript">
        function showAlert() {
            alert(" Send it successfully! Thank you for your contact and feedback!");
        }
    </script>
<body>
</html>
