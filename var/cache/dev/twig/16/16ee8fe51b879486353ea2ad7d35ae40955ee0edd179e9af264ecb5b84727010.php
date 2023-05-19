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

/* @EasyjetHris/ProcessingCalendar/index.html.twig */
class __TwigTemplate_123c2cf21d5e6553732793fcf405b5f32fe7da4c4a5ccc1788ff9b0b2a2dc904 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/ProcessingCalendar/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/ProcessingCalendar/index.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetHris/ProcessingCalendar/index.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetHris/Base/structure.html.twig", "@EasyjetHris/ProcessingCalendar/index.html.twig", 1);
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

";
        // line 6
        $context["csrf"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("processing_calendar_management");
        // line 7
        echo "
";
        // line 8
        $context["editUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("processing_calendar_edit", ["calendar" => "0"]);
        // line 9
        echo "
";
        // line 10
        $context["delUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("processing_calendar_del", ["calendar" => "0"]);
        // line 11
        echo "

<script>
    \$(function() {
        \$(\"body\").on(\"click\", \"a[data-remove-item]\",function(e) {
            e.preventDefault();
            var url = \$(this).attr(\"href\");
            bootbox.confirm(\"Do you really want to remove this entry ?\", function(result) {
                if (result) {
                    window.location.href = url + \"?_token=";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["csrf"]) || array_key_exists("csrf", $context) ? $context["csrf"] : (function () { throw new RuntimeError('Variable "csrf" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "\";
                };

            });
        });


        swissinside.simpleDataTable(\$(\"#processing-calendar-list\"), {
            \"aaSorting\" : [[1, \"desc\"]],
        });
    });

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 36
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 37
        echo "
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Processing calendar</h1>
        <div id=\"description_help\">
            Here you can set the processing calendar for each month
        </div>
    </div>


    <!-- Results to show -->
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 50
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 50, $context, $this->getSourceContext());
        echo "
        </div>
        <div class=\"col-xs-12\">
            <a href=\"";
        // line 53
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("processing_calendar_new");
        echo "\" class=\"btn btn-primary\">New entry</a>
        </div>
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Processing calendar dates</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"processing-calendar-list\">
                        <thead>
                            <tr>
                                <th>Payment month</th>
                                <th>EJINT096</th>
                                <th>EJINT083 Cem export</th>
                                ";
        // line 71
        echo "                                <th>EJINT201 Claims export</th>
                                ";
        // line 73
        echo "
                                <th style=\"width:20%;\">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableData"]) || array_key_exists("tableData", $context) ? $context["tableData"] : (function () { throw new RuntimeError('Variable "tableData" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 79
            echo "                            <tr>
                                <td data-order=\"";
            // line 80
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "paymentMonth", [], "any", false, false, false, 80), "Y/m/d"), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "paymentMonth", [], "any", false, false, false, 80), "M Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "ejint096IntegrationFile", [], "any", false, false, false, 81), "d/m/Y"), "html", null, true);
            echo "</td>
                                <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "ejint083CemExport", [], "any", false, false, false, 82), "d/m/Y"), "html", null, true);
            echo "</td>
                                ";
            // line 84
            echo "                                <td>";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "ejint201ClaimsExport", [], "any", false, false, false, 84), "d/m/Y"), "html", null, true);
            echo "</td>
                                ";
            // line 86
            echo "                                <td>
                                    <a href=\"";
            // line 87
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("processing_calendar_edit", ["calendar" => twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 87)]), "html", null, true);
            echo "\" class=\"btn btn-default\">Edit</a>
                                    <a href=\"";
            // line 88
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("processing_calendar_del", ["calendar" => twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 88)]), "html", null, true);
            echo "\" class=\"btn btn-danger\" data-remove-item=\"\">Remove</a>
                                </td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
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
        return "@EasyjetHris/ProcessingCalendar/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 92,  217 => 88,  213 => 87,  210 => 86,  205 => 84,  201 => 82,  197 => 81,  191 => 80,  188 => 79,  184 => 78,  177 => 73,  174 => 71,  154 => 53,  148 => 50,  133 => 37,  123 => 36,  99 => 20,  88 => 11,  86 => 10,  83 => 9,  81 => 8,  78 => 7,  76 => 6,  62 => 4,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetHris/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block specificJs %}{{ parent() }}

{% set csrf = csrf_token('processing_calendar_management') %}

{% set editUrl = url('processing_calendar_edit', {\"calendar\" : \"0\"} ) %}

{% set delUrl = url('processing_calendar_del', {\"calendar\" : \"0\"} ) %}


<script>
    \$(function() {
        \$(\"body\").on(\"click\", \"a[data-remove-item]\",function(e) {
            e.preventDefault();
            var url = \$(this).attr(\"href\");
            bootbox.confirm(\"Do you really want to remove this entry ?\", function(result) {
                if (result) {
                    window.location.href = url + \"?_token={{ csrf }}\";
                };

            });
        });


        swissinside.simpleDataTable(\$(\"#processing-calendar-list\"), {
            \"aaSorting\" : [[1, \"desc\"]],
        });
    });

</script>
{% endblock specificJs %}


{% block container %}

<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Processing calendar</h1>
        <div id=\"description_help\">
            Here you can set the processing calendar for each month
        </div>
    </div>


    <!-- Results to show -->
    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ macros.wizz() }}
        </div>
        <div class=\"col-xs-12\">
            <a href=\"{{ url('processing_calendar_new') }}\" class=\"btn btn-primary\">New entry</a>
        </div>
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Processing calendar dates</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"processing-calendar-list\">
                        <thead>
                            <tr>
                                <th>Payment month</th>
                                <th>EJINT096</th>
                                <th>EJINT083 Cem export</th>
                                {# <th>EJINT200 Claims import</th> #}
                                <th>EJINT201 Claims export</th>
                                {# <th>EJINT099 Fdtr import</th> #}

                                <th style=\"width:20%;\">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for row in tableData %}
                            <tr>
                                <td data-order=\"{{ row.paymentMonth|date(\"Y/m/d\") }}\">{{ row.paymentMonth|date(\"M Y\") }}</td>
                                <td>{{ row.ejint096IntegrationFile|date(\"d/m/Y\") }}</td>
                                <td>{{ row.ejint083CemExport|date(\"d/m/Y\") }}</td>
                                {# <td>{% row.ejint200ClaimsImport|date(\"d/m/Y\") %}</td> #}
                                <td>{{ row.ejint201ClaimsExport|date(\"d/m/Y\") }}</td>
                                {# <td>{% row.ejint099FdtrImport|date(\"d/m/Y\") %}</td>#}
                                <td>
                                    <a href=\"{{url('processing_calendar_edit', {'calendar' : row.id} )}}\" class=\"btn btn-default\">Edit</a>
                                    <a href=\"{{url('processing_calendar_del', {'calendar' : row.id} )}}\" class=\"btn btn-danger\" data-remove-item=\"\">Remove</a>
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

{% endblock container %}
", "@EasyjetHris/ProcessingCalendar/index.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\HrisBundle\\Resources\\views\\ProcessingCalendar\\index.html.twig");
    }
}
