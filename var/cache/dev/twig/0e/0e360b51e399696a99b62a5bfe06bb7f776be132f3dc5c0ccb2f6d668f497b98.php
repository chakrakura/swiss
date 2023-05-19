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

/* @EasyjetHris/DataAnalyzer/dataCheckView.html.twig */
class __TwigTemplate_5b95a04cdcde861b9db201f9c14bc330cec982ace9add7dd1b81d05b0ba97eab extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/DataAnalyzer/dataCheckView.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/DataAnalyzer/dataCheckView.html.twig"));

        $this->parent = $this->loadTemplate("@EasyjetHris/Base/structure.html.twig", "@EasyjetHris/DataAnalyzer/dataCheckView.html.twig", 1);
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
        echo "
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Data check result for the command ran ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dataCheck"]) || array_key_exists("dataCheck", $context) ? $context["dataCheck"] : (function () { throw new RuntimeError('Variable "dataCheck" does not exist.', 13, $this->source); })()), "scriptTime", [], "any", false, false, false, 13), "F jS Y - H:i"), "html", null, true);
        echo ".</h1>
        <div id=\"description_help\">Hereafter, the details about the selected dataCheck.</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Data check details</h5>
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
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dataCheck"]) || array_key_exists("dataCheck", $context) ? $context["dataCheck"] : (function () { throw new RuntimeError('Variable "dataCheck" does not exist.', 41, $this->source); })()), "scriptTime", [], "any", false, false, false, 41), "F jS Y - H:i"), "html", null, true);
        echo "&nbsp;
                            </span>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Command</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                <code>";
        // line 50
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dataCheck"]) || array_key_exists("dataCheck", $context) ? $context["dataCheck"] : (function () { throw new RuntimeError('Variable "dataCheck" does not exist.', 50, $this->source); })()), "command", [], "any", false, false, false, 50), "html", null, true);
        echo "</code>
                            </span>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Script status</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                ";
        // line 59
        if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["dataCheck"]) || array_key_exists("dataCheck", $context) ? $context["dataCheck"] : (function () { throw new RuntimeError('Variable "dataCheck" does not exist.', 59, $this->source); })()), "status", [], "any", false, false, false, 59), "NO_FILE_TO_PARSE"))) {
            // line 60
            echo "                                    <span class=\"badge badge-success\">No file to parse</span>
                                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 61
(isset($context["dataCheck"]) || array_key_exists("dataCheck", $context) ? $context["dataCheck"] : (function () { throw new RuntimeError('Variable "dataCheck" does not exist.', 61, $this->source); })()), "status", [], "any", false, false, false, 61), "FAILED"))) {
            // line 62
            echo "                                    <span class=\"badge badge-danger\">Failed</span>
                                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 63
(isset($context["dataCheck"]) || array_key_exists("dataCheck", $context) ? $context["dataCheck"] : (function () { throw new RuntimeError('Variable "dataCheck" does not exist.', 63, $this->source); })()), "status", [], "any", false, false, false, 63), "WARNING"))) {
            // line 64
            echo "                                    <span class=\"badge badge-warning\">Warning</span>
                                ";
        } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,         // line 65
