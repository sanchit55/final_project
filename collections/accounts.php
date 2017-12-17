<?php

class accounts extends \database\collection
{
    protected static $modelName = 'account'; // linking of the file  with the database


    public static function findUserbyEmail($email)
    {

            $tableName = get_called_class();
            $sql = 'SELECT * FROM ' . $tableName . ' WHERE email = ?';// providing SQL statment in order to call from the id

            $recordsSet = self::getResults($sql, $email);

            if (is_null($recordsSet)) {
                return FALSE;
            } else {
                return $recordsSet[0];
            }
    }
	
	public static function findUserbyId($id)
    {

            $tableName = get_called_class();
            $sql = 'SELECT * FROM ' . $tableName . ' WHERE id = ?';// returning result on the basis of the id

            $recordsSet = self::getResults($sql, $id);

            if (is_null($recordsSet)) {
                return FALSE;
            } else {
                return $recordsSet[0];
            }
    }
}

