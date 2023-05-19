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

/* @EasyjetEleave/Admin/updateRemainingDays.html.twig */
class __TwigTemplate_a1c17f0f6e8f61f36d9dfd95ee08b550404d068500e810868c0b0683d62dd8f7 extends Template
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
        return "@EasyjetEleave/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/Admin/updateRemainingDays.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/Admin/updateRemainingDays.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetEleave/Admin/updateRemainingDays.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetEleave/Base/structure.html.twig", "@EasyjetEleave/Admin/updateRemainingDays.html.twig", 1);
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

        echo "Update remaining days";
        
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
<script>
    \$(function() {
       swissinside.menuSelected(\"admin-remaining-days\"); 
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 18
        echo "    \t
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Update remaining days</h1>  
        <div id=\"description_help\">Here you can update the remaining leave days for the crews.
        You can choose one or more files. Each file will be parsed and employees contained in the excel file(s) will be updated in the eleave application.</div>
    </div>
    
    <div class=\"row\">
        
        <div class=\"col-xs-12\">
            ";
        // line 29
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 29, $context, $this->getSourceContext());
        echo "
        </div>
        
        <div class=\"col-xs-12\">

            
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-download\"></i>
                    </span>
                    <h5>Choose the excel file below</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <form class=\"form-horizontal\" action=\"\" method=\"post\" enctype=\"multipart/form-data\">
                        

                            <div class=\"form-group\">
                                <label class=\"control-label\">Excel file(s) :</label>                
                                <div class=\"controls\">
                                    <input class=\"form-control input-sm date-input\" name=\"files[]\" type=\"file\"  multiple=\"multiple\">
                                </div>
                            </div>


                        <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon-search\"></i> Update remaining days</button>
                        </div>
                        <div id=\"submitted\"></div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>

    ";
        // line 65
        if (array_key_exists("importLog", $context)) {
            // line 66
            echo "    <div class=\"row\">
        
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Import result</h5>
                    <span class=\"badge badge-info\">";
            // line 75
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["importLog"]) || array_key_exists("importLog", $context) ? $context["importLog"] : (function () { throw new RuntimeError('Variable "importLog" does not exist.', 75, $this->source); })()), "importDate", [], "any", false, false, false, 75), "d/m/Y H:i"), "html", null, true);
            echo "</span>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" >
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Remaining day</th>
                                <th>Work Ratio<th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
            // line 87
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["importLog"]) || array_key_exists("importLog", $context) ? $context["importLog"] : (function () { throw new RuntimeError('Variable "importLog" does not exist.', 87, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["currentPerson"]) {
                // line 88
                echo "                            <tr>
                                <td>";
                // line 89
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentPerson"], "empno", [], "any", false, false, false, 89), "html", null, true);
                echo "</td>
                                <td>";
                // line 90
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentPerson"], "remainingLeaves", [], "any", false, false, false, 90), "html", null, true);
                echo "</td>
                                <td>";
                // line 91
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentPerson"], "workRatio", [], "any", false, false, false, 91), "html", null, true);
                echo "%</td>
                            </tr>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currentPerson'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>        
    </div>
    ";
        }
        // line 101
        echo "
</div>
            
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetEleave/Admin/updateRemainingDays.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  231 => 101,  222 => 94,  213 => 91,  209 => 90,  205 => 89,  202 => 88,  198 => 87,  183 => 75,  172 => 66,  170 => 65,  131 => 29,  118 => 18,  108 => 17,  82 => 7,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetEleave/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Update remaining days{% endblock %}


{% block specificJs %}{{ parent() }}
<script>
    \$(function() {
       swissinside.menuSelected(\"admin-remaining-days\"); 
    });
</script>
{% endblock specificJs %}
        


{% block container %}
    \t
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Update remaining days</h1>  
        <div id=\"description_help\">Here you can update the remaining leave days for the crews.
        You can choose one or more files. Each file will be parsed and employees contained in the excel file(s) will be updated in the eleave application.</div>
    </div>
    
    <div class=\"row\">
        
        <div class=\"col-xs-12\">
            {{ macros.wizz() }}
        </div>
        
        <div class=\"col-xs-12\">

            
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-download\"></i>
                    </span>
                    <h5>Choose the excel file below</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <form class=\"form-horizontal\" action=\"\" method=\"post\" enctype=\"multipart/form-data\">
                        

                            <div class=\"form-group\">
                                <label class=\"control-label\">Excel file(s) :</label>                
                                <div class=\"controls\">
                                    <input class=\"form-control input-sm date-input\" name=\"files[]\" type=\"file\"  multiple=\"multiple\">
                                </div>
                            </div>


                        <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon-search\"></i> Update remaining days</button>
                        </div>
                        <div id=\"submitted\"></div>
                    </form>
                </div>
            </div>
            
        </div>
    </div>

    {% if importLog is defined %}
    <div class=\"row\">
        
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Import result</h5>
                    <span class=\"badge badge-info\">{{ importLog.importDate|date(\"d/m/Y H:i\") }}</span>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" >
                        <thead>
                            <tr>
                                <th>User</th>
                                <th>Remaining day</th>
                                <th>Work Ratio<th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for currentPerson in importLog %}
                            <tr>
                                <td>{{ currentPerson.empno }}</td>
                                <td>{{ currentPerson.remainingLeaves }}</td>
                                <td>{{ currentPerson.workRatio }}%</td>
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>        
    </div>
    {% endif %}

</div>
            
{% endblock container %}", "@EasyjetEleave/Admin/updateRemainingDays.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EleaveBundle\\Resources\\views\\Admin\\updateRemainingDays.html.twig");
    }
}
