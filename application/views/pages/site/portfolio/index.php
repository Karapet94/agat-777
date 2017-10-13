<?php if (!is_null($slug)) { ?>
    <script>
        $(function () {
            var portfolio = new Portfolio('<?php echo $slug ?>');
            portfolio.init();
        })
    </script>
<?php } ?>
<?php $count = count($portfolioData); $i = 1;?>
<?php foreach ($portfolioData as $portfolio) { ?>
    <div class="row" data-slug="<?php echo getPortfolioSlug($portfolio['id']);?>">
        <div class="col-sm-12">
            <?php if (!empty($portfolio['file'])) { ?>
                <div class="col-sm-3">
                    <img class="prec100"
                         src="<?php echo base_url() . UPLOADS_PATH_PORTFOLIO_READ . $portfolio['file'] ?>"
                         alt="<?php echo $portfolio['title'] ?>">
                </div>
            <?php } ?>
            <div class="col-sm-9">
                <p class="p3"><?php echo $portfolio['title'] ?></p>
                <p class="p4"><?php echo $portfolio['description'] ?></p>
            </div>
        </div>
    </div>
    <?php if (!empty($portfolio['image'])) { ?>

        <div class="col-sm-12">
            <div class="row">
                <div class="sb_pct">
                    <div class="clear1"></div>
                    <div class="col-sm-12">
                        <div class="row">
                            <?php foreach ($portfolio['image'] as $row) {
                                ?>
                                <div class="col-sm-3 marginT">
                                    <a rel="open" href="<?php echo base_url() . UPLOADS_PATH_PORTFOLIO_GALLERY_READ . $row['image'] ?>" class="cboxElement" data-lightbox="roadtrip"><img class="prec100" src="<?php echo base_url() . UPLOADS_PATH_PORTFOLIO_GALLERY_READ . $row['image'] ?>" alt="<?php echo $portfolio['title'] ?>">
                                    </a>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="clear1"></div>
                </div>
            </div>
        </div>
    <?php } ?>
    <hr class="<?php echo $i++ == $count ? 'dn' : ''?>">
<?php } ?>
