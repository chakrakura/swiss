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

/* @EasyjetEleave/Wishes/add.html.twig */
class __TwigTemplate_6db91911444741d35c73b1837b5481b8f5d8dbd57b33db068e63bd840936f2af extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/Wishes/add.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/Wishes/add.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetEleave/Wishes/add.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetEleave/Base/structure.html.twig", "@EasyjetEleave/Wishes/add.html.twig", 1);
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

    // line 7
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

\t\$(\".date-picker\").datepicker({
\tformat: 'dd/mm/yyyy',
\tautoclose: true,
\t}).on('changeDate', function(selected) {
\t\tupdateDate(\$(this).closest('.form-group').next().find('.date-picker').attr('id'), selected);
    });

    function updateDate(input, selected) {
        var minDate = new Date(selected.date.valueOf());
        \$('#'+input).datepicker('setStartDate', minDate);
    }

\tvar today = \"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["today"]) || array_key_exists("today", $context) ? $context["today"] : (function () { throw new RuntimeError('Variable "today" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\";
\tvar dateMin = \"";
        // line 24
        echo twig_escape_filter($this->env, (isset($context["dateMin"]) || array_key_exists("dateMin", $context) ? $context["dateMin"] : (function () { throw new RuntimeError('Variable "dateMin" does not exist.', 24, $this->source); })()), "html", null, true);
        echo "\";
\tvar dateMax = \"";
        // line 25
        echo twig_escape_filter($this->env, (isset($context["dateMax"]) || array_key_exists("dateMax", $context) ? $context["dateMax"] : (function () { throw new RuntimeError('Variable "dateMax" does not exist.', 25, $this->source); })()), "html", null, true);
        echo "\";
\tvar isPilot = \"";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["isPilot"]) || array_key_exists("isPilot", $context) ? $context["isPilot"] : (function () { throw new RuntimeError('Variable "isPilot" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "\" ;
\tvar isAdmin = \"";
        // line 27
        echo twig_escape_filter($this->env, (isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 27, $this->source); })()), "html", null, true);
        echo "\";
