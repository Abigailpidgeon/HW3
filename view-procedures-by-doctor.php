<h1>Procedures by Doctor</h1>
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
  </body>
  <?php 
while ($procedure = $procedures->fetch_assoc())
{
  ?>
  <tr>
    <td><?php echo $procedure['procedure_id']; ?></td>
    <td><?php echo $procedure['procedure_name']; ?></td>
    <td><?php echo $procedure['procedure_desc']; ?></td>
    <td><?php echo $procedure['room']; ?></td>
    <td><?php echo $procedure['day_time']; ?></td>
  </tr>
  <?php
}
?>
</tbody>
</table>
</div>
