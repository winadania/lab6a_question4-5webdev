<?php
require('db.php');
$id = $_REQUEST['id'];
$query = "DELETE FROM new_record WHERE id='$id'";
mysqli_query($con, $query);
header("Location: view.php");
?>
