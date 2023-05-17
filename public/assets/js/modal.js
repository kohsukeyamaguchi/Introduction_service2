//モーダル
$(function(){
    //キャラクターページモーダル
    $('.js-show-photo-modal').on('click',function(){
        var $this = $(this);
        var thisId = $this.attr('id');
        var modalWidth = $('.js-show-modal-target').width();
        var modalHeight = $('.js-show-modal-target').height();
        var windowWidth = $(window).width();
        var windowHeiht = $(window).innerHeight(); 
        var scrollTop = $(window).scrollTop();
        
        //スクロールを止める
        $('body').css('overflow-y', 'hidden'); 
        
        //モーダルの表示位置を定める
        $('.js-show-modal-target').css('left',(windowWidth/2 - modalWidth/2) + 'px');
        $('.js-show-modal-target').css('top',(scrollTop + windowHeiht/2 - modalHeight/2) +'px');
        //モーダルの背景色の位置を定める
        $('.js-show-modal-cover').css('top',scrollTop + 'px');
        
        //モーダルとその背景を表示する
        $('.js-show-modal-target').show();
        $('.js-show-modal-cover').show();
        
        //押された写真に合わせたモーダルの内容を表示する
        if(thisId === 'js-photo1'){
            $('#js-modalPhoto1').show();
            
        }else if(thisId === 'js-photo2'){
            $('#js-modalPhoto2').show();
            
        }else if(thisId === 'js-photo3'){
            $('#js-modalPhoto3').show();
            
        }else if(thisId === 'js-photo4'){
            $('#js-modalPhoto4').show();
            
        }else if(thisId === 'js-photo5'){
            $('#js-modalPhoto5').show();
            
        }else if(thisId === 'js-photo6'){
            $('#js-modalPhoto6').show();
            
        }
    });
    
    //モーダルを非表示にする
    $('.js-hide-modal').on('click',function(){
      
        //ポートフォリオページのいいね機能モーダル
        $('.js-show-modal-target').hide();
        //キャラクターページのフォトギャラリーのモーダル
        $('.js-show-modal-content').hide();
        $('.js-show-modal-cover').hide();
      
      //スクロール可能状態に再開する
      $('body').css('overflow-y','auto');
    });
    
    //ポートフォリオページモーダル
    $('.js-show-modal').on('click',function(){
        var link = $(this).attr('href');
        var modalWidth = $('.js-show-modal-target').width();
        var windowWidth = $(window).width();
        var modalHeight = $('.js-show-modal-target').height();
        var windowHeiht = $(window).innerHeight(); 
        var scrollTop = $(window).scrollTop();
        
        //リンク遷移を止める
        event.preventDefault();
        //スクロールを止める
        $('body').css('overflow-y', 'hidden'); 
        
        //モーダルの表示位置を定める
        $('.js-show-modal-target').css('left',(windowWidth/2 - modalWidth/2) + 'px');
        $('.js-show-modal-target').css('top',(scrollTop + windowHeiht/2 - modalHeight/2) +'px');
        //モーダルの背景色の位置を定める
        $('.js-show-modal-cover').css('top',scrollTop + 'px');
        
        //モーダルとその背景を表示する
        $('.js-show-modal-target').show();
        $('.js-show-modal-cover').show();
        
        //新規タブでリンク遷移を再開する
        window.open(link, '_blank');
   });
    
    //モーダル内容送信
    $('.js-send-modal').on('click',function(){
        var $comment = $('.js-comment-text');
        var $portfolioNumber = $('.js-portfolio-number');
        var portfolioId = $portfolioNumber.data('portfolioid');
        var likeAmount = $('.is-active').length;
        var commentTxt = $comment.val();
        
        //バリデーションチェック後にajax送信
        if(portfolioId !== undefined && likeAmount !== undefined && commentTxt !== undefined){
            $.ajax({
                type:"POST",
                url:"https://xs0553.xsrv.jp/introduction_service2/public/ajaxmodal",
                data: {portfolioData : portfolioId, likeData : likeAmount, commentData : commentTxt}
            }).done(function(data){
                console.log('Ajax Success');
            }).fail(function(msg){
                console.log('Ajax Error');
            });
                    
        }
        alert('送信しました!');
    });
    
});

//モーダルいいね機能
$(function () {
  $('.js-click-animation').on('click', function () {
      var $this = $(this);
      var index = $this.index();//4
      
      //クラスをデフォルト状態に戻す
      $('.js-click-animation').removeClass('fa-heart');
      $('.js-click-animation').addClass('fa-heart-o');
      $('.js-click-animation').removeClass('is-active');
      $('.js-click-animation2').removeClass('is-active');
      
      //押されたボタン以下のボタン全てにオン状態にする
      for(let i = 0; i <= index; i++){
          var targetDomAnimation1 = $('.js-click-animation').eq(i);
          var targetDomAnimation2 = $('.js-click-animation2').eq(i);
          targetDomAnimation1.addClass('fa-heart');
          targetDomAnimation1.removeClass('fa-heart-o');
          targetDomAnimation1.addClass('is-active');
          targetDomAnimation2.addClass('is-active');
      }
  });
  $('.js-click-animation2').on('animationend webkitAnimationEnd',function(){
      $('.js-click-animation2').removeClass('is-active');
  });

});