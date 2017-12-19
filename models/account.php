<?php

final class account extends \database\model
{
    public $id;
    public $email;
    public $fname;
    public $lname;
    public $phone;
    public $birthday;
    public $gender;
    public $password;
    protected static $modelName = 'account';

    public static function getTablename()// linking the user info with the phpmyadmin accounts table
    {

        $tableName = 'accounts';
        return $tableName;
    }

    public static function findTasks() // linking the users task with the todos table in phpmyadmin
    {

        $records = todos::findAll();
        print_r($records);
        return $records;
    }

    public function setPassword($password) {

        $password = password_hash($password, PASSWORD_DEFAULT);

        return $password;

    }

    public function checkPassword($LoginPassword) {  //verifying the password

        return password_verify($LoginPassword, $this->password);


    }

    public function validate()  // validating the email
    {
        $valid = TRUE;
        echo 'myemail: ' . $this->email;
        if($this->email == '') {
            $valid = FALSE;
            echo 'nothing in email';
        }
        return $valid;
    }
}

?>