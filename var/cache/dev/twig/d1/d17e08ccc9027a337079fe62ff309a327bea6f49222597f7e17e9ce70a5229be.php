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

/* @EasyjetOtp/Admin/Disruptions/add.html.twig */
class __TwigTemplate_0544411c3b3368b518356d77fe014c6e00e565fcba18b73fdefabd401bb79724 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Admin/Disruptions/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Admin/Disruptions/add.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetOtp/Admin/Disruptions/add.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetOtp/Base/structure.html.twig", "@EasyjetOtp/Admin/Disruptions/add.html.twig", 1);
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

        echo " ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()), "html", null, true);
        echo " ";
        
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
<script type=\"text/javascript\">

    \$(document).ready(function() {
        // you may need to change this code if you are not using Bootstrap Datepicker
        \$('.js-datepicker').datepicker({
            autoclose:true
        });

    });

    \$(function() {
        
        var updateFields = function(disableEffects) {
            if (\$(\"#compensation_grades_form_ignored\").is(\":checked\")) {
                \$(\"#compensation_grades_form_typeEftr\").parents('.form-group').slideUp(disableEffects === true ? 0 : 200);
            } else {
                \$(\"#compensation_grades_form_typeEftr\").parents('.form-group').slideDown(disableEffects === true ? 0 : 200);
            }
        }

        
        \$(\"#compensation_grades_form_ignored\").on(\"change\", function() { 
            if (\$(this).is(\":checked\")) {
                \$(\"#compensation_grades_form_ignored\").attr(\"checked\", \"checked\");
            } else {
                \$(\"#compensation_grades_form_ignored\").removeAttr(\"checked\");
            }
            updateFields();
        });

        updateFields(true);
    });
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 44
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 45
        echo "        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Disruption</h1>         
        <div id=\"description_help\">Please fill the following form in order to create the new disruption. This will be used to calculate the proper sector pay.</div>
    </div>
    
    ";
        // line 52
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
    ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'errors');
        echo "
    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 57
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 57, $context, $this->getSourceContext());
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
                    <h5>New disruption</h5>
                </div>

                <div class=\"widget-content nopadding\">

                    <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "montantCabin", [], "any", false, false, false, 75), 'label');
        echo " :</label>
                        <div class=\"controls\">
                            ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "montantCabin", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                        </div>
                    </div> 

                    <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), "montantPilot", [], "any", false, false, false, 82), 'label');
        echo " :</label>
                        <div class=\"controls\">
                            ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), "montantPilot", [], "any", false, false, false, 84), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "dateEffectivite", [], "any", false, false, false, 89), 'label');
        echo " :</label>
                        <div class=\"controls\">
                            ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "dateEffectivite", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "form-control js-datepicker"]]);
        echo "
                        </div>
                    </div>
                    
                    <div class=\"form-actions\">
                        <input  type=\"submit\" class=\"btn btn-primary\" />
                    </div>

                </div>

            </div>

        </div>    

    </div>

    ";
        // line 107
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), 'form_end');
        echo "
    
</div>
   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetOtp/Admin/Disruptions/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 107,  221 => 91,  216 => 89,  208 => 84,  203 => 82,  195 => 77,  190 => 75,  169 => 57,  162 => 53,  158 => 52,  149 => 45,  139 => 44,  84 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetOtp/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %} {{ title }} {% endblock %}

{% block specificJs %}{{ parent() }}
<script type=\"text/javascript\">

    \$(document).ready(function() {
        // you may need to change this code if you are not using Bootstrap Datepicker
        \$('.js-datepicker').datepicker({
            autoclose:true
        });

    });

    \$(function() {
        
        var updateFields = function(disableEffects) {
            if (\$(\"#compensation_grades_form_ignored\").is(\":checked\")) {
                \$(\"#compensation_grades_form_typeEftr\").parents('.form-group').slideUp(disableEffects === true ? 0 : 200);
            } else {
                \$(\"#compensation_grades_form_typeEftr\").parents('.form-group').slideDown(disableEffects === true ? 0 : 200);
            }
        }

        
        \$(\"#compensation_grades_form_ignored\").on(\"change\", function() { 
            if (\$(this).is(\":checked\")) {
                \$(\"#compensation_grades_form_ignored\").attr(\"checked\", \"checked\");
            } else {
                \$(\"#compensation_grades_form_ignored\").removeAttr(\"checked\");
            }
            updateFields();
        });

        updateFields(true);
    });
</script>

{% endblock specificJs %}
  

{% block container %}
        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Disruption</h1>         
        <div id=\"description_help\">Please fill the following form in order to create the new disruption. This will be used to calculate the proper sector pay.</div>
    </div>
    
    {{ form_start(form, {'attr': {'class': 'form-horizontal'}} ) }}
    {{ form_errors(form) }}
    
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
                    <h5>New disruption</h5>
                </div>

                <div class=\"widget-content nopadding\">

                    <div class=\"form-group\">
                        <label class=\"control-label\">{{ form_label(form.montantCabin) }} :</label>
                        <div class=\"controls\">
                            {{ form_widget(form.montantCabin, { 'attr': {'class': 'form-control'} }) }} 
                        </div>
                    </div> 

                    <div class=\"form-group\">
                        <label class=\"control-label\">{{ form_label(form.montantPilot) }} :</label>
                        <div class=\"controls\">
                            {{ form_widget(form.montantPilot, { 'attr': {'class': 'form-control'} }) }}
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">{{ form_label(form.dateEffectivite) }} :</label>
                        <div class=\"controls\">
                            {{ form_widget(form.dateEffectivite, { 'attr': {'class': 'form-control js-datepicker'} }) }}
                        </div>
                    </div>
                    
                    <div class=\"form-actions\">
                        <input  type=\"submit\" class=\"btn btn-primary\" />
                    </div>

                </div>

            </div>

        </div>    

    </div>

    {{ form_end(form) }}
    
</div>
   
{% endblock container %}", "@EasyjetOtp/Admin/Disruptions/add.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\OtpBundle\\Resources\\views\\Admin\\Disruptions\\add.html.twig");
    }
}
