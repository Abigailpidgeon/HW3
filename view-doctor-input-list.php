<select class="form-select" id="did" name="did">
<?php
while ($doctoritem = $doctorlist->fetch_assoc()) {
  ?>
  <option value="<?php echo $doctoritem['doctor_id']; ?>"><?php echo $doctoritem['doctor_name'];?></option>
  <?php
}
?>
</select>


