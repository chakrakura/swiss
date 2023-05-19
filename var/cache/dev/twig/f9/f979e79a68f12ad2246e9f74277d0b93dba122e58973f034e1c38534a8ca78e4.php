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

/* @EasyjetHris/Base/structure.html.twig */
class __TwigTemplate_85f59e874e2328c97a789f1189eb013c103d2f5554d925612b10946a58a51cbf extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/Base/structure.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/Base/structure.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetHris/Base/structure.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetSwissinsideCore/Base/structure.html.twig", "@EasyjetHris/Base/structure.html.twig", 1);
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

        echo "Synchronisations between HR systems";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 6
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_generalMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generalMenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generalMenu"));

        // line 10
        echo "    <div id=\"header\">
        ";
        // line 11
        echo twig_call_macro($macros["macros"], "macro_show_general_menu", [$this->extensions['App\Easyjet\SwissinsideCoreBundle\Twig\Extension\GeneralMenuItemsExtension']->generalMenuItems(), "HRIS"], 11, $context, $this->getSourceContext());
        echo "

        <a id=\"menu-trigger\" href=\"#\"><i class=\"icon-align-justify\"></i></a>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 18
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 19
        echo "    <div id=\"sidebar\">
        <ul>
            ";
        // line 21
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_HRIS_ADMIN")) {
            // line 22
            echo "            <li class=\"submenu ";
            if ((array_key_exists("selectedSidebar", $context) && (((((0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 22, $this->source); })()), "SHOW_PICOFS_LOGS")) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 22, $this->source); })()), "SHOW_USERS_IMPORT_LOGS"))) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 22, $this->source); })()), "SHOW_EJINT096_DATA_CHECK_LOGS"))) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 22, $this->source); })()), "SHOW_EJINT096_LOGS"))) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 22, $this->source); })()), "SHOW_EJINT097_LOGS"))))) {
                echo "open active";
            }
            echo "\"><a href=\"#\"><i class=\"icon-time\"></i> <span>Logs</span> <i class=\"arrow icon-chevron-right\"></i></a>
                <ul>
                    <li class=\"";
            // line 24
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 24, $this->source); })()), "SHOW_EJINT096_LOGS")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ejint096_logs_index");
            echo "\">EJINT096 - SGWI -> ProConcept</a></li>
                </ul>
                <ul>
                    <li class=\"";
            // line 27
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 27, $this->source); })()), "SHOW_EJINT096_DATA_CHECK_LOGS")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("data_analyzer_logs_index");
            echo "\">Data analyzer</a></li>
                </ul>
                <ul>
                    <li class=\"";
            // line 30
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 30, $this->source); })()), "SHOW_EJINT097_LOGS")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ejint097_logs_index");
            echo "\">EJINT097 - ProConcept -> SafeGuard</a></li>
                </ul>
                <ul>
                    <li class=\"";
            // line 33
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 33, $this->source); })()), "SHOW_USERS_IMPORT_LOGS")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("hris_users_import_logs_index");
            echo "\">Users WD -> Swissinside</a></li>
                </ul>
                
            </li>
            <li class=\"submenu ";
            // line 37
            if ((array_key_exists("selectedSidebar", $context) && (((((0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 37, $this->source); })()), "SHOW_EJINT096_PAY_ELEMENTS")) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 37, $this->source); })()), "SHOW_EJINT096_DEMOGRAPHIC_DATA"))) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 37, $this->source); })()), "SHOW_PROCESSING_CALENDAR"))) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 37, $this->source); })()), "SHOW_COSMIC_RADIATION"))) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 37, $this->source); })()), "SHOW_CREW_USER"))))) {
                echo "open active";
            }
            echo "\"><a href=\"#\"><i class=\"icon-time\"></i> <span>Administration</span> <i class=\"arrow icon-chevron-right\"></i></a>
                <ul>
                    <li class=\"";
            // line 39
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 39, $this->source); })()), "SHOW_EJINT096_DEMOGRAPHIC_DATA")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ejint096_demographic_data_index");
            echo "\">Demographic data</a></li>
                </ul>
                <ul>
                    <li class=\"";
            // line 42
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 42, $this->source); })()), "SHOW_EJINT096_PAY_ELEMENTS")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ejint096_pay_elements_index");
            echo "\">Pay elements</a></li>
                </ul>
                <ul>
                    <li class=\"";
            // line 45
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 45, $this->source); })()), "SHOW_PROCESSING_CALENDAR")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("processing_calendar_index");
            echo "\">Processing calendar</a></li>
                </ul>
                <ul>
                    <li class=\"";
            // line 48
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 48, $this->source); })()), "SHOW_COSMIC_RADIATION")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("cosmic_radiation_report_new");
            echo "\">Generate Cosmic Radiation Report </a></li>
                </ul>
                <ul>
                    <li class=\"";
            // line 51
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 51, $this->source); })()), "SHOW_CREW_USER")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("crew_user_report_index");
            echo "\">Export Crew User Report </a></li>
                </ul>
                
            </li>
            ";
        }
        // line 56
        echo "        </ul>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 61
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 62
        echo "<div id=\"content\">
    Bienvenue dans la gestion des formulaires de support
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetHris/Base/structure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  282 => 62,  272 => 61,  259 => 56,  247 => 51,  237 => 48,  227 => 45,  217 => 42,  207 => 39,  200 => 37,  189 => 33,  179 => 30,  169 => 27,  159 => 24,  151 => 22,  149 => 21,  145 => 19,  135 => 18,  120 => 11,  117 => 10,  107 => 9,  94 => 6,  84 => 5,  65 => 4,  54 => 1,  52 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@EasyjetSwissinsideCore/Base/structure.html.twig\" %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Synchronisations between HR systems{% endblock %}
{% block header%}
    {{ parent() }}
{% endblock header %}

