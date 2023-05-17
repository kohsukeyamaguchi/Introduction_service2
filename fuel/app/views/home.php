<main>
    <section class="p-img-ctn">
     <div class="p-img-ctn__slider">
       <ul class="p-img-ctn__slider__container js-slider__container">
         <li class="p-img-ctn__slider__container__item js-slider__item"><?php echo Asset::img('hero1.JPG') ?></li>
         <li class="p-img-ctn__slider__container__item js-slider__item"><?php echo Asset::img('hero2.jpeg') ?></li>
         <li class="p-img-ctn__slider__container__item js-slider__item"><?php echo Asset::img('hero3.jpeg') ?></li>
         <li class="p-img-ctn__slider__container__item js-slider__item"><?php echo Asset::img('hero4.jpeg') ?></li>
        </ul>
      </div>
    </section>
    
    <section class="p-main-ctn">
        <h1 class="p-main-ctn__title">自己紹介、やります、やれます、やってみせます。</h1>
        <p class="p-main-ctn__sub">I will introduce myself, I can do it, I will do it.</p>

        <p class="p-main-ctn__sentence">
          私は、企業様との採用フローの中で、余すことなく、「<span>自分</span>」を伝えたいと考えています。<br>
          <br>
          しかし、実際には、企業様が用意されている面接や能力試験のみで私の人柄や特徴、<br>
          スキルを十分に伝えることは、厳しく思います。<br>
          <br>
          そこで、当ホームページを開設いたしました。<br>
          <br>
          このホームページを通して、私のバックボーンやキャラクター、そして私が製作した製作<br>
          物をご覧頂き、面接や能力試験では伝えられなかった部分をこちらで知っていただきたく、<br>
          思います。
        </p>
    </section>
    
    <section class="p-menu-ctn">
        <div class="p-menu-ctn__category">
            <div class="p-menu-ctn__category__img p-img-1"><?php echo Asset::img('character.jpg') ?></div>    
            <div class="p-menu-ctn__category__item p-item-1">
                <h2 class="p-menu-ctn__category__item__title">Character</h2>
                <p class="p-menu-ctn__category__item__sub">個性</p>

                <p class="p-menu-ctn__category__item__sentence">
                私、山口幸祐の性格や趣味など、<br>
                人となりを知ってもらうための情<br>
                報を、ご紹介いたします。
                </p>

                <a class="c-btn js-log-link" href="character"><span class="p-button-hidden-content js-hidden-content">Character</span>詳しく見る</a>
            </div>
        </div>
        <div class="p-menu-ctn__category">
            <div class="p-menu-ctn__category__img p-img-2"><?php echo Asset::img('portfolio.jpeg') ?></div>    
            <div class="p-menu-ctn__category__item p-item-2 p-portfolio-ctn-1">
                <h2 class="p-menu-ctn__category__item__title">Portfolio</h2>
                <p class="p-menu-ctn__category__item__sub">製作物</p>

                <p class="p-menu-ctn__category__item__sentence">
                これまでに製作した製作物をご紹<br>
                介いたします。<br>
                </p>
                
                <a class="c-btn js-home-portfolio-btn">詳しく見る</a>
            </div>
            <div class="p-menu-ctn__category__item p-item-2 p-portfolio-ctn-2">
                <div class="p-portfolio-ctn__btns">
                    <a class="c-btn js-log-link" href="portfolioNo1">The first</a>
                    <a class="c-btn js-log-link" href="portfolioNo2">The second</a>
                    <a class="c-btn js-log-link" href="portfolioNo3">The third</a>
                </div>
                <div class="p-portfolio-ctn__cover"></div>
            </div>
        </div>
    </section>

    <section class="p-log-ctn">
         <h1 class="p-log-ctn__title">閲覧履歴</h1>
         <ul class="p-log-ctn__list">
            <li class="p-log-ctn__list__item--nothing">現在、閲覧履歴はありません。</li>
         </ul>
    </section>
</main>
