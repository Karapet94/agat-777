<div class="row services">
    <div class="col-sm-12">
        <?php if (!empty($service['file'])) { ?>
            <div class="col-sm-3">
                <img  class="prec100" src="<?php echo base_url() . UPLOADS_PATH_SERVICES_READ . $service['file'] ?>" alt="<?php echo $service['title'] ?>">
            </div>
        <?php } ?>
        <div class="col-sm-9">
            <p class="p3"><?php echo $service['title'] ?></p>
            <p class="p4"><?php echo $service['description'] ?></p>
        </div>
    </div>
</div>
<?php if (!empty($gallery)) { ?>
    <div class="col-sm-12">
        <div class="row services">
            <div class="sb_pct">
                <div class="clear1"></div>
                <div class="col-sm-12">
                    <div class="row">
                        <?php foreach ($gallery as $row) {
                            ?>
                            <div class="col-sm-3 marginT">
                                <a rel="open" href="<?php echo base_url() . UPLOADS_PATH_SERVICES_GALLERY_READ . $row['image'] ?>"
                                   class="cboxElement" data-lightbox="roadtrip"><img class="prec100" src="<?php echo base_url() . UPLOADS_PATH_SERVICES_GALLERY_READ . $row['image'] ?>" alt="<?php echo $service['title'] ?>"></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>

                <div class="clear1"></div>
            </div>
        </div>
    </div>
<?php } ?>