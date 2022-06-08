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
            <img id="logo" src="../assets/images/logo/fooddevs_white.png" alt="">
            <ul>
                <li><a href="../html/admin_upload.html">Upload Restaurant</a></li>
                <li><a href="../html/admin_reviews.html">Monitor Reviews</a></li>
                <li><a href="../html/admin_users.html">Display Users</a></li>
                <li><a href="#">Logout</a></li>
                <a href="../html/user_profile.html"><img id="profile-pic" src="../assets/images/profile_pictures/dummy.png" alt=""></a>
            </ul>
        </div>
    </div>
    <h1>Monitor Reviews</h1>
    <div id="review-container" class="review-container">
        <div id="username">Pablo Sreih</div>
        <div id="review">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit alias corrupti praesentium, vero quos illo labore aut veniam, hic, obcaecati ut iste laborum illum! Sed, adipisci! Illo consequuntur cum voluptatem?</div>
        <br>
        <div>
            <button id="accept">Accept</button>
            <button id="decline">Decline</button>
        </div>
    </div>

   


<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="../js/get_reviews.js" type="text/javascript"></script>
<script src="../js/monitor_review.js"></script>
</body>
</html> 