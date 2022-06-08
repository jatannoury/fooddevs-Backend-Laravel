<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sign_in_up.css">
    <title>Login to Fooddevs</title>
</head>
<body>
    <div  class="main-container">
        <div class="child-container">
            <img src="assets/images/logo/fooddevs new.png" alt="">
            <div id="box">
                <input class="textbox" id="email" placeholder="E-mail" type="text">
                <input class="textbox" id="password" placeholder="Password" type="password">
                <a href="#">Forgot Password?</a>
                <button id="btn">Sign in</button>
                <a href="html/sign_up.html"><strong>Create Account</strong></a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./js/sign_in.js"></script>
</body>
</html>