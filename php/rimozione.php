<?php 
require_once 'bootstrap.php';
$dbh->deleteFromShoppingCart($_GET["id"], $_SESSION["UserID"]);
header("Refresh:0; url=carrello.php");
?>