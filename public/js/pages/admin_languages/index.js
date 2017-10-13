var LanguageSettings = function () {
  this.staticElements = {
      activeLanguage: $('#activeLanguage'),
      notActiveLanguage: $('#notActiveLanguage'),
      isDefault :$('#is-default'),
      isHidden :$('#is-hidden'),
      isAdmin :$('#is-admin'),
      nameOrigin :$('#name-origin'),
      editLanguageModal:$('#edit-language-modal'),
      saveButtonOfModal:$('#save-modal'),
      save:$('#save')
  }
};

LanguageSettings.prototype.init = function () {
    this.makeActiveLanguagesSortable();
    this.makeInactiveLanguagesSortable();
    this.startListen();
};

LanguageSettings.prototype.startListen = function () {
    this.listenToArrowRightClick();
    this.listenToArrowLeftClick();
    this.listenToChangeIsDefaultCheckbox();
    this.listenToModalSaveClick();
    this.listenToSaveClick();
    this.listenToEditLanguageClick();
};

LanguageSettings.prototype.listenToArrowRightClick = function () {
    var self = this;
    this.staticElements.notActiveLanguage.on('click', '.fa-arrow-right', function () {
        $(this).parent().clone().appendTo(self.staticElements.activeLanguage);
        $(this).parent().remove();
    });
};
LanguageSettings.prototype.listenToArrowLeftClick = function () {
    var self = this;
    this.staticElements.activeLanguage.on('click', '.fa-arrow-left', function () {
        $(this).parent().clone().appendTo(self.staticElements.notActiveLanguage);
        $(this).parent().remove();
    });
};

LanguageSettings.prototype.listenToEditLanguageClick = function () {
    var self = this;
    var appendHtml ='<div class="checkbox admin-language-checkbox"><label><input id="is-admin" type="checkbox">Admin language</label></div>';
    this.staticElements.activeLanguage.on('click','.fa-wrench',function () {
        var isDefault = parseInt($(this).closest('li').attr('data-default')),
        isHidden = parseInt($(this).closest('li').attr('data-hidden')),
        isAdmin = parseInt($(this).closest('li').attr('data-is-admin')),
        isoCode = $(this).closest('li').attr('data-iso-code');

        self.staticElements.isDefault.prop('checked', isDefault);
        self.staticElements.isHidden.prop('checked', isHidden);
        self.staticElements.isDefault.prop('disabled', isDefault);
        self.staticElements.isHidden.prop('disabled', isDefault);
        self.staticElements.nameOrigin.val($(this).closest('li').data('name-origin'));
        self.staticElements.saveButtonOfModal.attr('data-id', $(this).closest('li').data('id'));
        $('.admin-language-checkbox').remove();
        if($.inArray(isoCode, ['hy', 'en', 'ru']) != -1){
            self.staticElements.editLanguageModal.find('.modal-body').append(appendHtml);
            $('#is-admin').prop('checked', isAdmin);
        }
        self.staticElements.editLanguageModal.modal('show');
    });
};

LanguageSettings.prototype.listenToModalSaveClick = function () {
    var self = this,
    isDefault = 0,
    isHidden = 0,
    isAdmin = 0,
    id = this.staticElements.saveButtonOfModal.attr('data-id') ;

    this.staticElements.saveButtonOfModal.click(function () {
        id = self.staticElements.saveButtonOfModal.attr('data-id') ;
        if($('#is-admin').is(':checked')){
            $('li').each(function (index, element) {
                if ($(element).attr('data-id') == id) {
                    $(element).attr('data-is-admin', 1);
                    isAdmin = 1;
                } else {
                    $(element).attr('data-is-admin', 0);
                }
            });
        }

        if(self.staticElements.isHidden.is(':checked')){
            isHidden = 1;
        }

        if (self.staticElements.isDefault.is(':checked')) {
            $('li').each(function (index, element) {
                if ($(element).attr('data-id') == id) {
                    $(element).attr('data-default', 1);
                    $(element).addClass('default');
                    isDefault = 1;
                } else {
                    $(element).attr('data-default', 0);
                    $(element).removeClass('default');
                }
            });
        }

        $.ajax({
            url:baseUrl + 'admin_languages/save',
            type:'post',
            dataType:'json',
            data:{
                'id': id,
                'origin-name': self.staticElements.nameOrigin.val(),
                'is-default': isDefault,
                'is-hidden': isHidden,
                'is-admin': isAdmin
            },
            error: function () {
                alert('Something went wrong');
            },
            success: function (data) {
                notification(data);
            }
        });
    });


};
LanguageSettings.prototype.listenToSaveClick = function () {
    var languages = {};
    this.staticElements.save.click(function () {
        $('li').each(function (index, element) {
            if ($(element).closest('ul').attr('id') == 'notActiveLanguage') {
                languages[$(element).data('id')] = {
                    'active': 0,
                    'order': 0
                };
            } else if ($(element).closest('ul').attr('id') == 'activeLanguage') {
                languages[$(element).data('id')] = {
                    'active': 1,
                    'order': index
                };
            }
        });

        $.ajax({
            url: baseUrl + 'admin_languages/save_active_languages',
            type: 'post',
            dataType: 'json',
            data: {
                languages: languages
            },
            error: function () {
                alert('Something went wrong')
            },
            success: function (data) {
                notification(data);
            }
        });

    });

};

LanguageSettings.prototype.listenToChangeIsDefaultCheckbox = function () {
    var self = this;
    this.staticElements.isDefault.change(function () {
        var isChecked = $(this).is(':checked');
        self.staticElements.isHidden.prop('disabled', isChecked);
        if(isChecked) {
            self.staticElements.isHidden.prop('checked', false);
        }
    })
};

LanguageSettings.prototype.makeActiveLanguagesSortable = function () {
    this.staticElements.activeLanguage.sortable({
        connectWith: ".connectedSortable"
    }).disableSelection();
};

LanguageSettings.prototype.makeInactiveLanguagesSortable = function () {
    this.staticElements.notActiveLanguage.sortable({
        connectWith: ".connectedSortable"
    }).disableSelection();
};
