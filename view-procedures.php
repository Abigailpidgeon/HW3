<h1>Procedures</h1>
<div class="table-responsive">
  <table class="table">
    <thead>
        <tr>
      <th>ID</th>
    <th>Name</th>
    <th>Description</th>
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
  </tr>
  <?php
}
?>
</tbody>
</table>
</div>
