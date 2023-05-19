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

/* @EasyjetOtp/Base/structure.html.twig */
class __TwigTemplate_24fb7374f03e394124a888a32211aeb149d9b6352bde9f4ffe61256e1a667e57 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Base/structure.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Base/structure.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetOtp/Base/structure.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetSwissinsideCore/Base/structure.html.twig", "@EasyjetOtp/Base/structure.html.twig", 1);
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
        echo twig_call_macro($macros["macros"], "macro_show_general_menu", [$this->extensions['App\Easyjet\SwissinsideCoreBundle\Twig\Extension\GeneralMenuItemsExtension']->generalMenuItems(), "OTP"], 17, $context, $this->getSourceContext());
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
        if ((array_key_exists("selectedSidebar", $context) && ((((0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 26, $this->source); })()), "OTP_REQUEST")) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 26, $this->source); })()), "OTP"))) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 26, $this->source); })()), "IMPORT_OTP"))) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 26, $this->source); })()), "EXPORT_OTP"))))) {
            echo "open active";
        }
        echo "\"><a href=\"#\"><i class=\"icon-briefcase\"></i> <span>Claims</span> <i class=\"arrow icon-chevron-right\"></i></a>
                <ul>
                    ";
        // line 28
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLAIMS_ADMIN")) {
            echo " 
                        <li class=\"";
            // line 29
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 29, $this->source); })()), "OTP")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("otp_index");
            echo "\">Detailed view</a></li>
                    ";
        }
        // line 31
        echo "                    
                    <li class=\"";
        // line 32
        if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 32, $this->source); })()), "OTP_REQUEST")))) {
            echo "active current-page";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("otp_request_index");
        echo "\">Disruptions / Sectors updates</a></li>
                    
                    ";
        // line 34
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLAIMS_ADMIN")) {
            echo " 
                        <li class=\"";
            // line 35
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 35, $this->source); })()), "EXPORT_OTP")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("otp_export_index");
            echo "\">Export claims</a></li>
                    ";
        }
        // line 37
        echo "                </ul>         
            </li>

            ";
        // line 40
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLAIMS_ADMIN")) {
            echo "            
                <li class=\"submenu ";
            // line 41
            if ((array_key_exists("selectedSidebar", $context) && (((((((0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 41, $this->source); })()), "ADMIN_COMPENSATION_GRADES")) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 41, $this->source); })()), "ADMIN_DROP_BATCH"))) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 41, $this->source); })()), "ADMIN_BATCHES_MANAGEMENT"))) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 41, $this->source); })()), "ADMIN_LOGS"))) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 41, $this->source); })()), "ADMIN_DISRUPTION"))) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 41, $this->source); })()), "ADMIN_FACTORISATIONS"))) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 41, $this->source); })()), "ADMIN_SECTOR_PAY"))))) {
                echo "open active";
            }
            echo "\"><a href=\"#\"><i class=\"icon-cogs\"></i> <span>Administration</span> <i class=\"arrow icon-chevron-right\"></i></a>
                    <ul>
                        <li class=\"";
            // line 43
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 43, $this->source); })()), "ADMIN_DISRUPTION")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_otp_disruptions_index");
            echo "\">Disruptions</a></li>
                        <li class=\"";
            // line 44
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 44, $this->source); })()), "ADMIN_FACTORISATIONS")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_otp_factorisations_index");
            echo "\">Factorisations</a></li>
                        <li class=\"";
            // line 45
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 45, $this->source); })()), "ADMIN_SECTOR_PAY")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_otp_sector_pay_index");
            echo "\">Sector pay</a></li>
                        <li class=\"";
            // line 46
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 46, $this->source); })()), "ADMIN_COMPENSATION_GRADES")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_otp_compensation_grades_index");
            echo "\">Compensation grades</a></li>
                        <li class=\"";
            // line 47
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 47, $this->source); })()), "ADMIN_BATCHES_MANAGEMENT")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_otp_batches_index");
            echo "\">Batches management</a></li>
                        <li class=\"";
            // line 48
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 48, $this->source); })()), "ADMIN_LOGS")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_otp_logs_index");
            echo "\">Logs</a></li>
                        
                    </ul>
                </li>
            ";
        }
        // line 53
        echo "            
        </ul>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 59
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
        return "@EasyjetOtp/Base/structure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  299 => 59,  285 => 53,  273 => 48,  265 => 47,  257 => 46,  249 => 45,  241 => 44,  233 => 43,  226 => 41,  222 => 40,  217 => 37,  208 => 35,  204 => 34,  195 => 32,  192 => 31,  183 => 29,  179 => 28,  172 => 26,  168 => 24,  158 => 23,  144 => 17,  141 => 16,  131 => 15,  118 => 12,  108 => 11,  88 => 10,  66 => 4,  55 => 1,  53 => 2,  40 => 1,);
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
        {{ macros.show_general_menu(generalMenuItems(), 'OTP') }}
        <a id=\"menu-trigger\" href=\"#\"><i class=\"icon-align-justify\"></i></a>
    </div>    
{% endblock generalMenu %}


