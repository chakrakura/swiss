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

/* @EasyjetFdtr/Fdtr/externalDuty.html.twig */
class __TwigTemplate_6c9840677ba6d904e0111de83565ed9b8ec19d9564b63fbfdbc7bd2959daec9b extends Template
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
        return "@EasyjetFdtr/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetFdtr/Fdtr/externalDuty.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetFdtr/Fdtr/externalDuty.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetFdtr/Fdtr/externalDuty.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetFdtr/Base/structure.html.twig", "@EasyjetFdtr/Fdtr/externalDuty.html.twig", 1);
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

        echo "Update notifications configuration";
        
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

<script type=\"text/javascript\">
    \$(document).ready(function(){
        var  validateData = '';
        \$(\".add-row\").click(function(){
            var markup = '<tr><td><input type=\"checkbox\" name=\"record\"></td><td><input type=\"text\" name=\"concernedDate[]\" class=\"form-control concernedDate\" id=\"concernedDate\" placeholder=\"DD-MM-YYYY\" required></td><td><input type=\"text\" name=\"startTime[]\" pattern=\"^(0[0-9]|1[0-9]|2[0-3]|[0-9]):[0-5][0-9]\$\" placeholder=\"hh:mm\" class=\"form-control\" required></td><td><input type=\"text\" name=\"endTime[]\" pattern=\"^(0[0-9]|1[0-9]|2[0-3]|[0-9]):[0-5][0-9]\$\" placeholder=\"hh:mm\" class=\"form-control\" required></td></tr>';
        \$(\"table tbody\").append(markup);
        });
        
        // Find and remove selected table rows
        \$(\".delete-row\").click(function(){
            \$(\"table tbody\").find('input[name=\"record\"]').each(function(){
                if(\$(this).is(\":checked\")){
                    \$(this).parents(\"tr\").remove();
                }
            });
            calculateTotalHours();
        });
        
        
        
        \$(\"#validateButton\").click(function(){
          validateData =1 ;
        });
        
        \$(\"#draftButton\").click(function(){
          validateData ='' ;
        });

        \$('form').submit(function () {
            
            var startTime = \$(\"input[name='startTime[]']\").map(function(){return \$(this).val();}).get();
            var endTime = \$(\"input[name='endTime[]']\").map(function(){return \$(this).val();}).get();
            
            for(i=0;i<startTime.length;i++){
                var timeStartObj = new Date();
                var timeEndObj = new Date();
                var valueStart = startTime[i].split(':');
                var valueEnd = endTime[i].split(':');


                timeStartObj.setHours(valueStart[0], valueStart[1], 0);
                timeEndObj.setHours(valueEnd[0], valueEnd[1], 0);

                var diff = timeEndObj - timeStartObj;  
                if(diff<=0){
                    alert(\"End time can't be less than or equal to Start time!\");
                    return false;
                }
           
            }
            
            var totalHours = \$(\"#external_duty_form_durationMinutesFormatted\").val();
            var splitHours = totalHours.split(':'); // split it at the colons
            var seconds = (+splitHours[0]) * 60 * 60 + (+splitHours[1]) * 60;
            var comment = \$(\"#external_duty_form_comment\").val();
            if(seconds > 0){
                var oldFile = \$(\"#file-target\").val();
                var newFile = \$(\"#external_duty_form_tmpFile\").val();
                var reason = \$(\"#external_duty_form_reason\").val();               
                if(newFile == \"\"){
                    if(oldFile == \"\" && validateData === 1){
                        validateData=''; 
                        alert('The file is mandatory if you report a duty time greater than 0');
                        return false;    
                    }
                }
                if(reason == 1){
                    alert('Reason can not be Nothing if you report a duty time greater than 0');
                    return false;
                }
            }
            else{
                alert('Invalid Total hours !');
                return false;
            }
           
            if (validateData === 1) {
                
                    if(comment === ''){
                        alert(\"Please enter comment !\");
                        return false;
                    }
                    validateData='';   
                    if (!confirm(\"You are about to validate your monthly external duty hours. Please notice that you will not be able to change them once validated. Do you confirm that you are OK with these values ?\")) { 
                        return false;
                    }
            }
                      
        });
    });
    
    \$('body').on('focus',\".concernedDate\", function(){
        \$(this).datepicker({
            format: 'dd-mm-yyyy',
            startDate: '";
        // line 102
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["monthlyReport"]) || array_key_exists("monthlyReport", $context) ? $context["monthlyReport"] : (function () { throw new RuntimeError('Variable "monthlyReport" does not exist.', 102, $this->source); })()), "concernedMonth", [], "any", false, false, false, 102), "d-m-Y"), "html", null, true);
        echo "',
            endDate: '";
        // line 103
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["monthlyReport"]) || array_key_exists("monthlyReport", $context) ? $context["monthlyReport"] : (function () { throw new RuntimeError('Variable "monthlyReport" does not exist.', 103, $this->source); })()), "concernedMonth", [], "any", false, false, false, 103), "t-m-Y"), "html", null, true);
        echo "',
        });
    });

    function calculateTotalHours(){
        var startTime = \$(\"input[name='startTime[]']\").map(function(){return \$(this).val();}).get();
        var endTime = \$(\"input[name='endTime[]']\").map(function(){return \$(this).val();}).get();
        var diff = 0;
        for(i=0;i<startTime.length;i++) {
            if(startTime[i]) {
                var timeStartObj = new Date();
                var timeEndObj = new Date();
                var valueStart = startTime[i].split(':');
                var valueEnd = endTime[i].split(':');
                

                timeStartObj.setHours(valueStart[0]);
                timeStartObj.setMinutes(valueStart[1]);
                timeEndObj.setHours(valueEnd[0]);
                timeEndObj.setMinutes(valueEnd[1]);

                var diff = +diff+(timeEndObj - timeStartObj);  
            }
        }
        
        minutes = Math.floor(parseInt((diff / (1000 * 60)) % 60));
        hours = Math.floor(parseInt((diff / (1000 * 60 * 60))));

        hours = (hours < 10) ? \"0\" + hours : hours;
        minutes = (minutes < 10) ? \"0\" + minutes : minutes;

        var totalTime = hours + \":\" + minutes;
        \$(\"#external_duty_form_durationMinutesFormatted\").val(totalTime);
    }
    \$('body').on('focusout',\"input[name='endTime[]']\", function(){
        calculateTotalHours();
    });
    \$('body').on('focusout',\"input[name='startTime[]']\", function(){
        calculateTotalHours();
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 146
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 147
        echo "        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">External duty report</h1>         
        <div id=\"description_help\">Here, you can report the amount of external duty hours for the month <strong>'";
        // line 151
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["monthlyReport"]) || array_key_exists("monthlyReport", $context) ? $context["monthlyReport"] : (function () { throw new RuntimeError('Variable "monthlyReport" does not exist.', 151, $this->source); })()), "concernedMonth", [], "any", false, false, false, 151), "M Y"), "html", null, true);
        echo "'</strong></div>
    </div>
    
    ";
        // line 154
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"], "id" => "dutyForm"]);
        echo "
    <div class=\"form-error\">
        ";
        // line 156
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 156, $this->source); })()), 'errors');
        echo "
    </div>
        
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 161
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 161, $context, $this->getSourceContext());
        echo "
        </div>
        
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Please validate your external duty details</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 174
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "reason", [], "any", false, false, false, 174), 'label');
        echo " :</label>
                        <div class=\"controls\">
                            ";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "reason", [], "any", false, false, false, 176), 'widget');
        echo "
                        </div>
                    </div> 
                    <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 180
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 180, $this->source); })()), "tmpFile", [], "any", false, false, false, 180), 'label');
        echo " :</label>
                        <div class=\"controls\">
                            ";
        // line 182
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), "tmpFile", [], "any", false, false, false, 182), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div class=\"form-error\">
                                ";
        // line 184
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 184, $this->source); })()), "tmpFile", [], "any", false, false, false, 184), 'errors');
        echo "
                            </div>
                        </div>
                    </div> 
                    
                    ";
        // line 189
        if (twig_get_attribute($this->env, $this->source, (isset($context["externalDutyTime"]) || array_key_exists("externalDutyTime", $context) ? $context["externalDutyTime"] : (function () { throw new RuntimeError('Variable "externalDutyTime" does not exist.', 189, $this->source); })()), "fileTarget", [], "any", false, false, false, 189)) {
            echo "                        
                        <div class=\"form-group\">
                            <label class=\"control-label\">&nbsp;</label>
                            <div class=\"controls\">
                                <a href=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fdtr_dtime_download_attachment", ["monthlyReport" => twig_get_attribute($this->env, $this->source, (isset($context["monthlyReport"]) || array_key_exists("monthlyReport", $context) ? $context["monthlyReport"] : (function () { throw new RuntimeError('Variable "monthlyReport" does not exist.', 193, $this->source); })()), "id", [], "any", false, false, false, 193)]), "html", null, true);
            echo "\">Download attached document</a>
                            </div>
                        </div>
                    ";
        }
        // line 197
        echo "                    <input type=\"hidden\" name=\"\" id=\"file-target\" value=\"";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["externalDutyTime"]) || array_key_exists("externalDutyTime", $context) ? $context["externalDutyTime"] : (function () { throw new RuntimeError('Variable "externalDutyTime" does not exist.', 197, $this->source); })()), "fileTarget", [], "any", false, false, false, 197), "html", null, true);
        echo "\"/>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Number of hours<br>(24-hour clock)</label>
                        <div class=\"controls\">
                            <table>
                                <thead>
                                <th></th>
                                    <th>Date</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                </thead>
                                <tbody>
                                    ";
        // line 209
        if ( !twig_test_empty((isset($context["externalDtimeBreakup"]) || array_key_exists("externalDtimeBreakup", $context) ? $context["externalDtimeBreakup"] : (function () { throw new RuntimeError('Variable "externalDtimeBreakup" does not exist.', 209, $this->source); })()))) {
            // line 210
            echo "                                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["externalDtimeBreakup"]) || array_key_exists("externalDtimeBreakup", $context) ? $context["externalDtimeBreakup"] : (function () { throw new RuntimeError('Variable "externalDtimeBreakup" does not exist.', 210, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["breakup"]) {
                // line 211
                echo "                                            <tr>
                                                <td><input type=\"checkbox\" name=\"record\"></td>
                                                <td><input type=\"text\" name=\"concernedDate[]\" class=\"form-control concernedDate\" id=\"concernedDate\" placeholder=\"DD-MM-YYYY\" value=\"";
                // line 213
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["breakup"], "getConcernedDate", [], "method", false, false, false, 213), "format", [0 => "d-m-Y"], "method", false, false, false, 213), "html", null, true);
                echo "\"></td>
                                                <td><input type=\"text\" name=\"startTime[]\" pattern=\"^(0[0-9]|1[0-9]|2[0-3]|[0-9]):[0-5][0-9]\$\" placeholder=\"hh:mm\" class=\"form-control\" value=\"";
                // line 214
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["breakup"], "getStartTime", [], "method", false, false, false, 214), "format", [0 => "H:i"], "method", false, false, false, 214), "html", null, true);
                echo "\"></td>
                                                <td><input type=\"text\" name=\"endTime[]\" pattern=\"^(0[0-9]|1[0-9]|2[0-3]|[0-9]):[0-5][0-9]\$\" placeholder=\"hh:mm\" class=\"form-control\" value=\"";
                // line 215
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["breakup"], "getEndTime", [], "method", false, false, false, 215), "format", [0 => "H:i"], "method", false, false, false, 215), "html", null, true);
                echo "\"></td>
                                            </tr>
                                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breakup'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 218
            echo "                                    ";
        } else {
            // line 219
            echo "                                        <tr>
                                            <td></td>
                                            <td><input type=\"text\" name=\"concernedDate[]\" class=\"form-control concernedDate\" id=\"concernedDate\" placeholder=\"DD-MM-YYYY\" required></td>
                                            <td><input type=\"text\" name=\"startTime[]\" pattern=\"^(0[0-9]|1[0-9]|2[0-3]|[0-9]):[0-5][0-9]\$\" placeholder=\"hh:mm\" class=\"form-control\" required></td>
                                            <td><input type=\"text\" name=\"endTime[]\"  pattern=\"^(0[0-9]|1[0-9]|2[0-3]|[0-9]):[0-5][0-9]\$\" placeholder=\"hh:mm\" class=\"form-control\" required></td>
                                        </tr>
                                    ";
        }
        // line 226
        echo "                                </tbody>
                            </table>
                            <a href=\"#\" class=\"add-row\">Add More</a>&nbsp;l&nbsp;
                            <a href=\"#\" class=\"delete-row\">Remove Row</a> 
                            <!-- l&nbsp;<a href=\"#\" class=\"total-hours\">Calculate Total Hours</a> -->
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 235
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 235, $this->source); })()), "durationMinutesFormatted", [], "any", false, false, false, 235), 'label');
        echo " :</label>
                        <div class=\"controls\">
                            ";
        // line 237
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 237, $this->source); })()), "durationMinutesFormatted", [], "any", false, false, false, 237), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            <div class=\"form-error\">
                                ";
        // line 239
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 239, $this->source); })()), "durationMinutesFormatted", [], "any", false, false, false, 239), 'errors');
        echo "
                            </div>
                        </div>
                    </div> 

                    <div class=\"form-group\">
                        <label class=\"control-label\">";
        // line 245
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 245, $this->source); })()), "comment", [], "any", false, false, false, 245), 'label');
        echo " :</label>
                        <div class=\"controls\">
                            ";
        // line 247
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 247, $this->source); })()), "comment", [], "any", false, false, false, 247), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                        </div>
                    </div> 
                    <div class=\"form-actions\">
                        ";
        // line 251
        if (twig_get_attribute($this->env, $this->source, (isset($context["monthlyReport"]) || array_key_exists("monthlyReport", $context) ? $context["monthlyReport"] : (function () { throw new RuntimeError('Variable "monthlyReport" does not exist.', 251, $this->source); })()), "externalDuty", [], "any", false, false, false, 251)) {
            // line 252
            echo "                            ";
            $context["status"] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["monthlyReport"]) || array_key_exists("monthlyReport", $context) ? $context["monthlyReport"] : (function () { throw new RuntimeError('Variable "monthlyReport" does not exist.', 252, $this->source); })()), "externalDuty", [], "any", false, false, false, 252), "status", [], "any", false, false, false, 252);
            // line 253
            echo "                        ";
        } else {
            // line 254
            echo "                            ";
            $context["status"] = "";
            // line 255
            echo "                        ";
        }
        // line 256
        echo "                        
                        ";
        // line 257
        if ((( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FDTR_ADMIN") && (0 !== twig_compare((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 257, $this->source); })()), ""))) && (0 !== twig_compare((isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 257, $this->source); })()), "pending")))) {
            // line 258
            echo "                            <button type=\"submit\" disabled=\"disabled\" class=\"btn btn-primary\">Locked</button>
                        ";
        } elseif ((0 === twig_compare(        // line 259
(isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 259, $this->source); })()), "validated"))) {
            // line 260
            echo "                            <button type=\"submit\" disabled=\"disabled\" class=\"btn btn-primary\">Locked</button>
                        ";
        } else {
            // line 262
            echo "                            <input type=\"submit\" class=\"btn btn-primary\" name=\"save\" id=\"draftButton\"value=\"Save as Draft\"/>
                            <input type=\"submit\" class=\"btn btn-success\" name=\"validate\" id =\"validateButton\"  value=\"Validate\"/>
                        ";
        }
        // line 265
        echo "                        
                    </div>
                    
                </div>
            </div>
        </div>           
    </div>

    ";
        // line 273
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 273, $this->source); })()), 'form_end');
        echo "
