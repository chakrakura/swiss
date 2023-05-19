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

/* @EasyjetWorkingSheet/WorkingSheetPattern/validation.html.twig */
class __TwigTemplate_c2b4dbedd6ae9d60e18e2697e35caa663a6dc8390f51872e81a184fe46ad9004 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@EasyjetWorkingSheet/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/WorkingSheetPattern/validation.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/WorkingSheetPattern/validation.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetWorkingSheet/WorkingSheetPattern/validation.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetWorkingSheet/Base/structure.html.twig", "@EasyjetWorkingSheet/WorkingSheetPattern/validation.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 5
        echo "<div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">List of pattern to be validated</h1>  
            <div id=\"description_help\">Below you can select a pattern in order to validate it.</div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 13
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 13, $context, $this->getSourceContext());
        echo "
            </div>
        </div>
            
        <div class=\"row\">       
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>List of patterns to be validated</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"call-types-list\">
                            <thead>
                                <tr>
                                    <th>Createdat</th>
                                    <th>Validated</th>
                                    <th>Active</th>
                                    <th>Concerned user</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 38, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 39
            echo "                                <tr>
                                    <td>";
            // line 40
            ((twig_get_attribute($this->env, $this->source, $context["entity"], "createdAt", [], "any", false, false, false, 40)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "createdAt", [], "any", false, false, false, 40), "d/m/Y H:i"), "html", null, true))) : (print ("-")));
            echo "</td>
                                    <td>
                                        ";
            // line 42
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["entity"], "status", [], "any", false, false, false, 42), "PENDING"))) {
                // line 43
                echo "                                            <span class=\"badge badge-info\">Waiting approval</span>
                                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 44
$context["entity"], "status", [], "any", false, false, false, 44), "VALIDATED"))) {
                // line 45
                echo "                                            <span class=\"badge badge-success\">Validated</span>
                                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 46
$context["entity"], "status", [], "any", false, false, false, 46), "REFUSED"))) {
                // line 47
                echo "                                            <span class=\"badge badge-danger\">Refused</span>
                                        ";
            }
            // line 49
            echo "                                    </td>
                                    <td>
                                        ";
            // line 51
            if (twig_get_attribute($this->env, $this->source, $context["entity"], "active", [], "any", false, false, false, 51)) {
                // line 52
                echo "                                            <span class=\"badge badge-success\">Yes</span>
                                        ";
            } else {
                // line 54
                echo "                                            <span class=\"badge badge-danger\">No</span>
                                        ";
            }
            // line 56
            echo "                                    </td>
                                    <td>";
            // line 57
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "patternForUser", [], "any", false, false, false, 57), "html", null, true);
            echo "</td>
                                    <td>
                                        <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("working_sheet_pattern_validate", ["id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 59)]), "html", null, true);
            echo "\" class=\"btn btn-default\">Update status</a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "                            </tbody>
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
        return "@EasyjetWorkingSheet/WorkingSheetPattern/validation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 63,  159 => 59,  154 => 57,  151 => 56,  147 => 54,  143 => 52,  141 => 51,  137 => 49,  133 => 47,  131 => 46,  128 => 45,  126 => 44,  123 => 43,  121 => 42,  116 => 40,  113 => 39,  109 => 38,  81 => 13,  71 => 5,  61 => 4,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetWorkingSheet/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block container -%}
    <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">List of pattern to be validated</h1>  
            <div id=\"description_help\">Below you can select a pattern in order to validate it.</div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
                {{ macros.wizz() }}
            </div>
        </div>
            
        <div class=\"row\">       
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>List of patterns to be validated</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"call-types-list\">
                            <thead>
                                <tr>
                                    <th>Createdat</th>
                                    <th>Validated</th>
                                    <th>Active</th>
                                    <th>Concerned user</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                            {% for entity in entities %}
                                <tr>
                                    <td>{{ entity.createdAt ? entity.createdAt|date(\"d/m/Y H:i\") : \"-\" }}</td>
                                    <td>
                                        {% if entity.status == \"PENDING\" %}
                                            <span class=\"badge badge-info\">Waiting approval</span>
                                        {% elseif entity.status == \"VALIDATED\" %}
                                            <span class=\"badge badge-success\">Validated</span>
                                        {% elseif entity.status == \"REFUSED\" %}
                                            <span class=\"badge badge-danger\">Refused</span>
                                        {% endif %}
                                    </td>
                                    <td>
                                        {% if entity.active %}
                                            <span class=\"badge badge-success\">Yes</span>
                                        {% else %}
                                            <span class=\"badge badge-danger\">No</span>
                                        {% endif %}
                                    </td>
                                    <td>{{ entity.patternForUser }}</td>
                                    <td>
                                        <a href=\"{{ path('working_sheet_pattern_validate', { 'id': entity.id }) }}\" class=\"btn btn-default\">Update status</a>
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>           
  
    </div>
{% endblock %}
", "@EasyjetWorkingSheet/WorkingSheetPattern/validation.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\WorkingSheetBundle\\Resources\\views\\WorkingSheetPattern\\validation.html.twig");
    }
}
