<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Agat-777</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(CSS_PATH . '/vendor/bootstrap/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(CSS_PATH . '/vendor/metisMenu.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(CSS_PATH . '/vendor/sb-admin-2.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(CSS_PATH . '/pages/main_page/font-awesome.css') ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(CSS_PATH . '/vendor/pnotify.custom.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(CSS_PATH . '/vendor/jquery-ui.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(CSS_PATH . '/pages/admin/main.css')?>">

    <script>var baseUrl ='<?php echo base_url()?>'</script>
    <?php echo akAddCssFiles($additionalCssFiles);?>
    <script src="<?php echo base_url(JS_PATH . '/vendor/html5shiv.js')?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/vendor/respond.min.js')?>"></script>

    <script src="<?php echo base_url(JS_PATH . '/vendor/jquery.min.js')?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/vendor/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/vendor/jquery.validation.min.js')?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/vendor/jquery.validation.additional.min.js')?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/vendor/pnotify.custom.min.js')?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/vendor/metisMenu.min.js')?>"></script>

    <script src="<?php echo base_url(JS_PATH . '/vendor/sb-admin-2.min.js')?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/vendor/jquery-ui.js')?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/common/functions.js')?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/tinymce_4.6.6/tinymce/js/tinymce/jquery.tinymce.min.js')?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/tinymce_4.6.6/tinymce/js/tinymce/tinymce.min.js')?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/common/flash-message.js')?>"></script>
    <script>
        $(function () {
            var flashMessage = new FlashMessage(
                <?php echo $flashMessage;?>
            );
            flashMessage.init();
        })
    </script>
    <?php echo akAddJsFiles($additionalJsFiles);?>

</head>

<body>

<div id="wrapper">

    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="<?php echo site_url('admin_settings/change_password')?>"><i class="fa fa-gear fa-fw"></i>Change Password</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="<?php echo site_url('admin_login/logout')?>"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                    </li>
                </ul>
            </li>
        </ul>

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li>
                        <a href="#"><i class="fa fa-gear fa-settings"></i> Settings<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo site_url('admin_languages')?>"><i class="fa fa-language"></i>&nbsp;Languages</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('admin_meta') . '/index/' . META_TYPE_DESCRIPTION ?>"><i class="fa fa-file-text-o"></i>&nbsp;Meta Description</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('admin_meta') . '/index/' . META_TYPE_KEYWORDS ?>"><i class="fa fa-file-text-o"></i>&nbsp;Meta Keywords</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-gear fa-home"></i> Home page<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="<?php echo site_url('admin_slider')?>"><i class="fa fa-sliders"></i>&nbsp;Slider</a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('admin_youtube')?>"><i class="fa fa-youtube"></i>&nbsp;Youtube</a>
                            </li>

                        </ul>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin_translation')?>"><i class="fa fa-file-text"></i>&nbsp;Translation</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin_about_us')?>"><i class="fa fa-globe"></i>&nbsp;About us</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin_portfolio')?>"><i class="fa fa-id-card"></i>&nbsp;Portfolio</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin_partner')?>"><i class="fa fa-handshake-o"></i>&nbsp;Partners</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin_services')?>"><i class="fa fa-cc-visa"></i>&nbsp;Services</a>
                    </li>
                    <li>
                        <a href="<?php echo site_url('admin_report/edit')?>"><i class="fa fa-newspaper-o"></i>&nbsp;Report</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="row"><div class="col-sm-12">&nbsp;</div></div>

                <div class="panel panel-default">
                    <div class="panel-heading">
                        <?php echo akBreadcrumbs($breadcrumbs);?>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                                <?php echo $pageContent;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</body>

</html>

