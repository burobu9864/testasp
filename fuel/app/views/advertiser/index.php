<?php echo View::forge('advertiser/header'); ?>

<body>
    <h2>広告主</h2>
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" href="#tab1">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab2">アフィリエイトレポート</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab3">成果認証</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab4">メディア提携</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab5">原稿</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab6" <?php //echo Uri::create('advertiser/regist'); ?>>登録情報</a></li>
    </ul>
    <div class="tab-content">
        <div id="tab1" class="tab-pane active">
            <?php echo View::forge('advertiser/home/index'); ?>
        </div>
        <div id="tab2" class="tab-pane fade"></div>
            <?php echo View::forge('advertiser/report/index', ['account' => $account]); ?>
        <div id="tab3" class="tab-pane fade"></div>
        <div id="tab4" class="tab-pane fade"></div>
        <div id="tab5" class="tab-pane fade"></div>
        <div id="tab6" class="tab-pane fade">
            <?php echo View::forge('advertiser/regist/index', ['account' => $account]); ?>
        </div>
    </div>

    </div>
    <?php echo View::forge('advertiser/footer'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="/js/service/login.js"></script>
</body>

</html>
<script>
    $(document).ready(function () {
        // タブがクリックされたときの処理
        $('.nav-link').on('click', function () {
            // すべてのタブコンテンツからactive, showクラスを削除し、fadeクラスを追加
            $('.tab-pane').removeClass('active show').addClass('fade');
            // クリックされたタブのhref属性から対応するタブコンテンツを取得
            var target = $(this).attr('href');
            // 対応するタブコンテンツにactiveクラスを追加し、fadeクラスを削除
            $(target).addClass('active show').removeClass('fade');
            // イベントのデフォルトの動作を停止する
            return false;
        });
    });
</script>