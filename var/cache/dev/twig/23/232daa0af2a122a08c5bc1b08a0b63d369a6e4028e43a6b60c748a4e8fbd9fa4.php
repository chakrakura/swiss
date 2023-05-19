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

/* @EasyjetHris/UsersImport/index.html.twig */
class __TwigTemplate_de043514568c306514c9e8ec9675a11c191f2610ca62f5ef2dff4f0438f61f97 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'specificJs' => [$this, 'block_specificJs'],
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@EasyjetHris/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/UsersImport/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/UsersImport/index.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetHris/UsersImport/index.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetHris/Base/structure.html.twig", "@EasyjetHris/UsersImport/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_specificJs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificJs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificJs"));

        $this->displayParentBlock("specificJs", $context, $blocks);
        echo "

";
        // line 7
        $context["viewUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("hris_users_import_logs_view", ["log" => "0"]);
        // line 8
        echo "
<script>
    \$(function() {
        var logFrom = \$(\"#logFrom\").val();
        var logTo = \$(\"#logTo\").val();

        \$('#logs-list').on('preXhr.dt', function ( e, settings, data ) {
            data.logFrom = logFrom;
            data.logTo = logTo;

            return data;
        });

        swissinside.simpleDataTable(\$(\"#logs-list\"), {
            \"bProcessing\": true,
            \"bServerSide\": true,
            \"sAjaxSource\": \"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("hris_users_import_logs_search");
        echo "\",
            \"aoColumns\" : [
                null, // Event date
                null, // Files
                null, // Status
                {\"bSortable\": false} // Id
            ],
            \"aaSorting\" : [[0, \"desc\"]],
            \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                // Generate buttons

                \$(\"td:eq(3)\", nRow).html(
                    '<a class=\"btn btn-default\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, (isset($context["viewUrl"]) || array_key_exists("viewUrl", $context) ? $context["viewUrl"] : (function () { throw new RuntimeError('Variable "viewUrl" does not exist.', 36, $this->source); })()), "html", null, true);
        echo "'+ aData[3] + '\"><i class=\"icon-eye-open\"></i> View log details</a>'
                );

                var badge = aData[2].toLowerCase();
                switch (badge) {
                    case \"failed\" :
                        badge = '<span class=\"badge badge-danger\">Failed</span>';
                        break;
                    case \"no_file_to_parse\" :
                        badge = '<span class=\"badge badge-success\">No file to parse</span>';
                        break;
                    case \"success\" :
                        badge = '<span class=\"badge badge-success\">Success</span>';
                        break;
                    case \"warning\" :
                        badge = '<span class=\"badge badge-warning\">Warning</span>';
                        break;
                    default :
                        badge = '<span class=\"badge badge-info\">' + badge + '</span>';
                        break;
                }

                \$(\"td:eq(2)\", nRow).html(
                    badge
                );

                var \$th = \$(this).find(\"tr:first th\");
                \$(\"td\", nRow).each(function(id, field) {
                    if(\$th.eq(id).hasClass(\"hidden-xs\")) \$(this).addClass('hidden-xs');
                });


            }
        });



    });

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 80
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 81
        echo "
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Logs page.</h1>
        <div id=\"description_help\">Here you can browse the logs for the users imports which concern the transfer Workday to swissinside. </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 90
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 90, $context, $this->getSourceContext());
        echo "
        </div>
    </div>

    <!-- Search form -->
    <form method=\"get\" action=\"\" class=\"form-horizontal\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-search\"></i>
                        </span>
                        <h5>Search form</h5>
                    </div>
                    <div class=\"widget-content nopadding\">

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"logFrom\">From</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"logFrom\" name=\"logFrom\" value=\"";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["logFrom"]) || array_key_exists("logFrom", $context) ? $context["logFrom"] : (function () { throw new RuntimeError('Variable "logFrom" does not exist.', 110, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" data-enable-datepicker=\"true\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"logTo\">To</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"logTo\" name=\"logTo\" value=\"";
        // line 117
        echo twig_escape_filter($this->env, (isset($context["logTo"]) || array_key_exists("logTo", $context) ? $context["logTo"] : (function () { throw new RuntimeError('Variable "logTo" does not exist.', 117, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" data-enable-datepicker=\"true\">
                            </div>
                        </div>

                        <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon-search\"></i> Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class=\"row\">
        <div class=\"col-xs-12\"><a class=\"pull-right btn btn-primary\" href=\"";
        // line 131
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("hris_users_import_new");
        echo "\"><i class=\"icon icon-upload\"></i> Import users</a></div>
    </div>

    <!-- Results to show -->
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Logs history</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"logs-list\">
                        <thead>
                            <tr>
                                <th>Event date</th>
                                <th>Files</th>
                                <th>Status</th>
                                <th style=\"width:20%;\">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
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
        return "@EasyjetHris/UsersImport/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  233 => 131,  216 => 117,  206 => 110,  183 => 90,  172 => 81,  162 => 80,  111 => 36,  96 => 24,  78 => 8,  76 => 7,  62 => 5,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetHris/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}


{% block specificJs %}{{ parent() }}

{% set viewUrl = url('hris_users_import_logs_view', {\"log\" : \"0\"} ) %}

<script>
    \$(function() {
        var logFrom = \$(\"#logFrom\").val();
        var logTo = \$(\"#logTo\").val();

        \$('#logs-list').on('preXhr.dt', function ( e, settings, data ) {
            data.logFrom = logFrom;
            data.logTo = logTo;

            return data;
        });

        swissinside.simpleDataTable(\$(\"#logs-list\"), {
            \"bProcessing\": true,
            \"bServerSide\": true,
            \"sAjaxSource\": \"{{ url('hris_users_import_logs_search') }}\",
            \"aoColumns\" : [
                null, // Event date
                null, // Files
                null, // Status
                {\"bSortable\": false} // Id
            ],
            \"aaSorting\" : [[0, \"desc\"]],
            \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                // Generate buttons

                \$(\"td:eq(3)\", nRow).html(
                    '<a class=\"btn btn-default\" href=\"{{ viewUrl }}'+ aData[3] + '\"><i class=\"icon-eye-open\"></i> View log details</a>'
                );

                var badge = aData[2].toLowerCase();
                switch (badge) {
                    case \"failed\" :
                        badge = '<span class=\"badge badge-danger\">Failed</span>';
                        break;
                    case \"no_file_to_parse\" :
                        badge = '<span class=\"badge badge-success\">No file to parse</span>';
                        break;
                    case \"success\" :
                        badge = '<span class=\"badge badge-success\">Success</span>';
                        break;
                    case \"warning\" :
                        badge = '<span class=\"badge badge-warning\">Warning</span>';
                        break;
                    default :
                        badge = '<span class=\"badge badge-info\">' + badge + '</span>';
                        break;
                }

                \$(\"td:eq(2)\", nRow).html(
                    badge
                );

                var \$th = \$(this).find(\"tr:first th\");
                \$(\"td\", nRow).each(function(id, field) {
                    if(\$th.eq(id).hasClass(\"hidden-xs\")) \$(this).addClass('hidden-xs');
                });


            }
        });



    });

</script>
{% endblock specificJs %}



{% block container %}

<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Logs page.</h1>
        <div id=\"description_help\">Here you can browse the logs for the users imports which concern the transfer Workday to swissinside. </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ macros.wizz() }}
        </div>
    </div>

    <!-- Search form -->
    <form method=\"get\" action=\"\" class=\"form-horizontal\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-search\"></i>
                        </span>
                        <h5>Search form</h5>
                    </div>
                    <div class=\"widget-content nopadding\">

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"logFrom\">From</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"logFrom\" name=\"logFrom\" value=\"{{ logFrom }}\" class=\"form-control\" data-enable-datepicker=\"true\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"logTo\">To</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"logTo\" name=\"logTo\" value=\"{{ logTo }}\" class=\"form-control\" data-enable-datepicker=\"true\">
                            </div>
                        </div>

                        <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon-search\"></i> Search</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

    <div class=\"row\">
        <div class=\"col-xs-12\"><a class=\"pull-right btn btn-primary\" href=\"{{ url('hris_users_import_new') }}\"><i class=\"icon icon-upload\"></i> Import users</a></div>
    </div>

    <!-- Results to show -->
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Logs history</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"logs-list\">
                        <thead>
                            <tr>
                                <th>Event date</th>
                                <th>Files</th>
                                <th>Status</th>
                                <th style=\"width:20%;\">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


{% endblock container %}
", "@EasyjetHris/UsersImport/index.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\HrisBundle\\Resources\\views\\UsersImport\\index.html.twig");
    }
}
