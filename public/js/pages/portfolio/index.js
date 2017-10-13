var Portfolio = function (slug) {
    this.slug = slug;
};

Portfolio.prototype.init = function () {
    this.scrollToSlug();
};

Portfolio.prototype.scrollToSlug = function () {
    $('html,body').animate({
        scrollTop: $("[data-slug='" + this.slug + "']").offset().top
    });
};