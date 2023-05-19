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

/* @EasyjetEleave/Base/structure.html.twig */
class __TwigTemplate_e042609eb0e855e3bc44e7bb5a40369c8e13b7b0f14d04bc145f8c76935c2262 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'specificCss' => [$this, 'block_specificCss'],
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'generalMenu' => [$this, 'block_generalMenu'],
            'sidebar' => [$this, 'block_sidebar'],
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@EasyjetSwissinsideCore/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/Base/structure.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/Base/structure.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetEleave/Base/structure.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetSwissinsideCore/Base/structure.html.twig", "@EasyjetEleave/Base/structure.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_specificCss($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificCss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificCss"));

        $this->displayParentBlock("specificCss", $context, $blocks);
        echo "
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 10, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 12
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 15
    public function block_generalMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generalMenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generalMenu"));

        // line 16
        echo "    <div id=\"header\">
        ";
        // line 17
        echo twig_call_macro($macros["macros"], "macro_show_general_menu", [$this->extensions['App\Easyjet\SwissinsideCoreBundle\Twig\Extension\GeneralMenuItemsExtension']->generalMenuItems(), "EL"], 17, $context, $this->getSourceContext());
        echo "
        <a id=\"menu-trigger\" href=\"#\"><i class=\"icon-align-justify\"></i></a>
    </div>    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 24
        echo "    <div id=\"sidebar\">
        <ul>
            <li class=\"submenu ";
        // line 26
        if ((array_key_exists("selectedSidebar", $context) && ((((0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 26, $this->source); })()), "CABIN_WISHES")) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 26, $this->source); })()), "RESOURCES_GROUP"))) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 26, $this->source); })()), "OFFICE_WISH"))) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 26, $this->source); })()), "HOLIDAY_GUIDE"))))) {
            echo "open active";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_wishes_index");
        echo "\"><i class=\"icon-sun\"></i> <span>ELEAVE</span> <i class=\"arrow icon-chevron-right\"></i></a>
                <ul>
                ";
        // line 28
        if (( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_CREW") &&  !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_RESSOURCE_GROUP_ADMIN"))) {
            // line 29
            echo "                 
                    ";
            // line 30
            if (((((array_key_exists("myself", $context) && twig_get_attribute($this->env, $this->source, (isset($context["myself"]) || array_key_exists("myself", $context) ? $context["myself"] : (function () { throw new RuntimeError('Variable "myself" does not exist.', 30, $this->source); })()), "isOffice", [], "any", false, false, false, 30)) &&  !twig_get_attribute($this->env, $this->source, (isset($context["myself"]) || array_key_exists("myself", $context) ? $context["myself"] : (function () { throw new RuntimeError('Variable "myself" does not exist.', 30, $this->source); })()), "isThirdParty", [], "any", false, false, false, 30)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_OFFICE_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_LINE_MANAGER"))) {
                // line 31
                echo "                        <li class=\"";
                if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 31, $this->source); })()), "OFFICE_WISH")))) {
                    echo "active current-page";
                }
                echo "\"><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_office_wishes_index");
                echo "\">Office leave(s)</a></li>
                    ";
            }
            // line 33
            echo "                    ";
            if (((array_key_exists("myself", $context) &&  !twig_get_attribute($this->env, $this->source, (isset($context["myself"]) || array_key_exists("myself", $context) ? $context["myself"] : (function () { throw new RuntimeError('Variable "myself" does not exist.', 33, $this->source); })()), "isOffice", [], "any", false, false, false, 33)) || ((array_key_exists("myself", $context) && twig_get_attribute($this->env, $this->source, (isset($context["myself"]) || array_key_exists("myself", $context) ? $context["myself"] : (function () { throw new RuntimeError('Variable "myself" does not exist.', 33, $this->source); })()), "isOffice", [], "any", false, false, false, 33)) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_ADMIN")))) {
                // line 34
                echo "                        <li class=\"";
                if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 34, $this->source); })()), "CABIN_WISHES")))) {
                    echo "active current-page";
                }
                echo "\"><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_wishes_index");
                echo "\">Cabins/Pilots leave(s)</a></li> 
                    ";
            }
            // line 36
            echo "
                ";
        }
        // line 38
        echo "                    <li class=\"submenu ";
        if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 38, $this->source); })()), "HOLIDAY_GUIDE")))) {
            echo "open active";
        }
        echo "\"><a href=\"\"><i class=\"icon-cogs\"></i>  <span>About the rules</span> <i class=\"arrow icon-chevron-right\"></i></a></li>
                        <ul>
                            <li class=\"";
        // line 40
        if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 40, $this->source); })()), "HOLIDAY_GUIDE")))) {
            echo "active current-page";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_holiday_guides", ["type" => "cabin-crew"]);
        echo "\" target = \"_blank\">Holiday Guide for Cabin Crew</a></li>
                            <li class=\"";
        // line 41
        if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 41, $this->source); })()), "HOLIDAY_GUIDE")))) {
            echo "active current-page";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_holiday_guides", ["type" => "flight-crew"]);
        echo "\" target = \"_blank\">Holiday Guide for Flight Crew</a></li>
                        </ul>
                    </li>
                    <li class=\"separation_menu ";
        // line 44
        if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 44, $this->source); })()), "DL_AVAILIBILITY")))) {
            echo "active current-page";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_dl_availibility", ["type" => "GVA_FA"]);
        echo "\">GVA FA availibility</a></li>
                    <li class=\"";
        // line 45
        if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 45, $this->source); })()), "DL_AVAILIBILITY")))) {
            echo "active current-page";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_dl_availibility", ["type" => "GVA_PU"]);
        echo "\">GVA PU availibility</a></li>
                    <li class=\"";
        // line 46
        if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 46, $this->source); })()), "DL_AVAILIBILITY")))) {
            echo "active current-page";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_dl_availibility", ["type" => "GVA_FO"]);
        echo "\">GVA FO availibility</a></li>
                    <li class=\"";
        // line 47
        if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 47, $this->source); })()), "DL_AVAILIBILITY")))) {
            echo "active current-page";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_dl_availibility", ["type" => "GVA_CP"]);
        echo "\">GVA CP availibility</a></li>
                    <li class=\"separation_menu ";
        // line 48
        if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 48, $this->source); })()), "DL_AVAILIBILITY")))) {
            echo "active current-page";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_dl_availibility", ["type" => "BSL_FA"]);
        echo "\">BSL FA availibility</a></li>
                    <li class=\"";
        // line 49
        if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 49, $this->source); })()), "DL_AVAILIBILITY")))) {
            echo "active current-page";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_dl_availibility", ["type" => "BSL_PU"]);
        echo "\">BSL PU availibility</a></li>
                    <li class=\"";
        // line 50
        if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 50, $this->source); })()), "DL_AVAILIBILITY")))) {
            echo "active current-page";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_dl_availibility", ["type" => "BSL_FO"]);
        echo "\">BSL FO availibility</a></li>
                    <li class=\"";
        // line 51
        if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 51, $this->source); })()), "DL_AVAILIBILITY")))) {
            echo "active current-page";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_dl_availibility", ["type" => "BSL_CP"]);
        echo "\">BSL CP availibility</a></li>
                    
                </ul>            
            </li>
         
            ";
        // line 56
        if ((((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_CREW_ADMIN_+_LM")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_CREW_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_LINE_MANAGER")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_OFFICE_ADMIN_+_LM"))) {
            // line 57
            echo "                <li class=\"";
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 57, $this->source); })()), "REMAINING_DAYS")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_admin_remaining_days");
            echo "\"><i class=\"icon-download\"></i>Update remain. days</a></li>
                <li class=\"";
            // line 58
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 58, $this->source); })()), "MULTI_LEAVE_VALIDATION")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_admin_multi_leave_validation");
            echo "\"><i class=\"icon-download\"></i>Bulk leave validation</a></li>
            ";
        }
        // line 60
        echo "            
            ";
        // line 61
        if ((((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_CREW_ADMIN_+_LM") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_CREW_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_LINE_MANAGER")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_OFFICE_ADMIN"))) {
            echo "     
                <li class=\"submenu ";
            // line 62
            if ((array_key_exists("selectedSidebar", $context) && (((((0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 62, $this->source); })()), "SHOW_EMAILS")) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 62, $this->source); })()), "ADMIN_RULES"))) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 62, $this->source); })()), "ADMIN_REFUSE"))) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 62, $this->source); })()), "ADMIN_REPORTS"))) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 62, $this->source); })()), "ADMIN_HELP_FILES"))))) {
                echo "open active";
            }
            echo "\"><a href=\"\"><i class=\"icon-cogs\"></i> <span>Administration</span> <i class=\"arrow icon-chevron-right\"></i></a>
                    <ul>
                        ";
            // line 64
            if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_LINE_MANAGER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_OFFICE_ADMIN"))) {
                echo "     
                            <li class=\"";
                // line 65
                if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 65, $this->source); })()), "ADMIN_REPORTS")))) {
                    echo "active current-page";
                }
                echo "\"><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_admin_reports");
                echo "\">Reports</a></li>
                        ";
            }
            // line 66
            echo " 
                        ";
            // line 67
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_CREW_ADMIN_+_LM")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_CREW_ADMIN"))) {
                echo "    
                            <li class=\"";
                // line 68
                if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 68, $this->source); })()), "SHOW_EMAILS")))) {
                    echo "active current-page";
                }
                echo "\"><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_admin_emails");
                echo "\">Emails</a></li>
                        ";
            }
            // line 70
            echo "                        ";
            if (((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_OFFICE_ADMIN")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_CREW_ADMIN_+_LM")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_CREW_ADMIN"))) {
                echo "         
                            <li class=\"";
                // line 71
                if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 71, $this->source); })()), "ADMIN_REFUSE")))) {
                    echo "active current-page";
                }
                echo "\"><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_admin_refuses");
                echo "\">Refuse reason</a></li>
                            <li class=\"";
                // line 72
                if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 72, $this->source); })()), "ADMIN_RULES")))) {
                    echo "active current-page";
                }
                echo "\"><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_admin_rules");
                echo "\">Rules</a></li>
                        ";
            }
            // line 74
            echo "                        ";
            if ((($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_ADMIN") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_CREW_ADMIN_+_LM")) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_CREW_ADMIN"))) {
                echo "     
                            <li class=\"separation_menu ";
                // line 75
                if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 75, $this->source); })()), "ADMIN_HELP_FILES")))) {
                    echo "active current-page";
                }
                echo "\"><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_admin_help_files");
                echo "\">Visualization files upload</a></li>
                        ";
            }
            // line 76
            echo "    
                    </ul>
                </li>
            ";
        }
        // line 79
        echo "    
        </ul>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        echo "    \t
