<?php
 session_start();

   function addTodoItems($user_id,$description,$task,$date,$time,$status){
        global $db;
	$query = 'insert into todo_list(todo, user_id, status, description, date, time) values (:task, :userid, :status, :todo_text, :date, :time)';
	$statement = $db->prepare($query);
	$statement->bindValue(':userid',$user_id);
	$statement->bindValue(':todo_text',$description);
	$statement->bindValue(':task',$task);
	$statement->bindValue(':date',$date);
	$statement->bindValue(':time',$time);
	$statement->bindValue(':status',$status);
	$statement->execute();
	$statement->closeCursor();
	return true;
   }