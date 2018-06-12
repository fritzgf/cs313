<?php
session_unset($_SESSION['userData']);
session_destroy();
header("Location: ../view/login.php");

?>