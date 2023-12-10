<?php
// Enable error reporting
error_reporting(E_ALL);
ini_set('display_errors', 1);

include("connectionlogin.php");

if (isset($_POST['submit'])) {
    $Email = $_POST['user'];
    $Password = $_POST['pass'];

    // Use prepared statements to prevent SQL injection
    $sql = "SELECT * FROM login_table WHERE email = ? AND password = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $Email, $Password);
    $stmt->execute();
    $result = $stmt->get_result();
    $count = $result->num_rows;

    if ($count == 1) {
        header("Location: index1.php");
        exit();
    } else {
        echo '<script>
                alert("Login failed. Invalid username or password!!");
                window.location.href = "login.php";
              </script>';
        exit(); // Ensure no further code execution after redirection
    }
}

// Rest of your PHP code here...
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cool Login form | By Code Info</title>
  <link rel="stylesheet" href="./assets/css/login.css">
  <!-- Font Awesome Cdn Link -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
</head>
<body>
  <div class="wrapper">
    <h1>Hello Again!</h1>
    <p>Welcome back you've <br> been missed!</p>
    <form method="post" action="login.php">
    <input id="email" name="user" type="text" placeholder="Enter Email">
    <input id="password" name="pass" type="password" placeholder="Password">
    <button id="btn" type="submit" name="submit">Sign in</button>
</form>


    <p class="or">
      ----- or continue with -----
    </p>
    <div class="icons">
      <i class="fab fa-google"></i>
      <i class="fab fa-github"></i>
      <i class="fab fa-facebook"></i>
    </div>
    <div class="not-member">
      Not a member? <a href="signup.php">Register Now</a>
    </div>
  </div>
</body>
</html>

<?php
include("connectionlogin.php");
?>
