<div>
    <section class="c-form">
        <h1 class="c-form__title">ユーザー登録</h1>
        
        <?php
            if(!empty($error)):
        ?>
            <ul class="c-form__error-msg">
        <?php 
            foreach ($error as $key => $val):
        ?>
            <li><?=$val?></li>
        <?php
            endforeach;
        ?>
                </ul>
        <?php
            endif;
        ?>
        <?=$signupform?>
    </section>
</div>