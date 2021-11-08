<?php $this->layout('layouts::website');?>

<h3>Inloggen</h3>

<form action="<?php echo url("login.process")?>" method="POST">
        <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="" class="form-control" id="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We delen uw email adres met niemand, uw gegevens zijn veilig!</small>
                <?php if ( isset( $errors['email'] ) ): ?>
                        <?php echo $errors['email'] ?>
                <?php endif;?>
        </div>
        <div class="form-group">
                <label for="wachtwoord">Wachtwoord</label>
                <input type="password" name="wachtwoord" class="form-control" id="wachtwoord">
                <?php if (isset( $errors['wachtwoord'] ) ): ?>
                        <?php echo $errors['wachtwoord'] ?>
                <?php endif; ?>

        </div>
        <Button type="submit" class="btn btn-primay">Login</button>
</form>