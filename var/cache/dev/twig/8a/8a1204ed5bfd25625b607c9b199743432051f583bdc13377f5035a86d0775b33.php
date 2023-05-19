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

/* @EasyjetEleave/ResourcesGroupWishes/add.html.twig */
class __TwigTemplate_cf2e5c088148069db07d35cff586bc2b8bdd7e214863c7c30db0fc2a4e617f98 extends Template
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
        return "@EasyjetEleave/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/ResourcesGroupWishes/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/ResourcesGroupWishes/add.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetEleave/ResourcesGroupWishes/add.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetEleave/Base/structure.html.twig", "@EasyjetEleave/ResourcesGroupWishes/add.html.twig", 1);
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
        echo twig_escape_filter($this->env, (isset($context["title"]) || array_key_exists("title", $context) ? $context["title"] : (function () { throw new RuntimeError('Variable "title" does not exist.', 4, $this->source); })()), "html", null, true);
        
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

<script>

var x = 0;
var y = 0;
var dateMin = \"";
        // line 12
        echo twig_escape_filter($this->env, (isset($context["dateMin"]) || array_key_exists("dateMin", $context) ? $context["dateMin"] : (function () { throw new RuntimeError('Variable "dateMin" does not exist.', 12, $this->source); })()), "html", null, true);
        echo "\";
var dateMax = \"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["dateMax"]) || array_key_exists("dateMax", $context) ? $context["dateMax"] : (function () { throw new RuntimeError('Variable "dateMax" does not exist.', 13, $this->source); })()), "html", null, true);
        echo "\";


var calendarMonth = '';
var calendarYear = '';
var last_champ = '';

