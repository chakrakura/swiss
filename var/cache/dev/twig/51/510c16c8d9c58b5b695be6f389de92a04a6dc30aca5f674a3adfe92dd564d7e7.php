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

/* @EasyjetSfsu/Files/index.html.twig */
class __TwigTemplate_7473bfc63587c28b9bb6a1f3d439d2c6df26c472e0da162ba976cb3a7e23636d extends Template
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
        return "@EasyjetSfsu/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSfsu/Files/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSfsu/Files/index.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetSfsu/Files/index.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetSfsu/Base/structure.html.twig", "@EasyjetSfsu/Files/index.html.twig", 1);
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
        $context["viewUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sfsu_files_show", ["files" => "0"]);
        // line 8
        echo "
<script>
    \$(function() {
        var createdFrom = \$(\"#createdFrom\").val();
        var createdTo = \$(\"#createdTo\").val();

        \$('#logs-list').on('preXhr.dt', function ( e, settings, data ) {
            data.createdFrom = createdFrom;
            data.createdTo = createdTo;

            return data;
        });    

        swissinside.simpleDataTable(\$(\"#logs-list\"), {
            \"bProcessing\": true,
            \"bServerSide\": true,
            \"sAjaxSource\": \"";
        // line 24
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sfsu_files_search");
        echo "\",
            \"aoColumns\" : [
                null, // Uploader
                null, // Filename
                null, // Creation date
                null, // Nb downloads
                null, // Active
                {\"bSortable\": false}, // Id
                
            ],
            \"aaSorting\" : [[2, \"desc\"]],
            \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                // Generate buttons  
                
                \$(\"td:eq(5)\", nRow).html(
                    '<a class=\"btn btn-default\" href=\"";
        // line 39
        echo twig_escape_filter($this->env, (isset($context["viewUrl"]) || array_key_exists("viewUrl", $context) ? $context["viewUrl"] : (function () { throw new RuntimeError('Variable "viewUrl" does not exist.', 39, $this->source); })()), "html", null, true);
        echo "'+ aData[5] + '\"><i class=\"icon-eye-open\"></i> View file</a>'
                ); 

                var badge = aData[4].toLowerCase();
                switch (badge) {
                    case \"0\" :
                        badge = '<span class=\"badge\">Removed</span>';
                        break;
                    default :
                        badge = '<span class=\"badge badge-success\">Active until ' + aData[4] + '</span>';
                        break;
                }

                \$(\"td:eq(4)\", nRow).html(
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

    // line 74
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 75
        echo "
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Archived files.</h1>
        <div id=\"description_help\">Here you can find your uploaded file and share them with your contacts. Click the  \"Add a new file\" button to upload a new file.</div>
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
                            <label class=\"control-label\" for=\"createdFrom\">From</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"createdFrom\" name=\"createdFrom\" value=\"";
        // line 98
        echo twig_escape_filter($this->env, (isset($context["createdFrom"]) || array_key_exists("createdFrom", $context) ? $context["createdFrom"] : (function () { throw new RuntimeError('Variable "createdFrom" does not exist.', 98, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" data-enable-datepicker=\"true\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"createdTo\">To</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"createdTo\" name=\"createdTo\" value=\"";
        // line 105
        echo twig_escape_filter($this->env, (isset($context["createdTo"]) || array_key_exists("createdTo", $context) ? $context["createdTo"] : (function () { throw new RuntimeError('Variable "createdTo" does not exist.', 105, $this->source); })()), "html", null, true);
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
        <div class=\"col-xs-12\">
            <a href=\"";
        // line 121
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sfsu_files_new");
        echo "\" class=\"btn btn-primary pull-right\"><i class=\"icon-plus\"></i> Add file(s)</a>
        </div>
    </div>

    <!-- Results to show -->
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 128
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 128, $context, $this->getSourceContext());
        echo "
        </div>        
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
                                <th>Uploader</th>
                                <th>File name</th>
                                <th>Upload date</th>
                                <th>Hits</th>
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
        return "@EasyjetSfsu/Files/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 128,  220 => 121,  201 => 105,  191 => 98,  166 => 75,  156 => 74,  114 => 39,  96 => 24,  78 => 8,  76 => 7,  62 => 5,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@EasyjetSfsu/Base/structure.html.twig\" %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}


{% block specificJs %}{{ parent() }}

{% set viewUrl = url('sfsu_files_show', {\"files\" : \"0\"} ) %}

<script>
    \$(function() {
        var createdFrom = \$(\"#createdFrom\").val();
        var createdTo = \$(\"#createdTo\").val();

        \$('#logs-list').on('preXhr.dt', function ( e, settings, data ) {
            data.createdFrom = createdFrom;
            data.createdTo = createdTo;

            return data;
        });    

        swissinside.simpleDataTable(\$(\"#logs-list\"), {
            \"bProcessing\": true,
            \"bServerSide\": true,
            \"sAjaxSource\": \"{{ url('sfsu_files_search') }}\",
            \"aoColumns\" : [
                null, // Uploader
                null, // Filename
                null, // Creation date
                null, // Nb downloads
                null, // Active
                {\"bSortable\": false}, // Id
                
            ],
            \"aaSorting\" : [[2, \"desc\"]],
            \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                // Generate buttons  
                
                \$(\"td:eq(5)\", nRow).html(
                    '<a class=\"btn btn-default\" href=\"{{ viewUrl }}'+ aData[5] + '\"><i class=\"icon-eye-open\"></i> View file</a>'
                ); 

                var badge = aData[4].toLowerCase();
                switch (badge) {
                    case \"0\" :
                        badge = '<span class=\"badge\">Removed</span>';
                        break;
                    default :
                        badge = '<span class=\"badge badge-success\">Active until ' + aData[4] + '</span>';
                        break;
                }

                \$(\"td:eq(4)\", nRow).html(
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
        <h1 id=\"titre_help\">Archived files.</h1>
        <div id=\"description_help\">Here you can find your uploaded file and share them with your contacts. Click the  \"Add a new file\" button to upload a new file.</div>
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
                            <label class=\"control-label\" for=\"createdFrom\">From</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"createdFrom\" name=\"createdFrom\" value=\"{{ createdFrom }}\" class=\"form-control\" data-enable-datepicker=\"true\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"createdTo\">To</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"createdTo\" name=\"createdTo\" value=\"{{ createdTo }}\" class=\"form-control\" data-enable-datepicker=\"true\">
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
        <div class=\"col-xs-12\">
            <a href=\"{{ url('sfsu_files_new') }}\" class=\"btn btn-primary pull-right\"><i class=\"icon-plus\"></i> Add file(s)</a>
        </div>
    </div>

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
                    <h5>Logs history</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"logs-list\">
                        <thead>
                            <tr>
                                <th>Uploader</th>
                                <th>File name</th>
                                <th>Upload date</th>
                                <th>Hits</th>
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


{% endblock container %}", "@EasyjetSfsu/Files/index.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\SfsuBundle\\Resources\\views\\Files\\index.html.twig");
    }
}
