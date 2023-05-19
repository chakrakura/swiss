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

/* @EasyjetWorkingSheet/WorkingSheetActualWork/new.html.twig */
class __TwigTemplate_77dca37675bd52854e6d5b8f73ee936f9801d5218915cbd4f7b8269fb4bfa4d7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/WorkingSheetActualWork/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/WorkingSheetActualWork/new.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetWorkingSheet/WorkingSheetActualWork/new.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetWorkingSheet/Base/structure.html.twig", "@EasyjetWorkingSheet/WorkingSheetActualWork/new.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
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
            <h1 id=\"titre_help\">Setup you new working day</h1>
            <div id=\"description_help\">Here you are able to create a new working daz. Just fill the form in order to create your entry.</div>
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
                        <h5>Setup you new working day</h5>
                    </div>
                    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
                    <div class=\"widget-content nopadding\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "isBankHolliday", [], "any", false, false, false, 30), 'label');
        echo "</label>
                            <div class=\"controls\">
                                ";
        // line 32
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "isBankHolliday", [], "any", false, false, false, 32), 'widget');
        echo " (your absence was justified or it was a bank holiday, <strong>do not tick this box if you were in SP/T</strong>)
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "workingDate", [], "any", false, false, false, 37), 'label');
        echo "</label>
                            <div class=\"controls\">
                                ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "workingDate", [], "any", false, false, false, 39), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "morningFrom", [], "any", false, false, false, 44), 'label');
        echo "</label>
                            <div class=\"controls\">
                                ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "morningFrom", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "morningTo", [], "any", false, false, false, 51), 'label');
        echo "</label>
                            <div class=\"controls\">
                                ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "morningTo", [], "any", false, false, false, 53), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), "afternoonFrom", [], "any", false, false, false, 58), 'label');
        echo "</label>
                            <div class=\"controls\">
                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), "afternoonFrom", [], "any", false, false, false, 60), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "afternoonTo", [], "any", false, false, false, 65), 'label');
        echo "</label>
                            <div class=\"controls\">
                                ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "afternoonTo", [], "any", false, false, false, 67), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "isHolliday", [], "any", false, false, false, 72), 'label');
        echo "</label>
                            <div class=\"controls\">
                                ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "isHolliday", [], "any", false, false, false, 74), 'widget', ["attr" => ["class" => "select2-input"]]);
        echo " 
                            </div>
                        </div>

                    </div>
                    <div class=\"form-actions\">
                        <input id=\"submit-button\" type=\"submit\" class=\"btn btn-primary\" />
                    </div>
                    ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), 'form_end');
        echo "
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
        return "@EasyjetWorkingSheet/WorkingSheetActualWork/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 82,  187 => 74,  182 => 72,  174 => 67,  169 => 65,  161 => 60,  156 => 58,  148 => 53,  143 => 51,  135 => 46,  130 => 44,  122 => 39,  117 => 37,  109 => 32,  104 => 30,  98 => 27,  81 => 13,  71 => 5,  61 => 3,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetWorkingSheet/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}
{% block container -%}

    <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">Setup you new working day</h1>
            <div id=\"description_help\">Here you are able to create a new working daz. Just fill the form in order to create your entry.</div>
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
                        <h5>Setup you new working day</h5>
                    </div>
                    {{ form_start(form, {'attr': {'class': 'form-horizontal'}} ) }}
                    <div class=\"widget-content nopadding\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">{{ form_label(form.isBankHolliday) }}</label>
                            <div class=\"controls\">
                                {{ form_widget(form.isBankHolliday) }} (your absence was justified or it was a bank holiday, <strong>do not tick this box if you were in SP/T</strong>)
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">{{ form_label(form.workingDate) }}</label>
                            <div class=\"controls\">
                                {{ form_widget(form.workingDate, {'attr': {'class': 'form-control'}}) }} 
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">{{ form_label(form.morningFrom) }}</label>
                            <div class=\"controls\">
                                {{ form_widget(form.morningFrom, {'attr': {'class': 'form-control'}}) }} 
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">{{ form_label(form.morningTo) }}</label>
                            <div class=\"controls\">
                                {{ form_widget(form.morningTo, {'attr': {'class': 'form-control'}}) }} 
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">{{ form_label(form.afternoonFrom) }}</label>
                            <div class=\"controls\">
                                {{ form_widget(form.afternoonFrom, {'attr': {'class': 'form-control'}}) }} 
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">{{ form_label(form.afternoonTo) }}</label>
                            <div class=\"controls\">
                                {{ form_widget(form.afternoonTo, {'attr': {'class': 'form-control'}}) }} 
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">{{ form_label(form.isHolliday) }}</label>
                            <div class=\"controls\">
                                {{ form_widget(form.isHolliday, {'attr': {'class': 'select2-input'}}) }} 
                            </div>
                        </div>

                    </div>
                    <div class=\"form-actions\">
                        <input id=\"submit-button\" type=\"submit\" class=\"btn btn-primary\" />
                    </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@EasyjetWorkingSheet/WorkingSheetActualWork/new.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\WorkingSheetBundle\\Resources\\views\\WorkingSheetActualWork\\new.html.twig");
    }
}
