//ナビゲーションメニューの処理
$(function(){
    $(".js-drop-tab").hover(function(){
        $(".js-drop-menu:not(:animated)",this).slideDown();
    },function(){
        $(".js-drop-menu",this).slideUp();
    });

//成功メッセージと失敗メッセージの表示アニメーション
    var $toggleMsg = $('.js-toggle-msg');
    if($toggleMsg.length){
        $toggleMsg.slideDown();
        setTimeout(function(){ $toggleMsg.slideUp(); },3000);
    }
});