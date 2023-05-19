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

/* @EasyjetOtp/Otp/disruptionEdit.html.twig */
class __TwigTemplate_0dadb2fbd87a4cdae2d0a905b4998ab282a137ba13bcd585c5ba3c683d88f6f6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Otp/disruptionEdit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Otp/disruptionEdit.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetOtp/Otp/disruptionEdit.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetOtp/Base/structure.html.twig", "@EasyjetOtp/Otp/disruptionEdit.html.twig", 1);
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

        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 4, $this->source); })()), "firstName", [], "any", false, false, false, 4), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 4, $this->source); })()), "LastName", [], "any", false, false, false, 4), "html", null, true);
        echo " -  ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 4, $this->source); })()), "batch", [], "any", false, false, false, 4), "cvpMonth", [], "any", false, false, false, 4), "M Y"), "html", null, true);
        echo " ";
        
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
        // line 8
        $context["crsfToken"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("sect_adj_management");
        // line 9
        echo "
<script type=\"text/javascript\">
    \$(function() {
        var otp_remove_request = function(url) {
            bootbox.confirm(\"This will remove your request. Are you really sure to proceed ?\", function(validation) {
                if (validation === true) {
                    url += \"?_token=";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["crsfToken"]) || array_key_exists("crsfToken", $context) ? $context["crsfToken"] : (function () { throw new RuntimeError('Variable "crsfToken" does not exist.', 15, $this->source); })()), "html", null, true);
        echo "\";
                    window.location.href = url;
                }
            });
        };
        \$(\"[data-url-delete]\").on(\"click\", function() {
            otp_remove_request(\$(this).data('urlDelete'));
        });
    })
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 30
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 31
        echo "
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Disruption list</h1>
        <div id=\"description_help\">
            Here's the list  of disruption for <span class=\"badge badge-success\">";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 36, $this->source); })()), "firstName", [], "any", false, false, false, 36), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 36, $this->source); })()), "LastName", [], "any", false, false, false, 36), "html", null, true);
        echo "</span> for the period <span class=\"badge badge-success\">";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 36, $this->source); })()), "batch", [], "any", false, false, false, 36), "cvpMonth", [], "any", false, false, false, 36), "M Y"), "html", null, true);
        echo " </span>.
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 42
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 42, $context, $this->getSourceContext());
        echo "
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a href=\"";
        // line 48
        echo twig_escape_filter($this->env, (isset($context["claimsListUrl"]) || array_key_exists("claimsListUrl", $context) ? $context["claimsListUrl"] : (function () { throw new RuntimeError('Variable "claimsListUrl" does not exist.', 48, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-default\"><i class=\"icon-home\"></i> Return to the list</a>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("otp_disruption_adj_new", ["row" => twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 54, $this->source); })()), "id", [], "any", false, false, false, 54)]), "html", null, true);
        echo "\" class=\"btn btn-primary pull-right\">Add disruption claim</a>
        </div>
    </div>

   
    <div class=\"row\">

        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>List of disruption</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"otp-list\">
                        <thead>
                            <tr>
                                <th>Initial roster duty</th>
                                <th>Notification of change</th>
                                <th>New rostered duty at sign-on</th>
                                <th style=\"width:200px\">Status</th>
                                ";
        // line 77
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLAIMS_ADMIN")) {
            // line 78
            echo "                                    <th Action=\"width:200px\">Action</th>
                                ";
        }
        // line 80
        echo "                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 83
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 83, $this->source); })()), "disruptions", [], "any", false, false, false, 83));
        foreach ($context['_seq'] as $context["_key"] => $context["currentDisruption"]) {
            // line 84
            echo "                            <tr>
                                <td>";
            // line 85
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentDisruption"], "initialStart", [], "any", false, false, false, 85), "Y-m-d H:i"), "html", null, true);
            echo "  - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentDisruption"], "initialEnd", [], "any", false, false, false, 85), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                                <td>";
            // line 86
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentDisruption"], "dateOfChange", [], "any", false, false, false, 86), "Y-m-d H:i"), "html", null, true);
            echo "</td>
                                <td>";
            // line 87
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentDisruption"], "newStart", [], "any", false, false, false, 87), "Y-m-d H:i"), "html", null, true);
            echo " - ";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentDisruption"], "newEnd", [], "any", false, false, false, 87), "Y-m-d H:i"), "html", null, true);
            echo " </td>
                                ";
            // line 88
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["currentDisruption"], "state", [], "any", false, false, false, 88), "0"))) {
                // line 89
                echo "                                    ";
                list($context["state"], $context["message"], $context["val"]) =                 ["In progress", "info", ""];
                // line 90
                echo "                                ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["currentDisruption"], "state", [], "any", false, false, false, 90), "1"))) {
                echo " 
                                    ";
                // line 91
                list($context["state"], $context["message"], $context["val"]) =                 ["Accepted", "success", twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentDisruption"], "statusChangedAt", [], "any", false, false, false, 91), "Y-m-d H:i")];
                // line 92
                echo "                                ";
            } else {
                // line 93
                echo "                                    ";
                list($context["state"], $context["message"], $context["val"]) =                 ["Refused", "danger", twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentDisruption"], "statusChangedAt", [], "any", false, false, false, 93), "Y-m-d H:i")];
                echo " 
                                ";
            }
            // line 94
            echo " 
                                <td><span class=\"badge badge-";
            // line 95
            echo twig_escape_filter($this->env, (isset($context["message"]) || array_key_exists("message", $context) ? $context["message"] : (function () { throw new RuntimeError('Variable "message" does not exist.', 95, $this->source); })()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 95, $this->source); })()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["val"]) || array_key_exists("val", $context) ? $context["val"] : (function () { throw new RuntimeError('Variable "val" does not exist.', 95, $this->source); })()), "html", null, true);
            echo "</span> </td>
                                ";
            // line 96
            if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLAIMS_ADMIN")) {
                // line 97
                echo "                                    <td> <a href=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("otp_disruption_adj_edit", ["disruption" => twig_get_attribute($this->env, $this->source, $context["currentDisruption"], "id", [], "any", false, false, false, 97)]), "html", null, true);
                echo "\" class=\"btn btn-primary\">Edit</a> </td>
                                ";
            }
            // line 99
            echo "                            </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currentDisruption'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 108
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
\t";
        // line 109
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), 'errors');
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-comment\"></i>
                    </span>
                    <h5>Comment</h5>
                </div>
                <div class=\"widget-content nopadding\">

                    <div class=\"form-group\">
                        <label class=\"control-label\" for=\"effectiveDate\">";
        // line 122
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 122, $this->source); })()), "disruptionComment", [], "any", false, false, false, 122), 'label');
        echo "</label>
                        <div class=\"controls\">
                            ";
        // line 124
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 124, $this->source); })()), "disruptionComment", [], "any", false, false, false, 124), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div>
                    <div class=\"form-actions\">
                        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon-comment\"></i> Save comment</button>
                    </div>
                </div>
            </div>
        </div>           
    </div>

