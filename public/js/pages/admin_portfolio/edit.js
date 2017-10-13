var AdminPortfolioEdit = function () {
    this.elements = {
        form: $('#portfolio-form'),
        image: $('#image'),
        id: $('#id')
    }
};

AdminPortfolioEdit.prototype.init = function () {
    this.initValidation();
    this.startListen();
};

AdminPortfolioEdit.prototype.startListen = function () {
    this.listenToFormSubmit();
};

AdminPortfolioEdit.prototype.listenToFormSubmit = function() {
    var self = this;
    this.elements.form.submit(function () {
        if (!self.elements.form.valid()) {
            return false;
        }
    })
};

AdminPortfolioEdit.prototype.initValidation = function () {
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