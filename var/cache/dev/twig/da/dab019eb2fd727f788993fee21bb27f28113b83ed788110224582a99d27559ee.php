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

/* @EasyjetOtp/OtpDropBatch/index.html.twig */
class __TwigTemplate_b94907343124aa40328982233b3055ff0e318428b24ad2e5078e5953405e9fed extends Template
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
        return "EasyjetOtpBundle:Base:structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/OtpDropBatch/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/OtpDropBatch/index.html.twig"));

        $this->parent = $this->loadTemplate("EasyjetOtpBundle:Base:structure.html.twig", "@EasyjetOtp/OtpDropBatch/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Drop import batch";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
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
    \$(function() {
        \$(\"#otp-finalize-drop\").on(\"click\", function(e) {
            e.preventDefault();
            bootbox.confirm(\"This will remove an entire import. Are you really sure to proceed ?\", function(validation) {
                if (validation === true) {
                    \$(\"#drop-otp-file-form button\").attr('disabled', 'disabled');
                    \$(\"#drop-otp-file-form\").submit();
                }
            });
        });
    });
    </script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 23
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 24
        echo "        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Drop batch</h1>         
        <div id=\"description_help\">This is the section where you can remove entire batch. Please be very carefull with this section. In case of mistake you could contact an administrator for a data recovery</div>
    </div>

    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "session", [], "any", false, false, false, 31), "flashbag", [], "any", false, false, false, 31), "get", [0 => "otp-drop-error"], "method", false, false, false, 31));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 32
            echo "        ";
            // line 33
            echo "        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"alert alert-danger\">
                        <button class=\"close\" data-dismiss=\"alert\">×</button>
                        <strong>Notice</strong> ";
            // line 37
            echo $context["flashMessage"];
            echo "
                </div>
            </div>
        </div>
        
        ";
            // line 43
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "
    <div class=\"col-xs-12\">
        ";
        // line 46
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["macros"]) || array_key_exists("macros", $context) ? $context["macros"] : (function () { throw new RuntimeError('Variable "macros" does not exist.', 46, $this->source); })()), "wizz", [], "method", false, false, false, 46), "html", null, true);
        echo "
    </div>  
    
    ";
        // line 49
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal", "id" => "drop-otp-file-form"]]);
        echo "
    ";
        // line 50
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'errors');
        echo "
        
    <div class=\"row\">
        
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Drop a batch</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'widget');
        echo "
                    
                    <div class=\"form-actions\">
                        <button type=\"submit\" name=\"send-share\" class=\"btn btn-danger\" id=\"otp-finalize-drop\"><i class=\"icon-remove\"></i> Drop batch</button>
                    </div>
                </div>
            </div>
        </div>           
    </div>

    ";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_end');
        echo "
</div>
   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetOtp/OtpDropBatch/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 73,  189 => 63,  173 => 50,  169 => 49,  163 => 46,  159 => 44,  153 => 43,  145 => 37,  139 => 33,  137 => 32,  133 => 31,  124 => 24,  114 => 23,  79 => 4,  60 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"EasyjetOtpBundle:Base:structure.html.twig\" %}
{% block title %}Drop import batch{% endblock %}

{% block specificJs %}{{ parent() }}
    <script type=\"text/javascript\">
    \$(function() {
        \$(\"#otp-finalize-drop\").on(\"click\", function(e) {
            e.preventDefault();
            bootbox.confirm(\"This will remove an entire import. Are you really sure to proceed ?\", function(validation) {
                if (validation === true) {
                    \$(\"#drop-otp-file-form button\").attr('disabled', 'disabled');
                    \$(\"#drop-otp-file-form\").submit();
                }
            });
        });
    });
    </script>

{% endblock specificJs %}
        


{% block container %}
        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Drop batch</h1>         
        <div id=\"description_help\">This is the section where you can remove entire batch. Please be very carefull with this section. In case of mistake you could contact an administrator for a data recovery</div>
    </div>

    {% for flashMessage in app.session.flashbag.get('otp-drop-error') %}
        {% autoescape false %}
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"alert alert-danger\">
                        <button class=\"close\" data-dismiss=\"alert\">×</button>
                        <strong>Notice</strong> {{ flashMessage }}
                </div>
            </div>
        </div>
        
        {% endautoescape %}
    {% endfor %}

    <div class=\"col-xs-12\">
        {{ macros.wizz() }}
    </div>  
    
    {{ form_start(form, {'attr': {'class': 'form-horizontal', 'id': 'drop-otp-file-form'}} ) }}
    {{ form_errors(form) }}
        
    <div class=\"row\">
        
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Drop a batch</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    {{ form_widget(form) }}
                    
                    <div class=\"form-actions\">
                        <button type=\"submit\" name=\"send-share\" class=\"btn btn-danger\" id=\"otp-finalize-drop\"><i class=\"icon-remove\"></i> Drop batch</button>
                    </div>
                </div>
            </div>
        </div>           
    </div>

    {{ form_end(form) }}
</div>
   
{% endblock container %}", "@EasyjetOtp/OtpDropBatch/index.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\OtpBundle\\Resources\\views\\OtpDropBatch\\index.html.twig");
    }
}
