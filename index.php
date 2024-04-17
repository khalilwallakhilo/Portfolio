<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $username = $_POST['username'];
    $password = $_POST['password']; 
    $gender = $_POST['gender'];
    $data = "Full Name: $fullname, Email: $email, Date of Birth: $dob, Username: $username, Password: $password, Gender: $gender\n";
    $file = "userdata.txt";
    if (file_put_contents($file, $data, FILE_APPEND)) {
        echo "Signup information saved successfully!";
    } else {
        echo "Error saving signup information.";
    }
}
?>
