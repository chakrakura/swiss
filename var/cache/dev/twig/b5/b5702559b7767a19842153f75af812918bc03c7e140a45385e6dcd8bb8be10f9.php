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

/* @EasyjetFdtr/Admin/logView.html.twig */
class __TwigTemplate_6c05f672ec633afdb054fae66c386dcca714b25f56d6a62913be27bd13966822 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'specificJs' => [$this, 'block_specificJs'],
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@EasyjetFdtr/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetFdtr/Admin/logView.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetFdtr/Admin/logView.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetFdtr/Admin/logView.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetFdtr/Base/structure.html.twig", "@EasyjetFdtr/Admin/logView.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

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

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 11
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 12
        echo "    \t
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Synchronization log for the ";
        // line 15
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 15, $this->source); })()), "scriptTime", [], "any", false, false, false, 15), "F jS Y - H:i"), "html", null, true);
        echo ".</h1>  
        <div id=\"description_help\">Hereafter, the details about the selected log.</div>
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
                        <label class=\"control-label\">Script time</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                ";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 34, $this->source); })()), "scriptTime", [], "any", false, false, false, 34), "F jS Y - H:i"), "html", null, true);
        echo "&nbsp;
                            </span>                                
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Script status</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                ";
        // line 43
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 43, $this->source); })()), "status", [], "any", false, false, false, 43), "SUCCESS"))) {
            // line 44
            echo "                                    <span class=\"badge badge-success\">Success</span>
                                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 45
(isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 45, $this->source); })()), "status", [], "any", false, false, false, 45), "WARNING"))) {
            // line 46
            echo "                                    <span class=\"badge badge-warning\">Warning</span>
                                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 47
(isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 47, $this->source); })()), "status", [], "any", false, false, false, 47), "FAILED"))) {
            // line 48
            echo "                                    <span class=\"badge badge-danger\">Failed</span>
                                ";
        } else {
            // line 50
            echo "                                    <span class=\"badge badge-info\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 50, $this->source); })()), "status", [], "any", false, false, false, 50), "html", null, true);
            echo "</span>
                                ";
        }
        // line 52
        echo "                                &nbsp;
                            </span>                                
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Parsed file(s)</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                ";
        // line 61
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 61, $this->source); })()), "archivedFile", [], "any", false, false, false, 61), "html", null, true);
        echo "&nbsp;
                            </span>                                
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Log content</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                <pre>";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 70, $this->source); })()), "logContent", [], "any", false, false, false, 70), "html", null, true);
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
        return "@EasyjetFdtr/Admin/logView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  178 => 70,  166 => 61,  155 => 52,  149 => 50,  145 => 48,  143 => 47,  140 => 46,  138 => 45,  135 => 44,  133 => 43,  121 => 34,  99 => 15,  94 => 12,  84 => 11,  62 => 5,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@EasyjetFdtr/Base/structure.html.twig\" %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}


{% block specificJs %}{{ parent() }}

{% endblock specificJs %}
        


{% block container %}
    \t
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Synchronization log for the {{ log.scriptTime|date('F jS Y - H:i') }}.</h1>  
        <div id=\"description_help\">Hereafter, the details about the selected log.</div>
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
                        <label class=\"control-label\">Script time</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                {{ log.scriptTime|date('F jS Y - H:i') }}&nbsp;
                            </span>                                
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Script status</label>
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
                        <label class=\"control-label\">Parsed file(s)</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                {{ log.archivedFile }}&nbsp;
                            </span>                                
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Log content</label>
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
            
{% endblock container %}", "@EasyjetFdtr/Admin/logView.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\FdtrBundle\\Resources\\views\\Admin\\logView.html.twig");
    }
}
