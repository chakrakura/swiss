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

/* @EasyjetUman/ExternalUsers/edit.html.twig */
class __TwigTemplate_fd625e8dcb98b829dec2b2890cec73ad3bdaea49b1f92ea71d0a9b5e9c38bbf6 extends Template
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
        return "@EasyjetUman/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetUman/ExternalUsers/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetUman/ExternalUsers/edit.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetUman/ExternalUsers/edit.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetUman/Base/structure.html.twig", "@EasyjetUman/ExternalUsers/edit.html.twig", 1);
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

        echo "Edit an extarnal user";
        
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

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 13
        echo "
<div id=\"content\">

    <div id=\"content-header\">
        <h1 id=\"titre_help\">Set an external user as Switzerland based user</h1>
        <div id=\"description_help\">Please fill the information below in order to validate the user</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 23
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 23, $context, $this->getSourceContext());
        echo "
        </div>
    </div>

    ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "

    <div class=\"row\">

        <div class=\"col-xs-12\">

            <div class=\"widget-box\">

                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Validate user</h5>
                </div>

                <div class=\"widget-content nopadding\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Employee Id :</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                ";
        // line 47
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 47, $this->source); })()), "logUser", [], "any", false, false, false, 47), "html", null, true);
        echo "
                            </span>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">First name :</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                ";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "prenomUser", [], "any", false, false, false, 56), "html", null, true);
        echo "
                            </span>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Last name :</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                ";
        // line 65
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 65, $this->source); })()), "nomUser", [], "any", false, false, false, 65), "html", null, true);
        echo "
                            </span>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Id station :</label>                
                        <div class=\"controls\">
                            <select name=\"stations\">
                            ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stations"]) || array_key_exists("stations", $context) ? $context["stations"] : (function () { throw new RuntimeError('Variable "stations" does not exist.', 74, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["station"]) {
            // line 75
            echo "                               <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "idStation", [], "any", false, false, false, 75), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["station"], "idStation", [], "any", false, false, false, 75), (isset($context["selectedStation"]) || array_key_exists("selectedStation", $context) ? $context["selectedStation"] : (function () { throw new RuntimeError('Variable "selectedStation" does not exist.', 75, $this->source); })())))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "iataCode", [], "any", false, false, false, 75), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['station'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >Type eftr :</label>                
                        <div class=\"controls\">
                            <select name=\"typesEftr\"  id=\"typesEftr\">
                                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typesEftr"]) || array_key_exists("typesEftr", $context) ? $context["typesEftr"] : (function () { throw new RuntimeError('Variable "typesEftr" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["eftr"]) {
            // line 86
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eftr"], "id", [], "any", false, false, false, 86), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["eftr"], "id", [], "any", false, false, false, 86), (isset($context["selTypesEftr"]) || array_key_exists("selTypesEftr", $context) ? $context["selTypesEftr"] : (function () { throw new RuntimeError('Variable "selTypesEftr" does not exist.', 86, $this->source); })())))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eftr"], "type", [], "any", false, false, false, 86), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eftr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 93, $this->source); })()), "engagementDateCustom", [], "any", false, false, false, 93), 'label');
        echo " :</label>
                        <div class=\"controls\">
                            ";
        // line 95
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 95, $this->source); })()), "engagementDateCustom", [], "any", false, false, false, 95), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div> 

                    <div class=\"form-actions\">
                        <input type=\"submit\" class=\"btn btn-primary\" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 107
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 107, $this->source); })()), 'form_end');
        echo "
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetUman/ExternalUsers/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  267 => 107,  252 => 95,  247 => 93,  240 => 88,  225 => 86,  221 => 85,  211 => 77,  196 => 75,  192 => 74,  180 => 65,  168 => 56,  156 => 47,  133 => 27,  126 => 23,  114 => 13,  104 => 12,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetUman/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Edit an extarnal user{% endblock %}

{% block specificJs %}{{ parent() }}

{% endblock specificJs %}



{% block container %}

<div id=\"content\">

    <div id=\"content-header\">
        <h1 id=\"titre_help\">Set an external user as Switzerland based user</h1>
        <div id=\"description_help\">Please fill the information below in order to validate the user</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ macros.wizz() }}
        </div>
    </div>

    {{ form_start(form, {'attr': {'class': 'form-horizontal'}} ) }}

    <div class=\"row\">

        <div class=\"col-xs-12\">

            <div class=\"widget-box\">

                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Validate user</h5>
                </div>

                <div class=\"widget-content nopadding\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">Employee Id :</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                {{ user.logUser }}
                            </span>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">First name :</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                {{ user.prenomUser }}
                            </span>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Last name :</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                {{ user.nomUser }}
                            </span>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Id station :</label>                
                        <div class=\"controls\">
                            <select name=\"stations\">
                            {% for station in stations %}
                               <option value=\"{{ station.idStation }}\" {% if station.idStation == selectedStation %}selected=\"selected\"{% endif %}>{{ station.iataCode }}</option>
                            {% endfor %}
                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >Type eftr :</label>                
                        <div class=\"controls\">
                            <select name=\"typesEftr\"  id=\"typesEftr\">
                                {% for eftr in typesEftr %}
                                    <option value=\"{{ eftr.id }}\" {% if eftr.id == selTypesEftr %}selected=\"selected\"{% endif %}>{{ eftr.type }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">{{ form_label(form.engagementDateCustom) }} :</label>
                        <div class=\"controls\">
                            {{ form_widget(form.engagementDateCustom, { 'attr': {'class': 'form-control'} }) }}
                        </div>
                    </div> 

                    <div class=\"form-actions\">
                        <input type=\"submit\" class=\"btn btn-primary\" />
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{ form_end(form) }}
</div>

{% endblock container %}
", "@EasyjetUman/ExternalUsers/edit.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\UmanBundle\\Resources\\views\\ExternalUsers\\edit.html.twig");
    }
}
