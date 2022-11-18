<?php
$conn = mysqli_connect("localhost", "root", "", "alips");
$rows = mysqli_query($conn, "SELECT * FROM game_talk_ships");
?>
<table border = 1 cellpadding = 10>
  <tr>
    <td>#</td>
    <td>idHost</td>
    <td>hostDashboard</td>
    <td>idGuest</td>
    <td>guestDashboard</td>
  </tr>
  <?php $i = 1; ?>
  <?php foreach($rows as $row) : ?>
    <tr>
      <td><?php echo $i++; ?></td>
      <td><?php echo $row["idHost"]; ?></td>
      <td><?php echo $row["hostDashboard"]; ?></td>
      <td><?php echo $row["idGuest"]; ?></td>
      <td><?php echo $row["guestDashboard"]; ?></td>
    </tr>
  <?php endforeach; ?>
</table>
