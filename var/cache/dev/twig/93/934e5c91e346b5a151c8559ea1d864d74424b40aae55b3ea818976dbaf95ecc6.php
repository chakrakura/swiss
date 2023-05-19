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

/* @EasyjetHris/Ejint096PayElements/edit.html.twig */
class __TwigTemplate_be9cd0d2411094ba0e5778a2cc562be53b8f7ef5acd73249123ea033f8675447 extends Template
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
        return "@EasyjetHris/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/Ejint096PayElements/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/Ejint096PayElements/edit.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetHris/Ejint096PayElements/edit.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetHris/Base/structure.html.twig", "@EasyjetHris/Ejint096PayElements/edit.html.twig", 1);
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

        echo "Edit pay element";
        
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

    jQuery.fn.outerHTML = function(s) {
    return (s)
      ? this.before(s).remove()
      : jQuery(\"<p>\").append(this.eq(0).clone()).html();
    }

    var updateTypesOfValues = function() {
        \$(\"option[value=type_of_value]:selected\").parents('tr').find('.rule-value').hide();
        \$(\"option[value=type_of_value]:selected\").parents('tr').find('.type-of-value').show();

        \$(\"option[value=type_of_value]:not(:selected)\").parents('tr').find('.rule-value').show();
        \$(\"option[value=type_of_value]:not(:selected)\").parents('tr').find('.type-of-value').hide();
    }

    var addSoftRule = function() {
        var count = \$(\"#pay-elements-tbody\").data('count');
        \$(\"#pay-elements-tbody\").data('count', count+1);

        var typeOfRule = \$(\"";
        // line 28
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "softRules", [], "any", false, false, false, 28), "vars", [], "any", false, false, false, 28), "prototype", [], "any", false, false, false, 28), "typeOfRule", [], "any", false, false, false, 28), 'widget'), "js"), "html", null, true);
        echo "\".replace(/__name__/g, count));
        typeOfRule.addClass('type-of-rule').css({ width: \"100%\"});
        var typeOfValue = \$(\"";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "softRules", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "prototype", [], "any", false, false, false, 30), "typeOfValue", [], "any", false, false, false, 30), 'widget'), "js"), "html", null, true);
        echo "\".replace(/__name__/g, count));
        typeOfValue.addClass('type-of-value');
        var value = \$(\"";
        // line 32
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), "softRules", [], "any", false, false, false, 32), "vars", [], "any", false, false, false, 32), "prototype", [], "any", false, false, false, 32), "value", [], "any", false, false, false, 32), 'widget'), "js"), "html", null, true);
        echo "\".replace(/__name__/g, count));
        value.addClass('rule-value');

        var \$tr = \$('<tr>');
        \$tr.append('<td>' + typeOfRule.outerHTML() + '</td>');
        \$tr.append('<td>' + typeOfValue.outerHTML() + value.outerHTML() + '</td>');
        \$tr.append('<td><a class=\"btn btn-danger delete-soft-rule\" href=\"javascript:;\">Remove</a></td>');
        \$(\"#pay-elements-tbody\").append(\$tr);

        \$tr.find(\"select\").select2();
        updateTypesOfValues();

    }

    \$(function() {

        \$(\"body\").on('change', \".type-of-rule\", function(e) {
            updateTypesOfValues();
        });

        \$(\"body\").on('click', \".delete-soft-rule\", function(e) {
            \$(this).parents('tr').remove();
        });

        updateTypesOfValues();
    })

    
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 67
        echo "        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Edit pay element</h1>         
        <div id=\"description_help\">Please describe your pay element as accurately as possible.</div>
    </div>
    
    ";
        // line 74
        if (twig_get_attribute($this->env, $this->source, (isset($context["payElement"]) || array_key_exists("payElement", $context) ? $context["payElement"] : (function () { throw new RuntimeError('Variable "payElement" does not exist.', 74, $this->source); })()), "hasHardCodedRules", [], "method", false, false, false, 74)) {
            // line 75
            echo "        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"alert alert-info\">This pay element cannot be removed because it has some hard coded rules.</div>
            </div>
        </div>
    ";
        }
        // line 81
        echo "    
    
    ";
        // line 83
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal", "novalidate" => "true", "id" => "new-pay element-form"]]);
        echo "
    ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 84, $this->source); })()), 'errors');
        echo "
    
    <div class=\"row\">
        
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Your pay element</h5>
                </div>
                <div class=\"widget-content nopadding\">

                    <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "payElement", [], "any", false, false, false, 99), 'label');
        echo "</label>
                        <div class=\"controls\">
                            ";
        // line 101
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 101, $this->source); })()), "payElement", [], "any", false, false, false, 101), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "mandatory", [], "any", false, false, false, 105), 'label');
        echo "</label>
                        <div class=\"controls\">
                            ";
        // line 107
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), "mandatory", [], "any", false, false, false, 107), 'widget');
        echo "
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>           
    </div>
    
    <div class=\"row\">
        
        <div class=\"col-xs-12\">
            <a class=\"btn btn-primary pull-right\" href=\"javascript:addSoftRule()\">Add a trigger</a>
        </div>
    </div>
    <div class=\"row\">
        
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Soft triggers</h5>
                </div>

                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"pay-elements_list\">
                        <thead>
                            <tr>
                                <th>Type of trigger</th>
                                <th>Value</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody id=\"pay-elements-tbody\" data-count=\"";
        // line 144
        echo twig_escape_filter($this->env, _twig_default_filter(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 144, $this->source); })()), "softRules", [], "any", false, false, false, 144)), 0), "html", null, true);
        echo "\">
                        
                            ";
        // line 146
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 146, $this->source); })()), "softRules", [], "any", false, false, false, 146));
        foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
            // line 147
            echo "                                <tr>
                                    <td>";
            // line 148
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["rule"], "typeOfRule", [], "any", false, false, false, 148), 'widget', ["attr" => ["class" => "type-of-rule"]]);
            echo "</td>
                                    <td>
                                        ";
            // line 150
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["rule"], "typeOfValue", [], "any", false, false, false, 150), 'widget', ["attr" => ["class" => "type-of-value"]]);
            echo "
                                        ";
            // line 151
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["rule"], "value", [], "any", false, false, false, 151), 'widget', ["attr" => ["class" => "rule-value"]]);
            echo "
                                    </td>
                                    <td><a class=\"btn btn-danger delete-soft-rule\" href=\"javascript:;\">Remove</a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 156
        echo "                        </tbody>
                    </table>
                    <div class=\"alert alert-info\">You can find some help regarding regexp by clicking the following link : <a target=\"_blank\" href=\"https://www.icewarp.com/support/online_help/203030104.htm\">https://www.icewarp.com/support/online_help/203030104.htm</a></div>
                </div>
            </div>
        </div>           
    </div>

    <div class=\"row\">
        
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Hard coded triggers</h5>
                </div>

                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"pay-elements_list\">
                        <thead>
                            <tr>
                                <th>Trigger</th>
                                <th>Code</th>
                            </tr>
                        </thead>

                        <tbody>
                        
                            ";
        // line 186
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["payElement"]) || array_key_exists("payElement", $context) ? $context["payElement"] : (function () { throw new RuntimeError('Variable "payElement" does not exist.', 186, $this->source); })()), "hardRules", [], "any", false, false, false, 186));
        foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
            // line 187
            echo "                                <tr>
                                    <td>Trigger ";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "id", [], "any", false, false, false, 188), "html", null, true);
            echo " :</td>
                                    <td><pre><code class=\"language-php\">";
            // line 189
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "algorithm", [], "any", false, false, false, 189), "html", null, true);
            echo "</code></pre></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 192
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>           
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <input type=\"submit\" class=\"btn btn-primary\" />
        </div>
    </div>

    ";
        // line 205
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 205, $this->source); })()), 'form_end');
        echo "