</div>
   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetFdtr/Fdtr/externalDuty.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  482 => 273,  472 => 265,  467 => 262,  463 => 260,  461 => 259,  458 => 258,  456 => 257,  453 => 256,  450 => 255,  447 => 254,  444 => 253,  441 => 252,  439 => 251,  432 => 247,  427 => 245,  418 => 239,  413 => 237,  408 => 235,  397 => 226,  388 => 219,  385 => 218,  376 => 215,  372 => 214,  368 => 213,  364 => 211,  359 => 210,  357 => 209,  341 => 197,  334 => 193,  327 => 189,  319 => 184,  314 => 182,  309 => 180,  302 => 176,  297 => 174,  281 => 161,  273 => 156,  268 => 154,  262 => 151,  256 => 147,  246 => 146,  194 => 103,  190 => 102,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@EasyjetFdtr/Base/structure.html.twig\" %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Update notifications configuration{% endblock %}

{% block specificJs %}{{ parent() }}

<script type=\"text/javascript\">
    \$(document).ready(function(){
        var  validateData = '';
        \$(\".add-row\").click(function(){
            var markup = '<tr><td><input type=\"checkbox\" name=\"record\"></td><td><input type=\"text\" name=\"concernedDate[]\" class=\"form-control concernedDate\" id=\"concernedDate\" placeholder=\"DD-MM-YYYY\" required></td><td><input type=\"text\" name=\"startTime[]\" pattern=\"^(0[0-9]|1[0-9]|2[0-3]|[0-9]):[0-5][0-9]\$\" placeholder=\"hh:mm\" class=\"form-control\" required></td><td><input type=\"text\" name=\"endTime[]\" pattern=\"^(0[0-9]|1[0-9]|2[0-3]|[0-9]):[0-5][0-9]\$\" placeholder=\"hh:mm\" class=\"form-control\" required></td></tr>';
        \$(\"table tbody\").append(markup);
        });
        
        // Find and remove selected table rows
        \$(\".delete-row\").click(function(){
            \$(\"table tbody\").find('input[name=\"record\"]').each(function(){
                if(\$(this).is(\":checked\")){
                    \$(this).parents(\"tr\").remove();
                }
            });
            calculateTotalHours();
        });
        
        
        
        \$(\"#validateButton\").click(function(){
          validateData =1 ;
        });
        
        \$(\"#draftButton\").click(function(){
          validateData ='' ;
        });

        \$('form').submit(function () {
            
            var startTime = \$(\"input[name='startTime[]']\").map(function(){return \$(this).val();}).get();
            var endTime = \$(\"input[name='endTime[]']\").map(function(){return \$(this).val();}).get();
            
            for(i=0;i<startTime.length;i++){
                var timeStartObj = new Date();
                var timeEndObj = new Date();
                var valueStart = startTime[i].split(':');
                var valueEnd = endTime[i].split(':');


                timeStartObj.setHours(valueStart[0], valueStart[1], 0);
                timeEndObj.setHours(valueEnd[0], valueEnd[1], 0);

                var diff = timeEndObj - timeStartObj;  
                if(diff<=0){
                    alert(\"End time can't be less than or equal to Start time!\");
                    return false;
                }
           
            }
            
            var totalHours = \$(\"#external_duty_form_durationMinutesFormatted\").val();
            var splitHours = totalHours.split(':'); // split it at the colons
            var seconds = (+splitHours[0]) * 60 * 60 + (+splitHours[1]) * 60;
            var comment = \$(\"#external_duty_form_comment\").val();
            if(seconds > 0){
                var oldFile = \$(\"#file-target\").val();
                var newFile = \$(\"#external_duty_form_tmpFile\").val();
                var reason = \$(\"#external_duty_form_reason\").val();               
                if(newFile == \"\"){
                    if(oldFile == \"\" && validateData === 1){
                        validateData=''; 
                        alert('The file is mandatory if you report a duty time greater than 0');
                        return false;    
                    }
                }
                if(reason == 1){
                    alert('Reason can not be Nothing if you report a duty time greater than 0');
                    return false;
                }
            }
            else{
                alert('Invalid Total hours !');
                return false;
            }
           
            if (validateData === 1) {
                
                    if(comment === ''){
                        alert(\"Please enter comment !\");
                        return false;
                    }
                    validateData='';   
                    if (!confirm(\"You are about to validate your monthly external duty hours. Please notice that you will not be able to change them once validated. Do you confirm that you are OK with these values ?\")) { 
                        return false;
                    }
            }
                      
        });
    });
    
    \$('body').on('focus',\".concernedDate\", function(){
        \$(this).datepicker({
            format: 'dd-mm-yyyy',
            startDate: '{{ monthlyReport.concernedMonth|date(\"d-m-Y\")}}',
            endDate: '{{ monthlyReport.concernedMonth|date(\"t-m-Y\")}}',
        });
    });

    function calculateTotalHours(){
        var startTime = \$(\"input[name='startTime[]']\").map(function(){return \$(this).val();}).get();
        var endTime = \$(\"input[name='endTime[]']\").map(function(){return \$(this).val();}).get();
        var diff = 0;
        for(i=0;i<startTime.length;i++) {
            if(startTime[i]) {
                var timeStartObj = new Date();
                var timeEndObj = new Date();
                var valueStart = startTime[i].split(':');
                var valueEnd = endTime[i].split(':');
                

                timeStartObj.setHours(valueStart[0]);
                timeStartObj.setMinutes(valueStart[1]);
                timeEndObj.setHours(valueEnd[0]);
                timeEndObj.setMinutes(valueEnd[1]);

                var diff = +diff+(timeEndObj - timeStartObj);  
            }
        }
        
        minutes = Math.floor(parseInt((diff / (1000 * 60)) % 60));
        hours = Math.floor(parseInt((diff / (1000 * 60 * 60))));

        hours = (hours < 10) ? \"0\" + hours : hours;
        minutes = (minutes < 10) ? \"0\" + minutes : minutes;

        var totalTime = hours + \":\" + minutes;
        \$(\"#external_duty_form_durationMinutesFormatted\").val(totalTime);
    }
    \$('body').on('focusout',\"input[name='endTime[]']\", function(){
        calculateTotalHours();
    });
    \$('body').on('focusout',\"input[name='startTime[]']\", function(){
        calculateTotalHours();
    });
</script>
{% endblock specificJs %}

{% block container %}
        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">External duty report</h1>         
        <div id=\"description_help\">Here, you can report the amount of external duty hours for the month <strong>'{{ monthlyReport.concernedMonth|date(\"M Y\")}}'</strong></div>
    </div>
    
    {{ form_start(form, {'attr': {'class': 'form-horizontal'}, 'id' : 'dutyForm'} ) }}
    <div class=\"form-error\">
        {{ form_errors(form) }}
    </div>
        
    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ macros.wizz() }}
        </div>
        
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Please validate your external duty details</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <div class=\"form-group\">
                        <label class=\"control-label\">{{ form_label(form.reason) }} :</label>
                        <div class=\"controls\">
                            {{ form_widget(form.reason) }}
                        </div>
                    </div> 
                    <div class=\"form-group\">
                        <label class=\"control-label\">{{ form_label(form.tmpFile) }} :</label>
                        <div class=\"controls\">
                            {{ form_widget(form.tmpFile, { 'attr': {'class': 'form-control'} }) }}
                            <div class=\"form-error\">
                                {{ form_errors(form.tmpFile) }}
                            </div>
                        </div>
                    </div> 
                    
                    {% if externalDutyTime.fileTarget %}                        
                        <div class=\"form-group\">
                            <label class=\"control-label\">&nbsp;</label>
                            <div class=\"controls\">
                                <a href=\"{{ url('fdtr_dtime_download_attachment', {monthlyReport: monthlyReport.id }) }}\">Download attached document</a>
                            </div>
                        </div>
                    {% endif %}
                    <input type=\"hidden\" name=\"\" id=\"file-target\" value=\"{{ externalDutyTime.fileTarget }}\"/>
                    <div class=\"form-group\">
                        <label class=\"control-label\">Number of hours<br>(24-hour clock)</label>
                        <div class=\"controls\">
                            <table>
                                <thead>
                                <th></th>
                                    <th>Date</th>
                                    <th>Start Time</th>
                                    <th>End Time</th>
                                </thead>
                                <tbody>
                                    {% if externalDtimeBreakup is not empty %}
                                        {% for breakup in externalDtimeBreakup %}
                                            <tr>
                                                <td><input type=\"checkbox\" name=\"record\"></td>
                                                <td><input type=\"text\" name=\"concernedDate[]\" class=\"form-control concernedDate\" id=\"concernedDate\" placeholder=\"DD-MM-YYYY\" value=\"{{ breakup.getConcernedDate().format('d-m-Y') }}\"></td>
                                                <td><input type=\"text\" name=\"startTime[]\" pattern=\"^(0[0-9]|1[0-9]|2[0-3]|[0-9]):[0-5][0-9]\$\" placeholder=\"hh:mm\" class=\"form-control\" value=\"{{ breakup.getStartTime().format('H:i') }}\"></td>
                                                <td><input type=\"text\" name=\"endTime[]\" pattern=\"^(0[0-9]|1[0-9]|2[0-3]|[0-9]):[0-5][0-9]\$\" placeholder=\"hh:mm\" class=\"form-control\" value=\"{{ breakup.getEndTime().format('H:i') }}\"></td>
                                            </tr>
                                        {% endfor %}
                                    {% else %}
                                        <tr>
                                            <td></td>
                                            <td><input type=\"text\" name=\"concernedDate[]\" class=\"form-control concernedDate\" id=\"concernedDate\" placeholder=\"DD-MM-YYYY\" required></td>
                                            <td><input type=\"text\" name=\"startTime[]\" pattern=\"^(0[0-9]|1[0-9]|2[0-3]|[0-9]):[0-5][0-9]\$\" placeholder=\"hh:mm\" class=\"form-control\" required></td>
                                            <td><input type=\"text\" name=\"endTime[]\"  pattern=\"^(0[0-9]|1[0-9]|2[0-3]|[0-9]):[0-5][0-9]\$\" placeholder=\"hh:mm\" class=\"form-control\" required></td>
                                        </tr>
                                    {% endif %}
                                </tbody>
                            </table>
                            <a href=\"#\" class=\"add-row\">Add More</a>&nbsp;l&nbsp;
                            <a href=\"#\" class=\"delete-row\">Remove Row</a> 
                            <!-- l&nbsp;<a href=\"#\" class=\"total-hours\">Calculate Total Hours</a> -->
                        </div>
                    </div>

                    <div class=\"form-group\">
                        <label class=\"control-label\">{{ form_label(form.durationMinutesFormatted) }} :</label>
                        <div class=\"controls\">
                            {{ form_widget(form.durationMinutesFormatted, { 'attr': {'class': 'form-control'} }) }}
                            <div class=\"form-error\">
                                {{ form_errors(form.durationMinutesFormatted) }}
                            </div>
                        </div>
                    </div> 

                    <div class=\"form-group\">
                        <label class=\"control-label\">{{ form_label(form.comment) }} :</label>
                        <div class=\"controls\">
                            {{ form_widget(form.comment, { 'attr': {'class': 'form-control'} }) }}
                        </div>
                    </div> 
                    <div class=\"form-actions\">
                        {% if monthlyReport.externalDuty %}
                            {% set status = monthlyReport.externalDuty.status %}
                        {% else %}
                            {% set status = \"\" %}
                        {% endif %}
                        
                        {% if not is_granted(\"ROLE_FDTR_ADMIN\") and status != \"\" and status != \"pending\" %}
                            <button type=\"submit\" disabled=\"disabled\" class=\"btn btn-primary\">Locked</button>
                        {% elseif status == \"validated\" %}
                            <button type=\"submit\" disabled=\"disabled\" class=\"btn btn-primary\">Locked</button>
                        {% else %}
                            <input type=\"submit\" class=\"btn btn-primary\" name=\"save\" id=\"draftButton\"value=\"Save as Draft\"/>
                            <input type=\"submit\" class=\"btn btn-success\" name=\"validate\" id =\"validateButton\"  value=\"Validate\"/>
                        {% endif %}
                        
                    </div>
                    
                </div>
            </div>
        </div>           
    </div>

    {{ form_end(form) }}
</div>
   
{% endblock container %}", "@EasyjetFdtr/Fdtr/externalDuty.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\FdtrBundle\\Resources\\views\\Fdtr\\externalDuty.html.twig");
    }
}
