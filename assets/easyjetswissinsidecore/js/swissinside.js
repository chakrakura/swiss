window.swissinside = {
    lastAoColumns: function (table, width) {
        var ao = [];

        $(table).find("th").each(function (i, th) {
            ao.push(null);
        });

        ao[ao.length - 1] = { sWidth: width };
        return ao;

    }
};

var showReadonlyMessage = function (type) {
    //don't show global message for ewish application .
    if(/ewish/.test(window.location.href)) {
        return;
    } 
    if(/epayslip/.test(window.location.href)) {
        return;
    } 
    switch (type) {
        case "readonly":
            $("#content-header").append('<div class="alert alert-danger" style="margin:20px">Uman, Eftr (expense feature) and eLeave for office user are currently in read only mode because of the freeze period to align data with workday.</div>');
            break;
        case "readonly-extended":
            if (/\/eftr\//.test(window.location.href)) {
                $("#content-header").append('<div class="alert alert-danger" style="margin:20px">Eftr (expense feature) is disabled and has been replaced by CEM application.</div>');
            }
            break;
    }

};

$(function () {

    var updateButtons = function () {
        var profileButtonOffset = $("#my-profile-button").offset();
        $("#swissinside-applications > li").removeClass("overlap");
        $("#show-next-apps").remove();
        var lastItem = null;
        $("#swissinside-applications > li").each(function (item) {
            var item = $(this);
            var itemOffset = item.offset();
            if (profileButtonOffset) {
                if (!lastItem && itemOffset.left >= profileButtonOffset.left) {
                    lastItem = item.addClass("overlap").prev().prev().prev();
                }
            }
        });
        
        if (lastItem && lastItem.nextAll().length) {
            lastItem.nextAll().addClass("overlap");
            var $moreApps = $('<li id="show-next-apps"><a href="javascript:;" data-toggle="dropdown"><i class="icon-sort-down"></i>More</a><ul id="overlaped-apps" class="dropdown-menu" role="menu"></ul></li>');
            $("#swissinside-applications").append($moreApps);
            $("#overlaped-apps")
                .html("")
                .append($("#swissinside-applications > .overlap").clone())
                .css({
                    left: lastItem.offset().left,
                    top: lastItem.offset().top + 60
                });
        }
    };

    updateButtons();

    $(window).resize(function () {
        updateButtons();
    });

});