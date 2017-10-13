var Layout = function (flashMessage) {
    this.flashMessage = new FlashMessage(flashMessage);

    this.elements = {
        bxSlider: $('.bxslider'),
        datePicker: $( "#datepicker" )
    }
};

Layout.prototype.init = function () {
    this.flashMessage.init();
    this.initBxSlider();
};

Layout.prototype.initBxSlider = function () {
    this.elements.bxSlider.bxSlider({
        mode: 'fade',
        captions: true,
        auto: true,
        pager: false,
        pause: 3200
    });
}
