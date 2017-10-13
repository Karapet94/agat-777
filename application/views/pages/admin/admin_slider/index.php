<script>
    $(function () {
        var adminSlider = new SliderSettings();
        adminSlider.init();
    })
</script>
    <div class="col-sm-12">
        <div class="row">
            <ul id="slider" class="connectedSortable">
                <?php foreach ($sliderData as $slider) { ?>
                    <li class="ui-state-default form-control" data-id="<?php echo $slider['id'] ?>">
                        <a href="<?php echo base_url() . UPLOADS_PATH_SLIDER_READ . $slider['file'] ?>">
                            <img src="<?php echo base_url() . UPLOADS_PATH_SLIDER_READ . $slider['file'] ?>" alt="pic">
                        </a>
                        <i class="btn fa fa-times" aria-hidden="true"></i>
                        <a href="<?php echo base_url() . 'admin_slider/edit/' . $slider['id'] ?>" data-id="<?php echo $slider['id'] ?>"><i class="btn fa fa-pencil-square-o" aria-hidden="true"></i></a>
                    </li>
                <?php } ?>
            </ul>

        </div>
        <div class="row">
            <div class="col-sm-1 flot-right">
                <a href="<?php echo base_url() . 'admin_slider/edit/0' ?>">
                    <button class="btn-primary form-control" id="add">Add</button>
                </a>
            </div>
            <div class="col-sm-1 flot-right">
                <button class="btn-primary form-control" id="save">Save</button>
            </div>
        </div>
    </div>



<div class="modal fade" id="deleteSliderInfo" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Delete</h4>
            </div>
            <div class="modal-body">
                <label>Are you want delete all information about of this picture ???</label>
            </div>
            <div class="modal-footer">
                <button id="no" type="button" class="btn btn-default" data-dismiss="modal">NO</button>
                <button id="yes" type="button" class="btn btn-default btn-primary" data-dismiss="modal">Yes</button>
            </div>
        </div>

    </div>
</div>
