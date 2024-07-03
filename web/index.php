<?php
declare(strict_types=1);

//include 'index.html'; 
session_start();

//если есть имя пользователя и имя пользователя заполнено, тогда 
if (isset($_SESSION['userName']) && (!empty($_SESSION['userName']))) {
    echo 'привет ' . $_SESSION['userName'] . PHP_EOL;
    echo '<a href="exit.php"> выход </a>';
    
} else {
   //нет значений;
   include 'index.html'; 
} 
