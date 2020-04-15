<div class="row">
    <div class="col-12">
        <h3>Contact</h3>
    </div>
    <div class="col-6 abc">
        <form action="./index.php?content=contact_script" method="post">
        
        
            <div class="form-group">
                <ion-icon style="width: 35px; height: 35px;" name="chatbubbles-outline"></ion-icon> 
                <label  style="padding-right: 350px; padding-bottom: 5px; font-size: 25px;" for="">Onderwerp
                </label>
                <select id="subject" name="subject" style="padding-left: 30px; background-color: #6CCCCE; color: whitesmoke; padding-top: 2px; padding-bottom: 2px;">
                    <option value='feedback'>Feedback</option>
                    <option value ='klacht'>Klachten</option>
                    <option value='probleem'>Problemen</option>
                    
                </select>
            </div>
            <div class="form-group">
                <label style="font-size: 20px;" for="infix">E-mailadres</label>
                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                <small id="Help" class="form-text ">*Verplicht veld</small>
            </div>
            <div class="form-group">
                <label style="font-size: 20px;" for="exampleFormControlTextarea1">Tekst</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" id="message" name="message" rows="3"></textarea>
            </div>
            
            
            <div style="font-size: 14px; padding-left: 15px;">
            </div>
            <small id="Help" class="form-text">*Schrijf hier uw opmerkingen</small>
        </div>
        <div class="col-12" style="padding: 15px;">
            <button type="submit" class="btn btn-primary submit">Versturen</button>
        </div>
        
    </div>
</form>
<div class="col-6">
    <img src="./img/registreren1.png" style="width: 450px; height: 450px; " alt="aanmelden">
</div>
