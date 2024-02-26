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

    <table width="75%" border="1" cellspacing="0" cellpadding="0">
        <tr><td>クライアントコード</td><td><?php echo $account->id; ?></td></tr>
        <tr><td>※メールアドレス</td><td><input type="text" name="example_input" value="<?php echo $account->mail; ?>"></td></tr>
        <tr><td>※会社名</td><td><input type="text" name="example_input" value="<?php echo $account->name; ?>"></td></tr>
        <tr><td>担当者名</td><td><input type="text" name="example_input" value="<?php echo $account->staff; ?>"></td></tr>
        <tr><td>郵便番号</td><td><input type="text" name="example_input" value="<?php echo $account->post_code; ?>">* 例）112-3333</span></td></tr>
        <tr><td>住所</td><td><input type="text" name="example_input" value="<?php echo $account->address; ?>">* 例）東京都千代田区1-1-1</span></td></tr>
        <tr><td>電話番号</td><td><input type="text" name="example_input" value="<?php echo $account->tel; ?>">* 例）03-1111-1111</span></td></tr>
        <tr><td>FAX番号</td><td><input type="text" name="example_input" value="<?php echo $account->fax; ?>">* 例）03-1111-1111</span></td></tr>
    </table>
    <div class="form-actions">
        <button class="btn btn-primary" name="submit">保存</button>
    </div>


    <?php echo View::forge('system/footer'); ?>
</body>
</html>