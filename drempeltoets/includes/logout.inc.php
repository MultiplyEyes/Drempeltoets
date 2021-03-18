<?php
//het session sluiten om uitloggen
session_start();
session_unset();
session_destroy();

header("location: ../index.php");
exit();
?>