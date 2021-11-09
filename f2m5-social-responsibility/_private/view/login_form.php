<?php $this->layout('layouts::website');?>
<link rel="stylesheet" href="<?php echo site_url( '/css/user.css' ) ?>" media="all">
<link rel="stylesheet" href="<?php echo site_url( '/css/style.css' ) ?>" media="all">
<div class="cont">
<div class="tent">
<h3>Inloggen</h3>
<form action="<?php echo url("login.Process")?>" method="POST">
        <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" value="" class="form-control" id="email" aria-describedby="emailHelp">
                <small id="emailHelp" class="form-text text-muted">We delen uw email adres met niemand, uw gegevens zijn veilig!</small>
        </div>
        <div class="form-group">
                <label for="wachtwoord">Wachtwoord</label>
                <input type="password" name="wachtwoord" class="form-control" id="wachtwoord">

        </div>
        <Button type="submit" style="background-color:#FE8D0D; color: white;" class="btn btn-primay">Login</button>
</form>
</div>
</div>