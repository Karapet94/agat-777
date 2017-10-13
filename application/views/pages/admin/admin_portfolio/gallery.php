<script>
    $(function () {
        var adminGallery = new GallerySettings();
        adminGallery.init();
    })

</script>
    <div class="col-sm-12">
        <div class="row">
            <ul id="gallery" class="connectedSortable">
                <?php if(!empty($galleryData)){
                foreach ($galleryData as $gallery) { ?>
                    <li class="ui-state-default form-control" data-id="<?php echo $gallery['id'] ?>">
                        <a href="<?php echo base_url() . UPLOADS_PATH_PORTFOLIO_GALLERY_READ . $gallery['image'] ?>">
                            <img src="<?php echo base_url() . UPLOADS_PATH_PORTFOLIO_GALLERY_READ . $gallery['image'] ?>" alt="pic">
                        </a>
                        <i class="btn fa fa-times" aria-hidden="true"></i>
                    </li>
                <?php } }?>
            </ul>

        </div>
        <div class="row">
            <div class="col-sm-1 flot-right">
                    <button class="btn-primary form-control" id="save">Save</button>
            </div>
            <div class="col-sm-1 flot-right">
                    <button class="btn-primary form-control" id="add">Add</button>
            </div>
        </div>
    </div>



<div class="modal fade" id="deleteGalleryInfo" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete</h4>
            </div>
            <div class="modal-body">
                <label>Are you want delete this picture ???</label>
            </div>
            <div class="modal-footer">
                <button id="no" type="button" class="btn btn-default" data-dismiss="modal">NO</button>
                <button id="yes" type="button" class="btn btn-default btn-primary" data-dismiss="modal">Yes</button>
            </div>
        </div>

    </div>
</div>
<div class="modal fade" id="saveGalleryInfo" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Save</h4>
            </div>
            <div class="modal-body">
                <form role="form" id="gallery-form" method="post" enctype='multipart/form-data'>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label>Image (Recommended size: 800x400)</label>
                            <input class="form-control" name="image" type="file" id="image">
                        </div>
                        <button type="submit" name="save" id="save" class="btn btn-default">Save</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
            </div>
        </div>

    </div>
</div>