var tmp = dateMin.split(\"-\");
calendarMonth = tmp[1];
calendarYear = tmp[0];


function isRequestLessThan18Monthts() {
\t
    if(formatToEnglish(\$('#choice1_start').val()) > dateMax) {
        alert(\"Choice 1 : Leaves periods can be requested no longer than 16 months in advance. You cannot do a leave request after the \" + formatToFrance(dateMax) + \". Please change your wish date or wait the required time to do this request.\");
        return false;
    }
    if(formatToEnglish(\$('#choice2_start').val()) > dateMax) {
        alert(\"Choice 2 : Leaves periods can be requested no longer than 16 months in advance. You cannot do a leave request after the \" + formatToFrance(dateMax) + \". Please change your wish date or wait the required time to do this request.\");
        return false;
    }
    if(formatToEnglish(\$('#choice3_start').val()) > dateMax) {
        alert(\"Choice 3 : Leaves periods can be requested no longer than 16 months in advance. You cannot do a leave request after the \" + formatToFrance(dateMax) + \". Please change your wish date or wait the required time to do this request.\");
        return false;
    }
    return true;
}

function test()
{
\t// Requests cannot be made more than 18 months in advance

\tif (!isRequestLessThan18Monthts()) return false;

\tvar choice1Start    = formatToEnglish(\$('#choice1_start').val());
\tvar choice1End      = formatToEnglish(\$('#choice1_end').val());
\tvar choice2Start    = formatToEnglish(\$('#choice2_start').val());
\tvar choice2End      = formatToEnglish(\$('#choice2_end').val());
\tvar choice3Start    = formatToEnglish(\$('#choice3_start').val());
\tvar choice3End      = formatToEnglish(\$('#choice3_end').val());
\tvar choice1StartVal = \$('#choice1_start').val();
\tvar choice1EndVal   = \$('#choice1_end').val();
\tvar choice2StartVal = \$('#choice2_start').val();
\tvar choice2EndVal   = \$('#choice2_end').val();
\tvar choice3StartVal = \$('#choice3_start').val();
\tvar choice3EndVal   = \$('#choice3_end').val();

\tif (choice1End < choice1Start) 
\t{
\t\talert (\"Choice 1 : Invalid date(s) please try again.\") ; 
\t\treturn false;
\t}
\tif (choice2End < choice2Start) {
\t\talert (\"Choice 2 : Invalid date(s) please try again.\") ; 
\t\treturn false;
\t}
\tif (choice3End < choice3Start) {
\t\talert (\"Choice 3 : Invalid date(s) please try again.\") ; 
\t\treturn false;
\t}
\t
\tif (choice1Start < dateMin) {
\t\talert(\"Choice 1 : Invalid date(s) please try again. You must choose above \" + formatToFrance(dateMin)) ; 
\t\treturn false;
\t}
\tif (choice2Start < dateMin) {
\t\talert(\"Choice 2 : Invalid date(s) please try again. You must choose above \" + formatToFrance(dateMin)) ; 
\t\treturn false;
\t}
\tif (choice3Start < dateMin) {
\t\talert(\"Choice 3 : Invalid date(s) please try again. You must choose above \" + formatToFrance(dateMin)) ; 
\t\treturn false;
\t}
\t
   var must_second_choice = false;

\t// First date range
\tvar start = choice1Start;
\tvar end = choice1End;
\tvar bool_must_second_choice = false;

\tif (start == false || end == false) return emptyField();
\tstart = choice2Start;
\tend = choice2End;

\tif (bool_must_second_choice == true && (start == false || end == false))
\t{
\t\talert (\"You must have more than one choice for the winter/summer period\");
\t\treturn false;
\t}
\tif ((start != false && end == false) || (start == false && end != false)){
       return emptyField();
\t} 

\tvar tmp_start = \"\";
\tvar tmp_end = \"\";
\tstart = choice3Start;
\tend   = choice3End;

\tif ((start != false && end == false) || (start == false && end != false)) {
       return emptyField();
\t} 
   
\t// There must not be 2x the same entry period
\tif ((choice1StartVal == choice2StartVal && choice1EndVal == choice2EndVal && choice1StartVal != \"00/00/0000\" && choice1StartVal != \"\" && choice2EndVal != \"00/00/0000\" && choice2EndVal != \"\") ||
\t(choice1StartVal == choice3StartVal && choice1EndVal == choice3EndVal && choice1StartVal != \"00/00/0000\" && choice1StartVal != \"\" && choice3EndVal != \"00/00/0000\" && choice3EndVal != \"\") ||
\t(choice2StartVal == choice3StartVal && choice2EndVal == choice3EndVal && choice2StartVal != \"00/00/0000\" && choice2StartVal != \"\" && choice3EndVal != \"00/00/0000\" && choice3EndVal != \"\") )
\t{
\t\talert (\"You cannot select many times the same period!\");
\t\treturn false;
\t}

\tvar x = confirm(\"You are about to send your request, do you want to proceed ?\");
\tif(x == true){
\t    return true;
\t} else {
\t    return false; 
\t}

}

function formatToEnglish(date)
{
\t
\tif (date == \"\" || date == \"undefined\") return false;
\tvar tab = date.split(\"/\");
\treturn tab[2] + \"-\" + tab[1] + \"-\" + tab[0];
}

function formatToFrance(date)
{
\tif (date == \"\" || date == \"undefined\") return false;
\tvar tab = date.split(\"-\");
\treturn tab[2] + \"-\" + tab[1] + \"-\" + tab[0];
}

function emptyField()
{
\talert (\"Thanks to complete the threads\");
\treturn false;
}

function choiceSelect(id) {
    if(document.getElementById(id).checked == true) {
        switch(id) {
            case 'choice1' :
                document.getElementById('choice2').checked = false;
                document.getElementById('choice3').checked = false
                break;
            case 'choice2' :
                document.getElementById('choice1').checked = false;
                document.getElementById('choice3').checked = false
                break;
            case 'choice3' :
                document.getElementById('choice1').checked = false;
                document.getElementById('choice2').checked = false
                break;
        }
    }
    
}


</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 181
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 182
        echo "
<div id=\"content\">
    <div id=\"content-header\">
       <h1 id=\"titre_help\">";
        // line 185
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 185, $this->source); })()), "prenomUser", [], "any", false, false, false, 185), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 185, $this->source); })()), "nomUser", [], "any", false, false, false, 185), "html", null, true);
        echo "  (";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 185, $this->source); })()), "logUser", [], "any", false, false, false, 185), "html", null, true);
        echo ") </h1>
    </div>
    <div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t\t";
        // line 189
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 189, $context, $this->getSourceContext());
        echo "
\t\t</div>
    </div>
\t\t\t

    <form onSubmit=\"return test();\" name=\"form1\"  id =\"form1\" method=\"post\" action=\"";
        // line 194
        ((twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 194, $this->source); })()), "formId", [], "any", false, false, false, 194)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_resource_group_wishes_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 194, $this->source); })()), "formId", [], "any", false, false, false, 194)]), "html", null, true))) : (print ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_resource_group_wishes_add"))));
        echo "\" class=\"form-horizontal\">
\t\t<input name=\"id\" type=\"hidden\" id=\"id\" value=\"";
        // line 195
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 195, $this->source); })()), "formId", [], "any", false, false, false, 195), "html", null, true);
        echo "\">
