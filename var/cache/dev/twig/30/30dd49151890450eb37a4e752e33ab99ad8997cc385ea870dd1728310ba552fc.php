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

/* @EasyjetOtp/DisruptionClaimsRequest/edit.html.twig */
class __TwigTemplate_0e8c2072ce72ec6692df9294fa9159d5f6967961d98fa33f889b46a6eef76b52 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/DisruptionClaimsRequest/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/DisruptionClaimsRequest/edit.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetOtp/DisruptionClaimsRequest/edit.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetOtp/Base/structure.html.twig", "@EasyjetOtp/DisruptionClaimsRequest/edit.html.twig", 1);
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

        echo " Edit a disruption claim ";
        
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

        // line 7
        echo "\t";
        $this->displayParentBlock("specificJs", $context, $blocks);
        echo "
<script language=\"javascript\">
    window.onload = function(e) { 
\t\tvar check = function(stateField) {
\t\t\tif (stateField.value == \"2\") {
\t\t\t\tmessageField.style.display = \"block\";
\t\t\t} else {
\t\t\t\tmessageField.style.display = \"none\";
\t\t\t}
\t\t}
\t\tvar stateField = document.getElementById('select_etat');
\t\tif (stateField != null) {
\t\t\tvar messageField = document.getElementById('refuse_reason_block');
\t\t\tif (messageField != null) {
\t\t\t\tstateField.onchange = function() {
\t\t\t\t\tcheck(stateField);
\t\t\t\t}
\t\t\t\t
\t\t\t}

\t\t\tcheck(stateField);
\t\t}
\t}
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
\t<div id=\"content\">
\t\t<div id=\"content-header\">
\t\t\t<h1 id=\"titre_help\">Disruption claim</h1>
\t\t\t<div id=\"description_help\">Enter your roster information below and click Submit. The system will automatically check if your request is correct. Ultimately, an administrator must validate your claim.</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t";
        // line 45
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 45, $context, $this->getSourceContext());
        echo "
\t\t\t</div>
\t\t</div>

\t\t";
        // line 49
        if ((isset($context["alertMultiple"]) || array_key_exists("alertMultiple", $context) ? $context["alertMultiple"] : (function () { throw new RuntimeError('Variable "alertMultiple" does not exist.', 49, $this->source); })())) {
            // line 50
            echo "\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t<button class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t\t\t\t<strong>Warning</strong>
\t\t\t\t\t\tThis user has
\t\t\t\t\t\t";
            // line 56
            echo twig_escape_filter($this->env, (isset($context["alertMultiple"]) || array_key_exists("alertMultiple", $context) ? $context["alertMultiple"] : (function () { throw new RuntimeError('Variable "alertMultiple" does not exist.', 56, $this->source); })()), "html", null, true);
            echo "
\t\t\t\t\t\tdisruptions for this date
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t";
        }
        // line 62
        echo "
        ";
        // line 63
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
\t\t";
        // line 64
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 'errors');
        echo "

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<div class=\"widget-box\">
\t\t\t\t\t\t<div class=\"widget-title\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"icon-edit\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<h5>Request</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"widget-content nopadding\">

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-12 information-row\">
\t\t\t\t\t\t\t\t\t<div class=\"widget-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"widget-title\">

\t\t\t\t\t\t\t\t\t\t\t<h5>1. Initial roster duty (zoulou time)</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">Date</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t \t<input  readonly name=\"initial_start_date\" type=\"text\" id=\"initial_start_date\" value = \"";
        // line 94
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otpDisruption"]) || array_key_exists("otpDisruption", $context) ? $context["otpDisruption"] : (function () { throw new RuntimeError('Variable "otpDisruption" does not exist.', 94, $this->source); })()), "initialStart", [], "any", false, false, false, 94), "d/m/Y"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t(dd/mm/YYYY)
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">From - to</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly  name=\"initial_start_time\" type=\"text\" id=\"initial_start_time\" value=\"";
        // line 109
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otpDisruption"]) || array_key_exists("otpDisruption", $context) ? $context["otpDisruption"] : (function () { throw new RuntimeError('Variable "otpDisruption" does not exist.', 109, $this->source); })()), "initialStart", [], "any", false, false, false, 109), "H:i"), "html", null, true);
        echo "\" size=\"7\" maxlength=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly  name=\"initial_end_time\" type=\"text\" id=\"initial_end_time\" value=\"";
        // line 111
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otpDisruption"]) || array_key_exists("otpDisruption", $context) ? $context["otpDisruption"] : (function () { throw new RuntimeError('Variable "otpDisruption" does not exist.', 111, $this->source); })()), "initialEnd", [], "any", false, false, false, 111), "H:i"), "html", null, true);
        echo "\" size=\"7\" maxlength=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t(HH:mm)
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 information-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"widget-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-title\">

