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

/* @EasyjetEleave/Admin/Rules/add.html.twig */
class __TwigTemplate_bb1856280668425647b216971770a5fe573c52bcb3edfcf411c28aefc6b2b244 extends Template
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
        return "@EasyjetEleave/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/Admin/Rules/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/Admin/Rules/add.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetEleave/Admin/Rules/add.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetEleave/Base/structure.html.twig", "@EasyjetEleave/Admin/Rules/add.html.twig", 1);
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

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 13
        echo "        
<div id=\"content\">

    <div id=\"content-header\">
        <h1 id=\"titre_help\">Rules management</h1>         
        <div id=\"description_help\">Here, you can manage the refuse type to associate to the leave request.</div>
    </div>
    
    ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'errors');
        echo "
        
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 26
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 26, $context, $this->getSourceContext());
        echo "
        </div>
        
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">

                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Create or edit a rule to put in the PDF document.</h5>
                </div>

                <div class=\"widget-content nopadding\">

                    <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "text", [], "any", false, false, false, 42), 'label');
        echo " :</label>
                        <div class=\"controls\">
                            ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "text", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "cabinCrew", [], "any", false, false, false, 49), 'label');
        echo " :</label>
                        <div class=\"controls\">
                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "cabinCrew", [], "any", false, false, false, 51), 'widget');
        echo "
                        </div>
                    </div> 

                    <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 56, $this->source); })()), "flightCrew", [], "any", false, false, false, 56), 'label');
        echo " :</label>
                        <div class=\"controls\">
                            ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "flightCrew", [], "any", false, false, false, 58), 'widget');
        echo "
                        </div>
                    </div>  

                    <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "display", [], "any", false, false, false, 63), 'label');
        echo " :</label>
                        <div class=\"controls\">
                            ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "display", [], "any", false, false, false, 65), 'widget');
        echo "
                        </div>
                    </div> 
              
                    <div class=\"form-actions\">
                        <input type=\"submit\" class=\"btn btn-primary\" />
                   </div>

                </div>

            </div>
            
        </div>

    </div>    
    
    ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_end');
        echo "
   
</div>
   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetEleave/Admin/Rules/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  219 => 81,  200 => 65,  195 => 63,  187 => 58,  182 => 56,  174 => 51,  169 => 49,  161 => 44,  156 => 42,  137 => 26,  130 => 22,  126 => 21,  116 => 13,  106 => 12,  84 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetEleave/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %} {{ title }} {% endblock %}

{% block specificJs %}{{ parent() }}

{% endblock specificJs %}
        


{% block container %}
        
<div id=\"content\">

    <div id=\"content-header\">
        <h1 id=\"titre_help\">Rules management</h1>         
        <div id=\"description_help\">Here, you can manage the refuse type to associate to the leave request.</div>
    </div>
    
    {{ form_start(form, {'attr': {'class': 'form-horizontal'}} ) }}
    {{ form_errors(form) }}
        
    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ macros.wizz() }}
        </div>
        
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">

                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Create or edit a rule to put in the PDF document.</h5>
                </div>

                <div class=\"widget-content nopadding\">

                    <div class=\"form-group\">
                        <label class=\"control-label\">{{ form_label(form.text) }} :</label>
                        <div class=\"controls\">
                            {{ form_widget(form.text, { 'attr': {'class': 'form-control'} }) }}
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">{{ form_label(form.cabinCrew) }} :</label>
                        <div class=\"controls\">
                            {{ form_widget(form.cabinCrew) }}
                        </div>
                    </div> 

                    <div class=\"form-group\">
                        <label class=\"control-label\">{{ form_label(form.flightCrew) }} :</label>
                        <div class=\"controls\">
                            {{ form_widget(form.flightCrew) }}
                        </div>
                    </div>  

                    <div class=\"form-group\">
                        <label class=\"control-label\">{{ form_label(form.display) }} :</label>
                        <div class=\"controls\">
                            {{ form_widget(form.display) }}
                        </div>
                    </div> 
              
                    <div class=\"form-actions\">
                        <input type=\"submit\" class=\"btn btn-primary\" />
                   </div>

                </div>

            </div>
            
        </div>

    </div>    
    
    {{ form_end(form) }}
   
</div>
   
{% endblock container %}", "@EasyjetEleave/Admin/Rules/add.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EleaveBundle\\Resources\\views\\Admin\\Rules\\add.html.twig");
    }
}
