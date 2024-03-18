<?= View::forge('system/header'); ?>
<body>
    <div class="container">
        <h2>管理者-広告主一覧-追加</h2>
        <?= View::forge('system/tabmenu'); ?>

        <table class="table table-bordered">
            <tr><td><?= __('advertisers.label.id'); ?></td><td><?= $account->id; ?></td></tr>
            <tr><td><?= __('advertisers.label.mail'); ?></td><td><input type="text" name="example_input" value="<?= $account->mail; ?>"></td></tr>
            <tr><td><?= __('advertisers.label.password'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?= __('advertisers.label.rep'); ?></td><td><select name="example_input"><option value="">代理店</option></select></td></tr>
            <tr><td><?= __('advertisers.label.name'); ?></td><td><input type="text" name="example_input" value="<?= $account->name; ?>"></td></tr>
            <tr><td><?= __('advertisers.label.post_code'); ?></td><td><input type="text" name="example_input" value="<?= $account->post_code; ?>"><?= __('advertisers.help.post_code'); ?></span></td></tr>
            <tr><td><?= __('advertisers.label.address'); ?></td><td><input type="text" name="example_input" value="<?= $account->address; ?>"><?= __('advertisers.help.address'); ?></span></td></tr>
            <tr><td><?= __('advertisers.label.your_staff'); ?></td><td><input tyåpe="text" name="example_input" value="<?= $account->staff; ?>"></td></tr>
            <tr><td><?= __('advertisers.label.tel'); ?></td><td><input type="text" name="example_input" value="<?= $account->tel; ?>"><?= __('advertisers.help.tel'); ?></span></td></tr>
            <tr><td><?= __('advertisers.label.our_staff'); ?></td><td><select name="example_input"><option value="">テスト</option></select></td></tr>
        </table>
        <div class="form-group">
            <button class="btn btn-primary" name="submit">保存</button>
        </div>
    </div>
    <?= View::forge('system/footer'); ?>
</body>
</html>