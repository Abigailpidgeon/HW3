<select class="form-select" id="ppatid" name="ppatid">
<?php
while ($patientitem = $patientlist->fetch_assoc()) {
  ?>
  <option value="<?php echo $patientitem['patient_id']; ?>"><?php echo $patientitem['patient_name'];?></option>
  <?php
}
?>
</select>

