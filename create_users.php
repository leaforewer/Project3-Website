<?php
 include("./connect_db.php");

//  include("./functions.php");


// var_dump($_POST);

$username = sanitize($_POST["username"]);
$email = sanitize($_POST["email"]);
$password = sanitize($_POST["password"]);
$handteken = sanitize($_POST["handteken"]);
$nationaliteit = sanitize($_POST["nationaliteit"]);
    

$query = "INSERT INTO `users` (`id`,
                               `username`, 
                               `email`, 
                               `password`,
                               `nationaliteit`,
                               `handteken`)
                      values (NULL,
                              '$username',
                              '$email',
                              '$password',
                              '$nationaliteit',
                              '$handteken')";
// echo $query; exit();
mysqli_query($conn, $query);                            

// Met de header functie kan je de browser naar een andere pagina laten gaan.
header("Refresh: 3; index.php?content=users");
?>

<main class="container">
        <!-- jumbotron -->
        <div class="row">
            <div class="col-12">
                <div class="jumbotron jumbotron-fluid text-center" id="jumbotron1">
                    <div class="container">
                        <h1 class="display-4" id="Jumbotron_title">Uw gegevens zijn verwerkt!</h1>
                    </div>
                </div>
            </div>
        </div>
</main>