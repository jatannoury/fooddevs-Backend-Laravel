<!DOCTYPE html>
<html>

    <head>
        <title>Fooddevs - User Profile</title>
        <link href="../css/user_profile.css" type="text/css" rel="stylesheet" />
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
            <div class="profile-section">
                <img id="profile_pic" src="../assets/images/profile_pictures/dummy.png" alt="">
                <div class="profile-info">
                    <h1 id="profile_name">Joseph Tannoury</h1>
                    <h2>Beirut, Lebanon</h2>
                    <br><br>
                    <h2 id="bio">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit omnis incidunt magni mollitia repellat accusantium enim dolorum illum accusamus nam itaque dolor dolorem, sequi sapiente aperiam, minus expedita, dolore unde.</h2>
                </div>
            </div>
            <div class="stats">
                <div>124 Followers, 98 Following</div>
                <div>142 Photos</div>
                <div>23 Places Visited</div>
            </div>

            <div>
                <div class="photos-added">
                    Photos Added
                </div>
                <div id="photos-container">
                    <div><img src="../assets/images/user_photos/1.jpg" alt="">
                    <label><strong>Oasis</strong><br>Beirut, Lebanon</label></div>

                    <div><img src="../assets/images/user_photos/2.jpg" alt="">
                    <label><strong>Roadster</strong><br>Beirut, Lebanon</label></div>

                    <div><img src="../assets/images/user_photos/3.jpg" alt="">
                    <label><strong>Beit Nazha</strong><br>Beirut, Lebanon</label></div>

                    <div><img src="../assets/images/user_photos/4.jpg" alt="">
                    <label><strong>Provencial</strong><br>Beirut, Lebanon</label></div>

                    <div><img src="../assets/images/user_photos/5.jpg" alt="">
                    <label><strong>Keif</strong><br>Beirut, Lebanon</label></div>
                </div>
                <div class="recently-visited">
                    Recently Visited Places
                </div>
                <div id="photos-container">
                    <div><img src="../assets/images/restaurant_pictures/miscellaneous/cinco beirut.avif" alt="">
                    <label><strong>Cinco Beirut</strong><br>Beirut, Lebanon</label></div>

                    <div><img src="../assets/images/restaurant_pictures/miscellaneous/hemingways.avif" alt="">
                    <label><strong>Hemingway's</strong><br>Beirut, Lebanon</label></div>

                    <div><img src="../assets/images/restaurant_pictures/miscellaneous/pieds dans leau.avif" alt="">
                    <label><strong>Pieds Dans L'Eau</strong><br>Beirut, Lebanon</label></div>

                    <div><img src="../assets/images/restaurants_logos/crepaway.png" alt="">
                    <label><strong>Crepaway</strong><br>Beirut, Lebanon</label></div>

                    <div><img src="../assets/images/restaurant_pictures/miscellaneous/frozen cherry.avif" alt="">
                    <label><strong>Frozen Cherry</strong><br>Beirut, Lebanon</label></div>
                </div>
            </div>
        </div>

    </body>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="../js/user_profile.JS"></script>
</html>
