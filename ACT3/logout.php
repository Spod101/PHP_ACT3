<?php
session_start();
session_destroy(); // Destroy all session data
header('Location: signup.php'); // Redirect to Signup page
exit;
?>