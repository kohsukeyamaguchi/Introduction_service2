<main class="c-portfolio js-portfolio-number" data-portfolioid="1">
    <h1 class="c-page-title">Portfolio1</h1>
    <section class="c-portfolio__ctn">
        <h2 class="c-ctn-title">ポートフォリオ名</h2>
        <p>作品紹介サイト</p>
    </section>
    <section class="c-portfolio__ctn">
        <h2 class="c-ctn-title">概要</h2>
        <p>ユーザーが制作した作品を紹介したり、他ユーザーの作品を閲覧、レビューしたり、チャット機能を使い、ユーザー同士でコミュニケーションや情報共有をできるサイトです。</p>
    </section>
    <section class="c-portfolio__ctn">
        <h2 class="c-ctn-title">使用言語・ツール</h2>
        <ul class="c-portfolio__ctn__list">
            <li class="c-portfolio__ctn__list__ele">・HTML</li>
            <li class="c-portfolio__ctn__list__ele">・CSS</li>
            <li class="c-portfolio__ctn__list__ele">・PHP</li>
            <li class="c-portfolio__ctn__list__ele">・PhpMyAdmin</li>
        </ul>
    </section>
    <section class="c-portfolio__ctn">
        <h2 class="c-ctn-title">開発期間</h2>
        <p>５月３日から５月３１日　工数：約１５人日<br>
        ※工数は１日８時間計算です。
        </p>
    </section>
    <section class="c-portfolio__ctn">
        <h2 class="c-ctn-title">苦労した点</h2>
        <h3 class="c-portfolio__ctn__sub-title">・テーブル設計から正規化する点</h3>
        <p>
        画面設計が完了した後に、サービス内でどんな情報を扱っているかを洗い出して、カテゴリーごとに分けたテーブルを設計した後に、各テーブルで紐づいてる箇所をIDに変更したりするなど管理しやすいように整えました。<br>
        その中でも特に、他のテーブルでも繰り返し使われるような情報を一つのテーブルで一元管理できるようにIDに置き換える第一正規化に苦労しました。<br>
        それぞれのテーブルを紐づけて考えて、後々にデータの変更があった場合のことを考えてベストなデータの管理方法を選択する力をこれからも引き続き養っていきます。
        </p>

        <h3 class="c-portfolio__ctn__sub-title">・画像のライブプレビューを実装する点</h3>
        <p>
        こちらは商品登録画面のフォルダからimgファイルをドラッグ＆ドロップした時に画像を表示させる機能になります。<br>
        ここで私はfileReaderオブジェクトを使ってファイルの読み込みやファイルを読み込んだ際のイベントを実装しました。<br>
        途中、imgタグにファイルが格納されずに悩んだこともありましたが、自分が取得しているDOMが想定したものであっているか、メソッドの使用方法が合っているかなど根気強く調査することで実装することができました。
        </p>
        
        <h3 class="c-portfolio__ctn__sub-title">・ページネーションを実装する点</h3>
        <p>
        こちらは、SQL文でデータを取り出すときにOFFSETを使用して、全レコードうち◯番目から10レコード取得するとして実装を試みました。<br>
        この時に自分は、どのようにしてページによってレコードの先頭番号を取得しSQL文を変えていくか悩みました。<br>
        この問題に私は、GETにページ数の値を受け渡すことによって解決できました。<br>
        GETPOST、クッキー、データベースなどさまざまなデータの格納方法やそれぞれの特性を知り、実装の幅を広げていこうと思いました。
        </p>
    </section>
    <section class="c-portfolio__btn-area">
        <a class="c-btn js-show-modal" href="https://xs0553.xsrv.jp/portfolio_service/top.php" target="_blank">ポートフォリオを見にいく</a>
    </section>
    
</main>
