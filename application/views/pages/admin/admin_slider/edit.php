<script>
    $(function () {
        var adminSliderEdit = new AdminSliderEdit();
        adminSliderEdit.init();
    });

</script>
<form role="form" id="slider-form" method="post" enctype='multipart/form-data'>

<div class="col-lg-6">
    <input type="hidden" name="id" id="id" value="<?php echo $id;?>">

    <?php foreach ($activeLanguages as $activeLanguage) { ?>
    <div class="form-group">
        <label>Title (<?php echo $activeLanguage['name_english']?>)</label>
        <input  class="form-control" name="title[<?php echo $activeLanguage['iso_code']?>]"
                value="<?php echo empty($sliderData) ? '' : $sliderData['translations'][$activeLanguage['iso_code']]['title'] ?>"
        >
    </div>
    <?php } ?>


</div>

<div class="col-lg-6">

    <?php if(!empty($sliderData)) { ?>
    <div class="form-group">
        <img class="img-responsive" src="<?php echo site_url(UPLOADS_PATH_SLIDER_READ . $sliderData['file'])?>">
    </div>
    <?php } ?>

    <div class="form-group">
        <label>Image (Recommended size: 800x400) <?php echo ($id) ? '' : akRequired(); ?></label>
        <input class="form-control" name="image" type="file" id="image">
    </div>

    <button type="submit" class="btn btn-default">Save</button>

</div>

</form>
