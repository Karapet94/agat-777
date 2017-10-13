var AdminTranslation = function (aaData) {

  this.elements = {
      translations: $('#translations'),
      save: $('#save'),
      editTranslationModal: $('#edit-translation-modal'),
      translationText: $('.translation-text')
  };

  this.data = {
      aaData: aaData
  };
};

AdminTranslation.prototype.init = function () {
    this.initDataTable();
    this.startListen();
};

AdminTranslation.prototype.initDataTable = function () {
    this.elements.translations.dataTable({
        bFilter: true,
        bInfo: true,
        bServerSide: false,
        bProcessing: false,
        bPaginate: true,
        bAutoWidth: true,
        bStateSave: true,
        iDisplayLength: 25,
        sAjaxSource: null,
        sPaginationType: "bootstrap",
        aaData: this.data.aaData,
        aaSorting: [
            [1, "asc"]
        ],
        "aoColumns": [
            {
                name: "lang",
                sortable: false,
                width: '15%'
            },
            {
                name: "id",
                searchable: false,
                sortable: false,
                width: '10%'
            },
            {
                name: "content",
                sortable: false,
                class: 'translation-content'
            }, {
                name: "buttons",
                sortable: false,
                searchable: false,
                width: "1%"
            }]
    });
};

AdminTranslation.prototype.startListen = function () {
    this.listenToEdit();
    this.listenToSave();
};

AdminTranslation.prototype.listenToEdit = function () {
    var self = this;
    this.elements.translations.on('click', '.edit-translation', function (event) {
        event.preventDefault();
        var id = $(this).data('id');
        self.elements.save.attr('data-id', id);
        $('.edit-translation[data-id="' + id + '"]').each(function (index, element) {
            var isoCode = $(element).data('iso-code');
            var content = $(element).closest('tr').find('.translation-content').text();
            $('textarea[data-iso-code="' + isoCode + '"]').val(content);
        });
        self.elements.editTranslationModal.modal('show');
    })
};

AdminTranslation.prototype.listenToSave = function () {
    var self = this;
    this.elements.save.click(function () {
        var id = $(this).attr('data-id');
        var translations = {};
        self.elements.translationText.each(function (index, element) {
            translations[$(element).attr('data-iso-code')] = $(element).val();
        });
        $.ajax({
            url: baseUrl + 'admin_translation/save',
            type: 'post',
            dataType: 'json',
            data: {
                id: id,
                translations: translations
            },
            error: function () {
                alert('Something went wrong');
            },
            success: function (data) {
                if (data.status == 'success') {
                    location.reload();
                }
            }
        });
    })
};