<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $feedback = $_POST['feedback'];

    $to = "nnyi60277@gmail.com";
    $subject = "Feedback Submission";
    $body = "Feedback: $feedback";

  
    mail($to, $subject, $body);

    echo "Thank you for your feedback!";
}
?>
