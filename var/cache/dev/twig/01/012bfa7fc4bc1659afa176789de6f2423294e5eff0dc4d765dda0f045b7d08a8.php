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

/* @EasyjetEwish/Gdo/update.html.twig */
class __TwigTemplate_342b6f91569684891d206db966fe83b891f980eb34f3d1034554510b39b65cb3 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEwish/Gdo/update.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEwish/Gdo/update.html.twig"));

        $this->parent = $this->loadTemplate("@EasyjetEwish/Base/structure.html.twig", "@EasyjetEwish/Gdo/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
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

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 11
        echo "
<div id=\"content\">

    <div id=\"content-header\">
        <h1 id=\"titre_help\">";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "</h1>  
    </div>

    <form  class=\"form-horizontal\" method = 'PUT' action =\"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ewish_gdo_update_request");
        echo "\">
        <input type = \"hidden\" name=\"id\" value = \"";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 19, $this->source); })()), "id", [], "array", false, false, false, 19), "html", null, true);
        echo "\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                 <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>Day off informations from ";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "user", [], "array", false, false, false, 27), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 27, $this->source); })()), "date", [], "array", false, false, false, 27), "html", null, true);
        echo "</h5>
                    </div>

                    <div class=\"widget-content nopadding\">

                        <div class=\"form-group\">
                            <label class=\"control-label\">GDO :</label>                
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">
                                    ";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 36, $this->source); })()), "period", [], "array", false, false, false, 36), "html", null, true);
        echo "
                                </span>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Comment :</label>                
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">
                                    ";
        // line 45
        echo twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 45, $this->source); })()), "comment", [], "array", false, false, false, 45);
        // line 46
        echo "                                </span>    
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"ewishStations\">State</label>                
                            <div class=\"controls\">
                                <select name=\"status\" id =\"ewishStatus\">
                                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statusList"]) || array_key_exists("statusList", $context) ? $context["statusList"] : (function () { throw new RuntimeError('Variable "statusList" does not exist.', 54, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 55
            echo "                                        <option ";
            echo ((twig_in_filter($context["key"], twig_get_attribute($this->env, $this->source, (isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 55, $this->source); })()), "selectedStatus", [], "array", false, false, false, 55))) ? (" selected=\"selected\" ") : (""));
            echo " value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 57
        echo "                                </select>
                            </div>
                        </div>

                        <div class=\"form-actions\">
                            <input name=\"submit\" class=\"btn btn-primary\" type=\"submit\" value=\"Submit\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
            
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetEwish/Gdo/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  176 => 57,  163 => 55,  159 => 54,  149 => 46,  147 => 45,  135 => 36,  121 => 27,  110 => 19,  106 => 18,  100 => 15,  94 => 11,  84 => 10,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetEwish/Base/structure.html.twig' %}

{% block specificJs %}{{ parent() }}

<script>

</script>
{% endblock specificJs %}

{% block container %}

<div id=\"content\">

    <div id=\"content-header\">
        <h1 id=\"titre_help\">{{ title }}</h1>  
    </div>

    <form  class=\"form-horizontal\" method = 'PUT' action =\"{{ url('ewish_gdo_update_request') }}\">
        <input type = \"hidden\" name=\"id\" value = \"{{ data['id'] }}\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                 <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>Day off informations from {{ data['user']}} {{data['date'] }}</h5>
                    </div>

                    <div class=\"widget-content nopadding\">

                        <div class=\"form-group\">
                            <label class=\"control-label\">GDO :</label>                
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">
                                    {{ data['period'] }}
                                </span>
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">Comment :</label>                
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">
                                    {% autoescape false %}{{ data['comment'] }}{% endautoescape %}
                                </span>    
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"ewishStations\">State</label>                
                            <div class=\"controls\">
                                <select name=\"status\" id =\"ewishStatus\">
                                    {% for key, value in statusList %}
                                        <option {{ key in data['selectedStatus'] ? ' selected=\"selected\" ' : \"\" }} value=\"{{ key }}\">{{ value }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>

                        <div class=\"form-actions\">
                            <input name=\"submit\" class=\"btn btn-primary\" type=\"submit\" value=\"Submit\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
            
{% endblock container %}", "@EasyjetEwish/Gdo/update.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EwishBundle\\Resources\\views\\Gdo\\update.html.twig");
    }
}
