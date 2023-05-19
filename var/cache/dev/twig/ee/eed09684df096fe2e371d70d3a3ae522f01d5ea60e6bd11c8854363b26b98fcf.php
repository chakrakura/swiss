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

/* @EasyjetFdtr/Mails/externalDtimeUserLock.html.twig */
class __TwigTemplate_a9932d89382ceb9e77401bf39371d1fac7cbeb775e4304dba40f1aef199bf2fe extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@EasyjetSwissinsideCore/Mail/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetFdtr/Mails/externalDtimeUserLock.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetFdtr/Mails/externalDtimeUserLock.html.twig"));

        $this->parent = $this->loadTemplate("@EasyjetSwissinsideCore/Mail/structure.html.twig", "@EasyjetFdtr/Mails/externalDtimeUserLock.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">Alert</h1>         
            <div id=\"description_help\">Reminder to provide easyJet Switzerland with your external duties hours</div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
                <p>Dear ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["monthlyReport"]) || array_key_exists("monthlyReport", $context) ? $context["monthlyReport"] : (function () { throw new RuntimeError('Variable "monthlyReport" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "prenomUser", [], "any", false, false, false, 13), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["monthlyReport"]) || array_key_exists("monthlyReport", $context) ? $context["monthlyReport"] : (function () { throw new RuntimeError('Variable "monthlyReport" does not exist.', 13, $this->source); })()), "user", [], "any", false, false, false, 13), "nomUser", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>

                <p>You received this automatic email as you benefit from an external employment authorisation and you did not record any hours since the last 3 months. <br>
                As a consequence, you have been locked out for this capability. Please contact the Swiss HR
                </p>



                <p>Regards</p>
                <p>EZS Flight Ops team</p>
            </div>         
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetFdtr/Mails/externalDtimeUserLock.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 13,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@EasyjetSwissinsideCore/Mail/structure.html.twig\" %}

{% block content %}

    <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">Alert</h1>         
            <div id=\"description_help\">Reminder to provide easyJet Switzerland with your external duties hours</div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
                <p>Dear {{ monthlyReport.user.prenomUser }} {{ monthlyReport.user.nomUser }}</p>

                <p>You received this automatic email as you benefit from an external employment authorisation and you did not record any hours since the last 3 months. <br>
                As a consequence, you have been locked out for this capability. Please contact the Swiss HR
                </p>



                <p>Regards</p>
                <p>EZS Flight Ops team</p>
            </div>         
        </div>
    </div>

{% endblock %}   ", "@EasyjetFdtr/Mails/externalDtimeUserLock.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\FdtrBundle\\Resources\\views\\Mails\\externalDtimeUserLock.html.twig");
    }
}
