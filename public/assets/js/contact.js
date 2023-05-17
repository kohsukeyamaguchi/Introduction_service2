//コンタクト画面の送信ボタンのフォーム入力によるボタン押下可否
$(function(){
    $('.js-form-validate-subject,.js-form-validate-contents').on('keyup',function(){
        var $subject = $('.js-form-validate-subject');
        var $contents = $('.js-form-validate-contents');
       if($subject.val() && $contents.val()){
           $('.js-disabled-submit').attr('disabled',false);
       }else{
           $('.js-disabled-submit').attr('disabled',true);
       } 
    });
});