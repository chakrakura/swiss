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

/* @EasyjetEwish/Gdo/add.html.twig */
class __TwigTemplate_ae3552dd17625033f95f4940220394874c9edeb5ecf6798dc6929e96e1c5215a extends Template
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
        return "@EasyjetEwish/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEwish/Gdo/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEwish/Gdo/add.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetEwish/Gdo/add.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetEwish/Base/structure.html.twig", "@EasyjetEwish/Gdo/add.html.twig", 1);
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

        echo "Add GDO request";
        
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
    var maxDays = ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["maxDays"]) || array_key_exists("maxDays", $context) ? $context["maxDays"] : (function () { throw new RuntimeError('Variable "maxDays" does not exist.', 9, $this->source); })()), "html", null, true);
        echo ";
    var minDays = 1;
    var isPilot = \"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["isPilot"]) || array_key_exists("isPilot", $context) ? $context["isPilot"] : (function () { throw new RuntimeError('Variable "isPilot" does not exist.', 11, $this->source); })()), "html", null, true);
        echo "\";

    \$( \"#addGdoForm\" ).submit(function( event ) {
        var startDate = convertDateFranceToEnglish(\$(\"#date\").val());
        var endDate = convertDateFranceToEnglish(\$(\"#end\").val());
        var nbDays = numberOfDaysBetweenTwoDates(startDate, endDate);
        var nextyear = \$(\"#next-year\").val();    
        var actualStartDate = \$(\"#start-date\").val();
        var actualEndDate = \$(\"#end-date\").val();
        var currentYearJanDate  = \$(\"#current-year-jan-date\").val();
        
        if (endDate < startDate)
        {
            alert (\"Invalid date(s) please try again\");
            return false;
        }
        if( !isPilot && startDate >= actualStartDate && startDate <= actualEndDate ) {
            if(nbDays > 4) {
                alert (\"You cannot bid more than 4 days in the Christmas period (from dec 21st until jan 4th \"+nextyear+\" inclusiv).\");
                return false;
            }
        } else if(endDate > currentYearJanDate && nbDays > 1) {
            alert (\"You can only make single day off request.\");
            return false;
        }
        if( nbDays>1 && endDate >= actualEndDate ) {
            alert(\"You cannot bid more than 4 days in the Christmas period (from dec 21st until jan 4th \"+nextyear+\" inclusiv).\");
            return false;
        }
        if (nbDays > maxDays) {
            alert (\"Period too long! You have to select a period from \" + minDays + \" to \" + maxDays + \" days.\");
            return false;
        }
        if (nbDays < minDays) {
            alert (\"Period too short You have to select a period from \" + minDays + \" to \" + maxDays + \" days.\");
            return false;
        }
        var x = confirm(\"Have you cross checked the correct dates from your GDO days request ?\");
        
        if(x == true) {
            return true;
        } else {
            return false;
        }
        
       
    });

   function convertDateFranceToEnglish(dateFr)
    {
        if(!dateFr) return \"0000-00-00\";
        var tmp = dateFr.split(\"/\");
        return tmp[2] + \"-\" + tmp[1] + \"-\" + tmp[0];
    } 

    function numberOfDaysBetweenTwoDates(date1, date2)
    {
        var nbDays1 = 0;
        var nbDays2 = 0;
        var firstDayEarly = \"\";
        var lastDayEarly = \"\";

        if (date2 == \"\") date2 = date1;

        if (date1 < date2)
        {
            firstDayEarly = date1;
            lastDayEarly = date2;
        }
        else
        {
            firstDayEarly = date2;
            lastDayEarly = date1 ;
        }
        var first = firstDayEarly.split(\"-\");
        var firstYear = convertToInt(first[0]);
        var firstMonth = convertToInt(first[1]);
        var firstDay = convertToInt(first[2]);

        var last = lastDayEarly.split(\"-\");
        var lastYear = convertToInt(last[0]);
        var lastMonth = convertToInt(last[1]);
        var lastDay = convertToInt(last[2]);

        // Calculation of the number of days since the beginning of the year of the first date

        for (var i = 1; i < firstMonth; i++)
        {
            nbDays1 += parseInt(daysInMonth(i, firstYear));
        }
        nbDays1 += parseInt(firstDay);
        // Calculation of the number of days since the beginning of the second date
        for (var j = firstYear; j < lastYear; j++) nbDays2 += parseInt(nbDaysYear(j)) ;
        for (k = 1; k < lastMonth; k++) nbDays2 += parseInt(daysInMonth(k, lastYear));
        nbDays2 += parseInt(lastDay);
        return (nbDays2 - nbDays1) + 1 ;
    }
  

    function daysInMonth(month, year) {
        var nbDays = new Array('31','28','31','30','31','30','31','31','30','31','30','31') ;
        if ( year % 4 == 0 ) nbDays[1] = '29' ;
        return nbDays[month - 1] ;
    }

    function nbDaysYear( year )
    {
        var total = 0;
        for (i=1; i<=12; i++)
        {
            total += parseInt(daysInMonth (i, year));
        }
        return total;
    }

    function convertToInt( chain )
    {
        i = 0;
        if (chain == \"\" || chain == 0) return 0;
        while (chain.substring(i, i+1) == \"0\")
        {
            chain = chain.substring(1, chain.length);
            i++;
        }
        return parseInt(chain);
    }

</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 141
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 142
        echo "
<div id=\"content\">

    <div id=\"content-header\">
        <h1 id=\"titre_help\">Add GDO request</h1>  
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 151
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 151, $context, $this->getSourceContext());
        echo "
        </div>
    </div>

    <form id =\"addGdoForm\" class=\"form-horizontal\"  name=\"form1\" method=\"post\"  action = \"";
        // line 155
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ewish_gdo_add_request");
        echo "\" class=\"formulaire1\">
       
        <input name=\"nextyear\" type=\"hidden\" id=\"next-year\" value=\"";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["nextYear"]) || array_key_exists("nextYear", $context) ? $context["nextYear"] : (function () { throw new RuntimeError('Variable "nextYear" does not exist.', 157, $this->source); })()), "html", null, true);
        echo "\" />
        <input name=\"startdate\" type=\"hidden\" id=\"start-date\" value=\"";
        // line 158
        echo twig_escape_filter($this->env, (isset($context["startDate"]) || array_key_exists("startDate", $context) ? $context["startDate"] : (function () { throw new RuntimeError('Variable "startDate" does not exist.', 158, $this->source); })()), "html", null, true);
        echo "\" />
        <input name=\"enddate\" type=\"hidden\" id=\"end-date\" value=\"";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["endDate"]) || array_key_exists("endDate", $context) ? $context["endDate"] : (function () { throw new RuntimeError('Variable "endDate" does not exist.', 159, $this->source); })()), "html", null, true);
        echo "\" />
        <input name=\"currentyearjandate\" type=\"hidden\" id=\"current-year-jan-date\" value=\"";
        // line 160
        echo twig_escape_filter($this->env, (isset($context["currentYearJanDate"]) || array_key_exists("currentYearJanDate", $context) ? $context["currentYearJanDate"] : (function () { throw new RuntimeError('Variable "currentYearJanDate" does not exist.', 160, $this->source); })()), "html", null, true);
        echo "\" />

        <div class=\"row\">
            <div class=\"col-xs-12\">

                <div class=\"widget-box\">

                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>Day off informations</h5>
                    </div>

                    <div class=\"widget-content nopadding\">

                        <div class=\"form-group\">
                            <label class=\"control-label\">GDO day From :</label>
                            <div class=\"controls\">
                                <input onchange=\"javascript:showHideMultipleDays()\" id=\"date\" name=\"date\" type='text' id=\"date\" value='";
        // line 179
        echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 179, $this->source); })()), "html", null, true);
        echo "' class = \"form-control\" readonly=\"readonly\" />
                            </div>
                        </div>

                        <div id = \"date-to-block\" class = \"form-group\" style=\"display:";
        // line 183
        echo twig_escape_filter($this->env, (isset($context["displayTo"]) || array_key_exists("displayTo", $context) ? $context["displayTo"] : (function () { throw new RuntimeError('Variable "displayTo" does not exist.', 183, $this->source); })()), "html", null, true);
        echo ";\">
                            <label class=\"control-label\" for=\"date\">To :</label>                
                            <div class=\"controls\">
                                <input name=\"end\" class = \"form-control\" data-enable-datepicker type=\"text\" id=\"end\"   value=\"";
        // line 186
        echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 186, $this->source); })()), "html", null, true);
        echo "\" />
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"comment\">Comment</label>                
                            <div class=\"controls\">
                                <textarea class = \"form-control\" name=\"comment\" cols=\"50\" rows=\"8\" id=\"comment\"></textarea>
                            </div>
                        </div>

                        <div class=\"form-actions\">
                            <input name=\"submit\"  class=\"btn btn-primary\" type=\"submit\" value=\"Submit\">
                        </div>

                    </div>

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
        return "@EasyjetEwish/Gdo/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 186,  315 => 183,  308 => 179,  286 => 160,  282 => 159,  278 => 158,  274 => 157,  269 => 155,  262 => 151,  251 => 142,  241 => 141,  102 => 11,  97 => 9,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetEwish/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Add GDO request{% endblock %}

{% block specificJs %}{{ parent() }}

<script>
    var maxDays = {{ maxDays }};
    var minDays = 1;
    var isPilot = \"{{ isPilot }}\";

    \$( \"#addGdoForm\" ).submit(function( event ) {
        var startDate = convertDateFranceToEnglish(\$(\"#date\").val());
        var endDate = convertDateFranceToEnglish(\$(\"#end\").val());
        var nbDays = numberOfDaysBetweenTwoDates(startDate, endDate);
        var nextyear = \$(\"#next-year\").val();    
        var actualStartDate = \$(\"#start-date\").val();
        var actualEndDate = \$(\"#end-date\").val();
        var currentYearJanDate  = \$(\"#current-year-jan-date\").val();
        
        if (endDate < startDate)
        {
            alert (\"Invalid date(s) please try again\");
            return false;
        }
        if( !isPilot && startDate >= actualStartDate && startDate <= actualEndDate ) {
            if(nbDays > 4) {
                alert (\"You cannot bid more than 4 days in the Christmas period (from dec 21st until jan 4th \"+nextyear+\" inclusiv).\");
                return false;
            }
        } else if(endDate > currentYearJanDate && nbDays > 1) {
            alert (\"You can only make single day off request.\");
            return false;
        }
        if( nbDays>1 && endDate >= actualEndDate ) {
            alert(\"You cannot bid more than 4 days in the Christmas period (from dec 21st until jan 4th \"+nextyear+\" inclusiv).\");
            return false;
        }
        if (nbDays > maxDays) {
            alert (\"Period too long! You have to select a period from \" + minDays + \" to \" + maxDays + \" days.\");
            return false;
        }
        if (nbDays < minDays) {
            alert (\"Period too short You have to select a period from \" + minDays + \" to \" + maxDays + \" days.\");
            return false;
        }
        var x = confirm(\"Have you cross checked the correct dates from your GDO days request ?\");
        
        if(x == true) {
            return true;
        } else {
            return false;
        }
        
       
    });

   function convertDateFranceToEnglish(dateFr)
    {
        if(!dateFr) return \"0000-00-00\";
        var tmp = dateFr.split(\"/\");
        return tmp[2] + \"-\" + tmp[1] + \"-\" + tmp[0];
    } 

    function numberOfDaysBetweenTwoDates(date1, date2)
    {
        var nbDays1 = 0;
        var nbDays2 = 0;
        var firstDayEarly = \"\";
        var lastDayEarly = \"\";

        if (date2 == \"\") date2 = date1;

        if (date1 < date2)
        {
            firstDayEarly = date1;
            lastDayEarly = date2;
        }
        else
        {
            firstDayEarly = date2;
            lastDayEarly = date1 ;
        }
        var first = firstDayEarly.split(\"-\");
        var firstYear = convertToInt(first[0]);
        var firstMonth = convertToInt(first[1]);
        var firstDay = convertToInt(first[2]);

        var last = lastDayEarly.split(\"-\");
        var lastYear = convertToInt(last[0]);
        var lastMonth = convertToInt(last[1]);
        var lastDay = convertToInt(last[2]);

        // Calculation of the number of days since the beginning of the year of the first date

        for (var i = 1; i < firstMonth; i++)
        {
            nbDays1 += parseInt(daysInMonth(i, firstYear));
        }
        nbDays1 += parseInt(firstDay);
        // Calculation of the number of days since the beginning of the second date
        for (var j = firstYear; j < lastYear; j++) nbDays2 += parseInt(nbDaysYear(j)) ;
        for (k = 1; k < lastMonth; k++) nbDays2 += parseInt(daysInMonth(k, lastYear));
        nbDays2 += parseInt(lastDay);
        return (nbDays2 - nbDays1) + 1 ;
    }
  

    function daysInMonth(month, year) {
        var nbDays = new Array('31','28','31','30','31','30','31','31','30','31','30','31') ;
        if ( year % 4 == 0 ) nbDays[1] = '29' ;
        return nbDays[month - 1] ;
    }

    function nbDaysYear( year )
    {
        var total = 0;
        for (i=1; i<=12; i++)
        {
            total += parseInt(daysInMonth (i, year));
        }
        return total;
    }

    function convertToInt( chain )
    {
        i = 0;
        if (chain == \"\" || chain == 0) return 0;
        while (chain.substring(i, i+1) == \"0\")
        {
            chain = chain.substring(1, chain.length);
            i++;
        }
        return parseInt(chain);
    }

</script>
{% endblock specificJs %}

{% block container %}

<div id=\"content\">

    <div id=\"content-header\">
        <h1 id=\"titre_help\">Add GDO request</h1>  
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ macros.wizz() }}
        </div>
    </div>

    <form id =\"addGdoForm\" class=\"form-horizontal\"  name=\"form1\" method=\"post\"  action = \"{{ url( 'ewish_gdo_add_request' ) }}\" class=\"formulaire1\">
       
        <input name=\"nextyear\" type=\"hidden\" id=\"next-year\" value=\"{{ nextYear }}\" />
        <input name=\"startdate\" type=\"hidden\" id=\"start-date\" value=\"{{ startDate }}\" />
        <input name=\"enddate\" type=\"hidden\" id=\"end-date\" value=\"{{ endDate }}\" />
        <input name=\"currentyearjandate\" type=\"hidden\" id=\"current-year-jan-date\" value=\"{{ currentYearJanDate }}\" />

        <div class=\"row\">
            <div class=\"col-xs-12\">

                <div class=\"widget-box\">

                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>Day off informations</h5>
                    </div>

                    <div class=\"widget-content nopadding\">

                        <div class=\"form-group\">
                            <label class=\"control-label\">GDO day From :</label>
                            <div class=\"controls\">
                                <input onchange=\"javascript:showHideMultipleDays()\" id=\"date\" name=\"date\" type='text' id=\"date\" value='{{ date }}' class = \"form-control\" readonly=\"readonly\" />
                            </div>
                        </div>

                        <div id = \"date-to-block\" class = \"form-group\" style=\"display:{{ displayTo }};\">
                            <label class=\"control-label\" for=\"date\">To :</label>                
                            <div class=\"controls\">
                                <input name=\"end\" class = \"form-control\" data-enable-datepicker type=\"text\" id=\"end\"   value=\"{{ date }}\" />
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"comment\">Comment</label>                
                            <div class=\"controls\">
                                <textarea class = \"form-control\" name=\"comment\" cols=\"50\" rows=\"8\" id=\"comment\"></textarea>
                            </div>
                        </div>

                        <div class=\"form-actions\">
                            <input name=\"submit\"  class=\"btn btn-primary\" type=\"submit\" value=\"Submit\">
                        </div>

                    </div>

                </div>

             </div>

        </div>

    </form>
</div>     
       
{% endblock container %}", "@EasyjetEwish/Gdo/add.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EwishBundle\\Resources\\views\\Gdo\\add.html.twig");
    }
}
