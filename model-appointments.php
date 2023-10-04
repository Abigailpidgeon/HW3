<?php
function selectAppointments() {
    try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT room, day_time FROM `appointment`");
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
