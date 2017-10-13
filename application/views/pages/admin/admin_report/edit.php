<script>
    $(function () {
        var adminReportEdit = new AdminReportEdit();
        adminReportEdit.init();
    });

</script>
<form role="form" id="report-form" method="post" enctype='multipart/form-data'>

    <div class="col-lg-6">
        <?php if (!empty($reportData)) { ?>
            <div class="form-group">
                <label>Now used <?php echo  $reportData ?></label>
            </div>
        <?php } ?>

        <div class="form-group">
            <label>Pdf (Recommended size: 50MB) <?php echo akRequired(); ?></label>
            <input class="form-control" name="pdf" type="file" id="pdf">
        </div>

        <button type="submit" name="save" class="btn btn-default">Save</button>

    </div>

</form>
