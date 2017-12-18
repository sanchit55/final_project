<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Your Profile</title>
    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">


</head>

<body>


<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID);
?>

<h3>Welcome <?=$user_data->fname?>,</h3>
								

<?php
print utility\htmlTable::genarateTableFromMultiArray($data);
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