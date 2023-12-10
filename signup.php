<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up | By Code Info</title>
    <link rel="stylesheet" href="./assets/css/signup.css" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet" />
</head>

<body>
    <div class="signup-box">
        <h1>Sign Up</h1>
        <h4>It's free and only takes a minute</h4>
        <form action="save.php" method="post" onsubmit="return validateForm()">
            <label for="fname">First Name</label>
            <input id="fname" name="fname" class="form-control" type="text" placeholder="Enter First Name" />

            <label for="lname">Last Name</label>
            <input id="lname" name="lname" class="form-control" type="text" placeholder="Enter Last Name" />

            <label for="email">Email</label>
            <input id="email" name="email" class="form-control" type="email" placeholder="Enter Your Email" />

            <label for="password">Password</label>
            <input id="password" name="password" class="form-control" type="password" placeholder="Enter Password" />

            <label for="cpassword">Confirm Password</label>
            <input id="cpassword" name="cpassword" class="form-control" type="password" placeholder="Confirm Password" />

            <input style="width: 320px;
    height: 35px;
    margin-top: 20px;
    border: none;
    background-color: #49c1a2;
    color: white;
    font-size: 18px;" class="form-control submit" type="submit" value="Submit" />
        </form>
        <p>
            By clicking the Sign Up button, you agree to our <br />
            <a href="#">Terms and Condition</a> and <a href="#">Policy Privacy</a>
        </p>
    </div>
    <p class="para-2">
        Already have an account? <a href="login.php">Login here</a>
    </p>

    <script>
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("cpassword").value;

            if (password !== confirmPassword) {
                alert("Passwords do not match");
                return false;
            }

            return true;
        }
    </script>
</body>

</html>
