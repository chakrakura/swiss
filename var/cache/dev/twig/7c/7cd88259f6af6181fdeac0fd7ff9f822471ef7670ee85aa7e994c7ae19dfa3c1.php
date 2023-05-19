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

/* @EasyjetOtp/Admin/Factorisations/index.html.twig */
class __TwigTemplate_845791eb84700cfd3f8877f5c9fa94e984abb91b4d7099443d563809982493a4 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Admin/Factorisations/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Admin/Factorisations/index.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetOtp/Admin/Factorisations/index.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetOtp/Base/structure.html.twig", "@EasyjetOtp/Admin/Factorisations/index.html.twig", 1);
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

        echo "Factorisations list";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
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

        swissinside.simpleDataTable(\$(\"#factorisation-list\"), {
            pagingType: 'full_numbers',
        });
       
        \$(\"body\").on(\"click\", \"a[data-remove-item]\",function(e) { 
            e.preventDefault();
            var url = \$(this).attr(\"href\");
            bootbox.confirm(\"Do you really want remove this factorisation ?\", function(result) {
                if (result) {
                    window.location.href = url;
                };
                
            });
        });
    });  
    
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 34
        echo "        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Default values</h1>  
        <div id=\"description_help\">
            Here you can specify the list of factorisations and associate them with uman contracts.
        </div>
    </div>


    <!-- Results to show -->
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 47
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 47, $context, $this->getSourceContext());
        echo "
        </div>        
        <div class=\"col-xs-12\">
            <a href=\"";
        // line 50
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_otp_factorisation_new");
        echo "\" class=\"btn btn-primary\">New Factorisation</a>
        </div>
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Factorisations list</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"factorisation-list\">
                        <thead>
                            <tr>
                                <th>N</th>
                                <th>S</th>
                                <th>M</th>
                                <th>L</th>
                                <th>XL</th>
                                <th>Effectivity date</th>
                                <th style=\"width:20%;\">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableData"]) || array_key_exists("tableData", $context) ? $context["tableData"] : (function () { throw new RuntimeError('Variable "tableData" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 75
            echo "                            <tr>
                            \t<td>";
            // line 76
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "getNVal", [], "any", false, false, false, 76), "html", null, true);
            echo "</td>
                                <td>";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "getSVal", [], "any", false, false, false, 77), "html", null, true);
            echo "</td>
                                <td>";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "getMVal", [], "any", false, false, false, 78), "html", null, true);
            echo "</td>
                                <td>";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "getLVal", [], "any", false, false, false, 79), "html", null, true);
            echo "</td>
                                <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "getXlVal", [], "any", false, false, false, 80), "html", null, true);
            echo "</td>
                                <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "getDateEffectivite", [], "any", false, false, false, 81), "d/m/Y"), "html", null, true);
            echo "</td>
                            \t<td>
                            \t\t<a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_otp_factorisation_edit", ["factorisation" => twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 83)]), "html", null, true);
            echo "\" class=\"btn btn-default\">Edit</a>
                            \t\t<a href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_otp_factorisation_del", ["factorisation" => twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 84)]), "html", null, true);
            echo "\" class=\"btn btn-danger\" data-remove-item=\"\">Remove</a>
                            \t</td>
                            </tr>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
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
        return "@EasyjetOtp/Admin/Factorisations/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  230 => 88,  220 => 84,  216 => 83,  211 => 81,  207 => 80,  203 => 79,  199 => 78,  195 => 77,  191 => 76,  188 => 75,  184 => 74,  157 => 50,  151 => 47,  136 => 34,  126 => 33,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetOtp/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Factorisations list{% endblock %}

{% block specificJs %}{{ parent() }}


<script>

    \$(function() {

        swissinside.simpleDataTable(\$(\"#factorisation-list\"), {
            pagingType: 'full_numbers',
        });
       
        \$(\"body\").on(\"click\", \"a[data-remove-item]\",function(e) { 
            e.preventDefault();
            var url = \$(this).attr(\"href\");
            bootbox.confirm(\"Do you really want remove this factorisation ?\", function(result) {
                if (result) {
                    window.location.href = url;
                };
                
            });
        });
    });  
    
</script>
{% endblock specificJs %}


{% block container %}
        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Default values</h1>  
        <div id=\"description_help\">
            Here you can specify the list of factorisations and associate them with uman contracts.
        </div>
    </div>


    <!-- Results to show -->
    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ macros.wizz() }}
        </div>        
        <div class=\"col-xs-12\">
            <a href=\"{{ url('admin_otp_factorisation_new') }}\" class=\"btn btn-primary\">New Factorisation</a>
        </div>
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Factorisations list</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"factorisation-list\">
                        <thead>
                            <tr>
                                <th>N</th>
                                <th>S</th>
                                <th>M</th>
                                <th>L</th>
                                <th>XL</th>
                                <th>Effectivity date</th>
                                <th style=\"width:20%;\">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        {% for row in tableData %}
                            <tr>
                            \t<td>{{ row.getNVal }}</td>
                                <td>{{ row.getSVal }}</td>
                                <td>{{ row.getMVal }}</td>
                                <td>{{ row.getLVal }}</td>
                                <td>{{ row.getXlVal }}</td>
                                <td>{{ row.getDateEffectivite|date('d/m/Y') }}</td>
                            \t<td>
                            \t\t<a href=\"{{ url('admin_otp_factorisation_edit', {'factorisation' : row.id}) }}\" class=\"btn btn-default\">Edit</a>
                            \t\t<a href=\"{{ url('admin_otp_factorisation_del', {'factorisation' : row.id}) }}\" class=\"btn btn-danger\" data-remove-item=\"\">Remove</a>
                            \t</td>
                            </tr>
                        {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>        
    </div>
</div>
            
{% endblock container %}", "@EasyjetOtp/Admin/Factorisations/index.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\OtpBundle\\Resources\\views\\Admin\\Factorisations\\index.html.twig");
    }
}
