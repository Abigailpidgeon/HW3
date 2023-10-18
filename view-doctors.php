<div class="row">
  <div class="col">
<h1>Doctors</h1>
  </div>
  <div class = "col-auto">
  <?php
    include "view-doctors-newform.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
       <tr>
      <th>ID</th>
    <th>Name</th>
    <th>Clinic</th>
         <th></th>
    </tr>
    </thead>
  </tbody>
  <?php 
while ($doctor = $doctors->fetch_assoc())
{
  ?>
  <tr>
    <td><?php echo $doctor['doctor_id']; ?></td>
    <td><?php echo $doctor['doctor_name']; ?></td>
    <td><?php echo $doctor['clinic_name']; ?></td>
  <td><a href="procedures-by-doctor.php?id=<?php echo $doctor['doctor_id']; ?>">Procedures</a></td>
  </tr>
  <?php
}
?>
</tbody>
</table>
</div>
