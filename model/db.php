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

   function updateStatus($status,$id){
        global $db;
	$query = 'update todo_list set status = :status where id = :id';
	$statement = $db->prepare($query);
	$statement->bindValue(':status',$status);
	$statement->bindValue(':id',$id);
	$statement->execute();
	$statement->closeCursor();
	return true;

	}

   function deleteTask($taskid){
     global $db;
     $query = 'delete from todo_list where id = :task';
     $statement = $db->prepare($query);
     $statement->bindValue(':task',$taskid);
     $statement->execute();
     $statement->closeCursor();
     return true;

     }
   function getTodoItems($id){
     global $db;
     $query = 'select * from todo_list where user_id= :userid and status = :status';
     $statement = $db->prepare($query);
     $statement->bindValue(':userid',$id);
     $statement->bindValue(':status','incomplete');
     $statement->execute();
     $result= $statement->fetchAll();
     $statement->closeCursor();
     return $result;

     }
   function completedItems($user_id){
        global $db;
	$query = 'select * from todo_list where user_id= :userid and status = :status';
	$statement = $db->prepare($query);
	$statement->bindValue(':userid',$user_id);
	$statement->bindValue(':status','complete');
	$statement->execute();
	$result= $statement->fetchAll();
	$statement->closeCursor();
	return $result;
  }