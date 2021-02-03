<?php
include './dbh.php';


// For Corporate Registration
if (isset($_POST['userRegister'])) {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $country = mysqli_real_escape_string($conn, $_POST['country']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);
    $uid = mysqli_real_escape_string($conn, $_POST['uid']);

    $sql = "INSERT INTO `users`(`uid`, `full_name`, `email`, `phone`, `address`) VALUES ('$uid','$name','$email','NIL','$address');";
    mysqli_query($conn, $sql);
}


// Addding Phone Number Corporate
if (isset($_POST['phoneNumberVerifyStudent'])) {
    $phoneNumber = mysqli_real_escape_string($conn, $_POST['phoneNumber']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $sql = "UPDATE `users` SET `phone` = '$phoneNumber' WHERE `email` = '$email';";
    mysqli_query($conn, $sql);
}