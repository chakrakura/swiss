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

/* @EasyjetSwissinsideCore/Default/index.html.twig */
class __TwigTemplate_c8a724da9fa244c2335cbb94fff15c759e68933e925b69eb2faf41ca5d3365ce extends Template
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
        return "EasyjetSwissinsideCoreBundle:Base:structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSwissinsideCore/Default/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSwissinsideCore/Default/index.html.twig"));

        $this->parent = $this->loadTemplate("EasyjetSwissinsideCoreBundle:Base:structure.html.twig", "@EasyjetSwissinsideCore/Default/index.html.twig", 1);
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 8
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        echo "   \t\t
\t\t<div id=\"content\">
\t\t\t<div id=\"content-header\">
\t\t\t\t<h1>Tables</h1>
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t<a class=\"btn btn-large\" title=\"Manage Files\"><i class=\"icon-file\"></i></a>
\t\t\t\t\t<a class=\"btn btn-large\" title=\"Manage Users\"><i class=\"icon-user\"></i></a>
\t\t\t\t\t<a class=\"btn btn-large\" title=\"Manage Comments\"><i class=\"icon-comment\"></i><span class=\"label label-danger\">5</span></a>
\t\t\t\t\t<a class=\"btn btn-large\" title=\"Manage Orders\"><i class=\"icon-shopping-cart\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"breadcrumb\">
\t\t\t\t<a href=\"#\" title=\"Go to Home\" class=\"tip-bottom\"><i class=\"icon-home\"></i> Home</a>
\t\t\t\t<a href=\"#\" class=\"current\">Tables</a>
\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t<div class=\"widget-box\">
\t\t\t\t\t\t\t<div class=\"widget-title\">
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-th\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<h5>Static table</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-content nopadding\">
\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-striped table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Column name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Column name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Column name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Column name</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 1</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 2</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 3</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 4</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 1</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 2</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 3</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 4</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 1</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 2</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 3</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 4</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 1</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 2</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 3</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 4</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 1</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 2</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 3</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 4</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 1</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 2</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 3</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 4</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
\t\t\t
            
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetSwissinsideCore/Default/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 8,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"EasyjetSwissinsideCoreBundle:Base:structure.html.twig\" %}

{% block specificJs %}
{% endblock specificJs %}
        


{% block container %}   \t\t
\t\t<div id=\"content\">
\t\t\t<div id=\"content-header\">
\t\t\t\t<h1>Tables</h1>
\t\t\t\t<div class=\"btn-group\">
\t\t\t\t\t<a class=\"btn btn-large\" title=\"Manage Files\"><i class=\"icon-file\"></i></a>
\t\t\t\t\t<a class=\"btn btn-large\" title=\"Manage Users\"><i class=\"icon-user\"></i></a>
\t\t\t\t\t<a class=\"btn btn-large\" title=\"Manage Comments\"><i class=\"icon-comment\"></i><span class=\"label label-danger\">5</span></a>
\t\t\t\t\t<a class=\"btn btn-large\" title=\"Manage Orders\"><i class=\"icon-shopping-cart\"></i></a>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div id=\"breadcrumb\">
\t\t\t\t<a href=\"#\" title=\"Go to Home\" class=\"tip-bottom\"><i class=\"icon-home\"></i> Home</a>
\t\t\t\t<a href=\"#\" class=\"current\">Tables</a>
\t\t\t</div>
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t<div class=\"widget-box\">
\t\t\t\t\t\t\t<div class=\"widget-title\">
\t\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t\t<i class=\"icon-th\"></i>
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<h5>Static table</h5>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"widget-content nopadding\">
\t\t\t\t\t\t\t\t<table class=\"table table-bordered table-striped table-hover\">
\t\t\t\t\t\t\t\t\t<thead>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<th>Column name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Column name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Column name</th>
\t\t\t\t\t\t\t\t\t\t\t<th>Column name</th>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</thead>
\t\t\t\t\t\t\t\t\t<tbody>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 1</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 2</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 3</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 4</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 1</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 2</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 3</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 4</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 1</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 2</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 3</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 4</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 1</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 2</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 3</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 4</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 1</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 2</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 3</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 4</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t\t<tr>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 1</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 2</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 3</td>
\t\t\t\t\t\t\t\t\t\t\t<td>Row 4</td>
\t\t\t\t\t\t\t\t\t\t</tr>
\t\t\t\t\t\t\t\t\t</tbody>
\t\t\t\t\t\t\t\t</table>\t\t\t\t\t\t\t
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t</div>
\t\t\t
            
{% endblock container %}", "@EasyjetSwissinsideCore/Default/index.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\SwissinsideCoreBundle\\Resources\\views\\Default\\index.html.twig");
    }
}
