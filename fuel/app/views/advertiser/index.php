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
    <title>広告主ログイン</title>
    <link rel="shortcut icon" href="/img/favicon.ico">
    <link rel="apple-touch-icon" href="/img/touch-icon-180x180.png">
    <link rel="icon" sizes="192x192" href="/img/touch-icon-192x192.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="public/assets/css/service/style.css" rel="stylesheet">
    <link href="public/assets/css/service/form.css" rel="stylesheet">
</head>

<body>
    <h2>広告主</h2>
    <ul class="nav nav-tabs">
        <li class="nav-item"><a class="nav-link active" href="#tab1">HOME</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab2">アフィリエイトレポート</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab3">成果認証</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab4">メディア提携</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab5">原稿</a></li>
        <li class="nav-item"><a class="nav-link" href="#tab6" <?php //echo Uri::create('advertiser/regist'); ?>>登録情報</a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane fade show active" id="tab1">
            <h3>お知らせ</h3>
            <p>This is the content for Tab 1.</p>
        </div>
        <div class="tab-pane fade" id="tab2">
            <h3>サイト総合の成績を表示します。</h3>
            <p>This is the content for Tab 2.</p>
            <div class="grid-area">
                <table id="list" class="scroll" cellpadding="0" cellspacing="0"></table>
                <div id="pgrps1" class="scroll" style="text-align:center;"></div>
            </div>
            <?= 'hoge' //render('fuel/app/views/common/dialog/limit_column_modal'); ?>
            <script type="text/html" id="ignore_column">
                <?php if (isset($admin_option->ignore_column) && isset($admin_option->ignore_column->show))
                    echo json_encode($admin_option->ignore_column->show); ?>
            </script>
        </div>
        <div class="tab-pane fade" id="tab6">
            <?php echo View::forge('advertiser/regist'); ?>
            <div class="row-fluid">
                <?php echo Form::label('※会社名'); ?>

                <?php echo Form::input('CNAME1', '株式会社メディアグローバルステージ'); ?>
                <div class="control-group">
                    <label class="control-label" for="form_mail">メールアドレス</label>
                    <div class="controls">
                        <input class="span4" required="required" name="mail" value="OCTOPUS283@arush.jp" type="text"
                            id="form_mail">
                    </div>
                </div>
                <!-- <label for="cname">※会社名</label><input type="text" id="cname" name="CNAME1" value="株式会社メディアグローバルステージ">
                <label for="pname">担当者名</label><input type="text" id="pname" name="PNAME1">
                <label for="zip">※郵便番号</label><input type="text" id="zip" name="ZIPNO"><br> -->
                <!-- <span class="f11">* 例）112-3333</span> -->
            </div>
            <table width="75%" border="1" cellspacing="0" cellpadding="0">
                <tr>
                    <td>クライアントコード</td>
                    <td>
                        <?php echo $account->id; ?>
                    </td>
                </tr>
                <tr>
                    <td>※メールアドレス</td>
                    <td><input type="text" name="example_input" value="<?php echo $account->mail; ?>"></td>
                </tr>
                <tr>
                    <td>※会社名</td>
                    <td><input type="text" name="example_input" value="<?php echo $account->name; ?>"></td>
                </tr>
                <tr>
                    <td>担当者名</td>
                    <td><input type="text" name="example_input" value="<?php echo $account->staff; ?>"></td>
                </tr>
                <tr>
                    <td>郵便番号</td>
                    <td><input type="text" name="example_input" value="<?php echo $account->post_code; ?>">*
                        例）112-3333</span></td>
                </tr>
                <tr>
                    <td>住所</td>
                    <td><input type="text" name="example_input" value="<?php echo $account->address; ?>">*
                        例）東京都千代田区1-1-1</span></td>
                </tr>
                <tr>
                    <td>電話番号</td>
                    <td><input type="text" name="example_input" value="<?php echo $account->tel; ?>">*
                        例）03-1111-1111</span></td>
                </tr>
                <tr>
                    <td>FAX番号</td>
                    <td><input type="text" name="example_input" value="<?php echo $account->fax; ?>">*
                        例）03-1111-1111</span></td>
                </tr>
            </table>
            <div class="form-actions">
                <button class="btn btn-primary" name="submit">保存</button>
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
            $(target).addClass('active').removeClass('fade').addClass('show');
            // イベントのデフォルトの動作を停止する
            return false;
        });
    });
</script>