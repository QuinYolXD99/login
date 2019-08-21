<?php
// ini_set("display_errors",1);
session_start();
require_once "config.php";

$resp =null;
$email = $_POST["email"];
$sql = "SELECT * from accounts where email = '$email'";
$result = $link->query($sql);
if ($result->num_rows > 0) {
    $resp = 1;
} else {
   $resp = 0;
}
echo $resp;
// exit;
$link->close(); //disconnect from db
?>