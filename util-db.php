<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('138.68.5.11', 'apidgeon_hw3user', 'Qyl=Jh=f[w3Q', 'apidgeon_HW3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
