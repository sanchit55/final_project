<?php


class homepageController extends http\controller // extending the http folder file in core
{

    public static function show()
    {
    
        $templateData['site_name'] = 'Todo Task Management';

    session_start();
    $templateData['userID'] = @$_SESSION["userID"];
    if($templateData['userID']) {
      header("Location: index.php?page=accounts&action=all");
    }

        self::getTemplate('homepage', $templateData);// input of the table of the user
    }

    public static function create()
    {
        print_r($_POST);
    }

}
