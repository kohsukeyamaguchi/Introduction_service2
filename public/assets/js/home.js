//画像スライダーの処理
var slider = (function(){
    var directionright = true;
    var currentItemNum = 1;
    var $sliderContainer = $('.js-slider__container');
    var slideItemNum = $('.js-slider__item').length;
    var sliderItemWidth = $('.js-slider__item').innerWidth();
    var sliderContainerWidth = sliderItemWidth * slideItemNum;
    const DURATION = 1000;
    
    return{
        slidePrev: function(){
            $sliderContainer.animate({left: '+='+sliderItemWidth+'px'},DURATION);
            currentItemNum--;
        },
        slideNext: function(){
            $sliderContainer.animate({left: '-='+sliderItemWidth+'px'},DURATION);
            currentItemNum++;
        },
        directionJudge: function(){
            if(currentItemNum == 1){
                directionright = true;
            }else if(currentItemNum == slideItemNum){
                directionright = false;
            }
        },
        init: function(){
            $sliderContainer.attr('style','width:' + sliderContainerWidth + 'px');
            var that = this;
            
            setInterval(function(){
                that.directionJudge();
                if(directionright === true){
                    that.slideNext();
                }else{
                    that.slidePrev();
                }
            },5000);
        }
    }
}());

slider.init();

//cookieの処理

$(function(){
    var dateArray;
    var linkArray;
    var hrefArray;

    $('.js-log-link').on('click',function(){
        event.preventDefault();
        var aHref = $.cookie('href');
        var link = $.cookie('link');
        var date = $.cookie('date');
        var aHrefText = $(this).attr('href');
        var linkText = $(this).text();
        const coordinatedWorldTimeDifference = 9 * 60;
        const changedMillisecond = 60 * 1000;
        const serchStartIndex = -1;
        //協定世界時に対して日本標準時は9時間進んでいるので、その分の時間を足して日本時間にし、なおかつミリ秒単位に合わせる。
        var logDate = new Date(Date.now() + ((new Date().getTimezoneOffset() + coordinatedWorldTimeDifference) * changedMillisecond));

        //詳しくみるの前にテキスト(js-hidden-contentのテキスト)が入っていた場合（Character詳しくみる）、「詳しくみる」を取り除いて「Character」のみにする。
        if(linkText.indexOf('詳しく見る') != serchStartIndex){
            linkText = linkText.replace("詳しく見る","");
        }

        //portfolioのリンクのどれかを押していた場合、「Portfolio: The first」と表示されるようにする
        if((linkText === "The first")||(linkText === "The second")||(linkText === "The third")){
            linkText = 'Portofolio: '+ linkText;
        }

        //クッキーにデータが入っているときは「,」区切りで後ろに追加する、入ってないときはそのまま格納
        if(link && date && aHref){
            $.cookie('link',link + ',' + linkText, {expires: 7, path: '/'});
            $.cookie('date',date + ',' + logDate.getFullYear() + '年' + (logDate.getMonth()+1) + '月' + logDate.getDate() + '日' + logDate.getHours() + '時' + logDate.getMinutes()+ '分', {expires: 7, path: '/'});
            $.cookie('href',aHref + ',' + aHrefText, {expires:7, path: '/'});
        }else{
            $.cookie('link',linkText,{expires:7,path: '/'});
            $.cookie('date',logDate.getFullYear() + '年' + (logDate.getMonth()+1) + '月' + logDate.getDate() + '日' + logDate.getHours() + '時' + logDate.getMinutes()+ '分', {expires: 7, path: '/'});
            $.cookie('href',aHrefText, {expires:7, path: '/'});
        }


        location.href= aHrefText;
    });

        //「,」区切りで入っているデータをそれぞれ、配列にする
        dateArray = ($.cookie('date')).split(',');
        linkArray = ($.cookie('link')).split(',');
        hrefArray = ($.cookie('href')).split(',');

    //クッキーのデータが入っている配列を<li>で表示する。
    $(function(){
        for( let i = 0; i < linkArray.length; i++){
            $('.p-log-ctn__list').prepend(`<li class="p-log-ctn__list__item">${dateArray[i]}&emsp;<a href="${hrefArray[i]}">${linkArray[i]}</a></li>`);
        }
    });

    //cookie使用のログ
    //クッキーにデータが入っていない場合は「現在、閲覧履歴はありません」を表示する。
    $(function(){
        var link = $.cookie('link');
        if(link){
            $('.p-log-ctn__list__item--nothing').css('display','none');
            $('.p-log-ctn__list__item').css('display','block');
        }else{
            $('.p-log-ctn__list__item--nothing').css('display','block');
            $('.p-log-ctn__list__item').css('display','none');
        }
    });

    //Portfolioの詳しくみるボタン押下後にportfolioNo1~portfolioNo3までのボタンを表示
    $(function(){
        $('.js-home-portfolio-btn').on('click',function(){
            $('.p-portfolio-ctn-1').hide(850);
            setTimeout(function(){
                $('.p-portfolio-ctn-2').show(1000);
            },600);

            $('.p-portfolio-ctn__btns').show();
        });
    });
});

