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
        $stmt = $conn->prepare("INSERT INTO `procedure` (`procedure_name`, `procedure_desc`) VALUES (?,?)");
        $stmt->bind_param("ss",$pName, $pDesc);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function updateProcedures($pName, $pDesc, $pid) {
   try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("update `procedure` set `procedure_name` = ?, `procedure_desc` = ? where procedure_id = ?");
        $stmt->bind_param("ssi",$pName, $pDesc, $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
function deleteProcedures($pid) {
   try {
        $conn = get_db_connection();
        $stmt = $conn->prepare("delete from `procedure` where procedure_id = ?");
        $stmt->bind_param("i", $pid);
        $success = $stmt->execute();
        $conn->close();
        return $success;
    } catch (Exception $e) {
        $conn->close();
        throw $e;
    }
}
?>
