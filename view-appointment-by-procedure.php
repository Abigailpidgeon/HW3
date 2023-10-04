<h1>Appointments by Procedure</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
        <tr>
      <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    <th>Room</th>
    <th>Day/Time</th>
    </tr>
    </thead>
  <tbody>
  <?php 
while ($appointment = $appointments->fetch_assoc())
{
  ?>
  <tr>
    <td><?php echo $appointment['procedure_id']; ?></td>
    <td><?php echo $appointment['procedure_name']; ?></td>
    <td><?php echo $appointment['procedure_desc']; ?></td>
    <td><?php echo $appointment['room']; ?></td>
    <td><?php echo $appointment['day_time']; ?></td>
  </tr>
  <?php
}
?>
</tbody>
</table>
</div>
