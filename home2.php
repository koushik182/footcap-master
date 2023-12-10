<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fashion Fab</title>
    <link rel="stylesheet" href="style.css">
    <script>
        function loginUser() {
            // Simulate user authentication
            var username = prompt("Enter your username:");
            var email = prompt("Enter your email:");

            // Display user information in the navbar
            document.getElementById("user-info").innerHTML = "Welcome, " + username + " (" + email + ")";
        }
    </script>
</head>
<body>

    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Fashion Fab</h2>
            </div>

            <div class="menu">
                <ul>
                    <li><a href="#">HOME</a></li>
                    <li><a href="#" onclick="loginUser()">Login/SignUp</a></li>
                    <li><a href="private-page.html">COLLECTION</a></li>
                    <li><a href="#">CONTACT</a></li>
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
</body>
</html>
