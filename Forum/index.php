<?php

require("core/init.php");

//Get Templates and Assign Vars
$template = new Template("templates/frontpage.php");

//Assign Vars
$template->heading = "This is a tempalte heading";

//Display template
echo $template;
?>
