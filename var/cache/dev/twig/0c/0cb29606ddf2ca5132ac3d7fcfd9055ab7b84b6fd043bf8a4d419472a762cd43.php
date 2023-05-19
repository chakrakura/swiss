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

/* @EasyjetSfsu/Base/structure.html.twig */
class __TwigTemplate_9ff71ea9efa824ccba1a0ed945ce040c7784863ae2fe182b7540bac05c381274 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'specificCss' => [$this, 'block_specificCss'],
            'forceIe9Rendering' => [$this, 'block_forceIe9Rendering'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSfsu/Base/structure.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSfsu/Base/structure.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetSfsu/Base/structure.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetSwissinsideCore/Base/structure.html.twig", "@EasyjetSfsu/Base/structure.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_specificCss($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificCss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificCss"));

        echo " ";
        $this->displayParentBlock("specificCss", $context, $blocks);
        echo "

  ";
        // line 7
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackLinkTags("sfsu");
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_forceIe9Rendering($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "forceIe9Rendering"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "forceIe9Rendering"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_specificJs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificJs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificJs"));

        // line 15
        $this->displayParentBlock("specificJs", $context, $blocks);
        echo "
";
        // line 16
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("sfsu");
        echo "
 
   
    <script src=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/sfsu/js/clipboard.js"), "html", null, true);
        echo "\"></script>
 


  
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 26
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Secure file sharing utility";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 28
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "header"));

        // line 29
        echo "    ";
        $this->displayParentBlock("header", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_generalMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generalMenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generalMenu"));

        // line 33
        echo "    <div id=\"header\">
        ";
        // line 34
        echo twig_call_macro($macros["macros"], "macro_show_general_menu", [$this->extensions['App\Easyjet\SwissinsideCoreBundle\Twig\Extension\GeneralMenuItemsExtension']->generalMenuItems(), "SFSU"], 34, $context, $this->getSourceContext());
        echo "

        <a id=\"menu-trigger\" href=\"#\"><i class=\"icon-align-justify\"></i></a>
    </div>    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_sidebar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "sidebar"));

        // line 42
        echo "    <div id=\"sidebar\">
        <ul>
            <li class=\"submenu ";
        // line 44
        if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 44, $this->source); })()), "SHOW_FILES")))) {
            echo "open active";
        }
        echo "\">
                <a href=\"#\"><i class=\"icon-time\"></i> <span>Files</span> <i class=\"arrow icon-chevron-right\"></i></a>
                <ul>
                    <li class=\"";
        // line 47
        if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 47, $this->source); })()), "SHOW_FILES")))) {
            echo "active current-page";
        }
        echo "\"><a href=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sfsu_files_index");
        echo "\">View files</a></li>
                </ul>
            </li>
            
            ";
        // line 51
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_SFSU_ADMIN")) {
            // line 52
            echo "            <li class=\"submenu ";
            if ((array_key_exists("selectedSidebar", $context) && ((0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 52, $this->source); })()), "SHOW_ADMIN_MAX_SIZE")) || (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 52, $this->source); })()), "SHOW_ADMIN_RETENTION"))))) {
                echo "open active";
            }
            echo "\"><a href=\"#\"><i class=\"icon-time\"></i> <span>Admin</span> <i class=\"arrow icon-chevron-right\"></i></a>
                <ul>
                    <li class=\"";
            // line 54
            if ((array_key_exists("selectedSidebar", $context) && (0 === twig_compare((isset($context["selectedSidebar"]) || array_key_exists("selectedSidebar", $context) ? $context["selectedSidebar"] : (function () { throw new RuntimeError('Variable "selectedSidebar" does not exist.', 54, $this->source); })()), "SHOW_ADMIN_MAX_SIZE")))) {
                echo "active current-page";
            }
            echo "\"><a href=\"";
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sfsu_admin_max_file_size");
            echo "\">Max file size upload</a></li>
                </ul>
            </li>
            ";
        }
        // line 58
        echo "        </ul>
    </div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 63
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
        return "@EasyjetSfsu/Base/structure.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 63,  273 => 58,  262 => 54,  254 => 52,  252 => 51,  241 => 47,  233 => 44,  229 => 42,  219 => 41,  204 => 34,  201 => 33,  191 => 32,  178 => 29,  168 => 28,  149 => 26,  133 => 19,  127 => 16,  123 => 15,  113 => 14,  95 => 10,  83 => 7,  68 => 5,  57 => 1,  55 => 2,  42 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@EasyjetSwissinsideCore/Base/structure.html.twig\" %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}


{% block specificCss %} {{ parent() }}

  {{ encore_entry_link_tags('sfsu') }}
{% endblock %}

{% block forceIe9Rendering %}
{% endblock forceIe9Rendering %}


{% block specificJs %}
{{ parent() }}
{{ encore_entry_script_tags('sfsu') }}
 
   
    <script src=\"{{ asset('bundles/sfsu/js/clipboard.js')  }}\"></script>
 


  
{% endblock specificJs %}

{% block title %}Secure file sharing utility{% endblock %}

{% block header %}
    {{ parent() }}
{% endblock header %}

{% block generalMenu %}
    <div id=\"header\">
        {{ macros.show_general_menu(generalMenuItems(), 'SFSU') }}

        <a id=\"menu-trigger\" href=\"#\"><i class=\"icon-align-justify\"></i></a>
    </div>    
{% endblock generalMenu %}


{% block sidebar %}
    <div id=\"sidebar\">
        <ul>
            <li class=\"submenu {% if selectedSidebar is defined and (selectedSidebar == \"SHOW_FILES\") %}open active{% endif %}\">
                <a href=\"#\"><i class=\"icon-time\"></i> <span>Files</span> <i class=\"arrow icon-chevron-right\"></i></a>
                <ul>
                    <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"SHOW_FILES\" %}active current-page{% endif %}\"><a href=\"{{ url('sfsu_files_index') }}\">View files</a></li>
                </ul>
            </li>
            
            {% if is_granted(\"ROLE_SFSU_ADMIN\") %}
            <li class=\"submenu {% if selectedSidebar is defined and (selectedSidebar == \"SHOW_ADMIN_MAX_SIZE\" or selectedSidebar == \"SHOW_ADMIN_RETENTION\") %}open active{% endif %}\"><a href=\"#\"><i class=\"icon-time\"></i> <span>Admin</span> <i class=\"arrow icon-chevron-right\"></i></a>
                <ul>
                    <li class=\"{% if selectedSidebar is defined and selectedSidebar == \"SHOW_ADMIN_MAX_SIZE\" %}active current-page{% endif %}\"><a href=\"{{ url('sfsu_admin_max_file_size') }}\">Max file size upload</a></li>
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
{% endblock container %}
", "@EasyjetSfsu/Base/structure.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\SfsuBundle\\Resources\\views\\Base\\structure.html.twig");
    }
}
