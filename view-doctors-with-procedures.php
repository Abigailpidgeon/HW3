<h1>Doctors with Procedures</h1>
<div class="card-group">
<?php
while ($doctor = $doctors->fetch_assoc())
{
  ?>
  <div class="card">
    <div class ="card-body">
      <h5 class="card-title"><?php echo $doctor['doctor_name']; ?></h5>
        <p class="card-text">
<?php
function selectProceduresbyDoctor($doctor['doctor_id']);
  while ($procedure = $procedures->fetch_assoc()) {
    ?>
    <li class = "list-group-item"><?php echo $procedure['procedure_id']; ?> - <?php echo $procedure['procedure_name']; ?> - <?php echo $procedure['procedure_desc']; ?> - <?php echo $procedure['room']; ?> - <?php echo $procedure['day_time']; ?>
<?php
  }
  ?>
    </ul>
        </p>
      <p class ="card-text"><small class="text-bpdy-secondary">Clinic: <?php echo $doctor['clinic_name']; ?></small></p>
</div>
  </div>
<?php
}
?>
</div>
