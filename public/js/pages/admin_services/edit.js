var AdminServicesEdit = function () {
    this.elements = {
        form: $('#services-form'),
        image: $('#image'),
        id: $('#id')
    }
};

AdminServicesEdit.prototype.init = function () {
    this.startListen();
};


AdminServicesEdit.prototype.startListen = function () {
    this.listenToFormSubmit();
};

AdminServicesEdit.prototype.listenToFormSubmit = function() {
    var self = this;
    this.elements.form.submit(function () {
        if (!self.elements.form.valid()) {
            return false;
        }
    })
};