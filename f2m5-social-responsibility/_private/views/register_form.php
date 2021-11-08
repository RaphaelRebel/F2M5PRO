<?php $this->layout('layouts::website');?>

<h3>Inschrijven</h3>

<form action="<?php echo url("register.Process")?>" method="POST">
        <div class="form-group">
        <label for="voornaam">Voornaam</label>
                <input type="voornaam" name="voornaam" value="<?php echo input('voornaam')?>" class="form-control" id="voornaam">
        </div>
        <div class="form-group">
        <label for="achternaam">Achternaam</label>
                <input type="achternaam" name="achternaam" value="<?php echo input('achternaam')?>" class="form-control" id="achternaam">
        </div>
        <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="<?php echo input('email')?>" class="form-control" id="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We delen uw email adres met niemand, uw gegevens zijn veilig!</small>
                <?php if ( isset( $errors['email'] ) ): ?>
                        <?php echo $errors['email'] ?>
                <?php endif;?>
        </div>
        <div class="form-group">
                <label for="wachtwoord">Wachtwoord</label>
                <input type="password" name="wachtwoord" value="<?php echo input('wachtwoord')?>" class="form-control" id="wachtwoord">
                <?php if ( isset( $errors['wachtwoord'] ) ): ?>
                        <?php echo $errors['wachtwoord'] ?>
                <?php endif;?>

        </div>
        <Button type="submit" style="background-color:blue;" class="btn btn-primay">Registeren</button>
</form>