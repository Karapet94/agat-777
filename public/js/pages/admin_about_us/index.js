var ChangeTextAboutUs = function () {
    this.elements = {
        form: $('#about-us-form'),
        save: $('#save'),
        aboutUs: $('#about-us')
    }
};

ChangeTextAboutUs.prototype.init = function () {
    this.startListen();
};

ChangeTextAboutUs.prototype.startListen = function () {
    this.listenToSaveClick();
};

ChangeTextAboutUs.prototype.listenToSaveClick = function () {
    var content = {};
    this.elements.form.submit(function (event) {
        event.preventDefault();
        $('.about_us').each(function (index, element) {
            content[$(element).data('iso-code')] = $(element).val();
        });
        $.ajax({
            url:baseUrl + 'admin_about_us/save',
            type:'post',
            dataType:'json',
            data:{
                'content': content
            },
            success: function (data) {
                if (data.status == 'success'){
                    notification({status: 'success', msg: 'all went successfully'});
                }
            }
        });
    });

};