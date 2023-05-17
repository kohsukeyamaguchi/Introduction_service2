<?php
$sucMsg = Session::get_flash('sucMsg');
if (!empty($sucMsg)) :
    ?>
    <div class="l-alert-msg success js-toggle-msg">
        <?= $sucMsg ?>
    </div>
<?php
endif;
$errMsg = Session::get_flash('errMsg');
if (!empty($errMsg)) :
    ?>
    <div class="l-alert-msg err js-toggle-msg">
        <?= $errMsg ?>
    </div>
<?php
endif;
?>

<header class="l-header">
    <h1 class="l-title">Introduction</h1>

    <nav class="l-nav-menu js-toggle-sp-menu-target">
        <ul class="l-menu ">
            <li class="l-menu__item"><a class="l-menu__link" href="home">Home</a></li>
            <li class="l-menu__item"><a class="l-menu__link js-log-link" href="character">Character</a></li>
            <li class="l-menu__item js-drop-tab js-log-parent">Portofolio
                <ul class="l-menu__item__list js-drop-menu">
                    <li class="l-menu__item__list__ele"><a class="l-menu__item__list__link js-log-link" href="portfolioNo1">Portofolio1</a></li>
                    <li class="l-menu__item__list__ele"><a class="l-menu__item__list__link js-log-link" href="portfolioNo2">Portofolio2</a></li>
                    <li class="l-menu__item__list__ele"><a class="l-menu__item__list__link js-log-link" href="portfolioNo3">Portofolio3</a></li>
                    <li class="l-menu__item__list__ele"><a class="l-menu__item__list__link js-log-link" href="portfolioNo4">Portofolio4</a></li>
                    <li class="l-menu__item__list__ele"><a class="l-menu__item__list__link js-log-link" href="portfolioNo5">Portofolio5</a></li>
                </ul>
            </li>
            <li class="l-menu__item"><a class="l-menu__link" href="contact">Contact</a></li>
            <li class="l-menu__item"><a class="l-menu__link" href="logout">Logout</a></li>
        </ul>
    </nav>

</header>