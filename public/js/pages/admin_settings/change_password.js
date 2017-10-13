var ChangePassword = function () {
   this.elements = {
       form: $('#change-password-form'),
       newPassword: $('[name="new_password"]'),
       repeatNewPassword: $('[name="repeat_new_password"]')
   }
};

ChangePassword.prototype.init = function () {
    this.validateForm();
    this.startListen();
};

ChangePassword.prototype.startListen = function () {
    this.listenToFormSubmit();
};

ChangePassword.prototype.listenToFormSubmit = function () {
    this.elements.form.submit(function (event) {
        if (!$(this).valid()) {
            event.preventDefault();
        }
    })
};

ChangePassword.prototype.addPasswordsEqualValidatorRule = function () {
    var self = this;
    $.validator.addMethod('passwords_equal', function(value, element)  {
        return self.elements.newPassword.val() == self.elements.repeatNewPassword.val();
    }, '');
};

ChangePassword.prototype.validateForm = function () {
    this.addPasswordsEqualValidatorRule();
    this.elements.form.validate({
        rules: {
            current_password: {
                required: true
            },
            new_password: {
                required: true,
                passwords_equal: true,
                maxlength: 15,
                minlength: 7
            },
            repeat_new_password: {
                required: true,
                passwords_equal: true,
                maxlength: 15,
                minlength: 7
            }
        },
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
};