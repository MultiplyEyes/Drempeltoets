<?php
require_once "../includes/dbh.inc.pdo.php";
if(isset($_GET["id"])){
$db = new database();
$db->update_delete("DELETE from reserveren WHERE id=:id;",['id'=>$_GET["id"]] );
}

?>