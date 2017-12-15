<?php
session_start();
session_unset();
session_destroy();

header( 'Location: https://web.njit.edu/~sg948/finalProject/index.php' );
exit();
?>