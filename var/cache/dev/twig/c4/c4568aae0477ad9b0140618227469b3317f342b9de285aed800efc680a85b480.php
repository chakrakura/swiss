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

/* @EasyjetSwissinsideCore/login/login.html.twig */
class __TwigTemplate_20ae53cb4ee2a4bd50e38d8b93100d7ac89a255beeccd206dcfb4ae9bbfe2afb extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'specificJs' => [$this, 'block_specificJs'],
            'specificCss' => [$this, 'block_specificCss'],
            'generalMenu' => [$this, 'block_generalMenu'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSwissinsideCore/login/login.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSwissinsideCore/login/login.html.twig"));

        $this->parent = $this->loadTemplate("@EasyjetSwissinsideCore/Base/structure.html.twig", "@EasyjetSwissinsideCore/login/login.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_specificJs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificJs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificJs"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_specificCss($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificCss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificCss"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 10
    public function block_generalMenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generalMenu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "generalMenu"));

        // line 11
        echo "
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
<div class=\"row\">
    <div class=\"col-lg-offset-4 col-lg-4\">
        <div class=\"widget-box\">
            <div class=\"widget-title\">
                <span class=\"icon\">
                    <i class=\"icon-key\"></i>
                </span>
                <h5>Authentication</h5>
            </div>
            <div class=\"widget-content nopadding\">
                <form class=\"form-horizontal\"  action=\"\" method=\"post\" autocomplete=\"off\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" />

                        <div class=\"form-group\">
                            ";
        // line 30
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "                                <div class=\"alert alert-danger login-error-message\">
                                    ";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new RuntimeError('Variable "error" does not exist.', 32, $this->source); })()), "message", [], "any", false, false, false, 32), "html", null, true);
            echo "
                                </div>
                            ";
        }
        // line 35
        echo "                            <label for=\"\" class=\"control-label hover\">User</label>
                            <div class=\"controls\">
                                <div class=\"input-group input-group-sm\">
                                    <span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
                                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" placeholder=\"Username\" autocomplete=\"off\" />
                                </div>
                                <span class=\"help-block text-left\">Use your Europe credentials (like for the crew portal)</span>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"\" class=\"control-label hover\">Password</label>
                            <div class=\"controls\">
                                <div class=\"input-group input-group-sm\">
                                    <span class=\"input-group-addon\"><i class=\"icon-lock\"></i></span>
                                    <input class=\"form-control\" type=\"password\" id=\"password\"  name=\"_password\" placeholder=\"Password\" autocomplete=\"off\" />
                                </div>
                            </div>
                        </div>

                    <div class=\"form-actions\">
                            <input type=\"submit\" class=\"btn btn-primary btn-default\" value=\"Login\" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetSwissinsideCore/login/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 35,  153 => 32,  150 => 31,  148 => 30,  142 => 27,  128 => 15,  118 => 14,  107 => 11,  97 => 10,  79 => 7,  61 => 4,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@EasyjetSwissinsideCore/Base/structure.html.twig\" %}


{% block specificJs %}
{% endblock specificJs %}

{% block specificCss %}
{% endblock specificCss %}

{% block generalMenu %}

{% endblock %}

{% block container %}

<div class=\"row\">
    <div class=\"col-lg-offset-4 col-lg-4\">
        <div class=\"widget-box\">
            <div class=\"widget-title\">
                <span class=\"icon\">
                    <i class=\"icon-key\"></i>
                </span>
                <h5>Authentication</h5>
            </div>
            <div class=\"widget-content nopadding\">
                <form class=\"form-horizontal\"  action=\"\" method=\"post\" autocomplete=\"off\">
                        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\" />

                        <div class=\"form-group\">
                            {% if error %}
                                <div class=\"alert alert-danger login-error-message\">
                                    {{ error.message }}
                                </div>
                            {% endif %}
                            <label for=\"\" class=\"control-label hover\">User</label>
                            <div class=\"controls\">
                                <div class=\"input-group input-group-sm\">
                                    <span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
                                    <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" placeholder=\"Username\" autocomplete=\"off\" />
                                </div>
                                <span class=\"help-block text-left\">Use your Europe credentials (like for the crew portal)</span>
                            </div>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"\" class=\"control-label hover\">Password</label>
                            <div class=\"controls\">
                                <div class=\"input-group input-group-sm\">
                                    <span class=\"input-group-addon\"><i class=\"icon-lock\"></i></span>
                                    <input class=\"form-control\" type=\"password\" id=\"password\"  name=\"_password\" placeholder=\"Password\" autocomplete=\"off\" />
                                </div>
                            </div>
                        </div>

                    <div class=\"form-actions\">
                            <input type=\"submit\" class=\"btn btn-primary btn-default\" value=\"Login\" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

{% endblock container %}
", "@EasyjetSwissinsideCore/login/login.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\SwissinsideCoreBundle\\Resources\\views\\login\\login.html.twig");
    }
}
