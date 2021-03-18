<?php
// ik probeer hier een note te maken maar het werkt niet
require_once 'includes/dbh.inc.php';

$sql="SELECT COUNT(*) FROM kamer WHERE active = 0";
$result = mysqli_query($conn, $sql);
$count = mysqli_fetch_assoc($result)['COUNT(*)'];
if($count <= 2){
    echo "Warning only ".$count. " left";
}