\t\t\t\t\t\t\t\t\t\t\t\t<h5>2. Notification of change (zoulou time)</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">Date</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly name=\"date_of_change\" type=\"text\" id=\"date_of_change\" value=\"";
        // line 138
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otpDisruption"]) || array_key_exists("otpDisruption", $context) ? $context["otpDisruption"] : (function () { throw new RuntimeError('Variable "otpDisruption" does not exist.', 138, $this->source); })()), "dateOfChange", [], "any", false, false, false, 138), "d/m/Y"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(dd/mm/YYYY)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">Time</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input  readonly name=\"time_of_change\" type=\"text\" id=\"time_of_change\" value=\"";
        // line 152
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otpDisruption"]) || array_key_exists("otpDisruption", $context) ? $context["otpDisruption"] : (function () { throw new RuntimeError('Variable "otpDisruption" does not exist.', 152, $this->source); })()), "dateOfChange", [], "any", false, false, false, 152), "H:i"), "html", null, true);
        echo "\" size=\"7\" maxlength=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 information-row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-title\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>3. New rostered duty at sign-on (zoulou time)</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">Date</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly data-provide=\"datepicker\" data-date-format=\"dd/mm/yyyy\"  name=\"new_start_date\" type=\"text\" id=\"new_start_date\" value=\"";
        // line 178
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otpDisruption"]) || array_key_exists("otpDisruption", $context) ? $context["otpDisruption"] : (function () { throw new RuntimeError('Variable "otpDisruption" does not exist.', 178, $this->source); })()), "newStart", [], "any", false, false, false, 178), "d/m/Y"), "html", null, true);
        echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(dd/mm/YYYY)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFrom - to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly name=\"new_start_time\" type=\"text\" id=\"new_start_time\" value=\"";
        // line 194
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otpDisruption"]) || array_key_exists("otpDisruption", $context) ? $context["otpDisruption"] : (function () { throw new RuntimeError('Variable "otpDisruption" does not exist.', 194, $this->source); })()), "newStart", [], "any", false, false, false, 194), "H:i"), "html", null, true);
        echo "\" size=\"7\" maxlength=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly name=\"new_end_time\" type=\"text\" id=\"new_end_time\" value=\"";
        // line 196
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otpDisruption"]) || array_key_exists("otpDisruption", $context) ? $context["otpDisruption"] : (function () { throw new RuntimeError('Variable "otpDisruption" does not exist.', 196, $this->source); })()), "newEnd", [], "any", false, false, false, 196), "H:i"), "html", null, true);
        echo "\" size=\"7\" maxlength=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(HH:mm)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
                                        ";
        // line 206
        if ((isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 206, $this->source); })())) {
            // line 207
            echo "\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t \t<div class=\"col-xs-12 information-row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-title\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>3. Administration pannel</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Status</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select  name=\"etat\" id=\"select_etat\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option ";
            // line 220
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["otpDisruption"]) || array_key_exists("otpDisruption", $context) ? $context["otpDisruption"] : (function () { throw new RuntimeError('Variable "otpDisruption" does not exist.', 220, $this->source); })()), "state", [], "any", false, false, false, 220), "0"))) ? ("selected=\"selected\"") : (""));
            echo " value=\"0\">In progress ...</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option ";
            // line 221
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["otpDisruption"]) || array_key_exists("otpDisruption", $context) ? $context["otpDisruption"] : (function () { throw new RuntimeError('Variable "otpDisruption" does not exist.', 221, $this->source); })()), "state", [], "any", false, false, false, 221), "1"))) ? ("selected=\"selected\"") : (""));
            echo " value=\"1\">Accepted</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option ";
            // line 222
            echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["otpDisruption"]) || array_key_exists("otpDisruption", $context) ? $context["otpDisruption"] : (function () { throw new RuntimeError('Variable "otpDisruption" does not exist.', 222, $this->source); })()), "state", [], "any", false, false, false, 222), "2"))) ? ("selected=\"selected\"") : (""));
            echo " value=\"2\">Refused</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"refuse_reason_block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Refuse reason</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <textarea id=\"refuse_reason\" class=\"form-control\" name=\"refuse_reason\">";
            // line 230
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["otpDisruption"]) || array_key_exists("otpDisruption", $context) ? $context["otpDisruption"] : (function () { throw new RuntimeError('Variable "otpDisruption" does not exist.', 230, $this->source); })()), "refuseReason", [], "any", false, false, false, 230), "html", null, true);
            echo "</textarea> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                          
                                            ";
        } else {
            // line 239
            echo "                                            <div class=\"row\">
                                                <div class=\"col-xs-12 information-row\">
                                                    <div class=\"form-group\">
                                                        <label class=\"control-label\">Status :</label>
                                                        <div class=\"controls\">
                                                            ";
            // line 244
            echo twig_escape_filter($this->env, (isset($context["statusString"]) || array_key_exists("statusString", $context) ? $context["statusString"] : (function () { throw new RuntimeError('Variable "statusString" does not exist.', 244, $this->source); })()), "html", null, true);
            echo " ";
            if ((isset($context["refuseReason"]) || array_key_exists("refuseReason", $context) ? $context["refuseReason"] : (function () { throw new RuntimeError('Variable "refuseReason" does not exist.', 244, $this->source); })())) {
                echo "<br><strong>Refuse reason:</strong> ";
                echo twig_escape_filter($this->env, (isset($context["refuseReason"]) || array_key_exists("refuseReason", $context) ? $context["refuseReason"] : (function () { throw new RuntimeError('Variable "refuseReason" does not exist.', 244, $this->source); })()), "html", null, true);
                echo " ";
            }
            // line 245
            echo "                                                        </div>
                                                    </div>

                                                </div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t    ";
        }
        // line 251
        echo "\t\t\t\t\t\t\t\t\t\t\t";
        if ((isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 251, $this->source); })())) {
            echo " 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSend disruption claim</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                            ";
        }
        // line 258
        echo "\t\t\t\t\t\t\t\t\t\t";
        if ((isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 258, $this->source); })())) {
            echo "\t
\t\t\t\t\t\t\t\t\t\t</div>
                                        ";
        }
        // line 261
        echo "\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t";
        // line 270
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), 'form_end');
        echo "
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetOtp/DisruptionClaimsRequest/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  452 => 270,  441 => 261,  434 => 258,  423 => 251,  415 => 245,  407 => 244,  400 => 239,  388 => 230,  377 => 222,  373 => 221,  369 => 220,  354 => 207,  352 => 206,  339 => 196,  334 => 194,  315 => 178,  286 => 152,  269 => 138,  239 => 111,  234 => 109,  216 => 94,  183 => 64,  179 => 63,  176 => 62,  167 => 56,  159 => 50,  157 => 49,  150 => 45,  139 => 36,  129 => 35,  92 => 7,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetOtp/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %} Edit a disruption claim {% endblock %}

