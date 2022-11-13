<?php
$conn = mysqli_connect("localhost", "root", "", "data");
$rows = mysqli_query($conn, "SELECT * FROM tb_data");
?>
<table border = 1 cellpadding = 10>
  <tr>
    <td>#</td>
    <td>Name</td>
    <td>Email</td>
    <td>Age</td>
    <td>Country</td>
  </tr>
  <?php $i = 1; ?>
  <?php foreach($rows as $row) : ?>
    <tr>
      <td><?php echo $i++; ?></td>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["email"]; ?></td>
      <td><?php echo $row["age"]; ?></td>
      <td><?php echo $row["country"]; ?></td>
    </tr>
  <?php endforeach; ?>
</table>
