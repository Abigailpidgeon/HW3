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
function insertProcedures($pName, $pDesc) {
   try {
        $conn = get_db_connection();
        $stmt = $conn->prepare(INSERT INTO `procedure` (`procedure_name`, `procedure_desc`) VALUES (?,?);
        $stmt->bind_param("ss",$pName, $pDesc);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
