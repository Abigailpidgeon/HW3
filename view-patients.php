<h1>Patients</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
        <tr>
      <th>ID</th>
    <th>Name</th>
    <th>Insurance</th>
    </tr>
    </thead>
  <tbody>
  <?php 
while ($patient = $patients->fetch_assoc())
{
  ?>
  <tr>
    <td><?php echo $patient['patient_id']; ?></td>
    <td><?php echo $patient['patient_name']; ?></td>
    <td><?php echo $patient['insurance_name']; ?></td>
  </td>
  </tr>
  <?php
}
?>
</tbody>
</table>
</div>
