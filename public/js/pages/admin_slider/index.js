var SliderSettings = function () {
    this.staticElements = {
        slider: $('#slider'),
        save: $('#save'),
        delete: $('.fa-times'),
        yes: $('#yes'),
        deleteFromSlider: $('#deleteSliderInfo')
    }
};


SliderSettings.prototype.init = function () {
    this.makeActiveSliderSortable();
    this.startListen();
};

SliderSettings.prototype.startListen = function () {
    this.listenToSaveClick();
    this.listenToModalSaveClick();
    this.listenToRemove();
};


SliderSettings.prototype.listenToSaveClick = function () {
    var sliderItem = {};
    this.staticElements.save.click(function () {
        $('#slider li').each(function (index, element) {
            sliderItem[$(element).data('id')] = {
                'order': index
            };
        });

        $.ajax({
            url: baseUrl + 'admin_slider/save_slider_order',
            type: 'post',
            dataType: 'json',
            data: {
                sliderItem: sliderItem
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

SliderSettings.prototype.listenToRemove = function () {
    var self = this;
    this.staticElements.delete.click(function () {
        self.staticElements.yes.attr('data-id', $(this).closest('li').data('id'));
        self.staticElements.deleteFromSlider.modal('show');
    });

};
SliderSettings.prototype.listenToModalSaveClick = function () {
    var deletedId;
    this.staticElements.yes.click(function () {
        deletedId = $(this).data('id');
        $.ajax({
            url: baseUrl + 'admin_Slider/delete_from_slider',
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

SliderSettings.prototype.makeActiveSliderSortable = function () {
    this.staticElements.slider.sortable();
    this.staticElements.slider.disableSelection();
};