";
        // line 135
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 135, $this->source); })()), 'form_end');
        echo "


</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetOtp/Otp/disruptionEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  337 => 135,  323 => 124,  318 => 122,  302 => 109,  298 => 108,  289 => 101,  282 => 99,  276 => 97,  274 => 96,  266 => 95,  263 => 94,  257 => 93,  254 => 92,  252 => 91,  247 => 90,  244 => 89,  242 => 88,  236 => 87,  232 => 86,  226 => 85,  223 => 84,  219 => 83,  214 => 80,  210 => 78,  208 => 77,  182 => 54,  173 => 48,  164 => 42,  151 => 36,  144 => 31,  134 => 30,  112 => 15,  104 => 9,  102 => 8,  88 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetOtp/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %} {{ row.firstName }} {{ row.LastName }} -  {{ row.batch.cvpMonth|date(\"M Y\") }} {% endblock %}

{% block specificJs %}{{ parent() }}

{% set crsfToken = csrf_token('sect_adj_management') %}

<script type=\"text/javascript\">
    \$(function() {
        var otp_remove_request = function(url) {
            bootbox.confirm(\"This will remove your request. Are you really sure to proceed ?\", function(validation) {
                if (validation === true) {
                    url += \"?_token={{ crsfToken }}\";
                    window.location.href = url;
                }
            });
        };
        \$(\"[data-url-delete]\").on(\"click\", function() {
            otp_remove_request(\$(this).data('urlDelete'));
        });
    })
</script>

{% endblock specificJs %}



{% block container %}

<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Disruption list</h1>
        <div id=\"description_help\">
            Here's the list  of disruption for <span class=\"badge badge-success\">{{ row.firstName }} {{ row.LastName }}</span> for the period <span class=\"badge badge-success\">{{ row.batch.cvpMonth|date(\"M Y\") }} </span>.
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ macros.wizz() }}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a href=\"{{ claimsListUrl }}\" class=\"btn btn-default\"><i class=\"icon-home\"></i> Return to the list</a>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a href=\"{{ url('otp_disruption_adj_new', {row : row.id}) }}\" class=\"btn btn-primary pull-right\">Add disruption claim</a>
        </div>
    </div>

   
    <div class=\"row\">

        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>List of disruption</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"otp-list\">
                        <thead>
                            <tr>
                                <th>Initial roster duty</th>
                                <th>Notification of change</th>
                                <th>New rostered duty at sign-on</th>
                                <th style=\"width:200px\">Status</th>
                                {% if not is_granted('ROLE_CLAIMS_ADMIN') %}
                                    <th Action=\"width:200px\">Action</th>
                                {% endif %}
                            </tr>
                        </thead>
                        <tbody>
                            {% for currentDisruption in row.disruptions %}
                            <tr>
                                <td>{{ currentDisruption.initialStart | date('Y-m-d H:i') }}  - {{ currentDisruption.initialEnd | date('Y-m-d H:i') }}</td>
                                <td>{{ currentDisruption.dateOfChange | date('Y-m-d H:i') }}</td>
                                <td>{{ currentDisruption.newStart | date('Y-m-d H:i') }} - {{ currentDisruption.newEnd | date('Y-m-d H:i') }} </td>
                                {% if currentDisruption.state == '0' %}
                                    {% set state, message, val = 'In progress', 'info', ''  %}
                                {% elseif currentDisruption.state == '1' %} 
                                    {% set state , message, val =  'Accepted' ,'success', (currentDisruption.statusChangedAt | date('Y-m-d H:i')) %}
                                {% else %}
                                    {% set state, message, val = 'Refused' , 'danger',  (currentDisruption.statusChangedAt | date('Y-m-d H:i')) %} 
                                {% endif %} 
                                <td><span class=\"badge badge-{{ message }}\">{{ state }} {{val}}</span> </td>
                                {% if not is_granted('ROLE_CLAIMS_ADMIN') %}
                                    <td> <a href=\"{{ url('otp_disruption_adj_edit', {disruption: currentDisruption.id}) }}\" class=\"btn btn-primary\">Edit</a> </td>
                                {% endif %}
                            </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
\t{{ form_errors(form) }}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-comment\"></i>
                    </span>
                    <h5>Comment</h5>
                </div>
                <div class=\"widget-content nopadding\">

                    <div class=\"form-group\">
                        <label class=\"control-label\" for=\"effectiveDate\">{{ form_label(form.disruptionComment) }}</label>
                        <div class=\"controls\">
                            {{ form_widget(form.disruptionComment, { 'attr': {'class': 'form-control'} }) }}
                        </div>
                    </div>
                    <div class=\"form-actions\">
                        <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon-comment\"></i> Save comment</button>
                    </div>
                </div>
            </div>
        </div>           
    </div>

{{ form_end(form) }}


</div>

{% endblock container %}
", "@EasyjetOtp/Otp/disruptionEdit.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\OtpBundle\\Resources\\views\\Otp\\disruptionEdit.html.twig");
    }
}
