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

/* @EasyjetHris/Ejint096DemographicData/index.html.twig */
class __TwigTemplate_bdd1d3d0f620fca2a9b81565585353677cf1b2ae7daf7b3baf125ee70e8be83b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/Ejint096DemographicData/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/Ejint096DemographicData/index.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetHris/Ejint096DemographicData/index.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetHris/Base/structure.html.twig", "@EasyjetHris/Ejint096DemographicData/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_specificJs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificJs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificJs"));

        $this->displayParentBlock("specificJs", $context, $blocks);
        echo "

<script>
    \$(function() {

        swissinside.simpleDataTable(\$(\"#demographic-data_list\"), {
            \"bProcessing\": true,
            \"aLengthMenu\": [[10, 25, 40, -1], [10, 25, 40, \"All\"]],
            \"aoColumns\" : [
                null, // Demographic data
                null, // oracle field
                null, // Mandatory
                null, // triggers
                {\"bSortable\": false} // Id
            ]
        });  

    });  

    var deleteDemographicData = function(url) {
        bootbox.confirm(\"Do you really want to remove this demographic data configuration ?\", function(confirmation) {
            if (confirmation) {
                window.location.href = url;
            }
        })
    };

    var createNewDemographicData = function() {
        bootbox.prompt(\"New demographic data csv column name ?\", function(result) { 
            if (result) {
                var url = \"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ejint096_demographic_data_new");
        echo "\";
                window.location.href = url + \"?demographicData=\" + result;
            }  
        });
    }

    
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 47
        echo "
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Demographic data.</h1>
        <div id=\"description_help\">Here you can configure the demographic data requirements. This will allow the parser to check the data integrity and generate the report.</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a href=\"javascript:createNewDemographicData();\" class=\"btn btn-primary pull-right\">Set a new demographic data</a>
        </div>
    </div>


    <!-- Results to show -->
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 64
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 64, $context, $this->getSourceContext());
        echo "
        </div>        
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Demographic data list</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"demographic-data_list\">
                        <thead>
                            <tr>
                                <th>Demographic data</th>
                                <th>Oracle field</th>
                                <th>Mandatory</th>
                                <th>Triggers</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["demographicData"]) || array_key_exists("demographicData", $context) ? $context["demographicData"] : (function () { throw new RuntimeError('Variable "demographicData" does not exist.', 86, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dd"]) {
            // line 87
            echo "                                <tr>
                                    <td>";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dd"], "demographicData", [], "any", false, false, false, 88), "html", null, true);
            echo "</td>
                                    <td>";
            // line 89
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dd"], "oracleField", [], "any", false, false, false, 89), "html", null, true);
            echo "</td>
                                    <td>";
            // line 90
            echo ((twig_get_attribute($this->env, $this->source, $context["dd"], "mandatory", [], "any", false, false, false, 90)) ? ("Yes") : ("No"));
            echo "</td>
                                    <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dd"], "triggers", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"";
            // line 93
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ejint096_demographic_data_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["dd"], "id", [], "any", false, false, false, 93)]), "html", null, true);
            echo "\" class=\"btn btn-primary\"><i class=\"icon-edit\"></i> Edit</a>
                                        <a href=\"javascript:deleteDemographicData('";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ejint096_demographic_data_delete", ["id" => twig_get_attribute($this->env, $this->source, $context["dd"], "id", [], "any", false, false, false, 94)]), "html", null, true);
            echo "')\" class=\"btn btn-danger delete-btn\"><i class=\"icon-trash\"></i> Remove</a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dd'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 98
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>        
    </div>


    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a href=\"";
        // line 108
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ejint096_demographic_data_csv");
        echo "\" class=\"btn btn-success pull-right\" ><i class=\"icon-download\"></i> Download CSV</a>
        </div>    
    </div>


</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetHris/Ejint096DemographicData/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 108,  215 => 98,  205 => 94,  201 => 93,  196 => 91,  192 => 90,  188 => 89,  184 => 88,  181 => 87,  177 => 86,  152 => 64,  133 => 47,  123 => 46,  104 => 34,  62 => 4,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetHris/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block specificJs %}{{ parent() }}

<script>
    \$(function() {

        swissinside.simpleDataTable(\$(\"#demographic-data_list\"), {
            \"bProcessing\": true,
            \"aLengthMenu\": [[10, 25, 40, -1], [10, 25, 40, \"All\"]],
            \"aoColumns\" : [
                null, // Demographic data
                null, // oracle field
                null, // Mandatory
                null, // triggers
                {\"bSortable\": false} // Id
            ]
        });  

    });  

    var deleteDemographicData = function(url) {
        bootbox.confirm(\"Do you really want to remove this demographic data configuration ?\", function(confirmation) {
            if (confirmation) {
                window.location.href = url;
            }
        })
    };

    var createNewDemographicData = function() {
        bootbox.prompt(\"New demographic data csv column name ?\", function(result) { 
            if (result) {
                var url = \"{{ url('ejint096_demographic_data_new') }}\";
                window.location.href = url + \"?demographicData=\" + result;
            }  
        });
    }

    
</script>
{% endblock specificJs %}



{% block container %}

<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Demographic data.</h1>
        <div id=\"description_help\">Here you can configure the demographic data requirements. This will allow the parser to check the data integrity and generate the report.</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a href=\"javascript:createNewDemographicData();\" class=\"btn btn-primary pull-right\">Set a new demographic data</a>
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
                    <h5>Demographic data list</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"demographic-data_list\">
                        <thead>
                            <tr>
                                <th>Demographic data</th>
                                <th>Oracle field</th>
                                <th>Mandatory</th>
                                <th>Triggers</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for dd in demographicData %}
                                <tr>
                                    <td>{{ dd.demographicData }}</td>
                                    <td>{{ dd.oracleField }}</td>
                                    <td>{{ dd.mandatory ? \"Yes\" : \"No\" }}</td>
                                    <td>{{ dd.triggers }}</td>
                                    <td>
                                        <a href=\"{{ url('ejint096_demographic_data_edit', {id: dd.id}) }}\" class=\"btn btn-primary\"><i class=\"icon-edit\"></i> Edit</a>
                                        <a href=\"javascript:deleteDemographicData('{{ url('ejint096_demographic_data_delete', {id: dd.id}) }}')\" class=\"btn btn-danger delete-btn\"><i class=\"icon-trash\"></i> Remove</a>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>        
    </div>


    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a href=\"{{ url('ejint096_demographic_data_csv') }}\" class=\"btn btn-success pull-right\" ><i class=\"icon-download\"></i> Download CSV</a>
        </div>    
    </div>


</div>


{% endblock container %}", "@EasyjetHris/Ejint096DemographicData/index.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\HrisBundle\\Resources\\views\\Ejint096DemographicData\\index.html.twig");
    }
}
