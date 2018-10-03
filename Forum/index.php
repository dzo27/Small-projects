<?php

require("core/init.php");

//Create Topic Object
$topic = new Topic;

//Get Templates and Assign Vars
$template = new Template("templates/frontpage.php");

//Assign Vars
$template->topics = $topic->getAllTopics();

//Display template
echo $template;
?>
