<div class="row">
    <div class="col-12">
        <h3>Aanmelden</h3>
    </div>
    <div class="col-6 abc">
        <form action="./index.php?content=create_users" method="post">

            <div class="form-group">
                <label for="firstname">Gebruikersnaam</label>
                <input type="text" class="form-control" id="username" aria-describedby="usernameHelp" name="username">
                <small id="Help" class="form-text ">*Verplicht veld</small>
            </div>
            <div class="form-group">
                <label for="infix">E-mailadres</label>
                <input type="text" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                <small id="Help" class="form-text ">*Verplicht veld</small>
            </div>
            <div class="form-group">
                <label for="lastname">Wachtwoord</label>
                <input type="text" class="form-control" id="password" aria-describedby="passwordHelp" name="password">
                <small id="Help" class="form-text ">*Verplicht veld</small>
            </div>
            <div class="form-group">
                <label for="lastname">Handtekening</label>
                <input type="text" class="form-control" id="handteken" aria-describedby="handtekenHelp" name="handteken">
                <small id="Help" class="form-text text-muted">*Vul hier uw forum handtekening in.</small>
            </div>
            <div class="form-group">
                <label for="lastname">Nationaliteit</label>
                <input type="text" class="form-control" id="nationaliteit" aria-describedby="nationaliteitHelp" name="nationaliteit">
                <small id="Help" class="form-text text-muted">*Vul hier uw Nationaliteit in.</small>
            </div>
            <div class="col-12" style="padding: 15px;">
                <button type="submit" class="btn btn-primary submit">Versturen</button>
            </div>
        </form>
    </div>
    <div class="col-6" >
        <img src="./img/registreren.jpg" style="width: 450px; height: 450px; " alt="aanmelden">
    </div>
</div>