\tvar autoDisplay =  \"";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["autoDisplay"]) || array_key_exists("autoDisplay", $context) ? $context["autoDisplay"] : (function () { throw new RuntimeError('Variable "autoDisplay" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "\";
    var holidaysMaxDays = isPilot ? 17: 16;

\tfunction hideShow() {
\t\tif( autoDisplay == 0 )
\t\t\tdocument.getElementById(\"choice1_leave_preference\").remove(1);    
\t\t}
    window.onload = hideShow;

\tfunction gapInDays(date1, date2)
\t{
\t\tvar nbDays1 = 0;
\t\tvar nbDays2 = 0;
\t\tvar firstDayEarly = \"\";
\t\tvar lastDayEarly = \"\";

\t\tif (date2 == \"\") date2 = date1;

\t\tif (date1 < date2)
\t\t{
\t\t\tfirstDayEarly = date1;
\t\t\tlastDayEarly = date2;
\t\t}
\t\telse
\t\t{
\t\t\tfirstDayEarly = date2;
\t\t\tlastDayEarly = date1 ;
\t\t}
\t\tvar first = firstDayEarly.split(\"-\");
\t\tvar firstYear = convertToInt(first[0]);
\t\tvar firstMonth = convertToInt(first[1]);
\t\tvar firstDay = convertToInt(first[2]);

\t\tvar last = lastDayEarly.split(\"-\");
\t\tvar LastYear = convertToInt(last[0]);
\t\tvar LastMonth = convertToInt(last[1]);
\t\tvar LastDay = convertToInt(last[2]);
\t\t// Calculation of the number of days since the beginning of year of the first date
\t\tfor (i = 1; i < firstMonth; i++)
\t\t{
\t\t\tnbDays1 += parseInt(numberOfdaysInMonth(i, firstYear));
\t\t}
\t\tnbDays1 += parseInt(firstDay);
\t\t// Calculation of the number of days since the beginning of the second date
\t\tfor (i = firstYear; i < LastYear; i++)
\t\t{
\t\t\tnbDays2 += parseInt(numberOfDaysInYear(i)) ;
\t\t}
\t\tfor (i = 1; i < LastMonth; i++)
\t\t{
\t\t\tnbDays2 += parseInt(numberOfdaysInMonth(i, LastYear));
\t\t}
\t\tnbDays2 += parseInt(LastDay);
\t\treturn (nbDays2 - nbDays1) + 1 ;
\t}

\tfunction convertToInt(chaine)
\t{
\t\tvar k = 0;
\t\tif (chaine == \"\" || chaine == 0) return 0;
\t\twhile (chaine.substring(k, k+1) == \"0\")
\t\t{
\t\t\tchaine = chaine.substring(1, chaine.length);
\t\t\tk++;
\t\t}
\t\treturn parseInt(chaine);
\t}

\tfunction numberOfdaysInMonth ( month , year ) {
\t\tvar nbDays = new Array('31','28','31','30','31','30','31','31','30','31','30','31') ;
\t\tif ( year % 4 == 0 ) nbDays[1] = '29' ;
\t\treturn convertToInt(nbDays[month - 1]) ;
\t}

\tfunction numberOfDaysInYear (year)
\t{
\t\tvar total = 0;
\t\tfor (j=1; j<=12; j++)
\t\t{
\t\t\ttotal += numberOfdaysInMonth(j, year);
\t\t}
\t\treturn total;
\t}

\tfunction isRequestLessThan16Monthts() {
\t\t
\t\tif(formatToEnglish(\$('#choice1_start').val()) > dateMax) {
\t\t\talert(\"Choice 1 : Leaves periods can be requested no longer than 16 months in advance. You cannot do a leave request after the \" + formatToFrance(dateMax) + \". Please change your wish date or wait the required time to do this request.\");
\t\t\treturn false;
\t\t}
\t\tif(formatToEnglish(\$('#choice2_start').val()) > dateMax) {
\t\t\talert(\"Choice 2 : Leaves periods can be requested no longer than 16 months in advance. You cannot do a leave request after the \" + formatToFrance(dateMax) + \". Please change your wish date or wait the required time to do this request.\");
\t\t\treturn false;
\t\t}
\t\tif(formatToEnglish(\$('#choice3_start').val()) > dateMax) {
\t\t\talert(\"Choice 3 : Leaves periods can be requested no longer than 16 months in advance. You cannot do a leave request after the \" + formatToFrance(dateMax) + \". Please change your wish date or wait the required time to do this request.\");
\t\t\treturn false;
\t\t}
\t\treturn true;
\t}

\tfunction fromSubmit()
\t{
\t\t
\t\tvar leave_preference = \$('#choice1_leave_preference').find(\":selected\").val();

\t\tif ( leave_preference === false || leave_preference === \"\" ) {
\t\t\talert(\"please select a choice from the leave preference !\");
\t\t\treturn false;
\t\t}

\t\t//Requests cannot be made more than 16 months in advance
\t\tif (!isRequestLessThan16Monthts()) return false;

\t\tvar choice1Start = formatToEnglish(\$('#choice1_start').val());
\t\tvar choice1End   = formatToEnglish(\$('#choice1_end').val());
\t\tvar choice2Start = formatToEnglish(\$('#choice2_start').val());
\t\tvar choice2End   = formatToEnglish(\$('#choice2_end').val());
\t\tvar choice3Start = formatToEnglish(\$('#choice3_start').val());
\t\tvar choice3End   = formatToEnglish(\$('#choice3_end').val());

\t\tvar choice1StartVal = \$('#choice1_start').val();
\t\tvar choice1EndVal   = \$('#choice1_end').val();
\t\tvar choice2StartVal = \$('#choice2_start').val();
\t\tvar choice2EndVal   = \$('#choice2_end').val();
\t\tvar choice3StartVal = \$('#choice3_start').val();
\t\tvar choice3EndVal   = \$('#choice3_end').val();

\t\tif (choice1End < choice1Start) 
\t\t{
\t\t\talert (\"Choice 1 : Invalid date(s) please try again.\") ; 
\t\t\treturn false;
\t\t}
\t\tif (choice2End < choice2Start) {
\t\t\talert (\"Choice 2 : Invalid date(s) please try again.\") ; 
\t\t\treturn false;
\t\t}
\t\tif (choice3End < choice3Start) {
\t\t\talert (\"Choice 3 : Invalid date(s) please try again.\") ; 
\t\t\treturn false;
\t\t}
\t\t
\t\tif (choice1Start < dateMin) {
\t\t\talert(\"Choice 1 : Invalid date(s) please try again. You must choose above \" + formatToFrance(dateMin)) ; 
\t\t\treturn false;
\t\t}
\t\tif (choice2Start < dateMin) {
\t\t\talert(\"Choice 2 : Invalid date(s) please try again. You must choose above \" + formatToFrance(dateMin)) ; 
\t\t\treturn false;
\t\t}
\t\tif (choice3Start < dateMin) {
\t\t\talert(\"Choice 3 : Invalid date(s) please try again. You must choose above \" + formatToFrance(dateMin)) ; 
\t\t\treturn false;
\t\t}
\t\t
\t
\t\t// First date slice
\t\tvar start = choice1Start;
\t\tvar end   = choice1End; 
\t\tvar bool_must_second_choice = false;

\t\tif (start == false || end == false) return emptyField();
\t\t
\t\tvar tmp_start = \"\";
\t\tvar tmp_end = \"\";
\t\tif (summerOrWinter(start) || summerOrWinter(end))
\t\t{
\t\t\t
\t\t\ttmp_start = start;
\t\t\ttmp_end = end;
\t\t\tif (summer(tmp_start) || summer(tmp_end))
\t\t\t{
\t\t\t\t\t\tif (tmp_start < year(tmp_start) + \"-07-01\") tmp_start = year(tmp_start) + \"-07-01\";
\t\t\t\t\t\tif (tmp_end > year(tmp_end) + \"-08-31\") tmp_end = year(tmp_end) + \"-08-31\";
\t\t\t\t\t\tif (gapInDays(tmp_start, tmp_end) > holidaysMaxDays) {
\t\t\t\t\t\t\tif(field1ToValid()) return periodTooLong();
\t\t\t\t\t\t}
\t\t\t}
\t\t\tif (winter(tmp_start) || winter(tmp_end))
\t\t\t{
\t\t\t\tif (tmp_start < year(tmp_start) + \"-12-15\" && tmp_start > year(tmp_start) + \"-08-15\") tmp_start = year(tmp_start) + \"-12-15\";
\t\t\t\tif (tmp_end > year(tmp_end) + \"-01-15\" && tmp_end < year(tmp_end) + \"-05-15\" ) tmp_end = year(tmp_end) + \"-01-15\";
\t\t\t}

\t\t\tbool_must_second_choice = true;
\t\t\t
\t\t}
\t\t

\t\tif(!isPilot && isNewYearPlusChristmass(choice1StartVal, choice1EndVal)) return newYearAndChristmassError();
\t\t
\t\t
\t\t// Second date slice

\t\tstart = choice2Start;
\t\tend   = choice2End;
\t\tif (bool_must_second_choice == true && (start == false || end == false))
\t\t{
\t\t\talert (\"You must have more than one choice for the winter/summer period\");
\t\t\treturn false;
\t\t}
\t\tif ((start != false && end == false) || (start == false && end != false)) return emptyField();

\t\tvar tmp_start = \"\";
\t\tvar tmp_end = \"\";

\t\tif (summerOrWinter(start) || summerOrWinter(end))
\t\t{
\t\t\ttmp_start = start;
\t\t\ttmp_end = end;\t\t
\t\t\tif (summer(tmp_start) || summer(tmp_end))
\t\t\t{
\t\t\t\t\t\tif (tmp_start < year(tmp_start) + \"-07-01\") tmp_start = year(tmp_start) + \"-07-01\";
\t\t\t\t\t\tif (tmp_end > year(tmp_end) + \"-08-31\") tmp_end = year(tmp_end) + \"-08-31\";
\t\t\t\t\t\t
\t\t\t\t\t\tif (gapInDays(tmp_start, tmp_end) > holidaysMaxDays) {
\t\t\t\t\t\t\tif(field2ToValid()) return periodTooLong(); 
\t\t\t\t\t\t}
\t\t\t}
\t\t\tif (winter(tmp_start) || winter(tmp_end))
\t\t\t{
\t\t\t\t\t\tif (tmp_start < year(tmp_start) + \"-12-15\" && tmp_start > year(tmp_start) + \"-08-15\") tmp_start = year(tmp_start) + \"-12-15\";
\t\t\t\t\t\tif (tmp_end > year(tmp_end) + \"-01-15\" && tmp_end < year(tmp_end) + \"-05-15\" ) tmp_end = year(tmp_end) + \"-01-15\";
\t\t\t}

\t\t\t
\t\t}
\t\tif(!isPilot && isNewYearPlusChristmass(choice2StartVal, choice2EndVal)) return newYearAndChristmassError();
\t\t
\t\t
\t\t// Third date slice

\t\tstart =  choice3Start;
\t\tend   =  choice3End;
\t\t
\t\tif ((start != false && end == false) || (start == false && end != false)) return emptyField();

\t\tvar tmp_start = \"\";
\t\tvar tmp_end = \"\";
\t\tif (summerOrWinter(start) || summerOrWinter(end))
\t\t{
\t\t\ttmp_start = start;
\t\t\ttmp_end = end;
\t\t\tif (summer(tmp_start) || summer(tmp_end))
\t\t\t{
\t\t\t\t\t\tif (tmp_start < year(tmp_start) + \"-07-01\") tmp_start = year(tmp_start) + \"-07-01\";
\t\t\t\t\t\tif (tmp_end > year(tmp_end) + \"-08-31\") tmp_end = year(tmp_end) + \"-08-31\";
\t\t\t\t\t\tif (gapInDays(tmp_start, tmp_end) > holidaysMaxDays) {
\t\t\t\t\t\t\tif(field3ToValid()) return periodTooLong();
\t\t\t\t\t\t}
\t\t\t}
\t\t\tif (winter(tmp_start) || winter(tmp_end))
\t\t\t{
\t\t\t\t\t\tif (tmp_start < year(tmp_start) + \"-12-15\" && tmp_start > year(tmp_start) + \"-08-15\") tmp_start = year(tmp_start) + \"-12-15\";
\t\t\t\t\t\tif (tmp_end > year(tmp_end) + \"-01-15\" && tmp_end < year(tmp_end) + \"-05-15\" ) tmp_end = year(tmp_end) + \"-01-15\";
\t\t\t}

\t\t\t
\t\t}
\t\t
\t\tif(!isPilot && isNewYearPlusChristmass(choice3StartVal, choice1EndVal)) return newYearAndChristmassError();
\t\t
\t\t

\t\t// There must not be 2x the same entry period
\t\tif ((choice1StartVal == choice2StartVal && choice1EndVal == choice2EndVal && choice1StartVal != \"00/00/0000\" && choice1StartVal != \"\" && choice2EndVal != \"00/00/0000\" && choice2EndVal != \"\") ||
\t\t\t(choice1StartVal == choice3StartVal && choice1EndVal == choice3EndVal && choice1StartVal != \"00/00/0000\" && choice1StartVal != \"\" && choice3EndVal != \"00/00/0000\" && choice3EndVal != \"\") ||
\t\t\t(choice2StartVal == choice3StartVal && choice2EndVal == choice3EndVal && choice2StartVal != \"00/00/0000\" && choice2StartVal != \"\" && choice3EndVal != \"00/00/0000\" && choice3EndVal != \"\") )
\t\t{
\t\t\talert (\"You cannot select many times the same period!\");
\t\t\treturn false;
\t\t}
        var ajaxResult = false;
\t\tvar params  = {'choice1_start': choice1Start, 'choice1_end': choice1End, 'choice1_leave_preference':leave_preference, 'user_id': \$('#wish-user-id').val() }
\t\t// Checking if user has already applied leaves for the same period
\t\t\t\$.ajax({  
\t\t\t\turl      :   \"";
        // line 304
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_choice_preference_check");
        echo "\",  
\t\t\t\ttype     :    'POST',   
\t\t\t\tdataType :  'json',  
\t\t\t\tasync    :      false ,  
\t\t\t\tdata     : params,
\t\t\t\tsuccess: function(data) {  
\t\t\t\t\tif(data > 0) {
\t\t\t\t\t\talert(\"You are trying to submit a request for a leave period which is already in the database. Please try again using a different leave period!\");
\t\t\t\t\t\treturn false;
\t\t\t\t\t} else {
\t\t\t\t\t\tif(isAdmin){
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t    ajaxResult = confirm(\"You are about to send your request, do you want to proceed ?\");
\t\t\t\t\t}
\t\t\t\t},  
\t\t\t\terror : function(xhr, textStatus, errorThrown) {  
\t\t\t\t\talert('Ajax request failed.'); 
\t\t\t\t\treturn false; 
\t\t\t\t}     
\t\t\t});

\t\t\tif(isAdmin) {
\t\t\t    return true;
\t\t\t}  
\t\t\tif (ajaxResult == true) {
\t\t\t\treturn true;
\t\t\t} else {
\t\t\t\treturn false; 
\t\t\t}
\t\t
\t}


\tfunction isNewYearPlusChristmass(date1, date2)
\t{
\t\t// date1 and date 2 are in jj/mm/YYYY format ...
\t\tdate1 = formatToEnglish(date1); 
\t\tdate2 = formatToEnglish(date2);
\t\tvar tmp = today.split(\"-\");
\t\tvar year = parseInt(tmp[0]);
\t\tif(date1 <= year + \"-12-25\" && date2 >= (year + 1) + \"-01-01\") return true;
\t\treturn false;

\t}

\tfunction formatToEnglish(date)
\t{
\t\t
\t\tif (date == \"\" || date == \"undefined\") return false;
\t\tvar tab = date.split(\"/\");
\t\treturn tab[2] + \"-\" + tab[1] + \"-\" + tab[0];
\t}

\tfunction formatToFrance(date)
\t{
\t\tif (date == \"\" || date == \"undefined\") return false;
\t\tvar tab = date.split(\"-\");
\t\treturn tab[2] + \"-\" + tab[1] + \"-\" + tab[0];
\t}

\tfunction year(date)
\t{
\t\tvar tab = date.split(\"-\");
\t\treturn tab[0];
\t}

\tfunction summerOrWinter(date)
\t{
\t\tif (!date) return false;
\t\tif (date >= year(date) + \"-07-01\" && date <= year(date) + \"-08-31\") return true;
\t\tif (date >= year(date) + \"-12-15\" || date <= year(date) + \"-01-15\") return true;

\t\treturn false;
\t}

\tfunction summer(date)
\t{
\t\tif (!date) return false;
\t\tif (date >= year(date) + \"-07-01\" && date <= year(date) + \"-08-31\") return true;
\t\treturn false;
\t}

\tfunction winter(date)
\t{
\t\tif (!date) return false;
\t\tif (date >= year(date) + \"-12-15\" || date <= year(date) + \"-01-15\") return true;
\t\treturn false;
\t}

\tfunction emptyField ()
\t{
\t\talert (\"Thanks to complete the threads\");
\t\treturn false;
\t}

\tfunction periodTooLong()
\t{
\t\talert (\"You cannot take more than \" + holidaysMaxDays + \" days for summer period\");
\t\treturn false;
\t}

\tfunction must_second_choice()
\t{
\t\talert (\"You must have more than one choice for the winter/summer period\");
\t\treturn false;
\t}

\tfunction newYearAndChristmassError()
\t{
\t\talert (\"You cannot choose both periods of Christmas and New Year\");
\t\treturn false;
\t}



\tfunction choiceSelect(id) {
\t\tif(document.getElementById(id).checked == true) {
\t\t\tswitch(id) {
\t\t\t\tcase 'choice1' :
\t\t\t\t\tdocument.getElementById('choice2').checked = false;
\t\t\t\t\tdocument.getElementById('choice3').checked = false;
\t\t\t\t\tbreak;
\t\t\t\tcase 'choice2' :
\t\t\t\t\tdocument.getElementById('choice1').checked = false;
\t\t\t\t\tdocument.getElementById('choice3').checked = false;
\t\t\t\t\tbreak;
\t\t\t\tcase 'choice3' :
\t\t\t\t\tdocument.getElementById('choice1').checked = false;
\t\t\t\t\tdocument.getElementById('choice2').checked = false;
\t\t\t\t\tbreak;
\t\t\t}
\t\t}
\t\t
\t}

\tfunction field1ToValid() {
\t\tif(!isAdmin) {
\t\t\treturn true;
\t\t}
\t\telse {
\t\t\tif(document.getElementById('choice1').checked) return true;
\t\t}
\t}

\tfunction field2ToValid() {
\t\tif(!isAdmin) {
\t\t\treturn true;
\t\t}
\t\telse {
\t\t\tif(document.getElementById('choice2').checked) return true;
\t\t}
    }

\tfunction field3ToValid() {
\t\tif(!isAdmin) {
\t\t\treturn true;
\t\t}
\t\telse {
\t\t\tif(document.getElementById('choice3').checked) return true;
\t\t}
\t}

</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 471
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 472
        echo "
<div id=\"content\">
    <div id=\"content-header\">
       <h1 id=\"titre_help\">";
        // line 475
        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 475, $this->source); })()), "html", null, true);
        echo "</h1>
    </div>
    <div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t\t";
        // line 479
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 479, $context, $this->getSourceContext());
        echo "
\t\t</div>
    </div>
\t\t\t

    <form ";
        // line 484
        if ((0 === twig_compare((isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 484, $this->source); })()), false))) {
            echo " onSubmit=\"return fromSubmit();\" ";
        }
        echo " name=\"form1\"  id =\"form1\" method=\"post\" action=\"";
        ((twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 484, $this->source); })()), "id", [], "any", false, false, false, 484)) ? (print (twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_wishes_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 484, $this->source); })()), "id", [], "any", false, false, false, 484)]), "html", null, true))) : (print ($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_wishes_add"))));
        echo "\" class=\"form-horizontal\">
\t\t<input name=\"id\" type=\"hidden\" id=\"id\" value=\"";
        // line 485
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 485, $this->source); })()), "id", [], "any", false, false, false, 485), "html", null, true);
        echo "\">
\t\t<input name=\"wish_user\" type=\"hidden\" id=\"wish-user-id\" value=\"";
        // line 486
        echo twig_escape_filter($this->env, (isset($context["wishUser"]) || array_key_exists("wishUser", $context) ? $context["wishUser"] : (function () { throw new RuntimeError('Variable "wishUser" does not exist.', 486, $this->source); })()), "html", null, true);
        echo "\">
\t\t
        <div class=\"row\">
            <div class=\"col-xs-12\">
\t\t\t\t<div class=\"widget-box\">
\t\t\t\t\t<div class=\"widget-title\">
\t\t\t\t\t\t\t<h5>Select your leave preference</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-content nopadding\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">Leave preference :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t        <select name=\"choice1_leave_preference\" id=\"choice1_leave_preference\" >
\t\t\t\t\t\t\t\t\t   ";
        // line 500
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["preferenceList"]) || array_key_exists("preferenceList", $context) ? $context["preferenceList"] : (function () { throw new RuntimeError('Variable "preferenceList" does not exist.', 500, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 501
            echo "                                            <option ";
            echo ((twig_in_filter($context["key"], (isset($context["selectedLeavePreference"]) || array_key_exists("selectedLeavePreference", $context) ? $context["selectedLeavePreference"] : (function () { throw new RuntimeError('Variable "selectedLeavePreference" does not exist.', 501, $this->source); })()))) ? (" selected=\"selected\" ") : (""));
            echo " value=\"";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "</option>
                                       ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 503
        echo "                                    </select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>    
     \t            </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
\t\t        <div class=\"widget-box\">
\t\t\t\t\t<div class=\"widget-title ";
        // line 514
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 514, $this->source); })()), "color1", [], "any", false, false, false, 514), "html", null, true);
        echo "\">
\t\t\t\t\t\t<h5 >Priority choice <span style=\"position:absolute;right: 60px;\" class=\"float_right\"><input ";
        // line 515
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 515, $this->source); })()), "checked1", [], "any", false, false, false, 515), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 515, $this->source); })()), "disable1", [], "any", false, false, false, 515), "html", null, true);
        echo "  type=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 515, $this->source); })()), "checkbox", [], "any", false, false, false, 515), "html", null, true);
        echo "\" id=\"choice1\" onchange=\"javascript:choiceSelect('choice1')\" name=\"choice1_accepted\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 515, $this->source); })()), "choice1Accepted", [], "any", false, false, false, 515), "html", null, true);
        echo "\" /> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 515, $this->source); })()), "textCheckbox1", [], "any", false, false, false, 515), "html", null, true);
        echo "</span></h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-content nopadding\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">First Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type='text' id=\"choice1_start\" class=\"form-control date-picker\" placeholder=\"dd/mm/yyyy\" name=\"choice1_start\" value='";
        // line 521
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 521, $this->source); })()), "choice1Start", [], "any", false, false, false, 521), "html", null, true);
        echo "'  data-enable-datepicker=\"true\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>  

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">Last Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type='text' id=\"choice1_end\" data-enable-datepicker=\"true\" class=\"form-control date-picker\" placeholder=\"dd/mm/yyyy\" name=\"choice1_end\" value='";
        // line 528
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 528, $this->source); })()), "choice1End", [], "any", false, false, false, 528), "html", null, true);
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
\t\t\t\t\t<div class=\"widget-title ";
        // line 541
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 541, $this->source); })()), "color2", [], "any", false, false, false, 541), "html", null, true);
        echo "\">
