<div class="row">
  <div class="col">
<h1>Courses</h1>
  </div>
  <div class = "col-auto">
  <?php
    include "view-courses-newform.php";
?>
  </div>
</div>
<div class="table-responsive">
  <table class="table">
    <thead>
        <tr>
      <th>ID</th>
    <th>Name</th>
    <th>Description</th>
    </tr>
    </thead>
  <tbody>
  <?php 
while ($procedure = $procedures->fetch_assoc())
{
  ?>
  <tr>
    <td><?php echo $procedure['procedure_id']; ?></td>
    <td><?php echo $procedure['procedure_name']; ?></td>
    <td><?php echo $procedure['procedure_desc']; ?></td>
  <td>
    <form method = "post" action = "appointments-by-procedure.php">
      <input type="hidden" name="pid" value="<?php echo $procedure['procedure_id']; ?>">
      <button type ="submit" class="btn btn-primary">Appointment</button>
    </form>
  </td>
  </tr>
  <?php
}
?>
</tbody>
</table>
</div>
