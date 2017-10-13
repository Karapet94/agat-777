<script>
    $(function () {
        var adminTranslation = new AdminTranslation(<?php echo json_encode($aaData) ?>);
        adminTranslation.init();
    })
</script>
<div class="col-sm-12">
    <table id="translations" class="table table-striped table-bordered table-condensed table-hover no-footer">
        <thead>
        <tr>
            <td>Language</td>
            <td>ID</td>
            <td>Content</td>
            <td>&nbsp;</td>
        </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>

<div class="modal fade" id="edit-translation-modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit</h4>
            </div>
            <div class="modal-body">
                <?php foreach ($activeLanguages as $activeLanguage) { ?>
                    <div class="form-group">
                        <label><?php echo $activeLanguage['name_english'] ?></label>
                        <textarea class="form-control translation-text"
                                  data-iso-code="<?php echo $activeLanguage['iso_code'] ?>"></textarea>
                    </div>
                <?php } ?>
            </div>
            <div class="modal-footer">
                <button id="cancel" type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <button id="save" type="button" class="btn btn-default btn-primary" data-dismiss="modal">Save</button>
            </div>
        </div>

    </div>
</div>