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

/* @EasyjetHris/UsersImport/importUsers.html.twig */
class __TwigTemplate_dc7c820fde436c0e3df39e7fbf0c24c3fa16c69a3938161aa081e07ff1f562e8 extends Template
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
        return "@EasyjetHris/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/UsersImport/importUsers.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/UsersImport/importUsers.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetHris/UsersImport/importUsers.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetHris/Base/structure.html.twig", "@EasyjetHris/UsersImport/importUsers.html.twig", 1);
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

        echo "Add a processing calendar entry";
        
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

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 15
        echo "
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Import the users from the workday excel file</h1>
        <div id=\"description_help\">Please select the workday file to be imported.</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 24
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 24, $context, $this->getSourceContext());
        echo "
        </div>
    </div>

    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "

    <div class=\"row\">

        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Import users</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), 'widget');
        echo "

                    <div class=\"form-actions\">
                        <input type=\"submit\" class=\"btn btn-primary\" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_end');
        echo "
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetHris/UsersImport/importUsers.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 51,  148 => 41,  132 => 28,  125 => 24,  114 => 15,  104 => 14,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetHris/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Add a processing calendar entry{% endblock %}

{% block specificJs %}{{ parent() }}

{% endblock specificJs %}





{% block container %}

<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Import the users from the workday excel file</h1>
        <div id=\"description_help\">Please select the workday file to be imported.</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ macros.wizz() }}
        </div>
    </div>

    {{ form_start(form, {'attr': {'class': 'form-horizontal'}} ) }}

    <div class=\"row\">

        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Import users</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    {{ form_widget(form) }}

                    <div class=\"form-actions\">
                        <input type=\"submit\" class=\"btn btn-primary\" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ form_end(form) }}
</div>

{% endblock container %}
", "@EasyjetHris/UsersImport/importUsers.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\HrisBundle\\Resources\\views\\UsersImport\\importUsers.html.twig");
    }
}
