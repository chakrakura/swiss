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

/* @EasyjetSfsu/Files/showMultiple.html.twig */
class __TwigTemplate_7c6f460d63c5cc9fe4d16892c3e8990d342fda4acad88824664636b452fe7572 extends Template
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
        return "@EasyjetSfsu/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSfsu/Files/showMultiple.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSfsu/Files/showMultiple.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetSfsu/Files/showMultiple.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetSfsu/Base/structure.html.twig", "@EasyjetSfsu/Files/showMultiple.html.twig", 1);
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

        echo "Uploaded file";
        
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
        \$(\"#copy-to-clipboard\").bind(\"click\", function() {
            window.getSelection().removeAllRanges
        });
        
        \$(\".show-hide-logs\").on(\"click\", function() {
           \$(this).toggleClass(\"inversed\"); 
           if (\$(this).hasClass(\"inversed\")) {
               \$(\"#logs-section\").stop().slideDown();
           } else {
               \$(\"#logs-section\").stop().slideUp();
           }
        });
        
        \$(\"#logs-section\").slideUp();
        
        new Clipboard('#copy-to-clipboard');

        
        \$(\"#sfsu_file_mail_form_recipient\").multiple_emails();
    });
    
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 35
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 36
        echo "        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Sending multiple files</h1>
        <div id=\"description_help\">You have selected multiple files. When you will click \"Send file link by email\", an archive file will be automatically created and a sharing link will be sent to your recipients.<br>
        Once the zip file is created, you'll be able to see it in your file list as well as each single file you uploaded.
        </div>     
    </div>
    
   
        
        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 49
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 49, $context, $this->getSourceContext());
        echo "
            </div>

        ";
        // line 52
        if ((isset($context["fileExists"]) || array_key_exists("fileExists", $context) ? $context["fileExists"] : (function () { throw new RuntimeError('Variable "fileExists" does not exist.', 52, $this->source); })())) {
            // line 53
            echo "            ";
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 53, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
            echo "
            ";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 54, $this->source); })()), 'errors');
            echo "
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"widget-box\">
                        <div class=\"widget-title\">
                            <span class=\"icon\">
                                <i class=\"icon-envelope\"></i>
                            </span>

                            <h5>Send the file by mail</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                                <div class=\"alert alert-info\">The link will be automatically included in the bottom of the mail</div>
                              
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 69, $this->source); })()), "subject", [], "any", false, false, false, 69), 'label');
            echo " :</label>
                                    <div class=\"controls\">
                                        ";
            // line 71
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 71, $this->source); })()), "subject", [], "any", false, false, false, 71), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                    </div>
                                </div> 
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
            // line 75
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 75, $this->source); })()), "recipient", [], "any", false, false, false, 75), 'label');
            echo " :</label>
                                    <div class=\"controls\">
                                        ";
            // line 77
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 77, $this->source); })()), "recipient", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                        <div class=\"form-error\">
                                            ";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 79, $this->source); })()), "recipient", [], "any", false, false, false, 79), 'errors');
            echo "
                                        </div>
                                    </div>
                                </div> 
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 84, $this->source); })()), "mailContent", [], "any", false, false, false, 84), 'label');
            echo " :</label>
                                    <div class=\"controls\">
                                        ";
            // line 86
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 86, $this->source); })()), "mailContent", [], "any", false, false, false, 86), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                        <div class=\"form-error\">
                                            ";
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 88, $this->source); })()), "mailContent", [], "any", false, false, false, 88), 'errors');
            echo "
                                        </div>
                                    </div>
                                </div> 
                                ";
            // line 92
            if ((isset($context["showZipFilename"]) || array_key_exists("showZipFilename", $context) ? $context["showZipFilename"] : (function () { throw new RuntimeError('Variable "showZipFilename" does not exist.', 92, $this->source); })())) {
                // line 93
                echo "                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
                // line 94
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 94, $this->source); })()), "zipFilename", [], "any", false, false, false, 94), 'label');
                echo " :</label>
                                    <div class=\"controls\">
                                        ";
                // line 96
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 96, $this->source); })()), "zipFilename", [], "any", false, false, false, 96), 'widget', ["attr" => ["class" => "form-control"]]);
                echo "
                                        <div class=\"form-error\">
                                            ";
                // line 98
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 98, $this->source); })()), "zipFilename", [], "any", false, false, false, 98), 'errors');
                echo "
                                        </div>
                                    </div>
                                </div>
                                ";
            }
            // line 103
            echo "
                                <div class=\"form-actions\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Send file link by email</button>
                                    
                                </div>
                            </div>
                    </div>
                </div>  
            </div>
            ";
            // line 112
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 112, $this->source); })()), 'form_end');
            echo "
        ";
        }
        // line 114
        echo "  
