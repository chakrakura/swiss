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

/* @EasyjetHris/Picofs/logView.html.twig */
class __TwigTemplate_0ec1b4e83e6ec5c2f7b8db80230b5225fcf8adf240cfb124403cc09737effcfd extends Template
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
        return "EasyjetHrisBundle:Base:structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/Picofs/logView.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/Picofs/logView.html.twig"));

        $this->parent = $this->loadTemplate("EasyjetHrisBundle:Base:structure.html.twig", "@EasyjetHris/Picofs/logView.html.twig", 1);
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
        echo "    \t
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Synchronization log for the ";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 14, $this->source); })()), "scriptTime", [], "any", false, false, false, 14), "F jS Y - H:i"), "html", null, true);
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
        // line 42
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 42, $this->source); })()), "scriptTime", [], "any", false, false, false, 42), "F jS Y - H:i"), "html", null, true);
        echo "&nbsp;
                            </span>                                
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Script status</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                ";
        // line 51
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 51, $this->source); })()), "status", [], "any", false, false, false, 51), "NO_FILE_TO_PARSE"))) {
            // line 52
            echo "                                    <span class=\"badge badge-success\">No file to parse</span>
                                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 53
(isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 53, $this->source); })()), "status", [], "any", false, false, false, 53), "FAILED"))) {
            // line 54
            echo "                                    <span class=\"badge badge-danger\">Failed</span>
                                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 55
(isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 55, $this->source); })()), "status", [], "any", false, false, false, 55), "WARNING"))) {
            // line 56
            echo "                                    <span class=\"badge badge-warning\">Warning</span>
                                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 57
(isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 57, $this->source); })()), "status", [], "any", false, false, false, 57), "SUCCESS"))) {
            // line 58
            echo "                                    <span class=\"badge badge-success\">Success</span>
                                ";
        } else {
            // line 60
            echo "                                    <span class=\"badge badge-info\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 60, $this->source); })()), "status", [], "any", false, false, false, 60), "html", null, true);
            echo "</span>
                                ";
        }
        // line 62
        echo "                                &nbsp;
                            </span>                                
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Archived file(s)</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                ";
        // line 71
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 71, $this->source); })()), "archivedFile", [], "any", false, false, false, 71), "html", null, true);
        echo "&nbsp;
                            </span>                                
                        </div>
                    </div>

                    ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 76, $this->source); })()), "payElementsLog", [], "any", false, false, false, 76)) {
        }
        // line 77
        echo "                    <div class=\"form-group\">
                        <label class=\"control-label\">Pay elements log</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ejint096_logs_pay_elements_dl", ["log" => twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81)]), "html", null, true);
        echo "\" class=\"btn btn-success\"><i class=\"icon-download\"></i> Download CSV</a>
                            </span>                                
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Script log content</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                <pre>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 90, $this->source); })()), "scriptLogContent", [], "any", false, false, false, 90), "html", null, true);
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
        return "@EasyjetHris/Picofs/logView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 90,  194 => 81,  188 => 77,  185 => 76,  177 => 71,  166 => 62,  160 => 60,  156 => 58,  154 => 57,  151 => 56,  149 => 55,  146 => 54,  144 => 53,  141 => 52,  139 => 51,  127 => 42,  96 => 14,  91 => 11,  81 => 10,  59 => 4,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"EasyjetHrisBundle:Base:structure.html.twig\" %}


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
            
{% endblock container %}", "@EasyjetHris/Picofs/logView.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\HrisBundle\\Resources\\views\\Picofs\\logView.html.twig");
    }
}
