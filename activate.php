<div class="row">
    <div class="col-12" style="text-align: center;" id="activate">
        <h3>Kies een wachtwoord<h3>
    </div>
    <div class="col-6 " style="padding: 80px;">
        <form action="./index.php?content=activate_script" method="post">

            <div class="form-group">
                <label for="inputPassword">Wachtwoord</label>
                <input type="text" name="password" class="form-control" id="inputPassword" aria-describedby="passwordHelp">
                <small id="passwordHelp" class="form-text text-muted">Kies een wachtwoord</small>
            </div>
            <div class="form-group">
                <label for="inputPasswordCheck">Voer het wachtwoord opnieuw in</label>
                <input type="password_check" name="email" class="form-control" id="inputPasswordCheck" aria-describedby="passwordHelp">
                <small id="passwordHelp" class="form-text text-muted">Controle voor het eerder gekozen wachtwoord</small>
            </div>
            <input type="hidden" name="id" value="<?php $_GET['id']; ?>">
            <input type="hidden" name="pwh" value="<?php $_GET['pwh']; ?>">

            <div class="col-12" style="padding: 15px;">
                <button type="submit" class="btn btn-primary submit">Versturen</button>
            </div>
        </form>
    </div>
    <div class="col-6">
        <img src="./img/registreren.jpg" style="width: 450px; height: 450px; " alt="registreren">
        <!-- <img src="./img/registreren.jpg" style="width: 450px; height: 450px; " alt="registreren"> -->
    </div>
</div>