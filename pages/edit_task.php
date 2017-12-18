<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>Edit Task</title>
    <meta name="description" content="Todo Task Management">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

</head>

<body>


<h2>Edit Task</h2>

<form action="index.php?page=tasks&action=store&id=<?php echo $data->id; ?>" method="post">
    Title: <input type="text" name="title" id="title" value="<?php echo $data->title; ?>" required><br>
    Body: <textarea name="body" id="body" required><?php echo $data->body; ?></textarea><br>
    Is Done: <input type="checkbox" name="isdone" id="isdone" value="1" <?php if($data->isdone == '1'){echo 'checked="checked"';}?>><br>
    <input type="hidden" name="id" id="id" value="<?php echo $data->id; ?>">
    <input type="submit" value="Submit form">
</form>
								
<ul>
<li><a href="index.php?page=accounts&action=all">My Account</a>
</li>
<li><a href="index.php?page=tasks&action=all">All Todos</a>
</li>
<li>
<a href="index.php?page=accounts&action=logout">Logout</a>
</li>
</ul>

<!--<form action="index.php?page=tasks&action=store&id=<?php echo $data->id; ?>" method="post">
	Title: <input type="text" name="title" id="title" value="<?php echo $data->title; ?>" required><br>
	Body: <textarea name="body" id="body" required><?php echo $data->body; ?></textarea><br>
	Is Done: <input type="checkbox" name="isdone" id="isdone" value="1" <?php if($data->isdone == '1'){echo 'checked="checked"';}?>><br>
	<input type="hidden" name="id" id="id" value="<?php echo $data->id; ?>">
    <input type="submit" value="Submit form">-->
</form>
<a href="index.php?page=tasks&action=all">Back</a>
<script src="js/scripts.js"></script>
</body>
</html>