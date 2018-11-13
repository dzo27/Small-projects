<?php

require("core/init.php");

//Create Topic Object
$topic = new Topic;

//Create User Object
$user = new User;

if (isset($_POST['register'])) {
    //create data array
    $data = array();
    $data['name'] = $_POST['name'];
    $data['email'] = $_POST['email'];
    $data['username'] = $_POST['username'];
    $data['password'] = md5($_POST['password']);
    $data['password2'] = md5($_POST['password2']);
    $data['about'] = $_POST['about'];
    $data['last_activity'] = date("Y-m-d H:i:s");

    //upload avatar images
    if ($user->uploadAvatar()) {
        $data['avatar'] = $_FILES["avatar"]["name"];
    } else {
        $data['avatar'] = 'noimage.png';
    }

    //register user
    if($user->register($data)){
		redirect('index.php', 'You are registered and can now log in', 'success');
	} else {
		redirect('index.php', 'Something went wrong with registration', 'error');
	}
}

//Get Templates and Assign Vars
$template = new Template("templates/register.php");

//Assign Vars


//Display template
echo $template;
?>
