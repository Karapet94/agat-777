<form role="form" id="meta-form" method="post" enctype='multipart/form-data'>

    <div class="col-lg-6">
        <?php foreach ($activeLanguages as $activeLanguage) { ?>
            <div class="form-group">
                <label>Meta <?php echo $type?> (<?php echo $activeLanguage['name_english'] ?>)</label>
                <textarea class="form-control" name="content[<?php echo $activeLanguage['iso_code'] ?>]"><?php echo $meta['translations'][$activeLanguage['iso_code']]['content'] ?></textarea>
            </div>
        <?php } ?>
    </div>

    <div class="col-lg-6">

        <button type="submit" name="save" class="btn btn-default">Save</button>

    </div>

</form>
