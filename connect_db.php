<?php
    // Hieronder staan de waarden die nodig zijn voor het contaact maken met de mysql-server
    define("SERVERNAME", "localhost");
    define("USERNAME", "ahmet");
    define("PASSWORD", "ahmet");
    define("DATABASENAME", "adhd");
    
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASENAME);
    
?>

<?php
    function sanitize($raw_data) {        
        global $conn;     
        $data = mysqli_real_escape_string($conn, $raw_data);
        $data = htmlspecialchars($data); 
        return $data;
    }
?>