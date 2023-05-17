<div class="p-modal js-show-modal-target">
    <h2 class="p-modal__title">ぜひ、評価をお願いします！</h2>
    <div class="p-modal__heart-list js-like-list" >
        <i class="fa  js-click-animation fav <?php if($like_data >= 1){echo 'fa-heart';}else{echo 'fa-heart-o';}  ?>" aria-hidden="true"></i>
        <i class="fa  js-click-animation fav <?php if($like_data >= 2){echo 'fa-heart';}else{echo 'fa-heart-o';}  ?>" aria-hidden="true"></i>
        <i class="fa  js-click-animation fav <?php if($like_data >= 3){echo 'fa-heart';}else{echo 'fa-heart-o';}  ?>" aria-hidden="true"></i>
        <i class="fa  js-click-animation fav <?php if($like_data >= 4){echo 'fa-heart';}else{echo 'fa-heart-o';}  ?>" aria-hidden="true"></i>
        <i class="fa  js-click-animation fav <?php if($like_data >= 5){echo 'fa-heart';}else{echo 'fa-heart-o';}  ?>" aria-hidden="true"></i>
        <i class="fa fa-heart js-click-animation2 fav2" aria-hidden="true"></i>
        <i class="fa fa-heart js-click-animation2 fav2" aria-hidden="true"></i>
        <i class="fa fa-heart js-click-animation2 fav2" aria-hidden="true"></i>
        <i class="fa fa-heart js-click-animation2 fav2" aria-hidden="true"></i>
        <i class="fa fa-heart js-click-animation2 fav2" aria-hidden="true"></i>
    </div>
    
    <div class="p-modal__form-group">
        <label for="comment" class="p-modal__form-group__title">コメント</label>
        <textarea cols="50" rows="10" id="comment" name="comment" class="p-modal__form-group__text js-comment-text" placeholder="コメントもぜひお願いします！"><?php if(!empty($comment_data)) echo $comment_data; ?></textarea>
    </div>
    <button class="c-btn btn-close js-send-modal js-hide-modal ">送信</button>
</div>
<div class="p-cover js-show-modal-cover" ></div>