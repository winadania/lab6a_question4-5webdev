<?php
require('db.php');
include("auth.php");

$id = $_REQUEST['id'];
if (isset($_POST['new'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $update = "UPDATE new_record SET name='$name', age='$age' WHERE id='$id'";
    mysqli_query($con, $update);
    header("Location: view.php");
}
$query = "SELECT * FROM new_record WHERE id='$id'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);
?>
<form method="post" action="">
    Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" /><br>
    Age: <input type="text" name="age" value="<?php echo $row['age']; ?>" /><br>
    <input type="submit" name="new" value="Update" />
</form>
