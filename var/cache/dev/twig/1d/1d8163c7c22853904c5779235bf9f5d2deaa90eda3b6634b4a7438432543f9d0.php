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

/* @EasyjetOtp/Otp/index.html.twig */
class __TwigTemplate_55669b68259e8a1d7b4aa3ba74d092523f967e4de04f0c34c5515af77aa20f56 extends Template
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
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@EasyjetOtp/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Otp/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Otp/index.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetOtp/Otp/index.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetOtp/Base/structure.html.twig", "@EasyjetOtp/Otp/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Make a claim adjsutment";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        $context["sectorEditUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("otp_sector_edit", ["row" => "0"]);
        // line 8
        $context["disruptionEditUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("otp_disruption_edit", ["row" => "0"]);
        // line 9
        echo "
<script>
    \$(function() {

        var effectiveDateFrom = \$(\"#effectiveDateFrom\").val();
        var effectiveDateTo = \$(\"#effectiveDateTo\").val();
        var disruptionInProgress = \$(\"#disruptionInProgress\").val();
        var hasPendingSectorAdjustment = \$(\"#hasPendingSectorAdjustment\").val();

        \$('#otp-list').on('preXhr.dt', function ( e, settings, data ) {
            data.effectiveDateFrom = effectiveDateFrom;
            data.effectiveDateTo = effectiveDateTo;
            data.disruptionInProgress = disruptionInProgress;
            data.hasPendingSectorAdjustment = hasPendingSectorAdjustment;

            return data;
        });    

        \$(\"body\").on(\"click\", \"a[data-remove-item]\",function(e) { 
            e.preventDefault();
            var url = \$(this).attr(\"href\");
            bootbox.confirm(\"Do you really want remove this row ?\", function(result) {
                if (result) {
                    window.location.href = url;
                };
                
            });
        });

        swissinside.simpleDataTable(\$(\"#otp-list\"), {
            \"bProcessing\": true,
            \"bServerSide\": true,
            \"sAjaxSource\": \"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("otp_search");
        echo "\",
            \"aoColumns\" : [
                null, // Effective date
                null, // Empno
                null, // First name
                null, // Lat name
                null, // Copensation grade
                null, // contract
                null, // N
                null, // S
                null, // M
                null, // L
                null, // XL
                {\"bSortable\": false} , // nb disruption
                {\"bSortable\": false}, // id
                {\"bSortable\": false, \"bVisible\" : false}, // Has disruption
                {\"bSortable\": false, \"bVisible\" : false}, // Has disruption comment
                {\"bSortable\": false, \"bVisible\" : false}, // Has sector comment
                {\"bSortable\": false, \"bVisible\" : false}  // Sector status
            ],
            \"aaSorting\" : [[0, \"asc\"], [3, \"asc\"], [2, \"asc\"]],
            \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                // Generate buttons  
                
                var btnDisruptionClass = (aData[14] == 1 ? \"btn-info\" : \"btn-default\");
                btnDisruptionClass = (aData[13] == 1 ? \"btn-warning\" : btnDisruptionClass);

                var btnSectorAdjClass = \"\";

                switch(aData[16]) {
                    case \"accepted\" : btnSectorAdjClass = \"btn-success\"; break;
                    case \"refused\" : btnSectorAdjClass = \"btn-danger\"; break;
                    case \"pending\" : btnSectorAdjClass = \"btn-info\"; break;
                    default : btnSectorAdjClass = \"btn-default\"; break;
                }

                \$(\"td:eq(12)\", nRow).html(
                    '<a class=\"btn btn-default ' + btnSectorAdjClass + ' btn-sm\" href=\"";
        // line 78
        echo twig_escape_filter($this->env, (isset($context["sectorEditUrl"]) || array_key_exists("sectorEditUrl", $context) ? $context["sectorEditUrl"] : (function () { throw new RuntimeError('Variable "sectorEditUrl" does not exist.', 78, $this->source); })()), "html", null, true);
        echo "'+ aData[12] + '\"><i class=\"icon-eye-open\"></i> Sectors adj.</a>' +
                    '<a class=\"btn ' + btnDisruptionClass + ' btn-sm\" href=\"";
        // line 79
        echo twig_escape_filter($this->env, (isset($context["disruptionEditUrl"]) || array_key_exists("disruptionEditUrl", $context) ? $context["disruptionEditUrl"] : (function () { throw new RuntimeError('Variable "disruptionEditUrl" does not exist.', 79, $this->source); })()), "html", null, true);
        echo "' + aData[12] + '\"><i class=\"icon-plane\"></i> Disruption claim</a> '
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

    // line 96
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 97
        echo "        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Disruption claim and sector adjustments</h1>  
        <div id=\"description_help\">
            Here you can claim you disrumtion and make comments regarding sectors adjustments for the previous month.
        </div>
    </div>

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
                            <label class=\"control-label\" for=\"effectiveDate\">Effective date (from)</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"effectiveDateFrom\" name=\"effectiveDateFrom\" value=\"";
        // line 121
        echo twig_escape_filter($this->env, (isset($context["effectiveDateFrom"]) || array_key_exists("effectiveDateFrom", $context) ? $context["effectiveDateFrom"] : (function () { throw new RuntimeError('Variable "effectiveDateFrom" does not exist.', 121, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" data-enable-datepicker=\"true\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"effectiveDateTo\">Effective date (to)</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"effectiveDateTo\" name=\"effectiveDateTo\" value=\"";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["effectiveDateTo"]) || array_key_exists("effectiveDateTo", $context) ? $context["effectiveDateTo"] : (function () { throw new RuntimeError('Variable "effectiveDateTo" does not exist.', 128, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" data-enable-datepicker=\"true\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"effectiveDateTo\">Disruption in progress</label>
                            <div class=\"controls\">
                                <select name=\"disruptionInProgress\" id=\"disruptionInProgress\">
                                    <option ";
        // line 136
        echo (((0 === twig_compare((isset($context["disruptionInProgress"]) || array_key_exists("disruptionInProgress", $context) ? $context["disruptionInProgress"] : (function () { throw new RuntimeError('Variable "disruptionInProgress" does not exist.', 136, $this->source); })()), "all"))) ? ("selected=\"selected\"") : (""));
        echo " value=\"all\">All</option>
                                    <option ";
        // line 137
        echo (((0 === twig_compare((isset($context["disruptionInProgress"]) || array_key_exists("disruptionInProgress", $context) ? $context["disruptionInProgress"] : (function () { throw new RuntimeError('Variable "disruptionInProgress" does not exist.', 137, $this->source); })()), "yes"))) ? ("selected=\"selected\"") : (""));
        echo " value=\"yes\">Yes</option>
                                    <option ";
        // line 138
        echo (((0 === twig_compare((isset($context["disruptionInProgress"]) || array_key_exists("disruptionInProgress", $context) ? $context["disruptionInProgress"] : (function () { throw new RuntimeError('Variable "disruptionInProgress" does not exist.', 138, $this->source); })()), "no"))) ? ("selected=\"selected\"") : (""));
        echo " value=\"no\">No</option>
                                </select>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"hasPendingSectorAdjustment\">Has a pending sector adj.</label>
                            <div class=\"controls\">
                                <select name=\"hasPendingSectorAdjustment\" id=\"hasPendingSectorAdjustment\">
                                    <option ";
        // line 147
        echo (((0 === twig_compare((isset($context["hasPendingSectorAdjustment"]) || array_key_exists("hasPendingSectorAdjustment", $context) ? $context["hasPendingSectorAdjustment"] : (function () { throw new RuntimeError('Variable "hasPendingSectorAdjustment" does not exist.', 147, $this->source); })()), "all"))) ? ("selected=\"selected\"") : (""));
        echo " value=\"all\">All</option>
                                    <option ";
        // line 148
        echo (((0 === twig_compare((isset($context["hasPendingSectorAdjustment"]) || array_key_exists("hasPendingSectorAdjustment", $context) ? $context["hasPendingSectorAdjustment"] : (function () { throw new RuntimeError('Variable "hasPendingSectorAdjustment" does not exist.', 148, $this->source); })()), "yes"))) ? ("selected=\"selected\"") : (""));
        echo " value=\"yes\">Yes</option>
                                </select>
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


    <!-- Results to show -->
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 168
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 168, $context, $this->getSourceContext());
        echo "
        </div>        

        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Expenses list</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"otp-list\">
                        <thead>
                            <tr>
                                <th>Cvp month</th>
                                <th>Empno</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Comp. grade</th>
                                <th>Contract</th>
                                <th>N</th>
                                <th>S</th>
                                <th>M</th>
                                <th>L</th>
                                <th>XL</th>
                                <th>Nb disr.</th>
                                <th style=\"width:150px\">Action</th>
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
        return "@EasyjetOtp/Otp/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 168,  284 => 148,  280 => 147,  268 => 138,  264 => 137,  260 => 136,  249 => 128,  239 => 121,  213 => 97,  203 => 96,  178 => 79,  174 => 78,  134 => 41,  100 => 9,  98 => 8,  96 => 7,  82 => 5,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetOtp/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Make a claim adjsutment{% endblock %}
{% block specificJs %}{{ parent() }}

{% set sectorEditUrl = url('otp_sector_edit', {\"row\" : \"0\"} ) %}
{% set disruptionEditUrl = url('otp_disruption_edit', {\"row\" : \"0\"} ) %}

<script>
    \$(function() {

        var effectiveDateFrom = \$(\"#effectiveDateFrom\").val();
        var effectiveDateTo = \$(\"#effectiveDateTo\").val();
        var disruptionInProgress = \$(\"#disruptionInProgress\").val();
        var hasPendingSectorAdjustment = \$(\"#hasPendingSectorAdjustment\").val();

        \$('#otp-list').on('preXhr.dt', function ( e, settings, data ) {
            data.effectiveDateFrom = effectiveDateFrom;
            data.effectiveDateTo = effectiveDateTo;
            data.disruptionInProgress = disruptionInProgress;
            data.hasPendingSectorAdjustment = hasPendingSectorAdjustment;

            return data;
        });    

        \$(\"body\").on(\"click\", \"a[data-remove-item]\",function(e) { 
            e.preventDefault();
            var url = \$(this).attr(\"href\");
            bootbox.confirm(\"Do you really want remove this row ?\", function(result) {
                if (result) {
                    window.location.href = url;
                };
                
            });
        });

        swissinside.simpleDataTable(\$(\"#otp-list\"), {
            \"bProcessing\": true,
            \"bServerSide\": true,
            \"sAjaxSource\": \"{{ url('otp_search') }}\",
            \"aoColumns\" : [
                null, // Effective date
                null, // Empno
                null, // First name
                null, // Lat name
                null, // Copensation grade
                null, // contract
                null, // N
                null, // S
                null, // M
                null, // L
                null, // XL
                {\"bSortable\": false} , // nb disruption
                {\"bSortable\": false}, // id
                {\"bSortable\": false, \"bVisible\" : false}, // Has disruption
                {\"bSortable\": false, \"bVisible\" : false}, // Has disruption comment
                {\"bSortable\": false, \"bVisible\" : false}, // Has sector comment
                {\"bSortable\": false, \"bVisible\" : false}  // Sector status
            ],
            \"aaSorting\" : [[0, \"asc\"], [3, \"asc\"], [2, \"asc\"]],
            \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                // Generate buttons  
                
                var btnDisruptionClass = (aData[14] == 1 ? \"btn-info\" : \"btn-default\");
                btnDisruptionClass = (aData[13] == 1 ? \"btn-warning\" : btnDisruptionClass);

                var btnSectorAdjClass = \"\";

                switch(aData[16]) {
                    case \"accepted\" : btnSectorAdjClass = \"btn-success\"; break;
                    case \"refused\" : btnSectorAdjClass = \"btn-danger\"; break;
                    case \"pending\" : btnSectorAdjClass = \"btn-info\"; break;
                    default : btnSectorAdjClass = \"btn-default\"; break;
                }

                \$(\"td:eq(12)\", nRow).html(
                    '<a class=\"btn btn-default ' + btnSectorAdjClass + ' btn-sm\" href=\"{{ sectorEditUrl }}'+ aData[12] + '\"><i class=\"icon-eye-open\"></i> Sectors adj.</a>' +
                    '<a class=\"btn ' + btnDisruptionClass + ' btn-sm\" href=\"{{ disruptionEditUrl }}' + aData[12] + '\"><i class=\"icon-plane\"></i> Disruption claim</a> '
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
        <h1 id=\"titre_help\">Disruption claim and sector adjustments</h1>  
        <div id=\"description_help\">
            Here you can claim you disrumtion and make comments regarding sectors adjustments for the previous month.
        </div>
    </div>

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
                            <label class=\"control-label\" for=\"effectiveDate\">Effective date (from)</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"effectiveDateFrom\" name=\"effectiveDateFrom\" value=\"{{ effectiveDateFrom }}\" class=\"form-control\" data-enable-datepicker=\"true\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"effectiveDateTo\">Effective date (to)</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"effectiveDateTo\" name=\"effectiveDateTo\" value=\"{{ effectiveDateTo }}\" class=\"form-control\" data-enable-datepicker=\"true\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"effectiveDateTo\">Disruption in progress</label>
                            <div class=\"controls\">
                                <select name=\"disruptionInProgress\" id=\"disruptionInProgress\">
                                    <option {{ disruptionInProgress == \"all\" ? 'selected=\"selected\"' : '' }} value=\"all\">All</option>
                                    <option {{ disruptionInProgress == \"yes\" ? 'selected=\"selected\"' : '' }} value=\"yes\">Yes</option>
                                    <option {{ disruptionInProgress == \"no\" ? 'selected=\"selected\"' : '' }} value=\"no\">No</option>
                                </select>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"hasPendingSectorAdjustment\">Has a pending sector adj.</label>
                            <div class=\"controls\">
                                <select name=\"hasPendingSectorAdjustment\" id=\"hasPendingSectorAdjustment\">
                                    <option {{ hasPendingSectorAdjustment == \"all\" ? 'selected=\"selected\"' : '' }} value=\"all\">All</option>
                                    <option {{ hasPendingSectorAdjustment == \"yes\" ? 'selected=\"selected\"' : '' }} value=\"yes\">Yes</option>
                                </select>
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


    <!-- Results to show -->
    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ macros.wizz() }}
        </div>        

        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Expenses list</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"otp-list\">
                        <thead>
                            <tr>
                                <th>Cvp month</th>
                                <th>Empno</th>
                                <th>Firstname</th>
                                <th>Lastname</th>
                                <th>Comp. grade</th>
                                <th>Contract</th>
                                <th>N</th>
                                <th>S</th>
                                <th>M</th>
                                <th>L</th>
                                <th>XL</th>
                                <th>Nb disr.</th>
                                <th style=\"width:150px\">Action</th>
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
            
{% endblock container %}", "@EasyjetOtp/Otp/index.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\OtpBundle\\Resources\\views\\Otp\\index.html.twig");
    }
}
