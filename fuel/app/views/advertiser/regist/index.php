<div class="tab-pane fade" id="tab6">
            <?php echo View::forge('advertiser/regist'); ?>
            <div class="row-fluid">
                <?php echo Form::label('※会社名'); ?>

                <?php echo Form::input('CNAME1', '株式会社メディアグローバルステージ'); ?>
                <div class="control-group">
                    <label class="control-label" for="form_mail">メールアドレス</label>
                    <div class="controls">
                        <input class="span4" required="required" name="mail" value="OCTOPUS283@arush.jp" type="text"
                            id="form_mail">
                    </div>
                </div>
                <!-- <label for="cname">※会社名</label><input type="text" id="cname" name="CNAME1" value="株式会社メディアグローバルステージ">
                <label for="pname">担当者名</label><input type="text" id="pname" name="PNAME1">
                <label for="zip">※郵便番号</label><input type="text" id="zip" name="ZIPNO"><br> -->
                <!-- <span class="f11">* 例）112-3333</span> -->
            </div>
            <table width="75%" border="1" cellspacing="0" cellpadding="0">
                <tr>
                    <td>クライアントコード</td>
                    <td>
                        <?php echo $account->id; ?>
                    </td>
                </tr>
                <tr>
                    <td>※メールアドレス</td>
                    <td><input type="text" name="example_input" value="<?php echo $account->mail; ?>"></td>
                </tr>
                <tr>
                    <td>※会社名</td>
                    <td><input type="text" name="example_input" value="<?php echo $account->name; ?>"></td>
                </tr>
                <tr>
                    <td>担当者名</td>
                    <td><input type="text" name="example_input" value="<?php echo $account->staff; ?>"></td>
                </tr>
                <tr>
                    <td>郵便番号</td>
                    <td><input type="text" name="example_input" value="<?php echo $account->post_code; ?>">*
                        例）112-3333</span></td>
                </tr>
                <tr>
                    <td>住所</td>
                    <td><input type="text" name="example_input" value="<?php echo $account->address; ?>">*
                        例）東京都千代田区1-1-1</span></td>
                </tr>
                <tr>
                    <td>電話番号</td>
                    <td><input type="text" name="example_input" value="<?php echo $account->tel; ?>">*
                        例）03-1111-1111</span></td>
                </tr>
                <tr>
                    <td>FAX番号</td>s
                    <td><input type="text" name="example_input" value="<?php echo $account->fax; ?>">*
                        例）03-1111-1111</span></td>
                </tr>
            </table>
            <div class="form-actions">
                <button class="btn btn-primary" name="submit">保存</button>
            </div>
    </div>