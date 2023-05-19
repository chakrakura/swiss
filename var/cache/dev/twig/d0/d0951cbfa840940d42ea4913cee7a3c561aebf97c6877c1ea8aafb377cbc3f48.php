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

/* @EasyjetWorkingSheet/WorkingSheetPattern/show.html.twig */
class __TwigTemplate_ce000425743c634eb3ac1e2250b4426140dccd859843842f32eb85e25d100865 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/WorkingSheetPattern/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/WorkingSheetPattern/show.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetWorkingSheet/WorkingSheetPattern/show.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetWorkingSheet/Base/structure.html.twig", "@EasyjetWorkingSheet/WorkingSheetPattern/show.html.twig", 1);
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
            <h1 id=\"titre_help\">Show your working sheet pattern</h1>
            <div id=\"description_help\">Here you see your working sheet pattern. Just fill the form in order to create your entry.</div>
        </div>
        
        ";
        // line 11
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 11, $this->source); })()), "status", [], "any", false, false, false, 11), "PENDING"))) {
            // line 12
            echo "        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"alert alert-info\">
                    <strong>Notice</strong> This pattern has already been reviewed by your line manager. If you want to change your working pattern, please create a new one by clicking the \"New pattern button\". It will be sent to your line manager who will check its compliance with easyJet policies.
                    <p><a href=\"";
            // line 16
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("working_sheet_pattern_new");
            echo "\" class=\"btn btn-primary\">New pattern</a></p>
                </div>
            </div>
        </div>
        ";
        }
        // line 21
        echo "                
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 24
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 24, $context, $this->getSourceContext());
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
                        <h5>Pattern details</h5>
                    </div>
                    <div class=\"widget-content\">
                        <div class=\"\">
                            <label class=\"control-label\">User</label>
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">";
        // line 41
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 41, $this->source); })()), "patternForUser", [], "any", false, false, false, 41), "html", null, true);
        echo "</span> 
                            </div>
                        </div>
                        <div class=\"\">
                            <label class=\"control-label\">Status ";
        // line 45
        if (twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 45, $this->source); })()), "statusChangedByUser", [], "any", false, false, false, 45)) {
            echo " (last changed by ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 45, $this->source); })()), "statusChangedByUser", [], "any", false, false, false, 45), "html", null, true);
            echo ") ";
        }
        echo "</label>
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">
                                    ";
        // line 48
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 48, $this->source); })()), "status", [], "any", false, false, false, 48), "PENDING"))) {
            // line 49
            echo "                                        <span class=\"badge badge-info\">Waiting approval</span>
                                    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 50
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 50, $this->source); })()), "status", [], "any", false, false, false, 50), "VALIDATED"))) {
            // line 51
            echo "                                        <span class=\"badge badge-success\">Validated</span>
                                    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 52
(isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 52, $this->source); })()), "status", [], "any", false, false, false, 52), "REFUSED"))) {
            // line 53
            echo "                                        <span class=\"badge badge-danger\">Refused</span>
                                    ";
        }
        // line 55
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
        // line 97
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 97, $this->source); })()), "mondayMorningFrom", [], "any", false, false, false, 97)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 97, $this->source); })()), "mondayMorningFrom", [], "any", false, false, false, 97), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 100
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 100, $this->source); })()), "mondayMorningTo", [], "any", false, false, false, 100)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 100, $this->source); })()), "mondayMorningTo", [], "any", false, false, false, 100), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>
                                    ";
        // line 103
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 103, $this->source); })()), "mondayAfternoonFrom", [], "any", false, false, false, 103)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 103, $this->source); })()), "mondayAfternoonFrom", [], "any", false, false, false, 103), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 106
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 106, $this->source); })()), "mondayAfternoonTo", [], "any", false, false, false, 106)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 106, $this->source); })()), "mondayAfternoonTo", [], "any", false, false, false, 106), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>Tuesday</td>
                                <td>
                                    ";
        // line 112
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 112, $this->source); })()), "tuesdayMorningFrom", [], "any", false, false, false, 112)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 112, $this->source); })()), "tuesdayMorningFrom", [], "any", false, false, false, 112), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 115
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 115, $this->source); })()), "tuesdayMorningTo", [], "any", false, false, false, 115)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 115, $this->source); })()), "tuesdayMorningTo", [], "any", false, false, false, 115), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>
                                    ";
        // line 118
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 118, $this->source); })()), "tuesdayAfternoonFrom", [], "any", false, false, false, 118)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 118, $this->source); })()), "tuesdayAfternoonFrom", [], "any", false, false, false, 118), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 121
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 121, $this->source); })()), "tuesdayAfternoonTo", [], "any", false, false, false, 121)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 121, $this->source); })()), "tuesdayAfternoonTo", [], "any", false, false, false, 121), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>Wednesday</td>
                                <td>
                                    ";
        // line 127
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 127, $this->source); })()), "wednesdayMorningFrom", [], "any", false, false, false, 127)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 127, $this->source); })()), "wednesdayMorningFrom", [], "any", false, false, false, 127), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 130
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 130, $this->source); })()), "wednesdayMorningTo", [], "any", false, false, false, 130)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 130, $this->source); })()), "wednesdayMorningTo", [], "any", false, false, false, 130), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>
                                    ";
        // line 133
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 133, $this->source); })()), "wednesdayAfternoonFrom", [], "any", false, false, false, 133)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 133, $this->source); })()), "wednesdayAfternoonFrom", [], "any", false, false, false, 133), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 136
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 136, $this->source); })()), "wednesdayAfternoonTo", [], "any", false, false, false, 136)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 136, $this->source); })()), "wednesdayAfternoonTo", [], "any", false, false, false, 136), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>Thursday</td>
                                <td>
                                    ";
        // line 142
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 142, $this->source); })()), "thursdayMorningFrom", [], "any", false, false, false, 142)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 142, $this->source); })()), "thursdayMorningFrom", [], "any", false, false, false, 142), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 145
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 145, $this->source); })()), "thursdayMorningTo", [], "any", false, false, false, 145)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 145, $this->source); })()), "thursdayMorningTo", [], "any", false, false, false, 145), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>
                                    ";
        // line 148
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 148, $this->source); })()), "thursdayAfternoonFrom", [], "any", false, false, false, 148)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 148, $this->source); })()), "thursdayAfternoonFrom", [], "any", false, false, false, 148), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 151
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 151, $this->source); })()), "thursdayAfternoonTo", [], "any", false, false, false, 151)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 151, $this->source); })()), "thursdayAfternoonTo", [], "any", false, false, false, 151), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>Friday</td>
                                <td>
                                    ";
        // line 157
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 157, $this->source); })()), "fridayMorningFrom", [], "any", false, false, false, 157)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 157, $this->source); })()), "fridayMorningFrom", [], "any", false, false, false, 157), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 160
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 160, $this->source); })()), "fridayMorningTo", [], "any", false, false, false, 160)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 160, $this->source); })()), "fridayMorningTo", [], "any", false, false, false, 160), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>
                                    ";
        // line 163
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 163, $this->source); })()), "fridayAfternoonFrom", [], "any", false, false, false, 163)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 163, $this->source); })()), "fridayAfternoonFrom", [], "any", false, false, false, 163), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 166
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 166, $this->source); })()), "fridayAfternoonTo", [], "any", false, false, false, 166)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 166, $this->source); })()), "fridayAfternoonTo", [], "any", false, false, false, 166), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>Saturday</td>
                                <td>
                                    ";
        // line 172
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 172, $this->source); })()), "saturdayMorningFrom", [], "any", false, false, false, 172)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 172, $this->source); })()), "saturdayMorningFrom", [], "any", false, false, false, 172), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 175
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 175, $this->source); })()), "saturdayMorningTo", [], "any", false, false, false, 175)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 175, $this->source); })()), "saturdayMorningTo", [], "any", false, false, false, 175), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>
                                    ";
        // line 178
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 178, $this->source); })()), "saturdayAfternoonFrom", [], "any", false, false, false, 178)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 178, $this->source); })()), "saturdayAfternoonFrom", [], "any", false, false, false, 178), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 181
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 181, $this->source); })()), "saturdayAfternoonTo", [], "any", false, false, false, 181)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 181, $this->source); })()), "saturdayAfternoonTo", [], "any", false, false, false, 181), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                            </tr>
                            <tr>
                                <td>Sunday</td>
                                <td>
                                    ";
        // line 187
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 187, $this->source); })()), "sundayMorningFrom", [], "any", false, false, false, 187)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 187, $this->source); })()), "sundayMorningFrom", [], "any", false, false, false, 187), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 190
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 190, $this->source); })()), "sundayMorningTo", [], "any", false, false, false, 190)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 190, $this->source); })()), "sundayMorningTo", [], "any", false, false, false, 190), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>
                                    ";
        // line 193
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 193, $this->source); })()), "sundayAfternoonFrom", [], "any", false, false, false, 193)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 193, $this->source); })()), "sundayAfternoonFrom", [], "any", false, false, false, 193), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                                <td>    
                                    ";
        // line 196
        ((twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 196, $this->source); })()), "sundayAfternoonTo", [], "any", false, false, false, 196)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["entity"]) || array_key_exists("entity", $context) ? $context["entity"] : (function () { throw new RuntimeError('Variable "entity" does not exist.', 196, $this->source); })()), "sundayAfternoonTo", [], "any", false, false, false, 196), "H:i"), "html", null, true))) : (print ("-")));
        echo "
                                </td>
                            </tr>
                        </thead>
                        </table>

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
        return "@EasyjetWorkingSheet/WorkingSheetPattern/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  377 => 196,  371 => 193,  365 => 190,  359 => 187,  350 => 181,  344 => 178,  338 => 175,  332 => 172,  323 => 166,  317 => 163,  311 => 160,  305 => 157,  296 => 151,  290 => 148,  284 => 145,  278 => 142,  269 => 136,  263 => 133,  257 => 130,  251 => 127,  242 => 121,  236 => 118,  230 => 115,  224 => 112,  215 => 106,  209 => 103,  203 => 100,  197 => 97,  153 => 55,  149 => 53,  147 => 52,  144 => 51,  142 => 50,  139 => 49,  137 => 48,  127 => 45,  120 => 41,  100 => 24,  95 => 21,  87 => 16,  81 => 12,  79 => 11,  71 => 5,  61 => 3,  50 => 1,  48 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetWorkingSheet/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}
{% block container -%}

    <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">Show your working sheet pattern</h1>
            <div id=\"description_help\">Here you see your working sheet pattern. Just fill the form in order to create your entry.</div>
        </div>
        
        {% if entity.status != \"PENDING\" %}
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"alert alert-info\">
                    <strong>Notice</strong> This pattern has already been reviewed by your line manager. If you want to change your working pattern, please create a new one by clicking the \"New pattern button\". It will be sent to your line manager who will check its compliance with easyJet policies.
                    <p><a href=\"{{ url(\"working_sheet_pattern_new\") }}\" class=\"btn btn-primary\">New pattern</a></p>
                </div>
            </div>
        </div>
        {% endif %}
                
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
                        <h5>Pattern details</h5>
                    </div>
                    <div class=\"widget-content\">
                        <div class=\"\">
                            <label class=\"control-label\">User</label>
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">{{ entity.patternForUser }}</span> 
                            </div>
                        </div>
                        <div class=\"\">
                            <label class=\"control-label\">Status {% if entity.statusChangedByUser %} (last changed by {{ entity.statusChangedByUser }}) {% endif %}</label>
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">
                                    {% if entity.status == \"PENDING\" %}
                                        <span class=\"badge badge-info\">Waiting approval</span>
                                    {% elseif entity.status == \"VALIDATED\" %}
                                        <span class=\"badge badge-success\">Validated</span>
                                    {% elseif entity.status == \"REFUSED\" %}
                                        <span class=\"badge badge-danger\">Refused</span>
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
    </div>

{% endblock %}", "@EasyjetWorkingSheet/WorkingSheetPattern/show.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\WorkingSheetBundle\\Resources\\views\\WorkingSheetPattern\\show.html.twig");
    }
}
