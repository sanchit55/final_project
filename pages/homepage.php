<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title> My project</title>
    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="style.css">

</head>

<body>


<h1><center> Final Project
</center></h1>
<br><br>
<h3><center><u>Login</u></center></h3>

<form action="index.php?page=accounts&action=login" method="POST">
    <div class="container">
        <label><b>Email</b></label>
        <input type="text" placeholder="Enter Username" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
    </div>
</form>
<br><br>
<h3><center><a href="index.php?page=accounts&action=register">or Register</a></center></h3>

<script src="js/scripts.js"></script>
</body>
</html>