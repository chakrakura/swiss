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

/* @EasyjetHris/Ejint096DemographicData/edit.html.twig */
class __TwigTemplate_16388133e9fcd480ad6503d3784fd95a710dd60570ca8d858516b5b2e730d664 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/Ejint096DemographicData/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/Ejint096DemographicData/edit.html.twig"));

        $this->parent = $this->loadTemplate("@EasyjetHris/Base/structure.html.twig", "@EasyjetHris/Ejint096DemographicData/edit.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Edit demographic data";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
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
        var count = \$(\"#demographic-data-tbody\").data('count');
        \$(\"#demographic-data-tbody\").data('count', count+1);

        var typeOfRule = \$(\"";
        // line 27
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "softRules", [], "any", false, false, false, 27), "vars", [], "any", false, false, false, 27), "prototype", [], "any", false, false, false, 27), "typeOfRule", [], "any", false, false, false, 27), 'widget'), "js"), "html", null, true);
        echo "\".replace(/__name__/g, count));
        typeOfRule.addClass('type-of-rule').css({ width: \"100%\"});
        
        var value = \$(\"";
        // line 30
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "softRules", [], "any", false, false, false, 30), "vars", [], "any", false, false, false, 30), "prototype", [], "any", false, false, false, 30), "value", [], "any", false, false, false, 30), 'widget'), "js"), "html", null, true);
        echo "\".replace(/__name__/g, count));
        value.addClass('rule-value');

        var \$tr = \$('<tr>');
        \$tr.append('<td>' + typeOfRule.outerHTML() + '</td>');
        \$tr.append('<td>' + value.outerHTML() + '</td>');
        \$tr.append('<td><a class=\"btn btn-danger delete-soft-rule\" href=\"javascript:;\">Remove</a></td>');
        \$(\"#demographic-data-tbody\").append(\$tr);

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

    // line 64
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 65
        echo "        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Edit demographic data</h1>         
        <div id=\"description_help\">Please describe your demographic data as accurately as possible.</div>
    </div>
    
    ";
        // line 72
        if (twig_get_attribute($this->env, $this->source, (isset($context["demographicData"]) || array_key_exists("demographicData", $context) ? $context["demographicData"] : (function () { throw new RuntimeError('Variable "demographicData" does not exist.', 72, $this->source); })()), "hasHardCodedRules", [], "method", false, false, false, 72)) {
            // line 73
            echo "        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"alert alert-info\">This demographic data cannot be removed because it has some hard coded rules.</div>
            </div>
        </div>
    ";
        }
        // line 79
        echo "    
    
    ";
        // line 81
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal", "novalidate" => "true", "id" => "new-demographic data-form"]]);
        echo "
    ";
        // line 82
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 82, $this->source); })()), 'errors');
        echo "
    
    <div class=\"row\">
        
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Your demographic data</h5>
                </div>
                <div class=\"widget-content nopadding\">

                    <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), "demographicData", [], "any", false, false, false, 97), 'label');
        echo "</label>
                        <div class=\"controls\">
                            ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 99, $this->source); })()), "demographicData", [], "any", false, false, false, 99), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 103, $this->source); })()), "oracleField", [], "any", false, false, false, 103), 'label');
        echo "</label>
                        <div class=\"controls\">
                            ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 105, $this->source); })()), "oracleField", [], "any", false, false, false, 105), 'widget');
        echo "
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "mandatory", [], "any", false, false, false, 109), 'label');
        echo "</label>
                        <div class=\"controls\">
                            ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 111, $this->source); })()), "mandatory", [], "any", false, false, false, 111), 'widget');
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
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"demographic-data_list\">
                        <thead>
                            <tr>
                                <th>Type of trigger</th>
                                <th>Value</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody id=\"demographic-data-tbody\" data-count=\"";
        // line 147
        echo twig_escape_filter($this->env, _twig_default_filter(twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 147, $this->source); })()), "softRules", [], "any", false, false, false, 147)), 0), "html", null, true);
        echo "\">
                        
                            ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "softRules", [], "any", false, false, false, 149));
        foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
            // line 150
            echo "                                <tr>
                                    <td>";
            // line 151
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["rule"], "typeOfRule", [], "any", false, false, false, 151), 'widget', ["attr" => ["class" => "type-of-rule"]]);
            echo "</td>
                                    <td>
                                        ";
            // line 153
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["rule"], "value", [], "any", false, false, false, 153), 'widget', ["attr" => ["class" => "rule-value"]]);
            echo "
                                    </td>
                                    <td><a class=\"btn btn-danger delete-soft-rule\" href=\"javascript:;\">Remove</a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
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
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"demographic-data_list\">
                        <thead>
                            <tr>
                                <th>Trigger</th>
                                <th>Code</th>
                            </tr>
                        </thead>

                        <tbody>
                        
                            ";
        // line 188
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["demographicData"]) || array_key_exists("demographicData", $context) ? $context["demographicData"] : (function () { throw new RuntimeError('Variable "demographicData" does not exist.', 188, $this->source); })()), "hardRules", [], "any", false, false, false, 188));
        foreach ($context['_seq'] as $context["_key"] => $context["rule"]) {
            // line 189
            echo "                                <tr>
                                    <td>Trigger ";
            // line 190
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "id", [], "any", false, false, false, 190), "html", null, true);
            echo " :</td>
                                    <td><pre><code class=\"language-php\">";
            // line 191
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["rule"], "algorithm", [], "any", false, false, false, 191), "html", null, true);
            echo "</code></pre></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rule'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 194
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
        // line 207
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), 'form_end');
        echo "
