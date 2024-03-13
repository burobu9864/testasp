<?= View::forge('system/header'); ?>
<body>
    <div class="container">
        <h2>管理者-サイト一覧-追加</h2>
        <?= View::forge('system/tabmenu'); ?>

        <table class="table table-bordered">
            <tr><td><?= __('sites.label.id'); ?></td><td><?= $account->id; ?></td></tr>
            <tr><td><?= __('sites.label.mail'); ?></td><td><input type="text" name="example_input" value="<?= $account->mail; ?>"></td></tr>
            <tr><td><?= __('sites.label.name'); ?></td><td><input type="text" name="example_input" value="<?= $account->name; ?>"></td></tr>
            <tr><td><?= __('sites.label.site_attr'); ?></td><td><?= Form::select('site_attr', '', __('sites.select.site_attr'), ['class' => 'where input-medium']); ?></td></tr>
            <tr><td><?= __('sites.label.sns'); ?></td><td><?= Form::select('sns', '', __('sites.select.sns'), ['class' => 'where input-medium']); ?></td></tr>
            <tr><td><?= __('sites.label.icon'); ?></td><td><button type="button" class="btn btn-success">アップロード</button></td></tr>
            <tr>
                <td><?= __('sites.label.category'); ?></td>
                <td>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <label class="checkbox inline"><?= Form::checkbox('box1', '', false, ['class' => 'inline search-param']); ?> <?= __('sites.checkbox.category.box1') ?></label>
                                <label class="checkbox inline"><?= Form::checkbox('box2', '', false, ['class' => 'inline search-param']); ?> <?= __('sites.checkbox.category.box2') ?></label>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Default checkbox
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        Checked checkbox
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr><td><?= __('sites.label.postback_variable'); ?></td><td><input type="text" name="example_input" value="<?= $account->name; ?>"></td></tr>
            <tr><td><?= __('sites.label.postback_url'); ?></td><td><input type="text" name="example_input" value="<?= $account->name; ?>"></td></tr>
        </table>
        <div class="form-group">
            <button class="btn btn-primary" name="submit">保存</button>
        </div>
    </div>
    <?= View::forge('system/footer'); ?>
</body>
</html>