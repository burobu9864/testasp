<?php echo View::forge('system/header'); ?>
<body>
    <div class="container">
        <h2>管理者-広告一覧-追加</h2>
        <?php echo View::forge('system/tabmenu'); ?>

        <table class="table table-bordered">
            <tr><td>広告ID</td><td><?php echo $account->id; ?></td></tr>
            <tr><td>※広告名</td><td><input type="text" name="example_input" value="<?php echo $account->name; ?>"></td></tr>
            <tr><td>ステータス</td><td><select name="example_input"><option value="">ON</option><option value="">OFF</option></select></td></tr>
            <tr><td>広告主</td><td><select name="example_input"><option value="">[1]テスト広告者]</option></select></td></tr>
            <tr><td>デバイス</td><td><select name="example_input"><option value="">SP、PC、SPPC</option></select></td></tr>
            <tr>
                <td>広告ジャンル</td>
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
                <td>表示メディア</td>
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
            <tr><td>配信URL_PC</td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td>配信URL_SP</td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td>配信期間</td><td><input type="text" name="example_input" value="2024-01-01 00:00:00 ~ 2030-12-31-23:59:59"></td></tr>
            <tr><td>パートナー承認</td><td><select name="example_input"><option value="">自動</option><option value="">手動</option></select></td></tr>
            <tr><td>成果承認</td><td><select name="example_input"><option value="">自動</option><option value="">手動</option></select>※『手動』の場合、60日の間に承認作業が行われないと成果は自動承認されます。</td></tr>
            <tr><td>成果IP制限</td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td>リファラー収集</td><td><select name="example_input"><option value="">無効</option><option value="">収集</option></select></td></tr>
            <tr>
                <td>成果ポイント①</td>
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
                <td>成果ポイント②</td>
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
            <tr><td>複数成果</td><td><select name="example_input"><option value="">不可</option><option value="">可</option></select></td></tr>
            <tr><td>成果ポイント①上限</td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td>成果ポイント②上限</td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td>成果ポイント①報酬_グロス</td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td>成果ポイント②報酬_グロス</td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td>成果ポイント①報酬_ネット</td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td>成果ポイント②報酬_ネット</td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td>レギュレーション</td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td>広告紹介</td><td><input type="text" name="example_input" value=""></td></tr>
            <tr><td>クリエイティブ</td><td><button type="button" class="btn btn-success">アップロード</button></td></tr>
            <tr><td>コラボ画像の使用</td><td><select name="example_input"><option value="">不可</option><option value="">可</option></select></td></tr>
        </table>
        <div class="form-group">
            <button class="btn btn-primary" name="submit">保存</button>
        </div>
    </div>
    <?php echo View::forge('system/footer'); ?>
</body>
</html>