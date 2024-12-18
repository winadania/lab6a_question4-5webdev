<?php
require('db.php');
include("auth.php");
?>
<table border="1">
    <tr>
        <th>S.No</th>
        <th>Name</th>
        <th>Age</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
<?php
$count = 1;
$sel_query = "SELECT * FROM new_record ORDER BY id DESC;";
$result = mysqli_query($con, $sel_query);

while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
        <td><?php echo $count++; ?></td>
        <td><?php echo $row["name"]; ?></td>
        <td><?php echo $row["age"]; ?></td>
        <td><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td>
        <td><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
    </tr>
<?php } ?>
</table>
