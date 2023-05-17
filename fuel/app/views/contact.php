<main class="p-contact">
    <h1 class="c-page-title">Contact</h1>
    <form action="" class="p-contact-form" method="post">
       <label for="title" class="p-contact-form__title">件名</label>
       <input type="text" id="title" name="title" class="p-contact-form__input js-form-validate-subject" value="<?php if(!empty($_POST['title'])) echo $_POST['title']; ?>">
       <label for="contents" class="p-contact-form__title">コメント</label>
       <textarea name="contents" id="contents" cols="30" rows="10" class="p-contact-form__input js-form-validate-contents"><?php if(!empty($_POST['contents'])) echo $_POST['contents']; ?></textarea>
       <input type="submit" value="送信する" class="p-form-submit js-disabled-submit" disabled="disabled">
    </form>
</main>