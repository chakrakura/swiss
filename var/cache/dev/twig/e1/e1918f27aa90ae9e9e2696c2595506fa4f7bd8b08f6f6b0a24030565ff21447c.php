<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @EasyjetSwissinsideCore/AdGroup/edit.html.twig */
class __TwigTemplate_80d35a8d690a329bd5fb31295fb16f4fd44e098536da2eb0da7c70894a8874da extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'specificJs' => [$this, 'block_specificJs'],
            'specificCss' => [$this, 'block_specificCss'],
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "EasyjetSwissinsideCoreBundle:Base:swissinsideStructure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSwissinsideCore/AdGroup/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSwissinsideCore/AdGroup/edit.html.twig"));

        $this->parent = $this->loadTemplate("EasyjetSwissinsideCoreBundle:Base:swissinsideStructure.html.twig", "@EasyjetSwissinsideCore/AdGroup/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Update users list for group";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 2
    public function block_specificJs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificJs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificJs"));

        echo " ";
        $this->displayParentBlock("specificJs", $context, $blocks);
        echo "
<script>
    \$(function () {
        \$('#loading').modal('show');

        var group = '";
        // line 7
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 7, $this->source); })()), "ldap_group_name", [], "any", false, false, false, 7), "js"), "html", null, true);
        echo "';

        var oDatatable = \$(\"#ad-users\").DataTable({
            \"bJQueryUI\": true,
            \"sPaginationType\": \"full_numbers\",
            \"sDom\": '<\"\"l>t<\"F\"fpr>',
            \"aoColumns\": [
                null, // Login
                null, // First name
                null, // Last name
                { \"bVisible\": true }, // Action
                { \"bSortable\": false, \"bVisible\": false }  // Nothing ?
            ],
            \"fnRowCallback\": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                \$(\"td:eq(2)\", nRow).text(
                    aData[2].replace(/\\\\/g, '')
                );

                \$(\"td:eq(3)\", nRow).html(
                    '<a data-user=\"' + aData[1] + ' ' + aData[2] + '\" data-ad-user=\"' + aData[3] + '\" class=\"btn btn-danger btn-small ";
        // line 26
        if ((isset($context["locked"]) || array_key_exists("locked", $context) ? $context["locked"] : (function () { throw new RuntimeError('Variable "locked" does not exist.', 26, $this->source); })())) {
            echo "disabled";
        }
        echo "\" href=\"javascript:;\">Remove</a>'
                );
            },

        });

        \$.ajax({
            dataType: \"json\",
            url: '";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ad_group_members");
        echo "?adGroup=";
        echo twig_escape_filter($this->env, twig_urlencode_filter(twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 34, $this->source); })()), "ldap_group_name", [], "any", false, false, false, 34)), "html", null, true);
        echo "',
            success: function (data) {
                if (data.members) {
                    for (var i = 0; i < data.members.length; i++) {
                        oDatatable.row.add([
                            data.members[i].login,
                            data.members[i].firstname,
                            data.members[i].lastname,
                            data.members[i].dn,
                            ''
                        ]);

                    }
                    oDatatable.draw(false);
                }

            }
        }).fail(function () {
            bootbox.alert(\"An error occured during the ajax load.\")
        }).complete(function () {
            \$('#loading').modal('hide');
        });

        \$(\"body\").on(\"click\", \"[data-ad-user]:not(.disabled)\", function () {
            var user = \$(this).data(\"adUser\");
            var self = this;

            bootbox.confirm(\"Do you really want to remove the user '\" + \$(this).data('user') + \"' from the group '";
        // line 61
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 61, $this->source); })()), "group_name", [], "any", false, false, false, 61), "js"), "html", null, true);
        echo "' ?\", function (confirmation) {
                if (confirmation) {
                    \$.ajax({
                        dataType: \"json\",
                        url: '";
        // line 65
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ad_update_right");
        echo "',
                        data: {
                            user: user,
                            group: group,
                            accessGranted: 0
                        }
                    }).done(function (data, item) {
                        if (data.error) {
                            bootbox.alert(data.error);
                        }
                        if (data.accessGranted == false) {
                            oDatatable.row(\$(self).parents('tr'))
                                .remove()
                                .draw();
                        }
                    }).fail(function (e) {
                        bootbox.alert(\"An error occured during the process. Thanks to refresh the page and try again\");
                    });
                }
            });
        });

        var autocompleteJqXhr = null;
        \$(\"#ad-user\").autocomplete({
            delay: 300,
            search: function (event, ui) {
                \$('#ad-user').addClass('spinner');
            },
            open: function (event, ui) {
                \$('#ad-user').removeClass('spinner');
            },
            response: function (event, ui) {
                \$('#ad-user').removeClass('spinner');
            },
            source: function (request, response) {
                if (autocompleteJqXhr) {
                    autocompleteJqXhr.abort();
                }
                autocompleteJqXhr = \$.ajax({
                    url: \"";
        // line 104
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ad_get_users");
        echo "\",
                    dataType: \"json\",
                    data: {
                        group: '";
        // line 107
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 107, $this->source); })()), "ldap_group_name", [], "any", false, false, false, 107), "js"), "html", null, true);
        echo "',
                        term: request.term
                    },
                    success: function (data) {
                        response(data);
                    }
                });

            },

            select: function (event, ui) {
                \$(\"#ad-user\").val(ui.item.label);
                \$(\"#ad-user-target\").val(ui.item.value);

                return false;
            },
            create: function () {
                \$(this).data('ui-autocomplete')._renderItem = function (ul, item) {
                    return \$('<li>')
                        .append('<a>' + item.label + '</a>')
                        .appendTo(ul);
                };
            }
        });

        \$(\"#add-user-form\").submit(function (e) {
            e.preventDefault();
            if (!\$('#ad-user-target').val()) {
                bootbox.alert(\"Please select an employee before to continue\");
                return;
            }

            \$(\"#add-user-form input\").attr('disabled', 'disabled');

            \$.ajax({
                dataType: \"json\",
                url: '";
        // line 143
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ad_update_right");
        echo "',
                data: {
                    user: \$('#ad-user-target').val(),
                    group: group,
                    accessGranted: 1
                }
            }).done(function (data, item) {
                if (data.error) {
                    bootbox.alert(data.error);
                } else {
                    var dataLength = oDatatable.data().length;
                    var found = false;

                    for (var i = 0; i < dataLength; i++) {
                        if (oDatatable.data()[i][3] == data.adUser.dn) {
                            found = true;
                            break;
                        }
                    }

                    if (!found) {
                        oDatatable.row.add([
                            data.adUser.login,
                            data.adUser.firstname,
                            data.adUser.lastname,
                            data.adUser.dn,
                            ''
                        ]);
                        oDatatable.draw(false);
                    } else {
                        bootbox.alert(\"The user '\" + data.adUser.firstname + ' ' + data.adUser.lastname + \"' is already member of the group.\");
                    }

                }

            }).fail(function (e) {
                bootbox.alert(\"An error occured during the process. Thanks to refresh the page and try again\");
            }).complete(function (value) {
                \$(\"#add-user-form input\").removeAttr('disabled', 'disabled');
                \$(\"#add-user\").modal(\"hide\");
                \$('#ad-user-target, #ad-user').val('');
            });
        });
    });
    swissinside.menuSelected('menu_ad_groups');



</script> ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 191
    public function block_specificCss($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificCss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificCss"));

        // line 192
        echo "<style media=\"screen\">
    .ui-autocomplete {
        z-index: 2000;
    }

    .spinner {
        background-image: url(/bundles/easyjetswissinsidecore/img/spinner.gif);
        background-repeat: no-repeat;
        background-position: 99%;
    }

    }
</style>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 205
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 206
        echo "
<div id=\"loading\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <a class=\"close\" data-dismiss=\"modal\">×</a>
                <h3>Load in progress</h3>
            </div>
            <div class=\"modal-body\">
                <p>Please wait. Loading in progress ...</p>
            </div>
        </div>
        </form>
    </div>

</div>

<div id=\"form-content\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <form method=\"post\" action=\"";
        // line 225
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ad_rights_unlock");
        echo "?adGroup=";
        echo twig_escape_filter($this->env, twig_urlencode_filter(twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 225, $this->source); })()), "ldap_group_name", [], "any", false, false, false, 225)), "html", null, true);
        echo "\" autocomplete=\"off\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <a class=\"close\" data-dismiss=\"modal\">×</a>
                    <h3>Unlock active directory</h3>
                </div>
                <div class=\"modal-body\">

                    <div class=\"form-group\">
                        <label for=\"login\">Europe account</label>
                        <input type=\"text\" class=\"form-control\" id=\"login\" name=\"login\" placeholder=\"Europe account\" autocomplete=\"off\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\">Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Password\" autocomplete=\"off\">
                    </div>

                </div>
                <div class=\"modal-footer\">
                    <input class=\"btn btn-success\" type=\"submit\" value=\"Unlock Active directory\" id=\"submit\">
                    <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Cancel</a>
                </div>
            </div>
        </form>
    </div>

