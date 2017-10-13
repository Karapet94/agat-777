var PartnerSettings = function () {
    this.staticElements = {
        partner: $('#partner'),
        save: $('#save'),
        delete: $('.fa-times'),
        yes: $('#yes'),
        deleteFromPartner: $('#deletePartnerInfo')
    }
};


PartnerSettings.prototype.init = function () {
    this.makeActivePartnerSortable();
    this.startListen();
};

PartnerSettings.prototype.startListen = function () {
    this.listenToModalSaveClick();
    this.listenToRemove();
    this.listenToSaveClick();
};

PartnerSettings.prototype.listenToSaveClick = function () {
    var partnerItem = {};
    this.staticElements.save.click(function () {
        $('#partner li').each(function (index, element) {
            partnerItem[$(element).data('id')] = {
                'order': index
            };
        });

        $.ajax({
            url: baseUrl + 'admin_partner/save_partner_order',
            type: 'post',
            dataType: 'json',
            data: {
                partnerItem: partnerItem
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

PartnerSettings.prototype.listenToRemove = function () {
    var self = this;
    this.staticElements.delete.click(function () {
        self.staticElements.yes.attr('data-id', $(this).closest('li').data('id'));
        self.staticElements.deleteFromPartner.modal('show');
    });

};
PartnerSettings.prototype.listenToModalSaveClick = function () {
    var deletedId;
    this.staticElements.yes.click(function () {
        deletedId = $(this).data('id');
        $.ajax({
            url: baseUrl + 'admin_Partner/delete_from_partner',
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
                }
            }
        });
    });
};

PartnerSettings.prototype.makeActivePartnerSortable = function () {
    this.staticElements.partner.sortable();
    this.staticElements.partner.disableSelection();
};
