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
function insertAppointments($aroom, $adaytime) {
   try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `appointment` (`room`, `day_time`) VALUES (?,?)");
        $stmt->bind_param("ss",$aroom, $adaytime);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateAppointments($aroom, $adaytime, $aid) {
   try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `appointment` set `room` = ?, `day_time` = ? where appointment_id = ?");
        $stmt->bind_param("ssi",$aroom, $adaytime, $aid);
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
