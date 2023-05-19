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

/* @EasyjetOtp/Admin/ExportLog/view.html.twig */
class __TwigTemplate_3e26a575eeedd4f0f949a4389e2306a0e3749a2bb1b3b47be169a5891f42354b extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Admin/ExportLog/view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Admin/ExportLog/view.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetOtp/Admin/ExportLog/view.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetOtp/Base/structure.html.twig", "@EasyjetOtp/Admin/ExportLog/view.html.twig", 1);
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

        echo " View Logs";
        
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

    // line 12
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 13
        echo "    \t
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Export log for the batch ";
        // line 16
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 16, $this->source); })()), "batch", [], "any", false, false, false, 16), "html", null, true);
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
                        <label class=\"control-label\">Log time</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                ";
        // line 35
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 35, $this->source); })()), "exportDate", [], "any", false, false, false, 35), "F jS Y - H:i"), "html", null, true);
        echo "&nbsp;
                            </span>                                
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Exported by</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                ";
        // line 44
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 44, $this->source); })()), "user", [], "any", false, false, false, 44), "html", null, true);
        echo "&nbsp;
                            </span>                                
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Script status</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                ";
        // line 53
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 53, $this->source); })()), "status", [], "any", false, false, false, 53), "NO_FILE_TO_PARSE"))) {
            // line 54
            echo "                                    <span class=\"badge badge-success\">No file to parse</span>
                                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 55
(isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 55, $this->source); })()), "status", [], "any", false, false, false, 55), "failed"))) {
            // line 56
            echo "                                    <span class=\"badge badge-danger\">Failed</span>
                                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 57
(isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 57, $this->source); })()), "status", [], "any", false, false, false, 57), "warning"))) {
            // line 58
            echo "                                    <span class=\"badge badge-warning\">Warning</span>
                                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 59
(isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 59, $this->source); })()), "status", [], "any", false, false, false, 59), "success"))) {
            // line 60
            echo "                                    <span class=\"badge badge-success\">Success</span>
                                ";
        } else {
            // line 62
            echo "                                    <span class=\"badge badge-info\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 62, $this->source); })()), "status", [], "any", false, false, false, 62), "html", null, true);
            echo "</span>
                                ";
        }
        // line 64
        echo "                                &nbsp;
                            </span>                                
                        </div>
                    </div>


                    <div class=\"form-group\">
                        <label class=\"control-label\">Script log content</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                <pre>";
        // line 74
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 74, $this->source); })()), "content", [], "any", false, false, false, 74), "html", null, true);
        echo "</pre>&nbsp;
                            </span>                                
                        </div>
                    </div>

                    ";
        // line 79
        if (twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 79, $this->source); })()), "excelFilename", [], "any", false, false, false, 79)) {
            // line 80
            echo "                        <div class=\"form-group\">
                            <label class=\"control-label\">Exported xls file</label>
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">
                                    <a class=\"btn btn-success\" href=\"";
            // line 84
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_otp_logs_dl", ["log" => twig_get_attribute($this->env, $this->source, (isset($context["log"]) || array_key_exists("log", $context) ? $context["log"] : (function () { throw new RuntimeError('Variable "log" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84)]), "html", null, true);
            echo "\">Download excelsheet</a>
                                </span>                                
                            </div>
                        </div>
                    ";
        }
        // line 89
        echo "                    


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
        return "@EasyjetOtp/Admin/ExportLog/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 89,  220 => 84,  214 => 80,  212 => 79,  204 => 74,  192 => 64,  186 => 62,  182 => 60,  180 => 59,  177 => 58,  175 => 57,  172 => 56,  170 => 55,  167 => 54,  165 => 53,  153 => 44,  141 => 35,  119 => 16,  114 => 13,  104 => 12,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetOtp/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %} View Logs{% endblock %}

{% block specificJs %}{{ parent() }}

{% endblock specificJs %}
        


{% block container %}
    \t
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Export log for the batch {{ log.batch }}.</h1>  
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
                        <label class=\"control-label\">Log time</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                {{ log.exportDate|date('F jS Y - H:i') }}&nbsp;
                            </span>                                
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Exported by</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                {{ log.user }}&nbsp;
                            </span>                                
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Script status</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                {% if log.status == \"NO_FILE_TO_PARSE\" %}
                                    <span class=\"badge badge-success\">No file to parse</span>
                                {% elseif log.status == \"failed\" %}
                                    <span class=\"badge badge-danger\">Failed</span>
                                {% elseif log.status == \"warning\" %}
                                    <span class=\"badge badge-warning\">Warning</span>
                                {% elseif log.status == \"success\" %}
                                    <span class=\"badge badge-success\">Success</span>
                                {% else %}
                                    <span class=\"badge badge-info\">{{ log.status }}</span>
                                {% endif %}
                                &nbsp;
                            </span>                                
                        </div>
                    </div>


                    <div class=\"form-group\">
                        <label class=\"control-label\">Script log content</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                <pre>{{ log.content }}</pre>&nbsp;
                            </span>                                
                        </div>
                    </div>

                    {% if log.excelFilename %}
                        <div class=\"form-group\">
                            <label class=\"control-label\">Exported xls file</label>
                            <div class=\"controls\">
                                <span class=\"help-block-inalterable text-left\">
                                    <a class=\"btn btn-success\" href=\"{{ url('admin_otp_logs_dl', {log: log.id} ) }}\">Download excelsheet</a>
                                </span>                                
                            </div>
                        </div>
                    {% endif %}
                    


                </div>
            </div>
        </div>           
    </div>
</div>
            
{% endblock container %}", "@EasyjetOtp/Admin/ExportLog/view.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\OtpBundle\\Resources\\views\\Admin\\ExportLog\\view.html.twig");
    }
}
