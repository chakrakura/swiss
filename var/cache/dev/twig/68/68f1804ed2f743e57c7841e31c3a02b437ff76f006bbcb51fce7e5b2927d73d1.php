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

/* @EasyjetEwish/Base/structure.html.twig */
class __TwigTemplate_9c08bd9cbc50b6a59e3e3953186752cecfd75b65837c925f12bfdac4ed9d7655 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEwish/Base/structure.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEwish/Base/structure.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetEwish/Base/structure.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetSwissinsideCore/Base/structure.html.twig", "@EasyjetEwish/Base/structure.html.twig", 1);
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

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 8, $this->source); })()), "html", null, true);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 11
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_generalMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generalMenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generalMenu"));

        // line 15
        echo "    <div id=\"header\">
        ";
        // line 16
        echo twig_call_macro($macros["macros"], "macro_show_general_menu", [$this->extensions['App\Easyjet\SwissinsideCoreBundle\Twig\Extension\GeneralMenuItemsExtension']->generalMenuItems(), "EW"], 16, $context, $this->getSourceContext());
        echo "
        <a id=\"menu-trigger\" href=\"#\"><i class=\"icon-align-justify\"></i></a>
    </div>    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 22
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 23
        echo "    <div id=\"sidebar\">
        <ul>
            ";
        // line 25
        if (($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EWISH_SIMPLE_USER") || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EWISH_ADMIN"))) {
            // line 26
            echo "                <li class=\"submenu ";
            if ((array_key_exists("selectedSidebar", $context) && ((0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 26, $this->source); })()), "EWISHCALENDAR")) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 26, $this->source); })()), "EWISHGDO"))))) {
                echo "open active";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ewish_index");
            echo "\"><i class=\"icon-calendar\"></i> <span>eWish</span> <i class=\"arrow icon-chevron-right\"></i></a>
                    <ul>
                        <li class=\"";
            // line 28
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 28, $this->source); })()), "EWISHCALENDAR")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ewish_index");
            echo "\">Calendar</a></li>
                        <li class=\"";
            // line 29
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 29, $this->source); })()), "EWISHGDO")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ewish_gdo_list");
            echo "\">GDO list</a></li>
                        <li class=\"\"><a href=\"http://swissinside.easyjet.com/wiki/index.php/EWish\">How to use eWish</a></li>
                    </ul>            
                </li>
            ";
        }
        // line 34
        echo "            ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EWISH_ADMIN")) {
            // line 35
            echo "                <li class=\"submenu ";
            if ((array_key_exists("selectedSidebar", $context) && (((0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 35, $this->source); })()), "SHOW_EMAILS")) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 35, $this->source); })()), "ADMIN"))) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 35, $this->source); })()), "RIGHTS"))))) {
                echo "open active";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ewish_admin_emails");
            echo "\"><i class=\"icon-cogs\"></i> <span>Administration</span> <i class=\"arrow icon-chevron-right\"></i></a>
                    <ul>
                        <li class=\"";
            // line 37
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 37, $this->source); })()), "SHOW_EMAILS")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ewish_admin_emails");
            echo "\">Emails</a></li>
                    </ul>
                </li>
            ";
        }
        // line 41
        echo "        </ul>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
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
        return "@EasyjetEwish/Base/structure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 46,  227 => 41,  216 => 37,  206 => 35,  203 => 34,  191 => 29,  183 => 28,  173 => 26,  171 => 25,  167 => 23,  157 => 22,  143 => 16,  140 => 15,  130 => 14,  117 => 11,  107 => 10,  88 => 8,  66 => 4,  55 => 1,  53 => 2,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@EasyjetSwissinsideCore/Base/structure.html.twig\" %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block specificCss %}{{ parent() }}
    
{% endblock %}

{% block title %}{{ title }}{% endblock %}

{% block header %}
    {{ parent() }}
{% endblock header %}

{% block generalMenu %}
    <div id=\"header\">
        {{ macros.show_general_menu(generalMenuItems(), 'EW') }}
        <a id=\"menu-trigger\" href=\"#\"><i class=\"icon-align-justify\"></i></a>
    </div>    
{% endblock generalMenu %}


{% block sidebar %}
    <div id=\"sidebar\">
        <ul>
            {% if is_granted(\"ROLE_EWISH_SIMPLE_USER\") or is_granted(\"ROLE_EWISH_ADMIN\") %}
                <li class=\"submenu {% if selectedSidebar is defined and (selectedSidebar == \"EWISHCALENDAR\" or  selectedSidebar == \"EWISHGDO\" ) %}open active{% endif %}\"><a href=\"{{url('ewish_index')}}\"><i class=\"icon-calendar\"></i> <span>eWish</span> <i class=\"arrow icon-chevron-right\"></i></a>
                    <ul>
                        <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"EWISHCALENDAR\" %}active current-page{% endif %}\"><a href=\"{{url('ewish_index')}}\">Calendar</a></li>
                        <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"EWISHGDO\" %}active current-page{% endif %}\"><a href=\"{{ url('ewish_gdo_list') }}\">GDO list</a></li>
                        <li class=\"\"><a href=\"http://swissinside.easyjet.com/wiki/index.php/EWish\">How to use eWish</a></li>
                    </ul>            
                </li>
            {% endif %}
            {% if is_granted(\"ROLE_EWISH_ADMIN\") %}
                <li class=\"submenu {% if selectedSidebar is defined and (selectedSidebar == \"SHOW_EMAILS\" or selectedSidebar == \"ADMIN\"  or selectedSidebar == \"RIGHTS\") %}open active{% endif %}\"><a href=\"{{url('ewish_admin_emails')}}\"><i class=\"icon-cogs\"></i> <span>Administration</span> <i class=\"arrow icon-chevron-right\"></i></a>
                    <ul>
                        <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"SHOW_EMAILS\" %}active current-page{% endif %}\"><a href=\"{{url('ewish_admin_emails')}}\">Emails</a></li>
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
{% endblock container %}", "@EasyjetEwish/Base/structure.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EwishBundle\\Resources\\views\\Base\\structure.html.twig");
    }
}
