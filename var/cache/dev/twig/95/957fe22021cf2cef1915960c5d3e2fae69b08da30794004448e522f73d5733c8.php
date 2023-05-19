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

/* @EasyjetWorkingSheet/WorkingSheetActualWork/myDay.html.twig */
class __TwigTemplate_e881edb43c37607d49963c6cc3333b1433e50d1b8cb680da574dbb27feb4aeba extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/WorkingSheetActualWork/myDay.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/WorkingSheetActualWork/myDay.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetWorkingSheet/WorkingSheetActualWork/myDay.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetWorkingSheet/Base/structure.html.twig", "@EasyjetWorkingSheet/WorkingSheetActualWork/myDay.html.twig", 1);
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

        // line 4
        echo "<div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">My working day</h1>  
            <div id=\"description_help\">Below, you will find details about your current working day.</div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 12
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 12, $context, $this->getSourceContext());
        echo "
            </div>
        </div>
        ";
        // line 15
        if ((0 === twig_compare(twig_length_filter($this->env, (isset($context["listOfPatterns"]) || array_key_exists("listOfPatterns", $context) ? $context["listOfPatterns"] : (function () { throw new RuntimeError('Variable "listOfPatterns" does not exist.', 15, $this->source); })())), 0))) {
            // line 16
            echo "            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"alert alert-danger\">
                        <p>
                            <b>Important!</b> We noticed that you don't have any working pattern setup yet. 
                            <b>This should be your very first step</b> when using this application.<br>
                            Once you will have setup your pattern and your line manager validated it,
                            your working time will be automatically setup everyday. You will only have to update your daily working 
                            time in case of important discrepencies between you pattern and your actual working day.</p>
                        <a href=\"";
            // line 25
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("working_sheet_pattern_new");
            echo "\" class=\"btn btn-danger \">Create my pattern now</a>
                    </div>
                </div>
            </div>
        ";
        }
        // line 30
        echo "                    
        <div class=\"row\">

            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>Your working day</h5>
                    </div>
                    ";
        // line 41
        if ((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 41, $this->source); })())) {
            // line 42
            echo "                        ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 42, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
            echo "
                    ";
        }
        // line 44
        echo "                    <div class=\"widget-content ";
        echo (((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 44, $this->source); })())) ? ("nopadding") : ("center"));
        echo "\">
                        ";
        // line 45
        if ((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 45, $this->source); })())) {
            // line 46
            echo "                            <p class=\"alert alert-info\"><strong>Info! </strong>Below, you can edit your current working day</p>
                            ";
            // line 47
            if ((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 47, $this->source); })())) {
                // line 48
                echo "                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
                // line 49
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 49, $this->source); })()), "isBankHolliday", [], "any", false, false, false, 49), 'label');
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 51
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 51, $this->source); })()), "isBankHolliday", [], "any", false, false, false, 51), 'widget');
                echo " (your absence was justified or it was a bank holiday, <strong>do not tick this box if you were in SP/T</strong>)
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
                // line 55
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 55, $this->source); })()), "workingDate", [], "any", false, false, false, 55), 'label');
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 57
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 57, $this->source); })()), "workingDate", [], "any", false, false, false, 57), 'widget', ["attr" => ["class" => "form-control"]]);
                echo " 
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
                // line 62
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 62, $this->source); })()), "morningFrom", [], "any", false, false, false, 62), 'label');
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 64
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 64, $this->source); })()), "morningFrom", [], "any", false, false, false, 64), 'widget', ["attr" => ["class" => "form-control"]]);
                echo " 
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
                // line 69
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 69, $this->source); })()), "morningTo", [], "any", false, false, false, 69), 'label');
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 71
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 71, $this->source); })()), "morningTo", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control"]]);
                echo " 
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
                // line 76
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 76, $this->source); })()), "afternoonFrom", [], "any", false, false, false, 76), 'label');
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 78
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 78, $this->source); })()), "afternoonFrom", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control"]]);
                echo " 
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
                // line 83
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 83, $this->source); })()), "afternoonTo", [], "any", false, false, false, 83), 'label');
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 85
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 85, $this->source); })()), "afternoonTo", [], "any", false, false, false, 85), 'widget', ["attr" => ["class" => "form-control"]]);
                echo " 
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
                // line 90
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 90, $this->source); })()), "isHolliday", [], "any", false, false, false, 90), 'label');
                echo "</label>
                                    <div class=\"controls\">
                                        ";
                // line 92
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 92, $this->source); })()), "isHolliday", [], "any", false, false, false, 92), 'widget', ["attr" => ["class" => "select2-input"]]);
                echo " 
                                    </div>
                                </div>
                            ";
            }
            // line 96
            echo "                        ";
        } else {
            // line 97
            echo "                             <p>You did not setup any working time for today. Please click the \"New working day\" button below if you are working to setup your daily hours</p>
                             <p><a href=\"";
            // line 98
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("working_sheet_actual_work_new");
            echo "\" class=\"btn btn-primary\"><i class=\"icon-add\"></i> 
                                New working day
                            </a></p>
                        ";
        }
        // line 102
        echo "                    </div>
                    ";
        // line 103
        if ((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 103, $this->source); })())) {
            // line 104
            echo "                        <div class=\"form-actions\">
                            <input id=\"submit-button\" type=\"submit\" class=\"btn btn-primary\" />
                        </div>
                        ";
            // line 107
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 107, $this->source); })()), 'form_end');
            echo "
                    ";
        }
        // line 109
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
        return "@EasyjetWorkingSheet/WorkingSheetActualWork/myDay.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  261 => 109,  256 => 107,  251 => 104,  249 => 103,  246 => 102,  239 => 98,  236 => 97,  233 => 96,  226 => 92,  221 => 90,  213 => 85,  208 => 83,  200 => 78,  195 => 76,  187 => 71,  182 => 69,  174 => 64,  169 => 62,  161 => 57,  156 => 55,  149 => 51,  144 => 49,  141 => 48,  139 => 47,  136 => 46,  134 => 45,  129 => 44,  123 => 42,  121 => 41,  108 => 30,  100 => 25,  89 => 16,  87 => 15,  81 => 12,  71 => 4,  61 => 3,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetWorkingSheet/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}
{% block container -%}
    <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">My working day</h1>  
            <div id=\"description_help\">Below, you will find details about your current working day.</div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
                {{ macros.wizz() }}
            </div>
        </div>
        {% if listOfPatterns|length == 0 %}
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"alert alert-danger\">
                        <p>
                            <b>Important!</b> We noticed that you don't have any working pattern setup yet. 
                            <b>This should be your very first step</b> when using this application.<br>
                            Once you will have setup your pattern and your line manager validated it,
                            your working time will be automatically setup everyday. You will only have to update your daily working 
                            time in case of important discrepencies between you pattern and your actual working day.</p>
                        <a href=\"{{ url(\"working_sheet_pattern_new\") }}\" class=\"btn btn-danger \">Create my pattern now</a>
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
                        <h5>Your working day</h5>
                    </div>
                    {% if edit_form %}
                        {{ form_start(edit_form, {'attr': {'class': 'form-horizontal'}}) }}
                    {% endif %}
                    <div class=\"widget-content {{ edit_form ? \"nopadding\" : \"center\" }}\">
                        {% if edit_form %}
                            <p class=\"alert alert-info\"><strong>Info! </strong>Below, you can edit your current working day</p>
                            {% if edit_form %}
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
                            {% endif %}
                        {% else %}
                             <p>You did not setup any working time for today. Please click the \"New working day\" button below if you are working to setup your daily hours</p>
                             <p><a href=\"{{ path('working_sheet_actual_work_new') }}\" class=\"btn btn-primary\"><i class=\"icon-add\"></i> 
                                New working day
                            </a></p>
                        {% endif %}
                    </div>
                    {% if edit_form %}
                        <div class=\"form-actions\">
                            <input id=\"submit-button\" type=\"submit\" class=\"btn btn-primary\" />
                        </div>
                        {{ form_end(edit_form) }}
                    {% endif %}
                    
                </div>
            </div>
        </div>
    </div>
{% endblock %}
", "@EasyjetWorkingSheet/WorkingSheetActualWork/myDay.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\WorkingSheetBundle\\Resources\\views\\WorkingSheetActualWork\\myDay.html.twig");
    }
}
