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

/* @EasyjetHris/Ejint097/logView.html.twig */
class __TwigTemplate_086d5a17af08bc870dfb17ab09cc92ca0075512804280b35bd0a99031f927fd5 extends Template
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
        return "@EasyjetHris/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/Ejint097/logView.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/Ejint097/logView.html.twig"));

        $this->parent = $this->loadTemplate("@EasyjetHris/Base/structure.html.twig", "@EasyjetHris/Ejint097/logView.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
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

    // line 9
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 10
        echo "    \t
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Synchronization log for the ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 13, $this->source); })()), "scriptTime", [], "any", false, false, false, 13), "F jS Y - H:i"), "html", null, true);
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
                        <label class=\"control-label\">Synchronization reference</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                EJINT0097
                            </span>                                
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Script time</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                ";
        // line 41
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 41, $this->source); })()), "scriptTime", [], "any", false, false, false, 41), "F jS Y - H:i"), "html", null, true);
        echo "&nbsp;
                            </span>                                
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Script status</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                ";
        // line 50
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 50, $this->source); })()), "status", [], "any", false, false, false, 50), "SAFEGUARD_SUCCESS"))) {
            // line 51
            echo "                                    <span class=\"badge badge-success\">SafreGuard success</span>
                                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 52
(isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 52, $this->source); })()), "status", [], "any", false, false, false, 52), "SAFEGUARD_WARNING"))) {
            // line 53
            echo "                                    <span class=\"badge badge-warning\">SageGuard warning</span>
                                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 54
(isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 54, $this->source); })()), "status", [], "any", false, false, false, 54), "SAFEGUARD_FAILED"))) {
            // line 55
            echo "                                    <span class=\"badge badge-danger\">SageGuard failed</span>
                                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 56
(isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 56, $this->source); })()), "status", [], "any", false, false, false, 56), "NO_GROSS2NET_FILE"))) {
            // line 57
            echo "                                    <span class=\"badge badge-warning\">No Gross to net file</span>
                                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 58
(isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 58, $this->source); })()), "status", [], "any", false, false, false, 58), "FAILED"))) {
            // line 59
            echo "                                    <span class=\"badge badge-danger\">Failed</span>
                                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 60
(isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 60, $this->source); })()), "status", [], "any", false, false, false, 60), "WAITING_SAFEGUARD"))) {
            // line 61
            echo "                                    <span class=\"badge badge-info\">Waiting SafeGuard</span>
                                ";
        } else {
            // line 63
            echo "                                    <span class=\"badge badge-info\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 63, $this->source); })()), "status", [], "any", false, false, false, 63), "html", null, true);
            echo "</span>
                                ";
        }
        // line 65
        echo "                                &nbsp;
                            </span>                                
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Archived file(s)</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                ";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 74, $this->source); })()), "archivedFile", [], "any", false, false, false, 74), "html", null, true);
        echo "&nbsp;
                            </span>                                
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Script log content</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                <pre>";
        // line 83
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 83, $this->source); })()), "scriptLogContent", [], "any", false, false, false, 83), "html", null, true);
        echo "</pre>&nbsp;
                            </span>                                
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">SafeGuard log content</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                <pre>";
        // line 92
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 92, $this->source); })()), "safeguardLogContent", [], "any", false, false, false, 92), "html", null, true);
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
        return "@EasyjetHris/Ejint097/logView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  211 => 92,  199 => 83,  187 => 74,  176 => 65,  170 => 63,  166 => 61,  164 => 60,  161 => 59,  159 => 58,  156 => 57,  154 => 56,  151 => 55,  149 => 54,  146 => 53,  144 => 52,  141 => 51,  139 => 50,  127 => 41,  96 => 13,  91 => 10,  81 => 9,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetHris/Base/structure.html.twig' %}

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
                        <label class=\"control-label\">Synchronization reference</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                EJINT0097
                            </span>                                
                        </div>
                    </div>

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
                                {% if log.status == \"SAFEGUARD_SUCCESS\" %}
                                    <span class=\"badge badge-success\">SafreGuard success</span>
                                {% elseif log.status == \"SAFEGUARD_WARNING\" %}
                                    <span class=\"badge badge-warning\">SageGuard warning</span>
                                {% elseif log.status == \"SAFEGUARD_FAILED\" %}
                                    <span class=\"badge badge-danger\">SageGuard failed</span>
                                {% elseif log.status == \"NO_GROSS2NET_FILE\" %}
                                    <span class=\"badge badge-warning\">No Gross to net file</span>
                                {% elseif log.status == \"FAILED\" %}
                                    <span class=\"badge badge-danger\">Failed</span>
                                {% elseif log.status == \"WAITING_SAFEGUARD\" %}
                                    <span class=\"badge badge-info\">Waiting SafeGuard</span>
                                {% else %}
                                    <span class=\"badge badge-info\">{{ log.status }}</span>
                                {% endif %}
                                &nbsp;
                            </span>                                
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Archived file(s)</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                {{ log.archivedFile }}&nbsp;
                            </span>                                
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Script log content</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                <pre>{{ log.scriptLogContent }}</pre>&nbsp;
                            </span>                                
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">SafeGuard log content</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                <pre>{{ log.safeguardLogContent }}</pre>&nbsp;
                            </span>                                
                        </div>
                    </div>


                </div>
            </div>
        </div>           
    </div>
</div>
            
{% endblock container %}", "@EasyjetHris/Ejint097/logView.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\HrisBundle\\Resources\\views\\Ejint097\\logView.html.twig");
    }
}
