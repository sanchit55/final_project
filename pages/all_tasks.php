<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Task</title>  <!--page where all the task will be displayed-->
    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css">

</head>

<body>
<h2><center><u>Task List</u></center></h2>



<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID); ?>


<?php
if(!empty($data)) {
	print utility\htmlTable::genarateTableFromMultiArray($data); // table of all the tasks
} else {
	echo 'Data not found';
}
?>

<ul>
<li><a href="index.php?page=accounts&action=all">Back To My Account</a>
</li>
<li><a href="index.php?page=tasks&action=create">Add Task</a>
</li>
<li>
<a href="index.php?page=accounts&action=logout">Logout</a>
</li>
</ul>


<script src="js/scripts.js"></script>
</body>
</html>