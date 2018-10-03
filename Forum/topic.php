<?php

require("core/init.php");

//Create topic object
$topic = new Topic;

//Get ID from URL
$topic_id = $_GET["id"];

//Get Templates and Assign Vars
$template = new Template("templates/topic.php");

//Assign Vars
$template->topic = $topic->getTopic($topic_id);
$template->replies = $topic->getReplies($topic_id);
$template->title = $topic->getTopic($topic_id);

//Display template
echo $template;
?>
