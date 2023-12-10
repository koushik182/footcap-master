<?php

$firstname = $_POST["fname"];
$lastname = $_POST["lname"];
$email = $_POST["email"];
$password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash the password
$cpassword = $_POST["cpassword"];

$conn = mysqli_connect("localhost", "root", "", "ecommerce_database") or die("connection failed");


// Use the correct column names based on your table structure
$sql = "INSERT INTO database_table (Frist_name, Last_name, Email, New_Password, `Confirm_Password`) VALUES ('$firstname', '$lastname', '$email', '$password', '$cpassword')";
$result = mysqli_query($conn, $sql);

mysqli_close($conn);

if ($result) {
    // Successful form submission
    echo '<script>alert("Form submitted successfully!");</script>';
    header("Location: http://localhost/footcap-master/index1.php");
    exit();
} else {
    // Error in form submission
    echo '<script>alert("Error submitting the form. Please try again.");</script>';
    header("Location: http://localhost/footcap-master/signup.php");
    exit();
}
?>
