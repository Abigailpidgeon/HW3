<h1>Doctors</h1>
<div class="table-responsive">
  <table class="table">
    <tr>
      <th>ID</th>
    <th>Name</th>
    <th>Clinic</th>
    </tr>
  </table>
  <?php 
while ($doctor = $doctors->fetchassoc())
{
  ?>
  <tr>
    <td><?php echo $doctor['doctor_id']; ?></td>
    <td><?php echo $doctor['doctor_name']; ?></td>
    <td><?php echo $doctor['clinic_name']; ?></td>
  </tr>
  <?php
}
?>
</tbody>
</table>
</div>
