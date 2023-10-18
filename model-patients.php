<?php
function selectPatients() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT patient_id, patient_name, insurance_name FROM `patient`");
        $stmt->execute();
        $result = $stmt->get_result();
        $conn->close();
        return $result;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function insertPatients($patname, $inname) {
   try {
        $conn = get_db_connection();
        $stmt = $conn->prepare(INSERT INTO `patient` (`patient_name`, `insurance_name`) VALUES (?,?);
        $stmt->bind_param("ss",$patname, $inname);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}function updatePatients($patname, $inname, $patid) {
   try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `patient` set `patient_name` = ?, `insurance_name` = ?, where patient_id = ?");
        $stmt->bind_param("ssi",$patname, $inname, $patid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
}function deletePatients($patid) {
   try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from patient where patient_id = ?");
        $stmt->bind_param("i", $patid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
