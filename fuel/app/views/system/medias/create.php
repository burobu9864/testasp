<?php echo View::forge('system/header'); ?>
<body>
    <div class="container">
        <h2>管理者-メディア一覧-追加</h2>
        <?php echo View::forge('system/tabmenu'); ?>

        <table class="table table-bordered">
            <tr><td>メディアID</td><td><?php echo $account->id; ?></td></tr>
            <tr><td>※メールアドレス</td><td><input type="text" name="example_input" value="<?php echo $account->mail; ?>"></td></tr>
            <tr><td>※パスワード</td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td>※会社名</td><td><input type="text" name="example_input" value="<?php echo $account->name; ?>"></td></tr>
            <tr><td>郵便番号</td><td><input type="text" name="example_input" value="<?php echo $account->post_code; ?>">* 例）112-3333</span></td></tr>
            <tr><td>住所</td><td><input type="text" name="example_input" value="<?php echo $account->address; ?>">* 例）東京都千代田区1-1-1</span></td></tr>
            <tr><td>担当者名</td><td><input type="text" name="example_input" value="<?php echo $account->staff; ?>"></td></tr>
            <tr><td>電話番号</td><td><input type="text" name="example_input" value="<?php echo $account->tel; ?>">* 例）03-1111-1111</span></td></tr>
            <tr><td>金融機関登録</td><td><input type="text" name="example_input" value="<?php echo $account->fax; ?>">* 例）03-1111-1111</span></td></tr>
            <tr><td>新規広告のお知らせ</td><td><select name="example_input"><option value="">受け取る</option><option value="">受け取らない</option></select></td></tr>
        </table>
        <div class="form-group">
            <button class="btn btn-primary" name="submit">保存</button>
        </div>
    </div>
    <?php echo View::forge('system/footer'); ?>
</body>
</html>