{% block sidebar %}
    <div id=\"sidebar\">
        <ul>
            <li class=\"submenu {% if selectedSidebar is defined and (selectedSidebar == \"OTP_REQUEST\" or selectedSidebar == \"OTP\" or selectedSidebar == \"IMPORT_OTP\" or selectedSidebar == \"EXPORT_OTP\") %}open active{% endif %}\"><a href=\"#\"><i class=\"icon-briefcase\"></i> <span>Claims</span> <i class=\"arrow icon-chevron-right\"></i></a>
                <ul>
                    {% if is_granted('ROLE_CLAIMS_ADMIN') %} 
                        <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"OTP\" %}active current-page{% endif %}\"><a href=\"{{ url('otp_index') }}\">Detailed view</a></li>
                    {% endif %}
                    
                    <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"OTP_REQUEST\" %}active current-page{% endif %}\"><a href=\"{{ url('otp_request_index') }}\">Disruptions / Sectors updates</a></li>
                    
                    {% if  is_granted('ROLE_CLAIMS_ADMIN') %} 
                        <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"EXPORT_OTP\" %}active current-page{% endif %}\"><a href=\"{{ url('otp_export_index') }}\">Export claims</a></li>
                    {% endif %}
                </ul>         
            </li>

            {% if  is_granted('ROLE_CLAIMS_ADMIN') %}            
                <li class=\"submenu {% if selectedSidebar is defined and (selectedSidebar == \"ADMIN_COMPENSATION_GRADES\" or selectedSidebar == \"ADMIN_DROP_BATCH\" or selectedSidebar == \"ADMIN_BATCHES_MANAGEMENT\"  or selectedSidebar == \"ADMIN_LOGS\" or selectedSidebar == \"ADMIN_DISRUPTION\" or   selectedSidebar == \"ADMIN_FACTORISATIONS\" or selectedSidebar == \"ADMIN_SECTOR_PAY\") %}open active{% endif %}\"><a href=\"#\"><i class=\"icon-cogs\"></i> <span>Administration</span> <i class=\"arrow icon-chevron-right\"></i></a>
                    <ul>
                        <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"ADMIN_DISRUPTION\" %}active current-page{% endif %}\"><a href=\"{{ url('admin_otp_disruptions_index') }}\">Disruptions</a></li>
                        <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"ADMIN_FACTORISATIONS\" %}active current-page{% endif %}\"><a href=\"{{ url('admin_otp_factorisations_index') }}\">Factorisations</a></li>
                        <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"ADMIN_SECTOR_PAY\" %}active current-page{% endif %}\"><a href=\"{{ url('admin_otp_sector_pay_index') }}\">Sector pay</a></li>
                        <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"ADMIN_COMPENSATION_GRADES\" %}active current-page{% endif %}\"><a href=\"{{ url('admin_otp_compensation_grades_index') }}\">Compensation grades</a></li>
                        <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"ADMIN_BATCHES_MANAGEMENT\" %}active current-page{% endif %}\"><a href=\"{{ url('admin_otp_batches_index') }}\">Batches management</a></li>
                        <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"ADMIN_LOGS\" %}active current-page{% endif %}\"><a href=\"{{ url('admin_otp_logs_index') }}\">Logs</a></li>
                        
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
{% endblock container %}", "@EasyjetOtp/Base/structure.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\OtpBundle\\Resources\\views\\Base\\structure.html.twig");
    }
}
