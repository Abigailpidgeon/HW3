<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#editAppointmentModal<?php echo $appointment['appointment_id']; ?>">
 <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
</svg>
</button>

<!-- Modal -->
<div class="modal fade" id="editAppointmentModal<?php echo $appointment['appointment_id']; ?>" tabindex="-1" aria-labelledby="editAppointmentModalLabel<?php echo $appointment['appointment_id']; ?>" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="editAppointmentModalLabel<?php echo $appointment['appointment_id']; ?>">Edit appointment</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
  <form method = "post" action="">
    <div class="mb-3">
     <div class="mb-3">
      <label for="did<?php echo $appointment['appointment_id']; ?>" class="form-label">Doctor ID</label>
     <input type="text" class="form-control" id="did<?php echo $appointment['appointment_id']; ?>" name = "did" value="<?php echo $appointment['doctor_id']; ?>">
   </div>
     <div class="mb-3">
      <label for="pid<?php echo $appointment['appointment_id']; ?>" class="form-label">Procedure ID</label>
     <input type="text" class="form-control" id="pid<?php echo $appointment['appointment_id']; ?>" name = "pid" value="<?php echo $appointment['procedure_id']; ?>">
   </div>
     <div class="mb-3">
      <label for="ppatid<?php echo $appointment['appointment_id']; ?>" class="form-label">Patient ID</label>
     <input type="text" class="form-control" id="ppatid<?php echo $appointment['appointment_id']; ?>" name = "ppatid" value="<?php echo $appointment['patient_id']; ?>">
   </div>
      <label for="aroom<?php echo $appointment['appointment_id']; ?>" class="form-label">Appointment room</label>
      <input type="text" class="form-control" id="aroom<?php echo $appointment['appointment_id']; ?>" name ="aroom" value="<?php echo $appointment['room']; ?>">
    </div>
    <div class="mb-3">
      <label for="adaytime<?php echo $appointment['appointment_id']; ?>" class="form-label">Appointment date and time</label>
     <input type="text" class="form-control" id="adaytime<?php echo $appointment['appointment_id']; ?>" name = "adaytime" value="<?php echo $appointment['day_time']; ?>">
   </div>
      <input type = "hidden" name="aid" value="<?php echo $appointment['appointment_id']; ?>">
    <input type = "hidden" name="actionType" value="Edit">
    <button type="submit" class="btn btn-primary">Save</button>
  </form>
      </div>
    </div>
  </div>
</div>
