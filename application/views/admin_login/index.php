<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(CSS_PATH . '/vendor/bootstrap/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(CSS_PATH . '/vendor/pnotify.custom.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(CSS_PATH . '/pages/admin_login/index.css')?>">

    <script src="<?php echo base_url(JS_PATH . '/vendor/jquery.min.js')?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/vendor/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/vendor/jquery.validation.min.js')?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/common/functions.js')?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/vendor/pnotify.custom.min.js')?>"></script>
    <script src="<?php echo base_url(JS_PATH . '/pages/admin_login/index.js')?>"></script>
    <script>
        $(function () {
            var adminLogin = new AdminLogin(<?php echo empty($loginError) ? 0 : 1; ?>);
            adminLogin.init();
        });
    </script>
</head>
<body>
<div class="container">

    <?php  echo form_open('', ['class' => 'form-signin']); ?>

        <h2 class="form-signin-heading">Please sign in</h2>
        <div class="form-group">
            <label for="username">User Name</label>
            <?php echo form_input([
                'id' => 'username',
                'name' => 'username',
                'class' => 'form-control',
            ])?>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <?php echo form_input([
                'type' => 'password',
                'id' => 'password',
                'name' => 'password',
                'class' => 'form-control',
            ])?>
        </div>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    <?php echo form_close(); ?>

</div>
</body>
</html>