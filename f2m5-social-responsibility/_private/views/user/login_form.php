<?php $this->layout('layouts::website');?>

<link rel="stylesheet" href="<?php echo site_url( '/css/user.css' ) ?>" media="all">
<link rel="stylesheet" href="<?php echo site_url( '/css/style.css' ) ?>" media="all">
<link rel="stylesheet" href="<?php echo site_url( '/css/back.css' ) ?>" media="all">
<div class="cont">
<div class="tent">

<h2>Login</h2>

<form id="inlog" action = "<?php echo url('login.handle')?>" method="POST">
<div class="form-group">
           <p> E-mail</p>
           <input class="form-control" type="email" name="email" placeholder="E-mail" value="<?php echo input('email')?>" required>*<br>
           <?php if (isset ($errors['email'] ) ): ?>
            <?php echo $errors['email']; ?>
            <?php endif;?></br>
</div>
<div class="form-group">            
           <p> Wachtwoord</p>
           <input class="form-control" type="password" name="password" placeholder="Password" required>
            <?php if (isset ($errors['password'] ) ): ?>
            <?php echo $errors['password']; ?>
            <?php endif;?>
            <br><br>
            <p>
            <a href="<?php echo url('password.form');?>">Wachtwoord vergeten</a>
            </p>
</div>
            <input class="submit" type ="submit" value = "Inloggen!">
 </form>

</div>
</div>