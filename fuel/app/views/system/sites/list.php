<div class="container">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>サイトID</th>
                <th>サイト名</th>
                <th>メディアID</th>
                <th>会社名</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php for ($i = 1; $i <= 10; $i++): ?>
                <tr>
                    <td>サイトID<?= $i ?></td>
                    <td>サイト名<?= $i ?></td>
                    <td>メディアID<?= $i ?></td>
                    <td>会社名<?= $i ?></td>
                    <td><a class="keep-setting" href="system/medias/edit/<?= $i ?>"><i class="icon-wrench tt" title="設定"></i><i class="icon-wrench tt" title="設定"></i></a></td>
                </tr>
            <?php endfor; ?>
        </tbody>
    </table>
</div>
