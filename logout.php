<?php
session_start();
session_destroy();
echo "<div class=\"container-fluid text-right\"><strong>You've logged out ! If you want to sign in again click : <a href='login.php'>here</a></strong></div>";
require 'inc/head.php';
?>