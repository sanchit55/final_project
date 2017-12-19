<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Tasking</title>
    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css">

</head>

<body>


<h2><u>Tasks Details</u></h2>

<?php
$userID = $_SESSION["userID"];
$user_data = accounts::findUserbyId($userID);
?>

<h4>Task: <?php echo $data->title; ?></h4>
<h4>Body: <?php echo $data->body; ?></h4>
<h4>Is Done: <?php echo ($data->isdone == '1'?'Yes':'No'); ?></h4>
<h4>Create Date: <?php echo $data->createddate; ?></h4>
<h4>Update Date: <?php echo ($data->updateddate!='0000-00-00'?$data->updateddate:''); ?></h4>

<form action="index.php?page=tasks&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" form="form1" value="delete">Delete</button>
</form><br>

<ul>
<li><a href="index.php?page=accounts&action=all">My Account</a>
</li>
<li><a href="index.php?page=tasks&action=all">All Todos</a>
</li>
<li>
<a href="index.php?page=accounts&action=logout">Logout</a>
</li>
</ul>
<a href="index.php?page=tasks&action=all">Back</a>
<script src="js/scripts.js"></script>
</body>
</html>