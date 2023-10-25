<?php
function selectAppointments() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT appointment_id, doctor_id, procedure_id, patient_id, room, day_time FROM `appointment`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function selectDoctorsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT doctor_id, doctor_name FROM `doctor` order by doctor_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function selectProceduresForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT procedure_id, procedure_name FROM `procedure` order by procedure_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function selectPatientsForInput() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT patient_id, patient_name FROM `patient` order by patient_name");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertAppointments($did,$pid,$ppatid,$aroom,$adaytime) {
   try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `appointment` (`doctor_id`,`procedure_id`,`patient_id`,`room`, `day_time`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("iiiss",$did,$pid,$ppatid,$aroom,$adaytime);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateAppointments($did,$pid,$ppatid,$aroom, $adaytime, $aid) {
   try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `appointment` set `doctor_id`=?,`procedure_id`=?, `patient_id`=?,`room` = ?, `day_time` = ? where appointment_id = ?");
        $stmt->bind_param("iiissi",$did,$pid,$ppatid,$aroom, $adaytime, $aid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteAppointments($aid) {
   try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from `appointment` where appointment_id = ?");
        $stmt->bind_param("i", $aid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
