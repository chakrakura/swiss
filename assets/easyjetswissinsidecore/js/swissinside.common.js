// Variables globales
swissinside.last_a_for_all = null;
swissinside.last_b_for_all = null;
swissinside.last_a = null;
swissinside.last_b = null;

swissinside.menuSelected = function(id) {
    $("#" + id).addClass("active  current-page");
    $("#" + id).parents("li").addClass("active");
    if ($(window).width() > 768) $("#" + id).parents("li").addClass("open");
};

swissinside.advancedSearch = function() {
    if($("#advanced_search_pannel").is(':hidden')) {
        $("#advanced_search_pannel").slideDown();
        $("#advanced_show_status").val(1);
    }
    else {
        $("#advanced_search_pannel").slideUp();
        $("#advanced_show_status").val(0);
    }
};

swissinside.lsiteAllUsers = function listeAllUsers(a, b) {
	var liste = "";
	var launch_xajax = true;

	if (swissinside.last_a_for_all && swissinside.last_b_for_all)
	{
		liste = document.getElementById("all_" + swissinside.last_a_for_all + "_" + swissinside.last_b_for_all);
		if(swissinside.last_a_for_all == a && swissinside.last_b_for_all == b && liste.innerHTML != "")
		{
			liste.innerHTML = "";
			launch_xajax = false;
		}
		liste.innerHTML ="";
	}
	swissinside.last_a_for_all = a;
	swissinside.last_b_for_all = b;

	if (launch_xajax) xajax_liste_users(a, b, id_user, 1);
};

swissinside.listeSelectedUsers = function listeSelectedUsers(a, b) {

	var liste = "";
	var launch_xajax = true;

	if (swissinside.last_a && swissinside.last_b)
	{
		liste = document.getElementById(last_a + "_" + last_b);
		if(swissinside.last_a == a && swissinside.last_b == b && liste.innerHTML != "")
		{
			liste.innerHTML = "";
			launch_xajax = false;
		}
		liste.innerHTML ="";
	}
	swissinside.last_a = a;
	swissinside.last_b = b;

	if (launch_xajax) xajax_liste_users(a, b, id_user, 0);
};

swissinside.listeUsers = function(a, b, all) {
    if(all == 1) swissinside.listeAllUsers(a, b);
	else swissinside.listeSelectedUsers(a, b);
};

swissinside.personalDataConfirmation = function(url) {
    if(bootbox.confirm("Are you sure that all your personnal data are up to date ?", function(result) {
        if(result) {
            window.location.href = url;
        }
    }));
};

swissinside.SupportMessageConfirmation = function(url) {
    $.ajax({
        url: url
    });
};
swissinside.simpleDataTable = function($jqueryObject, config)  {
    var datatableConfig = {
        "bJQueryUI": true,
        "sPaginationType": "full_numbers",
        "sDom": '<""l>t<"F"fpr>',
        "fnRowCallback" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
            // Generate buttons
            var $th = $(this).find("tr:first th");
            $("td", nRow).each(function(id, field) {
                if($th.eq(id).hasClass("hidden-xs")) $(this).addClass('hidden-xs');
            });
        }
    };

    if(config !== undefined) {
        $.extend(datatableConfig, config);
    }
    $jqueryObject.dataTable(datatableConfig);
};

swissinside.activeIcheck = function() {
    var checkboxClass = 'icheckbox_flat-blue';
    var radioClass = 'iradio_flat-blue';
    $('input[type=checkbox].icheck,input[type=radio].icheck').iCheck({
        checkboxClass: checkboxClass,
        radioClass: radioClass
    });
};

swissinside.validate = function($form, validateConfig) {

    var config = $.extend(
        {
            errorClass: "help-block",
                    errorElement: "span",
                    highlight:function(element, errorClass, validClass) {
                            $(element).parents('.form-group').addClass('has-error');
                    },
                    unhighlight: function(element, errorClass, validClass) {
                            $(element).parents('.form-group').removeClass('has-error');
                    }
        }, validateConfig
    );

    $form.validate(config);
};

swissinside.popup = function(L,H,F,TL,SR,ST) {
    if(TL === undefined) TL = "no";
    if(SR === undefined) SR = "yes";
    if(ST === undefined) ST = "no";

    var vpos=(screen.height-H)/2;
    var hpos=(screen.width-L)/2;
    window.open(F,'','top='+vpos+',left='+hpos+',width='+L+',height='+H+',toolbar='+TL+', scrollbars='+SR+',status='+ST+'');
} ;

swissinside.enablePlaceholders = function(item) {
    item = item || $("input, textarea");
    item.placeholder();
};

swissinside.switch_user_loaded = false;

swissinside.confirm_switch_user = function(username) {
    bootbox.confirm('Do you really want to switch to connect as ' + username, function(confirmation) {
        if (confirmation) {
            window.location.href = "/?_switch_user=" + username;
        }
    });
};

swissinside.switch_user = function() {
    bootbox.dialog({
      title: "Select the user which you want to logon with.",
      message: '<div class="widget-box">' +
                '<div class="widget-title">' +
                    '<span class="icon">' +
                        '<i class="icon-th"></i>' +
                    '</span>' +
                    '<h5>Employees</h5>' +
                '</div>' +
                '<div class="widget-content nopadding">' +
                    '<table width="100%" class="table table-bordered table-striped table-hover data-table" id="switch-user-content">' +
                         '<thead>' +
                         '<tr>' +
                         '<th>Last name</th>' +
                         '<th>First name</th>' +
                         '<th class="hidden-xs">Employee Id</th>' +
                         '<th style="width:180px">Actions</th>' +
                         '</tr>' +
                         '</thead>' +
                         '<tbody>' +
                         '</tbody>' +
                     '</table>' +
              '</div>' +
              '</div></div>'
    });

    if (!swissinside.switch_user_loaded) {
        $.ajax({
            dataType: "json",
            url: '/switch_user/users_list',
            success: function(data) {
                var $table = $("#switch-user-content");
                var $tableContent = $table.find("tbody");

                for (var i = 0; i < data.length; i++) {
                    $tableContent.append(
                        '<tr>' +
                            '<td>' + data[i].firstname + '</td>' +
                            '<td>' + data[i].lastname + '</td>' +
                            '<td>' + data[i].username + '</td>' +
                            '<td><a class="btn btn-default" href="javascript:swissinside.confirm_switch_user(\'' + data[i].username + '\')"><i class="icon-rotate-right"> </i>Switch</a></td>' +
                        '</tr>'
                    );
                }
                swissinside.simpleDataTable($table);
            }
        });
    }


    swissinside.switch_user_loaded = true;



}




$(function() {

    if($("body").hasClass("popup")) return;
    if(navigator.appName.indexOf("Internet Explorer")===-1) {
        var $itemsToFix = $("select option[value='']");
        $itemsToFix.attr("value", "fix-for-select2");
        $("select").css("width", "100%").select2({
            allowClear: true,
            placeholder: "-- Select --"
        });
        $itemsToFix.attr("value", "");
        $("select").select2({allowClear:true});
        $(".select2-chosen").each(function() { if($(this).html() == "undefined") $(this).html('-- Select --'); });
    }

    swissinside.activeIcheck();
    swissinside.enablePlaceholders();

});

$(function() {
   $('body').on('hidden.bs.modal', '.nocache', function () {
        $(this).removeData('bs.modal');
        $(this).find(".modal-body").html('Loading...');
   });
});

$(function() {
   $("input[data-enable-datepicker]").datepicker({
        format: 'dd/mm/yyyy',
        weekStart: 1,
        autoclose: true
    });
});
