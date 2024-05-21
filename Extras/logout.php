<?php
session_start();
session_destroy();
header('Location: /php-dilligent-practice/sessions.php')
?>