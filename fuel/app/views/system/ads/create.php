<?= View::forge('system/header'); ?>
<body>
    <div class="container">
        <h2>管理者-広告一覧-追加</h2>
        <?= View::forge('system/tabmenu'); ?>

        <table class="table table-bordered">
            <tr><td><?= Form::label(__('ads.label.id'), 'id', ['class' => 'control-label']); ?></td><td><?= $account->id; ?></td></tr>
            <tr><td><?= __('ads.label.name'); ?></td><td><input type="text" name="example_input" value="<?= $account->name; ?>"></td></tr>
            <tr><td><?= __('ads.label.status'); ?></td><td><?= Form::select('status', '', __('ads.select.status'), ['class' => 'where input-medium']); ?></td></tr>
            <tr><td><?= __('ads.label.advertiser_name'); ?></td><td><select name="example_input"><option value="">[1]テスト広告者]</option></select></td></tr>
            <tr><td><?= __('ads.label.device'); ?></td><td><?= Form::select('device', '', __('ads.select.device'), ['class' => 'where input-medium']); ?></td></tr>
            <tr>
                <td><?= __('ads.label.ad_genre'); ?></td>
                <td>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <label class="checkbox inline"><?= Form::checkbox('box1', '', false, ['class' => 'inline search-param']); ?> <?= __('sites.checkbox.category.box1') ?></label>
                                    <label class="checkbox inline"><?= Form::checkbox('box2', '', false, ['class' => 'inline search-param']); ?> <?= __('sites.checkbox.category.box2') ?></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td><?= __('ads.label.display_media'); ?></td>
                <td>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <label class="checkbox inline"><?= Form::checkbox('box1', '', false, ['class' => 'inline search-param']); ?> <?= __('sites.checkbox.category.box1') ?></label>
                                    <label class="checkbox inline"><?= Form::checkbox('box2', '', false, ['class' => 'inline search-param']); ?> <?= __('sites.checkbox.category.box2') ?></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr><td><?= __('ads.label.deliver_url_pc'); ?></td><td><?= Form::input('deliver_url_pc', '', ['class' => 'input-xxlarge']); ?></td></tr>
            <tr><td><?= __('ads.label.deliver_url_sp'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?= __('ads.label.deliver_term'); ?></td><td><input type="text" name="example_input" value="2024-01-01 00:00:00 ~ 2030-12-31-23:59:59"></td></tr>
            <tr><td><?= __('ads.label.partner_approval'); ?></td><td><?= Form::select('partner_approval', '', __('ads.select.partner_approval'), ['class' => 'where input-medium']); ?></td></tr>
            <tr><td><?= __('ads.label.result_approval'); ?></td><td><?= Form::select('result_approval', '', __('ads.select.result_approval'), ['class' => 'where input-medium']); ?><?= __('ads.help.result_approval'); ?></td></tr>
            <tr><td><?= __('ads.label.ip_restrect'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?= __('ads.label.referrer'); ?></td><td><?= Form::select('result_approval', '', __('ads.select.referrer'), ['class' => 'where input-medium']); ?></td></tr>
            <tr>
                <td><?= __('ads.label.result_point1'); ?></td>
                <td>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <label class="checkbox inline"><?= Form::checkbox('box1', '', false, ['class' => 'inline search-param']); ?> <?= __('ads.checkbox.result_point1.result_count') ?></label>
                                    <label class="checkbox inline"><?= Form::checkbox('box2', '', false, ['class' => 'inline search-param']); ?> <?= __('ads.checkbox.result_point1.link_amount') ?></label>
                                    <label class="checkbox inline"><?= Form::checkbox('box2', '', false, ['class' => 'inline search-param']); ?> <?= __('ads.checkbox.result_point1.click') ?></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td><?= __('ads.label.result_point2'); ?></td>
                <td>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <label class="checkbox inline"><?= Form::checkbox('box2', '', false, ['class' => 'inline search-param']); ?> <?= __('ads.checkbox.result_point2.link_amount') ?></label>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr><td><?= __('ads.label.result_multi'); ?></td><td><?= Form::select('result_multi', '', Lang::get('ads.select.result_multi'), ['class' => 'where input-medium']); ?></td></tr>
            <tr>
                <td><?= __('ads.label.ad_category'); ?></td>
                <td>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        adminで登録したカテゴリを選択
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr><td><?= __('ads.label.result_point_upper1'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?= __('ads.label.result_point_upper2'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?= __('ads.label.result_point_reward1'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?= __('ads.label.result_point_reward2'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?= __('ads.label.result_point_amount1'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?= __('ads.label.result_point_amount2'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?= __('ads.label.reguration'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?= __('ads.label.ad_introduction'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?= __('ads.label.creative'); ?></td><td><button type="button" class="btn btn-success">アップロード</button></td></tr>
            <tr><td><?= __('ads.label.collabo_image'); ?></td><td><?= Form::select('collabo_image', '', Lang::get('ads.select.collabo_image'), ['class' => 'where input-medium']); ?></td></tr>
        </table>
        <div class="form-group">
            <button class="btn btn-primary" name="submit">保存</button>
        </div>
    </div>
    <?= View::forge('system/footer'); ?>
</body>
</html>