{% block generalMenu %}
    <div id=\"header\">
        {{ macros.show_general_menu(generalMenuItems(), 'HRIS') }}

        <a id=\"menu-trigger\" href=\"#\"><i class=\"icon-align-justify\"></i></a>
    </div>
{% endblock generalMenu %}


{% block sidebar %}
    <div id=\"sidebar\">
        <ul>
            {% if is_granted(\"ROLE_HRIS_ADMIN\") %}
            <li class=\"submenu {% if selectedSidebar is defined and (selectedSidebar == \"SHOW_PICOFS_LOGS\" or selectedSidebar == \"SHOW_USERS_IMPORT_LOGS\" or selectedSidebar == \"SHOW_EJINT096_DATA_CHECK_LOGS\" or selectedSidebar == \"SHOW_EJINT096_LOGS\" or selectedSidebar == \"SHOW_EJINT097_LOGS\") %}open active{% endif %}\"><a href=\"#\"><i class=\"icon-time\"></i> <span>Logs</span> <i class=\"arrow icon-chevron-right\"></i></a>
                <ul>
                    <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"SHOW_EJINT096_LOGS\" %}active current-page{% endif %}\"><a href=\"{{ url('ejint096_logs_index') }}\">EJINT096 - SGWI -> ProConcept</a></li>
                </ul>
                <ul>
                    <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"SHOW_EJINT096_DATA_CHECK_LOGS\" %}active current-page{% endif %}\"><a href=\"{{ url('data_analyzer_logs_index') }}\">Data analyzer</a></li>
                </ul>
                <ul>
                    <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"SHOW_EJINT097_LOGS\" %}active current-page{% endif %}\"><a href=\"{{ url('ejint097_logs_index') }}\">EJINT097 - ProConcept -> SafeGuard</a></li>
                </ul>
                <ul>
                    <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"SHOW_USERS_IMPORT_LOGS\" %}active current-page{% endif %}\"><a href=\"{{ url('hris_users_import_logs_index') }}\">Users WD -> Swissinside</a></li>
                </ul>
                
            </li>
            <li class=\"submenu {% if selectedSidebar is defined and (selectedSidebar == \"SHOW_EJINT096_PAY_ELEMENTS\" or selectedSidebar == \"SHOW_EJINT096_DEMOGRAPHIC_DATA\" or selectedSidebar == \"SHOW_PROCESSING_CALENDAR\" or selectedSidebar == \"SHOW_COSMIC_RADIATION\" or selectedSidebar == \"SHOW_CREW_USER\") %}open active{% endif %}\"><a href=\"#\"><i class=\"icon-time\"></i> <span>Administration</span> <i class=\"arrow icon-chevron-right\"></i></a>
                <ul>
                    <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"SHOW_EJINT096_DEMOGRAPHIC_DATA\" %}active current-page{% endif %}\"><a href=\"{{ url('ejint096_demographic_data_index') }}\">Demographic data</a></li>
                </ul>
                <ul>
                    <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"SHOW_EJINT096_PAY_ELEMENTS\" %}active current-page{% endif %}\"><a href=\"{{ url('ejint096_pay_elements_index') }}\">Pay elements</a></li>
                </ul>
                <ul>
                    <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"SHOW_PROCESSING_CALENDAR\" %}active current-page{% endif %}\"><a href=\"{{ url('processing_calendar_index') }}\">Processing calendar</a></li>
                </ul>
                <ul>
                    <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"SHOW_COSMIC_RADIATION\" %}active current-page{% endif %}\"><a href=\"{{ url('cosmic_radiation_report_new') }}\">Generate Cosmic Radiation Report </a></li>
                </ul>
                <ul>
                    <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"SHOW_CREW_USER\" %}active current-page{% endif %}\"><a href=\"{{ url('crew_user_report_index') }}\">Export Crew User Report </a></li>
                </ul>
                
            </li>
            {% endif %}
        </ul>
    </div>

{% endblock sidebar %}

{% block container %}
<div id=\"content\">
    Bienvenue dans la gestion des formulaires de support
</div>
{% endblock container %}
", "@EasyjetHris/Base/structure.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\HrisBundle\\Resources\\views\\Base\\structure.html.twig");
    }
}
