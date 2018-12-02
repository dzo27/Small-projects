<?php

require("core/init.php");

//Create Topic Object
$topic = new Topic();

if (isset($_POST['do_create'])) {
    //Create Validator Object
    $validate = new Validator();

    //create data array
    $data = array();
    $data['title'] = $_POST['title'];
    $data['body'] = $_POST['body'];
    $data['category_id'] = $_POST['category'];
    $data['user_id'] = getUser()["user_id"];
    $data['last_activity'] = date("Y-m-d H:i:s");

    //required fields
    $field_array = array("title", "body", "category");

    if ($validate->isRequired($field_array)) {
        //register user
        if ($topic->create($data)) {
            redirect("index.php", "Your topic has been posted", "success");
        }else {
            redirect("index.php", "Your topic has NOT been posted", "error");
        }
    }else {
        redirect("index.php", "Please fill in all required fields", "error");
    }
}

//Get Templates and Assign Vars
$template = new Template("templates/create.php");

//Assign Vars


//Display template
echo $template;
?>
