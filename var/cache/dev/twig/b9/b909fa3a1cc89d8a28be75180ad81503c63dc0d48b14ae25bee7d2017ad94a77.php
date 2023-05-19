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

/* @EasyjetWorkingSheet/WorkingSheetActualWork/edit.html.twig */
class __TwigTemplate_e48b9a01dbfbf930bd5fdf6d42a2c2a524e1003287579c02695221fa36d06be5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/WorkingSheetActualWork/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/WorkingSheetActualWork/edit.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetWorkingSheet/WorkingSheetActualWork/edit.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetWorkingSheet/Base/structure.html.twig", "@EasyjetWorkingSheet/WorkingSheetActualWork/edit.html.twig", 1);
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

        // line 6
        echo "<div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">Edit your working day</h1>
            <div id=\"description_help\">Here you are able to update your working day. Just fill the form in order to change your entry.</div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 14
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 14, $context, $this->getSourceContext());
        echo "
            </div>
        </div>
        
        ";
        // line 18
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 18, $this->source); })()), "locked", [], "any", false, false, false, 18)) {
            // line 19
            echo "            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"alert alert-warning\">
                        <strong>Notice!</strong> Sorry, this day is not editable anymore. Note that you cannot edit the days from previous month after the 10th of the month.
                    </div>
                </div>
            </div>
        ";
        }
        // line 27
        echo "        
        
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
        // line 39
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 39, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
                    <div class=\"widget-content nopadding\">

                        <div class=\"form-group\">
                            <label class=\"control-label\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 43, $this->source); })()), "isBankHolliday", [], "any", false, false, false, 43), 'label');
        echo "</label>
                            <div class=\"controls\">
                                ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 45, $this->source); })()), "isBankHolliday", [], "any", false, false, false, 45), 'widget');
        echo " (your absence was justified or it was a bank holiday, <strong>do not tick this box if you were in SP/T</strong>)
                            </div>
                        </div>
                        
                        <div class=\"form-group\">
                            <label class=\"control-label\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 50, $this->source); })()), "workingDate", [], "any", false, false, false, 50), 'label');
        echo "</label>
                            <div class=\"controls\">
                                ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 52, $this->source); })()), "workingDate", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 57, $this->source); })()), "morningFrom", [], "any", false, false, false, 57), 'label');
        echo "</label>
                            <div class=\"controls\">
                                ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 59, $this->source); })()), "morningFrom", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 64, $this->source); })()), "morningTo", [], "any", false, false, false, 64), 'label');
        echo "</label>
                            <div class=\"controls\">
                                ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 66, $this->source); })()), "morningTo", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 71, $this->source); })()), "afternoonFrom", [], "any", false, false, false, 71), 'label');
        echo "</label>
                            <div class=\"controls\">
                                ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 73, $this->source); })()), "afternoonFrom", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 78, $this->source); })()), "afternoonTo", [], "any", false, false, false, 78), 'label');
        echo "</label>
                            <div class=\"controls\">
                                ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 80, $this->source); })()), "afternoonTo", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control"]]);
        echo " 
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">";
        // line 85
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 85, $this->source); })()), "isHolliday", [], "any", false, false, false, 85), 'label');
        echo "</label>
                            <div class=\"controls\">
                                ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 87, $this->source); })()), "isHolliday", [], "any", false, false, false, 87), 'widget', ["attr" => ["class" => "select2-input"]]);
        echo " 
                            </div>
                        </div>
                    </div>
                    <div class=\"form-actions\">
                        <input id=\"submit-button\" type=\"submit\" class=\"btn btn-primary\" />
                    </div>
                    ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 94, $this->source); })()), 'form_end');
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
        return "@EasyjetWorkingSheet/WorkingSheetActualWork/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  214 => 94,  204 => 87,  199 => 85,  191 => 80,  186 => 78,  178 => 73,  173 => 71,  165 => 66,  160 => 64,  152 => 59,  147 => 57,  139 => 52,  134 => 50,  126 => 45,  121 => 43,  114 => 39,  100 => 27,  90 => 19,  88 => 18,  81 => 14,  71 => 6,  61 => 4,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetWorkingSheet/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block container -%}

    <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">Edit your working day</h1>
            <div id=\"description_help\">Here you are able to update your working day. Just fill the form in order to change your entry.</div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {{ macros.wizz() }}
            </div>
        </div>
        
        {% if entity.locked %}
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"alert alert-warning\">
                        <strong>Notice!</strong> Sorry, this day is not editable anymore. Note that you cannot edit the days from previous month after the 10th of the month.
                    </div>
                </div>
            </div>
        {% endif %}
        
        
        <div class=\"row\">

            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>Setup you new working day</h5>
                    </div>
                    {{ form_start(edit_form, {'attr': {'class': 'form-horizontal'}} ) }}
                    <div class=\"widget-content nopadding\">

                        <div class=\"form-group\">
                            <label class=\"control-label\">{{ form_label(edit_form.isBankHolliday) }}</label>
                            <div class=\"controls\">
                                {{ form_widget(edit_form.isBankHolliday) }} (your absence was justified or it was a bank holiday, <strong>do not tick this box if you were in SP/T</strong>)
                            </div>
                        </div>
                        
                        <div class=\"form-group\">
                            <label class=\"control-label\">{{ form_label(edit_form.workingDate) }}</label>
                            <div class=\"controls\">
                                {{ form_widget(edit_form.workingDate, {'attr': {'class': 'form-control'}}) }} 
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">{{ form_label(edit_form.morningFrom) }}</label>
                            <div class=\"controls\">
                                {{ form_widget(edit_form.morningFrom, {'attr': {'class': 'form-control'}}) }} 
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">{{ form_label(edit_form.morningTo) }}</label>
                            <div class=\"controls\">
                                {{ form_widget(edit_form.morningTo, {'attr': {'class': 'form-control'}}) }} 
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">{{ form_label(edit_form.afternoonFrom) }}</label>
                            <div class=\"controls\">
                                {{ form_widget(edit_form.afternoonFrom, {'attr': {'class': 'form-control'}}) }} 
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">{{ form_label(edit_form.afternoonTo) }}</label>
                            <div class=\"controls\">
                                {{ form_widget(edit_form.afternoonTo, {'attr': {'class': 'form-control'}}) }} 
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">{{ form_label(edit_form.isHolliday) }}</label>
                            <div class=\"controls\">
                                {{ form_widget(edit_form.isHolliday, {'attr': {'class': 'select2-input'}}) }} 
                            </div>
                        </div>
                    </div>
                    <div class=\"form-actions\">
                        <input id=\"submit-button\" type=\"submit\" class=\"btn btn-primary\" />
                    </div>
                    {{ form_end(edit_form) }}
                </div>
            </div>
        </div>
    </div>

       
{% endblock %}
", "@EasyjetWorkingSheet/WorkingSheetActualWork/edit.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\WorkingSheetBundle\\Resources\\views\\WorkingSheetActualWork\\edit.html.twig");
    }
}
