<script>
    $(function () {
        var adminPortfolioEdit = new AdminPortfolioEdit();
        adminPortfolioEdit.init();
    });

</script>
<form role="form" id="portfolio-form" method="post" enctype='multipart/form-data'>

    <div class="col-lg-6">
        <input type="hidden" name="id" id="id" value="<?php echo $id; ?>">

        <?php foreach ($activeLanguages as $activeLanguage) { ?>
            <div class="form-group">
                <label>Title (<?php echo $activeLanguage['name_english'] ?>)</label>
                <input class="form-control" name="title[<?php echo $activeLanguage['iso_code'] ?>]"
                       value="<?php echo empty($portfolioData['translations'][$activeLanguage['iso_code']]) ? '' : $portfolioData['translations'][$activeLanguage['iso_code']]['title'] ?>">
            </div>
            <div class="form-group">
                <label>Description (<?php echo $activeLanguage['name_english'] ?>)</label>
                <textarea class="form-control" name="description[<?php echo $activeLanguage['iso_code'] ?>]"><?php echo empty($portfolioData['translations'][$activeLanguage['iso_code']]) ? '' : $portfolioData['translations'][$activeLanguage['iso_code']]['description'] ?></textarea>
            </div>
        <?php } ?>


    </div>

    <div class="col-lg-6">

        <?php if (!empty($portfolioData)) { ?>
            <div class="form-group">
                <img class="img-responsive"
                     src="<?php echo site_url(UPLOADS_PATH_PORTFOLIO_READ . $portfolioData['file']) ?>">
            </div>
        <?php } ?>

        <div class="form-group">
            <label>Image (Recommended size: 800x400) <?php echo ($id) ? '' : akRequired(); ?></label>
            <input class="form-control" name="image" type="file" id="image">
        </div>

        <button type="submit" class="btn btn-default">Save</button>

    </div>

</form>
