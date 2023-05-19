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

/* @EasyjetOtp/Admin/SectorPay/add.html.twig */
class __TwigTemplate_db29cbc8715fa09fc9d334aa2f05e9c35db5e37c2de8c7c2fb67c24e2130f363 extends Template
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
        return "@EasyjetOtp/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Admin/SectorPay/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Admin/SectorPay/add.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetOtp/Admin/SectorPay/add.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetOtp/Base/structure.html.twig", "@EasyjetOtp/Admin/SectorPay/add.html.twig", 1);
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

        echo " ";
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()), "html", null, true);
        echo " ";
        
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
<script type=\"text/javascript\">
    \$(document).ready(function() {
        // you may need to change this code if you are not using Bootstrap Datepicker
        \$('.js-datepicker').datepicker({
            autoclose:true
        });

    });
   function update_pay_rank_total(pay_rank) {
        var label_to_show_content = document.getElementById(\"tot_\" + pay_rank);
        var salary = document.getElementById(pay_rank + \"_salary\");
        var allowance = document.getElementById(pay_rank + \"_allowance\");

        if(label_to_show_content && salary && allowance) {
            var sum = parseFloat(salary.value) + parseFloat(allowance.value);
            label_to_show_content.innerHTML = sum.toFixed(4);
        }
   }
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 31
        echo "        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">sector pay</h1>         
        <div id=\"description_help\">Please fill the following form in order to create the new sector pay. This will be used to calculate the proper sector pay.</div>
    </div>

    ";
        // line 38
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 38, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
    ";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), 'errors');
        echo "
        <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"widget-box\">
                        <div class=\"widget-title\">
                            <h5>Parameters</span></h5>
                        </div>
                        <div class=\"widget-content nopadding\">
               
                            <div class=\"form-group\">
                                <label class=\"control-label\">";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "dateEffectivite", [], "any", false, false, false, 49), 'label');
        echo ":</label>
                                <div class=\"controls\">
                                    ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "dateEffectivite", [], "any", false, false, false, 51), 'widget', ["attr" => ["class" => "form-control js-datepicker"]]);
        echo "
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>                
        </div>

        <div class=\"row\">
            ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["data"]) || array_key_exists("data", $context) ? $context["data"] : (function () { throw new RuntimeError('Variable "data" does not exist.', 60, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 61
            echo "        
                <div class=\"col-xs-6\">
                    <div class=\"widget-box\">
                        <div class=\"widget-title\">
                            <h5>Sector pay for ";
            // line 65
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "type", [], "any", false, false, false, 65), "html", null, true);
            echo " :<span id=\"tot_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "type", [], "any", false, false, false, 65), "html", null, true);
            echo "\"> ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["row"], "salary", [], "any", false, false, false, 65) + twig_get_attribute($this->env, $this->source, $context["row"], "allowance", [], "any", false, false, false, 65)), 4), "html", null, true);
            echo "</span></h5>
                        </div>
                        <div class=\"widget-content nopadding\">
               
                            <div class=\"form-group\">
                                <label class=\"control-label\">";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "type", [], "any", false, false, false, 70), "html", null, true);
            echo " salary:</label>
                                <div class=\"controls\">
                                    <input type =\"text\" value = \"";
            // line 72
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "salary", [], "any", false, false, false, 72), "html", null, true);
            echo "\" name =\"salary_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 72), "html", null, true);
            echo "\" id =\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "type", [], "any", false, false, false, 72), "html", null, true);
            echo "_salary\" onkeyup=\"javascript:update_pay_rank_total('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "type", [], "any", false, false, false, 72), "html", null, true);
            echo "')\" class=\"form-control\">  
                                </div>
                            </div> 
                        
                            <div class=\"form-group\">
                                <label class=\"control-label\">";
            // line 77
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "type", [], "any", false, false, false, 77), "html", null, true);
            echo " allowance:</label>
                                <div class=\"controls\">
                                    <input type =\"text\" value = \"";
            // line 79
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "allowance", [], "any", false, false, false, 79), "html", null, true);
            echo "\"  name =\"allowance_";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "id", [], "any", false, false, false, 79), "html", null, true);
            echo "\" id =\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "type", [], "any", false, false, false, 79), "html", null, true);
            echo "_allowance\" onkeyup=\"javascript:update_pay_rank_total('";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["row"], "type", [], "any", false, false, false, 79), "html", null, true);
            echo "')\" class=\"form-control\">  
                                </div>
                            </div>

                        </div>     
                    </div>
                </div>           
    
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        echo " 
                <div class=\"form-actions\">
                    <input  type=\"submit\" class=\"btn btn-primary\" />
                </div>
                <input type=\"hidden\" name=\"id\" value = ";
        // line 91
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 91, $this->source); })()), "html", null, true);
        echo ">  
        </div>
    ";
        // line 93
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), 'form_end');
        echo "
