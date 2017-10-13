<script>
    $(function () {
        var adminServices = new ServicesSettings();
        adminServices.init();
    })
</script>
    <div class="col-sm-12">
        <div class="row">
            <ul id="services" class="connectedSortable">
                <?php foreach ($servicesData as $services) { ?>
                    <li class="ui-state-default form-control" data-id="<?php echo $services['id'] ?>">
                        <a href="<?php echo empty($services['file']) ? '#' : base_url() . UPLOADS_PATH_SERVICES_READ . $services['file']  ?>">
                            <img src="<?php echo empty($services['file']) ? '#' : base_url() . UPLOADS_PATH_SERVICES_READ . $services['file'] ?>" alt="pic">
                        </a>
                        <i class="btn fa fa-times" aria-hidden="true"></i>
                        <a href="<?php echo base_url() . 'admin_services/edit/' . $services['id'] ?>" data-id="<?php echo $services['id'] ?>"><i class="btn fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        <a href="<?php echo base_url() . 'admin_services/gallery/' . $services['id'] ?>" data-id="<?php echo $services['id'] ?>"><i class="btn fa fa-file-image-o" aria-hidden="true"></i></a>
                    </li>
                <?php } ?>
            </ul>

        </div>
        <div class="row">
            <div class="col-sm-1 flot-right">
                <button class="form-control btn-primary" id="save">Save</button>
            </div>
        </div>
    </div>



<div class="modal fade" id="deleteServicesInfo" role="dialog">
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