</div>
   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetHris/Ejint096DemographicData/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  378 => 207,  363 => 194,  354 => 191,  350 => 190,  347 => 189,  343 => 188,  311 => 158,  300 => 153,  295 => 151,  292 => 150,  288 => 149,  283 => 147,  244 => 111,  239 => 109,  232 => 105,  227 => 103,  220 => 99,  215 => 97,  197 => 82,  193 => 81,  189 => 79,  181 => 73,  179 => 72,  170 => 65,  160 => 64,  119 => 30,  113 => 27,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetHris/Base/structure.html.twig' %}

{% block title %}Edit demographic data{% endblock %}

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
        var count = \$(\"#demographic-data-tbody\").data('count');
        \$(\"#demographic-data-tbody\").data('count', count+1);

        var typeOfRule = \$(\"{{ form_widget(form.softRules.vars.prototype.typeOfRule)|e('js') }}\".replace(/__name__/g, count));
        typeOfRule.addClass('type-of-rule').css({ width: \"100%\"});
        
        var value = \$(\"{{ form_widget(form.softRules.vars.prototype.value)|e('js') }}\".replace(/__name__/g, count));
        value.addClass('rule-value');

        var \$tr = \$('<tr>');
        \$tr.append('<td>' + typeOfRule.outerHTML() + '</td>');
        \$tr.append('<td>' + value.outerHTML() + '</td>');
        \$tr.append('<td><a class=\"btn btn-danger delete-soft-rule\" href=\"javascript:;\">Remove</a></td>');
        \$(\"#demographic-data-tbody\").append(\$tr);

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
        <h1 id=\"titre_help\">Edit demographic data</h1>         
        <div id=\"description_help\">Please describe your demographic data as accurately as possible.</div>
    </div>
    
    {% if demographicData.hasHardCodedRules() %}
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"alert alert-info\">This demographic data cannot be removed because it has some hard coded rules.</div>
            </div>
        </div>
    {% endif %}
    
    
    {{ form_start(form, {'attr': {'class': 'form-horizontal', 'novalidate' : 'true', 'id' : \"new-demographic data-form\"}} ) }}
    {{ form_errors(form) }}
    
    <div class=\"row\">
        
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Your demographic data</h5>
                </div>
                <div class=\"widget-content nopadding\">

                    <div class=\"form-group\">
                        <label class=\"control-label\">{{ form_label(form.demographicData) }}</label>
                        <div class=\"controls\">
                            {{ form_widget(form.demographicData) }}
                        </div>
                    </div>
                    <div class=\"form-group\">
                        <label class=\"control-label\">{{ form_label(form.oracleField) }}</label>
                        <div class=\"controls\">
                            {{ form_widget(form.oracleField) }}
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
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"demographic-data_list\">
                        <thead>
                            <tr>
                                <th>Type of trigger</th>
                                <th>Value</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody id=\"demographic-data-tbody\" data-count=\"{{ form.softRules|length|default(0) }}\">
                        
                            {% for rule in form.softRules %}
                                <tr>
                                    <td>{{ form_widget(rule.typeOfRule, { 'attr': {'class': 'type-of-rule'} }) }}</td>
                                    <td>
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
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"demographic-data_list\">
                        <thead>
                            <tr>
                                <th>Trigger</th>
                                <th>Code</th>
                            </tr>
                        </thead>

                        <tbody>
                        
                            {% for rule in demographicData.hardRules %}
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
   
{% endblock container %}", "@EasyjetHris/Ejint096DemographicData/edit.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\HrisBundle\\Resources\\views\\Ejint096DemographicData\\edit.html.twig");
    }
}
