<?php
include "config.php";

$value = filter_var($_POST['dor'], FILTER_VALIDATE_INT);

$sql = mysqli_query($conn, "SELECT 'scriptId' from pkginet where value=$value ");


?>