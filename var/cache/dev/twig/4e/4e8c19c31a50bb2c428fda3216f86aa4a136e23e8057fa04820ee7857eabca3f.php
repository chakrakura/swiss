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

/* @EasyjetEwish/Calendar/index.html.twig */
class __TwigTemplate_32ed292a1073a1b9425a5a3d52dc9d6b0a1c2ebbfaed66635a3ae1274f2e150d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'specificJs' => [$this, 'block_specificJs'],
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@EasyjetEwish/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEwish/Calendar/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEwish/Calendar/index.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetEwish/Calendar/index.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetEwish/Base/structure.html.twig", "@EasyjetEwish/Calendar/index.html.twig", 1);
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

        echo "Add GDO request";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_specificJs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificJs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificJs"));

        $this->displayParentBlock("specificJs", $context, $blocks);
        echo "

<script>

    function month(num)
    {
        var monthValue = \$(\"#month\").val();
        monthValue = monthValue * 1 + num;
        if (monthValue < 1) 
        {
            monthValue = 12;
            year(-1);
        }
        if (monthValue > 12) 
        {
            monthValue = 1;
            year(1);
        }
        \$(\"#month\").val(monthValue);
        \$( \"#calendarForm\" ).submit();
    }

    function year(num)
    {
        var yearValue = \$(\"#year\").val();
        \$(\"#year\").val(yearValue*1 + num);
        \$( \"#calendarForm\" ).submit();
    }
    
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 40
        echo "<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Add a GDO</h1>  
        <div id=\"description_help\">
          Here, you can send a GDO day request.
          Just click on the selected wish and send your request
        </div>
    </div>
    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"alert alert-info\">
              eWish is only applicable for the end of the year festive period. You can request them from the 01 of April until the 30 of September. All other GDO must be requested trough eCrew Please refer to the Rostering Agreement (GDO allowance, 4 consecutive GDOs only once before and once after the 01.07, minimum duty days between 2 requests or any other applicable rules...)
            </div>
             <div class=\"col-xs-12\">
                ";
        // line 55
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 55, $context, $this->getSourceContext());
        echo "
            </div>
            <form method=\"get\" name = \"calendarForm\" id = \"calendarForm\" action=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ewish_index");
        echo "\" class=\"form-horizontal\">
                <input name=\"month\" type=\"hidden\" id=\"month\" value=\"";
        // line 58
        echo twig_escape_filter($this->env, (isset($context["month"]) || array_key_exists("month", $context) ? $context["month"] : (function () { throw new RuntimeError('Variable "month" does not exist.', 58, $this->source); })()), "html", null, true);
        echo "\">
                <input name=\"year\" type=\"hidden\" id=\"year\" value=\"";
        // line 59
        echo twig_escape_filter($this->env, (isset($context["year"]) || array_key_exists("year", $context) ? $context["year"] : (function () { throw new RuntimeError('Variable "year" does not exist.', 59, $this->source); })()), "html", null, true);
        echo "\">
                    ";
        // line 60
        echo (isset($context["calendar"]) || array_key_exists("calendar", $context) ? $context["calendar"] : (function () { throw new RuntimeError('Variable "calendar" does not exist.', 60, $this->source); })());
        echo "
            </form>
        </div>
        <span class=\"texte_normal\"><br>
            <strong style=\"margin-left:200px\">GDO request must reach the rostering before the 1st of the 2 previous month at the latest.</strong><br>
        </span> 
    </div>
</div>
            
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetEwish/Calendar/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  177 => 60,  173 => 59,  169 => 58,  165 => 57,  160 => 55,  143 => 40,  133 => 39,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetEwish/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Add GDO request{% endblock %}

{% block specificJs %}{{ parent() }}

<script>

    function month(num)
    {
        var monthValue = \$(\"#month\").val();
        monthValue = monthValue * 1 + num;
        if (monthValue < 1) 
        {
            monthValue = 12;
            year(-1);
        }
        if (monthValue > 12) 
        {
            monthValue = 1;
            year(1);
        }
        \$(\"#month\").val(monthValue);
        \$( \"#calendarForm\" ).submit();
    }

    function year(num)
    {
        var yearValue = \$(\"#year\").val();
        \$(\"#year\").val(yearValue*1 + num);
        \$( \"#calendarForm\" ).submit();
    }
    
</script>

{% endblock specificJs %}
        
{% block container %}
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Add a GDO</h1>  
        <div id=\"description_help\">
          Here, you can send a GDO day request.
          Just click on the selected wish and send your request
        </div>
    </div>
    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"alert alert-info\">
              eWish is only applicable for the end of the year festive period. You can request them from the 01 of April until the 30 of September. All other GDO must be requested trough eCrew Please refer to the Rostering Agreement (GDO allowance, 4 consecutive GDOs only once before and once after the 01.07, minimum duty days between 2 requests or any other applicable rules...)
            </div>
             <div class=\"col-xs-12\">
                {{ macros.wizz() }}
            </div>
            <form method=\"get\" name = \"calendarForm\" id = \"calendarForm\" action=\"{{url('ewish_index')}}\" class=\"form-horizontal\">
                <input name=\"month\" type=\"hidden\" id=\"month\" value=\"{{ month }}\">
                <input name=\"year\" type=\"hidden\" id=\"year\" value=\"{{ year }}\">
                    {{calendar | raw }}
            </form>
        </div>
        <span class=\"texte_normal\"><br>
            <strong style=\"margin-left:200px\">GDO request must reach the rostering before the 1st of the 2 previous month at the latest.</strong><br>
        </span> 
    </div>
</div>
            
{% endblock container %}", "@EasyjetEwish/Calendar/index.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EwishBundle\\Resources\\views\\Calendar\\index.html.twig");
    }
}