<div id=\"content\">
    Bienvenue dans la gestion des heures de travail
</div>            
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetEleave/Base/structure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  428 => 85,  414 => 79,  408 => 76,  399 => 75,  394 => 74,  385 => 72,  377 => 71,  372 => 70,  363 => 68,  359 => 67,  356 => 66,  347 => 65,  343 => 64,  336 => 62,  332 => 61,  329 => 60,  320 => 58,  311 => 57,  309 => 56,  297 => 51,  289 => 50,  281 => 49,  273 => 48,  265 => 47,  257 => 46,  249 => 45,  241 => 44,  231 => 41,  223 => 40,  215 => 38,  211 => 36,  201 => 34,  198 => 33,  188 => 31,  186 => 30,  183 => 29,  181 => 28,  172 => 26,  168 => 24,  158 => 23,  144 => 17,  141 => 16,  131 => 15,  118 => 12,  108 => 11,  88 => 10,  66 => 4,  55 => 1,  53 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@EasyjetSwissinsideCore/Base/structure.html.twig\" %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block specificCss %}{{ parent() }}
    
{% endblock %}



{% block title %} {{ title }}{% endblock %}
{% block header %}
    {{ parent() }}
{% endblock header %}

{% block generalMenu %}
    <div id=\"header\">
        {{ macros.show_general_menu(generalMenuItems(), 'EL') }}
        <a id=\"menu-trigger\" href=\"#\"><i class=\"icon-align-justify\"></i></a>
    </div>    
{% endblock generalMenu %}


