<?php
session_start();
echo session_id(); //確認用表示

$_SESSION["name"]="YAMAZAKI";
$_SESSION["tel"] ="090-0000-0000";
$_SESSION["pref"]="東京";

echo $_SESSION["name"];
echo $_SESSION["tel"];




?>