</div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetOtp/Admin/SectorPay/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  256 => 93,  251 => 91,  245 => 87,  224 => 79,  219 => 77,  205 => 72,  200 => 70,  188 => 65,  182 => 61,  178 => 60,  166 => 51,  161 => 49,  148 => 39,  144 => 38,  135 => 31,  125 => 30,  84 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetOtp/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %} {{ title }} {% endblock %}

{% block specificJs %}{{ parent() }}
<script type=\"text/javascript\">
    \$(document).ready(function() {
        // you may need to change this code if you are not using Bootstrap Datepicker
        \$('.js-datepicker').datepicker({
            autoclose:true
        });

    });
   function update_pay_rank_total(pay_rank) {
        var label_to_show_content = document.getElementById(\"tot_\" + pay_rank);
        var salary = document.getElementById(pay_rank + \"_salary\");
        var allowance = document.getElementById(pay_rank + \"_allowance\");

        if(label_to_show_content && salary && allowance) {
            var sum = parseFloat(salary.value) + parseFloat(allowance.value);
            label_to_show_content.innerHTML = sum.toFixed(4);
        }
   }
</script>

{% endblock specificJs %}
        

{% block container %}
        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">sector pay</h1>         
        <div id=\"description_help\">Please fill the following form in order to create the new sector pay. This will be used to calculate the proper sector pay.</div>
    </div>

    {{ form_start(form, {'attr': {'class': 'form-horizontal'}} ) }}
    {{ form_errors(form) }}
        <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"widget-box\">
                        <div class=\"widget-title\">
                            <h5>Parameters</span></h5>
                        </div>
                        <div class=\"widget-content nopadding\">
               
                            <div class=\"form-group\">
                                <label class=\"control-label\">{{ form_label(form.dateEffectivite) }}:</label>
                                <div class=\"controls\">
                                    {{ form_widget(form.dateEffectivite, { 'attr': {'class': 'form-control js-datepicker'} }) }}
                                </div>
                            </div>
                        </div>    
                    </div>
                </div>                
        </div>

        <div class=\"row\">
            {% for row in data %}
        
                <div class=\"col-xs-6\">
                    <div class=\"widget-box\">
                        <div class=\"widget-title\">
                            <h5>Sector pay for {{row.type}} :<span id=\"tot_{{row.type}}\"> {{ (row.salary + row.allowance) | number_format(4)  }}</span></h5>
                        </div>
                        <div class=\"widget-content nopadding\">
               
                            <div class=\"form-group\">
                                <label class=\"control-label\">{{row.type}} salary:</label>
                                <div class=\"controls\">
                                    <input type =\"text\" value = \"{{ row.salary }}\" name =\"salary_{{row.id}}\" id =\"{{row.type}}_salary\" onkeyup=\"javascript:update_pay_rank_total('{{row.type}}')\" class=\"form-control\">  
                                </div>
                            </div> 
                        
                            <div class=\"form-group\">
                                <label class=\"control-label\">{{row.type}} allowance:</label>
                                <div class=\"controls\">
                                    <input type =\"text\" value = \"{{ row.allowance }}\"  name =\"allowance_{{row.id}}\" id =\"{{row.type}}_allowance\" onkeyup=\"javascript:update_pay_rank_total('{{row.type}}')\" class=\"form-control\">  
                                </div>
                            </div>

                        </div>     
                    </div>
                </div>           
    
            {% endfor %} 
                <div class=\"form-actions\">
                    <input  type=\"submit\" class=\"btn btn-primary\" />
                </div>
                <input type=\"hidden\" name=\"id\" value = {{ id }}>  
        </div>
    {{ form_end(form) }}
</div>
{% endblock container %}", "@EasyjetOtp/Admin/SectorPay/add.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\OtpBundle\\Resources\\views\\Admin\\SectorPay\\add.html.twig");
    }
}
