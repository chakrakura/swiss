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

/* @EasyjetOtp/Otp/sectorEdit.html.twig */
class __TwigTemplate_ceb376177f9d97d3ee38324f334259301d4ea1163b81652ee95e2e51bb734ad1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Otp/sectorEdit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Otp/sectorEdit.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetOtp/Otp/sectorEdit.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetOtp/Base/structure.html.twig", "@EasyjetOtp/Otp/sectorEdit.html.twig", 1);
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

        echo "Make a claim adjsutment";
        
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
        // line 16
        echo twig_escape_filter($this->env, (isset($context["crsfToken"]) || array_key_exists("crsfToken", $context) ? $context["crsfToken"] : (function () { throw new RuntimeError('Variable "crsfToken" does not exist.', 16, $this->source); })()), "html", null, true);
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

    // line 32
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 33
        echo "
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Claims adjustment</h1>
        <div id=\"description_help\">Below you can request a new claims adjustment.</div>
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
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Global information</h5>
                </div>
                <div class=\"widget-content nopadding\">
                   
                    <div class=\"row\">

                        <div class=\"col-xs-6\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Firstname</label>
                                <div class=\"controls\">
                                    <input type=\"text\" class=\"form-control\" value=\"";
        // line 70
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 70, $this->source); })()), "firstname", [], "any", false, false, false, 70), "html", null, true);
        echo "\" disabled=\"disabled\">
                                </div>
                            </div>
                        </div>

                        <div class=\"col-xs-6\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Lastname</label>
                                <div class=\"controls\">
                                    <input type=\"text\" class=\"form-control\" value=\"";
        // line 79
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 79, $this->source); })()), "lastname", [], "any", false, false, false, 79), "html", null, true);
        echo "\" disabled=\"disabled\">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">

                        <div class=\"col-xs-6\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Compensation grade</label>
                                <div class=\"controls\">
                                    <input type=\"text\" class=\"form-control\" value=\"";
        // line 91
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 91, $this->source); })()), "compensationGrade", [], "any", false, false, false, 91), "html", null, true);
        echo "\" disabled=\"disabled\">
                                </div>
                            </div>
                        </div>

                        <div class=\"col-xs-6\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Contract</label>
                                <div class=\"controls\">
                                    <input type=\"text\" class=\"form-control\" value=\"";
        // line 100
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 100, $this->source); })()), "typeEftr", [], "any", false, false, false, 100), "type", [], "any", false, false, false, 100), "html", null, true);
        echo "\" disabled=\"disabled\">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class=\"row\">

                        <div class=\"col-xs-6\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Cvp month</label>
                                <div class=\"controls\">
                                    <input type=\"text\" class=\"form-control\" value=\"";
        // line 113
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 113, $this->source); })()), "batch", [], "any", false, false, false, 113), "cvpMonth", [], "any", false, false, false, 113), "M Y"), "html", null, true);
        echo "\" disabled=\"disabled\">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Allowed adjustments</h5>
                </div>
                <div class=\"widget-content\">
                    <p>
                        <span class=\"badge badge-info\">N:  ";
        // line 135
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 135, $this->source); })()), "sectN", [], "any", false, false, false, 135), "html", null, true);
        echo "</span>
                        <span class=\"badge badge-info\">S:  ";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 136, $this->source); })()), "sectS", [], "any", false, false, false, 136), "html", null, true);
        echo "</span>
                        <span class=\"badge badge-info\">M:  ";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 137, $this->source); })()), "sectM", [], "any", false, false, false, 137), "html", null, true);
        echo "</span>
                        <span class=\"badge badge-info\">L:  ";
        // line 138
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 138, $this->source); })()), "sectL", [], "any", false, false, false, 138), "html", null, true);
        echo "</span>
                        <span class=\"badge badge-info\">XL: ";
        // line 139
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 139, $this->source); })()), "sectXL", [], "any", false, false, false, 139), "html", null, true);
        echo "</span>
                        ";
        // line 140
        $context["amount"] = (twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 140, $this->source); })()), "sectManualTaxedChf", [], "any", false, false, false, 140) + twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 140, $this->source); })()), "sectManualNotTaxedChf", [], "any", false, false, false, 140));
        // line 141
        echo "                        <span class=\"badge badge-info\">Manual : ";
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 141, $this->source); })()), 2, ".", ","), "html", null, true);
        echo " CHF</span>
                    </p>

                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a href=\"";
        // line 151
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("otp_sect_adj_new", ["row" => twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 151, $this->source); })()), "id", [], "any", false, false, false, 151)]), "html", null, true);
        echo "\" class=\"btn btn-primary pull-right\">New sector adjustment request</a>
        </div>
    </div>

    <div class=\"row\">

        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Sector adjustment requests</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"otp-list\">
                        <thead>
                            <tr>
                                <th>N</th>
                                <th>S</th>
                                <th>M</th>
                                <th>L</th>
                                <th>XL</th>
                                <th>CHF taxed</th>
                                <th>CHF non taxed</th>
                                <th>Status</th>
                                <th style=\"width:150px\">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 181, $this->source); })()), "sectorsAdjustments", [], "any", false, false, false, 181));
        foreach ($context['_seq'] as $context["_key"] => $context["currentAdjustment"]) {
            // line 182
            echo "                                <tr>
                                    <td>";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentAdjustment"], "sectN", [], "any", false, false, false, 183), "html", null, true);
            echo "</td>
                                    <td>";
            // line 184
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentAdjustment"], "sectS", [], "any", false, false, false, 184), "html", null, true);
            echo "</td>
                                    <td>";
            // line 185
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentAdjustment"], "sectM", [], "any", false, false, false, 185), "html", null, true);
            echo "</td>
                                    <td>";
            // line 186
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentAdjustment"], "sectL", [], "any", false, false, false, 186), "html", null, true);
            echo "</td>
                                    <td>";
            // line 187
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentAdjustment"], "sectXL", [], "any", false, false, false, 187), "html", null, true);
            echo "</td>
                                    <td>";
            // line 188
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentAdjustment"], "sectManualTaxedChf", [], "any", false, false, false, 188), "html", null, true);
            echo "</td>
                                    <td>";
            // line 189
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentAdjustment"], "sectManualNotTaxedChf", [], "any", false, false, false, 189), "html", null, true);
            echo "</td>
                                    <td>
                                        ";
            // line 191
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["currentAdjustment"], "status", [], "any", false, false, false, 191), "pending"))) {
                // line 192
                echo "                                            <span class=\"badge badge-info\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentAdjustment"], "status", [], "any", false, false, false, 192), "html", null, true);
                echo "</span>
                                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 193