\t\t\t\t\t\t<h5>Second choice <span style=\"position:absolute;right: 60px;\" class=\"float_right\"><input ";
        // line 542
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 542, $this->source); })()), "checked2", [], "any", false, false, false, 542), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 542, $this->source); })()), "disable2", [], "any", false, false, false, 542), "html", null, true);
        echo "  type = \"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 542, $this->source); })()), "checkbox", [], "any", false, false, false, 542), "html", null, true);
        echo "\" id = \"choice2\" onchange = \"javascript:choiceSelect('choice2')\" name = \"choice2_accepted\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 542, $this->source); })()), "choice2Accepted", [], "any", false, false, false, 542), "html", null, true);
        echo "\" /> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 542, $this->source); })()), "textCheckbox2", [], "any", false, false, false, 542), "html", null, true);
        echo "</span></h5>
\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-content nopadding\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">First Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"choice2_start\" placeholder=\"dd/mm/yyyy\" data-enable-datepicker=\"true\" class=\"form-control date-picker\" name=\"choice2_start\" value='";
        // line 549
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 549, $this->source); })()), "choice2Start", [], "any", false, false, false, 549), "html", null, true);
        echo "' />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>  

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">Last Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"choice2_end\" placeholder=\"dd/mm/yyyy\" data-enable-datepicker=\"true\" class=\"form-control date-picker\" name=\"choice2_end\" value=\"";
        // line 556
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 556, $this->source); })()), "choice2End", [], "any", false, false, false, 556), "html", null, true);
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
\t\t\t\t\t<div class=\"widget-title ";
        // line 569
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 569, $this->source); })()), "color3", [], "any", false, false, false, 569), "html", null, true);
        echo "\">
