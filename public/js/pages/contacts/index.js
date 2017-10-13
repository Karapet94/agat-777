var ContactsEdit = function () {
    this.elements = {
        form: $('#contacts-form'),
        send: $('#send'),
        subject: $('#subject'),
        name: $('#name'),
        phone: $('#phone'),
        email: $('#email'),
        changeCaptcha: $('#change-captcha'),
        CaptchaImage: $('.captcha-image'),
        message: $('#message')
    }
};

ContactsEdit.prototype.init = function () {
    this.initValidation();
    this.startListen();
};


ContactsEdit.prototype.startListen = function () {
    this.listenToFormSubmit();
    this.listenToClickCanNotSee();
};

ContactsEdit.prototype.listenToFormSubmit = function() {
    var self = this;
    this.elements.form.submit(function () {
        if (!self.elements.form.valid()) {
            return false;
        }
    })
};

ContactsEdit.prototype.initValidation = function () {
    this.elements.form.validate({
        rules: {
            email: {
                required: true,
                email: true
            },
            send: {
                required: true
            },
            subject: {
                required: true
            },
            name: {
                required: true
            },
            phone: {
                required: true
            },
            message: {
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
ContactsEdit.prototype.listenToClickCanNotSee = function() {
    var self = this;
    this.elements.changeCaptcha.click(function (event) {
        event.preventDefault();
        $.ajax({
            url: 'http://agat-777.local/' + 'contacts/change_captcha',
            type: 'post',
            dataType: 'json',
            data: {
                changeCaptcha: true
            },
            error: function () {
                alert('something went wrong');
            },
            success: function (data) {
                if (data.status == 'success') {
                    self.elements.CaptchaImage.attr('src',data.image)
                }
            }
        });
    })
};