$context["currentAdjustment"], "status", [], "any", false, false, false, 193), "accepted"))) {
                // line 194
                echo "                                            <span class=\"badge badge-success\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentAdjustment"], "status", [], "any", false, false, false, 194), "html", null, true);
                if (twig_get_attribute($this->env, $this->source, $context["currentAdjustment"], "statusChangedAt", [], "any", false, false, false, 194)) {
                    echo " (";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentAdjustment"], "statusChangedAt", [], "any", false, false, false, 194), "d/m/Y H:i"), "html", null, true);
                    echo ")";
                }
                echo "</span>
                                        ";
            } elseif ((0 === twig_compare(twig_get_attribute($this->env, $this->source,             // line 195
$context["currentAdjustment"], "status", [], "any", false, false, false, 195), "refused"))) {
                // line 196
                echo "                                            <span class=\"badge badge-danger\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentAdjustment"], "status", [], "any", false, false, false, 196), "html", null, true);
                if (twig_get_attribute($this->env, $this->source, $context["currentAdjustment"], "statusChangedAt", [], "any", false, false, false, 196)) {
                    echo " (";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentAdjustment"], "statusChangedAt", [], "any", false, false, false, 196), "d/m/Y H:i"), "html", null, true);
                    echo ")";
                }
                echo "</span>
                                        ";
            }
            // line 198
            echo "                                    </td>
                                    <td>
                                        <a href=\"";
            // line 200
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("otp_sect_adj_edit", ["sectAdj" => twig_get_attribute($this->env, $this->source, $context["currentAdjustment"], "id", [], "any", false, false, false, 200)]), "html", null, true);
            echo "\" class=\"btn btn-primary\">Edit</a>

                                        ";
            // line 202
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["currentAdjustment"], "status", [], "any", false, false, false, 202), "pending"))) {
                // line 203
                echo "                                            <a href=\"javascript:;\"  data-url-delete=\"";
                echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("otp_sect_adj_delete", ["sectAdj" => twig_get_attribute($this->env, $this->source, $context["currentAdjustment"], "id", [], "any", false, false, false, 203)]), "html", null, true);
                echo "\" class=\"btn btn-danger\">Cancel</a>
                                        ";
            } else {
                // line 205
                echo "                                            &nbsp;
                                        ";
            }
            // line 207
            echo "
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currentAdjustment'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 211
        echo "                        </tbody>
                    </table>
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
        return "@EasyjetOtp/Otp/sectorEdit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 211,  423 => 207,  419 => 205,  413 => 203,  411 => 202,  406 => 200,  402 => 198,  391 => 196,  389 => 195,  379 => 194,  377 => 193,  372 => 192,  370 => 191,  365 => 189,  361 => 188,  357 => 187,  353 => 186,  349 => 185,  345 => 184,  341 => 183,  338 => 182,  334 => 181,  301 => 151,  287 => 141,  285 => 140,  281 => 139,  277 => 138,  273 => 137,  269 => 136,  265 => 135,  240 => 113,  224 => 100,  212 => 91,  197 => 79,  185 => 70,  160 => 48,  151 => 42,  140 => 33,  130 => 32,  107 => 16,  98 => 9,  96 => 8,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetOtp/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Make a claim adjsutment{% endblock %}

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
        <h1 id=\"titre_help\">Claims adjustment</h1>
        <div id=\"description_help\">Below you can request a new claims adjustment.</div>
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
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Global information</h5>
                </div>
                <div class=\"widget-content nopadding\">
                   
                    <div class=\"row\">

                        <div class=\"col-xs-6\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Firstname</label>
                                <div class=\"controls\">
                                    <input type=\"text\" class=\"form-control\" value=\"{{ row.firstname }}\" disabled=\"disabled\">
                                </div>
                            </div>
                        </div>

                        <div class=\"col-xs-6\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Lastname</label>
                                <div class=\"controls\">
                                    <input type=\"text\" class=\"form-control\" value=\"{{ row.lastname }}\" disabled=\"disabled\">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class=\"row\">

                        <div class=\"col-xs-6\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Compensation grade</label>
                                <div class=\"controls\">
                                    <input type=\"text\" class=\"form-control\" value=\"{{ row.compensationGrade }}\" disabled=\"disabled\">
                                </div>
                            </div>
                        </div>

                        <div class=\"col-xs-6\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Contract</label>
                                <div class=\"controls\">
                                    <input type=\"text\" class=\"form-control\" value=\"{{ row.typeEftr.type }}\" disabled=\"disabled\">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class=\"row\">

                        <div class=\"col-xs-6\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">Cvp month</label>
                                <div class=\"controls\">
                                    <input type=\"text\" class=\"form-control\" value=\"{{ row.batch.cvpMonth|date(\"M Y\") }}\" disabled=\"disabled\">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Allowed adjustments</h5>
                </div>
                <div class=\"widget-content\">
                    <p>
                        <span class=\"badge badge-info\">N:  {{ row.sectN }}</span>
                        <span class=\"badge badge-info\">S:  {{ row.sectS }}</span>
                        <span class=\"badge badge-info\">M:  {{ row.sectM }}</span>
                        <span class=\"badge badge-info\">L:  {{ row.sectL }}</span>
                        <span class=\"badge badge-info\">XL: {{ row.sectXL }}</span>
                        {% set amount = row.sectManualTaxedChf + row.sectManualNotTaxedChf %}
                        <span class=\"badge badge-info\">Manual : {{ amount|number_format(2, '.', ',') }} CHF</span>
                    </p>

                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a href=\"{{ url('otp_sect_adj_new', {row : row.id}) }}\" class=\"btn btn-primary pull-right\">New sector adjustment request</a>
        </div>
    </div>

    <div class=\"row\">

        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Sector adjustment requests</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"otp-list\">
                        <thead>
                            <tr>
                                <th>N</th>
                                <th>S</th>
                                <th>M</th>
                                <th>L</th>
                                <th>XL</th>
                                <th>CHF taxed</th>
                                <th>CHF non taxed</th>
                                <th>Status</th>
                                <th style=\"width:150px\">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for currentAdjustment in row.sectorsAdjustments %}
                                <tr>
                                    <td>{{ currentAdjustment.sectN }}</td>
                                    <td>{{ currentAdjustment.sectS }}</td>
                                    <td>{{ currentAdjustment.sectM }}</td>
                                    <td>{{ currentAdjustment.sectL }}</td>
                                    <td>{{ currentAdjustment.sectXL }}</td>
                                    <td>{{ currentAdjustment.sectManualTaxedChf }}</td>
                                    <td>{{ currentAdjustment.sectManualNotTaxedChf }}</td>
                                    <td>
                                        {% if currentAdjustment.status == \"pending\" %}
                                            <span class=\"badge badge-info\">{{ currentAdjustment.status }}</span>
                                        {% elseif currentAdjustment.status == \"accepted\" %}
                                            <span class=\"badge badge-success\">{{ currentAdjustment.status }}{% if currentAdjustment.statusChangedAt %} ({{ currentAdjustment.statusChangedAt|date(\"d/m/Y H:i\") }}){% endif %}</span>
                                        {% elseif currentAdjustment.status == \"refused\" %}
                                            <span class=\"badge badge-danger\">{{ currentAdjustment.status }}{% if currentAdjustment.statusChangedAt %} ({{ currentAdjustment.statusChangedAt|date(\"d/m/Y H:i\") }}){% endif %}</span>
                                        {% endif %}
                                    </td>
                                    <td>
                                        <a href=\"{{ url('otp_sect_adj_edit', {sectAdj: currentAdjustment.id}) }}\" class=\"btn btn-primary\">Edit</a>

                                        {% if currentAdjustment.status == \"pending\" %}
                                            <a href=\"javascript:;\"  data-url-delete=\"{{ url('otp_sect_adj_delete', {sectAdj: currentAdjustment.id}) }}\" class=\"btn btn-danger\">Cancel</a>
                                        {% else %}
                                            &nbsp;
                                        {% endif %}

                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</div>

{% endblock container %}
", "@EasyjetOtp/Otp/sectorEdit.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\OtpBundle\\Resources\\views\\Otp\\sectorEdit.html.twig");
    }
}
