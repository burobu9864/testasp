<ul class="nav nav-tabs">
    <li class="nav-item"><a class="nav-link active" href="#home">HOME</a></li>
    <li class="nav-item"><a class="nav-link" href="#report">アフィリエイトレポート</a></li>
    <li class="nav-item"><a class="nav-link" href="#tab3">成果認証</a></li>
    <li class="nav-item"><a class="nav-link" href="#tab4">メディア提携</a></li>
    <li class="nav-item"><a class="nav-link" href="#tab5">原稿</a></li>
    <li class="nav-item"><a class="nav-link" href="#regist">登録情報</a></li>
</ul>
<div class="tab-content">
    <div id="home" class="tab-pane active">
        <?php echo View::forge('advertiser/home/index'); ?>
    </div>
    <div id="report" class="tab-pane fade"></div>
        <?php echo View::forge('advertiser/report/index', ['account' => $account]); ?>
    <div id="tab3" class="tab-pane fade"></div>
    <div id="tab4" class="tab-pane fade"></div>
    <div id="tab5" class="tab-pane fade"></div>
    <div id="regist" class="tab-pane fade">
        <?php echo View::forge('advertiser/regist/index', ['account' => $account]); ?>
    </div>
</div>