<!doctype html>

<html lang="en">   <!--filling the information for the buttons and creating html of the same-->
<head>
    <meta charset="utf-8">

    <title>Your Profile</title>
    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css">


</head>

<body>


<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID);
?>

<h3>Welcome <?=$user_data->fname?>,</h3>
								

<?php
print utility\htmlTable::genarateTableFromMultiArray($data); // calling the table of users details
?>

<br><br>
<ul>
<li><a href="index.php?page=tasks&action=all">Your Tasks</a>
</li>
<li>
<a href="index.php?page=accounts&action=logout">Logout</a>
</li>
</ul>


<script src="js/scripts.js"></script>
</body>
</html>