<?php

session_start();

function view(){
     global $db;
     $query = 'select * from user_info';
     $statement = $db->prepare($query);
     $statement->execute();
     $result= $statement->fetchAll();
     $statement->closeCursor();

   }

  ?>

  <html>
  <head>
  </head>
  <body>
  	 <?php foreach($result as $res):?>
      <tr>
        <td style="text-align: center;"> <?php echo $res['todo_title']; ?> </td>
	<td style="text-align: center;"> <?php echo $res['description']; ?> </td>
        <td style="text-align: center;"> <?php echo $res['date']; ?>  </td>
	<td style="text-align: center;"> <?php echo $res['date']; ?> </td>

  </body>
