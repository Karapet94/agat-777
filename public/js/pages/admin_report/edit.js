var AdminReportEdit = function () {
    this.elements = {
        form: $('#report-form'),
        pdf: $('#pdf')
    }
};

AdminReportEdit.prototype.init = function () {
    this.initValidation();
    this.startListen();
};

AdminReportEdit.prototype.startListen = function () {
    this.listenToFormSubmit();
};

AdminReportEdit.prototype.listenToFormSubmit = function() {
    var self = this;
    this.elements.form.submit(function () {
        if (!self.elements.form.valid()) {
            return false;
        }
    })
};

AdminReportEdit.prototype.initValidation = function () {
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

    this.elements.pdf.rules('add', {
        required: true
    })

};