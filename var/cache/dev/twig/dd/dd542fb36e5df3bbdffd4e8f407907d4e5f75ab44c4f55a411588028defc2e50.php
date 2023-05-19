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

/* @EasyjetUman/ThirdPartyUsers/edit.html.twig */
class __TwigTemplate_f9328d0e04220317c90ea68591447b9640b6f9b0f2e843687246b5f52e5a11fa extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetUman/ThirdPartyUsers/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetUman/ThirdPartyUsers/edit.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetUman/ThirdPartyUsers/edit.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetUman/Base/structure.html.twig", "@EasyjetUman/ThirdPartyUsers/edit.html.twig", 1);
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

        echo "Validate an extarnal user";
        
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
    swissinside.menuSelected('menu_it_external_users');
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 14
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 15
        echo "
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Set an external user as Switzerland based user</h1>
        <div id=\"description_help\">Please fill the information below in order to validate the user</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 24
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 24, $context, $this->getSourceContext());
        echo "
        </div>
    </div>

    ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
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
                        <label class=\"control-label\">";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 43, $this->source); })()), "logUser", [], "any", false, false, false, 43), 'label');
        echo " :</label>
                        <div class=\"controls\">
                            ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 45, $this->source); })()), "logUser", [], "any", false, false, false, 45), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div> 

                    <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), "email_user", [], "any", false, false, false, 50), 'label');
        echo " :</label>
                        <div class=\"controls\">
                            ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 52, $this->source); })()), "email_user", [], "any", false, false, false, 52), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div> 

                    <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 57
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "prenomUser", [], "any", false, false, false, 57), 'label');
        echo " :</label>
                        <div class=\"controls\">
                            ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "prenomUser", [], "any", false, false, false, 59), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div> 

                    <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), "nomUser", [], "any", false, false, false, 64), 'label');
        echo " :</label>
                        <div class=\"controls\">
                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "nomUser", [], "any", false, false, false, 66), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>

                     <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 71
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 71, $this->source); })()), "telUser", [], "any", false, false, false, 71), 'label');
        echo " :</label>
                        <div class=\"controls\">
                            ";
        // line 73
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "telUser", [], "any", false, false, false, 73), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "tel2User", [], "any", false, false, false, 78), 'label');
        echo " :</label>
                        <div class=\"controls\">
                            ";
        // line 80
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "tel2User", [], "any", false, false, false, 80), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    
                    <div class=\"form-group\">
                        <label class=\"control-label\"> Station</label>                
                        <div class=\"controls\">
                            <select name=\"stations\">
                            <option value=\"0\" >Select a station</option>
                            ";
        // line 89
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stations"]) || array_key_exists("stations", $context) ? $context["stations"] : (function () { throw new RuntimeError('Variable "stations" does not exist.', 89, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["station"]) {
            // line 90
            echo "                               <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "idStation", [], "any", false, false, false, 90), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["station"], "idStation", [], "any", false, false, false, 90), (isset($context["selectedStation"]) || array_key_exists("selectedStation", $context) ? $context["selectedStation"] : (function () { throw new RuntimeError('Variable "selectedStation" does not exist.', 90, $this->source); })())))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "iataCode", [], "any", false, false, false, 90), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['station'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >eFTR type</label>                
                        <div class=\"controls\">
                            <select name=\"typesEftr\"  id=\"typesEftr\">
                              <option value=\"0\" >Select a type</option>
                                ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typesEftr"]) || array_key_exists("typesEftr", $context) ? $context["typesEftr"] : (function () { throw new RuntimeError('Variable "typesEftr" does not exist.', 101, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["eftr"]) {
            // line 102
            echo "                                     <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eftr"], "id", [], "any", false, false, false, 102), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["eftr"], "id", [], "any", false, false, false, 102), (isset($context["selTypesEftr"]) || array_key_exists("selTypesEftr", $context) ? $context["selTypesEftr"] : (function () { throw new RuntimeError('Variable "selTypesEftr" does not exist.', 102, $this->source); })())))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eftr"], "type", [], "any", false, false, false, 102), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eftr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 104
        echo "                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">User with admin function</label>                
                        <div class=\"controls\">
                            <input type=\"radio\" ";
        // line 111
        if ((0 === twig_compare((isset($context["adminFunction"]) || array_key_exists("adminFunction", $context) ? $context["adminFunction"] : (function () { throw new RuntimeError('Variable "adminFunction" does not exist.', 111, $this->source); })()), 1))) {
            echo " checked ";
        }
        echo " name=\"admin_function\" value=\"1\">Yes
                            <input type=\"radio\" ";
        // line 112
        if ((0 === twig_compare((isset($context["adminFunction"]) || array_key_exists("adminFunction", $context) ? $context["adminFunction"] : (function () { throw new RuntimeError('Variable "adminFunction" does not exist.', 112, $this->source); })()), 0))) {
            echo " checked ";
        }
        echo " name=\"admin_function\" value=\"0\">No
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
        // line 125
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), 'form_end');
        echo "
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetUman/ThirdPartyUsers/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  316 => 125,  298 => 112,  292 => 111,  283 => 104,  268 => 102,  264 => 101,  253 => 92,  238 => 90,  234 => 89,  222 => 80,  217 => 78,  209 => 73,  204 => 71,  196 => 66,  191 => 64,  183 => 59,  178 => 57,  170 => 52,  165 => 50,  157 => 45,  152 => 43,  134 => 28,  127 => 24,  116 => 15,  106 => 14,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetUman/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Validate an extarnal user{% endblock %}

