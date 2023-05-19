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

/* @EasyjetFdtr/Mails/importResult.html.twig */
class __TwigTemplate_279ae4caca48d07fb166e7990d163d68db58cda998d0c5660c2f44f01bef3531 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@EasyjetSwissinsideCore/Mail/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetFdtr/Mails/importResult.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetFdtr/Mails/importResult.html.twig"));

        $this->parent = $this->loadTemplate("@EasyjetSwissinsideCore/Mail/structure.html.twig", "@EasyjetFdtr/Mails/importResult.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
    <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">Import result</h1>         
            <div id=\"description_help\">Hereafter you can see the import log</div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>Log details</h5>
                    </div>
                    <div class=\"widget-content\">

                        <div class=\"form-group\">
                            <label class=\"control-label\"><b>Script time</b></label>
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">
                                    ";
        // line 26
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 26, $this->source); })()), "scriptTime", [], "any", false, false, false, 26), "F jS Y - H:i"), "html", null, true);
        echo "&nbsp;
                                </span>                                
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\"><b>Script status</b></label>
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">
                                    ";
        // line 35
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 35, $this->source); })()), "status", [], "any", false, false, false, 35), "SUCCESS"))) {
            // line 36
            echo "                                        <span class=\"badge badge-success\">Success</span>
                                    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 37
(isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 37, $this->source); })()), "status", [], "any", false, false, false, 37), "WARNING"))) {
            // line 38
            echo "                                        <span class=\"badge badge-warning\">Warning</span>
                                    ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 39
(isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 39, $this->source); })()), "status", [], "any", false, false, false, 39), "FAILED"))) {
            // line 40
            echo "                                        <span class=\"badge badge-danger\">Failed</span>
                                    ";
        } else {
            // line 42
            echo "                                        <span class=\"badge badge-info\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 42, $this->source); })()), "status", [], "any", false, false, false, 42), "html", null, true);
            echo "</span>
                                    ";
        }
        // line 44
        echo "                                    &nbsp;
                                </span>                                
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\"><b>Parsed file(s)</b></label>
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">
                                    ";
        // line 53
        ((twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 53, $this->source); })()), "archivedFile", [], "any", false, false, false, 53)) ? (print (twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 53, $this->source); })()), "archivedFile", [], "any", false, false, false, 53), "html", null, true))) : (print ("-")));
        echo "&nbsp;
                                </span>                                
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\"><b>Log content</b></label>
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">
                                    <pre>";
        // line 62
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 62, $this->source); })()), "logContent", [], "any", false, false, false, 62), "html", null, true);
        echo "</pre>&nbsp;
                                </span>                                
                            </div>
                        </div>


                    </div>
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
        return "@EasyjetFdtr/Mails/importResult.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 62,  137 => 53,  126 => 44,  120 => 42,  116 => 40,  114 => 39,  111 => 38,  109 => 37,  106 => 36,  104 => 35,  92 => 26,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@EasyjetSwissinsideCore/Mail/structure.html.twig\" %}

{% block content %}

    <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">Import result</h1>         
            <div id=\"description_help\">Hereafter you can see the import log</div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>Log details</h5>
                    </div>
                    <div class=\"widget-content\">

                        <div class=\"form-group\">
                            <label class=\"control-label\"><b>Script time</b></label>
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">
                                    {{ log.scriptTime|date('F jS Y - H:i') }}&nbsp;
                                </span>                                
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\"><b>Script status</b></label>
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">
                                    {% if log.status == \"SUCCESS\" %}
                                        <span class=\"badge badge-success\">Success</span>
                                    {% elseif log.status == \"WARNING\" %}
                                        <span class=\"badge badge-warning\">Warning</span>
                                    {% elseif log.status == \"FAILED\" %}
                                        <span class=\"badge badge-danger\">Failed</span>
                                    {% else %}
                                        <span class=\"badge badge-info\">{{ log.status }}</span>
                                    {% endif %}
                                    &nbsp;
                                </span>                                
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\"><b>Parsed file(s)</b></label>
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">
                                    {{ log.archivedFile ? log.archivedFile : \"-\" }}&nbsp;
                                </span>                                
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\"><b>Log content</b></label>
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">
                                    <pre>{{ log.logContent }}</pre>&nbsp;
                                </span>                                
                            </div>
                        </div>


                    </div>
                </div>
            </div>           
        </div>
    </div>

{% endblock %}   ", "@EasyjetFdtr/Mails/importResult.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\FdtrBundle\\Resources\\views\\Mails\\importResult.html.twig");
    }
}
