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

/* @EasyjetWorkingSheet/Mails/weekendWork.html.twig */
class __TwigTemplate_71aae60ac3bd0ccfd9cc99c60d3a5d73648d6c59e9b1f86cae25f2c520bf1ed6 extends Template
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
        return "EasyjetSwissinsideCoreBundle:Mail:structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/Mails/weekendWork.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/Mails/weekendWork.html.twig"));

        $this->parent = $this->loadTemplate("EasyjetSwissinsideCoreBundle:Mail:structure.html.twig", "@EasyjetWorkingSheet/Mails/weekendWork.html.twig", 1);
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
<h4>Dear Manager, </h4>

<p><strong>";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 7, $this->source); })()), "workedByUser", [], "any", false, false, false, 7), "html", null, true);
        echo "</strong> who is under your responsability reported working time over the weekend. Please find hereafter the details about his report :</p>
<div class=\"row\">
    <div class=\"col-xs-12\">
        <div class=\"widget-box\">
            <div class=\"widget-title\">
                <span class=\"icon\">
                    <i class=\"icon-th\"></i>
                </span>
                <h5>Working day details</h5>
            </div>
            <div class=\"widget-content\">
                <div class=\"\">
                    <label class=\"control-label\">Working date</label>
                    <div class=\"controls\">
                        <span class=\"help-block-inalterable text-left\">";
        // line 21
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 21, $this->source); })()), "workingDate", [], "any", false, false, false, 21), "d/m/Y"), "html", null, true);
        echo "</span> 
                    </div>
                </div>
                <div class=\"\">
                    <label class=\"control-label\">Morning from</label>
                    <div class=\"controls\">
                        <span class=\"help-block-inalterable text-left\">";
        // line 27
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 27, $this->source); })()), "morningFrom", [], "any", false, false, false, 27)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 27, $this->source); })()), "morningFrom", [], "any", false, false, false, 27), "H:i"), "html", null, true))) : (print ("-")));
        echo "</span> 
                    </div>
                </div>
                <div class=\"\">
                    <label class=\"control-label\">Morning to</label>
                    <div class=\"controls\">
                        <span class=\"help-block-inalterable text-left\">";
        // line 33
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 33, $this->source); })()), "morningTo", [], "any", false, false, false, 33)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 33, $this->source); })()), "morningTo", [], "any", false, false, false, 33), "H:i"), "html", null, true))) : (print ("-")));
        echo "</span> 
                    </div>
                </div>
                <div class=\"\">
                    <label class=\"control-label\">Afternoon from</label>
                    <div class=\"controls\">
                       <span class=\"help-block-inalterable text-left\">";
        // line 39
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 39, $this->source); })()), "afternoonFrom", [], "any", false, false, false, 39)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 39, $this->source); })()), "afternoonFrom", [], "any", false, false, false, 39), "H:i"), "html", null, true))) : (print ("-")));
        echo "</span>
                    </div>
                </div>
                <div class=\"\">
                    <label class=\"control-label\">Afternoon to</label>
                    <div class=\"controls\">
                       <span class=\"help-block-inalterable text-left\">";
        // line 45
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 45, $this->source); })()), "afternoonTo", [], "any", false, false, false, 45)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 45, $this->source); })()), "afternoonTo", [], "any", false, false, false, 45), "H:i"), "html", null, true))) : (print ("-")));
        echo "</span>
                    </div>
                </div>
                <div class=\"\">
                    <label class=\"control-label\">Is day off</label>
                    <div class=\"controls\">
                       <span class=\"help-block-inalterable text-left\">
                           ";
        // line 52
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 52, $this->source); })()), "isHolliday", [], "any", false, false, false, 52), 1))) {
            echo "<span class=\"badge badge-success\">Full day</span>
                            ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 53
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 53, $this->source); })()), "isHolliday", [], "any", false, false, false, 53), 0.5))) {
            echo "<span class=\"badge badge-success\">Half a day</span>
                           ";
        } else {
            // line 54
            echo "<span class=\"badge badge-danger\">No</span>
                           ";
        }
        // line 55
        echo "</span>
                    </div>
                </div>
                <div class=\"\">
                    <label class=\"control-label\">Is bank holliday</label>
                    <div class=\"controls\">
                       <span class=\"help-block-inalterable text-left\">";
        // line 61
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 61, $this->source); })()), "isBankHolliday", [], "any", false, false, false, 61)) {
            echo "<span class=\"badge badge-success\">Yes</span>";
        } else {
            echo "<span class=\"badge badge-danger\">No</span>";
        }
        echo "</span>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<p>Kind regards,</p>
