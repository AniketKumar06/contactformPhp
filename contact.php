<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "signupform";



// Connecting database 

try {

    $conn = mysqli_connect("$servername,$username,$password,$dbname");
    if ($conn === false) {
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    //Taking data from user

    $name = $_REQUEST['firstname'] + " " + $_REQUEST['lastname'];
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];
    $address = $_REQUEST['address'];
    $message = $_REQUEST['message'];


    //query for excuted 
    $sql = "INSERT INTO  contactform(name, email, phone, address, message ) VALUES ('$name', '$email', '$phone', '$address','$message')";

    // check if query is successful update contact database
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Thank you! Your message has been sent.');</script>";
    } else {
        echo 'Error updating record';
    }

    // close Connection
    mysqli_close($conn);

} catch (\Throwable $th) {
    die("ERROR: $th ");
}

?>