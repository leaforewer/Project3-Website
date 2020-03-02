<?php
    // Hieronder staan de waarden die nodig zijn voor het contaact maken met de mysql-server
    define("SERVERNAME", "localhost");
    define("USERNAME", "armadillo");
    define("PASSWORD", "123");
    define("DATABASENAME", "adhd");
    
    $conn = mysqli_connect(SERVERNAME, USERNAME, PASSWORD, DATABASENAME);
    
?>
