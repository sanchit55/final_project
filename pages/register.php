<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Register Page</title>
    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>

<h2>Please Register</h2>

<form action="index.php?page=accounts&action=register" method="post">
    <div class="register-input">
    First name: <input type="text" name="fname" placeholder="first name" required><br><br>
    Last name: <input type="text" name="lname" placeholder="lastname" required><br><br>
    Email: <input type="email" name="email" placeholder="email" required><br><br>
    Phone: <input type="tel" name="phone" placeholder="phone no" required><br><br>
    Birthday: <input type="text" name="birthday" placeholder="yyyy-mm-dd" required><br><br>
    Gender: <input type="radio" name="gender" value="male" checked="checked">Male <input type="radio" name="gender" value="female"> Female<br><br>
    Password: <input type="password" name="password" required><br><br>
    <input type="submit" value="Submit form">
    </div>
</form>

<script src="js/scripts.js"></script>
</body>
</html>