</div>


<div id=\"add-user\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <form id=\"add-user-form\" method=\"post\" action=\"\" autocomplete=\"off\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h3>Search an user</h3>
                    <a class=\"close\" data-dismiss=\"modal\">×</a>
                </div>
                <div class=\"modal-body\">

                    <div class=\"form-group\">
                        <label for=\"login\">User</label>
                        <input type=\"text\" class=\"form-control\" id=\"ad-user\" name=\"ad-user\" placeholder=\"Name / Login of the employee (autocomplete)\"
                            autocomplete=\"off\">
                        <input type=\"hidden\" id=\"ad-user-target\" name=\"ad-user-target\">
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <input class=\"btn btn-success\" type=\"submit\" value=\"Add user to group\" id=\"submit\">
                    <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Cancel</a>
                </div>
            </div>
        </form>
    </div>

</div>

<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Active directory groups</h1>
        <div id=\"description_help\">Hereafter, you can see the list of active directory groups that you can manage. Note that the changes are applied
            in real time when you check / uncheck the tick boxes</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"alert alert-info\">Your are editing the following right : ";
        // line 290
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 290, $this->source); })()), "group_name", [], "any", false, false, false, 290), "html", null, true);
        echo " ";
        if (twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 290, $this->source); })()), "type_user", [], "any", false, false, false, 290)) {
            echo "(right
                <strong>";
            // line 291
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 291, $this->source); })()), "type_user", [], "any", false, false, false, 291), "html", null, true);
            echo "</strong> for the
                <strong>'";
            // line 292
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["role"]) || array_key_exists("role", $context) ? $context["role"] : (function () { throw new RuntimeError('Variable "role" does not exist.', 292, $this->source); })()), "app_name", [], "any", false, false, false, 292), "html", null, true);
            echo "'</strong> application )";
        }
        echo "</div>
        </div>
    </div>

    ";
        // line 296
        if ((isset($context["locked"]) || array_key_exists("locked", $context) ? $context["locked"] : (function () { throw new RuntimeError('Variable "locked" does not exist.', 296, $this->source); })())) {
            // line 297
            echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"alert alert-warning\">
                <a data-toggle=\"modal\" href=\"#form-content\" class=\"btn btn-primary pull-right\">
                    <i class=\"icon-lock\"> </i> Unlock Ad</a>
                <p>
                    This page is currently in readonly. Cick the \"Unlock Ad\" button and enter your europe account in order to continue.
                    <br>&nbsp;
                </p>

            </div>
        </div>
    </div>
    ";
        } else {
            // line 311
            echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a data-toggle=\"modal\" href=\"#add-user\" class=\"btn btn-primary pull-right\">
                <i class=\"icon-user\"> </i> Add user</a>
        </div>
    </div>
    ";
        }
        // line 317
        echo " ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 317, $this->source); })()), "session", [], "any", false, false, false, 317), "flashbag", [], "any", false, false, false, 317), "get", [0 => "error"], "method", false, false, false, 317));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 318
            echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"alert alert-danger\">
                ";
            // line 321
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
            </div>
        </div>
    </div>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Active directory grous</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"ad-users\">
                        <thead>
                            <tr>
                                <th>Europe account</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th style=\"width:180px\">Access</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 360
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetSwissinsideCore/AdGroup/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  542 => 360,  519 => 327,  507 => 321,  502 => 318,  497 => 317,  488 => 311,  472 => 297,  470 => 296,  461 => 292,  457 => 291,  451 => 290,  381 => 225,  360 => 206,  350 => 205,  327 => 192,  317 => 191,  258 => 143,  219 => 107,  213 => 104,  171 => 65,  164 => 61,  132 => 34,  119 => 26,  97 => 7,  79 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"EasyjetSwissinsideCoreBundle:Base:swissinsideStructure.html.twig\" %} {% block title %}Update users list for group{%
endblock %} {% block specificJs %} {{ parent() }}
<script>
    \$(function () {
        \$('#loading').modal('show');

        var group = '{{ role.ldap_group_name|e('js') }}';

        var oDatatable = \$(\"#ad-users\").DataTable({
            \"bJQueryUI\": true,
            \"sPaginationType\": \"full_numbers\",
            \"sDom\": '<\"\"l>t<\"F\"fpr>',
            \"aoColumns\": [
                null, // Login
                null, // First name
                null, // Last name
                { \"bVisible\": true }, // Action
                { \"bSortable\": false, \"bVisible\": false }  // Nothing ?
            ],
            \"fnRowCallback\": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {
                \$(\"td:eq(2)\", nRow).text(
                    aData[2].replace(/\\\\/g, '')
                );

                \$(\"td:eq(3)\", nRow).html(
                    '<a data-user=\"' + aData[1] + ' ' + aData[2] + '\" data-ad-user=\"' + aData[3] + '\" class=\"btn btn-danger btn-small {% if locked %}disabled{% endif %}\" href=\"javascript:;\">Remove</a>'
                );
            },

        });

        \$.ajax({
            dataType: \"json\",
            url: '{{ url('ad_group_members') }}?adGroup={{ role.ldap_group_name|url_encode }}',
            success: function (data) {
                if (data.members) {
                    for (var i = 0; i < data.members.length; i++) {
                        oDatatable.row.add([
                            data.members[i].login,
                            data.members[i].firstname,
                            data.members[i].lastname,
                            data.members[i].dn,
                            ''
                        ]);

                    }
                    oDatatable.draw(false);
                }

            }
        }).fail(function () {
            bootbox.alert(\"An error occured during the ajax load.\")
        }).complete(function () {
            \$('#loading').modal('hide');
        });

        \$(\"body\").on(\"click\", \"[data-ad-user]:not(.disabled)\", function () {
            var user = \$(this).data(\"adUser\");
            var self = this;

            bootbox.confirm(\"Do you really want to remove the user '\" + \$(this).data('user') + \"' from the group '{{ role.group_name|e('js') }}' ?\", function (confirmation) {
                if (confirmation) {
                    \$.ajax({
                        dataType: \"json\",
                        url: '{{ url('ad_update_right') }}',
                        data: {
                            user: user,
                            group: group,
                            accessGranted: 0
                        }
                    }).done(function (data, item) {
                        if (data.error) {
                            bootbox.alert(data.error);
                        }
                        if (data.accessGranted == false) {
                            oDatatable.row(\$(self).parents('tr'))
                                .remove()
                                .draw();
                        }
                    }).fail(function (e) {
                        bootbox.alert(\"An error occured during the process. Thanks to refresh the page and try again\");
                    });
                }
            });
        });

        var autocompleteJqXhr = null;
        \$(\"#ad-user\").autocomplete({
            delay: 300,
            search: function (event, ui) {
                \$('#ad-user').addClass('spinner');
            },
            open: function (event, ui) {
                \$('#ad-user').removeClass('spinner');
            },
            response: function (event, ui) {
                \$('#ad-user').removeClass('spinner');
            },
            source: function (request, response) {
                if (autocompleteJqXhr) {
                    autocompleteJqXhr.abort();
                }
                autocompleteJqXhr = \$.ajax({
                    url: \"{{ url('ad_get_users') }}\",
                    dataType: \"json\",
                    data: {
                        group: '{{ role.ldap_group_name|e('js') }}',
                        term: request.term
                    },
                    success: function (data) {
                        response(data);
                    }
                });

            },

            select: function (event, ui) {
                \$(\"#ad-user\").val(ui.item.label);
                \$(\"#ad-user-target\").val(ui.item.value);

                return false;
            },
            create: function () {
                \$(this).data('ui-autocomplete')._renderItem = function (ul, item) {
                    return \$('<li>')
                        .append('<a>' + item.label + '</a>')
                        .appendTo(ul);
                };
            }
        });

        \$(\"#add-user-form\").submit(function (e) {
            e.preventDefault();
            if (!\$('#ad-user-target').val()) {
                bootbox.alert(\"Please select an employee before to continue\");
                return;
            }

            \$(\"#add-user-form input\").attr('disabled', 'disabled');

            \$.ajax({
                dataType: \"json\",
                url: '{{ url('ad_update_right') }}',
                data: {
                    user: \$('#ad-user-target').val(),
                    group: group,
                    accessGranted: 1
                }
            }).done(function (data, item) {
                if (data.error) {
                    bootbox.alert(data.error);
                } else {
                    var dataLength = oDatatable.data().length;
                    var found = false;

                    for (var i = 0; i < dataLength; i++) {
                        if (oDatatable.data()[i][3] == data.adUser.dn) {
                            found = true;
                            break;
                        }
                    }

                    if (!found) {
                        oDatatable.row.add([
                            data.adUser.login,
                            data.adUser.firstname,
                            data.adUser.lastname,
                            data.adUser.dn,
                            ''
                        ]);
                        oDatatable.draw(false);
                    } else {
                        bootbox.alert(\"The user '\" + data.adUser.firstname + ' ' + data.adUser.lastname + \"' is already member of the group.\");
                    }

                }

            }).fail(function (e) {
                bootbox.alert(\"An error occured during the process. Thanks to refresh the page and try again\");
            }).complete(function (value) {
                \$(\"#add-user-form input\").removeAttr('disabled', 'disabled');
                \$(\"#add-user\").modal(\"hide\");
                \$('#ad-user-target, #ad-user').val('');
            });
        });
    });
    swissinside.menuSelected('menu_ad_groups');



</script> {% endblock specificJs %} {% block specificCss %}
<style media=\"screen\">
    .ui-autocomplete {
        z-index: 2000;
    }

    .spinner {
        background-image: url(/bundles/easyjetswissinsidecore/img/spinner.gif);
        background-repeat: no-repeat;
        background-position: 99%;
    }

    }
</style>
{% endblock specificCss %} {% block container %}

<div id=\"loading\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <a class=\"close\" data-dismiss=\"modal\">×</a>
                <h3>Load in progress</h3>
            </div>
            <div class=\"modal-body\">
                <p>Please wait. Loading in progress ...</p>
            </div>
        </div>
        </form>
    </div>

</div>

<div id=\"form-content\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <form method=\"post\" action=\"{{ url('ad_rights_unlock') }}?adGroup={{ role.ldap_group_name|url_encode }}\" autocomplete=\"off\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <a class=\"close\" data-dismiss=\"modal\">×</a>
                    <h3>Unlock active directory</h3>
                </div>
                <div class=\"modal-body\">

                    <div class=\"form-group\">
                        <label for=\"login\">Europe account</label>
                        <input type=\"text\" class=\"form-control\" id=\"login\" name=\"login\" placeholder=\"Europe account\" autocomplete=\"off\">
                    </div>
                    <div class=\"form-group\">
                        <label for=\"password\">Password</label>
                        <input type=\"password\" class=\"form-control\" id=\"password\" name=\"password\" placeholder=\"Password\" autocomplete=\"off\">
                    </div>

                </div>
                <div class=\"modal-footer\">
                    <input class=\"btn btn-success\" type=\"submit\" value=\"Unlock Active directory\" id=\"submit\">
                    <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Cancel</a>
                </div>
            </div>
        </form>
    </div>

</div>


<div id=\"add-user\" class=\"modal fade\">
    <div class=\"modal-dialog\">
        <form id=\"add-user-form\" method=\"post\" action=\"\" autocomplete=\"off\">
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <h3>Search an user</h3>
                    <a class=\"close\" data-dismiss=\"modal\">×</a>
                </div>
                <div class=\"modal-body\">

                    <div class=\"form-group\">
                        <label for=\"login\">User</label>
                        <input type=\"text\" class=\"form-control\" id=\"ad-user\" name=\"ad-user\" placeholder=\"Name / Login of the employee (autocomplete)\"
                            autocomplete=\"off\">
                        <input type=\"hidden\" id=\"ad-user-target\" name=\"ad-user-target\">
                    </div>
                </div>
                <div class=\"modal-footer\">
                    <input class=\"btn btn-success\" type=\"submit\" value=\"Add user to group\" id=\"submit\">
                    <a href=\"#\" class=\"btn\" data-dismiss=\"modal\">Cancel</a>
                </div>
            </div>
        </form>
    </div>

</div>

<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Active directory groups</h1>
        <div id=\"description_help\">Hereafter, you can see the list of active directory groups that you can manage. Note that the changes are applied
            in real time when you check / uncheck the tick boxes</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"alert alert-info\">Your are editing the following right : {{ role.group_name }} {% if role.type_user %}(right
                <strong>{{ role.type_user }}</strong> for the
                <strong>'{{ role.app_name }}'</strong> application ){% endif %}</div>
        </div>
    </div>

    {% if locked %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"alert alert-warning\">
                <a data-toggle=\"modal\" href=\"#form-content\" class=\"btn btn-primary pull-right\">
                    <i class=\"icon-lock\"> </i> Unlock Ad</a>
                <p>
                    This page is currently in readonly. Cick the \"Unlock Ad\" button and enter your europe account in order to continue.
                    <br>&nbsp;
                </p>

            </div>
        </div>
    </div>
    {% else %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a data-toggle=\"modal\" href=\"#add-user\" class=\"btn btn-primary pull-right\">
                <i class=\"icon-user\"> </i> Add user</a>
        </div>
    </div>
    {% endif %} {% for flashMessage in app.session.flashbag.get('error') %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"alert alert-danger\">
                {{ flashMessage }}
            </div>
        </div>
    </div>

    {% endfor %}

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Active directory grous</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"ad-users\">
                        <thead>
                            <tr>
                                <th>Europe account</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th style=\"width:180px\">Access</th>
                            </tr>
                        </thead>
                        <tbody>
                            {# {% for user in usersList %}
                            <tr>
                                <td>{{ user.login }}</td>
                                <td>{{ user.firstname }}</td>
                                <td>{{ user.lastname }}</td>
                                <td>{{ user.dn }}</td>
                                <td style=\"width:180px\">
                                    <input type=\"checkbox\" disabled=\"disabled\" class=\"icheck access-right\" data-user-dn=\"{{ user.dn }}\" {{ user.group_member
                                        ? 'checked=\"checked\"' : '' }}>
                                </td>
                            </tr>
                            {% endfor %} #}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock container %}", "@EasyjetSwissinsideCore/AdGroup/edit.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\SwissinsideCoreBundle\\Resources\\views\\AdGroup\\edit.html.twig");
    }
}
