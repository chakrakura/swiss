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

/* @EasyjetOtp/DisruptionClaimsRequest/new.html.twig */
class __TwigTemplate_f7756470a626ad2b03d878a84a66993b0b8392decb47744d9e32703c0bda5fb0 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/DisruptionClaimsRequest/new.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/DisruptionClaimsRequest/new.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetOtp/DisruptionClaimsRequest/new.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetOtp/Base/structure.html.twig", "@EasyjetOtp/DisruptionClaimsRequest/new.html.twig", 1);
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

        echo " Adding a disruption claim ";
        
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

    // Tests the validity of the form before sending it
\t
    \$(\"form\").submit(function( event ) {
\t\tvar isAdmin = \"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 34, $this->source); })()), "html", null, true);
        echo "\";
\t\tif(!isAdmin) {
\t\t\t// Initial rostered test 
\t\t\tif(!\$(\"#initial_start_date\").val().match(/^[0-9]{2}\\/[0-9]{2}\\/[0-9]{4}\$/))
\t\t\t{
\t\t\t\talert(\"Unknown date format.\");
\t\t\t\t\$(\"#initial_start_date\").focus();
\t\t\t\treturn false;
\t\t\t}\t
\t\t\tif(!\$(\"#initial_start_time\").val().match(/^[0-9]{2}\\:[0-9]{2}\$/))
\t\t\t{
\t\t\t\talert(\"Unknown time format.\");
\t\t\t\t\$(\"#initial_start_time\").focus();
\t\t\t\treturn false;
\t\t\t}
\t\t\tif(!\$(\"#initial_end_time\").val().match(/^[0-9]{2}\\:[0-9]{2}\$/))
\t\t\t{
\t\t\t\talert(\"Unknown time format.\");
\t\t\t\t\$(\"#initial_end_time\").focus();
\t\t\t\treturn false;
\t\t\t}
\t\t\t
\t\t\t// Date of change test : date_of_change
\t\t\tif(!\$(\"#date_of_change\").val().match(/^[0-9]{2}\\/[0-9]{2}\\/[0-9]{4}\$/))
\t\t\t{
\t\t\t\talert(\"Unknown date format.\");
\t\t\t\t\$(\"#date_of_change\").focus();
\t\t\t\treturn false;
\t\t\t}\t
\t\t\tif(!\$(\"#time_of_change\").val().match(/^[0-9]{2}\\:[0-9]{2}\$/))
\t\t\t{
\t\t\t\talert(\"Unknown time format.\");
\t\t\t\t\$(\"#time_of_change\").focus();
\t\t\t\treturn false;
\t\t\t}
\t\t
\t\t\t// New period test 
\t\t\tif(!\$(\"#new_start_date\").val().match(/^[0-9]{2}\\/[0-9]{2}\\/[0-9]{4}\$/))
\t\t\t{
\t\t\t\talert(\"Unknown date format.\");
\t\t\t\t\$(\"#new_start_date\").focus();
\t\t\t\treturn false;
\t\t\t}\t
\t\t\tif(!\$(\"#new_start_time\").val().match(/^[0-9]{2}\\:[0-9]{2}\$/))
\t\t\t{
\t\t\t\talert(\"Unknown time format.\");
\t\t\t\t\$(\"#new_start_time\").focus();
\t\t\t\treturn false;
\t\t\t}
\t\t\tif(!\$(\"#new_end_time\").val().match(/^[0-9]{2}\\:[0-9]{2}\$/))
\t\t\t{
\t\t\t\talert(\"Unknown time format.\");
\t\t\t\t\$(\"#new_end_time\").focus();
\t\t\t\treturn false;
\t\t\t}\t
\t\t}\t
\t\treturn true;
\t
    });
     
\t
\t\$(\"#initial_start_date\").on(\"change\",function(){
\t    \$(\"#new_start_date\").val(\$(this).val());
    }); 
      

    // you may need to change this code if you are not using Bootstrap Datepicker
\t\$('.js-datepicker').datepicker({
\t\t\tautoclose:true
\t});


\tfunction  checkTimeFormat(champ)
\t{
\t\tif(champ.value.length >= 3)
\t\t{
\t\t\tvar tmp1 = replace(champ.value, \".\", \":\");
\t\t\tvar tmp2 = tmp1.split(\":\");
\t\t\tif(tmp2[0] && tmp2[0].length == 1) tmp2[0] = \"0\" + tmp2[0];
\t\t\tif(tmp2[1] && tmp2[1].length == 1) tmp2[1] = \"0\" + tmp2[1];\t\t
\t\t\tchamp.value = tmp2[0] + \":\" + tmp2[1];
\t\t}
\t\t
\t}

\tfunction replace(expr,a,b) 
\t{
\t\tvar i=0
\t\twhile (i!=-1) 
\t\t{
\t\t\ti=expr.indexOf(a,i);
\t\t\tif (i>=0) 
\t\t\t{
\t\t\t\texpr=expr.substring(0,i)+b+expr.substring(i+a.length);
\t\t\t\ti+=b.length;
\t\t\t}
\t\t}
\t\treturn expr
\t}

\t
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 139
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 140
        echo "
\t<div id=\"content\">
\t\t<div id=\"content-header\">
\t\t\t<h1 id=\"titre_help\">Disruption claim</h1>
\t\t\t<div id=\"description_help\">Enter your roster information below and click Submit. The system will automatically check if your request is correct. Ultimately, an administrator must validate your claim.</div>
\t\t</div>

\t\t<div class=\"row\">
\t\t\t<div class=\"col-xs-12\">
\t\t\t\t";
        // line 149
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 149, $context, $this->getSourceContext());
        echo "
\t\t\t</div>
\t\t</div>


        ";
        // line 154
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
\t\t";
        // line 155
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), 'errors');
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
\t\t\t\t\t\t\t\t\t\t\t\t\t \t<input class =\"js-datepicker\" data-provide=\"datepicker\" data-date-format=\"dd/mm/yyyy\"  name=\"initial_start_date\" type=\"text\" id=\"initial_start_date\" value = \"\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input onblur=\"javascript:checkTimeFormat(this)\" name=\"initial_start_time\" type=\"text\" id=\"initial_start_time\" value=\"\" size=\"7\" maxlength=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input onblur=\"javascript:checkTimeFormat(this)\" name=\"initial_end_time\" type=\"text\" id=\"initial_end_time\" value=\"\" size=\"7\" maxlength=\"5\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class = \"js-datepicker\" data-provide=\"datepicker\" data-date-format=\"dd/mm/yyyy\"   name=\"date_of_change\" type=\"text\" id=\"date_of_change\" value=\"\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input onblur=\"javascript:checkTimeFormat(this)\" name=\"time_of_change\" type=\"text\" id=\"time_of_change\" value=\"\" size=\"7\" maxlength=\"5\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input data-provide=\"datepicker\" class = \"js-datepicker\" data-date-format=\"dd/mm/yyyy\"  name=\"new_start_date\" type=\"text\" id=\"new_start_date\" value=\"\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input onblur=\"javascript:checkTimeFormat(this)\"  name=\"new_start_time\" type=\"text\" id=\"new_start_time\" value=\"\" size=\"7\" maxlength=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input onblur=\"javascript:checkTimeFormat(this)\"  name=\"new_end_time\" type=\"text\" id=\"new_end_time\" value=\"\" size=\"7\" maxlength=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(HH:mm)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tSend disruption claim</button>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>

\t\t";
        // line 312
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 312, $this->source); })()), 'form_end');
        echo "
\t</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetOtp/DisruptionClaimsRequest/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 312,  269 => 155,  265 => 154,  257 => 149,  246 => 140,  236 => 139,  122 => 34,  92 => 7,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetOtp/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %} Adding a disruption claim {% endblock %}

{% block specificJs %}
{{ parent() }}
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

    // Tests the validity of the form before sending it
\t
    \$(\"form\").submit(function( event ) {
\t\tvar isAdmin = \"{{ isAdmin }}\";
\t\tif(!isAdmin) {
\t\t\t// Initial rostered test 
\t\t\tif(!\$(\"#initial_start_date\").val().match(/^[0-9]{2}\\/[0-9]{2}\\/[0-9]{4}\$/))
\t\t\t{
\t\t\t\talert(\"Unknown date format.\");
\t\t\t\t\$(\"#initial_start_date\").focus();
\t\t\t\treturn false;
\t\t\t}\t
\t\t\tif(!\$(\"#initial_start_time\").val().match(/^[0-9]{2}\\:[0-9]{2}\$/))
\t\t\t{
\t\t\t\talert(\"Unknown time format.\");
\t\t\t\t\$(\"#initial_start_time\").focus();
\t\t\t\treturn false;
\t\t\t}
\t\t\tif(!\$(\"#initial_end_time\").val().match(/^[0-9]{2}\\:[0-9]{2}\$/))
\t\t\t{
\t\t\t\talert(\"Unknown time format.\");
\t\t\t\t\$(\"#initial_end_time\").focus();
\t\t\t\treturn false;
\t\t\t}
\t\t\t
\t\t\t// Date of change test : date_of_change
\t\t\tif(!\$(\"#date_of_change\").val().match(/^[0-9]{2}\\/[0-9]{2}\\/[0-9]{4}\$/))
\t\t\t{
\t\t\t\talert(\"Unknown date format.\");
\t\t\t\t\$(\"#date_of_change\").focus();
\t\t\t\treturn false;
\t\t\t}\t
\t\t\tif(!\$(\"#time_of_change\").val().match(/^[0-9]{2}\\:[0-9]{2}\$/))
\t\t\t{
\t\t\t\talert(\"Unknown time format.\");
\t\t\t\t\$(\"#time_of_change\").focus();
\t\t\t\treturn false;
\t\t\t}
\t\t
\t\t\t// New period test 
\t\t\tif(!\$(\"#new_start_date\").val().match(/^[0-9]{2}\\/[0-9]{2}\\/[0-9]{4}\$/))
\t\t\t{
\t\t\t\talert(\"Unknown date format.\");
\t\t\t\t\$(\"#new_start_date\").focus();
\t\t\t\treturn false;
\t\t\t}\t
\t\t\tif(!\$(\"#new_start_time\").val().match(/^[0-9]{2}\\:[0-9]{2}\$/))
\t\t\t{
\t\t\t\talert(\"Unknown time format.\");
\t\t\t\t\$(\"#new_start_time\").focus();
\t\t\t\treturn false;
\t\t\t}
\t\t\tif(!\$(\"#new_end_time\").val().match(/^[0-9]{2}\\:[0-9]{2}\$/))
\t\t\t{
\t\t\t\talert(\"Unknown time format.\");
\t\t\t\t\$(\"#new_end_time\").focus();
\t\t\t\treturn false;
\t\t\t}\t
\t\t}\t
\t\treturn true;
\t
    });
     
\t
\t\$(\"#initial_start_date\").on(\"change\",function(){
\t    \$(\"#new_start_date\").val(\$(this).val());
    }); 
      

    // you may need to change this code if you are not using Bootstrap Datepicker
\t\$('.js-datepicker').datepicker({
\t\t\tautoclose:true
\t});


\tfunction  checkTimeFormat(champ)
\t{
\t\tif(champ.value.length >= 3)
\t\t{
\t\t\tvar tmp1 = replace(champ.value, \".\", \":\");
\t\t\tvar tmp2 = tmp1.split(\":\");
\t\t\tif(tmp2[0] && tmp2[0].length == 1) tmp2[0] = \"0\" + tmp2[0];
\t\t\tif(tmp2[1] && tmp2[1].length == 1) tmp2[1] = \"0\" + tmp2[1];\t\t
\t\t\tchamp.value = tmp2[0] + \":\" + tmp2[1];
\t\t}
\t\t
\t}

\tfunction replace(expr,a,b) 
\t{
\t\tvar i=0
\t\twhile (i!=-1) 
\t\t{
\t\t\ti=expr.indexOf(a,i);
\t\t\tif (i>=0) 
\t\t\t{
\t\t\t\texpr=expr.substring(0,i)+b+expr.substring(i+a.length);
\t\t\t\ti+=b.length;
\t\t\t}
\t\t}
\t\treturn expr
\t}

\t
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
\t\t\t\t\t\t\t\t\t\t\t\t\t \t<input class =\"js-datepicker\" data-provide=\"datepicker\" data-date-format=\"dd/mm/yyyy\"  name=\"initial_start_date\" type=\"text\" id=\"initial_start_date\" value = \"\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input onblur=\"javascript:checkTimeFormat(this)\" name=\"initial_start_time\" type=\"text\" id=\"initial_start_time\" value=\"\" size=\"7\" maxlength=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input onblur=\"javascript:checkTimeFormat(this)\" name=\"initial_end_time\" type=\"text\" id=\"initial_end_time\" value=\"\" size=\"7\" maxlength=\"5\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input class = \"js-datepicker\" data-provide=\"datepicker\" data-date-format=\"dd/mm/yyyy\"   name=\"date_of_change\" type=\"text\" id=\"date_of_change\" value=\"\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input onblur=\"javascript:checkTimeFormat(this)\" name=\"time_of_change\" type=\"text\" id=\"time_of_change\" value=\"\" size=\"7\" maxlength=\"5\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input data-provide=\"datepicker\" class = \"js-datepicker\" data-date-format=\"dd/mm/yyyy\"  name=\"new_start_date\" type=\"text\" id=\"new_start_date\" value=\"\">
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
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input onblur=\"javascript:checkTimeFormat(this)\"  name=\"new_start_time\" type=\"text\" id=\"new_start_time\" value=\"\" size=\"7\" maxlength=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t-
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t<input onblur=\"javascript:checkTimeFormat(this)\"  name=\"new_end_time\" type=\"text\" id=\"new_end_time\" value=\"\" size=\"7\" maxlength=\"5\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t(HH:mm)
\t\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t<div class=\"form-actions\">
\t\t\t\t\t\t\t\t\t\t\t<button type=\"submit\" class=\"btn btn-primary\">
\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"icon-edit\"></i>
\t\t\t\t\t\t\t\t\t\t\t\tSend disruption claim</button>
\t\t\t\t\t\t\t\t\t\t</div>
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
", "@EasyjetOtp/DisruptionClaimsRequest/new.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\OtpBundle\\Resources\\views\\DisruptionClaimsRequest\\new.html.twig");
    }
}
