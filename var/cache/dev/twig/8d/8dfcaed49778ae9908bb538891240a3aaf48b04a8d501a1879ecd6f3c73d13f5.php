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

/* @EasyjetFdtr/Mails/externalDtimeReminder.html.twig */
class __TwigTemplate_748eb0c9cef1bf85639f573e741658839bd34787ff515f4dc3e4b723073b218b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetFdtr/Mails/externalDtimeReminder.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetFdtr/Mails/externalDtimeReminder.html.twig"));

        $this->parent = $this->loadTemplate("@EasyjetSwissinsideCore/Mail/structure.html.twig", "@EasyjetFdtr/Mails/externalDtimeReminder.html.twig", 1);
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
            <h1 id=\"titre_help\">Reminder</h1>         
            <div id=\"description_help\">Reminder to provide easyJet Switzerland with your external duties hours</div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
                <p>Dear,</p>

                <p>You received this automatic email as you benefit from an external employment authorisation and, so far, you did not record any hours this month.<br>
                If you didn't do any external duty hours this month, please go to <a href=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["swissinsideUrl"]) || array_key_exists("swissinsideUrl", $context) ? $context["swissinsideUrl"] : (function () { throw new RuntimeError('Variable "swissinsideUrl" does not exist.', 16, $this->source); })()), "html", null, true);
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("fdtr_list_index");
        echo "\" target=\"_blank\">(link)</a> which will take you into the Swissinside EDTR application. Click and confirm \"No external duty this month\".<br/>
                If you fail to do so the next 3 continuous months, your account will be locked.<br/>
                Should the link not work, please go to ";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["swissinsideUrl"]) || array_key_exists("swissinsideUrl", $context) ? $context["swissinsideUrl"] : (function () { throw new RuntimeError('Variable "swissinsideUrl" does not exist.', 18, $this->source); })()), "html", null, true);
        echo " and in the EDTR tab to perform this duty.
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
        return "@EasyjetFdtr/Mails/externalDtimeReminder.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 18,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@EasyjetSwissinsideCore/Mail/structure.html.twig\" %}

{% block content %}

    <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">Reminder</h1>         
            <div id=\"description_help\">Reminder to provide easyJet Switzerland with your external duties hours</div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
                <p>Dear,</p>

                <p>You received this automatic email as you benefit from an external employment authorisation and, so far, you did not record any hours this month.<br>
                If you didn't do any external duty hours this month, please go to <a href=\"{{swissinsideUrl}}{{ path('fdtr_list_index') }}\" target=\"_blank\">(link)</a> which will take you into the Swissinside EDTR application. Click and confirm \"No external duty this month\".<br/>
                If you fail to do so the next 3 continuous months, your account will be locked.<br/>
                Should the link not work, please go to {{swissinsideUrl}} and in the EDTR tab to perform this duty.
                </p>



                <p>Regards</p>
                <p>EZS Flight Ops team</p>
            </div>         
        </div>
    </div>

{% endblock %}   ", "@EasyjetFdtr/Mails/externalDtimeReminder.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\FdtrBundle\\Resources\\views\\Mails\\externalDtimeReminder.html.twig");
    }
}
