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
                <li><a href="../html/admin_upload.html">Upload Restaurant</a></li>
                <li><a href="../html/admin_reviews.html">Monitor Reviews</a></li>
                <li><a href="../html/admin_users.html">Display Users</a></li>
                <li><a href="#">Logout</a></li>
                <a href="../html/user_profile.html"><img id="profile-pic" src="../assets/images/profile_pictures/dummy.png" alt=""></a>
            </ul>
        </div>
    </div>

    <h1>Registered Users</h1>
    <div id="users">
        
    </div>
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script src="../js/get_users.js"></script>
</body>
</html>