{% block specificJs %}{{ parent() }}
<script type=\"text/javascript\">
    swissinside.menuSelected('menu_it_external_users');
</script>
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
                        <label class=\"control-label\">{{ form_label(form.logUser) }} :</label>
                        <div class=\"controls\">
                            {{ form_widget(form.logUser, { 'attr': {'class': 'form-control'} }) }}
                        </div>
                    </div> 

                    <div class=\"form-group\">
                        <label class=\"control-label\">{{ form_label(form.email_user) }} :</label>
                        <div class=\"controls\">
                            {{ form_widget(form.email_user, { 'attr': {'class': 'form-control'} }) }}
                        </div>
                    </div> 

                    <div class=\"form-group\">
                        <label class=\"control-label\">{{ form_label(form.prenomUser) }} :</label>
                        <div class=\"controls\">
                            {{ form_widget(form.prenomUser, { 'attr': {'class': 'form-control'} }) }}
                        </div>
                    </div> 

                    <div class=\"form-group\">
                        <label class=\"control-label\">{{ form_label(form.nomUser) }} :</label>
                        <div class=\"controls\">
                            {{ form_widget(form.nomUser, { 'attr': {'class': 'form-control'} }) }}
                        </div>
                    </div>

                     <div class=\"form-group\">
                        <label class=\"control-label\">{{ form_label(form.telUser) }} :</label>
                        <div class=\"controls\">
                            {{ form_widget(form.telUser, { 'attr': {'class': 'form-control'} }) }}
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">{{ form_label(form.tel2User) }} :</label>
                        <div class=\"controls\">
                            {{ form_widget(form.tel2User, { 'attr': {'class': 'form-control'} }) }}
                        </div>
                    </div>
                    
                    <div class=\"form-group\">
                        <label class=\"control-label\"> Station</label>                
                        <div class=\"controls\">
                            <select name=\"stations\">
                            <option value=\"0\" >Select a station</option>
                            {% for station in stations %}
                               <option value=\"{{ station.idStation }}\" {% if station.idStation == selectedStation %}selected=\"selected\"{% endif %}>{{ station.iataCode }}</option>
                            {% endfor %}
                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >eFTR type</label>                
                        <div class=\"controls\">
                            <select name=\"typesEftr\"  id=\"typesEftr\">
                              <option value=\"0\" >Select a type</option>
                                {% for eftr in typesEftr %}
                                     <option value=\"{{ eftr.id }}\" {% if eftr.id == selTypesEftr %}selected=\"selected\"{% endif %}>{{ eftr.type }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">User with admin function</label>                
                        <div class=\"controls\">
                            <input type=\"radio\" {% if adminFunction == 1 %} checked {% endif %} name=\"admin_function\" value=\"1\">Yes
                            <input type=\"radio\" {% if adminFunction == 0 %} checked {% endif %} name=\"admin_function\" value=\"0\">No
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
", "@EasyjetUman/ThirdPartyUsers/edit.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\UmanBundle\\Resources\\views\\ThirdPartyUsers\\edit.html.twig");
    }
}
