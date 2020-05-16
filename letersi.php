<?php
include("header.php");
require ("connection.php");

$query = "SELECT * FROM librat WHERE Kategoria = 'Letersi shqiptare'";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Biografi</title>
</head>
<body>
<table align="center" border="1px" style="width: 600px;line-height: 40px">
    <tr>
        <th><h2>Book record</h2></th>
    </tr>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Author</th>
        <th>Price</th>
    </tr>
    <?php
    while($rows = mysqli_fetch_assoc($result)) {
        ?>
        <tr>
            <td><?php echo $rows['bookID']; ?></td>
            <td><?php echo $rows['bookName']; ?></td>
            <td><?php echo $rows['author']; ?></td>
            <td><?php echo $rows['price']; ?></td>

        </tr>
        <?php
    }
    ?>

</table>
</body>
</html>