{% block specificJs %}
\t{{ parent() }}
<script language=\"javascript\">
    window.onload = function(e) { 
\t\tvar check = function(stateField) {
\t\t\tif (stateField.value == \"2\") {
\t\t\t\tmessageField.style.display = \"block\";
\t\t\t} else {
\t\t\t\tmessageField.style.display = \"none\";
\t\t\t}
\t\t}
\t\tvar stateField = document.getElementById('select_etat');
\t\tif (stateField != null) {
\t\t\tvar messageField = document.getElementById('refuse_reason_block');
\t\t\tif (messageField != null) {
\t\t\t\tstateField.onchange = function() {
\t\t\t\t\tcheck(stateField);
\t\t\t\t}
\t\t\t\t
\t\t\t}

\t\t\tcheck(stateField);
\t\t}
\t}
</script>

{% endblock specificJs %}


{% block container %}

\t<div id=\"content\">
\t\t<div id=\"content-header\">
\t\t\t<h1 id=\"titre_help\">Disruption claim</h1>
\t\t\t<div id=\"description_help\">Enter your roster information below and click Submit. The system will automatically check if your request is correct. Ultimately, an administrator must validate your claim.</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t{{ macros.wizz() }}
\t\t\t</div>
\t\t</div>

\t\t{% if alertMultiple %}
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<div class=\"alert alert-warning\">
\t\t\t\t\t\t<button class=\"close\" data-dismiss=\"alert\">×</button>
\t\t\t\t\t\t<strong>Warning</strong>
\t\t\t\t\t\tThis user has
\t\t\t\t\t\t{{ alertMultiple }}
\t\t\t\t\t\tdisruptions for this date
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t{% endif %}

        {{ form_start(form, {'attr': {'class': 'form-horizontal'} }) }}
\t\t{{ form_errors(form) }}