\t\t\t\t\t\t<h5>Third choice <span style=\"position:absolute;right: 60px;\" class=\"float_right\"><input ";
        // line 570
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 570, $this->source); })()), "checked3", [], "any", false, false, false, 570), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 570, $this->source); })()), "disable3", [], "any", false, false, false, 570), "html", null, true);
        echo "  type=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 570, $this->source); })()), "checkbox", [], "any", false, false, false, 570), "html", null, true);
        echo "\" id=\"choice3\" onchange=\"javascript:choiceSelect('choice3')\" name=\"choice3_accepted\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 570, $this->source); })()), "choice3Accepted", [], "any", false, false, false, 570), "html", null, true);
        echo "\" /> ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 570, $this->source); })()), "textCheckbox3", [], "any", false, false, false, 570), "html", null, true);
        echo "</span></h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-content nopadding\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">First Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"choice3_start\" placeholder=\"dd/mm/yyyy\" data-enable-datepicker=\"true\" class=\"form-control date-picker\" name=\"choice3_start\" value='";
        // line 576
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 576, $this->source); })()), "choice3Start", [], "any", false, false, false, 576), "html", null, true);
        echo "'  />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>  
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">Last Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"choice3_end\" placeholder=\"dd/mm/yyyy\"  data-enable-datepicker=\"true\" class=\"form-control date-picker\" name=\"choice3_end\" value=\"";
        // line 582
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["formData"]) || array_key_exists("formData", $context) ? $context["formData"] : (function () { throw new RuntimeError('Variable "formData" does not exist.', 582, $this->source); })()), "choice3End", [], "any", false, false, false, 582), "html", null, true);
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
\t\t\t\t\t    ";
        // line 598
        if (((isset($context["isEdit"]) || array_key_exists("isEdit", $context) ? $context["isEdit"] : (function () { throw new RuntimeError('Variable "isEdit" does not exist.', 598, $this->source); })()) && (isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 598, $this->source); })()))) {
            // line 599
            echo "\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Refused reason :</label>    
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t<select name=\"motif_refus\" id=\"motif_refus\" >
\t\t\t\t\t\t\t\t\t\t<option  value=\"\">-- select --</option>
\t\t\t\t\t\t\t\t\t\t";
            // line 604
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["refus"]) || array_key_exists("refus", $context) ? $context["refus"] : (function () { throw new RuntimeError('Variable "refus" does not exist.', 604, $this->source); })()));
            foreach ($context['_seq'] as $context["key"] => $context["value"]) {
                // line 605
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option ";
                echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 605), (isset($context["selectedRefus"]) || array_key_exists("selectedRefus", $context) ? $context["selectedRefus"] : (function () { throw new RuntimeError('Variable "selectedRefus" does not exist.', 605, $this->source); })())))) ? (" selected=\"selected\" ") : (""));
                echo " value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "id", [], "any", false, false, false, 605), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["value"], "label", [], "any", false, false, false, 605), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['value'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 607
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Total leave days due :</label>    
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<input type=\"text\"  class=\"form-control\" name=\"total_leave_day_due\" value='";
            // line 613
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishData"]) || array_key_exists("wishData", $context) ? $context["wishData"] : (function () { throw new RuntimeError('Variable "wishData" does not exist.', 613, $this->source); })()), "totalLeaveDayDue", [], "any", false, false, false, 613), "html", null, true);
            echo "'  />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Total Leave days booked and confirmed :</label>    
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<input type=\"text\"  class=\"form-control\" name=\"total_leave_day_confirmed\" value='";
            // line 619
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishData"]) || array_key_exists("wishData", $context) ? $context["wishData"] : (function () { throw new RuntimeError('Variable "wishData" does not exist.', 619, $this->source); })()), "totalLeaveDayConfirmed", [], "any", false, false, false, 619), "html", null, true);
            echo "'  />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Total Leave days taken this Year :</label>    
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<input type=\"text\"  class=\"form-control\" name=\"total_leave_day_taken\" value='";
            // line 625
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishData"]) || array_key_exists("wishData", $context) ? $context["wishData"] : (function () { throw new RuntimeError('Variable "wishData" does not exist.', 625, $this->source); })()), "totalLeaveDayTaken", [], "any", false, false, false, 625), "html", null, true);
            echo "'  />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Remaining Leave not taken or confirmed :</label>    
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<input type=\"text\"  class=\"form-control\" name=\"remaining_leave\" value='";
            // line 631
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishData"]) || array_key_exists("wishData", $context) ? $context["wishData"] : (function () { throw new RuntimeError('Variable "wishData" does not exist.', 631, $this->source); })()), "remainingLeave", [], "any", false, false, false, 631), "html", null, true);
            echo "'  />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t";
        }
        // line 634
        echo "\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">Comment :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<textarea name=\"comment_user\" class=\"form-control\" cols=\"50\" rows=\"6\">";
        // line 638
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishData"]) || array_key_exists("wishData", $context) ? $context["wishData"] : (function () { throw new RuntimeError('Variable "wishData" does not exist.', 638, $this->source); })()), "commentUser", [], "any", false, false, false, 638), "html", null, true);
        echo "</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> 
