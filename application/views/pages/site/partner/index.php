<?php foreach ($partnerData as $partner) { ?>
    <?php if (!$partner['title']) {continue;} ?>
    <div class="row">
        <div class="col-sm-12 partners-logo">
            <?php if (!empty($partner['file'])) { ?>
                <div class="col-md-2 col-sm-3">
                    <a href="<?php echo $partner['url'] ?>" target="_blank"><img class="prec100" src="<?php echo base_url() . UPLOADS_PATH_PARTNER_READ . $partner['file'] ?>" alt="<?php echo $partner['title'] ?>"></a>
                </div>
            <?php } ?>
            <div class="col-sm-9">
                <p class="p3"><?php echo $partner['title'] ?></p>
                <p class="p4"><?php echo $partner['description'] ?></p>
            </div>
        </div>
    </div>
<?php } ?>
