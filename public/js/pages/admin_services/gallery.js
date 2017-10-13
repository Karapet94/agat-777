var GallerySettings = function () {
    this.staticElements = {
        gallery: $('#gallery'),
        delete: $('.fa-times'),
        add: $('#add'),
        save: $('#save'),
        form: $('#gallery-form'),
        yes: $('#yes'),
        deleteFromGallery: $('#deleteGalleryInfo'),
        saveFromGallery: $('#saveGalleryInfo'),
        image: $('#image')
    }
};


GallerySettings.prototype.init = function () {
    this.makeActiveGallerySortable();
    this.startListen();
};

GallerySettings.prototype.startListen = function () {
    this.listenToModalDeleteClick();
    this.listenToRemove();
    this.listenToClickAdd();
    this.listenToSaveClick();
};

GallerySettings.prototype.listenToClickAdd = function () {
    var self = this;
    this.staticElements.add.click(function () {
        self.staticElements.saveFromGallery.modal('show');
        self.initValidation();
    });
};

GallerySettings.prototype.listenToSaveClick = function () {
    var servicesItem = {};
    this.staticElements.save.click(function () {

        $('#gallery li').each(function (index, element) {
            servicesItem[$(element).data('id')] = {
                'order': index
            };
        });

        $.ajax({
            url: baseUrl + 'admin_services/save_gallery_order',
            type: 'post',
            dataType: 'json',
            data: {
                servicesItem: servicesItem
            },
            error: function () {
                alert('something went wrong');
            },
            success: function (data) {
                if (data.status == 'success') {
                    notification({status: 'success', msg: 'Successfully updated'});
                }
            }
        });

    });

};




GallerySettings.prototype.listenToRemove = function () {
    var self = this;
    this.staticElements.delete.click(function () {
        self.staticElements.yes.attr('data-id', $(this).closest('li').data('id'));
        self.staticElements.deleteFromGallery.modal('show');
    });

};
GallerySettings.prototype.listenToModalDeleteClick = function () {
    var deletedId;
    this.staticElements.yes.click(function () {
        deletedId = $(this).data('id');
        $.ajax({
            url: baseUrl + 'admin_services/delete_from_gallery',
            type: 'post',
            dataType: 'json',
            data: {
                id: deletedId
            },
            error: function () {
                alert('something went wrong')
            },
            success: function (data) {
                if (data.status == 'success') {
                    notification({status: 'success', msg: 'Successfully updated'});
                    $('li[data-id = ' + deletedId + ']' ).remove();
                    top.location.href = window.location.href;
                }
            }
        });
    });
};


GallerySettings.prototype.makeActiveGallerySortable = function () {
    this.staticElements.gallery.sortable();
    this.staticElements.gallery.disableSelection();
};
GallerySettings.prototype.initValidation = function () {
    this.staticElements.form.validate({
        highlight: function (element, errorClass, validClass) {
            $(element).closest('.form-group').removeClass('has-success').addClass('has-error');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).closest('.form-group').removeClass('has-error').addClass('has-success');
        },
        success: function (label) {
            $(label).closest('form').find('.valid').removeClass("invalid");
        },
        errorPlacement: function () {
        }
    });

    this.staticElements.image.rules('add', {
        required: true
    })
};