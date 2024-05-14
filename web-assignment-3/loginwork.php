<?php
session_start();

function authenticateUser($username, $password) {

    if (file_exists('users.json')) {

        $usersData = file_get_contents('users.json');

        $users = json_decode($usersData, true);

        if ($users === null) {

            echo 'JSON parsing error: ' . json_last_error_msg();
            return false;
        }

        foreach ($users as $user) {

            if ($user['username'] === $username && password_verify($password, $user['password'])) {

                $_SESSION['username'] = $username;
                return true;
            }
        }
    }

    return false;
}



if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['userName']) && isset($_POST['password'])) {
        $username = $_POST['userName'];
        $password = $_POST['password'];


        if (authenticateUser($username, $password)) {
            header('Location: homePage.php');
            exit;
        } else {
            header('Location: login.php?error=1');
            exit;
        }
    } else {
        header('Location: login.php?error=2');
        exit;
    }
} else {
    header('Location: login.php');
    exit;
}
?>
