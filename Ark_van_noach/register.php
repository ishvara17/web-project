<div class="container mb-5" id="container">
    <div class="row">
        <div class="col-6">
            <form action="./index.php?content=register_script" method="post">
                <div class="form-group">
                    <label for="InputEmail">Vul hier uw e-mailadres in:</label>
                    <input name="email" type="email" class="form-control" id="InputEmail" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">Hier ontvangt u facturen en/of verdere informatie over uw aankopen.</small>
                </div>
                <div class="form-group">
                    <label for="InputWachtwoord">Wachtwoord</label>
                    <input name="wachtwoord" type="password" class="form-control" id="InputWachtwoord">
                </div>
                <div class="form-group">
                    <label for="InputNaam">voornaam</label>
                    <input name="voornaam" type="text" class="form-control" id="InputNaam">
                </div>
                <div class="form-group">
                    <label for="InputAdres">Adres</label>
                    <input name="adres" type="text" class="form-control" id="InputAdres">
                </div>
                <div class="form-group">
                    <label for="InputPostcode">Postcode</label>
                    <input name="postcode" type="text" class="form-control" id="InputPostcode">
                </div>
                <div class="form-group">
                    <label for="InputProvincie">Provincie</label>
                    <input name="provincie" type="text" class="form-control" id="InputProvincie">
                </div>
                <br>
                <br>
                <button type="submit" class="btn btn-primary btn-lg btn-block ml-2">Registreer</button>
            </form>
        </div>
    </div>
</div>