\t\t
        <div class=\"row\">
            <div class=\"col-xs-12\">
\t\t        <div class=\"widget-box\">
\t\t\t\t\t<div class=\"widget-title\">
\t\t\t\t\t\t<h5 ";
        // line 201
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 201, $this->source); })()), "color1", [], "any", false, false, false, 201), "html", null, true);
        echo ">Priority choice <span style=\"position:absolute;right: 60px;\" class=\"float_right\"><input ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 201, $this->source); })()), "checked1", [], "any", false, false, false, 201), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 201, $this->source); })()), "disable1", [], "any", false, false, false, 201), "html", null, true);
        echo "  type=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 201, $this->source); })()), "checkbox", [], "any", false, false, false, 201), "html", null, true);
        echo "\" id=\"choice1\" onchange=\"javascript:choiceSelect('choice1')\" name=\"choice1_accepted\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 201, $this->source); })()), "choice1Accepted", [], "any", false, false, false, 201), "html", null, true);
        echo "\" /> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 201, $this->source); })()), "textCheckbox1", [], "any", false, false, false, 201), "html", null, true);
        echo "</span></h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-content nopadding\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">First Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type='text' id=\"choice1_start\" class=\"form-control\" name=\"choice1_start\" value='";
        // line 207
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 207, $this->source); })()), "choice1Start", [], "any", false, false, false, 207), "html", null, true);
        echo "'  data-enable-datepicker=\"true\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>  

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">Last Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type='text' id=\"choice1_end\" data-enable-datepicker=\"true\" class=\"form-control\" name=\"choice1_end\" value='";
        // line 214
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 214, $this->source); })()), "choice1End", [], "any", false, false, false, 214), "html", null, true);
        echo "'  />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>    
        
\t\t            </div>

                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
\t\t        <div class=\"widget-box\">
\t\t\t\t\t<div class=\"widget-title\">
\t\t\t\t\t\t<h5 ";
        // line 228
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 228, $this->source); })()), "color2", [], "any", false, false, false, 228), "html", null, true);
        echo ">Second choice <span style=\"position:absolute;right: 60px;\" class=\"float_right\"><input ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 228, $this->source); })()), "checked2", [], "any", false, false, false, 228), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 228, $this->source); })()), "disable2", [], "any", false, false, false, 228), "html", null, true);
        echo "  type = \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 228, $this->source); })()), "checkbox", [], "any", false, false, false, 228), "html", null, true);
        echo "\" id = \"choice2\" onchange = \"javascript:choiceSelect('choice2')\" name = \"choice2_accepted\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 228, $this->source); })()), "choice2Accepted", [], "any", false, false, false, 228), "html", null, true);
        echo "\" /> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 228, $this->source); })()), "textCheckbox2", [], "any", false, false, false, 228), "html", null, true);
        echo "</span></h5>