(isset($context["dataCheck"]) || array_key_exists("dataCheck", $context) ? $context["dataCheck"] : (function () { throw new RuntimeError('Variable "dataCheck" does not exist.', 65, $this->source); })()), "status", [], "any", false, false, false, 65), "SUCCESS"))) {
            // line 66
            echo "                                    <span class=\"badge badge-success\">Success</span>
                                ";
        } else {
            // line 68
            echo "                                    <span class=\"badge badge-info\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dataCheck"]) || array_key_exists("dataCheck", $context) ? $context["dataCheck"] : (function () { throw new RuntimeError('Variable "dataCheck" does not exist.', 68, $this->source); })()), "status", [], "any", false, false, false, 68), "html", null, true);
            echo "</span>
                                ";
        }
        // line 70
        echo "                                &nbsp;
                            </span>
                        </div>
                    </div>


                    ";
        // line 76
        if (twig_get_attribute($this->env, $this->source, (isset($context["dataCheck"]) || array_key_exists("dataCheck", $context) ? $context["dataCheck"] : (function () { throw new RuntimeError('Variable "dataCheck" does not exist.', 76, $this->source); })()), "xlsFile", [], "any", false, false, false, 76)) {
        }
        // line 77
        echo "                    <div class=\"form-group\">
                        <label class=\"control-label\">Data check xls file</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                <a href=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("data_analyzer_xls_dl", ["dataCheck" => twig_get_attribute($this->env, $this->source, (isset($context["dataCheck"]) || array_key_exists("dataCheck", $context) ? $context["dataCheck"] : (function () { throw new RuntimeError('Variable "dataCheck" does not exist.', 81, $this->source); })()), "id", [], "any", false, false, false, 81)]), "html", null, true);
        echo "\" class=\"btn btn-success\"><i class=\"icon-download\"></i> Download Xls</a>
                            </span>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Script log content</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                <pre>";
        // line 90
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["dataCheck"]) || array_key_exists("dataCheck", $context) ? $context["dataCheck"] : (function () { throw new RuntimeError('Variable "dataCheck" does not exist.', 90, $this->source); })()), "scriptLogContent", [], "any", false, false, false, 90), "html", null, true);
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
        return "@EasyjetHris/DataAnalyzer/dataCheckView.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  207 => 90,  195 => 81,  189 => 77,  186 => 76,  178 => 70,  172 => 68,  168 => 66,  166 => 65,  163 => 64,  161 => 63,  158 => 62,  156 => 61,  153 => 60,  151 => 59,  139 => 50,  127 => 41,  96 => 13,  91 => 10,  81 => 9,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetHris/Base/structure.html.twig' %}

{% block specificJs %}{{ parent() }}

{% endblock specificJs %}



{% block container %}

<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Data check result for the command ran {{ dataCheck.scriptTime|date('F jS Y - H:i') }}.</h1>
        <div id=\"description_help\">Hereafter, the details about the selected dataCheck.</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Data check details</h5>
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
                                {{ dataCheck.scriptTime|date('F jS Y - H:i') }}&nbsp;
                            </span>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Command</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                <code>{{ dataCheck.command }}</code>
                            </span>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Script status</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                {% if dataCheck.status == \"NO_FILE_TO_PARSE\" %}
                                    <span class=\"badge badge-success\">No file to parse</span>
                                {% elseif dataCheck.status == \"FAILED\" %}
                                    <span class=\"badge badge-danger\">Failed</span>
                                {% elseif dataCheck.status == \"WARNING\" %}
                                    <span class=\"badge badge-warning\">Warning</span>
                                {% elseif dataCheck.status == \"SUCCESS\" %}
                                    <span class=\"badge badge-success\">Success</span>
                                {% else %}
                                    <span class=\"badge badge-info\">{{ dataCheck.status }}</span>
                                {% endif %}
                                &nbsp;
                            </span>
                        </div>
                    </div>


                    {% if dataCheck.xlsFile %}{% endif %}
                    <div class=\"form-group\">
                        <label class=\"control-label\">Data check xls file</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                <a href=\"{{ url('data_analyzer_xls_dl', {dataCheck: dataCheck.id}) }}\" class=\"btn btn-success\"><i class=\"icon-download\"></i> Download Xls</a>
                            </span>
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">Script log content</label>
                        <div class=\"controls\">
                            <span class=\"help-block-inalterable text-left\">
                                <pre>{{ dataCheck.scriptLogContent }}</pre>&nbsp;
                            </span>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

{% endblock container %}
", "@EasyjetHris/DataAnalyzer/dataCheckView.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\HrisBundle\\Resources\\views\\DataAnalyzer\\dataCheckView.html.twig");
    }
}
