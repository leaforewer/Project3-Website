<?php
    // Hieronder staan de waarden die nodig zijn voor het contaact maken met de mysql-server
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "";
    
    
    // Met de onderstaande functie maakt PHP contact met de mysql-server
    $conn = mysqli_connect($servername, $username, $password, $databasename);
?>