\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t<div class=\"widget-box\">
\t\t\t\t\t\t<div class=\"widget-title\">
\t\t\t\t\t\t\t<span class=\"icon\">
\t\t\t\t\t\t\t\t<i class=\"icon-edit\"></i>
\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t<h5>Request</h5>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"widget-content nopadding\">

\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-xs-12 information-row\">
\t\t\t\t\t\t\t\t\t<div class=\"widget-box\">
\t\t\t\t\t\t\t\t\t\t<div class=\"widget-title\">

\t\t\t\t\t\t\t\t\t\t\t<h5>1. Initial roster duty (zoulou time)</h5>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-1\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">Date</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t \t<input  readonly name=\"initial_start_date\" type=\"text\" id=\"initial_start_date\" value = \"{{ otpDisruption.initialStart | date('d/m/Y') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t(dd/mm/YYYY)
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-2\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">From - to</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-5\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly  name=\"initial_start_time\" type=\"text\" id=\"initial_start_time\" value=\"{{ otpDisruption.initialStart | date('H:i') }}\" size=\"7\" maxlength=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly  name=\"initial_end_time\" type=\"text\" id=\"initial_end_time\" value=\"{{ otpDisruption.initialEnd | date('H:i') }}\" size=\"7\" maxlength=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t(HH:mm)
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 information-row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"widget-box\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-title\">

\t\t\t\t\t\t\t\t\t\t\t\t<h5>2. Notification of change (zoulou time)</h5>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">Date</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly name=\"date_of_change\" type=\"text\" id=\"date_of_change\" value=\"{{ otpDisruption.dateOfChange | date('d/m/Y') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(dd/mm/YYYY)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">Time</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input  readonly name=\"time_of_change\" type=\"text\" id=\"time_of_change\" value=\"{{ otpDisruption.dateOfChange | date('H:i') }}\" size=\"7\" maxlength=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12 information-row\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-box\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-title\">

\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>3. New rostered duty at sign-on (zoulou time)</h5>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-1\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">Date</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-4\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly data-provide=\"datepicker\" data-date-format=\"dd/mm/yyyy\"  name=\"new_start_date\" type=\"text\" id=\"new_start_date\" value=\"{{ otpDisruption.newStart | date('d/m/Y') }}\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(dd/mm/YYYY)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-2\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tFrom - to
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly name=\"new_start_time\" type=\"text\" id=\"new_start_time\" value=\"{{ otpDisruption.newStart | date('H:i') }}\" size=\"7\" maxlength=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input readonly name=\"new_end_time\" type=\"text\" id=\"new_end_time\" value=\"{{ otpDisruption.newEnd | date('H:i') }}\" size=\"7\" maxlength=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(HH:mm)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>
                                        {% if isAdmin %}
\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t \t<div class=\"col-xs-12 information-row\">
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-box\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"widget-title\">

\t\t\t\t\t\t\t\t\t\t\t\t\t\t<h5>3. Administration pannel</h5>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Status</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<select  name=\"etat\" id=\"select_etat\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option {{ otpDisruption.state == \"0\" ? 'selected=\"selected\"' : '' }} value=\"0\">In progress ...</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option {{ otpDisruption.state == \"1\" ? 'selected=\"selected\"' : '' }} value=\"1\">Accepted</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<option {{ otpDisruption.state == \"2\" ? 'selected=\"selected\"' : '' }} value=\"2\">Refused</option>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\" id=\"refuse_reason_block\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<label class=\"control-label\">Refuse reason</label>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t   <textarea id=\"refuse_reason\" class=\"form-control\" name=\"refuse_reason\">{{ otpDisruption.refuseReason}}</textarea> 
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>
                                          
                                            {% else %}
                                            <div class=\"row\">
                                                <div class=\"col-xs-12 information-row\">
                                                    <div class=\"form-group\">
                                                        <label class=\"control-label\">Status :</label>
                                                        <div class=\"controls\">
                                                            {{ statusString }} {% if refuseReason %}<br><strong>Refuse reason:</strong> {{ refuseReason }} {% endif %}
                                                        </div>
                                                    </div>

                                                </div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t    {% endif  %}
\t\t\t\t\t\t\t\t\t\t\t{% if isAdmin %} 
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t\tSend disruption claim</button>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                            {% endif  %}
\t\t\t\t\t\t\t\t\t\t{% if isAdmin %}\t
\t\t\t\t\t\t\t\t\t\t</div>
                                        {% endif  %}
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t{{ form_end(form) }}
\t</div>

{% endblock container %}
", "@EasyjetOtp/DisruptionClaimsRequest/edit.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\OtpBundle\\Resources\\views\\DisruptionClaimsRequest\\edit.html.twig");
    }
}
