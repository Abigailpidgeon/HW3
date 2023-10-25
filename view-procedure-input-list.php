<select class="form-select" id="pid" name="pid">
<?php
while ($procedureitem = $procedurelist->fetch_assoc()) {
  ?>
  <option value="<?php echo $procedureitem['procedure_id']; ?>"><?php echo $procedureitem['procedure_name'];?></option>
  <?php
}
?>
</select>