\t\t\t\t\t\t";
        // line 641
        if ((isset($context["isSubmit"]) || array_key_exists("isSubmit", $context) ? $context["isSubmit"] : (function () { throw new RuntimeError('Variable "isSubmit" does not exist.', 641, $this->source); })())) {
            // line 642
            echo "\t\t\t\t\t\t <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-primary\" name=\"btn-to-display\"><i class=\"icon-submit\"></i> submit</button>
                        </div>   
\t\t\t\t        ";
        }
        // line 645
        echo "\t\t
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
        return "@EasyjetEleave/Wishes/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  907 => 645,  901 => 642,  899 => 641,  893 => 638,  887 => 634,  880 => 631,  871 => 625,  862 => 619,  853 => 613,  845 => 607,  832 => 605,  828 => 604,  821 => 599,  819 => 598,  800 => 582,  791 => 576,  774 => 570,  770 => 569,  754 => 556,  744 => 549,  726 => 542,  722 => 541,  706 => 528,  696 => 521,  679 => 515,  675 => 514,  662 => 503,  649 => 501,  645 => 500,  628 => 486,  624 => 485,  616 => 484,  608 => 479,  601 => 475,  596 => 472,  586 => 471,  410 => 304,  131 => 28,  127 => 27,  123 => 26,  119 => 25,  115 => 24,  111 => 23,  83 => 7,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetEleave/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %} {{ title }}{% endblock %}


{% block specificJs %}{{ parent() }}

<script>

\t\$(\".date-picker\").datepicker({
\tformat: 'dd/mm/yyyy',
\tautoclose: true,
\t}).on('changeDate', function(selected) {
\t\tupdateDate(\$(this).closest('.form-group').next().find('.date-picker').attr('id'), selected);
    });

    function updateDate(input, selected) {
        var minDate = new Date(selected.date.valueOf());
        \$('#'+input).datepicker('setStartDate', minDate);
    }

\tvar today = \"{{today}}\";
\tvar dateMin = \"{{dateMin}}\";
\tvar dateMax = \"{{dateMax}}\";
\tvar isPilot = \"{{isPilot}}\" ;
\tvar isAdmin = \"{{isAdmin}}\";
\tvar autoDisplay =  \"{{autoDisplay}}\";
    var holidaysMaxDays = isPilot ? 17: 16;

