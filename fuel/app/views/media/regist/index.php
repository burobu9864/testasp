<table class="table table-bordered">
    <tr><td><?php echo __('regist.label.id'); ?></td><td><?php echo $account->id; ?></td></tr>
    <tr><td><?php echo __('regist.label.mail'); ?></td><td><input type="text" name="example_input" value="<?php echo $account->mail; ?>"></td></tr>
    <tr><td><?php echo __('regist.label.password'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
    <tr><td><?php echo __('regist.label.rep'); ?></td><td><select name="example_input"><option value="">代理店</option></select></td></tr>
    <tr><td><?php echo __('regist.label.name'); ?></td><td><input type="text" name="example_input" value="<?php echo $account->name; ?>"></td></tr>
    <tr><td><?php echo __('regist.label.post_code'); ?></td><td><input type="text" name="example_input" value="<?php echo $account->post_code; ?>">* 例）112-3333</span></td></tr>
    <tr><td><?php echo __('regist.label.address'); ?></td><td><input type="text" name="example_input" value="<?php echo $account->address; ?>">* 例）東京都千代田区1-1-1</span></td></tr>
    <tr><td><?php echo __('regist.label.your_staff'); ?></td><td><input type="text" name="example_input" value="<?php echo $account->staff; ?>"></td></tr>
    <tr><td><?php echo __('regist.label.tel'); ?></td><td><input type="text" name="example_input" value="<?php echo $account->tel; ?>">* 例）03-1111-1111</span></td></tr>
    <tr><td><?php echo __('regist.label.our_staff'); ?></td><td><select name="example_input"><option value="">テスト</option></select></td></tr>
</table>
<div class="form-group">
    <button class="btn btn-primary" name="submit">保存</button>
</div>