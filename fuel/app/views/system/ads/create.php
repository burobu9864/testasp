<?php echo View::forge('system/header'); ?>
<body>
    <div class="container">
        <h2>管理者-広告一覧-追加</h2>
        <?php echo View::forge('system/tabmenu'); ?>

        <table class="table table-bordered">
            <tr><td><?= Form::label(__('ads.label.id'), 'id', ['class' => 'control-label']); ?></td><td><?php echo $account->id; ?></td></tr>
            <tr><td><?php echo __('ads.label.name'); ?></td><td><input type="text" name="example_input" value="<?php echo $account->name; ?>"></td></tr>
            <tr><td><?php echo __('ads.label.status'); ?></td><td><select name="example_input"><option value="">ON</option><option value="">OFF</option></select></td></tr>
            <tr><td><?php echo __('ads.label.advertiser_name'); ?></td><td><select name="example_input"><option value="">[1]テスト広告者]</option></select></td></tr>
            <tr><td><?php echo __('ads.label.device'); ?></td><td><select name="example_input"><option value="">SP、PC、SPPC</option></select></td></tr>
            <tr>
                <td><?php echo __('ads.label.ad_genre'); ?></td>
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
            <tr>
                <td><?php echo __('ads.label.display_media'); ?></td>
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
            <tr><td><?php echo __('ads.label.deliver_url_pc'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?php echo __('ads.label.deliver_url_sp'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?php echo __('ads.label.deliver_term'); ?><</td><td><input type="text" name="example_input" value="2024-01-01 00:00:00 ~ 2030-12-31-23:59:59"></td></tr>
            <tr><td><?php echo __('ads.label.partner_approval'); ?></td><td><select name="example_input"><option value="">自動</option><option value="">手動</option></select></td></tr>
            <tr><td><?php echo __('ads.label.result_approval'); ?></td><td><select name="example_input"><option value="">自動</option><option value="">手動</option></select>※『手動』の場合、60日の間に承認作業が行われないと成果は自動承認されます。</td></tr>
            <tr><td><?php echo __('ads.label.ip_restrect'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?php echo __('ads.label.referrer'); ?></td><td><select name="example_input"><option value="">無効</option><option value="">収集</option></select></td></tr>
            <tr>
                <td><?php echo __('ads.label.result_point1'); ?></td>
                <td>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        成果件数
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        購入金額連動
                                    </label>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        クリック
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td><?php echo __('ads.label.result_point2'); ?></td>
                <td>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        購入金額連動
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            <tr><td><?php echo __('ads.label.result_multi'); ?></td><td><select name="example_input"><option value="">不可</option><option value="">可</option></select></td></tr>
            <tr>
                <td><?php echo __('ads.label.ad_category'); ?></td>
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
            <tr><td><?php echo __('ads.label.result_point_upper1'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?php echo __('ads.label.result_point_upper2'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?php echo __('ads.label.result_point_reward1'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?php echo __('ads.label.result_point_reward2'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?php echo __('ads.label.result_point_amount1'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?php echo __('ads.label.result_point_amount2'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?php echo __('ads.label.reguration'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?php echo __('ads.label.ad_introduction'); ?></td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td><?php echo __('ads.label.creative'); ?></td><td><button type="button" class="btn btn-success">アップロード</button></td></tr>
            <tr><td><?php echo __('ads.label.collabo_image'); ?></td><td><select name="example_input"><option value="">不可</option><option value="">可</option></select></td></tr>
        </table>
        <div class="form-group">
            <button class="btn btn-primary" name="submit">保存</button>
        </div>
    </div>
    <?php echo View::forge('system/footer'); ?>
</body>
</html>