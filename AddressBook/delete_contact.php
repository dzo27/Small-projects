<?php 
include ('core/init.php');

//create DB Object
$db = new Database;

//Run Query
$db->query("DELETE FROM `contacts` WHERE id = :id");

//Bind Query
$db ->bind(':id', $_POST['id']);

if($db->execute()){
    echo "Contact was deleted";
} else{
    echo "Colud not delete contact";
}
?>