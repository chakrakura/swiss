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

/* @EasyjetHris/Ejint096/logView.html.twig */
class __TwigTemplate_3a8a2e595abd60cf6bded5114d8f999e89895d221579ada6ea90336d1ba2202b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/Ejint096/logView.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/Ejint096/logView.html.twig"));

        $this->parent = $this->loadTemplate("@EasyjetHris/Base/structure.html.twig", "@EasyjetHris/Ejint096/logView.html.twig", 1);
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
                                EJINT0096
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
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 50, $this->source); })()), "status", [], "any", false, false, false, 50), "NO_FILE_TO_PARSE"))) {
            // line 51
            echo "                                    <span class=\"badge badge-success\">No file to parse</span>
                                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 52
(isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 52, $this->source); })()), "status", [], "any", false, false, false, 52), "FAILED"))) {
            // line 53
            echo "                                    <span class=\"badge badge-danger\">Failed</span>
                                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 54
(isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 54, $this->source); })()), "status", [], "any", false, false, false, 54), "WARNING"))) {
            // line 55
            echo "                                    <span class=\"badge badge-warning\">Warning</span>
                                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 56
(isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 56, $this->source); })()), "status", [], "any", false, false, false, 56), "SUCCESS"))) {
            // line 57
            echo "                                    <span class=\"badge badge-success\">Success</span>
                                ";
        } else {
            // line 59
            echo "                                    <span class=\"badge badge-info\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 59, $this->source); })()), "status", [], "any", false, false, false, 59), "html", null, true);
            echo "</span>
                                ";
        }
        // line 61
        echo "                                &nbsp;
                            </span>                                
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Archived file(s)</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                ";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 70, $this->source); })()), "archivedFile", [], "any", false, false, false, 70), "html", null, true);
        echo "&nbsp;
                            </span>                                
                        </div>
                    </div>

                    ";
        // line 75
        if (twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 75, $this->source); })()), "payElementsLog", [], "any", false, false, false, 75)) {
        }
        // line 76
        echo "                    <div class=\"form-group\">
                        <label class=\"control-label\">Pay elements log</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                <a href=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ejint096_logs_pay_elements_dl", ["log" => twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80)]), "html", null, true);
        echo "\" class=\"btn btn-success\"><i class=\"icon-download\"></i> Download CSV</a>
                            </span>                                
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Script log content</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                <pre>";
        // line 89
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 89, $this->source); })()), "scriptLogContent", [], "any", false, false, false, 89), "html", null, true);
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
        return "@EasyjetHris/Ejint096/logView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 89,  194 => 80,  188 => 76,  185 => 75,  177 => 70,  166 => 61,  160 => 59,  156 => 57,  154 => 56,  151 => 55,  149 => 54,  146 => 53,  144 => 52,  141 => 51,  139 => 50,  127 => 41,  96 => 13,  91 => 10,  81 => 9,  59 => 3,  36 => 1,);
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
                                EJINT0096
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
                                {% if log.status == \"NO_FILE_TO_PARSE\" %}
                                    <span class=\"badge badge-success\">No file to parse</span>
                                {% elseif log.status == \"FAILED\" %}
                                    <span class=\"badge badge-danger\">Failed</span>
                                {% elseif log.status == \"WARNING\" %}
                                    <span class=\"badge badge-warning\">Warning</span>
                                {% elseif log.status == \"SUCCESS\" %}
                                    <span class=\"badge badge-success\">Success</span>
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

                    {% if log.payElementsLog %}{% endif %}
                    <div class=\"form-group\">
                        <label class=\"control-label\">Pay elements log</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                <a href=\"{{ url('ejint096_logs_pay_elements_dl', {log: log.id}) }}\" class=\"btn btn-success\"><i class=\"icon-download\"></i> Download CSV</a>
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


                </div>
            </div>
        </div>           
    </div>
</div>
            
{% endblock container %}", "@EasyjetHris/Ejint096/logView.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\HrisBundle\\Resources\\views\\Ejint096\\logView.html.twig");
    }
}
