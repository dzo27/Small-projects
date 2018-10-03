<?php

require("core/init.php");

//Create Topic Object
$topic = new Topic;

//Get Templates and Assign Vars
$template = new Template("templates/frontpage.php");

//Assign Vars
$template->topics = $topic->getAllTopics();
$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();

//Display template
echo $template;
?>
