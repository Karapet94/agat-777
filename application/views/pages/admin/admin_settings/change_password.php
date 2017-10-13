<script>
    $(function () {
        var changePassword = new ChangePassword();
        changePassword.init();
    })
</script>
<div class="col-lg-6">
    <form role="form" id="change-password-form" method="post">
        <div class="form-group">
            <label>Current Password <?php echo akRequired()?></label>
            <input type="password" class="form-control" name="current_password">
        </div>
        <div class="form-group">
            <label>New Password <?php echo akRequired()?></label>
            <input type="password" class="form-control" name="new_password">
        </div>
        <div class="form-group">
            <label>Retype New Password <?php echo akRequired()?></label>
            <input type="password" class="form-control" name="repeat_new_password">
        </div>

        <button type="submit" class="btn btn-default">Save</button>
    </form>
</div>
