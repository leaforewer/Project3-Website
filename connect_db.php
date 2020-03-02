<?php
    // Hieronder staan de waarden die nodig zijn voor het contaact maken met de mysql-server
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "adhd";
    
    
    // Met de onderstaande functie maakt PHP contact met de mysql-server
    $conn = mysqli_connect($servername, $username, $password, $databasename);
?>

<?php
    function sanitize($raw_data) {        
        global $conn;     
        $data = mysqli_real_escape_string($conn, $raw_data);
        $data = htmlspecialchars($data); 
        return $data;
    }
?>