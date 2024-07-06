<?php
declare(strict_types=1);
$username = $_POST['username'];
echo 'перешли и считали имя ' . $username;
session_start();
$_SESSION['userName'] = $username;
header('Location: index.php');

