<div id="limitColumnModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="limitcolumn_label" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="limitcolumn_label"><?= __('word_limit_column_list') ?></h3>
    </div>
    <div class="modal-body">
        <div id="listcolumn_list"></div>
        <hr>
        <button class="btn lc-select" data-type="select"><?= __('word_select_all') ?></button>
        <button class="btn lc-select" data-type="unselect"><?= __('word_unselect_all') ?></button>
        <label class="checkbox" style="display:inline-block;"><input type="checkbox" id="use_fulltable"> <?= __('word_use_fulltable') ?></label>
    </div>
    <div class="modal-footer">
        <button class="btn btn-primary use-limitcolumn"><?= __('save') ?></button>
    </div>
</div>
