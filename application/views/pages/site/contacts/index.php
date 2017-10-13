<script>
    $(function () {
        var contactsEdit = new ContactsEdit();
        contactsEdit.init();
    })
</script>
<form role="form" id="contacts-form" method="post" enctype='multipart/form-data'>
    <div class="row">
        <div class="col-sm-12 center">
            <div class="col-sm-12  form-group">
                <p class="col-sm-2 p7"><?php echo akRequired(); ?><?php echo $translations[13] ?></p>
                <div class="col-sm-10"><input name="subject" id="subject" class="form-control"></div>
            </div>
            <div class="col-sm-12 form-group">
                <p class="col-sm-2 p7"><?php echo akRequired(); ?><?php echo $translations[14] ?></p>
                <div class="col-sm-10"><input name="name" id="name" class="form-control"></div>
            </div>
            <div class="col-sm-12 form-group">
                <p class="col-sm-2 p7"><?php echo akRequired(); ?><?php echo $translations[15] ?></p>
                <div class="col-sm-10"><input name="phone" id="phone" class="form-control"></div>
            </div>
            <div class="col-sm-12 form-group">
                <p class="col-sm-2 p7"><?php echo akRequired(); ?><?php echo $translations[16] ?></p>
                <div class="col-sm-10"><input name="email" id="email" class="form-control"></div>
            </div>
            <div class="col-sm-12 form-group">
                <p class="col-sm-2 p7"><?php echo akRequired(); ?><?php echo $translations[17] ?></p>
                <div class="col-sm-10"><textarea name="message" class="form-control"></textarea></div>
            </div>
                <div class="col-sm-12 form-group">
                    <div class="col-sm-3">
                        <a id="change-captcha" href="#" class="can-not-see"><p class="p7"><?php echo $translations[24]?></p></a>
                        <img class="img-responsive captcha-image" alt="" src="<?php echo site_url(CAPTCHA_IMG_PATH . $captcha['filename'])?>">
                    </div>
                    <div class=" col-sm-9">
                        <label class="required p7"><?php echo akRequired(); ?><?php echo $translations[25]?></label>
                        <input type="text" class="form-control" name="contact_us_captcha">
                    </div>
                    <div class="clearfix"></div>
                </div>
            <div class="col-sm-12 form-group">
                <button id="send" class="btn btn-primary submit"><?php echo $translations[18] ?></button>
            </div>
        </div>
    </div>
    <div style="width: 100%"><iframe width="100%" height="450" src="https://www.mapsdirections.info/en/custom-google-maps/map.php?width=100%&height=450&hl=ru&coord=40.1476864179627,44.44338822810289&q=Shirak%20Dead%20St%2C%20Yerevan%2C%20Armenia+(AGAT-777)&ie=UTF8&t=h&z=14&iwloc=A&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.mapsdirections.info/en/custom-google-maps/">Create Google Map</a> by <a href="https://www.mapsdirections.info/en/">Measure area on map</a></iframe></div><br />
    <br/>
</form>