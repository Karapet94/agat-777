<script>
    $(function () {
        var languageSettings = new LanguageSettings();
        languageSettings.init();
    })
</script>
<div class="row">
    <div class="col-sm-12">
        <div class="row">
            <div class="col-sm-6">
                <ul id="notActiveLanguage" class="connectedSortable list-unstyled">
                    <?php foreach ($languages as $language) {
                        if ($language['is_active'] == 0) { ?><li class="ui-state-default form-control" data-id="<?php echo $language['id'] ?>" data-name-origin="<?php echo $language['name_origin'] ?>" data-name-english="<?php echo $language['name_english'] ?>"
                                data-default="<?php echo $language['is_default'] ?>" data-hidden="<?php echo $language['is_hidden'] ?>">
                                <span> <img src="/public/images/flags/<?php echo $language['flag'] ?>" alt="flag"
                                            class="ui-icon"></span>
                                <span><?php echo $language['name_english'] ?></span>
                                <i class=" btn fa fa-arrow-left" aria-hidden="true"></i>
                                <i class="btn fa fa-wrench" aria-hidden="true"></i>
                                <i class="btn fa fa-arrow-right" aria-hidden="true"></i>
                            </li>
                        <?php }
                    } ?>
                </ul>
            </div>
            <div class="col-sm-6">
                <ul id="activeLanguage" class="connectedSortable">
                    <?php foreach ($languages as $language) {
                        if ($language['is_active'] == 1) {
                            if ($language['is_default'] == 1) { ?>
                                <li class="ui-state-default form-control default" data-is-admin="<?php echo $language['is_admin'] ?>" data-iso-code="<?php echo $language['iso_code'] ?>" data-id="<?php echo $language['id'] ?>" data-name-origin="<?php echo $language['name_origin'] ?>" data-default="<?php echo $language['is_default'] ?>"  data-hidden="<?php echo $language['is_hidden'] ?>" data-name-english="<?php echo $language['name_english'] ?>">
                            <?php } else { ?>
                                <li class="ui-state-default form-control" data-is-admin="<?php echo $language['is_admin'] ?>" data-iso-code="<?php echo $language['iso_code'] ?>" data-id="<?php echo $language['id'] ?>" data-name-origin="<?php echo $language['name_origin'] ?>" data-default="<?php echo $language['is_default'] ?>"  data-hidden="<?php echo $language['is_hidden'] ?>" data-name-english="<?php echo $language['name_english'] ?>">
                            <?php } ?>
                            <span> <img src="/public/images/flags/<?php echo $language['flag'] ?>" alt="flag"
                                        class="ui-icon"></span>
                            <span><?php echo $language['name_english'] ?></span>
                            <i class=" btn fa fa-arrow-left" aria-hidden="true"></i>
                            <i class="btn fa fa-wrench" aria-hidden="true"></i>
                            <i class="btn fa fa-arrow-right" aria-hidden="true"></i>
                            </li>
                        <?php }
                    } ?>
                </ul>
                <div class="col-sm-2">
                    <button class="btn-primary form-control" id="save">Save</button>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="edit-language-modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit</h4>
            </div>
            <div class="modal-body">
                <label>Language name in original language</label>
                <input id="name-origin" type="text" class="form-control" value="">
                <div class="checkbox">
                    <label><input id="is-default" type="checkbox" checked="">Default language</label>
                </div>
                <div class="checkbox">
                    <label><input id="is-hidden" type="checkbox">Hidden</label>
                </div>
            </div>
            <div class="modal-footer">
                <button id="close" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="save-modal" type="button" class="btn btn-default btn-primary" data-dismiss="modal">Save</button>
            </div>
        </div>

    </div>
</div>
