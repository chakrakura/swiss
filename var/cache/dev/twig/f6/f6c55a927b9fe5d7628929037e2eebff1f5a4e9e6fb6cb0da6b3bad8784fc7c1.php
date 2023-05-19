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

/* @EasyjetOtp/Admin/ImportBatch/index.html.twig */
class __TwigTemplate_66a1a92498a12e40573781b9c0ef30db1031dc5c96c58b9fee6af76b4e44cf18 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Admin/ImportBatch/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Admin/ImportBatch/index.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetOtp/Admin/ImportBatch/index.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetOtp/Base/structure.html.twig", "@EasyjetOtp/Admin/ImportBatch/index.html.twig", 1);
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

        echo "Import OTP excel file";
        
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
        \$(function() {
            \$(\"#import-file-form\").on('submit', function() {
                \$(\"#submit-btn\").attr('disabled', 'disabled');
            });

            \$(\"#ImportOtpFile_effectiveDate\").on(\"change\", function() {
                var effectiveDateArray = \$(this).val().split(\"/\");

                if (effectiveDateArray.length === 3) {
                    var date = new Date(effectiveDateArray[2], effectiveDateArray[1], effectiveDateArray[0]);
                    var month = parseInt(date.getMonth()) - 1;
                    var year = parseInt(date.getFullYear());
                    if (month == 0) {
                        month = 12;
                        year--;
                    }
                    if (month < 10) {
                        month = \"0\" + month;
                    }

                    \$(\"#ImportOtpFile_cvpMonth\").datepicker('update', \"01/\" + month + \"/\" + year);
                }

                
            });

        });
    </script>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 41
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 42
        echo "        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Upload worday excel sheet</h1>         
        <div id=\"description_help\">Please select your worday export file and upload it to start the import process.</div>
    </div>
    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"alert alert-warning\">
                <button class=\"close\" data-dismiss=\"alert\">×</button>
                <strong>Important</strong> Please note that you no longer have to manually import the data from this form. An automatic script will import the new data each 1st of the month. If not, please contact an administrator.
            </div>
        </div>
    </div>
    
    

    ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 60, $this->source); })()), "session", [], "any", false, false, false, 60), "flashbag", [], "any", false, false, false, 60), "get", [0 => "otp-import-error"], "method", false, false, false, 60));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 61
            echo "        ";
            // line 62
            echo "        <div class=\"alert alert-danger\">
                <button class=\"close\" data-dismiss=\"alert\">×</button>
                <strong>Notice</strong> ";
            // line 64
            echo $context["flashMessage"];
            echo "
        </div>
        ";
            // line 67
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "
    <div class=\"col-xs-12\">
        ";
        // line 70
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 70, $context, $this->getSourceContext());
        echo "
    </div>  
    
    ";
        // line 73
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal", "id" => "import-file-form"]]);
        echo "
    ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 74, $this->source); })()), 'errors');
        echo "
        
    <div class=\"row\">
        
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Select you excel sheet</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), 'widget');
        echo "
                    
                    <div class=\"form-actions\">
                        <input type=\"submit\" class=\"btn btn-primary\" id=\"submit-btn\" />
                    </div>
                </div>
            </div>
        </div>           
    </div>

    ";
        // line 97
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 97, $this->source); })()), 'form_end');
        echo "
</div>
   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetOtp/Admin/ImportBatch/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  227 => 97,  214 => 87,  198 => 74,  194 => 73,  188 => 70,  184 => 68,  178 => 67,  173 => 64,  169 => 62,  167 => 61,  163 => 60,  143 => 42,  133 => 41,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetOtp/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Import OTP excel file{% endblock %}

{% block specificJs %}{{ parent() }}
    <script type=\"text/javascript\">
        \$(function() {
            \$(\"#import-file-form\").on('submit', function() {
                \$(\"#submit-btn\").attr('disabled', 'disabled');
            });

            \$(\"#ImportOtpFile_effectiveDate\").on(\"change\", function() {
                var effectiveDateArray = \$(this).val().split(\"/\");

                if (effectiveDateArray.length === 3) {
                    var date = new Date(effectiveDateArray[2], effectiveDateArray[1], effectiveDateArray[0]);
                    var month = parseInt(date.getMonth()) - 1;
                    var year = parseInt(date.getFullYear());
                    if (month == 0) {
                        month = 12;
                        year--;
                    }
                    if (month < 10) {
                        month = \"0\" + month;
                    }

                    \$(\"#ImportOtpFile_cvpMonth\").datepicker('update', \"01/\" + month + \"/\" + year);
                }

                
            });

        });
    </script>
    
{% endblock specificJs %}
        


{% block container %}
        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Upload worday excel sheet</h1>         
        <div id=\"description_help\">Please select your worday export file and upload it to start the import process.</div>
    </div>
    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"alert alert-warning\">
                <button class=\"close\" data-dismiss=\"alert\">×</button>
                <strong>Important</strong> Please note that you no longer have to manually import the data from this form. An automatic script will import the new data each 1st of the month. If not, please contact an administrator.
            </div>
        </div>
    </div>
    
    

    {% for flashMessage in app.session.flashbag.get('otp-import-error') %}
        {% autoescape false %}
        <div class=\"alert alert-danger\">
                <button class=\"close\" data-dismiss=\"alert\">×</button>
                <strong>Notice</strong> {{ flashMessage }}
        </div>
        {% endautoescape %}
    {% endfor %}

    <div class=\"col-xs-12\">
        {{ macros.wizz() }}
    </div>  
    
    {{ form_start(form, {'attr': {'class': 'form-horizontal', 'id': 'import-file-form'}} ) }}
    {{ form_errors(form) }}
        
    <div class=\"row\">
        
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Select you excel sheet</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    {{ form_widget(form) }}
                    
                    <div class=\"form-actions\">
                        <input type=\"submit\" class=\"btn btn-primary\" id=\"submit-btn\" />
                    </div>
                </div>
            </div>
        </div>           
    </div>

    {{ form_end(form) }}
</div>
   
{% endblock container %}", "@EasyjetOtp/Admin/ImportBatch/index.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\OtpBundle\\Resources\\views\\Admin\\ImportBatch\\index.html.twig");
    }
}
