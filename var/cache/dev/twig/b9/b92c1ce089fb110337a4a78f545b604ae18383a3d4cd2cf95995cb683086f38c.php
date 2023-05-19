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

/* @EasyjetWorkingSheet/WorkingSheetPattern/validate.html.twig */
class __TwigTemplate_61d6b14adfefe362b8ea77c61bcad467a0b1f0639fe4f7760beb93147e5f8363 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/WorkingSheetPattern/validate.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/WorkingSheetPattern/validate.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetWorkingSheet/WorkingSheetPattern/validate.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetWorkingSheet/Base/structure.html.twig", "@EasyjetWorkingSheet/WorkingSheetPattern/validate.html.twig", 1);
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
            <h1 id=\"titre_help\">Manage the pattern status</h1>
            <div id=\"description_help\">Here you can approve or refuse a specific pattern.</div>
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
                        <h5>Concerned user</h5>
                    </div>
                    <div class=\"widget-content\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Pattern's user</label>
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">
                                    ";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 34, $this->source); })()), "patternForUser", [], "any", false, false, false, 34), "html", null, true);
        echo " -  ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 34, $this->source); })()), "patternForUser", [], "any", false, false, false, 34), "occupation", [], "any", false, false, false, 34), "html", null, true);
        echo " %
                                </span>                                
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"widget-content\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Pattern weekly hours</label>
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">
                                    ";
        // line 45
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 45, $this->source); })()), "weeklyHours", [], "any", false, false, false, 45), "html", null, true);
        echo "
                                </span>                                
                            </div>
                        </div>
                    </div>
                                
                    <div class=\"widget-content\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Expected Weekly hours to be done for this enployee</label>
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">
                                    ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 56, $this->source); })()), "patternForUser", [], "any", false, false, false, 56), "weeklyHoursToBeDone", [], "any", false, false, false, 56), "html", null, true);
        echo "
                                    ";
        // line 57
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 57, $this->source); })()), "patternForUser", [], "any", false, false, false, 57), "weeklyHoursToBeDone", [], "any", false, false, false, 57), twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 57, $this->source); })()), "weeklyHours", [], "any", false, false, false, 57)))) {
            // line 58
            echo "                                        <span class=\"badge badge-warning\">Difference between  pattern and expected weekly hours</span>
                                    ";
        } else {
            // line 60
            echo "                                        <span class=\"badge badge-success\">Pattern matches the expected weekly hours</span>
                                    ";
        }
        // line 62
        echo "                                </span>                                
                            </div>
                        </div>
                    </div>
                </div>
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
        // line 100
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 100, $this->source); })()), "mondayMorningFrom", [], "any", false, false, false, 100)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 100, $this->source); })()), "mondayMorningFrom", [], "any", false, false, false, 100), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 103
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 103, $this->source); })()), "mondayMorningTo", [], "any", false, false, false, 103)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 103, $this->source); })()), "mondayMorningTo", [], "any", false, false, false, 103), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>
                                    ";
        // line 106
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 106, $this->source); })()), "mondayAfternoonFrom", [], "any", false, false, false, 106)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 106, $this->source); })()), "mondayAfternoonFrom", [], "any", false, false, false, 106), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 109
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 109, $this->source); })()), "mondayAfternoonTo", [], "any", false, false, false, 109)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 109, $this->source); })()), "mondayAfternoonTo", [], "any", false, false, false, 109), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>Tuesday</td>
                                <td>
                                    ";
        // line 115
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 115, $this->source); })()), "tuesdayMorningFrom", [], "any", false, false, false, 115)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 115, $this->source); })()), "tuesdayMorningFrom", [], "any", false, false, false, 115), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 118
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 118, $this->source); })()), "tuesdayMorningTo", [], "any", false, false, false, 118)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 118, $this->source); })()), "tuesdayMorningTo", [], "any", false, false, false, 118), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>
                                    ";
        // line 121
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 121, $this->source); })()), "tuesdayAfternoonFrom", [], "any", false, false, false, 121)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 121, $this->source); })()), "tuesdayAfternoonFrom", [], "any", false, false, false, 121), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 124
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 124, $this->source); })()), "tuesdayAfternoonTo", [], "any", false, false, false, 124)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 124, $this->source); })()), "tuesdayAfternoonTo", [], "any", false, false, false, 124), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>Wednesday</td>
                                <td>
                                    ";
        // line 130
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 130, $this->source); })()), "wednesdayMorningFrom", [], "any", false, false, false, 130)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 130, $this->source); })()), "wednesdayMorningFrom", [], "any", false, false, false, 130), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 133
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 133, $this->source); })()), "wednesdayMorningTo", [], "any", false, false, false, 133)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 133, $this->source); })()), "wednesdayMorningTo", [], "any", false, false, false, 133), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>
                                    ";
        // line 136
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 136, $this->source); })()), "wednesdayAfternoonFrom", [], "any", false, false, false, 136)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 136, $this->source); })()), "wednesdayAfternoonFrom", [], "any", false, false, false, 136), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 139
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 139, $this->source); })()), "wednesdayAfternoonTo", [], "any", false, false, false, 139)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 139, $this->source); })()), "wednesdayAfternoonTo", [], "any", false, false, false, 139), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>Thursday</td>
                                <td>
                                    ";
        // line 145
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 145, $this->source); })()), "thursdayMorningFrom", [], "any", false, false, false, 145)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 145, $this->source); })()), "thursdayMorningFrom", [], "any", false, false, false, 145), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 148
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 148, $this->source); })()), "thursdayMorningTo", [], "any", false, false, false, 148)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 148, $this->source); })()), "thursdayMorningTo", [], "any", false, false, false, 148), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>
                                    ";
        // line 151
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 151, $this->source); })()), "thursdayAfternoonFrom", [], "any", false, false, false, 151)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 151, $this->source); })()), "thursdayAfternoonFrom", [], "any", false, false, false, 151), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 154
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 154, $this->source); })()), "thursdayAfternoonTo", [], "any", false, false, false, 154)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 154, $this->source); })()), "thursdayAfternoonTo", [], "any", false, false, false, 154), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>
                                    ";
        // line 160
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 160, $this->source); })()), "fridayMorningFrom", [], "any", false, false, false, 160)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 160, $this->source); })()), "fridayMorningFrom", [], "any", false, false, false, 160), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 163
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 163, $this->source); })()), "fridayMorningTo", [], "any", false, false, false, 163)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 163, $this->source); })()), "fridayMorningTo", [], "any", false, false, false, 163), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>
                                    ";
        // line 166
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 166, $this->source); })()), "fridayAfternoonFrom", [], "any", false, false, false, 166)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 166, $this->source); })()), "fridayAfternoonFrom", [], "any", false, false, false, 166), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 169
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 169, $this->source); })()), "fridayAfternoonTo", [], "any", false, false, false, 169)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 169, $this->source); })()), "fridayAfternoonTo", [], "any", false, false, false, 169), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>Saturday</td>
                                <td>
                                    ";
        // line 175
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 175, $this->source); })()), "saturdayMorningFrom", [], "any", false, false, false, 175)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 175, $this->source); })()), "saturdayMorningFrom", [], "any", false, false, false, 175), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 178
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 178, $this->source); })()), "saturdayMorningTo", [], "any", false, false, false, 178)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 178, $this->source); })()), "saturdayMorningTo", [], "any", false, false, false, 178), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>
                                    ";
        // line 181
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 181, $this->source); })()), "saturdayAfternoonFrom", [], "any", false, false, false, 181)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 181, $this->source); })()), "saturdayAfternoonFrom", [], "any", false, false, false, 181), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 184
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 184, $this->source); })()), "saturdayAfternoonTo", [], "any", false, false, false, 184)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 184, $this->source); })()), "saturdayAfternoonTo", [], "any", false, false, false, 184), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td>
                                    ";
        // line 190
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 190, $this->source); })()), "sundayMorningFrom", [], "any", false, false, false, 190)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 190, $this->source); })()), "sundayMorningFrom", [], "any", false, false, false, 190), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 193
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 193, $this->source); })()), "sundayMorningTo", [], "any", false, false, false, 193)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 193, $this->source); })()), "sundayMorningTo", [], "any", false, false, false, 193), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>
                                    ";
        // line 196
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 196, $this->source); })()), "sundayAfternoonFrom", [], "any", false, false, false, 196)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 196, $this->source); })()), "sundayAfternoonFrom", [], "any", false, false, false, 196), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 199
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 199, $this->source); })()), "sundayAfternoonTo", [], "any", false, false, false, 199)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 199, $this->source); })()), "sundayAfternoonTo", [], "any", false, false, false, 199), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                            </tr>
                        </thead>
                        </table>
                                
                                    
                    </div>
                </div>
            </div>
        </div>


        ";
        // line 212
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 212, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
        ";
        // line 213
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 213, $this->source); })()), 'errors');
        echo "

        <div class=\"row\">

            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>Validation</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        ";
        // line 226
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 226, $this->source); })()), 'widget');
        echo "
                        <div class=\"form-actions\">
                            <input type=\"submit\" class=\"btn btn-primary\" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        ";
        // line 235
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["edit_form"]) || array_key_exists("edit_form", $context) ? $context["edit_form"] : (function () { throw new RuntimeError('Variable "edit_form" does not exist.', 235, $this->source); })()), 'form_end');
        echo "
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetWorkingSheet/WorkingSheetPattern/validate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  416 => 235,  404 => 226,  388 => 213,  384 => 212,  368 => 199,  362 => 196,  356 => 193,  350 => 190,  341 => 184,  335 => 181,  329 => 178,  323 => 175,  314 => 169,  308 => 166,  302 => 163,  296 => 160,  287 => 154,  281 => 151,  275 => 148,  269 => 145,  260 => 139,  254 => 136,  248 => 133,  242 => 130,  233 => 124,  227 => 121,  221 => 118,  215 => 115,  206 => 109,  200 => 106,  194 => 103,  188 => 100,  148 => 62,  144 => 60,  140 => 58,  138 => 57,  134 => 56,  120 => 45,  104 => 34,  81 => 14,  71 => 6,  61 => 4,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetWorkingSheet/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block container -%}

    <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">Manage the pattern status</h1>
            <div id=\"description_help\">Here you can approve or refuse a specific pattern.</div>
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
                        <h5>Concerned user</h5>
                    </div>
                    <div class=\"widget-content\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Pattern's user</label>
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">
                                    {{ entity.patternForUser }} -  {{ entity.patternForUser.occupation }} %
                                </span>                                
                            </div>
                        </div>
                    </div>
                    
                    <div class=\"widget-content\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Pattern weekly hours</label>
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">
                                    {{ entity.weeklyHours }}
                                </span>                                
                            </div>
                        </div>
                    </div>
                                
                    <div class=\"widget-content\">
                        <div class=\"form-group\">
                            <label class=\"control-label\">Expected Weekly hours to be done for this enployee</label>
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">
                                    {{ entity.patternForUser.weeklyHoursToBeDone }}
                                    {% if entity.patternForUser.weeklyHoursToBeDone != entity.weeklyHours %}
                                        <span class=\"badge badge-warning\">Difference between  pattern and expected weekly hours</span>
                                    {% else %}
                                        <span class=\"badge badge-success\">Pattern matches the expected weekly hours</span>
                                    {% endif %}
                                </span>                                
                            </div>
                        </div>
                    </div>
                </div>
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
                                    {{ entity.mondayMorningFrom ? entity.mondayMorningFrom|date(\"H:i\") : \"-\" }}
                                </td>
                                <td>    
                                    {{ entity.mondayMorningTo ? entity.mondayMorningTo|date(\"H:i\") : \"-\" }}
                                </td>
                                <td>
                                    {{ entity.mondayAfternoonFrom ? entity.mondayAfternoonFrom|date(\"H:i\") : \"-\" }}
                                </td>
                                <td>    
                                    {{ entity.mondayAfternoonTo ? entity.mondayAfternoonTo|date(\"H:i\") : \"-\" }}
                                </td>
                            </tr>
                            <tr>
                                <td>Tuesday</td>
                                <td>
                                    {{ entity.tuesdayMorningFrom ? entity.tuesdayMorningFrom|date(\"H:i\") : \"-\" }}
                                </td>
                                <td>    
                                    {{ entity.tuesdayMorningTo ? entity.tuesdayMorningTo|date(\"H:i\") : \"-\" }}
                                </td>
                                <td>
                                    {{ entity.tuesdayAfternoonFrom ? entity.tuesdayAfternoonFrom|date(\"H:i\") : \"-\" }}
                                </td>
                                <td>    
                                    {{ entity.tuesdayAfternoonTo ? entity.tuesdayAfternoonTo|date(\"H:i\") : \"-\" }}
                                </td>
                            </tr>
                            <tr>
                                <td>Wednesday</td>
                                <td>
                                    {{ entity.wednesdayMorningFrom ? entity.wednesdayMorningFrom|date(\"H:i\") : \"-\" }}
                                </td>
                                <td>    
                                    {{ entity.wednesdayMorningTo ? entity.wednesdayMorningTo|date(\"H:i\") : \"-\" }}
                                </td>
                                <td>
                                    {{ entity.wednesdayAfternoonFrom ? entity.wednesdayAfternoonFrom|date(\"H:i\") : \"-\" }}
                                </td>
                                <td>    
                                    {{ entity.wednesdayAfternoonTo ? entity.wednesdayAfternoonTo|date(\"H:i\") : \"-\" }}
                                </td>
                            </tr>
                            <tr>
                                <td>Thursday</td>
                                <td>
                                    {{ entity.thursdayMorningFrom ? entity.thursdayMorningFrom|date(\"H:i\") : \"-\" }}
                                </td>
                                <td>    
                                    {{ entity.thursdayMorningTo ? entity.thursdayMorningTo|date(\"H:i\") : \"-\" }}
                                </td>
                                <td>
                                    {{ entity.thursdayAfternoonFrom ? entity.thursdayAfternoonFrom|date(\"H:i\") : \"-\" }}
                                </td>
                                <td>    
                                    {{ entity.thursdayAfternoonTo ? entity.thursdayAfternoonTo|date(\"H:i\") : \"-\" }}
                                </td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>
                                    {{ entity.fridayMorningFrom ? entity.fridayMorningFrom|date(\"H:i\") : \"-\" }}
                                </td>
                                <td>    
                                    {{ entity.fridayMorningTo ? entity.fridayMorningTo|date(\"H:i\") : \"-\" }}
                                </td>
                                <td>
                                    {{ entity.fridayAfternoonFrom ? entity.fridayAfternoonFrom|date(\"H:i\") : \"-\" }}
                                </td>
                                <td>    
                                    {{ entity.fridayAfternoonTo ? entity.fridayAfternoonTo|date(\"H:i\") : \"-\" }}
                                </td>
                            </tr>
                            <tr>
                                <td>Saturday</td>
                                <td>
                                    {{ entity.saturdayMorningFrom ? entity.saturdayMorningFrom|date(\"H:i\") : \"-\" }}
                                </td>
                                <td>    
                                    {{ entity.saturdayMorningTo ? entity.saturdayMorningTo|date(\"H:i\") : \"-\" }}
                                </td>
                                <td>
                                    {{ entity.saturdayAfternoonFrom ? entity.saturdayAfternoonFrom|date(\"H:i\") : \"-\" }}
                                </td>
                                <td>    
                                    {{ entity.saturdayAfternoonTo ? entity.saturdayAfternoonTo|date(\"H:i\") : \"-\" }}
                                </td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td>
                                    {{ entity.sundayMorningFrom ? entity.sundayMorningFrom|date(\"H:i\") : \"-\" }}
                                </td>
                                <td>    
                                    {{ entity.sundayMorningTo ? entity.sundayMorningTo|date(\"H:i\") : \"-\" }}
                                </td>
                                <td>
                                    {{ entity.sundayAfternoonFrom ? entity.sundayAfternoonFrom|date(\"H:i\") : \"-\" }}
                                </td>
                                <td>    
                                    {{ entity.sundayAfternoonTo ? entity.sundayAfternoonTo|date(\"H:i\") : \"-\" }}
                                </td>
                            </tr>
                        </thead>
                        </table>
                                
                                    
                    </div>
                </div>
            </div>
        </div>


        {{ form_start(edit_form, {'attr': {'class': 'form-horizontal'}} ) }}
        {{ form_errors(edit_form) }}

        <div class=\"row\">

            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>Validation</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        {{ form_widget(edit_form) }}
                        <div class=\"form-actions\">
                            <input type=\"submit\" class=\"btn btn-primary\" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{ form_end(edit_form) }}
    </div>

{% endblock %}", "@EasyjetWorkingSheet/WorkingSheetPattern/validate.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\WorkingSheetBundle\\Resources\\views\\WorkingSheetPattern\\validate.html.twig");
    }
}