</div>
   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetHris/Ejint096PayElements/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 205,  363 => 192,  354 => 189,  350 => 188,  347 => 187,  343 => 186,  311 => 156,  300 => 151,  296 => 150,  291 => 148,  288 => 147,  284 => 146,  279 => 144,  239 => 107,  234 => 105,  227 => 101,  222 => 99,  204 => 84,  200 => 83,  196 => 81,  188 => 75,  186 => 74,  177 => 67,  167 => 66,  126 => 32,  121 => 30,  116 => 28,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetHris/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Edit pay element{% endblock %}

{% block specificJs %}{{ parent() }}

<script type=\"text/javascript\">

    jQuery.fn.outerHTML = function(s) {
    return (s)
      ? this.before(s).remove()
      : jQuery(\"<p>\").append(this.eq(0).clone()).html();
    }

    var updateTypesOfValues = function() {
        \$(\"option[value=type_of_value]:selected\").parents('tr').find('.rule-value').hide();
        \$(\"option[value=type_of_value]:selected\").parents('tr').find('.type-of-value').show();

        \$(\"option[value=type_of_value]:not(:selected)\").parents('tr').find('.rule-value').show();
        \$(\"option[value=type_of_value]:not(:selected)\").parents('tr').find('.type-of-value').hide();
    }

    var addSoftRule = function() {
        var count = \$(\"#pay-elements-tbody\").data('count');
        \$(\"#pay-elements-tbody\").data('count', count+1);

        var typeOfRule = \$(\"{{ form_widget(form.softRules.vars.prototype.typeOfRule)|e('js') }}\".replace(/__name__/g, count));
        typeOfRule.addClass('type-of-rule').css({ width: \"100%\"});
        var typeOfValue = \$(\"{{ form_widget(form.softRules.vars.prototype.typeOfValue)|e('js') }}\".replace(/__name__/g, count));
        typeOfValue.addClass('type-of-value');
        var value = \$(\"{{ form_widget(form.softRules.vars.prototype.value)|e('js') }}\".replace(/__name__/g, count));
        value.addClass('rule-value');

        var \$tr = \$('<tr>');
        \$tr.append('<td>' + typeOfRule.outerHTML() + '</td>');
        \$tr.append('<td>' + typeOfValue.outerHTML() + value.outerHTML() + '</td>');
        \$tr.append('<td><a class=\"btn btn-danger delete-soft-rule\" href=\"javascript:;\">Remove</a></td>');
        \$(\"#pay-elements-tbody\").append(\$tr);

        \$tr.find(\"select\").select2();
        updateTypesOfValues();

    }

    \$(function() {

        \$(\"body\").on('change', \".type-of-rule\", function(e) {
            updateTypesOfValues();
        });

        \$(\"body\").on('click', \".delete-soft-rule\", function(e) {
            \$(this).parents('tr').remove();
        });

        updateTypesOfValues();
    })

    
</script>

{% endblock specificJs %}
        


{% block container %}
        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Edit pay element</h1>         
        <div id=\"description_help\">Please describe your pay element as accurately as possible.</div>
    </div>
    
    {% if payElement.hasHardCodedRules() %}
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"alert alert-info\">This pay element cannot be removed because it has some hard coded rules.</div>
            </div>
        </div>
    {% endif %}
    
    
    {{ form_start(form, {'attr': {'class': 'form-horizontal', 'novalidate' : 'true', 'id' : \"new-pay element-form\"}} ) }}
    {{ form_errors(form) }}
    
    <div class=\"row\">
        
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Your pay element</h5>
                </div>
                <div class=\"widget-content nopadding\">

                    <div class=\"form-group\">
                        <label class=\"control-label\">{{ form_label(form.payElement) }}</label>
                        <div class=\"controls\">
                            {{ form_widget(form.payElement) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">{{ form_label(form.mandatory) }}</label>
                        <div class=\"controls\">
                            {{ form_widget(form.mandatory) }}
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>           
    </div>
    
    <div class=\"row\">
        
        <div class=\"col-xs-12\">
            <a class=\"btn btn-primary pull-right\" href=\"javascript:addSoftRule()\">Add a trigger</a>
        </div>
    </div>
    <div class=\"row\">
        
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Soft triggers</h5>
                </div>

                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"pay-elements_list\">
                        <thead>
                            <tr>
                                <th>Type of trigger</th>
                                <th>Value</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody id=\"pay-elements-tbody\" data-count=\"{{ form.softRules|length|default(0) }}\">
                        
                            {% for rule in form.softRules %}
                                <tr>
                                    <td>{{ form_widget(rule.typeOfRule, { 'attr': {'class': 'type-of-rule'} }) }}</td>
                                    <td>
                                        {{ form_widget(rule.typeOfValue, { 'attr': {'class': 'type-of-value'} }) }}
                                        {{ form_widget(rule.value, { 'attr': {'class': 'rule-value'} }) }}
                                    </td>
                                    <td><a class=\"btn btn-danger delete-soft-rule\" href=\"javascript:;\">Remove</a></td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                    <div class=\"alert alert-info\">You can find some help regarding regexp by clicking the following link : <a target=\"_blank\" href=\"https://www.icewarp.com/support/online_help/203030104.htm\">https://www.icewarp.com/support/online_help/203030104.htm</a></div>
                </div>
            </div>
        </div>           
    </div>

    <div class=\"row\">
        
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Hard coded triggers</h5>
                </div>

                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"pay-elements_list\">
                        <thead>
                            <tr>
                                <th>Trigger</th>
                                <th>Code</th>
                            </tr>
                        </thead>

                        <tbody>
                        
                            {% for rule in payElement.hardRules %}
                                <tr>
                                    <td>Trigger {{ rule.id }} :</td>
                                    <td><pre><code class=\"language-php\">{{ rule.algorithm }}</code></pre></td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>           
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <input type=\"submit\" class=\"btn btn-primary\" />
        </div>
    </div>

    {{ form_end(form) }}
</div>
   
{% endblock container %}", "@EasyjetHris/Ejint096PayElements/edit.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\HrisBundle\\Resources\\views\\Ejint096PayElements\\edit.html.twig");
    }
}
