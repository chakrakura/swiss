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

/* @EasyjetWorkingSheet/WorkingSheetPattern/index.html.twig */
class __TwigTemplate_d878ca85317c55a7fbb1da90e57f2a39074fd55778d3288319f73a1080f21abe extends Template
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
        return "@EasyjetWorkingSheet/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/WorkingSheetPattern/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/WorkingSheetPattern/index.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetWorkingSheet/WorkingSheetPattern/index.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetWorkingSheet/Base/structure.html.twig", "@EasyjetWorkingSheet/WorkingSheetPattern/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
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
            swissinside.simpleDataTable(\$(\"#results-table\"));
        });
    </script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 13
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 14
        echo "<div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">Your patterns</h1>  
            <div id=\"description_help\">List of pattern you have submitted.</div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 22
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 22, $context, $this->getSourceContext());
        echo "
            </div>
            <div class=\"col-xs-12\">
                                <a href=\"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("working_sheet_pattern_new");
        echo "\" class=\"btn btn-primary\"><i class=\"icon-add\"></i> 
                    New pattern
                </a>
                            </div>
        </div>
            
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>List of pattern</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"results-table\">
                        <thead>
                            <tr>
                                <th>Date of submission</th>
                                <th>Status</th>
                                <th>Active</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) || array_key_exists("entities", $context) ? $context["entities"] : (function () { throw new RuntimeError('Variable "entities" does not exist.', 50, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 51
            echo "                            <tr>
                                <td>";
            // line 52
            ((twig_get_attribute($this->env, $this->source, $context["entity"], "createdAt", [], "any", false, false, false, 52)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["entity"], "createdAt", [], "any", false, false, false, 52), "d/m/Y H:i"), "html", null, true))) : (print ("-")));
            echo "</td>
                                <td>
                                    ";
            // line 54
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["entity"], "status", [], "any", false, false, false, 54), "PENDING"))) {
                // line 55
                echo "                                        <span class=\"badge badge-info\">Waiting approval</span>
                                    ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 56
$context["entity"], "status", [], "any", false, false, false, 56), "VALIDATED"))) {
                // line 57
                echo "                                        <span class=\"badge badge-success\">Validated</span>
                                    ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 58
$context["entity"], "status", [], "any", false, false, false, 58), "REFUSED"))) {
                // line 59
                echo "                                        <span class=\"badge badge-danger\">Refused</span>
                                    ";
            }
            // line 61
            echo "                                </td>
                                <td>";
            // line 62
            if (twig_get_attribute($this->env, $this->source, $context["entity"], "active", [], "any", false, false, false, 62)) {
                echo "<span class=\"badge badge-success\">Yes</span>";
            } else {
                echo "<span class=\"badge badge-danger\">No</span>";
            }
            echo "</td>
                        
                                <td>
                                    ";
            // line 65
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["entity"], "status", [], "any", false, false, false, 65), "PENDING"))) {
                // line 66
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("working_sheet_pattern_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 66)]), "html", null, true);
                echo "\" class=\"btn btn-default\">edit</a>
                                    ";
            } else {
                // line 68
                echo "                                        <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("working_sheet_pattern_show", ["id" => twig_get_attribute($this->env, $this->source, $context["entity"], "id", [], "any", false, false, false, 68)]), "html", null, true);
                echo "\" class=\"btn btn-default\">show</a>
                                    ";
            }
            // line 70
            echo "                                    
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                        </tbody>
                    </table>
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
        return "@EasyjetWorkingSheet/WorkingSheetPattern/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 74,  197 => 70,  191 => 68,  185 => 66,  183 => 65,  173 => 62,  170 => 61,  166 => 59,  164 => 58,  161 => 57,  159 => 56,  156 => 55,  154 => 54,  149 => 52,  146 => 51,  142 => 50,  114 => 25,  108 => 22,  98 => 14,  88 => 13,  62 => 3,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetWorkingSheet/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}
{% block specificJs %}{{ parent() }}
    <script>
        \$(function() {
            swissinside.simpleDataTable(\$(\"#results-table\"));
        });
    </script>
{% endblock specificJs %}



{% block container -%}
    <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">Your patterns</h1>  
            <div id=\"description_help\">List of pattern you have submitted.</div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
                {{ macros.wizz() }}
            </div>
            <div class=\"col-xs-12\">
                                <a href=\"{{ path('working_sheet_pattern_new') }}\" class=\"btn btn-primary\"><i class=\"icon-add\"></i> 
                    New pattern
                </a>
                            </div>
        </div>
            
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>List of pattern</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"results-table\">
                        <thead>
                            <tr>
                                <th>Date of submission</th>
                                <th>Status</th>
                                <th>Active</th>
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
                                <td>{% if entity.active %}<span class=\"badge badge-success\">Yes</span>{% else %}<span class=\"badge badge-danger\">No</span>{% endif %}</td>
                        
                                <td>
                                    {% if entity.status == \"PENDING\" %}
                                        <a href=\"{{ path('working_sheet_pattern_edit', { 'id': entity.id }) }}\" class=\"btn btn-default\">edit</a>
                                    {% else %}
                                        <a href=\"{{ path('working_sheet_pattern_show', { 'id': entity.id }) }}\" class=\"btn btn-default\">show</a>
                                    {% endif %}
                                    
                                </td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@EasyjetWorkingSheet/WorkingSheetPattern/index.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\WorkingSheetBundle\\Resources\\views\\WorkingSheetPattern\\index.html.twig");
    }
}