\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-content nopadding\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">First Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"choice2_start\" data-enable-datepicker=\"true\" class=\"form-control\" name=\"choice2_start\" value='";
        // line 235
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 235, $this->source); })()), "choice2Start", [], "any", false, false, false, 235), "html", null, true);
        echo "' />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>  

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">Last Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"choice2_end\" data-enable-datepicker=\"true\" class=\"form-control\" name=\"choice2_end\" value=\"";
        // line 242
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 242, $this->source); })()), "choice2End", [], "any", false, false, false, 242), "html", null, true);
        echo "\" />
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>    
        
\t\t            </div>

                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
\t\t        <div class=\"widget-box\">
\t\t\t\t\t<div class=\"widget-title\">
\t\t\t\t\t\t<h5 ";
        // line 256
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 256, $this->source); })()), "color3", [], "any", false, false, false, 256), "html", null, true);
        echo ">Third choice <span style=\"position:absolute;right: 60px;\" class=\"float_right\"><input ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 256, $this->source); })()), "checked3", [], "any", false, false, false, 256), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 256, $this->source); })()), "disable3", [], "any", false, false, false, 256), "html", null, true);
        echo "  type=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 256, $this->source); })()), "checkbox", [], "any", false, false, false, 256), "html", null, true);
        echo "\" id=\"choice3\" onchange=\"javascript:choiceSelect('choice3')\" name=\"choice3_accepted\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 256, $this->source); })()), "choice3Accepted", [], "any", false, false, false, 256), "html", null, true);
        echo "\" /> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 256, $this->source); })()), "textCheckbox3", [], "any", false, false, false, 256), "html", null, true);
        echo "</span></h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-content nopadding\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">First Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"choice3_start\" data-enable-datepicker=\"true\" class=\"form-control\" name=\"choice3_start\" value='";
        // line 262
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 262, $this->source); })()), "choice3Start", [], "any", false, false, false, 262), "html", null, true);
        echo "'  />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>  
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">Last Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"choice3_end\"  data-enable-datepicker=\"true\" class=\"form-control\" name=\"choice3_end\" value=\"";
        // line 268
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 268, $this->source); })()), "choice3End", [], "any", false, false, false, 268), "html", null, true);
        echo "\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>   

\t\t            </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
\t\t        <div class=\"widget-box\">
\t\t\t\t\t<div class=\"widget-title\">
\t\t\t\t\t\t<h5>Thanks to describe your wish</h5>
\t\t\t\t\t</div>
\t\t\t\t\t <div class=\"widget-content nopadding\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">Comment :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<textarea name=\"comment_user\" class=\"form-control\" cols=\"50\" rows=\"6\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> 
\t\t\t\t\t
\t\t\t\t\t\t <div class=\"form-actions\">
\t\t\t\t\t\t ";
        // line 292
        if ((isset($context["isSubmit"]) || array_key_exists("isSubmit", $context) ? $context["isSubmit"] : (function () { throw new RuntimeError('Variable "isSubmit" does not exist.', 292, $this->source); })())) {
            // line 293
            echo "                            <button type=\"submit\" class=\"btn btn-primary\" name=\"btn-to-display\"><i class=\"icon-submit\"></i> submit</button>
\t\t\t\t\t\t ";
        } else {
            // line 295
            echo "\t\t\t\t\t\t * Locked *
\t\t\t\t\t\t ";
        }
        // line 296
        echo "\t
                        </div>   
\t\t\t\t       
\t\t            </div>
                </div>
            </div>
        </div>
   </form>

