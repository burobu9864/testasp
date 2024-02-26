<?php echo View::forge('system/header'); ?>
<body>
    <div class="container">
        <h2>管理者</h2>
        <?php echo View::forge('system/tabmenu'); ?>

        <div class="tab-content">
            <div id="advertisers" class="tab-pane active show">
                <?php echo View::forge('system/advertisers/list'); ?>
            </div>
            <div id="medias" class="tab-pane fade">
                <?php echo View::forge('system/medias/list'); ?>
            </div>
            <div id="ads" class="tab-pane fade">
                <?php echo View::forge('system/ads/list'); ?>
            </div>
            <div id="sites" class="tab-pane fade">
                <?php echo View::forge('system/sites/list'); ?>
            </div>
        </div>
    </div>
    <?php echo View::forge('system/footer'); ?>
</body>
</html>