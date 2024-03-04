<?php echo View::forge('system/header'); ?>
<body>
    <div class="container">
        <h2>管理者-メディア一覧-追加</h2>
        <?php echo View::forge('system/tabmenu'); ?>

        <table class="table table-bordered">
            <tr><td><?php echo __('medias.label.id'); ?></td><td><?php echo $account->id; ?></td></tr>
            <tr><td><?php echo __('medias.label.mail'); ?></td><td><input type="text" name="example_input" value="<?php echo $account->mail; ?>"></td></tr>
            <tr><td><?php echo __('medias.label.password'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?php echo __('medias.label.name'); ?></td><td><input type="text" name="example_input" value="<?php echo $account->name; ?>"></td></tr>
            <tr><td><?php echo __('medias.label.post_code'); ?></td><td><input type="text" name="example_input" value="<?php echo $account->post_code; ?>">* 例）112-3333</span></td></tr>
            <tr><td><?php echo __('medias.label.address'); ?></td><td><input type="text" name="example_input" value="<?php echo $account->address; ?>">* 例）東京都千代田区1-1-1</span></td></tr>
            <tr><td><?php echo __('medias.label.your_staff'); ?></td><td><input type="text" name="example_input" value="<?php echo $account->staff; ?>"></td></tr>
            <tr><td><?php echo __('medias.label.tel'); ?></td><td><input type="text" name="example_input" value="<?php echo $account->tel; ?>">* 例）03-1111-1111</span></td></tr>
            <tr><td><?php echo __('medias.label.bank'); ?></td><td><input type="text" name="example_input" value="<?php echo $account->fax; ?>">* 例）03-1111-1111</span></td></tr>
            <tr><td><?php echo __('medias.label.receive_notice'); ?></td><td><select name="example_input"><option value="">受け取る</option><option value="">受け取らない</option></select></td></tr>
        </table>
        <div class="form-group">
            <button class="btn btn-primary" name="submit">保存</button>
        </div>
    </div>
    <?php echo View::forge('system/footer'); ?>
</body>
</html>