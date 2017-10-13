<script>
    $(function () {
        var changeTextAboutUs = new ChangeTextAboutUs();
        changeTextAboutUs.init();

    })
</script>
<form role="form" id="about-us-form" method="post" enctype='multipart/form-data'>

    <div class="col-lg-6">

            <div class="form-group">
                <label>Youtube link</label>
                <input name="url" class="form-control" value="<?php
                if(!empty($youtube)){
                    echo $youtube['url'];
                }
                ?>">

            </div>


    </div>

    <div class="col-lg-6">

        <button type="submit" name="save" id="save" class="btn btn-default">Save</button>

    </div>

</form>
