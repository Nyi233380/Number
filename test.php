<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number</title>
    <link rel="stylesheet" href="test.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
</head>
<body>
    <div class="back">
			<a href="/shopping_cart/preview.php"  class="button">Back</a>
    </div>
    <div class="wrapper">
        <div class="payment">
            <div class="payment-logo">
                <p>p</p>
            </div>
            <h2>Payment Gateway</h2>
            <div class="form">
                <div class="card space icon-relative">
                    <label class="label">Card holder:</label>
                    <input type="text" class="input" name="card_holder" placeholder="Coding Market">
                    <i class="fas fa-user"></i>
                </div>
                <div class="card space icon-relative">
                    <label class="label">Card Number</label>
                    <input type="text" class="input" name="card_number" placeholder="Card Number" data-mask="0000 0000 0000 0000">
                    <i class="far fa-credit-card"></i>
                </div>
                <div class="card-gap">
                    <div class="card-item icon-relative">
                        <label class="label">Expiry date:</label>
                        <input type="text" class="input" name="expiry_date" placeholder="00 / 00" data-mask="00 / 00">  
                        <i class="far fa-calendar-alt"></i>
                    </div>
                    <div class="card-item icon-relative ">
                        <label class="label">CVC:</label>
                        <input type="text" class="input" name="cvc" placeholder="000" data-mask="00000">  
                        <i class="fas fa-lock"></i>
                    </div>
                </div>
                <div class="btn">
                    pay
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>
</html>
<?php


?>