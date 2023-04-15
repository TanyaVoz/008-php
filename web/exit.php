<?php
declare(strict_types=1);

session_start();
$_SESSION['login'] = null;
header('Location: /');