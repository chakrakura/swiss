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

/* @EasyjetWorkingSheet/WorkingSheetActualWork/show.html.twig */
class __TwigTemplate_6bb3d38c27b2f73950c76739beed725302654f3df75fc3bd68b7835f1f2597a6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/WorkingSheetActualWork/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/WorkingSheetActualWork/show.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetWorkingSheet/WorkingSheetActualWork/show.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetWorkingSheet/Base/structure.html.twig", "@EasyjetWorkingSheet/WorkingSheetActualWork/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 5
        echo "<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Your working day</h1>
        <div id=\"description_help\">Here you see the details about your working day.</div>
    </div>
     
     <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 13
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 13, $context, $this->getSourceContext());
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
                    <h5>Your working day</h5>
                </div>
                <div class=\"widget-content\">
                    <div class=\"\">
                        <label class=\"control-label\">Working date</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">";
        // line 31
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 31, $this->source); })()), "workingDate", [], "any", false, false, false, 31), "d/m/Y"), "html", null, true);
        echo "</span> 
                        </div>
                    </div>
                    <div class=\"\">
                        <label class=\"control-label\">Morning from</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">";
        // line 37
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 37, $this->source); })()), "morningFrom", [], "any", false, false, false, 37)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 37, $this->source); })()), "morningFrom", [], "any", false, false, false, 37), "H:i"), "html", null, true))) : (print ("-")));
        echo "</span> 
                        </div>
                    </div>
                    <div class=\"\">
                        <label class=\"control-label\">Morning to</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">";
        // line 43
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 43, $this->source); })()), "morningTo", [], "any", false, false, false, 43)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 43, $this->source); })()), "morningTo", [], "any", false, false, false, 43), "H:i"), "html", null, true))) : (print ("-")));
        echo "</span> 
                        </div>
                    </div>
                    <div class=\"\">
                        <label class=\"control-label\">Afternoon from</label>
                        <div class=\"controls\">
                           <span class=\"help-block-inalterable text-left\">";
        // line 49
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 49, $this->source); })()), "afternoonFrom", [], "any", false, false, false, 49)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 49, $this->source); })()), "afternoonFrom", [], "any", false, false, false, 49), "H:i"), "html", null, true))) : (print ("-")));
        echo "</span>
                        </div>
                    </div>
                    <div class=\"\">
                        <label class=\"control-label\">Afternoon to</label>
                        <div class=\"controls\">
                           <span class=\"help-block-inalterable text-left\">";
        // line 55
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 55, $this->source); })()), "afternoonTo", [], "any", false, false, false, 55)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 55, $this->source); })()), "afternoonTo", [], "any", false, false, false, 55), "H:i"), "html", null, true))) : (print ("-")));
        echo "</span>
                        </div>
                    </div>
                    <div class=\"\">
                        <label class=\"control-label\">Is day off</label>
                        <div class=\"controls\">
                           <span class=\"help-block-inalterable text-left\">
                               ";
        // line 62
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 62, $this->source); })()), "isHolliday", [], "any", false, false, false, 62), 1))) {
            echo "<span class=\"badge badge-success\">Full day</span>
                                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 63
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 63, $this->source); })()), "isHolliday", [], "any", false, false, false, 63), 0.5))) {
            echo "<span class=\"badge badge-success\">Half a day</span>
                               ";
        } else {
            // line 64
            echo "<span class=\"badge badge-danger\">No</span>
                               ";
        }
        // line 65
        echo "</span>
                        </div>
                    </div>
                    <div class=\"\">
                        <label class=\"control-label\">Is bank holliday</label>
                        <div class=\"controls\">
                           <span class=\"help-block-inalterable text-left\">";
        // line 71
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 71, $this->source); })()), "isBankHolliday", [], "any", false, false, false, 71)) {
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
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetWorkingSheet/WorkingSheetActualWork/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 71,  161 => 65,  157 => 64,  152 => 63,  148 => 62,  138 => 55,  129 => 49,  120 => 43,  111 => 37,  102 => 31,  81 => 13,  71 => 5,  61 => 4,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetWorkingSheet/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block container -%}
 <div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Your working day</h1>
        <div id=\"description_help\">Here you see the details about your working day.</div>
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
                    <h5>Your working day</h5>
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
</div>
{% endblock %}
", "@EasyjetWorkingSheet/WorkingSheetActualWork/show.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\WorkingSheetBundle\\Resources\\views\\WorkingSheetActualWork\\show.html.twig");
    }
}
