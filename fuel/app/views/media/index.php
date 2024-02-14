<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex,nofollow">
    <meta http-equiv="pragma" content="no-cache">
    <meta name="format-detection" content="telephone=no">
    <meta name="referrer" content="origin">
    <meta name="referrer" content="strict-origin-when-cross-origin">
    <link rel="canonical" href="https://www.felmat.net/" />
    <title>メディアログイン</title>
    <link rel="shortcut icon" href="/img/favicon.ico">
    <link rel="apple-touch-icon" href="/img/touch-icon-180x180.png">
    <link rel="icon" sizes="192x192" href="/img/touch-icon-192x192.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="public/assets/css/service/style.css" rel="stylesheet">
    <link href="public/assets/css/service/form.css" rel="stylesheet">
</head>

<body>
    <h2>メディアパートナー</h2>
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" href="#tab1">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab2">アフィリエイトレポート</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab3">広告取得</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab4">登録情報</a></li>
        <!-- Add more tabs if needed -->
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="tab1">
            <!-- Content for Tab 1 -->
        </div>
        <div class="tab-pane fade" id="tab2">
            <!-- Content for Tab 2 -->
        </div>
        <!-- Add more tab content if needed -->
    </div>
    <ul id="dashboard-menu" class="nav nav-list">
        <li><a href="https://admin.octopuspop.com/system/sponsor/notice/"><i
                    class="icon-bullhorn"></i><span>通知</span><span class="badge badge-info">9281</span></a></li>
        <li><a href="https://admin.octopuspop.com/system/sponsor/news/"><i
                    class="icon-info-sign"></i><span>ニュース</span></a></li>
        <li><a href="https://admin.octopuspop.com/system/sponsor/show"><i class="icon-group"></i>
                <span>広告主/代理店</span></a></li>
        <li><a href="https://admin.octopuspop.com/system/sponsor/campaign"><i class="icon-list-alt"></i>
                <span>キャンペーン</span></a>
        </li>
        <li class="active"><a href="https://admin.octopuspop.com/system/sponsor/ad"><i
                    class="icon-signal"></i><span>広告</span></a></li>
        <!-- メディアアカウントのみ、メニューに 「利用規約」を表示する -->
    </ul>
    <?php echo View::forge('advertiser/footer'); ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="/js/service/login.js"></script>
</body>

</html>