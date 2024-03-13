<?= View::forge('system/header'); ?>
<body>
    <div class="container">
        <h2>管理者-メディア一覧-追加</h2>
        <?= View::forge('system/tabmenu'); ?>

        <table class="table table-bordered">
            <tr><td><?= __('medias.label.id'); ?></td><td><?= $account->id; ?></td></tr>
            <tr><td><?= __('medias.label.mail'); ?></td><td><input type="text" name="example_input" value="<?= $account->mail; ?>"></td></tr>
            <tr><td><?= __('medias.label.password'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?= __('medias.label.name'); ?></td><td><input type="text" name="example_input" value="<?= $account->name; ?>"></td></tr>
            <tr><td><?= __('medias.label.post_code'); ?></td><td><input type="text" name="example_input" value="<?= $account->post_code; ?>">* 例）112-3333</span></td></tr>
            <tr><td><?= __('medias.label.address'); ?></td><td><input type="text" name="example_input" value="<?= $account->address; ?>">* 例）東京都千代田区1-1-1</span></td></tr>
            <tr><td><?= __('medias.label.your_staff'); ?></td><td><input type="text" name="example_input" value="<?= $account->staff; ?>"></td></tr>
            <tr><td><?= __('medias.label.tel'); ?></td><td><input type="text" name="example_input" value="<?= $account->tel; ?>">* 例）03-1111-1111</span></td></tr>
            <tr><td><?= __('medias.label.bank'); ?></td><td><input type="text" name="example_input" value="<?= $account->fax; ?>">* 例）03-1111-1111</span></td></tr>
            <tr><td><?= __('medias.label.receive_notice'); ?></td><td><?= Form::select('receive_notice', '', __('medias.select.receive_notice'), ['class' => 'where input-medium']); ?></td></tr>
        </table>
        <div class="form-group">
            <button class="btn btn-primary" name="submit">保存</button>
        </div>
    </div>
    <?= View::forge('system/footer'); ?>
</body>
</html>