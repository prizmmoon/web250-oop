<?php
require_once('../private/initialize.php');

$session = new Session;

// Log out the admin
$session->logout();

redirect_to(url_for('/users/login.php'));
