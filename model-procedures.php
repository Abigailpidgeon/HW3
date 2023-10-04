<?php
function selectProcedures() {
   try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("SELECT procedure_id, procedure_name, procedure_desc FROM `procedure`");
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
