<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>

    <?php foreach ($metas as $meta) { ?>
        <meta name="<?php echo $meta['type'] ?>" content="<?php echo $meta['content'] ?>">
    <?php } ?>
    <title><?php echo $title ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(CSS_PATH . '/vendor/bootstrap/bootstrap.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(CSS_PATH . '/vendor/hover.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(CSS_PATH . '/vendor/component.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(CSS_PATH . '/vendor/pnotify.custom.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(CSS_PATH . '/vendor/jquery.bxslider.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(CSS_PATH . '/pages/main_page/font-awesome.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(CSS_PATH . '/vendor/lightbox.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(CSS_PATH . '/pages/main_page/jquery-ui.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(CSS_PATH . '/pages/main_page/main_page.css') ?>">
    <?php echo akAddCssFiles($additionalCssFiles); ?>
    <link rel="shortcut icon" href="<?php echo base_url() . IMG_PATH . 'favicon.ico' ?>"/>


    <script src="<?php echo base_url(JS_PATH . '/vendor/jquery.min.js') ?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/vendor/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/vendor/jquery.bxslider.js') ?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/vendor/jquery-ui.js') ?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/vendor/jquery.validation.min.js') ?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/vendor/jquery.validation.additional.min.js') ?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/common/functions.js') ?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/common/shares.js') ?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/vendor/pnotify.custom.min.js') ?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/vendor/lightbox.js') ?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/pages/main_page/main_page.js') ?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/common/flash-message.js') ?>"></script>
    <script>
        $(function () {
            var layout = new Layout(
                <?php echo $flashMessage;?>
            );
            layout.init();
        })
    </script>
    <?php echo akAddJsFiles($additionalJsFiles); ?>
</head>
<body class="<?php echo $lang ?>">
<header class="container">
    <div class="row">
        <div class="col-sm-12 header-top">
            <div class="row">
                <div class="col-sm-6 col-xs-12 pull-right">
                    <div class="row language">
                        <ul class="text-right">
                            <?php foreach ($activeLanguages as $language) { ?>
                                <li>
                                    <a class="hvr-underline-from-center"
                                       href="<?php echo site_url(str_replace('/' . $lang, $language['iso_code'], $_SERVER['REQUEST_URI'])); ?>"><?php echo $language['name_origin'] ?></a>
                                </li>

                            <?php } ?>
                        </ul>

                    </div>
                </div>
                <div class="col-sm-6 col-xs-12 pull-right">
                    <a href="<?php echo site_url('/' . $lang) ?>"
                       class="agat-logo hvr-pulse-grow"><?php echo $translations[8] ?></a>
                </div>
            </div>
        </div>
    </div>
    <hr>
</header>
<div class="container">
    <div class="row">
        <div class="menuselection col-sm-12 col-xs-12">
            <nav class="navbar navbar-default navbar-inverse">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li><a class="<?php echo akActiveMenu($this->uri->segment(2), ''); ?>"
                                   href="<?php echo site_url($lang); ?>"><span
                                            data-hover='<?php echo $translations[1]; ?>'><?php echo $translations[1]; ?></span></a>
                            </li>
                            <li><a class="<?php echo akActiveMenu($this->uri->segment(2), SLUG_ABOUT_US); ?>"
                                   href="<?php echo site_url($lang . '/' . SLUG_ABOUT_US); ?>"><span
                                            data-hover='<?php echo $translations[2]; ?>'><?php echo $translations[2]; ?></span></a>
                            </li>
                            <li><a class="<?php echo akActiveMenu($this->uri->segment(2), SLUG_PARTNER); ?>"
                                   href="<?php echo site_url($lang . '/' . SLUG_PARTNER); ?>"><span
                                            data-hover='<?php echo $translations[3]; ?>'><?php echo $translations[3]; ?></span></a>
                            </li>
                            <li class="dropdown">
                                <a class="dropdown-toggle <?php echo akActiveMenu($this->uri->segment(2), SLUG_SERVICES); ?>"
                                   data-toggle="dropdown" href="#"><span
                                            data-hover='<?php echo $translations[4]; ?>'><?php echo $translations[4]; ?>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a class="<?php echo akActiveMenu($this->uri->segment(3), SLUG_SERVICE_CONSTRUCTION); ?>"
                                           href="<?php echo site_url($lang . '/' . SLUG_SERVICES . '/' . SLUG_SERVICE_CONSTRUCTION); ?>"><span><?php echo $services[SERVICE_ID_CONSTRUCTION] ?></span></a>
                                    </li>
                                    <li>
                                        <a class="<?php echo akActiveMenu($this->uri->segment(3), SLUG_SERVICE_FURNITURE_PRODUCTION); ?>"
                                           href="<?php echo site_url($lang . '/' . SLUG_SERVICES . '/' . SLUG_SERVICE_FURNITURE_PRODUCTION); ?>"><span><?php echo $services[SERVICE_ID_FURNITURE_PRODUCTION] ?></span></a>
                                    </li>
                                    <li>
                                        <a class="<?php echo akActiveMenu($this->uri->segment(3), SLUG_SERVICE_EURO_WINDOWSES); ?>"
                                           href="<?php echo site_url($lang . '/' . SLUG_SERVICES . '/' . SLUG_SERVICE_EURO_WINDOWSES); ?>"><span><?php echo $services[SERVICE_ID_EURO_WINDOWSES] ?></span></a>
                                    </li>
                                    <li>
                                        <a class="<?php echo akActiveMenu($this->uri->segment(3), SLUG_SERVICE_STEEL_PRODUCTS); ?>"
                                           href="<?php echo site_url($lang . '/' . SLUG_SERVICES . '/' . SLUG_SERVICE_STEEL_PRODUCTS); ?>"><span><?php echo $services[SERVICE_ID_STEEL_PRODUCTS] ?></span></a>
                                    </li>
                                    <li>
                                        <a class="<?php echo akActiveMenu($this->uri->segment(3), SLUG_SERVICE_HOTEL); ?>"
                                           href="<?php echo site_url($lang . '/' . SLUG_SERVICES . '/' . SLUG_SERVICE_HOTEL); ?>"><span><?php echo $services[SERVICE_ID_HOTEL] ?></span></a>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a class="<?php echo akActiveMenu($this->uri->segment(2), SLUG_PORTFOLIO); ?>"
                                   href="<?php echo site_url('/' . $lang . '/' . SLUG_PORTFOLIO); ?>"><span
                                            data-hover='<?php echo $translations[5]; ?>'><?php echo $translations[5]; ?>
                                </a>
                            </li>
                            <li>
                                <a class="<?php echo akActiveMenu($this->uri->segment(2), SLUG_REPORT); ?>"
                                   href="<?php echo site_url('/' . $lang . '/' . SLUG_REPORT); ?>"><span
                                            data-hover='<?php echo $translations[6]; ?>'><?php echo $translations[6]; ?>
                                </a>
                            </li>
                            <li>
                                <a class="<?php echo akActiveMenu($this->uri->segment(2), SLUG_CONTACTS); ?>"
                                   href="<?php echo site_url('/' . $lang . '/' . SLUG_CONTACTS); ?>"><span
                                            data-hover='<?php echo $translations[7]; ?>'><?php echo $translations[7]; ?>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <hr class="hr2">
    <div class="row">
        <div class="col-md-4 outer">
            <div class="middle">
                <div>
                    <p class="p1"><?php echo $translations[8]; ?></p>
                    <p class="p2"><?php echo $translations[9]; ?></p>
                </div>
            </div>
        </div>
        <div class="col-md-8 margin10">
            <!--start-images-slider-->
            <ul class="bxslider">
                <?php foreach ($slides as $slide) { ?>
                    <li><img src="<?php echo base_url() . UPLOADS_PATH_SLIDER_READ . $slide['file'] ?>"
                             title="<?php echo $slide['title'] ?>" alt="<?php echo $slide['file'] ?>"></li>
                <?php } ?>
            </ul>
            <!--/slider -->
        </div>
    </div>


    <hr>
    <?php echo $pageContent; ?>
    <hr>
</div>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-4 col-xs-12">
                        <a href="<?php echo site_url($lang . '/' . SLUG_ABOUT_US); ?>">
                            <p class="p3"><?php echo $translations[2]; ?></p>
                        </a>
                        <p class="p4"><?php echo $translations[21]; ?></p>
                    </div>
                    <div class="col-sm-8 col-xs-12">
                        <div>
                            <a href="<?php echo site_url($lang . '/' . SLUG_PARTNER); ?>">
                                <p class="p3"><?php echo $translations[19]; ?></p>
                            </a>
                        </div>
                        <div>
                            <p class="p4"><?php echo $translations[20]; ?></p>
                        </div>
                        <div>
                            <ul class="list-inline">

                                <?php if (!empty($mainPartnerData)) {
                                    foreach ($mainPartnerData as $partner) {
                                        if ($partner['is_main'] == 'on') { ?>
                                            <li><a href="<?php echo $partner['url'] ?>" target="_blank"><img
                                                            src="<?php echo base_url() . UPLOADS_PATH_PARTNER_READ . $partner['file'] ?>"
                                                            alt="<?php echo $partner['title'] ?>"></a></li>
                                        <?php }
                                    }
                                } ?>

                            </ul>
                        </div>
                        <hr>
                        <div class="row">
                            <ul class="social">
                                <li><a class="btn" onclick="Share.facebook('http://agat-777.com/','AGAT-777 LLC')"><i
                                                class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a class="btn" onclick="Share.vkontakte('http://agat-777.com/','AGAT-777 LLC')"><i
                                                class="fa fa-vk" aria-hidden="true"></i></a></li>
                                <li><a class="btn" href="skype:agat-777llc?call"><i class="fa fa-skype"
                                                                                    aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
