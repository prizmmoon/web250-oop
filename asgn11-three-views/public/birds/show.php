<?php require_once('../../private/initialize.php'); ?>

<?php

$id = $_GET['id'] ?? '1';

$bird = Bird::find_by_id($id);

?>

