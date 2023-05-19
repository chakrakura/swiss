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

/* @EasyjetFdtr/Base/structure.html.twig */
class __TwigTemplate_7236c82d6abae628feb55ed3144d84b3266b6eb2108048150a8d3e2e7f58c358 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'specificCss' => [$this, 'block_specificCss'],
            'specificJs' => [$this, 'block_specificJs'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetFdtr/Base/structure.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetFdtr/Base/structure.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetFdtr/Base/structure.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetSwissinsideCore/Base/structure.html.twig", "@EasyjetFdtr/Base/structure.html.twig", 1);
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

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
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

    // line 11
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Flight duty time report";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 13
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_generalMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generalMenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generalMenu"));

        // line 17
        echo "    <div id=\"header\">
        ";
        // line 18
        echo twig_call_macro($macros["macros"], "macro_show_general_menu", [$this->extensions['App\Easyjet\SwissinsideCoreBundle\Twig\Extension\GeneralMenuItemsExtension']->generalMenuItems(), "FDTR"], 18, $context, $this->getSourceContext());
        echo "

        <a id=\"menu-trigger\" href=\"#\"><i class=\"icon-align-justify\"></i></a>
    </div>    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 25
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 26
        echo "    <div id=\"sidebar\">
        <ul>
            ";
        // line 28
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SWISSINSIDE_USER")) {
            // line 29
            echo "            <li class=\"submenu ";
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 29, $this->source); })()), "FDTR")))) {
                echo "open active";
            }
            echo "\"><a href=\"#\"><i class=\"icon-time\"></i> <span>EDTR list</span> <i class=\"arrow icon-chevron-right\"></i></a>
                <ul>
                    <li class=\"";
            // line 31
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 31, $this->source); })()), "FDTR")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fdtr_list_index");
            echo "\">View EDTR</a></li>
                </ul>            
            </li>
            ";
        }
        // line 35
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FDTR_ADMIN")) {
            // line 36
            echo "            <li class=\"submenu ";
            if ((array_key_exists("selectedSidebar", $context) && ((((0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 36, $this->source); })()), "NOTIFICATIONS")) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 36, $this->source); })()), "SHOW_LOGS"))) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 36, $this->source); })()), "ADMIN"))) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 36, $this->source); })()), "RIGHTS"))))) {
                echo "open active";
            }
            echo "\"><a href=\"#\"><i class=\"icon-cogs\"></i> <span>Administration</span> <i class=\"arrow icon-chevron-right\"></i></a>
                <ul>
                    <li class=\"";
            // line 38
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 38, $this->source); })()), "SHOW_LOGS")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fdtr_logs_index");
            echo "\">Show logs</a></li>
                    <li class=\"";
            // line 39
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 39, $this->source); })()), "NOTIFICATIONS")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fdtr_admin_notifications");
            echo "\">Notifications config.</a></li>
                    <li class=\"";
            // line 40
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 40, $this->source); })()), "RIGHTS")))) {
                echo "active current-page";
            }
            echo "\"><a href = \"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fdtr_admin_rights_index");
            echo "\">User Rights</a></li>

                </ul>
            </li>
            ";
        }
        // line 45
        echo "        </ul>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 50
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        echo "    \t
<div id=\"content\">
    Bienvenue dans la gestion des formulaires de support
</div>            
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetFdtr/Base/structure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  264 => 50,  251 => 45,  239 => 40,  231 => 39,  223 => 38,  215 => 36,  212 => 35,  201 => 31,  193 => 29,  191 => 28,  187 => 26,  177 => 25,  162 => 18,  159 => 17,  149 => 16,  136 => 13,  126 => 12,  107 => 11,  85 => 7,  67 => 4,  56 => 1,  54 => 2,  41 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@EasyjetSwissinsideCore/Base/structure.html.twig\" %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block specificCss %}
{% endblock %}

{% block specificJs %}{{ parent() }}

{% endblock specificJs %}

{% block title %}Flight duty time report{% endblock %}
{% block header%}
    {{ parent() }}
{% endblock header %}

{% block generalMenu %}
    <div id=\"header\">
        {{ macros.show_general_menu(generalMenuItems(), 'FDTR') }}

        <a id=\"menu-trigger\" href=\"#\"><i class=\"icon-align-justify\"></i></a>
    </div>    
{% endblock generalMenu %}


{% block sidebar %}
    <div id=\"sidebar\">
        <ul>
            {% if is_granted(\"ROLE_SWISSINSIDE_USER\") %}
            <li class=\"submenu {% if selectedSidebar is defined and (selectedSidebar == \"FDTR\") %}open active{% endif %}\"><a href=\"#\"><i class=\"icon-time\"></i> <span>EDTR list</span> <i class=\"arrow icon-chevron-right\"></i></a>
                <ul>
                    <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"FDTR\" %}active current-page{% endif %}\"><a href=\"{{ url('fdtr_list_index') }}\">View EDTR</a></li>
                </ul>            
            </li>
            {% endif %}
            {% if  is_granted(\"ROLE_FDTR_ADMIN\") %}
            <li class=\"submenu {% if selectedSidebar is defined and (selectedSidebar == \"NOTIFICATIONS\" or selectedSidebar == \"SHOW_LOGS\" or selectedSidebar == \"ADMIN\"  or selectedSidebar == \"RIGHTS\") %}open active{% endif %}\"><a href=\"#\"><i class=\"icon-cogs\"></i> <span>Administration</span> <i class=\"arrow icon-chevron-right\"></i></a>
                <ul>
                    <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"SHOW_LOGS\" %}active current-page{% endif %}\"><a href=\"{{ url('fdtr_logs_index') }}\">Show logs</a></li>
                    <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"NOTIFICATIONS\" %}active current-page{% endif %}\"><a href=\"{{ url('fdtr_admin_notifications') }}\">Notifications config.</a></li>
                    <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"RIGHTS\" %}active current-page{% endif %}\"><a href = \"{{ url('fdtr_admin_rights_index') }}\">User Rights</a></li>

                </ul>
            </li>
            {% endif %}
        </ul>
    </div>

{% endblock sidebar %}

{% block container %}    \t
<div id=\"content\">
    Bienvenue dans la gestion des formulaires de support
</div>            
{% endblock container %}", "@EasyjetFdtr/Base/structure.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\FdtrBundle\\Resources\\views\\Base\\structure.html.twig");
    }
}
