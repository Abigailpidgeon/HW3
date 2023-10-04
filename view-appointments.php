<h1>Appointments</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
       <tr>
      <th>ID</th>
    <th>Room</th>
    <th>Day/Time</th>
         <th></th>
    </tr>
    </thead>
  </tbody>
  <?php 
while ($appointment = $appointments->fetch_assoc())
{
  ?>
  <tr>
    <td><?php echo $appointment['appointment_id']; ?></td>
    <td><?php echo $appointment['room']; ?></td>
    <td><?php echo $appointment['day_time']; ?></td>
  </tr>
  <?php
}
?>
</tbody>
</table>
</div>
