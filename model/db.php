<?php
 session_start();

   function addTodoItems($user_id,$description,$task,$date,$time,$status){
        global $db;
	$query = 'insert into todo_list(todo_title, user_id, status, description, date_created, date) values (:task, :userid, :status, :todo_text, :date, :time)';
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
	$statement->bindValue(':status','1');
	$statement->execute();
	$result= $statement->fetchAll();
	$statement->closeCursor();
	return $result;
  }

  function editValue($etask,$edescription,$edate,$etime,$eid){
        global $db;
	$query = 'update todo_list set todo = :etask, description = :edescription, date = :etime, time = :edate where id = :eid';
        $statement = $db->prepare($query);
        $statement->bindValue(':etask',$etask);
        $statement->bindValue(':eid',$eid);
	$statement->bindValue(':edescription',$edescription);
	$statement->bindValue(':edate',$edate);
	$statement->bindValue(':etime',$etime);
        $statement->execute();
        $statement->closeCursor();
        return true;

}
  function getTask($editid){
        global $db;
	$query = 'select * from todo_list where id = :eid';
	$statement = $db->prepare($query);
	$statement->bindValue(':eid',$editid);
	$statement->execute();
	$result= $statement->fetchAll();
	$statement->closeCursor();
	return $result;
  }

  function registerUser($fname,$lname,$contact,$email,$username,$password,$birth,$gender){
   global $db;
   $query = 'select * from user_info where username = :uname';
   $statement = $db->prepare($query);
//   $statement->bindValue(':fname',$fname);
 //  $statement->bindValue(':lname',$lname);
  // $statement->bindValue(':cont',$contact);
 //  $statement->bindValue(':emailid',$email);
   $statement->bindValue(':uname',$username);
 //  $statement->bindValue(':pass',$password);
   $statement->execute();
   $result = $statement->fetchAll();
   $statement->closeCursor();
   $count= $statement->rowCount();
   if($count > 0){
   return true;
   }
   else{
   $query = 'insert into user_info (first_name,last_name,contact_no,email,username,password,birth,gender)
             values	(:fname,:lname,:cont,:emailid,:uname,:pass,:birth,:gender)';
   $statement = $db->prepare($query);
   $statement->bindValue(':fname',$fname);
   $statement->bindValue(':lname',$lname);
   $statement->bindValue(':cont',$contact);
   $statement->bindValue(':emailid',$email);
   $statement->bindValue(':uname',$username);
   $statement->bindValue(':pass',$password);
   $statement->bindValue(':birth',$birth);
   $statement->bindValue(':gender',$gender);
   $statement->execute();
   $statement->closeCursor();
   return false;
   }
   
   }

   function isUserValid($username,$password){
     global $db;
     $query = 'select * from user_info where email = :name and 
     password = :pass';
     $statement = $db->prepare($query);
     $statement->bindValue(':name',$username);
     $statement->bindValue(':pass',$password);
     $statement->execute();
     $result= $statement->fetchAll();
     $statement->closeCursor();

     
     $count = $statement->rowCount();
     if($count == 1){
       $id = $result[0]['id'];
       $_SESSION['id'] = $id;
       $fname = $result[0]['first_name'];
       $_SESSION['first_name'] = $fname;
       $lname = $result[0]['last_name'];
       $_SESSION['last_name'] = $lname;
       setcookie('login',$username);
       setcookie('my_id',$result[0]['id']);
       //setcookie('my_name',$result[0]['first_name']);
       //setcookie('my_lname',$result[0]['last_name']);
       setcookie('islogged',true);
       return true;
     }else{
       unset($_COOKIE['login']);
       setcookie('login',false);
       setcookie('islogged',false);
       setcookie('id',false);
       return false;
     }

   }

   

?>