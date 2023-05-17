<main class="c-portfolio js-portfolio-number" data-portfolioid="4">
    <h1 class="c-page-title">Portfolio4</h1>
    <section class="c-portfolio__ctn">
        <h2 class="c-ctn-title">ポートフォリオ名</h2>
        <p>ToDoアプリ</p>

    </section>
    <section class="c-portfolio__ctn">
        <h2 class="c-ctn-title">概要</h2>
        <p>
            タスクを記録するアプリケーションになります。<br>
            （こちらのポートフォリオはフロント部分しか実装していないため、ブラウザを更新するとクリアされます。）<br>
            タスク登録機能（タスクのタイトル、タスクの詳細、タスク実施日の登録が可能。）、リスト追加機能、完了タスクへの変更機能、タスク削除機能、タスク並び替え機能などがあります。<br>
        </p>
    </section>
    <section class="c-portfolio__ctn">
        <h2 class="c-ctn-title">使用言語・ツール</h2>
        <ul class="c-portfolio__ctn__list">
            <li class="c-portfolio__ctn__list__ele">・HTML</li>
            <li class="c-portfolio__ctn__list__ele">・CSS</li>
            <li class="c-portfolio__ctn__list__ele">・SCSS</li>
            <li class="c-portfolio__ctn__list__ele">・JavaScript</li>
            <li class="c-portfolio__ctn__list__ele">・Jquery</li>
            <li class="c-portfolio__ctn__list__ele">・React</li>
            <li class="c-portfolio__ctn__list__ele">・Redux</li>
            <li class="c-portfolio__ctn__list__ele">・Babel</li>
            <li class="c-portfolio__ctn__list__ele">・Gulp</li>
            <li class="c-portfolio__ctn__list__ele">・Webpack</li>
        </ul>
    </section>
    <section class="c-portfolio__ctn">
        <h2 class="c-ctn-title">開発期間</h2>
        <p>1月14日から1月26日 約13人日
            ※１日８時間計算です。</p>
    </section>
    <section class="c-portfolio__ctn">
        <h2 class="c-ctn-title">苦労した点</h2>
        <h3 class="c-portfolio__ctn__sub-title">・Reduxのデータフローの理解</h3>
        <p>
            こちらはポートフォリオの作成を進めていく中で、一番苦労した点です。<br>
            Reduxを構成している、Store、reducers、actions、components、containersそれぞれの役割を理解することに苦しみました。<br>
            またデータを更新する際に、上記のロジックを流れるデータフローを掴むことにも時間がかかりました。<br>
            あるデータに変更を加えるアクションを実行した際に、データを送る側の実装は成功しているが、データを受け取る側の実装が誤っていたために、<br>
            画面に変更が反映されなかったりなどのバグが多々、発生しました。<br>
            完成までに時間がかかりましたが、React、Reduxを使用した実装を通して、フレームワークを使用した要素の「追加」「取得」「編集」「削除」「アニメーション」の、
            理解が深まったと感じます。
        </p>

        <h3 class="c-portfolio__ctn__sub-title">・アクションによるコンポーネントの状態変化の管理</h3>
        <p>
            こちらは、タスクをクリックして編集モードから表示モードに切り替える処理の実装中に苦労した点です。<br>
            編集モード時かつタスクのタイトル入力時に、「シフト＋エンター」を押下で表示モードに切り替わる処理や、<br>
            編集モード時にカレンダーコンポーネントで日付選択後に、表示モードに切り替わる処理はスムーズに進めることができました。<br>
            しかし、選択しているタスク以外の箇所をクリックした際に編集モードだったタスクが表示モードに切り替わる処理と、<br>
            編集モードであるタスクA、表示モードのタスクBが存在する状態→タスクBをクリック→タスクAは表示モードに、タスクBは編集モードに切り替わるといった処理を、<br>
            実装することに時間がかかりました。<br>
            実装が完了するまでに、想定外の挙動をしている箇所を探し出したり、想定通りの挙動になるためにどのような修正を施すべきか頭を悩ませました。<br>
            （原因は、条件分岐の不足やイベントの伝搬などでした。。）<br>
            定義したアクションが発火することで、どのコンポーネントの状態がどのように変化するのか一つずつ追っていくことで、バグを解消できました。
        </p>
    </section>
    <section class="c-portfolio__btn-area">
        <a class="c-btn js-show-modal" href="https://xs0553.xsrv.jp/todoApp" target="_blank">ポートフォリオを見にいく</a>
    </section>
</main>