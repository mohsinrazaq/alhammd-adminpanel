<?php
include("db.php");
session_destroy();
header("location:loginForm-Page.php");
?>