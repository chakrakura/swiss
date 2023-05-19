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

/* @EasyjetHris/UsersImport/logView.html.twig */
class __TwigTemplate_8ceceda14faaab4eb44b24f508b2ec93c327efca87226bbfb2e4ca66ea0bf3b8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/UsersImport/logView.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/UsersImport/logView.html.twig"));

        $this->parent = $this->loadTemplate("@EasyjetHris/Base/structure.html.twig", "@EasyjetHris/UsersImport/logView.html.twig", 1);
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

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 10
        echo "
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Synchronization log for the ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 13, $this->source); })()), "scriptTime", [], "any", false, false, false, 13), "F jS Y - H:i"), "html", null, true);
        echo ".</h1>
        <div id=\"description_help\">Hereafter, the details about the selected log.</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 20
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 20, $this->source); })()), "session", [], "any", false, false, false, 20), "flashbag", [], "any", false, false, false, 20), "get", [0 => "error"], "method", false, false, false, 20));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 21
            echo "                    <div class=\"alert alert-danger\">
                            <button class=\"close\" data-dismiss=\"alert\">×</button>
                            <strong>Notice</strong> ";
            // line 23
            echo $context["flashMessage"];
            echo ".
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 26, $this->source); })()), "session", [], "any", false, false, false, 26), "flashbag", [], "any", false, false, false, 26), "get", [0 => "success"], "method", false, false, false, 26));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 27
            echo "                    <div class=\"alert alert-success\">
                            <button class=\"close\" data-dismiss=\"alert\">×</button>
                            <strong>Success</strong> ";
            // line 29
            echo $context["flashMessage"];
            echo ".
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "
                ";
        // line 33
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 33, $this->source); })()), "session", [], "any", false, false, false, 33), "flashbag", [], "any", false, false, false, 33), "all", [], "method", false, false, false, 33));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 34
            echo "                    <div class=\"alert alert-info\">
                            <button class=\"close\" data-dismiss=\"alert\">×</button>
                            <strong>Info</strong> ";
            // line 36
            echo twig_get_attribute($this->env, $this->source, $context["flashMessage"], 0, [], "array", false, false, false, 36);
            echo ".
                    </div>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "            ";
        // line 40
        echo "        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Html report sent to the responsibles</h5>
                </div>
                <div class=\"widget-content\">
                    ";
        // line 53
        echo "                        ";
        echo twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 53, $this->source); })()), "htmlReport", [], "any", false, false, false, 53);
        echo "
                    ";
        // line 55
        echo "                </div>
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
        return "@EasyjetHris/UsersImport/logView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 55,  177 => 53,  163 => 40,  161 => 39,  152 => 36,  148 => 34,  144 => 33,  141 => 32,  132 => 29,  128 => 27,  123 => 26,  114 => 23,  110 => 21,  105 => 20,  96 => 13,  91 => 10,  81 => 9,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetHris/Base/structure.html.twig' %}

{% block specificJs %}{{ parent() }}

{% endblock specificJs %}



{% block container %}

<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Synchronization log for the {{ log.scriptTime|date('F jS Y - H:i') }}.</h1>
        <div id=\"description_help\">Hereafter, the details about the selected log.</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            {% autoescape false %}
                {% for flashMessage in app.session.flashbag.get('error') %}
                    <div class=\"alert alert-danger\">
                            <button class=\"close\" data-dismiss=\"alert\">×</button>
                            <strong>Notice</strong> {{ flashMessage }}.
                    </div>
                {% endfor %}
                {% for flashMessage in app.session.flashbag.get('success') %}
                    <div class=\"alert alert-success\">
                            <button class=\"close\" data-dismiss=\"alert\">×</button>
                            <strong>Success</strong> {{ flashMessage }}.
                    </div>
                {% endfor %}

                {% for flashMessage in app.session.flashbag.all() %}
                    <div class=\"alert alert-info\">
                            <button class=\"close\" data-dismiss=\"alert\">×</button>
                            <strong>Info</strong> {{ flashMessage[0] }}.
                    </div>
                {% endfor %}
            {% endautoescape %}
        </div>
    </div>
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Html report sent to the responsibles</h5>
                </div>
                <div class=\"widget-content\">
                    {% autoescape false %}
                        {{ log.htmlReport }}
                    {% endautoescape %}
                </div>
            </div>
        </div>
    </div>


</div>

{% endblock container %}
", "@EasyjetHris/UsersImport/logView.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\HrisBundle\\Resources\\views\\UsersImport\\logView.html.twig");
    }
}
