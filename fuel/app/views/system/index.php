<?php echo View::forge('system/header'); ?>
<body>
    <h2>管理者</h2>
    <ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active show" href="#advertisers">広告主一覧</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#medias">メディア一覧</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#ads">広告一覧</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#sites">サイト一覧</a>
        </li>
        <!-- Add more tabs if needed -->
    </ul>

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

    <?php echo View::forge('system/footer'); ?>
</body>
</html>