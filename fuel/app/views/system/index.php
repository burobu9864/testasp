<?php echo View::forge('system/header'); ?>
<body>
    <div class="container">
        <h2>管理者</h2>
        <?php echo View::forge('system/tabmenu'); ?>

        <div class="tab-content">
            <div id="advertisers" class="tab-pane active show">
                <div class="pull-right">
                    <div class="btn-group">
                        <a class="btn btn-info csv" href="javascript:;"><i class="icon-download-alt tt" title="CSVダウンロード"></i> CSV</a>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-success" href="system/advertisers/create">広告主の追加</a>
                    </div>
                </div>
                <?php echo View::forge('system/advertisers/list'); ?>
            </div>
            <div id="medias" class="tab-pane fade">
                <div class="pull-right">
                    <div class="btn-group">
                        <a class="btn btn-info csv" href="javascript:;"><i class="icon-download-alt tt" title="CSVダウンロード"></i> CSV</a>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-success" href="system/medias/create">メディアの追加</a>
                    </div>
                </div>
                <?php echo View::forge('system/medias/list'); ?>
            </div>
            <div id="ads" class="tab-pane fade">
                <div class="pull-right">
                    <div class="btn-group">
                        <a class="btn btn-info csv" href="javascript:;"><i class="icon-download-alt tt" title="CSVダウンロード"></i> CSV</a>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-success" href="system/ads/create">広告の追加</a>
                    </div>
                </div>
                <?php echo View::forge('system/ads/list'); ?>
            </div>
            <div id="sites" class="tab-pane fade">
                <div class="pull-right">
                    <div class="btn-group">
                        <a class="btn btn-info csv" href="javascript:;"><i class="icon-download-alt tt" title="CSVダウンロード"></i> CSV</a>
                    </div>
                    <div class="btn-group">
                        <a class="btn btn-success" href="system/sites/create">サイトの追加</a>
                    </div>
                </div>
                <?php echo View::forge('system/sites/list'); ?>
            </div>
        </div>
    </div>
    <?php echo View::forge('system/footer'); ?>
</body>
</html>