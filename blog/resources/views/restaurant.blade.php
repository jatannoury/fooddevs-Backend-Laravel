<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/restaurant.css">
    <title>Roadster Diner</title>
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

    <div>
        <div  class="resto-name-pic">
            <div id="pp-container"><img id="resto-pp" src="../assets/images/restaurants_logos/roadster.png" alt=""></div>
            <h1 id="restaurant-title">Roadster Diner</h1>
        </div>

        <div id="photos-container">
            <div><img id="photo-1" src="../assets/images/restaurant_pictures/roadster_diner/1.avif" alt=""></div>
            <div><img id="photo-2" src="../assets/images/restaurant_pictures/roadster_diner/2.avif" alt=""></div>
            <div><img id="photo-3" src="../assets/images/restaurant_pictures/roadster_diner/3.avif" alt=""></div>
            <div><img id="photo-4" src="../assets/images/restaurant_pictures/roadster_diner/4.avif" alt=""></div>
        </div>
        
        <div><h3 id="categories">American, Fast Food</h3></div>

        <div><h3 id="location">Zaitunay Bay, Minet El Hosn, Beirut District</h3></div>

        <div class="rating-container"><label id="rating">4.2 &#9733;</label></div>

        <h2>Menu</h2>
        <div id="photos-container">
            <div id="menu"><img src="../assets/images/restaurant_pictures/roadster_diner/menu.avif" alt=""></div>
            <div id="menu"><img src="../assets/images/restaurant_pictures/roadster_diner/menu2.jpg" alt=""></div>
        </div>

        <div class="user-rating">Rate &#9733;&#9733;&#9733;&#9734;&#9734;</div>

        <div><textarea maxlength="150" name="review" id="text-review" cols="30" rows="5"></textarea></div>
        <button class="add-review-btn" type="submit">Add Review</button>

        <div><h2 id="reviews-title">Reviews</h2></div>
        <div id="reviews">
            <div>
                <div id="username">Joseph Tannoury &nbsp;&#9733;&#9733;&#9733;&#9733;&#9734;</div>
                <div id="review">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque eros eros, vel sagittis nisi dapibus a. Cras egestas iaculis consectetur.</div>
            </div>
            <div>
                <div id="username">Pablo Sreih &nbsp;&#9733;&#9733;&#9733;&#9733;&#9734;</div>
                <div id="review">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque eros eros, vel sagittis nisi dapibus a. Cras egestas iaculis consectetur.</div>
            </div>
            <div>
                <div id="username">Charbel Daoud &nbsp;&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                <div id="review">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pellentesque eros eros, vel sagittis nisi dapibus a. Cras egestas iaculis consectetur.</div>
            </div>
        </div>

        <br>
        
    </div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="../js/restaurant_reviews.js"></script>
</body>
</html>