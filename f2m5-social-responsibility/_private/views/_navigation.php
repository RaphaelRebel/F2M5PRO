<ul>
    <li>
        <a href="<?php echo url( 'home' ) ?>"<?php if ( current_route_is( 'home' ) ): ?> class="active"<?php endif ?>>Home</a>
        <a href="<?php echo url( 'registreren' ) ?>"<?php if ( current_route_is( 'registreren' ) ): ?> class="active"<?php endif ?>>Registreer</a>
        <a href="<?php echo url( 'login' ) ?>"<?php if ( current_route_is( 'login' ) ): ?> class="active"<?php endif ?>>Login</a>
        </li>
</ul>