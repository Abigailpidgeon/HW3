<?php
function selectDoctors() {
   try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT doctor_id, doctor_name, clinic_name FROM `doctor`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>

<?php
function selectProceduresbyDoctor($iid) {
   try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT p.procedure_id, procedure_name, procedure_desc, room, day_time FROM `procedure` p join appointment a on a.procedure_id = p.procedure_id where a.doctor_id=?");
        $stmt->bind_param("i",$iid);
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