</div>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetEleave/ResourcesGroupWishes/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  487 => 296,  483 => 295,  479 => 293,  477 => 292,  450 => 268,  441 => 262,  422 => 256,  405 => 242,  395 => 235,  375 => 228,  358 => 214,  348 => 207,  329 => 201,  320 => 195,  316 => 194,  308 => 189,  297 => 185,  292 => 182,  282 => 181,  105 => 13,  101 => 12,  83 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetEleave/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %} {{ title }}{% endblock %}

{% block specificJs %}{{ parent() }}

<script>

var x = 0;
var y = 0;
var dateMin = \"{{dateMin}}\";
var dateMax = \"{{dateMax}}\";


var calendarMonth = '';
var calendarYear = '';
var last_champ = '';

var tmp = dateMin.split(\"-\");
calendarMonth = tmp[1];
calendarYear = tmp[0];


function isRequestLessThan18Monthts() {
\t
    if(formatToEnglish(\$('#choice1_start').val()) > dateMax) {
        alert(\"Choice 1 : Leaves periods can be requested no longer than 16 months in advance. You cannot do a leave request after the \" + formatToFrance(dateMax) + \". Please change your wish date or wait the required time to do this request.\");
        return false;
    }
    if(formatToEnglish(\$('#choice2_start').val()) > dateMax) {
        alert(\"Choice 2 : Leaves periods can be requested no longer than 16 months in advance. You cannot do a leave request after the \" + formatToFrance(dateMax) + \". Please change your wish date or wait the required time to do this request.\");
        return false;
    }
    if(formatToEnglish(\$('#choice3_start').val()) > dateMax) {
        alert(\"Choice 3 : Leaves periods can be requested no longer than 16 months in advance. You cannot do a leave request after the \" + formatToFrance(dateMax) + \". Please change your wish date or wait the required time to do this request.\");
        return false;
    }
    return true;
}

function test()
{
\t// Requests cannot be made more than 18 months in advance

\tif (!isRequestLessThan18Monthts()) return false;

\tvar choice1Start    = formatToEnglish(\$('#choice1_start').val());
\tvar choice1End      = formatToEnglish(\$('#choice1_end').val());
\tvar choice2Start    = formatToEnglish(\$('#choice2_start').val());
\tvar choice2End      = formatToEnglish(\$('#choice2_end').val());
\tvar choice3Start    = formatToEnglish(\$('#choice3_start').val());
\tvar choice3End      = formatToEnglish(\$('#choice3_end').val());
\tvar choice1StartVal = \$('#choice1_start').val();
\tvar choice1EndVal   = \$('#choice1_end').val();
\tvar choice2StartVal = \$('#choice2_start').val();
\tvar choice2EndVal   = \$('#choice2_end').val();
\tvar choice3StartVal = \$('#choice3_start').val();
\tvar choice3EndVal   = \$('#choice3_end').val();

\tif (choice1End < choice1Start) 
\t{
\t\talert (\"Choice 1 : Invalid date(s) please try again.\") ; 
\t\treturn false;
\t}
\tif (choice2End < choice2Start) {
\t\talert (\"Choice 2 : Invalid date(s) please try again.\") ; 
\t\treturn false;
\t}
\tif (choice3End < choice3Start) {
\t\talert (\"Choice 3 : Invalid date(s) please try again.\") ; 
\t\treturn false;
\t}
\t
\tif (choice1Start < dateMin) {
\t\talert(\"Choice 1 : Invalid date(s) please try again. You must choose above \" + formatToFrance(dateMin)) ; 
\t\treturn false;
\t}
\tif (choice2Start < dateMin) {
\t\talert(\"Choice 2 : Invalid date(s) please try again. You must choose above \" + formatToFrance(dateMin)) ; 
\t\treturn false;
\t}
\tif (choice3Start < dateMin) {
\t\talert(\"Choice 3 : Invalid date(s) please try again. You must choose above \" + formatToFrance(dateMin)) ; 
\t\treturn false;
\t}
\t
   var must_second_choice = false;

\t// First date range
\tvar start = choice1Start;
\tvar end = choice1End;
\tvar bool_must_second_choice = false;

\tif (start == false || end == false) return emptyField();
\tstart = choice2Start;
\tend = choice2End;

\tif (bool_must_second_choice == true && (start == false || end == false))
\t{
\t\talert (\"You must have more than one choice for the winter/summer period\");
\t\treturn false;
\t}
\tif ((start != false && end == false) || (start == false && end != false)){
       return emptyField();
\t} 

\tvar tmp_start = \"\";
\tvar tmp_end = \"\";
\tstart = choice3Start;
\tend   = choice3End;

\tif ((start != false && end == false) || (start == false && end != false)) {
       return emptyField();
\t} 
   
\t// There must not be 2x the same entry period
\tif ((choice1StartVal == choice2StartVal && choice1EndVal == choice2EndVal && choice1StartVal != \"00/00/0000\" && choice1StartVal != \"\" && choice2EndVal != \"00/00/0000\" && choice2EndVal != \"\") ||
\t(choice1StartVal == choice3StartVal && choice1EndVal == choice3EndVal && choice1StartVal != \"00/00/0000\" && choice1StartVal != \"\" && choice3EndVal != \"00/00/0000\" && choice3EndVal != \"\") ||
\t(choice2StartVal == choice3StartVal && choice2EndVal == choice3EndVal && choice2StartVal != \"00/00/0000\" && choice2StartVal != \"\" && choice3EndVal != \"00/00/0000\" && choice3EndVal != \"\") )
\t{
\t\talert (\"You cannot select many times the same period!\");
\t\treturn false;
\t}

\tvar x = confirm(\"You are about to send your request, do you want to proceed ?\");
\tif(x == true){
\t    return true;
\t} else {
\t    return false; 
\t}

}

function formatToEnglish(date)
{
\t
\tif (date == \"\" || date == \"undefined\") return false;
\tvar tab = date.split(\"/\");
\treturn tab[2] + \"-\" + tab[1] + \"-\" + tab[0];
}

function formatToFrance(date)
{
\tif (date == \"\" || date == \"undefined\") return false;
\tvar tab = date.split(\"-\");
\treturn tab[2] + \"-\" + tab[1] + \"-\" + tab[0];
}

function emptyField()
{
\talert (\"Thanks to complete the threads\");
\treturn false;
}

function choiceSelect(id) {
    if(document.getElementById(id).checked == true) {
        switch(id) {
            case 'choice1' :
                document.getElementById('choice2').checked = false;
                document.getElementById('choice3').checked = false
                break;
            case 'choice2' :
                document.getElementById('choice1').checked = false;
                document.getElementById('choice3').checked = false
                break;
            case 'choice3' :
                document.getElementById('choice1').checked = false;
                document.getElementById('choice2').checked = false
                break;
        }
    }
    
}


</script>

{% endblock specificJs %}

{% block container %}

<div id=\"content\">
    <div id=\"content-header\">
       <h1 id=\"titre_help\">{{ user.prenomUser }} {{ user.nomUser }}  ({{ user.logUser }}) </h1>
    </div>
    <div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t\t{{ macros.wizz() }}
\t\t</div>
    </div>
\t\t\t

    <form onSubmit=\"return test();\" name=\"form1\"  id =\"form1\" method=\"post\" action=\"{{ formData.formId ? url('eleave_resource_group_wishes_edit',{'id' : formData.formId}) : url('eleave_resource_group_wishes_add')}}\" class=\"form-horizontal\">
\t\t<input name=\"id\" type=\"hidden\" id=\"id\" value=\"{{formData.formId}}\">
\t\t
        <div class=\"row\">
            <div class=\"col-xs-12\">
\t\t        <div class=\"widget-box\">
\t\t\t\t\t<div class=\"widget-title\">
\t\t\t\t\t\t<h5 {{ formData.color1 }}>Priority choice <span style=\"position:absolute;right: 60px;\" class=\"float_right\"><input {{ formData.checked1 }} {{ formData.disable1 }}  type=\"{{ formData.checkbox }}\" id=\"choice1\" onchange=\"javascript:choiceSelect('choice1')\" name=\"choice1_accepted\" value=\"{{ formData.choice1Accepted }}\" /> {{ formData.textCheckbox1 }}</span></h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-content nopadding\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">First Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type='text' id=\"choice1_start\" class=\"form-control\" name=\"choice1_start\" value='{{formData.choice1Start}}'  data-enable-datepicker=\"true\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>  

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">Last Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type='text' id=\"choice1_end\" data-enable-datepicker=\"true\" class=\"form-control\" name=\"choice1_end\" value='{{ formData.choice1End }}'  />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>    
        
\t\t            </div>

                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
\t\t        <div class=\"widget-box\">
\t\t\t\t\t<div class=\"widget-title\">
\t\t\t\t\t\t<h5 {{ formData.color2 }}>Second choice <span style=\"position:absolute;right: 60px;\" class=\"float_right\"><input {{ formData.checked2 }} {{ formData.disable2 }}  type = \"{{ formData.checkbox }}\" id = \"choice2\" onchange = \"javascript:choiceSelect('choice2')\" name = \"choice2_accepted\" value=\"{{ formData.choice2Accepted }}\" /> {{ formData.textCheckbox2 }}</span></h5>
\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-content nopadding\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">First Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"choice2_start\" data-enable-datepicker=\"true\" class=\"form-control\" name=\"choice2_start\" value='{{ formData.choice2Start }}' />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>  

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">Last Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"choice2_end\" data-enable-datepicker=\"true\" class=\"form-control\" name=\"choice2_end\" value=\"{{ formData.choice2End }}\" />
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>    
        
\t\t            </div>

                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
\t\t        <div class=\"widget-box\">
\t\t\t\t\t<div class=\"widget-title\">
\t\t\t\t\t\t<h5 {{ formData.color3 }}>Third choice <span style=\"position:absolute;right: 60px;\" class=\"float_right\"><input {{ formData.checked3 }} {{ formData.disable3 }}  type=\"{{ formData.checkbox }}\" id=\"choice3\" onchange=\"javascript:choiceSelect('choice3')\" name=\"choice3_accepted\" value=\"{{ formData.choice3Accepted }}\" /> {{ formData.textCheckbox3 }}</span></h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-content nopadding\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">First Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"choice3_start\" data-enable-datepicker=\"true\" class=\"form-control\" name=\"choice3_start\" value='{{ formData.choice3Start }}'  />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>  
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">Last Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"choice3_end\"  data-enable-datepicker=\"true\" class=\"form-control\" name=\"choice3_end\" value=\"{{ formData.choice3End }}\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>   

\t\t            </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
\t\t        <div class=\"widget-box\">
\t\t\t\t\t<div class=\"widget-title\">
\t\t\t\t\t\t<h5>Thanks to describe your wish</h5>
\t\t\t\t\t</div>
\t\t\t\t\t <div class=\"widget-content nopadding\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">Comment :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<textarea name=\"comment_user\" class=\"form-control\" cols=\"50\" rows=\"6\"></textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> 
\t\t\t\t\t
\t\t\t\t\t\t <div class=\"form-actions\">
\t\t\t\t\t\t {% if isSubmit %}
                            <button type=\"submit\" class=\"btn btn-primary\" name=\"btn-to-display\"><i class=\"icon-submit\"></i> submit</button>
\t\t\t\t\t\t {% else %}
\t\t\t\t\t\t * Locked *
\t\t\t\t\t\t {% endif %}\t
                        </div>   
\t\t\t\t       
\t\t            </div>
                </div>
            </div>
        </div>
   </form>

</div>


{% endblock container %}", "@EasyjetEleave/ResourcesGroupWishes/add.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EleaveBundle\\Resources\\views\\ResourcesGroupWishes\\add.html.twig");
    }
}
