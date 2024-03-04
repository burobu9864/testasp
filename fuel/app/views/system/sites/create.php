<?php echo View::forge('system/header'); ?>
<body>
    <div class="container">
        <h2>管理者-サイト一覧-追加</h2>
        <?php echo View::forge('system/tabmenu'); ?>

        <table class="table table-bordered">
            <tr><td><?php echo __('sites.label.id'); ?></td><td><?php echo $account->id; ?></td></tr>
            <tr><td><?php echo __('sites.label.mail'); ?></td><td><input type="text" name="example_input" value="<?php echo $account->mail; ?>"></td></tr>
            <tr><td><?php echo __('sites.label.name'); ?></td><td><input type="text" name="example_input" value="<?php echo $account->name; ?>"></td></tr>
            <tr><td><?php echo __('sites.label.site_attr'); ?></td><td><select name="example_input"><option value="">SNS</option><option value="">ウェブサイト</option></select></td></tr>
            <tr><td><?php echo __('sites.label.sns'); ?></td><td><select name="example_input"><option value="">X、Instagram、Facebook、TikTok、YOUTUBE、ニコニコ動画、その他</option></select></td></tr>
            <tr><td><?php echo __('sites.label.icon'); ?></td><td><button type="button" class="btn btn-success">アップロード</button></td></tr>
            <tr>
                <td><?php echo __('sites.label.category'); ?></td>
                <td>
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
            <tr><td><?php echo __('sites.label.postback_variable'); ?></td><td><input type="text" name="example_input" value="<?php echo $account->name; ?>"></td></tr>
            <tr><td><?php echo __('sites.label.postback_url'); ?></td><td><input type="text" name="example_input" value="<?php echo $account->name; ?>"></td></tr>
        </table>
        <div class="form-group">
            <button class="btn btn-primary" name="submit">保存</button>
        </div>
    </div>
    <?php echo View::forge('system/footer'); ?>
</body>
</html>