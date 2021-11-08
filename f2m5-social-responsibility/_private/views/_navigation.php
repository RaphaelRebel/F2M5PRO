<ul>

<li>

<a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Home</a>

<a href="<?php echo url( 'registreren' ) ?>"<?php if ( current_route_is( 'registreren' ) ): ?> class="active"<?php endif ?>>Registreer</a>

</li>

</ul>

<div class="user-menu">
<?php if(isLoggedIn()):?>
    <?php echo getLoggedInUserEmail(); ?>
    <?php endif; ?>
<ul>
        <?php if(isLoggedIn()):?>
        <li>
            <a href="<?php echo url( 'logout' ) ?>"<?php if ( current_route_is( 'logout' ) ): ?> class="active"<?php endif ?>>Uitloggen</a>
        </li>
        <?php else: ?>
        <li>
            <a href="<?php echo url( 'login' ) ?>"<?php if ( current_route_is( 'login' ) ): ?> class="active"<?php endif ?>>Inloggen</a>
        </li>
        <?php endif;?>
    </ul>
</div>