<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Footcap</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Footcap</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="index1.php">HOME</a></li>
            
                    <li><a href="private-page.php">COLLECTION</a></li>
                    <li><a href="contact_us.php">CONTACT</a></li>
                </ul>
            </div>

            <div class="search">
                <input class="srch" type="search" name="" placeholder="Type To text">
                <a href="#"> <button class="btn">Search</button></a>
            </div>

            <div id="user-info" class="user-info"></div>

        </div> 
        <div class="content">
            <h1>Welcome to our Shop</h1>
            <p class="par">We are here to make your shopping easy and affordable.</p>
            <a href="private-page.html" class="private">See Detail</a>
            <img src="shop.jpg" alt="Description of the image">
        </div>
    </div>

    <script>
        // Check if user information is available in localStorage
        var userInfo = localStorage.getItem("userInfo");
        if (userInfo) {
            document.getElementById("user-info").innerHTML = userInfo;
        }
    </script>
</body>
</html>
