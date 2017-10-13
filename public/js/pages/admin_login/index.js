var AdminLogin = function (showWrongLogin) {

    this.data = {
        showWrongLogin: showWrongLogin
    };

    this.elements = {
        form: $('.form-signin')
    };

};

AdminLogin.prototype.init = function () {
    this.validateForm();
    this.startListen();
    this.showErrorMessageIfNeeded();
};

AdminLogin.prototype.startListen = function () {
    this.formSubmit();
};

AdminLogin.prototype.formSubmit = function () {
    this.elements.form.submit(function (event) {
        if (!$(this).valid()) {
            event.preventDefault();
        }
    })
};

AdminLogin.prototype.validateForm  = function() {
    this.elements.form.validate({
        rules: {
            username: {
                required: true
            },
            password: {
                required: true
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

AdminLogin.prototype.showErrorMessageIfNeeded = function () {
    if (this.data.showWrongLogin) {
        notification({status: 'error', msg: 'Wrong Username or Password'});
    }
};