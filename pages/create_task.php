<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Task creation</title>   <!-- html page creation where all the task will be created-->
    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css">

</head>

<body>

<h2><center><u>Create new task</u></center></h2>

<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID);
?>

<form action="index.php?page=tasks&action=save" method="post">
    Task: <input type="text" name="title" id="title" required><br><br>
    Body: <textarea name="body" id="body" required></textarea><br> 
    Is Done: <input type="checkbox" name="isdone" id="isdone" value="1"><br><br>
    <input type="submit" value="Submit form">
</form><br>
								
<ul>
<li><a href="index.php?page=accounts&action=all"> Go back to My Account</a>
</li>
<li><a href="index.php?page=tasks&action=all">All Tasks</a>
</li>
<li>
<a href="index.php?page=accounts&action=logout">Logout</a>
</li>
</ul><br>


<a href="index.php?page=tasks&action=all">Back</a>
<script src="js/scripts.js"></script>
</body>
</html>