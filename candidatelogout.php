<?php
session_start();

$_SESSION["candidateusername"]=NULL;
header("location:index.php");
echo $_SESSION["candidateusename"];
?>