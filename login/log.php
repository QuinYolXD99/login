<?php
// ini_set("display_errors",1);
session_start();
require_once "config.php";

$resp =null;
$email = $_POST["email"];
$pw = md5($_POST["password"]);
$sql = "SELECT * from accounts where password = '$pw' and email = '$email'";
$result = $link->query($sql);
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $_SESSION["fullname"] = $row["firstname"]." ".$row["lastname"];
        $_SESSION["login"] = true;
    }
    $resp = 1;
} else {
   $resp = 0;
}
echo $resp;
// exit;
$link->close(); //disconnect from db