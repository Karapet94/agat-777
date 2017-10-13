var PortfolioSettings = function () {
    this.staticElements = {
        portfolio: $('#portfolio'),
        save: $('#save'),
        delete: $('.fa-times'),
        yes: $('#yes'),
        deleteFromPortfolio: $('#deletePortfolioInfo')
    }
};


PortfolioSettings.prototype.init = function () {
    this.makeActivePortfolioSortable();
    this.startListen();
};

PortfolioSettings.prototype.startListen = function () {
    this.listenToModalSaveClick();
    this.listenToRemove();
    this.listenToSaveClick();
};


PortfolioSettings.prototype.listenToRemove = function () {
    var self = this;
    this.staticElements.delete.click(function () {
        self.staticElements.yes.attr('data-id', $(this).closest('li').data('id'));
        self.staticElements.deleteFromPortfolio.modal('show');
    });

};

PortfolioSettings.prototype.listenToSaveClick = function () {
    var portfolioItem = {};
    this.staticElements.save.click(function () {
        $('#portfolio li').each(function (index, element) {
            portfolioItem[$(element).data('id')] = {
                'order': index
            };
        });

        $.ajax({
            url: baseUrl + 'admin_portfolio/save_portfolio_order',
            type: 'post',
            dataType: 'json',
            data: {
                portfolioItem: portfolioItem
            },
            error: function () {
                alert('something went wrong');
            },
            success: function (data) {
                if (data.status == 'success') {
                    notification({status: 'success', msg: 'Successfully updated'});
                }
            }
        });

    });

};

PortfolioSettings.prototype.listenToModalSaveClick = function () {
    var deletedId;
    this.staticElements.yes.click(function () {
        deletedId = $(this).data('id');
        $.ajax({
            url: baseUrl + 'admin_Portfolio/delete_from_portfolio',
            type: 'post',
            dataType: 'json',
            data: {
                id: deletedId
            },
            error: function () {
                alert('Something went wrong')
            },
            success: function (data) {
                if (data.status == 'success') {
                    notification({status: 'success', msg: 'Successfully updated'});
                    $('li[data-id = ' + deletedId + ']' ).remove();
                }
            }
        });
    });
};

PortfolioSettings.prototype.makeActivePortfolioSortable = function () {
    this.staticElements.portfolio.sortable();
    this.staticElements.portfolio.disableSelection();
};
