<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin.css">
    <title>Fooddevs - Admin</title>
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

    <h1>Upload Restaurant</h1>

    <div class="container">
        <label for="resto-name">Restaurant Name:</label>
        <input id="resto-name" type="text">
        <br><br>
        <label for="category">Category:</label>
        <input id="category" type="text">
        <br><br>
        <label for="location">Location:</label>
        <input id="location" type="text">
        <br><br>
        <label for="average_cost">Average Cost:</label>
        <input id="average_cost" type="text">
    </div>

    <div class="container">
        <label for="logo">Restaurant Logo:</label>
        <input id="logo" type="file" accept="image/*">
        <br/>
        <label for="pictures">Restaurant Pictures:</label>
        <input id="pictures" type="file" accept="image/*">
        <br/><br>
        <label for="menu">Restaurant Menu:</label>
        <input id="menu" type="file" accept="image/*">
    </div>

    <button id="submit" type="submit">Submit</button>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="../js/admin_upload.js"></script>
</body>
</html>