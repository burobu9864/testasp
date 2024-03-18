<?php echo View::forge('media/header'); ?>
<body>
    <div class="container">
        <h2>メディアパートナー</h2>
        <?php echo View::forge('media/tabmenu'); ?>

        <div class="tab-content">
            <div id="home" class="tab-pane active">
                <?php echo View::forge('media/home/index'); ?>
            </div>
            <div id="report" class="tab-pane fade"></div>
                <?php //echo View::forge('media/report/index', ['account' => $account]); ?>
            <div id="tab3" class="tab-pane fade"></div>
            <div id="regist" class="tab-pane fade">
                <?php echo View::forge('media/regist/index', ['account' => $account]); ?>
            </div>
        </div>
        <?php echo View::forge('media/footer'); ?>
    </div>
</body>

</html>