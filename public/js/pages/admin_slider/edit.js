var AdminSliderEdit = function () {
    this.elements = {
        form: $('#slider-form'),
        image: $('#image'),
        id: $('#id')
    }
};

AdminSliderEdit.prototype.init = function () {
    this.initValidation();
    this.startListen();
};


AdminSliderEdit.prototype.startListen = function () {
    this.listenToFormSubmit();
};

AdminSliderEdit.prototype.listenToFormSubmit = function() {
    var self = this;
    this.elements.form.submit(function (e) {
        if (!self.elements.form.valid()) {
            e.preventDefault();
        }
    })
};

AdminSliderEdit.prototype.initValidation = function () {
    this.elements.form.validate({
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


    if (!parseInt(this.elements.id.val())) {
        this.elements.image.rules('add', {
            required: true
        })
    }
};