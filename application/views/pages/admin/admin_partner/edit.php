<script>
    $(function () {
        var adminPartnerEdit = new AdminPartnerEdit();
        adminPartnerEdit.init();
    });

</script>
<form role="form" id="partner-form" method="post" enctype='multipart/form-data'>

    <div class="col-lg-6">
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

        <?php foreach ($activeLanguages as $activeLanguage) { ?>
            <div class="form-group">
                <label>Title (<?php echo $activeLanguage['name_english'] ?>)</label>
                <input class="form-control" name="title[<?php echo $activeLanguage['iso_code'] ?>]"
                       value="<?php echo empty($partnerData['translations'][$activeLanguage['iso_code']]) ? '' : $partnerData['translations'][$activeLanguage['iso_code']]['title'] ?>">
            </div>
            <div class="form-group">
                <label>Description (<?php echo $activeLanguage['name_english'] ?>)</label>
                <textarea class="form-control" name="description[<?php echo $activeLanguage['iso_code'] ?>]"><?php echo empty($partnerData['translations'][$activeLanguage['iso_code']]) ? '' : $partnerData['translations'][$activeLanguage['iso_code']]['description'] ?></textarea>
            </div>
        <?php } ?>
        <div class="form-group">
            <label>Url</label>
            <input class="form-control" name="url"  value="<?php echo $partnerData['url'] ?>">
        </div>

    </div>

    <div class="col-lg-6">

        <?php if (!empty($partnerData)) { ?>
            <div class="form-group">
                <img class="img-responsive"
                     src="<?php echo site_url(UPLOADS_PATH_PARTNER_READ . $partnerData['file']) ?>">
            </div>
        <?php } ?>

        <div class="form-group">
            <label>Image (Recommended size: 800x400) <?php echo ($id) ? '' : akRequired(); ?></label>
            <input class="form-control" name="image" type="file" id="image">
        </div>
        <div class="checkbox">
            <label><input id="is-hidden" name="main_partner" type="checkbox" <?php if($partnerData['is_main'] == 'on'){echo  'checked';}; ?>>Make to main partner</label>
        </div>

        <button type="submit" class="btn btn-default">Save</button>

    </div>

</form>
