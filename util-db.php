<?php
function get_db_connection(){
    // Create connection
    $conn = new mysqli('159.89.47.44', 'apidgeon_hw3user', 'Qyl=Jh=f[w3Q', 'apidgeon_HW3');
    
    // Check connection
    if ($conn->connect_error) {
      return false;
    }
    return $conn;
}
?>
