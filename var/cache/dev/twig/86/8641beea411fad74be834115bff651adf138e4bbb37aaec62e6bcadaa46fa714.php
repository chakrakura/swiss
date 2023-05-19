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

/* @EasyjetWorkingSheet/WorkingSheetReporting/reporting.html.twig */
class __TwigTemplate_6a985f2e69473ff2be45fe555f01a9b436e879bae43e3fa93a96a6be66998458 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/WorkingSheetReporting/reporting.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/WorkingSheetReporting/reporting.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetWorkingSheet/WorkingSheetReporting/reporting.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetWorkingSheet/Base/structure.html.twig", "@EasyjetWorkingSheet/WorkingSheetReporting/reporting.html.twig", 1);
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

    // line 10
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 11
        echo "<div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">Reporting</h1>  
            <div id=\"description_help\">Here you can follow the evolution of your working time. Please ensure that you don't have too much overtime hours.</div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 19
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 19, $context, $this->getSourceContext());
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
                        <h5>Search for a specific period</h5>
                    </div>
                    ";
        // line 33
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 33, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
                    <div class=\"widget-content nopadding\">

                        <div class=\"form-group\">
                            <label class=\"control-label\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 37, $this->source); })()), "dateFrom", [], "any", false, false, false, 37), 'label');
        echo "</label>
                            <div class=\"controls\">
                                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 39, $this->source); })()), "dateFrom", [], "any", false, false, false, 39), 'widget');
        echo "
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 44, $this->source); })()), "dateTo", [], "any", false, false, false, 44), 'label');
        echo "</label>
                            <div class=\"controls\">
                                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 46, $this->source); })()), "dateTo", [], "any", false, false, false, 46), 'widget');
        echo "
                            </div>
                        </div>

                        <div class=\"form-actions\">
                            <input id=\"submit-button\" type=\"submit\" class=\"btn btn-primary\" value=\"Search\"/>
                            <button type=\"submit\" class=\"btn btn-warning\" name=\"download\"><i class=\"icon-download\"></i> Download CSV</button>
                        </div>
                        
                    </div>
                    ";
        // line 56
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["search_form"]) || array_key_exists("search_form", $context) ? $context["search_form"] : (function () { throw new RuntimeError('Variable "search_form" does not exist.', 56, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>
        </div>
                
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>List of working days</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"results-table\">
                            <thead>
                                <tr>
                                    <th>Empno</th>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Working Month</th>
                                    <th>Total Month hours</th>
                                    <th>Total Year hours</th>
                                    <th>Month ratio</th>
                                    <th>Year ratio</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reporting_rows"]) || array_key_exists("reporting_rows", $context) ? $context["reporting_rows"] : (function () { throw new RuntimeError('Variable "reporting_rows" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["empno"] => $context["employee"]) {
            // line 86
            echo "                                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["employee"], "months", [], "any", false, false, false, 86));
            foreach ($context['_seq'] as $context["_key"] => $context["month"]) {
                // line 87
                echo "                                        ";
                if (twig_get_attribute($this->env, $this->source, $context["month"], "monthlyWorkedHours", [], "any", true, true, false, 87)) {
                    // line 88
                    echo "                                            ";
                    if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["month"], "expectedWorkingTime", [], "any", false, false, false, 88), 0))) {
                        // line 89
                        echo "                                                ";
                        $context["monthlyRatio"] = ((twig_get_attribute($this->env, $this->source, $context["month"], "monthlyWorkedHours", [], "any", false, false, false, 89) * 100) / twig_get_attribute($this->env, $this->source, $context["month"], "expectedWorkingTime", [], "any", false, false, false, 89));
                        echo " 
                                            ";
                    } else {
                        // line 91
                        echo "                                                ";
                        $context["monthlyRatio"] = 0;
                        // line 92
                        echo "                                            ";
                    }
                    // line 93
                    echo "                                            ";
                    if ((1 === twig_compare(twig_get_attribute($this->env, $this->source, $context["month"], "expectedWorkingTimeForYear", [], "any", false, false, false, 93), 0))) {
                        // line 94
                        echo "                                                ";
                        $context["yearlyRatio"] = ((twig_get_attribute($this->env, $this->source, $context["month"], "totalWorkedForYear", [], "any", false, false, false, 94) * 100) / twig_get_attribute($this->env, $this->source, $context["month"], "expectedWorkingTimeForYear", [], "any", false, false, false, 94));
                        echo " 
                                            ";
                    } else {
                        // line 96
                        echo "                                                ";
                        $context["yearlyRatio"] = 0;
                        // line 97
                        echo "                                            ";
                    }
                    echo " 
                                            <tr>
                                                <td>";
                    // line 99
                    echo twig_escape_filter($this->env, $context["empno"], "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 100
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "firstname", [], "any", false, false, false, 100), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 101
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["employee"], "lastname", [], "any", false, false, false, 101), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 102
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["month"], "label", [], "any", false, false, false, 102), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 103
                    echo twig_escape_filter($this->env, $this->extensions['App\Easyjet\WorkingSheetBundle\TwigFilters\MinutesToTime']->minutesToTime(twig_get_attribute($this->env, $this->source, $context["month"], "monthlyWorkedHours", [], "any", false, false, false, 103)), "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Easyjet\WorkingSheetBundle\TwigFilters\MinutesToTime']->minutesToTime(twig_get_attribute($this->env, $this->source, $context["month"], "expectedWorkingTime", [], "any", false, false, false, 103)), "html", null, true);
                    echo "</td>
                                                <td>";
                    // line 104
                    echo twig_escape_filter($this->env, $this->extensions['App\Easyjet\WorkingSheetBundle\TwigFilters\MinutesToTime']->minutesToTime(twig_get_attribute($this->env, $this->source, $context["month"], "totalWorkedForYear", [], "any", false, false, false, 104)), "html", null, true);
                    echo " / ";
                    echo twig_escape_filter($this->env, $this->extensions['App\Easyjet\WorkingSheetBundle\TwigFilters\MinutesToTime']->minutesToTime(twig_get_attribute($this->env, $this->source, $context["month"], "expectedWorkingTimeForYear", [], "any", false, false, false, 104)), "html", null, true);
                    echo "</td>
                                                <td>
                                                    ";
                    // line 106
                    $context["monthlyRatioDisplay"] = ( -1 * (100 - (isset($context["monthlyRatio"]) || array_key_exists("monthlyRatio", $context) ? $context["monthlyRatio"] : (function () { throw new RuntimeError('Variable "monthlyRatio" does not exist.', 106, $this->source); })())));
                    // line 107
                    echo "                                                    <span class=\"badge ";
                    echo (((1 === twig_compare((isset($context["monthlyRatioDisplay"]) || array_key_exists("monthlyRatioDisplay", $context) ? $context["monthlyRatioDisplay"] : (function () { throw new RuntimeError('Variable "monthlyRatioDisplay" does not exist.', 107, $this->source); })()), 0))) ? ("badge-danger") : ("badge-success"));
                    echo "\">";
                    echo (((1 === twig_compare((isset($context["monthlyRatioDisplay"]) || array_key_exists("monthlyRatioDisplay", $context) ? $context["monthlyRatioDisplay"] : (function () { throw new RuntimeError('Variable "monthlyRatioDisplay" does not exist.', 107, $this->source); })()), 0))) ? ("+") : (""));
                    echo " ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["monthlyRatioDisplay"]) || array_key_exists("monthlyRatioDisplay", $context) ? $context["monthlyRatioDisplay"] : (function () { throw new RuntimeError('Variable "monthlyRatioDisplay" does not exist.', 107, $this->source); })()), 2), "html", null, true);
                    echo " %</span>
                                                </td>
                                                <td>
                                                    ";
                    // line 110
                    $context["yearlyRatioDisplay"] = ( -1 * (100 - (isset($context["yearlyRatio"]) || array_key_exists("yearlyRatio", $context) ? $context["yearlyRatio"] : (function () { throw new RuntimeError('Variable "yearlyRatio" does not exist.', 110, $this->source); })())));
                    // line 111
                    echo "                                                    <span class=\"badge ";
                    echo (((1 === twig_compare((isset($context["yearlyRatioDisplay"]) || array_key_exists("yearlyRatioDisplay", $context) ? $context["yearlyRatioDisplay"] : (function () { throw new RuntimeError('Variable "yearlyRatioDisplay" does not exist.', 111, $this->source); })()), 0))) ? ("badge-danger") : ("badge-success"));
                    echo "\">";
                    echo (((1 === twig_compare((isset($context["yearlyRatioDisplay"]) || array_key_exists("yearlyRatioDisplay", $context) ? $context["yearlyRatioDisplay"] : (function () { throw new RuntimeError('Variable "yearlyRatioDisplay" does not exist.', 111, $this->source); })()), 0))) ? ("+") : (""));
                    echo " ";
                    echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["yearlyRatioDisplay"]) || array_key_exists("yearlyRatioDisplay", $context) ? $context["yearlyRatioDisplay"] : (function () { throw new RuntimeError('Variable "yearlyRatioDisplay" does not exist.', 111, $this->source); })()), 2), "html", null, true);
                    echo " %</span>
                                                </td>
                                            </tr>
                                        ";
                }
                // line 115
                echo "                                        
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['month'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['empno'], $context['employee'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 118
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
        return "@EasyjetWorkingSheet/WorkingSheetReporting/reporting.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  309 => 118,  303 => 117,  296 => 115,  284 => 111,  282 => 110,  271 => 107,  269 => 106,  262 => 104,  256 => 103,  252 => 102,  248 => 101,  244 => 100,  240 => 99,  234 => 97,  231 => 96,  225 => 94,  222 => 93,  219 => 92,  216 => 91,  210 => 89,  207 => 88,  204 => 87,  199 => 86,  195 => 85,  163 => 56,  150 => 46,  145 => 44,  137 => 39,  132 => 37,  125 => 33,  108 => 19,  98 => 11,  88 => 10,  62 => 3,  51 => 1,  49 => 2,  36 => 1,);
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
            <h1 id=\"titre_help\">Reporting</h1>  
            <div id=\"description_help\">Here you can follow the evolution of your working time. Please ensure that you don't have too much overtime hours.</div>
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
                        <h5>Search for a specific period</h5>
                    </div>
                    {{ form_start(search_form, {'attr': {'class': 'form-horizontal'}}) }}
                    <div class=\"widget-content nopadding\">

                        <div class=\"form-group\">
                            <label class=\"control-label\">{{ form_label(search_form.dateFrom) }}</label>
                            <div class=\"controls\">
                                {{ form_widget(search_form.dateFrom) }}
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">{{ form_label(search_form.dateTo) }}</label>
                            <div class=\"controls\">
                                {{ form_widget(search_form.dateTo) }}
                            </div>
                        </div>

                        <div class=\"form-actions\">
                            <input id=\"submit-button\" type=\"submit\" class=\"btn btn-primary\" value=\"Search\"/>
                            <button type=\"submit\" class=\"btn btn-warning\" name=\"download\"><i class=\"icon-download\"></i> Download CSV</button>
                        </div>
                        
                    </div>
                    {{ form_end(search_form) }}
                </div>
            </div>
        </div>
                
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>List of working days</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"results-table\">
                            <thead>
                                <tr>
                                    <th>Empno</th>
                                    <th>First name</th>
                                    <th>Last name</th>
                                    <th>Working Month</th>
                                    <th>Total Month hours</th>
                                    <th>Total Year hours</th>
                                    <th>Month ratio</th>
                                    <th>Year ratio</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for empno, employee in reporting_rows %}
                                    {% for month in employee.months %}
                                        {% if month.monthlyWorkedHours is defined %}
                                            {% if month.expectedWorkingTime>0 %}
                                                {% set monthlyRatio = month.monthlyWorkedHours * 100 / month.expectedWorkingTime %} 
                                            {% else %}
                                                {% set monthlyRatio = 0 %}
                                            {% endif %}
                                            {% if month.expectedWorkingTimeForYear>0 %}
                                                {% set yearlyRatio = month.totalWorkedForYear * 100 / month.expectedWorkingTimeForYear %} 
                                            {% else %}
                                                {% set yearlyRatio = 0 %}
                                            {% endif %} 
                                            <tr>
                                                <td>{{ empno }}</td>
                                                <td>{{ employee.firstname }}</td>
                                                <td>{{ employee.lastname }}</td>
                                                <td>{{ month.label }}</td>
                                                <td>{{ month.monthlyWorkedHours|minutesToTime }} / {{ month.expectedWorkingTime|minutesToTime }}</td>
                                                <td>{{ month.totalWorkedForYear|minutesToTime }} / {{ month.expectedWorkingTimeForYear|minutesToTime }}</td>
                                                <td>
                                                    {% set monthlyRatioDisplay = -1 * (100 - monthlyRatio) %}
                                                    <span class=\"badge {{ monthlyRatioDisplay > 0 ? \"badge-danger\" : \"badge-success\" }}\">{{ monthlyRatioDisplay > 0 ? \"+\" : \"\" }} {{ monthlyRatioDisplay|number_format(2) }} %</span>
                                                </td>
                                                <td>
                                                    {% set yearlyRatioDisplay = -1 * (100 - yearlyRatio) %}
                                                    <span class=\"badge {{ yearlyRatioDisplay > 0 ? \"badge-danger\" : \"badge-success\" }}\">{{ yearlyRatioDisplay > 0 ? \"+\" : \"\" }} {{ yearlyRatioDisplay|number_format(2) }} %</span>
                                                </td>
                                            </tr>
                                        {% endif %}
                                        
                                    {% endfor %}
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@EasyjetWorkingSheet/WorkingSheetReporting/reporting.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\WorkingSheetBundle\\Resources\\views\\WorkingSheetReporting\\reporting.html.twig");
    }
}
