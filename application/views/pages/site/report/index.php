    <div class="row">
        <div class="col-sm-12">
            <?php if (!empty($report)) {  ?>
                <div class="col-sm-3">
                    <a target="_blank" href="<?php echo base_url() . UPLOADS_PATH_REPORT_READ . $report ?>"><img class="icon-bar" src="<?php echo base_url() . IMG_PATH . 'pdf_icon.png' ?>"alt="pdf" > <p class="p3"><?php echo $translations[6] ?></p></a>
                </div>
            <?php } ?>
        </div>
    </div>