<p>Swissinside Robott</p>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetWorkingSheet/Mails/weekendWork.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 61,  149 => 55,  145 => 54,  140 => 53,  136 => 52,  126 => 45,  117 => 39,  108 => 33,  99 => 27,  90 => 21,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"EasyjetSwissinsideCoreBundle:Mail:structure.html.twig\" %}

{% block content %}

<h4>Dear Manager, </h4>

<p><strong>{{ entity.workedByUser }}</strong> who is under your responsability reported working time over the weekend. Please find hereafter the details about his report :</p>
<div class=\"row\">
    <div class=\"col-xs-12\">
        <div class=\"widget-box\">
            <div class=\"widget-title\">
                <span class=\"icon\">
                    <i class=\"icon-th\"></i>
                </span>
                <h5>Working day details</h5>
            </div>
            <div class=\"widget-content\">
                <div class=\"\">
                    <label class=\"control-label\">Working date</label>
                    <div class=\"controls\">
                        <span class=\"help-block-inalterable text-left\">{{ entity.workingDate|date('d/m/Y') }}</span> 
                    </div>
                </div>
                <div class=\"\">
                    <label class=\"control-label\">Morning from</label>
                    <div class=\"controls\">
                        <span class=\"help-block-inalterable text-left\">{{ entity.morningFrom ? entity.morningFrom|date('H:i') : \"-\" }}</span> 
                    </div>
                </div>
                <div class=\"\">
                    <label class=\"control-label\">Morning to</label>
                    <div class=\"controls\">
                        <span class=\"help-block-inalterable text-left\">{{ entity.morningTo ? entity.morningTo|date('H:i') : \"-\" }}</span> 
                    </div>
                </div>
                <div class=\"\">
                    <label class=\"control-label\">Afternoon from</label>
                    <div class=\"controls\">
                       <span class=\"help-block-inalterable text-left\">{{ entity.afternoonFrom ? entity.afternoonFrom|date('H:i') : \"-\" }}</span>
                    </div>
                </div>
                <div class=\"\">
                    <label class=\"control-label\">Afternoon to</label>
                    <div class=\"controls\">
                       <span class=\"help-block-inalterable text-left\">{{ entity.afternoonTo ? entity.afternoonTo|date('H:i') : \"-\" }}</span>
                    </div>
                </div>
                <div class=\"\">
                    <label class=\"control-label\">Is day off</label>
                    <div class=\"controls\">
                       <span class=\"help-block-inalterable text-left\">
                           {% if entity.isHolliday == 1 %}<span class=\"badge badge-success\">Full day</span>
                            {% elseif entity.isHolliday == 0.5 %}<span class=\"badge badge-success\">Half a day</span>
                           {% else %}<span class=\"badge badge-danger\">No</span>
                           {% endif %}</span>
                    </div>
                </div>
                <div class=\"\">
                    <label class=\"control-label\">Is bank holliday</label>
                    <div class=\"controls\">
                       <span class=\"help-block-inalterable text-left\">{% if entity.isBankHolliday %}<span class=\"badge badge-success\">Yes</span>{% else %}<span class=\"badge badge-danger\">No</span>{% endif %}</span>
                    </div>
                </div>


            </div>
        </div>
    </div>
</div>
<p>Kind regards,</p>
<p>Swissinside Robott</p>


{% endblock %}   ", "@EasyjetWorkingSheet/Mails/weekendWork.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\WorkingSheetBundle\\Resources\\views\\Mails\\weekendWork.html.twig");
    }
}
