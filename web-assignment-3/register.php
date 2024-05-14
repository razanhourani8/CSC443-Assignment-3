<?php
session_start();

// Function to save user data to JSON file
function saveUserData($userData) {
    $users = [];
    if (file_exists('users.json')) {
        $users = json_decode(file_get_contents('users.json'), true);
    }
    $users[] = $userData;
    file_put_contents('users.json', json_encode($users));
}

// User registration
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate input data (you may add more validation)
    if (isset($_POST['userName']) && isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['password']) && isset($_POST['sex']) && isset($_POST['dob'])) {
        $userData = [
            'username' => $_POST['userName'],
            'fullname' => $_POST['firstName'] . ' ' . $_POST['lastName'],
            'password' => password_hash($_POST['password'], PASSWORD_DEFAULT),
            'sex' => $_POST['sex'],
            'dob' => $_POST['dob']
        ];
        saveUserData($userData);
        // Redirect to login page with a message
        header('Location: login.php?registered=1');
        exit;
    } else {
        echo "Invalid data";
    }
}
?>
