<?php
function selectDoctors() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT doctor_id,doctor_name,clinic_name FROM `doctor`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertDoctors($dName, $dcName) {
   try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("INSERT INTO `doctor` (`doctor_name`, `clinic_name`) VALUES (?,?)");
        $stmt->bind_param("ss",$dName, $dcName);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateDoctors($dName, $dcName, $did) {
   try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `doctor` set `doctor_name` = ?, `clinic_name` = ?, where doctor_id = ?");
        $stmt->bind_param("ssi",$pName, $dcName, $did);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteDoctors($did) {
   try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from doctor where doctor_id = ?");
        $stmt->bind_param("i", $did);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
