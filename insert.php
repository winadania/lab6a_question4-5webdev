<?php
require('db.php');
include("auth.php");

$status = "";
if (isset($_POST['new']) && $_POST['new'] == 1) {
    $name = $_REQUEST['name'];
    $age = $_REQUEST['age'];
    $submittedby = $_SESSION["username"];

    $ins_query = "INSERT INTO new_record (name, age, submittedby) 
                  VALUES ('$name', '$age', '$submittedby')";
    mysqli_query($con, $ins_query) or die(mysqli_error($con));
    $status = "New Record Inserted Successfully.";
}
?>
<div class="form">
    <h1>Insert New Record</h1>
    <form name="form" method="post" action="">
        <input type="hidden" name="new" value="1" />
        <p>Name: <input type="text" name="name" required /></p>
        <p>Age: <input type="text" name="age" required /></p>
        <p><input name="submit" type="submit" value="Submit" /></p>
    </form>
    <p><?php echo $status; ?></p>
</div>