{% block sidebar %}
    <div id=\"sidebar\">
        <ul>
            <li class=\"submenu {% if selectedSidebar is defined and (selectedSidebar == \"CABIN_WISHES\" or selectedSidebar ==\"RESOURCES_GROUP\" or selectedSidebar ==\"OFFICE_WISH\" or selectedSidebar == \"HOLIDAY_GUIDE\") %}open active{% endif %}\"><a href=\"{{ url('eleave_wishes_index') }}\"><i class=\"icon-sun\"></i> <span>ELEAVE</span> <i class=\"arrow icon-chevron-right\"></i></a>
                <ul>
                {% if not is_granted('ROLE_ELEAVE_CREW') and not is_granted('ROLE_ELEAVE_RESSOURCE_GROUP_ADMIN') %}
                 
                    {% if (myself is defined and myself.isOffice and  not myself.isThirdParty) or is_granted('ROLE_ELEAVE_OFFICE_ADMIN') or is_granted('ROLE_ELEAVE_LINE_MANAGER')  %}
                        <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"OFFICE_WISH\" %}active current-page{% endif %}\"><a href=\"{{ url('eleave_office_wishes_index') }}\">Office leave(s)</a></li>
                    {% endif %}
                    {% if myself is defined and not myself.isOffice or ((myself is defined and myself.isOffice and is_granted('ROLE_ELEAVE_ADMIN')))  %}
                        <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"CABIN_WISHES\" %}active current-page{% endif %}\"><a href=\"{{ url('eleave_wishes_index') }}\">Cabins/Pilots leave(s)</a></li> 
                    {% endif %}

                {% endif %}
                    <li class=\"submenu {% if selectedSidebar is defined and selectedSidebar == \"HOLIDAY_GUIDE\" %}open active{% endif %}\"><a href=\"\"><i class=\"icon-cogs\"></i>  <span>About the rules</span> <i class=\"arrow icon-chevron-right\"></i></a></li>
                        <ul>
                            <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"HOLIDAY_GUIDE\" %}active current-page{% endif %}\"><a href=\"{{ url('eleave_holiday_guides', {'type' : 'cabin-crew'}) }}\" target = \"_blank\">Holiday Guide for Cabin Crew</a></li>
                            <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"HOLIDAY_GUIDE\" %}active current-page{% endif %}\"><a href=\"{{ url('eleave_holiday_guides', {'type' : 'flight-crew'}) }}\" target = \"_blank\">Holiday Guide for Flight Crew</a></li>
                        </ul>
                    </li>
                    <li class=\"separation_menu {% if selectedSidebar is defined and selectedSidebar == \"DL_AVAILIBILITY\" %}active current-page{% endif %}\"><a href=\"{{ url('eleave_dl_availibility', {'type' : 'GVA_FA'}) }}\">GVA FA availibility</a></li>
                    <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"DL_AVAILIBILITY\" %}active current-page{% endif %}\"><a href=\"{{ url('eleave_dl_availibility', {'type' : 'GVA_PU'}) }}\">GVA PU availibility</a></li>
                    <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"DL_AVAILIBILITY\" %}active current-page{% endif %}\"><a href=\"{{ url('eleave_dl_availibility', {'type' : 'GVA_FO'}) }}\">GVA FO availibility</a></li>
                    <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"DL_AVAILIBILITY\" %}active current-page{% endif %}\"><a href=\"{{ url('eleave_dl_availibility', {'type' : 'GVA_CP'}) }}\">GVA CP availibility</a></li>
                    <li class=\"separation_menu {% if selectedSidebar is defined and selectedSidebar == \"DL_AVAILIBILITY\" %}active current-page{% endif %}\"><a href=\"{{ url('eleave_dl_availibility', {'type' : 'BSL_FA'}) }}\">BSL FA availibility</a></li>
                    <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"DL_AVAILIBILITY\" %}active current-page{% endif %}\"><a href=\"{{ url('eleave_dl_availibility', {'type' : 'BSL_PU'}) }}\">BSL PU availibility</a></li>
                    <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"DL_AVAILIBILITY\" %}active current-page{% endif %}\"><a href=\"{{ url('eleave_dl_availibility', {'type' : 'BSL_FO'}) }}\">BSL FO availibility</a></li>
                    <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"DL_AVAILIBILITY\" %}active current-page{% endif %}\"><a href=\"{{ url('eleave_dl_availibility', {'type' : 'BSL_CP'}) }}\">BSL CP availibility</a></li>
                    
                </ul>            
            </li>
         
            {% if is_granted('ROLE_ELEAVE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_CREW_ADMIN') or is_granted('ROLE_ELEAVE_LINE_MANAGER') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN_+_LM') %}
                <li class=\"{% if selectedSidebar is defined and (selectedSidebar == \"REMAINING_DAYS\") %}active current-page{% endif %}\"><a href=\"{{url('eleave_admin_remaining_days')}}\"><i class=\"icon-download\"></i>Update remain. days</a></li>
                <li class=\"{% if selectedSidebar is defined and (selectedSidebar == \"MULTI_LEAVE_VALIDATION\") %}active current-page{% endif %}\"><a href=\"{{url('eleave_admin_multi_leave_validation')}}\"><i class=\"icon-download\"></i>Bulk leave validation</a></li>
            {% endif %}
            
            {% if  is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_CREW_ADMIN') or is_granted('ROLE_ELEAVE_ADMIN') or is_granted('ROLE_ELEAVE_LINE_MANAGER') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN') %}     
                <li class=\"submenu {% if selectedSidebar is defined and (  selectedSidebar == \"SHOW_EMAILS\" or selectedSidebar == \"ADMIN_RULES\" or selectedSidebar == \"ADMIN_REFUSE\" or  selectedSidebar == \"ADMIN_REPORTS\" or selectedSidebar == \"ADMIN_HELP_FILES\") %}open active{% endif %}\"><a href=\"\"><i class=\"icon-cogs\"></i> <span>Administration</span> <i class=\"arrow icon-chevron-right\"></i></a>
                    <ul>
                        {% if is_granted('ROLE_ELEAVE_LINE_MANAGER') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN') %}     
                            <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"ADMIN_REPORTS\" %}active current-page{% endif %}\"><a href=\"{{ url('eleave_admin_reports') }}\">Reports</a></li>
                        {% endif %} 
                        {% if is_granted('ROLE_ELEAVE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_CREW_ADMIN') %}    
                            <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"SHOW_EMAILS\" %}active current-page{% endif %}\"><a href=\"{{ url('eleave_admin_emails') }}\">Emails</a></li>
                        {% endif %}
                        {% if is_granted('ROLE_ELEAVE_ADMIN') or is_granted('ROLE_ELEAVE_OFFICE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_CREW_ADMIN') %}         
                            <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"ADMIN_REFUSE\" %}active current-page{% endif %}\"><a href=\"{{ url('eleave_admin_refuses') }}\">Refuse reason</a></li>
                            <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"ADMIN_RULES\" %}active current-page{% endif %}\"><a href=\"{{ url('eleave_admin_rules') }}\">Rules</a></li>
                        {% endif %}
                        {% if is_granted('ROLE_ELEAVE_ADMIN') or is_granted('ROLE_ELEAVE_CREW_ADMIN_+_LM') or is_granted('ROLE_ELEAVE_CREW_ADMIN') %}     
                            <li class=\"separation_menu {% if selectedSidebar is defined and selectedSidebar == \"ADMIN_HELP_FILES\" %}active current-page{% endif %}\"><a href=\"{{ url('eleave_admin_help_files') }}\">Visualization files upload</a></li>
                        {% endif %}    
                    </ul>
                </li>
            {% endif %}    
        </ul>
    </div>

{% endblock sidebar %}

{% block container %}    \t
<div id=\"content\">
    Bienvenue dans la gestion des heures de travail
</div>            
{% endblock container %}", "@EasyjetEleave/Base/structure.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EleaveBundle\\Resources\\views\\Base\\structure.html.twig");
    }
}
