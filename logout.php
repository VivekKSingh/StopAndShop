<?php
ob_start();
session_start();
session_destroy();
unset($_SESSION);
echo '<SCRIPT language=javascript> alert("You have succesully logged out!");</SCRIPT>';
Header('Refresh: 0;url=index.php');

?>