<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";


// Create Connection

try {
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $firstname = $_REQUEST['firstname'];
    $lastname = $_REQUEST['lastname'];
    $name = $firstname . ' ' . $lastname;
    $email = $_REQUEST['email'];
    $phone = $_REQUEST['phone'];

    $address = $_REQUEST['address'];
    $city = $_REQUEST['city'];
    $state = $_REQUEST['state'];
    $zip = $_REQUEST['zip'];
    $address = $address . ', ' . $city . ', ' . $state . ', ' . $zip;
    $message = $_REQUEST['message'];


    //query for excuted 
    $sql = "INSERT INTO  contactform(name, email, phone, address, message ) VALUES ('$name', '$email', '$phone', '$address','$message')";

    // check if query is successful update contact database
    if (mysqli_query($conn, $sql)) {
        echo "<script>alert('Thank you! Your message has been sent.');</script>";
    } else {
        echo 'Error updating record';
    }
} catch (Exception $e) {
    print "Error : " . $e;
}

// close Connection
mysqli_close($conn);



?>