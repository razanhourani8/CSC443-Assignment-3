<!DOCTYPE html>
<script src="https://kit.fontawesome.com/90ccdd32d7.js" crossorigin="anonymous"></script>
<html lang="en">
<head>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="SignUPstyle.css">
    <title>User Registration</title>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <h1>Welcome to My Portfolio!</h1>
            <p>We're excited to have you join our community. Let's get started on this journey together!</p>

            <h2>Create Your Account</h2>
            <p>To begin, please fill out the form below to create your account:</p>
            <form action="register.php" method="post">
                <label for="userName">Username:</label>
                <input type="text" id="userName" name="userName" required>
                <label for="firstName">First Name:</label>
                <input type="text" id="firstName" name="firstName" required>
                <label for="lastName">Last Name:</label>
                <input type="text" id="lastName" name="lastName" required>
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required>
                <label for="sex">Sex:</label>
                <select id="sex" name="sex" required>
                    <option value="blank">--</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
                <label for="dob">Date of Birth:</label>
                <input type="date" id="dob" name="dob" required>
                <input type="submit" value="Sign Up">
            </form>
            
            <p>Already have an account? <a href="login.php">Login here</a>.</p>



        </div>
    </div>
</body>
</html>
