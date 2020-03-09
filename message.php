<?php
    switch ($_GET["alert"]) {
        case 'no-email': 
            echo'<div class=" col-12 alert alert-info w-50 mx-auto mt-5" name="alert" role="alert">
            <h4 class="alert-heading">Geen e-mailadres ingevuld!</h4>
            <p>U bent verplicht uw e-mailadres in te vullen voor het registreren. Na het registreren krijgt u een activatiemail binnen</p>
            <hr>
            <p class="mb-0">Probeer het opnieuw</p>
            </div>';
        break;
        case 'emailexists':
            echo'<div class=" col-12 alert alert-danger w-50 mx-auto mt-5" name="alert" role="alert">
            <h4 class="alert-heading">E-mailadres bestaat al!</h4>
            <p>Het door u ingevulde e-mailadres bestaat al in de database. Kies om nieuw e-mailadres</p>
            <hr>
            <p class="mb-0">U wordt teruggestuurd naar de registratiepagina</p>
            </div>';
        break;
        case 'no-username': 
            echo'<div class=" col-12 alert alert-info w-50 mx-auto mt-5" name="alert" role="alert">
            <h4 class="alert-heading">Geen username ingevuld!</h4>
            <p>U bent verplicht uw username in te vullen voor het registreren. Na het registreren krijgt u een activatiemail binnen</p>
            <hr>
            <p class="mb-0">U wordt teruggestuurd naar de registratiepagina</p>
            </div>';
        break;
        case 'no-password': 
            echo'<div class=" col-12 alert alert-info w-50 mx-auto mt-5" name="alert" role="alert">
            <h4 class="alert-heading">Geen password ingevuld!</h4>
            <p>U bent verplicht uw password in te vullen voor het registreren. Na het registreren krijgt u een activatiemail binnen</p>
            <hr>
            <p class="mb-0">U wordt teruggestuurd naar de registratiepagina</p>
            </div>';
        break;
        default;
    break;
    }

// if ($_GET["alert"] == 'no-email') {
//     echo'<div class="alert alert-info w-50 mx-auto mt-5" name="alert" role="alert">
//     <h4 class="alert-heading">Geen e-mailadres ingevuld!</h4>
//     <p>U bent verplicht uw e-mailadres in te vullen voor het registreren. Na het registreren krijgt u een activatiemail binnen</p>
//     <hr>
//     <p class="mb-0">Probeer het opnieuw</p>
//     </div>';
// } elseif ($_GET["alert"] == 'emailexists' {
//     echo'<div class="alert alert-danger w-50 mx-auto mt-5" name="alert" role="alert">
//     <h4 class="alert-heading">E-mailadres bestaat al!</h4>
//     <p>Het door u ingevulde e-mailadres bestaat al in de database. Kies om nieuw e-mailadres</p>
//     <hr>
//     <p class="mb-0">U wordt teruggestuurd naar de registratiepagina</p>
//     </div>';

// }
header("Refresh: 3; index.php?content=aanmelden");
