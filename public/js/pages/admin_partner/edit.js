var AdminPartnerEdit = function () {
    this.elements = {
        form: $('#partner-form'),
        image: $('#image'),
        id: $('#id')
    }
};

AdminPartnerEdit.prototype.init = function () {
    this.initValidation();
    this.startListen();
};

AdminPartnerEdit.prototype.startListen = function () {
    this.listenToFormSubmit();
};

AdminPartnerEdit.prototype.listenToFormSubmit = function() {
    var self = this;
    this.elements.form.submit(function () {
        if (!self.elements.form.valid()) {
            return false;
        }
    })
};

AdminPartnerEdit.prototype.initValidation = function () {
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