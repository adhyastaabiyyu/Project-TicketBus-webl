<?php
    session_start();
    session_destroy();
    header("Location: /tiketbusmvc/index.php");
 ?>