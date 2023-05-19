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

/* @EasyjetWorkingSheet/WorkingSheetPattern/edit.html.twig */
class __TwigTemplate_012de3111822bf6dda1bef08c799290d2a4ffda861055382b9f83849e2fcd051 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'container' => [$this, 'block_container'],
            'specificJs' => [$this, 'block_specificJs'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/WorkingSheetPattern/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/WorkingSheetPattern/edit.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetWorkingSheet/WorkingSheetPattern/edit.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetWorkingSheet/Base/structure.html.twig", "@EasyjetWorkingSheet/WorkingSheetPattern/edit.html.twig", 1);
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
            <h1 id=\"titre_help\">Working sheet pattern</h1>
            <div id=\"description_help\">Here you are able to update sheet pattern. Just fill the form in order to create your entry.</div>
        </div>
        
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 14
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 14, $context, $this->getSourceContext());
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
                        <h5>Your working sheet pattern</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 29, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal", "id" => "pattern-form"]]);
        echo "
                        <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"call-types-list\">
                        <thead>
                            <tr>
                                <th>Day of the week</th>
                                <th colspan=\"2\">Morning</th>
                                <th colspan=\"2\">Afternoon</th>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <th>From</th>
                                <th>To</th>
                                <th>From</th>
                                <th>To</th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <td>Monday</td>
                                <td>
                                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 49, $this->source); })()), "mondayMorningFrom", [], "any", false, false, false, 49), 'errors');
        echo "
                                    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 50, $this->source); })()), "mondayMorningFrom", [], "any", false, false, false, 50), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                    
                                </td>
                                <td>    
                                    ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 54, $this->source); })()), "mondayMorningTo", [], "any", false, false, false, 54), 'errors');
        echo "
                                    ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 55, $this->source); })()), "mondayMorningTo", [], "any", false, false, false, 55), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                                <td>
                                    ";
        // line 58
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 58, $this->source); })()), "mondayAfternoonFrom", [], "any", false, false, false, 58), 'errors');
        echo "
                                    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 59, $this->source); })()), "mondayAfternoonFrom", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                                <td>    
                                    ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 62, $this->source); })()), "mondayAfternoonTo", [], "any", false, false, false, 62), 'errors');
        echo "
                                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 63, $this->source); })()), "mondayAfternoonTo", [], "any", false, false, false, 63), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                    <a class=\"btn btn-default btn-sm\" href=\"javascript:;\" data-override-days=\"true\">Apply to every day</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tuesday</td>
                                <td>
                                    ";
        // line 70
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 70, $this->source); })()), "tuesdayMorningFrom", [], "any", false, false, false, 70), 'errors');
        echo "
                                    ";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 71, $this->source); })()), "tuesdayMorningFrom", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                                <td>    
                                    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 74, $this->source); })()), "tuesdayMorningTo", [], "any", false, false, false, 74), 'errors');
        echo "
                                    ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 75, $this->source); })()), "tuesdayMorningTo", [], "any", false, false, false, 75), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                                <td>
                                    ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 78, $this->source); })()), "tuesdayAfternoonFrom", [], "any", false, false, false, 78), 'errors');
        echo "
                                    ";
        // line 79
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 79, $this->source); })()), "tuesdayAfternoonFrom", [], "any", false, false, false, 79), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                                <td>    
                                    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 82, $this->source); })()), "tuesdayAfternoonTo", [], "any", false, false, false, 82), 'errors');
        echo "
                                    ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 83, $this->source); })()), "tuesdayAfternoonTo", [], "any", false, false, false, 83), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>Wednesday</td>
                                <td>
                                    ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 89, $this->source); })()), "wednesdayMorningFrom", [], "any", false, false, false, 89), 'errors');
        echo "
                                    ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 90, $this->source); })()), "wednesdayMorningFrom", [], "any", false, false, false, 90), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                                <td>    
                                    ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 93, $this->source); })()), "wednesdayMorningTo", [], "any", false, false, false, 93), 'errors');
        echo "
                                    ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 94, $this->source); })()), "wednesdayMorningTo", [], "any", false, false, false, 94), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                                <td>
                                    ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 97, $this->source); })()), "wednesdayAfternoonFrom", [], "any", false, false, false, 97), 'errors');
        echo "
                                    ";
        // line 98
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 98, $this->source); })()), "wednesdayAfternoonFrom", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                                <td>    
                                    ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 101, $this->source); })()), "wednesdayAfternoonTo", [], "any", false, false, false, 101), 'errors');
        echo "
                                    ";
        // line 102
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 102, $this->source); })()), "wednesdayAfternoonTo", [], "any", false, false, false, 102), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>Thursday</td>
                                <td>
                                    ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 108, $this->source); })()), "thursdayMorningFrom", [], "any", false, false, false, 108), 'errors');
        echo "
                                    ";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 109, $this->source); })()), "thursdayMorningFrom", [], "any", false, false, false, 109), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                                <td>    
                                    ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 112, $this->source); })()), "thursdayMorningTo", [], "any", false, false, false, 112), 'errors');
        echo "
                                    ";
        // line 113
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 113, $this->source); })()), "thursdayMorningTo", [], "any", false, false, false, 113), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                                <td>
                                    ";
        // line 116
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 116, $this->source); })()), "thursdayAfternoonFrom", [], "any", false, false, false, 116), 'errors');
        echo "
                                    ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 117, $this->source); })()), "thursdayAfternoonFrom", [], "any", false, false, false, 117), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                                <td>    
                                    ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 120, $this->source); })()), "thursdayAfternoonTo", [], "any", false, false, false, 120), 'errors');
        echo "
                                    ";
        // line 121
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 121, $this->source); })()), "thursdayAfternoonTo", [], "any", false, false, false, 121), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>
                                    ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 127, $this->source); })()), "fridayMorningFrom", [], "any", false, false, false, 127), 'errors');
        echo "
                                    ";
        // line 128
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 128, $this->source); })()), "fridayMorningFrom", [], "any", false, false, false, 128), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                                <td>    
                                    ";
        // line 131
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 131, $this->source); })()), "fridayMorningTo", [], "any", false, false, false, 131), 'errors');
        echo "
                                    ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 132, $this->source); })()), "fridayMorningTo", [], "any", false, false, false, 132), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                                <td>
                                    ";
        // line 135
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 135, $this->source); })()), "fridayAfternoonFrom", [], "any", false, false, false, 135), 'errors');
        echo "
                                    ";
        // line 136
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 136, $this->source); })()), "fridayAfternoonFrom", [], "any", false, false, false, 136), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                                <td>    
                                    ";
        // line 139
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 139, $this->source); })()), "fridayAfternoonTo", [], "any", false, false, false, 139), 'errors');
        echo "
                                    ";
        // line 140
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 140, $this->source); })()), "fridayAfternoonTo", [], "any", false, false, false, 140), 'widget', ["attr" => ["class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>Saturday</td>
                                <td>
                                    ";
        // line 146
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 146, $this->source); })()), "saturdayMorningFrom", [], "any", false, false, false, 146), 'errors');
        echo "
                                    ";
        // line 147
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 147, $this->source); })()), "saturdayMorningFrom", [], "any", false, false, false, 147), 'widget', ["attr" => ["disabled" => "disabled", "class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                                <td>    
                                    ";
        // line 150
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 150, $this->source); })()), "saturdayMorningTo", [], "any", false, false, false, 150), 'errors');
        echo "
                                    ";
        // line 151
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 151, $this->source); })()), "saturdayMorningTo", [], "any", false, false, false, 151), 'widget', ["attr" => ["disabled" => "disabled", "class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                                <td>
                                    ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 154, $this->source); })()), "saturdayAfternoonFrom", [], "any", false, false, false, 154), 'errors');
        echo "
                                    ";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 155, $this->source); })()), "saturdayAfternoonFrom", [], "any", false, false, false, 155), 'widget', ["attr" => ["disabled" => "disabled", "class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                                <td>    
                                    ";
        // line 158
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 158, $this->source); })()), "saturdayAfternoonTo", [], "any", false, false, false, 158), 'errors');
        echo "
                                    ";
        // line 159
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 159, $this->source); })()), "saturdayAfternoonTo", [], "any", false, false, false, 159), 'widget', ["attr" => ["disabled" => "disabled", "class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td>
                                    ";
        // line 165
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 165, $this->source); })()), "sundayMorningFrom", [], "any", false, false, false, 165), 'errors');
        echo "
                                    ";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 166, $this->source); })()), "sundayMorningFrom", [], "any", false, false, false, 166), 'widget', ["attr" => ["disabled" => "disabled", "class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                                <td>    
                                    ";
        // line 169
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 169, $this->source); })()), "sundayMorningTo", [], "any", false, false, false, 169), 'errors');
        echo "
                                    ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 170, $this->source); })()), "sundayMorningTo", [], "any", false, false, false, 170), 'widget', ["attr" => ["disabled" => "disabled", "class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                                <td>
                                    ";
        // line 173
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 173, $this->source); })()), "sundayAfternoonFrom", [], "any", false, false, false, 173), 'errors');
        echo "
                                    ";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 174, $this->source); })()), "sundayAfternoonFrom", [], "any", false, false, false, 174), 'widget', ["attr" => ["disabled" => "disabled", "class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                                <td>    
                                    ";
        // line 177
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 177, $this->source); })()), "sundayAfternoonTo", [], "any", false, false, false, 177), 'errors');
        echo "
                                    ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 178, $this->source); })()), "sundayAfternoonTo", [], "any", false, false, false, 178), 'widget', ["attr" => ["disabled" => "disabled", "class" => "form-control", "style" => "width:100px; display: inline-block;"]]);
        echo "
                                </td>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th colspan=\"3\"></th>
                                <th><strong>Total time:</strong><span id=\"pattern-working-time\"></th>
                                <th><strong>Expected time:</strong><span id=\"expected-working-time\">";
        // line 186
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 186, $this->source); })()), "patternForUser", [], "any", false, false, false, 186), "weeklyHoursToBeDone", [0 => true], "method", false, false, false, 186), "html", null, true);
        echo "</th>
                            </tr>
                        </tfoot>
                        </table>

                        ";
        // line 191
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 191, $this->source); })()), 'widget');
        echo "
                        

                        <div class=\"form-actions\">
                            <input id=\"submit-button\" type=\"submit\" class=\"btn btn-primary\" />
                        </div>
                    ";
        // line 197
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 197, $this->source); })()), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 206
    public function block_specificJs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificJs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificJs"));

        $this->displayParentBlock("specificJs", $context, $blocks);
        echo "
    <script src=\"https://code.jquery.com/jquery-3.6.1.min.js\"></script>
    <script src=\"/moment.min.js\"></script>
    <script>
        \$(function() {
            
            \$(\"[data-override-days]\").on(\"click\", function() {
                \$(\"#working_sheet_pattern_tuesdayMorningFrom\").val(\$(\"#working_sheet_pattern_mondayMorningFrom\").val());
                \$(\"#working_sheet_pattern_tuesdayMorningTo\").val(\$(\"#working_sheet_pattern_mondayMorningTo\").val());
                \$(\"#working_sheet_pattern_tuesdayAfternoonFrom\").val(\$(\"#working_sheet_pattern_mondayAfternoonFrom\").val());
                \$(\"#working_sheet_pattern_tuesdayAfternoonTo\").val(\$(\"#working_sheet_pattern_mondayAfternoonTo\").val());
                
                \$(\"#working_sheet_pattern_wednesdayMorningFrom\").val(\$(\"#working_sheet_pattern_mondayMorningFrom\").val());
                \$(\"#working_sheet_pattern_wednesdayMorningTo\").val(\$(\"#working_sheet_pattern_mondayMorningTo\").val());
                \$(\"#working_sheet_pattern_wednesdayAfternoonFrom\").val(\$(\"#working_sheet_pattern_mondayAfternoonFrom\").val());
                \$(\"#working_sheet_pattern_wednesdayAfternoonTo\").val(\$(\"#working_sheet_pattern_mondayAfternoonTo\").val());
                
                \$(\"#working_sheet_pattern_thursdayMorningFrom\").val(\$(\"#working_sheet_pattern_mondayMorningFrom\").val());
                \$(\"#working_sheet_pattern_thursdayMorningTo\").val(\$(\"#working_sheet_pattern_mondayMorningTo\").val());
                \$(\"#working_sheet_pattern_thursdayAfternoonFrom\").val(\$(\"#working_sheet_pattern_mondayAfternoonFrom\").val());
                \$(\"#working_sheet_pattern_thursdayAfternoonTo\").val(\$(\"#working_sheet_pattern_mondayAfternoonTo\").val());
                
                \$(\"#working_sheet_pattern_fridayMorningFrom\").val(\$(\"#working_sheet_pattern_mondayMorningFrom\").val());
                \$(\"#working_sheet_pattern_fridayMorningTo\").val(\$(\"#working_sheet_pattern_mondayMorningTo\").val());
                \$(\"#working_sheet_pattern_fridayAfternoonFrom\").val(\$(\"#working_sheet_pattern_mondayAfternoonFrom\").val());
                \$(\"#working_sheet_pattern_fridayAfternoonTo\").val(\$(\"#working_sheet_pattern_mondayAfternoonTo\").val());
                updatePatternDuration();
                
            });
            
            var updatePatternDuration = function() {
                var from = null;
                var to = null;
                var duration = moment.duration();

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_mondayMorningFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_mondayMorningTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_mondayAfternoonFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_mondayAfternoonTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }


                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_tuesdayMorningFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_tuesdayMorningTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_tuesdayAfternoonFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_tuesdayAfternoonTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_wednesdayMorningFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_wednesdayMorningTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_wednesdayAfternoonFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_wednesdayAfternoonTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_thursdayMorningFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_thursdayMorningTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_thursdayAfternoonFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_thursdayAfternoonTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_fridayMorningFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_fridayMorningTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_fridayAfternoonFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_fridayAfternoonTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_saturdayMorningFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_saturdayMorningTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_saturdayAfternoonFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_saturdayAfternoonTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_sundayMorningFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_sundayMorningTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_sundayAfternoonFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_sundayAfternoonTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                var hours = Math.abs(duration.days() * 24) + Math.abs(duration.hours());
                \$(\"#pattern-working-time\").text(hours + \"h\" + Math.abs(duration.minutes()).toString().padStart(2, \"0\"));
            };
            
            updatePatternDuration();
            
            \$(\"body\").on(\"change\", \"input\", function() {
                updatePatternDuration();
            });
            
            var patternFormAcceptSubmit = false;
            \$(\"#pattern-form\").on(\"submit\", function(e) {
                if (patternFormAcceptSubmit) {
                    return true;
                } 
                
                e.preventDefault();
                
                if (\$(\"#pattern-working-time\").text() !== \$(\"#expected-working-time\").text()) {
                    bootbox.confirm(\"The pattern working time <strong>(\" + \$(\"#pattern-working-time\").text() + \")</strong> is different from the expected weekly hours you are supposed to do <strong>(\" + \$(\"#expected-working-time\").text() + \")</strong>. Do you want to send your pattern to the HR anyway ?\", function(accepted) {
                        if (accepted) {
                            patternFormAcceptSubmit = true;
                            \$(\"#pattern-form\").submit();
                        } 
                    });
                } else {
                    patternFormAcceptSubmit = true;
                    \$(\"#pattern-form\").submit();
                }
            });
            
        });
    </script>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetWorkingSheet/WorkingSheetPattern/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  463 => 206,  445 => 197,  436 => 191,  428 => 186,  417 => 178,  413 => 177,  407 => 174,  403 => 173,  397 => 170,  393 => 169,  387 => 166,  383 => 165,  374 => 159,  370 => 158,  364 => 155,  360 => 154,  354 => 151,  350 => 150,  344 => 147,  340 => 146,  331 => 140,  327 => 139,  321 => 136,  317 => 135,  311 => 132,  307 => 131,  301 => 128,  297 => 127,  288 => 121,  284 => 120,  278 => 117,  274 => 116,  268 => 113,  264 => 112,  258 => 109,  254 => 108,  245 => 102,  241 => 101,  235 => 98,  231 => 97,  225 => 94,  221 => 93,  215 => 90,  211 => 89,  202 => 83,  198 => 82,  192 => 79,  188 => 78,  182 => 75,  178 => 74,  172 => 71,  168 => 70,  158 => 63,  154 => 62,  148 => 59,  144 => 58,  138 => 55,  134 => 54,  127 => 50,  123 => 49,  100 => 29,  82 => 14,  72 => 6,  62 => 4,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetWorkingSheet/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block container -%}

    <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">Working sheet pattern</h1>
            <div id=\"description_help\">Here you are able to update sheet pattern. Just fill the form in order to create your entry.</div>
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
                        <h5>Your working sheet pattern</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        {{ form_start(edit_form, {'attr': {'class': 'form-horizontal', \"id\" : \"pattern-form\"}} ) }}
                        <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"call-types-list\">
                        <thead>
                            <tr>
                                <th>Day of the week</th>
                                <th colspan=\"2\">Morning</th>
                                <th colspan=\"2\">Afternoon</th>
                            </tr>
                            <tr>
                                <th>&nbsp;</th>
                                <th>From</th>
                                <th>To</th>
                                <th>From</th>
                                <th>To</th>
                            </tr>
                        </thead>
                        <thead>
                            <tr>
                                <td>Monday</td>
                                <td>
                                    {{ form_errors(edit_form.mondayMorningFrom) }}
                                    {{ form_widget(edit_form.mondayMorningFrom, {\"attr\" : {\"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                    
                                </td>
                                <td>    
                                    {{ form_errors(edit_form.mondayMorningTo) }}
                                    {{ form_widget(edit_form.mondayMorningTo, {\"attr\" : {\"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                                <td>
                                    {{ form_errors(edit_form.mondayAfternoonFrom) }}
                                    {{ form_widget(edit_form.mondayAfternoonFrom, {\"attr\" : {\"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                                <td>    
                                    {{ form_errors(edit_form.mondayAfternoonTo) }}
                                    {{ form_widget(edit_form.mondayAfternoonTo, {\"attr\" : {\"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                    <a class=\"btn btn-default btn-sm\" href=\"javascript:;\" data-override-days=\"true\">Apply to every day</a>
                                </td>
                            </tr>
                            <tr>
                                <td>Tuesday</td>
                                <td>
                                    {{ form_errors(edit_form.tuesdayMorningFrom) }}
                                    {{ form_widget(edit_form.tuesdayMorningFrom, {\"attr\" : {\"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                                <td>    
                                    {{ form_errors(edit_form.tuesdayMorningTo) }}
                                    {{ form_widget(edit_form.tuesdayMorningTo, {\"attr\" : {\"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                                <td>
                                    {{ form_errors(edit_form.tuesdayAfternoonFrom) }}
                                    {{ form_widget(edit_form.tuesdayAfternoonFrom, {\"attr\" : {\"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                                <td>    
                                    {{ form_errors(edit_form.tuesdayAfternoonTo) }}
                                    {{ form_widget(edit_form.tuesdayAfternoonTo, {\"attr\" : {\"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                            </tr>
                            <tr>
                                <td>Wednesday</td>
                                <td>
                                    {{ form_errors(edit_form.wednesdayMorningFrom) }}
                                    {{ form_widget(edit_form.wednesdayMorningFrom, {\"attr\" : {\"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                                <td>    
                                    {{ form_errors(edit_form.wednesdayMorningTo) }}
                                    {{ form_widget(edit_form.wednesdayMorningTo, {\"attr\" : {\"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                                <td>
                                    {{ form_errors(edit_form.wednesdayAfternoonFrom) }}
                                    {{ form_widget(edit_form.wednesdayAfternoonFrom, {\"attr\" : {\"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                                <td>    
                                    {{ form_errors(edit_form.wednesdayAfternoonTo) }}
                                    {{ form_widget(edit_form.wednesdayAfternoonTo, {\"attr\" : {\"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                            </tr>
                            <tr>
                                <td>Thursday</td>
                                <td>
                                    {{ form_errors(edit_form.thursdayMorningFrom) }}
                                    {{ form_widget(edit_form.thursdayMorningFrom, {\"attr\" : {\"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                                <td>    
                                    {{ form_errors(edit_form.thursdayMorningTo) }}
                                    {{ form_widget(edit_form.thursdayMorningTo, {\"attr\" : {\"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                                <td>
                                    {{ form_errors(edit_form.thursdayAfternoonFrom) }}
                                    {{ form_widget(edit_form.thursdayAfternoonFrom, {\"attr\" : {\"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                                <td>    
                                    {{ form_errors(edit_form.thursdayAfternoonTo) }}
                                    {{ form_widget(edit_form.thursdayAfternoonTo, {\"attr\" : {\"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>
                                    {{ form_errors(edit_form.fridayMorningFrom) }}
                                    {{ form_widget(edit_form.fridayMorningFrom, {\"attr\" : {\"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                                <td>    
                                    {{ form_errors(edit_form.fridayMorningTo) }}
                                    {{ form_widget(edit_form.fridayMorningTo, {\"attr\" : {\"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                                <td>
                                    {{ form_errors(edit_form.fridayAfternoonFrom) }}
                                    {{ form_widget(edit_form.fridayAfternoonFrom, {\"attr\" : {\"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                                <td>    
                                    {{ form_errors(edit_form.fridayAfternoonTo) }}
                                    {{ form_widget(edit_form.fridayAfternoonTo, {\"attr\" : {\"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                            </tr>
                            <tr>
                                <td>Saturday</td>
                                <td>
                                    {{ form_errors(edit_form.saturdayMorningFrom) }}
                                    {{ form_widget(edit_form.saturdayMorningFrom, {\"attr\" : {\"disabled\" : \"disabled\", \"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                                <td>    
                                    {{ form_errors(edit_form.saturdayMorningTo) }}
                                    {{ form_widget(edit_form.saturdayMorningTo, {\"attr\" : {\"disabled\" : \"disabled\", \"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                                <td>
                                    {{ form_errors(edit_form.saturdayAfternoonFrom) }}
                                    {{ form_widget(edit_form.saturdayAfternoonFrom, {\"attr\" : {\"disabled\" : \"disabled\", \"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                                <td>    
                                    {{ form_errors(edit_form.saturdayAfternoonTo) }}
                                    {{ form_widget(edit_form.saturdayAfternoonTo, {\"attr\" : {\"disabled\" : \"disabled\", \"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td>
                                    {{ form_errors(edit_form.sundayMorningFrom) }}
                                    {{ form_widget(edit_form.sundayMorningFrom, {\"attr\":{\"disabled\" : \"disabled\", \"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                                <td>    
                                    {{ form_errors(edit_form.sundayMorningTo) }}
                                    {{ form_widget(edit_form.sundayMorningTo, {\"attr\":{\"disabled\" : \"disabled\", \"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                                <td>
                                    {{ form_errors(edit_form.sundayAfternoonFrom) }}
                                    {{ form_widget(edit_form.sundayAfternoonFrom, {\"attr\":{\"disabled\" : \"disabled\", \"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                                <td>    
                                    {{ form_errors(edit_form.sundayAfternoonTo) }}
                                    {{ form_widget(edit_form.sundayAfternoonTo, {\"attr\":{\"disabled\" : \"disabled\", \"class\" : \"form-control\", \"style\" : \"width:100px; display: inline-block;\"} }) }}
                                </td>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th colspan=\"3\"></th>
                                <th><strong>Total time:</strong><span id=\"pattern-working-time\"></th>
                                <th><strong>Expected time:</strong><span id=\"expected-working-time\">{{ entity.patternForUser.weeklyHoursToBeDone(true) }}</th>
                            </tr>
                        </tfoot>
                        </table>

                        {{ form_widget(edit_form) }}
                        

                        <div class=\"form-actions\">
                            <input id=\"submit-button\" type=\"submit\" class=\"btn btn-primary\" />
                        </div>
                    {{ form_end(edit_form) }}
                    </div>
                </div>
            </div>
        </div>
    </div>

{% endblock %}

{% block specificJs %}{{ parent() }}
    <script src=\"https://code.jquery.com/jquery-3.6.1.min.js\"></script>
    <script src=\"/moment.min.js\"></script>
    <script>
        \$(function() {
            
            \$(\"[data-override-days]\").on(\"click\", function() {
                \$(\"#working_sheet_pattern_tuesdayMorningFrom\").val(\$(\"#working_sheet_pattern_mondayMorningFrom\").val());
                \$(\"#working_sheet_pattern_tuesdayMorningTo\").val(\$(\"#working_sheet_pattern_mondayMorningTo\").val());
                \$(\"#working_sheet_pattern_tuesdayAfternoonFrom\").val(\$(\"#working_sheet_pattern_mondayAfternoonFrom\").val());
                \$(\"#working_sheet_pattern_tuesdayAfternoonTo\").val(\$(\"#working_sheet_pattern_mondayAfternoonTo\").val());
                
                \$(\"#working_sheet_pattern_wednesdayMorningFrom\").val(\$(\"#working_sheet_pattern_mondayMorningFrom\").val());
                \$(\"#working_sheet_pattern_wednesdayMorningTo\").val(\$(\"#working_sheet_pattern_mondayMorningTo\").val());
                \$(\"#working_sheet_pattern_wednesdayAfternoonFrom\").val(\$(\"#working_sheet_pattern_mondayAfternoonFrom\").val());
                \$(\"#working_sheet_pattern_wednesdayAfternoonTo\").val(\$(\"#working_sheet_pattern_mondayAfternoonTo\").val());
                
                \$(\"#working_sheet_pattern_thursdayMorningFrom\").val(\$(\"#working_sheet_pattern_mondayMorningFrom\").val());
                \$(\"#working_sheet_pattern_thursdayMorningTo\").val(\$(\"#working_sheet_pattern_mondayMorningTo\").val());
                \$(\"#working_sheet_pattern_thursdayAfternoonFrom\").val(\$(\"#working_sheet_pattern_mondayAfternoonFrom\").val());
                \$(\"#working_sheet_pattern_thursdayAfternoonTo\").val(\$(\"#working_sheet_pattern_mondayAfternoonTo\").val());
                
                \$(\"#working_sheet_pattern_fridayMorningFrom\").val(\$(\"#working_sheet_pattern_mondayMorningFrom\").val());
                \$(\"#working_sheet_pattern_fridayMorningTo\").val(\$(\"#working_sheet_pattern_mondayMorningTo\").val());
                \$(\"#working_sheet_pattern_fridayAfternoonFrom\").val(\$(\"#working_sheet_pattern_mondayAfternoonFrom\").val());
                \$(\"#working_sheet_pattern_fridayAfternoonTo\").val(\$(\"#working_sheet_pattern_mondayAfternoonTo\").val());
                updatePatternDuration();
                
            });
            
            var updatePatternDuration = function() {
                var from = null;
                var to = null;
                var duration = moment.duration();

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_mondayMorningFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_mondayMorningTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_mondayAfternoonFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_mondayAfternoonTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }


                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_tuesdayMorningFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_tuesdayMorningTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_tuesdayAfternoonFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_tuesdayAfternoonTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_wednesdayMorningFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_wednesdayMorningTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_wednesdayAfternoonFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_wednesdayAfternoonTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_thursdayMorningFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_thursdayMorningTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_thursdayAfternoonFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_thursdayAfternoonTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_fridayMorningFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_fridayMorningTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_fridayAfternoonFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_fridayAfternoonTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_saturdayMorningFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_saturdayMorningTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_saturdayAfternoonFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_saturdayAfternoonTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_sundayMorningFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_sundayMorningTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                from = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_sundayAfternoonFrom\").val() + \":00\");
                to = moment(moment().format(\"YYYY-MM-DD\")+ \" \" + \$(\"#working_sheet_pattern_sundayAfternoonTo\").val() + \":00\");

                if (from.isValid() && to.isValid()) {
                   duration.add(moment.duration(from.diff(to)));
                }

                var hours = Math.abs(duration.days() * 24) + Math.abs(duration.hours());
                \$(\"#pattern-working-time\").text(hours + \"h\" + Math.abs(duration.minutes()).toString().padStart(2, \"0\"));
            };
            
            updatePatternDuration();
            
            \$(\"body\").on(\"change\", \"input\", function() {
                updatePatternDuration();
            });
            
            var patternFormAcceptSubmit = false;
            \$(\"#pattern-form\").on(\"submit\", function(e) {
                if (patternFormAcceptSubmit) {
                    return true;
                } 
                
                e.preventDefault();
                
                if (\$(\"#pattern-working-time\").text() !== \$(\"#expected-working-time\").text()) {
                    bootbox.confirm(\"The pattern working time <strong>(\" + \$(\"#pattern-working-time\").text() + \")</strong> is different from the expected weekly hours you are supposed to do <strong>(\" + \$(\"#expected-working-time\").text() + \")</strong>. Do you want to send your pattern to the HR anyway ?\", function(accepted) {
                        if (accepted) {
                            patternFormAcceptSubmit = true;
                            \$(\"#pattern-form\").submit();
                        } 
                    });
                } else {
                    patternFormAcceptSubmit = true;
                    \$(\"#pattern-form\").submit();
                }
            });
            
        });
    </script>
    
{% endblock specificJs %}", "@EasyjetWorkingSheet/WorkingSheetPattern/edit.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\WorkingSheetBundle\\Resources\\views\\WorkingSheetPattern\\edit.html.twig");
    }
}
