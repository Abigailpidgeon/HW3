<?php
function selectAppointments() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT appointment_id, room, day_time FROM `appointment`");
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
        $stmt = $conn->prepare("INSERT INTO `appointment` (`did`,`pid`,`ppatid`,`room`, `day_time`) VALUES (?,?,?,?,?)");
        $stmt->bind_param("ss",$did,$pid,$ppatid,$aroom,$adaytime);
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
        $stmt->bind_param("ssi",$did,$pid,$ppatid,$aroom, $adaytime, $aid);
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
