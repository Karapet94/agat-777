<script>
    $(function () {
        tinymce.init({ selector:'textarea' });
        var changeTextAboutUs = new ChangeTextAboutUs();
        changeTextAboutUs.init();

    })
</script>
<form role="form" id="about-us-form" method="post" enctype='multipart/form-data'>

    <div class="col-lg-6">

        <?php foreach ($activeLanguages as $activeLanguage) { ?>
            <div class="form-group">
                <label>Title (<?php echo $activeLanguage['name_english']?>)</label>
                <textarea name="<?php echo $activeLanguage['iso_code']?>" data-iso-code="<?php echo $activeLanguage['iso_code']?>" class="about_us">
                    <?php
                        if(isset($aboutUsData['translations'][$activeLanguage['iso_code']]['content'])){
                            echo $aboutUsData['translations'][$activeLanguage['iso_code']]['content'];
                        }
                    ?>
                </textarea>
            </div>
        <?php } ?>


    </div>

    <div class="col-lg-6">

        <button type="submit" id="save" class="btn btn-default">Save</button>

    </div>

</form>
