<?php
declare(strict_types=1);
session_start();
//обнуляем сессию
session_destroy();
//перенаправляем
header('Location: index.php');