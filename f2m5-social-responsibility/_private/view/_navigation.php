<ul>
    <li>
        <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Home</a>
    </li>
    <li>
        <a href="<?php echo url( 'aanmelden' ) ?>"<?php if ( current_route_is( 'aanmelding' ) ): ?> class="active"<?php endif ?>>Aanmelden</a>
    </li>
    <?php if( ! isLoggedIn()):?>
    <li>
        <a href="<?php echo url( 'login.form' ) ?>"<?php if ( current_route_is( 'login.form' ) ): ?> class="active"<?php endif ?>>Login</a>
    </li>
        <?php else: ?>
        <li>
            <a href="<?php echo url( 'logout' ) ?>">Logout</a>
        </li>
        <li>
        <a href="<?php echo url( 'login.dashboard' ) ?>"<?php if ( current_route_is( 'login.dashboard' ) ): ?> class="active"<?php endif ?>>Dashboard</a>
    </li>
        <?php if(request()->user['admin'] == 1):?>
            <li>
            <a href="<?php echo url( 'admin.index' ) ?>"<?php if ( current_route_is( 'admin.index' ) ): ?> class="active"<?php endif ?>>Admin</a>
            </li>
        <?php endif; ?>
        <?php endif;?>

    <?php if(isLoggedIn()): ?>
        <?php echo request()->user['voornaam'].' '. request()->user['achternaam'];?>
    <?php endif; ?>
</ul>