</div>


   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetSfsu/Files/showMultiple.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  269 => 114,  264 => 112,  253 => 103,  245 => 98,  240 => 96,  235 => 94,  232 => 93,  230 => 92,  223 => 88,  218 => 86,  213 => 84,  205 => 79,  200 => 77,  195 => 75,  188 => 71,  183 => 69,  165 => 54,  160 => 53,  158 => 52,  152 => 49,  137 => 36,  127 => 35,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@EasyjetSfsu/Base/structure.html.twig\" %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Uploaded file{% endblock %}

{% block specificJs %}{{ parent() }}
<script type=\"text/javascript\">
    \$(function() {
        \$(\"#copy-to-clipboard\").bind(\"click\", function() {
            window.getSelection().removeAllRanges
        });
        
        \$(\".show-hide-logs\").on(\"click\", function() {
           \$(this).toggleClass(\"inversed\"); 
           if (\$(this).hasClass(\"inversed\")) {
               \$(\"#logs-section\").stop().slideDown();
           } else {
               \$(\"#logs-section\").stop().slideUp();
           }
        });
        
        \$(\"#logs-section\").slideUp();
        
        new Clipboard('#copy-to-clipboard');

        
        \$(\"#sfsu_file_mail_form_recipient\").multiple_emails();
    });
    
</script>
{% endblock specificJs %}



{% block container %}
        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Sending multiple files</h1>
        <div id=\"description_help\">You have selected multiple files. When you will click \"Send file link by email\", an archive file will be automatically created and a sharing link will be sent to your recipients.<br>
        Once the zip file is created, you'll be able to see it in your file list as well as each single file you uploaded.
        </div>     
    </div>
    
   
        
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {{ macros.wizz() }}
            </div>

        {% if fileExists %}
            {{ form_start(emailForm, {'attr': {'class': 'form-horizontal'}} ) }}
            {{ form_errors(emailForm) }}
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"widget-box\">
                        <div class=\"widget-title\">
                            <span class=\"icon\">
                                <i class=\"icon-envelope\"></i>
                            </span>

                            <h5>Send the file by mail</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                                <div class=\"alert alert-info\">The link will be automatically included in the bottom of the mail</div>
                              
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{ form_label(emailForm.subject) }} :</label>
                                    <div class=\"controls\">
                                        {{ form_widget(emailForm.subject, { 'attr': {'class': 'form-control'} }) }}
                                    </div>
                                </div> 
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{ form_label(emailForm.recipient) }} :</label>
                                    <div class=\"controls\">
                                        {{ form_widget(emailForm.recipient, { 'attr': {'class': 'form-control'} }) }}
                                        <div class=\"form-error\">
                                            {{ form_errors(emailForm.recipient) }}
                                        </div>
                                    </div>
                                </div> 
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{ form_label(emailForm.mailContent) }} :</label>
                                    <div class=\"controls\">
                                        {{ form_widget(emailForm.mailContent, { 'attr': {'class': 'form-control'} }) }}
                                        <div class=\"form-error\">
                                            {{ form_errors(emailForm.mailContent) }}
                                        </div>
                                    </div>
                                </div> 
                                {% if showZipFilename %}
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{ form_label(emailForm.zipFilename) }} :</label>
                                    <div class=\"controls\">
                                        {{ form_widget(emailForm.zipFilename, { 'attr': {'class': 'form-control'} }) }}
                                        <div class=\"form-error\">
                                            {{ form_errors(emailForm.zipFilename) }}
                                        </div>
                                    </div>
                                </div>
                                {% endif %}

                                <div class=\"form-actions\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Send file link by email</button>
                                    
                                </div>
                            </div>
                    </div>
                </div>  
            </div>
            {{ form_end(emailForm) }}
        {% endif %}
  
</div>


   
{% endblock container %}", "@EasyjetSfsu/Files/showMultiple.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\SfsuBundle\\Resources\\views\\Files\\showMultiple.html.twig");
    }
}