\tfunction hideShow() {
\t\tif( autoDisplay == 0 )
\t\t\tdocument.getElementById(\"choice1_leave_preference\").remove(1);    
\t\t}
    window.onload = hideShow;

\tfunction gapInDays(date1, date2)
\t{
\t\tvar nbDays1 = 0;
\t\tvar nbDays2 = 0;
\t\tvar firstDayEarly = \"\";
\t\tvar lastDayEarly = \"\";

\t\tif (date2 == \"\") date2 = date1;

\t\tif (date1 < date2)
\t\t{
\t\t\tfirstDayEarly = date1;
\t\t\tlastDayEarly = date2;
\t\t}
\t\telse
\t\t{
\t\t\tfirstDayEarly = date2;
\t\t\tlastDayEarly = date1 ;
\t\t}
\t\tvar first = firstDayEarly.split(\"-\");
\t\tvar firstYear = convertToInt(first[0]);
\t\tvar firstMonth = convertToInt(first[1]);
\t\tvar firstDay = convertToInt(first[2]);

\t\tvar last = lastDayEarly.split(\"-\");
\t\tvar LastYear = convertToInt(last[0]);
\t\tvar LastMonth = convertToInt(last[1]);
\t\tvar LastDay = convertToInt(last[2]);
\t\t// Calculation of the number of days since the beginning of year of the first date
\t\tfor (i = 1; i < firstMonth; i++)
\t\t{
\t\t\tnbDays1 += parseInt(numberOfdaysInMonth(i, firstYear));
\t\t}
\t\tnbDays1 += parseInt(firstDay);
\t\t// Calculation of the number of days since the beginning of the second date
\t\tfor (i = firstYear; i < LastYear; i++)
\t\t{
\t\t\tnbDays2 += parseInt(numberOfDaysInYear(i)) ;
\t\t}
\t\tfor (i = 1; i < LastMonth; i++)
\t\t{
\t\t\tnbDays2 += parseInt(numberOfdaysInMonth(i, LastYear));
\t\t}
\t\tnbDays2 += parseInt(LastDay);
\t\treturn (nbDays2 - nbDays1) + 1 ;
\t}

\tfunction convertToInt(chaine)
\t{
\t\tvar k = 0;
\t\tif (chaine == \"\" || chaine == 0) return 0;
\t\twhile (chaine.substring(k, k+1) == \"0\")
\t\t{
\t\t\tchaine = chaine.substring(1, chaine.length);
\t\t\tk++;
\t\t}
\t\treturn parseInt(chaine);
\t}

\tfunction numberOfdaysInMonth ( month , year ) {
\t\tvar nbDays = new Array('31','28','31','30','31','30','31','31','30','31','30','31') ;
\t\tif ( year % 4 == 0 ) nbDays[1] = '29' ;
\t\treturn convertToInt(nbDays[month - 1]) ;
\t}

\tfunction numberOfDaysInYear (year)
\t{
\t\tvar total = 0;
\t\tfor (j=1; j<=12; j++)
\t\t{
\t\t\ttotal += numberOfdaysInMonth(j, year);
\t\t}
\t\treturn total;
\t}

\tfunction isRequestLessThan16Monthts() {
\t\t
\t\tif(formatToEnglish(\$('#choice1_start').val()) > dateMax) {
\t\t\talert(\"Choice 1 : Leaves periods can be requested no longer than 16 months in advance. You cannot do a leave request after the \" + formatToFrance(dateMax) + \". Please change your wish date or wait the required time to do this request.\");
\t\t\treturn false;
\t\t}
\t\tif(formatToEnglish(\$('#choice2_start').val()) > dateMax) {
\t\t\talert(\"Choice 2 : Leaves periods can be requested no longer than 16 months in advance. You cannot do a leave request after the \" + formatToFrance(dateMax) + \". Please change your wish date or wait the required time to do this request.\");
\t\t\treturn false;
\t\t}
\t\tif(formatToEnglish(\$('#choice3_start').val()) > dateMax) {
\t\t\talert(\"Choice 3 : Leaves periods can be requested no longer than 16 months in advance. You cannot do a leave request after the \" + formatToFrance(dateMax) + \". Please change your wish date or wait the required time to do this request.\");
\t\t\treturn false;
\t\t}
\t\treturn true;
\t}

\tfunction fromSubmit()
\t{
\t\t
\t\tvar leave_preference = \$('#choice1_leave_preference').find(\":selected\").val();

\t\tif ( leave_preference === false || leave_preference === \"\" ) {
\t\t\talert(\"please select a choice from the leave preference !\");
\t\t\treturn false;
\t\t}

\t\t//Requests cannot be made more than 16 months in advance
\t\tif (!isRequestLessThan16Monthts()) return false;

\t\tvar choice1Start = formatToEnglish(\$('#choice1_start').val());
\t\tvar choice1End   = formatToEnglish(\$('#choice1_end').val());
\t\tvar choice2Start = formatToEnglish(\$('#choice2_start').val());
\t\tvar choice2End   = formatToEnglish(\$('#choice2_end').val());
\t\tvar choice3Start = formatToEnglish(\$('#choice3_start').val());
\t\tvar choice3End   = formatToEnglish(\$('#choice3_end').val());

\t\tvar choice1StartVal = \$('#choice1_start').val();
\t\tvar choice1EndVal   = \$('#choice1_end').val();
\t\tvar choice2StartVal = \$('#choice2_start').val();
\t\tvar choice2EndVal   = \$('#choice2_end').val();
\t\tvar choice3StartVal = \$('#choice3_start').val();
\t\tvar choice3EndVal   = \$('#choice3_end').val();

\t\tif (choice1End < choice1Start) 
\t\t{
\t\t\talert (\"Choice 1 : Invalid date(s) please try again.\") ; 
\t\t\treturn false;
\t\t}
\t\tif (choice2End < choice2Start) {
\t\t\talert (\"Choice 2 : Invalid date(s) please try again.\") ; 
\t\t\treturn false;
\t\t}
\t\tif (choice3End < choice3Start) {
\t\t\talert (\"Choice 3 : Invalid date(s) please try again.\") ; 
\t\t\treturn false;
\t\t}
\t\t
\t\tif (choice1Start < dateMin) {
\t\t\talert(\"Choice 1 : Invalid date(s) please try again. You must choose above \" + formatToFrance(dateMin)) ; 
\t\t\treturn false;
\t\t}
\t\tif (choice2Start < dateMin) {
\t\t\talert(\"Choice 2 : Invalid date(s) please try again. You must choose above \" + formatToFrance(dateMin)) ; 
\t\t\treturn false;
\t\t}
\t\tif (choice3Start < dateMin) {
\t\t\talert(\"Choice 3 : Invalid date(s) please try again. You must choose above \" + formatToFrance(dateMin)) ; 
\t\t\treturn false;
\t\t}
\t\t
\t
\t\t// First date slice
\t\tvar start = choice1Start;
\t\tvar end   = choice1End; 
\t\tvar bool_must_second_choice = false;

\t\tif (start == false || end == false) return emptyField();
\t\t
\t\tvar tmp_start = \"\";
\t\tvar tmp_end = \"\";
\t\tif (summerOrWinter(start) || summerOrWinter(end))
\t\t{
\t\t\t
\t\t\ttmp_start = start;
\t\t\ttmp_end = end;
\t\t\tif (summer(tmp_start) || summer(tmp_end))
\t\t\t{
\t\t\t\t\t\tif (tmp_start < year(tmp_start) + \"-07-01\") tmp_start = year(tmp_start) + \"-07-01\";
\t\t\t\t\t\tif (tmp_end > year(tmp_end) + \"-08-31\") tmp_end = year(tmp_end) + \"-08-31\";
\t\t\t\t\t\tif (gapInDays(tmp_start, tmp_end) > holidaysMaxDays) {
\t\t\t\t\t\t\tif(field1ToValid()) return periodTooLong();
\t\t\t\t\t\t}
\t\t\t}
\t\t\tif (winter(tmp_start) || winter(tmp_end))
\t\t\t{
\t\t\t\tif (tmp_start < year(tmp_start) + \"-12-15\" && tmp_start > year(tmp_start) + \"-08-15\") tmp_start = year(tmp_start) + \"-12-15\";
\t\t\t\tif (tmp_end > year(tmp_end) + \"-01-15\" && tmp_end < year(tmp_end) + \"-05-15\" ) tmp_end = year(tmp_end) + \"-01-15\";
\t\t\t}

\t\t\tbool_must_second_choice = true;
\t\t\t
\t\t}
\t\t

\t\tif(!isPilot && isNewYearPlusChristmass(choice1StartVal, choice1EndVal)) return newYearAndChristmassError();
\t\t
\t\t
\t\t// Second date slice

\t\tstart = choice2Start;
\t\tend   = choice2End;
\t\tif (bool_must_second_choice == true && (start == false || end == false))
\t\t{
\t\t\talert (\"You must have more than one choice for the winter/summer period\");
\t\t\treturn false;
\t\t}
\t\tif ((start != false && end == false) || (start == false && end != false)) return emptyField();

\t\tvar tmp_start = \"\";
\t\tvar tmp_end = \"\";

\t\tif (summerOrWinter(start) || summerOrWinter(end))
\t\t{
\t\t\ttmp_start = start;
\t\t\ttmp_end = end;\t\t
\t\t\tif (summer(tmp_start) || summer(tmp_end))
\t\t\t{
\t\t\t\t\t\tif (tmp_start < year(tmp_start) + \"-07-01\") tmp_start = year(tmp_start) + \"-07-01\";
\t\t\t\t\t\tif (tmp_end > year(tmp_end) + \"-08-31\") tmp_end = year(tmp_end) + \"-08-31\";
\t\t\t\t\t\t
\t\t\t\t\t\tif (gapInDays(tmp_start, tmp_end) > holidaysMaxDays) {
\t\t\t\t\t\t\tif(field2ToValid()) return periodTooLong(); 
\t\t\t\t\t\t}
\t\t\t}
\t\t\tif (winter(tmp_start) || winter(tmp_end))
\t\t\t{
\t\t\t\t\t\tif (tmp_start < year(tmp_start) + \"-12-15\" && tmp_start > year(tmp_start) + \"-08-15\") tmp_start = year(tmp_start) + \"-12-15\";
\t\t\t\t\t\tif (tmp_end > year(tmp_end) + \"-01-15\" && tmp_end < year(tmp_end) + \"-05-15\" ) tmp_end = year(tmp_end) + \"-01-15\";
\t\t\t}

\t\t\t
\t\t}
\t\tif(!isPilot && isNewYearPlusChristmass(choice2StartVal, choice2EndVal)) return newYearAndChristmassError();
\t\t
\t\t
\t\t// Third date slice

\t\tstart =  choice3Start;
\t\tend   =  choice3End;
\t\t
\t\tif ((start != false && end == false) || (start == false && end != false)) return emptyField();

\t\tvar tmp_start = \"\";
\t\tvar tmp_end = \"\";
\t\tif (summerOrWinter(start) || summerOrWinter(end))
\t\t{
\t\t\ttmp_start = start;
\t\t\ttmp_end = end;
\t\t\tif (summer(tmp_start) || summer(tmp_end))
\t\t\t{
\t\t\t\t\t\tif (tmp_start < year(tmp_start) + \"-07-01\") tmp_start = year(tmp_start) + \"-07-01\";
\t\t\t\t\t\tif (tmp_end > year(tmp_end) + \"-08-31\") tmp_end = year(tmp_end) + \"-08-31\";
\t\t\t\t\t\tif (gapInDays(tmp_start, tmp_end) > holidaysMaxDays) {
\t\t\t\t\t\t\tif(field3ToValid()) return periodTooLong();
\t\t\t\t\t\t}
\t\t\t}
\t\t\tif (winter(tmp_start) || winter(tmp_end))
\t\t\t{
\t\t\t\t\t\tif (tmp_start < year(tmp_start) + \"-12-15\" && tmp_start > year(tmp_start) + \"-08-15\") tmp_start = year(tmp_start) + \"-12-15\";
\t\t\t\t\t\tif (tmp_end > year(tmp_end) + \"-01-15\" && tmp_end < year(tmp_end) + \"-05-15\" ) tmp_end = year(tmp_end) + \"-01-15\";
\t\t\t}

\t\t\t
\t\t}
\t\t
\t\tif(!isPilot && isNewYearPlusChristmass(choice3StartVal, choice1EndVal)) return newYearAndChristmassError();
\t\t
\t\t

\t\t// There must not be 2x the same entry period
\t\tif ((choice1StartVal == choice2StartVal && choice1EndVal == choice2EndVal && choice1StartVal != \"00/00/0000\" && choice1StartVal != \"\" && choice2EndVal != \"00/00/0000\" && choice2EndVal != \"\") ||
\t\t\t(choice1StartVal == choice3StartVal && choice1EndVal == choice3EndVal && choice1StartVal != \"00/00/0000\" && choice1StartVal != \"\" && choice3EndVal != \"00/00/0000\" && choice3EndVal != \"\") ||
\t\t\t(choice2StartVal == choice3StartVal && choice2EndVal == choice3EndVal && choice2StartVal != \"00/00/0000\" && choice2StartVal != \"\" && choice3EndVal != \"00/00/0000\" && choice3EndVal != \"\") )
\t\t{
\t\t\talert (\"You cannot select many times the same period!\");
\t\t\treturn false;
\t\t}
        var ajaxResult = false;
\t\tvar params  = {'choice1_start': choice1Start, 'choice1_end': choice1End, 'choice1_leave_preference':leave_preference, 'user_id': \$('#wish-user-id').val() }
\t\t// Checking if user has already applied leaves for the same period
\t\t\t\$.ajax({  
\t\t\t\turl      :   \"{{ url('eleave_choice_preference_check') }}\",  
\t\t\t\ttype     :    'POST',   
\t\t\t\tdataType :  'json',  
\t\t\t\tasync    :      false ,  
\t\t\t\tdata     : params,
\t\t\t\tsuccess: function(data) {  
\t\t\t\t\tif(data > 0) {
\t\t\t\t\t\talert(\"You are trying to submit a request for a leave period which is already in the database. Please try again using a different leave period!\");
\t\t\t\t\t\treturn false;
\t\t\t\t\t} else {
\t\t\t\t\t\tif(isAdmin){
\t\t\t\t\t\t\treturn true;
\t\t\t\t\t\t}
\t\t\t\t\t    ajaxResult = confirm(\"You are about to send your request, do you want to proceed ?\");
\t\t\t\t\t}
\t\t\t\t},  
\t\t\t\terror : function(xhr, textStatus, errorThrown) {  
\t\t\t\t\talert('Ajax request failed.'); 
\t\t\t\t\treturn false; 
\t\t\t\t}     
\t\t\t});

\t\t\tif(isAdmin) {
\t\t\t    return true;
\t\t\t}  
\t\t\tif (ajaxResult == true) {
\t\t\t\treturn true;
\t\t\t} else {
\t\t\t\treturn false; 
\t\t\t}
\t\t
\t}


\tfunction isNewYearPlusChristmass(date1, date2)
\t{
\t\t// date1 and date 2 are in jj/mm/YYYY format ...
\t\tdate1 = formatToEnglish(date1); 
\t\tdate2 = formatToEnglish(date2);
\t\tvar tmp = today.split(\"-\");
\t\tvar year = parseInt(tmp[0]);
\t\tif(date1 <= year + \"-12-25\" && date2 >= (year + 1) + \"-01-01\") return true;
\t\treturn false;

\t}

\tfunction formatToEnglish(date)
\t{
\t\t
\t\tif (date == \"\" || date == \"undefined\") return false;
\t\tvar tab = date.split(\"/\");
\t\treturn tab[2] + \"-\" + tab[1] + \"-\" + tab[0];
\t}

\tfunction formatToFrance(date)
\t{
\t\tif (date == \"\" || date == \"undefined\") return false;
\t\tvar tab = date.split(\"-\");
\t\treturn tab[2] + \"-\" + tab[1] + \"-\" + tab[0];
\t}

\tfunction year(date)
\t{
\t\tvar tab = date.split(\"-\");
\t\treturn tab[0];
\t}

\tfunction summerOrWinter(date)
\t{
\t\tif (!date) return false;
\t\tif (date >= year(date) + \"-07-01\" && date <= year(date) + \"-08-31\") return true;
\t\tif (date >= year(date) + \"-12-15\" || date <= year(date) + \"-01-15\") return true;

\t\treturn false;
\t}

\tfunction summer(date)
\t{
\t\tif (!date) return false;
\t\tif (date >= year(date) + \"-07-01\" && date <= year(date) + \"-08-31\") return true;
\t\treturn false;
\t}

\tfunction winter(date)
\t{
\t\tif (!date) return false;
\t\tif (date >= year(date) + \"-12-15\" || date <= year(date) + \"-01-15\") return true;
\t\treturn false;
\t}

\tfunction emptyField ()
\t{
\t\talert (\"Thanks to complete the threads\");
\t\treturn false;
\t}

\tfunction periodTooLong()
\t{
\t\talert (\"You cannot take more than \" + holidaysMaxDays + \" days for summer period\");
\t\treturn false;
\t}

\tfunction must_second_choice()
\t{
\t\talert (\"You must have more than one choice for the winter/summer period\");
\t\treturn false;
\t}

\tfunction newYearAndChristmassError()
\t{
\t\talert (\"You cannot choose both periods of Christmas and New Year\");
\t\treturn false;
\t}



\tfunction choiceSelect(id) {
\t\tif(document.getElementById(id).checked == true) {
\t\t\tswitch(id) {
\t\t\t\tcase 'choice1' :
\t\t\t\t\tdocument.getElementById('choice2').checked = false;
\t\t\t\t\tdocument.getElementById('choice3').checked = false;
\t\t\t\t\tbreak;
\t\t\t\tcase 'choice2' :
\t\t\t\t\tdocument.getElementById('choice1').checked = false;
\t\t\t\t\tdocument.getElementById('choice3').checked = false;
\t\t\t\t\tbreak;
\t\t\t\tcase 'choice3' :
\t\t\t\t\tdocument.getElementById('choice1').checked = false;
\t\t\t\t\tdocument.getElementById('choice2').checked = false;
\t\t\t\t\tbreak;
\t\t\t}
\t\t}
\t\t
\t}

\tfunction field1ToValid() {
\t\tif(!isAdmin) {
\t\t\treturn true;
\t\t}
\t\telse {
\t\t\tif(document.getElementById('choice1').checked) return true;
\t\t}
\t}

\tfunction field2ToValid() {
\t\tif(!isAdmin) {
\t\t\treturn true;
\t\t}
\t\telse {
\t\t\tif(document.getElementById('choice2').checked) return true;
\t\t}
    }

\tfunction field3ToValid() {
\t\tif(!isAdmin) {
\t\t\treturn true;
\t\t}
\t\telse {
\t\t\tif(document.getElementById('choice3').checked) return true;
\t\t}
\t}

</script>

{% endblock specificJs %}

{% block container %}

<div id=\"content\">
    <div id=\"content-header\">
       <h1 id=\"titre_help\">{{ user }}</h1>
    </div>
    <div class=\"row\">
\t\t<div class=\"col-xs-12\">
\t\t\t\t{{ macros.wizz() }}
\t\t</div>
    </div>
\t\t\t

    <form {% if isEdit == false %} onSubmit=\"return fromSubmit();\" {% endif %} name=\"form1\"  id =\"form1\" method=\"post\" action=\"{{ formData.id ? url('eleave_wishes_edit',{'id' : formData.id}) : url('eleave_wishes_add')}}\" class=\"form-horizontal\">
\t\t<input name=\"id\" type=\"hidden\" id=\"id\" value=\"{{formData.id}}\">
\t\t<input name=\"wish_user\" type=\"hidden\" id=\"wish-user-id\" value=\"{{ wishUser }}\">
\t\t
        <div class=\"row\">
            <div class=\"col-xs-12\">
\t\t\t\t<div class=\"widget-box\">
\t\t\t\t\t<div class=\"widget-title\">
\t\t\t\t\t\t\t<h5>Select your leave preference</h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-content nopadding\">
\t\t\t\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">Leave preference :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t        <select name=\"choice1_leave_preference\" id=\"choice1_leave_preference\" >
\t\t\t\t\t\t\t\t\t   {% for key, value in preferenceList %}
                                            <option {{ key in selectedLeavePreference ? ' selected=\"selected\" ' : \"\" }} value=\"{{ key }}\">{{ value }}</option>
                                       {% endfor %}
                                    </select>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>    
     \t            </div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
\t\t        <div class=\"widget-box\">
\t\t\t\t\t<div class=\"widget-title {{ formData.color1 }}\">
\t\t\t\t\t\t<h5 >Priority choice <span style=\"position:absolute;right: 60px;\" class=\"float_right\"><input {{ formData.checked1 }} {{ formData.disable1 }}  type=\"{{ formData.checkbox }}\" id=\"choice1\" onchange=\"javascript:choiceSelect('choice1')\" name=\"choice1_accepted\" value=\"{{ formData.choice1Accepted }}\" /> {{ formData.textCheckbox1 }}</span></h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-content nopadding\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">First Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type='text' id=\"choice1_start\" class=\"form-control date-picker\" placeholder=\"dd/mm/yyyy\" name=\"choice1_start\" value='{{formData.choice1Start}}'  data-enable-datepicker=\"true\" />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>  

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">Last Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type='text' id=\"choice1_end\" data-enable-datepicker=\"true\" class=\"form-control date-picker\" placeholder=\"dd/mm/yyyy\" name=\"choice1_end\" value='{{ formData.choice1End }}'  />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>    
        
\t\t            </div>

                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
\t\t        <div class=\"widget-box\">
\t\t\t\t\t<div class=\"widget-title {{ formData.color2 }}\">
\t\t\t\t\t\t<h5>Second choice <span style=\"position:absolute;right: 60px;\" class=\"float_right\"><input {{ formData.checked2 }} {{ formData.disable2 }}  type = \"{{ formData.checkbox }}\" id = \"choice2\" onchange = \"javascript:choiceSelect('choice2')\" name = \"choice2_accepted\" value=\"{{ formData.choice2Accepted }}\" /> {{ formData.textCheckbox2 }}</span></h5>
\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-content nopadding\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">First Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<input type=\"text\" id=\"choice2_start\" placeholder=\"dd/mm/yyyy\" data-enable-datepicker=\"true\" class=\"form-control date-picker\" name=\"choice2_start\" value='{{ formData.choice2Start }}' />
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>  

\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">Last Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"choice2_end\" placeholder=\"dd/mm/yyyy\" data-enable-datepicker=\"true\" class=\"form-control date-picker\" name=\"choice2_end\" value=\"{{ formData.choice2End }}\" />
\t\t\t\t\t\t    </div>
\t\t\t\t\t\t</div>    
        
\t\t            </div>

                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
\t\t        <div class=\"widget-box\">
\t\t\t\t\t<div class=\"widget-title {{ formData.color3 }}\">
\t\t\t\t\t\t<h5>Third choice <span style=\"position:absolute;right: 60px;\" class=\"float_right\"><input {{ formData.checked3 }} {{ formData.disable3 }}  type=\"{{ formData.checkbox }}\" id=\"choice3\" onchange=\"javascript:choiceSelect('choice3')\" name=\"choice3_accepted\" value=\"{{ formData.choice3Accepted }}\" /> {{ formData.textCheckbox3 }}</span></h5>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"widget-content nopadding\">
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">First Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"choice3_start\" placeholder=\"dd/mm/yyyy\" data-enable-datepicker=\"true\" class=\"form-control date-picker\" name=\"choice3_start\" value='{{ formData.choice3Start }}'  />
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>  
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">Last Non Working Day :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t<input type=\"text\" id=\"choice3_end\" placeholder=\"dd/mm/yyyy\"  data-enable-datepicker=\"true\" class=\"form-control date-picker\" name=\"choice3_end\" value=\"{{ formData.choice3End }}\" />
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
\t\t\t\t\t    {% if isEdit and isAdmin %}
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Refused reason :</label>    
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t\t<select name=\"motif_refus\" id=\"motif_refus\" >
\t\t\t\t\t\t\t\t\t\t<option  value=\"\">-- select --</option>
\t\t\t\t\t\t\t\t\t\t{% for key, value in refus %}
\t\t\t\t\t\t\t\t\t\t\t\t<option {{ value.id == selectedRefus ? ' selected=\"selected\" ' : \"\" }} value=\"{{ value.id }}\">{{ value.label }}</option>
\t\t\t\t\t\t\t\t\t\t{% endfor %}
\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Total leave days due :</label>    
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<input type=\"text\"  class=\"form-control\" name=\"total_leave_day_due\" value='{{ wishData.totalLeaveDayDue }}'  />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Total Leave days booked and confirmed :</label>    
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<input type=\"text\"  class=\"form-control\" name=\"total_leave_day_confirmed\" value='{{ wishData.totalLeaveDayConfirmed }}'  />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Total Leave days taken this Year :</label>    
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<input type=\"text\"  class=\"form-control\" name=\"total_leave_day_taken\" value='{{ wishData.totalLeaveDayTaken }}'  />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>  
\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t<label class=\"control-label\">Remaining Leave not taken or confirmed :</label>    
\t\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t\t\t<input type=\"text\"  class=\"form-control\" name=\"remaining_leave\" value='{{ wishData.remainingLeave }}'  />
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div> 
\t\t\t\t\t\t{% endif %}\t\t
\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t<label class=\"control-label\">Comment :</label>    
\t\t\t\t\t\t\t<div class=\"controls\">
\t\t\t\t\t\t\t<textarea name=\"comment_user\" class=\"form-control\" cols=\"50\" rows=\"6\">{{ wishData.commentUser }}</textarea>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div> 
\t\t\t\t\t\t{% if isSubmit %}
\t\t\t\t\t\t <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-primary\" name=\"btn-to-display\"><i class=\"icon-submit\"></i> submit</button>
                        </div>   
\t\t\t\t        {% endif %}\t\t
\t\t            </div>
                </div>
            </div>
        </div>
   </form>

</div>


{% endblock container %}", "@EasyjetEleave/Wishes/add.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EleaveBundle\\Resources\\views\\Wishes\\add.html.twig");
    }
}
