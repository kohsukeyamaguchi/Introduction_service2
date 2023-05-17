<?php
$sucMsg = Session::get_flash('sucMsg');
if(!empty($sucMsg)):
    ?>
    <div class="l-alert-msg success js-toggle-msg">
        <?=$sucMsg?>
    </div>
    <?php
endif;
$errMsg = Session::get_flash('errMsg');
if(!empty($errMsg)):
    ?>
    <div class="l-alert-msg err js-toggle-msg">
        <?=$errMsg ?>
    </div>
    <?php
endif;
?>
<header class="l-header">
    <h1 class="l-title">Introduction</h1>
    <nav class="l-nav-menu js-toggle-sp-menu-target">
        <ul class="l-menu ">
            <li class="l-menu__item"><a class="l-menu__link" href="signup">SignUp</a></li>
            <li class="l-menu__item"><a class="l-menu__link" href="login">Login</a></li>
        </ul>
    </nav>
</header>