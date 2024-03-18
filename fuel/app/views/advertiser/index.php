<?php echo View::forge('advertiser/header'); ?>
<body>
    <div class="container">
        <h2>広告主</h2>
        <?php echo View::forge('advertiser/tabmenu'); ?>

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
        <?php echo View::forge('advertiser/footer'); ?>
    </div>
</body>

</html>
