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

/* @EasyjetUman/Employess/edit.html.twig */
class __TwigTemplate_5a25f778f4906cdc0b858f2966ae71c2bf35fb39e42d0f6ee23b806ddbea8c2a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetUman/Employess/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetUman/Employess/edit.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetUman/Employess/edit.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetUman/Base/structure.html.twig", "@EasyjetUman/Employess/edit.html.twig", 1);
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
        <h1 id=\"titre_help\">Set an external user as Switzerland based user</h1>
        <div id=\"description_help\">Please fill the information below in order to validate the user</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 20
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 20, $context, $this->getSourceContext());
        echo "
        </div>
    </div>

    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
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
        // line 42
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 42, $this->source); })()), "logUser", [], "any", false, false, false, 42), "html", null, true);
        echo "
                            </span>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">User Name :</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                ";
        // line 51
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 51, $this->source); })()), "nomUser", [], "any", false, false, false, 51), "html", null, true);
        echo "
                            </span>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">User first name :</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                ";
        // line 60
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 60, $this->source); })()), "prenomUser", [], "any", false, false, false, 60), "html", null, true);
        echo "
                            </span>
                        </div>
                    </div>


                     <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "email_user", [], "any", false, false, false, 67), 'label');
        echo " :</label>
                        <div class=\"controls\">
                            ";
        // line 69
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "email_user", [], "any", false, false, false, 69), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div> 

                    <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), "personal_email_user", [], "any", false, false, false, 74), 'label');
        echo " :</label>
                        <div class=\"controls\">
                            ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "personal_email_user", [], "any", false, false, false, 76), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div> 

                    <div class=\"form-group\">
                        <label class=\"control-label\">Station :</label>                
                        <div class=\"controls\">
                            <select name=\"stations\">
                            <option value=\"0\" >Select a station</option>
                            ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["stations"]) || array_key_exists("stations", $context) ? $context["stations"] : (function () { throw new RuntimeError('Variable "stations" does not exist.', 85, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["station"]) {
            // line 86
            echo "                               <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "idStation", [], "any", false, false, false, 86), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["station"], "idStation", [], "any", false, false, false, 86), (isset($context["selectedStation"]) || array_key_exists("selectedStation", $context) ? $context["selectedStation"] : (function () { throw new RuntimeError('Variable "selectedStation" does not exist.', 86, $this->source); })())))) {
                echo "selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "iataCode", [], "any", false, false, false, 86), "html", null, true);
            echo "</option>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['station'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\" >eFTR type :</label>                
                        <div class=\"controls\">
                            <select name=\"typesEftr\"  id=\"typesEftr\">
                                <option value=\"0\" >Select a type</option>
                                ";
        // line 97
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typesEftr"]) || array_key_exists("typesEftr", $context) ? $context["typesEftr"] : (function () { throw new RuntimeError('Variable "typesEftr" does not exist.', 97, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["eftr"]) {
            // line 98
            echo "                                    <option value = \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eftr"], "id", [], "any", false, false, false, 98), "html", null, true);
            echo "\" ";
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["eftr"], "id", [], "any", false, false, false, 98), (isset($context["selTypesEftr"]) || array_key_exists("selTypesEftr", $context) ? $context["selTypesEftr"] : (function () { throw new RuntimeError('Variable "selTypesEftr" does not exist.', 98, $this->source); })())))) {
                echo "selected=\"selected\"";
            }
            echo " >";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eftr"], "type", [], "any", false, false, false, 98), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eftr'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">User with admin function :</label>                
                        <div class=\"controls\">
                            <input type=\"radio\" ";
        // line 107
        if ((0 === twig_compare((isset($context["adminFunction"]) || array_key_exists("adminFunction", $context) ? $context["adminFunction"] : (function () { throw new RuntimeError('Variable "adminFunction" does not exist.', 107, $this->source); })()), 1))) {
            echo " checked ";
        }
        echo " name=\"admin_function\" value=\"1\">Yes
                            <input type=\"radio\" ";
        // line 108
        if ((0 === twig_compare((isset($context["adminFunction"]) || array_key_exists("adminFunction", $context) ? $context["adminFunction"] : (function () { throw new RuntimeError('Variable "adminFunction" does not exist.', 108, $this->source); })()), 0))) {
            echo " checked ";
        }
        echo " name=\"admin_function\" value=\"0\">No
                       </div>
                    </div>

                   ";
        // line 112
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 112, $this->source); })()), 'widget');
        echo "
                   
                    <div class=\"form-actions\">
                        <input type=\"submit\" class=\"btn btn-primary\" />
                    </div>

                </div>
            </div>
        </div>
    </div>
   
    ";
        // line 123
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 123, $this->source); })()), 'form_end');
        echo "
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetUman/Employess/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  304 => 123,  290 => 112,  281 => 108,  275 => 107,  266 => 100,  251 => 98,  247 => 97,  236 => 88,  221 => 86,  217 => 85,  205 => 76,  200 => 74,  192 => 69,  187 => 67,  177 => 60,  165 => 51,  153 => 42,  132 => 24,  125 => 20,  114 => 11,  104 => 10,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetUman/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Validate an extarnal user{% endblock %}

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
                        <label class=\"control-label\">User Name :</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                {{ user.nomUser }}
                            </span>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">User first name :</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                {{ user.prenomUser }}
                            </span>
                        </div>
                    </div>


                     <div class=\"form-group\">
                        <label class=\"control-label\">{{ form_label(form.email_user) }} :</label>
                        <div class=\"controls\">
                            {{ form_widget(form.email_user, { 'attr': {'class': 'form-control'} }) }}
                        </div>
                    </div> 

                    <div class=\"form-group\">
                        <label class=\"control-label\">{{ form_label(form.personal_email_user) }} :</label>
                        <div class=\"controls\">
                            {{ form_widget(form.personal_email_user, { 'attr': {'class': 'form-control'} }) }}
                        </div>
                    </div> 

                    <div class=\"form-group\">
                        <label class=\"control-label\">Station :</label>                
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
                        <label class=\"control-label\" >eFTR type :</label>                
                        <div class=\"controls\">
                            <select name=\"typesEftr\"  id=\"typesEftr\">
                                <option value=\"0\" >Select a type</option>
                                {% for eftr in typesEftr %}
                                    <option value = \"{{ eftr.id }}\" {% if eftr.id == selTypesEftr %}selected=\"selected\"{% endif %} >{{ eftr.type }}</option>
                                {% endfor %}
                            </select>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">User with admin function :</label>                
                        <div class=\"controls\">
                            <input type=\"radio\" {% if adminFunction == 1 %} checked {% endif %} name=\"admin_function\" value=\"1\">Yes
                            <input type=\"radio\" {% if adminFunction == 0 %} checked {% endif %} name=\"admin_function\" value=\"0\">No
                       </div>
                    </div>

                   {{ form_widget(form) }}
                   
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
", "@EasyjetUman/Employess/edit.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\UmanBundle\\Resources\\views\\Employess\\edit.html.twig");
    }
}
