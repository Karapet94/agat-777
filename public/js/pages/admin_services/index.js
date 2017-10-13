var ServicesSettings = function () {
    this.staticElements = {
        services: $('#services'),
        save: $('#save'),
        delete: $('.fa-times'),
        yes: $('#yes'),
        deleteFromServices: $('#deleteServicesInfo')
    }
};


ServicesSettings.prototype.init = function () {
    this.makeActiveServicesSortable();
    this.startListen();
};

ServicesSettings.prototype.startListen = function () {
    this.listenToModalSaveClick();
    this.listenToRemove();
    this.listenToSaveClick();
};

ServicesSettings.prototype.listenToSaveClick = function () {
    var servicesItem = {};
    this.staticElements.save.click(function () {
        $('#services li').each(function (index, element) {
            servicesItem[$(element).data('id')] = {
                'order': index
            };
        });

        $.ajax({
            url: baseUrl + 'admin_services/save_services_order',
            type: 'post',
            dataType: 'json',
            data: {
                servicesItem: servicesItem
            },
            error: function () {
                alert('Something went wrong');
            },
            success: function (data) {
                if (data.status == 'success') {
                    notification({status: 'success', msg: 'Successfully updated'});
                }
            }
        });

    });

};

ServicesSettings.prototype.listenToRemove = function () {
    var self = this;
    this.staticElements.delete.click(function () {
        self.staticElements.yes.attr('data-id', $(this).closest('li').data('id'));
        self.staticElements.deleteFromServices.modal('show');
    });

};
ServicesSettings.prototype.listenToModalSaveClick = function () {
    var deletedId;
    this.staticElements.yes.click(function () {
        deletedId = $(this).data('id');
        $.ajax({
            url: baseUrl + 'admin_Services/delete_from_services',
            type: 'post',
            dataType: 'json',
            data: {
                    id: deletedId
            },
            error: function () {
                alert('Something went wrong')
            },
            success: function (data) {
                if (data.status == 'success') {
                    notification({status: 'success', msg: 'Successfully updated'});
                    $('li[data-id = ' + deletedId + ']' ).remove();
                }
            }
        });
    });
};

ServicesSettings.prototype.makeActiveServicesSortable = function () {
    this.staticElements.services.sortable();
    this.staticElements.services.disableSelection();
};
