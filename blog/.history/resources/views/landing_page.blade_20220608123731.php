<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/landing_page.css">
    <title>Welcome to Fooddevs</title>
</head>
<body>
    <div class="header-container">
        <div class="header">
            <img id="logo" src="../assets/images/logo/header_logo.png" alt="">
            <ul>
                <li><a href="/landing_page">Home</a></li>
                <li><a href="/discover">Discover</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/sign_in" id="logout">Logout</a></li>
                <a href="/user_profile"><img id="profile-pic" src="../assets/images/profile_pictures/dummy.png" alt=""></a>
            </ul>
        </div>
    </div>
    <div class="sub-header">
        <div><img src="../assets/images/logo/fooddevs new.png" alt=""></div>
        <div><input id="search-bar" type="text" placeholder="&#128269; Search for restaurants"></div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="../js/search_resto.js"></script>
</body>
</html>