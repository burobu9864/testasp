<?php echo View::forge('advertiser/header'); ?>

<body>
    <h2>広告主</h2>
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" href="#tab1">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab2">アフィリエイトレポート</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab3">成果認証</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab4">メディア提携</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab5">原稿</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab6">登録情報</a></li>
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
</body>

<?php echo View::forge('advertiser/footer'); ?>

</html>
