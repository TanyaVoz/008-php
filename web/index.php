<?php
declare(strict_types=1);

session_start();

if(!empty($_SESSION['login'])) {
    echo <<<END
        <p>Привет, {$_SESSION['login']} !</p>
        <button onclick="window.location.href = 'exit.php';">Выход</button>
        END;
}

if(empty($_SESSION['login'])) {
    include 'form.html';
}
