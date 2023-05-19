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

/* @EasyjetEleave/Wishes/index.html.twig */
class __TwigTemplate_c57752c13ef9da574bff731afcb0741ff1d302cc69855f74be713588a3efdf4a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/Wishes/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/Wishes/index.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetEleave/Wishes/index.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetEleave/Base/structure.html.twig", "@EasyjetEleave/Wishes/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Eleave List";
        
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

    \$(document).on(\"click\", \".deleteEmailId\", function () {
        var id = \$(this).data('email-id');
        \$('#email-id').val(id);
    });
    \$(function() {
        swissinside.menuSelected(\"menu-office-wish-cabins\");
    });
    \$(function() {
        var contracts = [];
        \$(\"#types_eftr option:selected\").each(function() {
            contracts.push(\$(this).val());
        });

        var leavePreference = [];
        \$(\"#choice1_leave_preference option:selected\").each(function() {
            leavePreference.push(\$(this).val());
        });
        
        var eleaveAjaxParams = [];
        eleaveAjaxParams.push({name : \"id_station\", value: \$(\"#id_station\").val() });
        eleaveAjaxParams.push({name : \"state\", value: \$(\"#state\").val() });
        eleaveAjaxParams.push({name : \"choice1_leave_preference\", value: leavePreference });
        eleaveAjaxParams.push({name : \"from\", value: \$(\"#date-from\").val() });
        eleaveAjaxParams.push({name : \"to\", value: \$(\"#date-to\").val() });
        eleaveAjaxParams.push({name : \"eleaveUser\", value: \$(\"#eleaveUser\").val() });
        eleaveAjaxParams.push({name : \"contracts\", value: contracts });
        
        swissinside.simpleDataTable(\$(\"#call-types-list\"), {
            \"bProcessing\": true,
            \"bServerSide\": true,
            \"sAjaxSource\": \"";
        // line 40
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_wishes_search");
        echo "\",
            \"fnServerParams\": function ( aoData ) {
                for(var index in eleaveAjaxParams) {
                    aoData.push(eleaveAjaxParams[index]);
                }
            },
            \"aoColumns\" : [
                null, // User
                null, // Contract
                null, // Request date
                {\"bSortable\": false}, // Comment
                {\"bSortable\": false}, // Accepted period
                null, // State
                null, // Type
                {\"bSortable\": false}, // Action
                {\"bSortable\": false, \"bVisible\": false} , // deletable
                {\"bSortable\": false, \"bVisible\": false} , // selectedFrom
                {\"bSortable\": false, \"bVisible\": false}  // selectedTo
            ],
            \"aaSorting\" : [[2, \"asc\"]],
             \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                // Generate buttons
                var editUrl =  \"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_wishes_edit", ["id" => ":id"]);
        echo " \";
                editUrl = editUrl.replace(\":id\", aData[7]); 
                var editLink = '<a class=\"btn btn-default\" href='+editUrl+'><i class=\"icon-edit\"></i> Edit</a> ';
                var deleteLink = aData[8] ? '<a class=\"btn btn-danger deleteEmailId\"  data-email-id=\"'+aData[7]+'\" data-toggle=\"modal\"  data-target=\"#deleteEmailModal\" ><i class=\"icon-remove\"></i> Delete</a>' : \"\";
                \$(\"td:eq(7)\", nRow).html(
                    editLink +
                    deleteLink
                );
        
                if(aData[5] == 3) {
                    \$(\"td:eq(4)\", nRow).html(\"-\");
                }
                else {
                    \$(\"td:eq(4)\", nRow).html(
                        (aData[5] == 0 ? \"<b>Primary choice</b><br>\" : \"\") + aData[9] + \"<br>\" + aData[10]
                    );
                }
                
               lastIndexEndBracket = aData[0].lastIndexOf(\")\");               
               lastIndexStartBracket = aData[0].lastIndexOf(\"(\");               
               workRatio = aData[0].substr(parseInt(lastIndexStartBracket)+1,parseInt(lastIndexEndBracket)-parseInt(lastIndexStartBracket)-1);               
               empInfo = aData[0].substr(0,parseInt(lastIndexStartBracket)-1);              
               
                var user = \"\";
                if(typeof workRatio !== 'undefined' && workRatio !== null && workRatio !== '') {
                    if(workRatio < 100){    
                        user = empInfo + '<span style=\"color: orange;\"> (' + workRatio + '%)</span>'
                    }                  
                    else if (workRatio == 100) {           
                        user = empInfo + ' (' + workRatio + '%)'      
                    }
                }
                else
                {
                    user = empInfo
                }
                              
                \$(\"td:eq(0)\", nRow).html(
                   user
                );
                    
                var state = \"\";
                switch(aData[5]) {
                    case 0 : state = '<span class=\"badge badge-info\">Request in progress</span>'; break;
                    case 1 : state = '<span class=\"badge badge-danger\">Request refused</span>'; break;
                    case 2 : state = '<span class=\"badge badge-success\">Request validated</span>'; break;
                }
                \$(\"td:eq(5)\", nRow).html(
                   state
                );
        
                var \$th = \$(this).find(\"tr:first th\");
                \$(\"td\", nRow).each(function(id, field) {
                    if(\$th.eq(id).hasClass(\"hidden-xs\")) \$(this).addClass('hidden-xs');
                });
                
            }
        });        
    });  
    
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 125
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 126
        echo "
<!-- Modal -->
    <div id=\"deleteEmailModal\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Confirm</h4>
                </div>
                <form action=\"";
        // line 136
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_wishes_delete");
        echo "\" method=\"PUT\">
                    <input type=\"hidden\" name=\"id\" id=\"email-id\">
                    <div class=\"modal-body\">
                        <p>Do you really want to delete this record?</p>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">No</button>
                        <button type=\"submit\" class=\"btn btn-success\">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- End Modal -->  

    \t
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Cabins / Pilots eleave requests</h1>  
        <div id=\"description_help\">Please enter your leave wish. Just click the \"Add a leave request\" button on the top of table.</div>
    </div>
    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 160
        if ( !twig_get_attribute($this->env, $this->source, (isset($context["myself"]) || array_key_exists("myself", $context) ? $context["myself"] : (function () { throw new RuntimeError('Variable "myself" does not exist.', 160, $this->source); })()), "isOffice", [], "any", false, false, false, 160)) {
            // line 161
            echo "                <div class=\"alert alert-info\">You have ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["myself"]) || array_key_exists("myself", $context) ? $context["myself"] : (function () { throw new RuntimeError('Variable "myself" does not exist.', 161, $this->source); })()), "remainingDays", [], "any", false, false, false, 161), "html", null, true);
            echo " days remaining</div>
            ";
        }
        // line 163
        echo "         
            <!-- BEGIN SEARCH_ENGINE -->
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-search\"></i>
                    </span>
                    <h5>Search</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <form class=\"form-horizontal\" action=\"\" method=\"get\">
                        
                            <div class=\"form-group\">
                                <label class=\"control-label\">State</label>                
                                <div class=\"controls\">
                                    <select name=\"state\" id=\"state\">
                                        <option value=\"all\"";
        // line 179
        echo ((((0 === twig_compare((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 179, $this->source); })()), "all")) || (0 === twig_compare((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 179, $this->source); })()), "")))) ? (" selected=\"selected\" ") : (""));
        echo ">-- All --</option>
                                        <option value=\"0\" ";
        // line 180
        echo ((( !(null === (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 180, $this->source); })())) && (0 === twig_compare((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 180, $this->source); })()), "0")))) ? (" selected=\"selected\" ") : (""));
        echo ">Blue</option>
                                        <option value=\"1\" ";
        // line 181
        echo (((0 === twig_compare((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 181, $this->source); })()), "1"))) ? (" selected=\"selected\" ") : (""));
        echo ">Red</option>
                                        <option value=\"2\" ";
        // line 182
        echo (((0 === twig_compare((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 182, $this->source); })()), "2"))) ? (" selected=\"selected\" ") : (""));
        echo ">Green</option>
                                    </select>
                                </div>
                            </div>
                                    
                            <div class=\"form-group\">
                                <label class=\"control-label\">Leave Preference </label>                
                                <div class=\"controls\">
                                    <select name=\"choice1_leave_preference[]\" id=\"choice1_leave_preference\" multiple=\"multiple\">
                                       ";
        // line 191
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["preferenceList"]) || array_key_exists("preferenceList", $context) ? $context["preferenceList"] : (function () { throw new RuntimeError('Variable "preferenceList" does not exist.', 191, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 192
            echo "                                            <option ";
            echo ((twig_in_filter($context["key"], (isset($context["selectedLeavePreference"]) || array_key_exists("selectedLeavePreference", $context) ? $context["selectedLeavePreference"] : (function () { throw new RuntimeError('Variable "selectedLeavePreference" does not exist.', 192, $this->source); })()))) ? (" selected=\"selected\" ") : (""));
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
        // line 194
        echo "                                     </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\">From</label>                
                                <div class=\"controls\">
                                    <input class=\"form-control input-sm date-input\" name=\"from\" type=\"text\" id=\"date-from\" value=\"";
        // line 200
        echo twig_escape_filter($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 200, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"dd/mm/yyyy\" data-enable-datepicker=\"true\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\">To</label>                
                                <div class=\"controls\">
                                    <input class=\"form-control input-sm date-input\" name=\"to\" type=\"text\" id=\"date-to\" value=\"";
        // line 206
        echo twig_escape_filter($this->env, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 206, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"dd/mm/yyyy\" data-enable-datepicker=\"true\">
                                </div>
                            </div>
                        
                            ";
        // line 210
        if ((isset($context["adminAccess"]) || array_key_exists("adminAccess", $context) ? $context["adminAccess"] : (function () { throw new RuntimeError('Variable "adminAccess" does not exist.', 210, $this->source); })())) {
            // line 211
            echo "                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"eleaveUser\">User</label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"eleaveUser\" name=\"eleaveUser\" value=\"";
            // line 214
            echo twig_escape_filter($this->env, (isset($context["eleaveUser"]) || array_key_exists("eleaveUser", $context) ? $context["eleaveUser"] : (function () { throw new RuntimeError('Variable "eleaveUser" does not exist.', 214, $this->source); })()), "html", null, true);
            echo "\" class=\"form-control\">
                                </div>
                            </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Base</label>                
                                    <div class=\"controls\">
                                        <select name=\"id_station\" id=\"id_station\">
                                            <option value=\"\"></option>
                                            ";
            // line 222
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stationsList"]) || array_key_exists("stationsList", $context) ? $context["stationsList"] : (function () { throw new RuntimeError('Variable "stationsList" does not exist.', 222, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["base"]) {
                // line 223
                echo "                                                <option ";
                echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["base"], "idStation", [], "any", false, false, false, 223), (isset($context["currentBase"]) || array_key_exists("currentBase", $context) ? $context["currentBase"] : (function () { throw new RuntimeError('Variable "currentBase" does not exist.', 223, $this->source); })())))) ? (" selected=\"selected\" ") : (""));
                echo "  value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["base"], "idStation", [], "any", false, false, false, 223), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["base"], "iataCode", [], "any", false, false, false, 223), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['base'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 225
            echo "                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Contract</label>                
                                    <div class=\"controls\">
                                        <select name=\"type_eftr[]\" id=\"types_eftr\" multiple=\"\">
                                            ";
            // line 232
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["typeEftrList"]) || array_key_exists("typeEftrList", $context) ? $context["typeEftrList"] : (function () { throw new RuntimeError('Variable "typeEftrList" does not exist.', 232, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["typeEftr"]) {
                // line 233
                echo "                                                <option ";
                echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["typeEftr"], "id", [], "any", false, false, false, 233), (isset($context["currentEftrType"]) || array_key_exists("currentEftrType", $context) ? $context["currentEftrType"] : (function () { throw new RuntimeError('Variable "currentEftrType" does not exist.', 233, $this->source); })()))) ? (" selected=\"selected\" ") : (""));
                echo "  value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typeEftr"], "id", [], "any", false, false, false, 233), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typeEftr"], "type", [], "any", false, false, false, 233), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeEftr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 235
            echo "                                        </select>
                                    </div>
                                </div>
                            ";
        }
        // line 239
        echo "                        <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-primary\" name=\"btn-to-display\"><i class=\"icon-search\"></i> Search</button>
                            ";
        // line 241
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_SIMPLE_USER")) {
            // line 242
            echo "                                <button type=\"submit\" class=\"btn btn-warning\" name=\"btn-to-csv\"><i class=\"icon-file\"></i> To csv</button>
                            ";
        }
        // line 244
        echo "                        </div>
                        <div id=\"submitted\"></div>
                    </form>
                </div>
            </div>
            <!-- END SEARCH_ENGINE -->
        </div>
    </div>
    
    
    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 257
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 257, $context, $this->getSourceContext());
        echo "
        </div>
        <div class=\"col-xs-12\">
            <a href=\"";
        // line 260
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_wishes_add");
        echo "\" class=\"btn btn-primary\"><i class=\"icon-add\"></i> Add a leave request</a>
        </div>
        
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>List of leaves</h5>
                    
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"call-types-list\">
                        <thead>
                            <tr>
                                    <th>User</th>
                                    <th>Contract</th>
                                    <th>Date of request</th>
                                    <th>Comment</th>
                                    <th>Accepted period</th>
                                    <th>State</th>
                                    <th>Type</th>
                                    <th style=\"width:20%;\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
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
        return "@EasyjetEleave/Wishes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  462 => 260,  456 => 257,  441 => 244,  437 => 242,  435 => 241,  431 => 239,  425 => 235,  412 => 233,  408 => 232,  399 => 225,  386 => 223,  382 => 222,  371 => 214,  366 => 211,  364 => 210,  357 => 206,  348 => 200,  340 => 194,  327 => 192,  323 => 191,  311 => 182,  307 => 181,  303 => 180,  299 => 179,  281 => 163,  275 => 161,  273 => 160,  246 => 136,  234 => 126,  224 => 125,  152 => 62,  127 => 40,  82 => 7,  63 => 5,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetEleave/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}


{% block title %}Eleave List{% endblock %}

{% block specificJs %}{{ parent() }}
<script>

    \$(document).on(\"click\", \".deleteEmailId\", function () {
        var id = \$(this).data('email-id');
        \$('#email-id').val(id);
    });
    \$(function() {
        swissinside.menuSelected(\"menu-office-wish-cabins\");
    });
    \$(function() {
        var contracts = [];
        \$(\"#types_eftr option:selected\").each(function() {
            contracts.push(\$(this).val());
        });

        var leavePreference = [];
        \$(\"#choice1_leave_preference option:selected\").each(function() {
            leavePreference.push(\$(this).val());
        });
        
        var eleaveAjaxParams = [];
        eleaveAjaxParams.push({name : \"id_station\", value: \$(\"#id_station\").val() });
        eleaveAjaxParams.push({name : \"state\", value: \$(\"#state\").val() });
        eleaveAjaxParams.push({name : \"choice1_leave_preference\", value: leavePreference });
        eleaveAjaxParams.push({name : \"from\", value: \$(\"#date-from\").val() });
        eleaveAjaxParams.push({name : \"to\", value: \$(\"#date-to\").val() });
        eleaveAjaxParams.push({name : \"eleaveUser\", value: \$(\"#eleaveUser\").val() });
        eleaveAjaxParams.push({name : \"contracts\", value: contracts });
        
        swissinside.simpleDataTable(\$(\"#call-types-list\"), {
            \"bProcessing\": true,
            \"bServerSide\": true,
            \"sAjaxSource\": \"{{ url('eleave_wishes_search') }}\",
            \"fnServerParams\": function ( aoData ) {
                for(var index in eleaveAjaxParams) {
                    aoData.push(eleaveAjaxParams[index]);
                }
            },
            \"aoColumns\" : [
                null, // User
                null, // Contract
                null, // Request date
                {\"bSortable\": false}, // Comment
                {\"bSortable\": false}, // Accepted period
                null, // State
                null, // Type
                {\"bSortable\": false}, // Action
                {\"bSortable\": false, \"bVisible\": false} , // deletable
                {\"bSortable\": false, \"bVisible\": false} , // selectedFrom
                {\"bSortable\": false, \"bVisible\": false}  // selectedTo
            ],
            \"aaSorting\" : [[2, \"asc\"]],
             \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                // Generate buttons
                var editUrl =  \"{{ url('eleave_wishes_edit', {'id' : ':id'} )}} \";
                editUrl = editUrl.replace(\":id\", aData[7]); 
                var editLink = '<a class=\"btn btn-default\" href='+editUrl+'><i class=\"icon-edit\"></i> Edit</a> ';
                var deleteLink = aData[8] ? '<a class=\"btn btn-danger deleteEmailId\"  data-email-id=\"'+aData[7]+'\" data-toggle=\"modal\"  data-target=\"#deleteEmailModal\" ><i class=\"icon-remove\"></i> Delete</a>' : \"\";
                \$(\"td:eq(7)\", nRow).html(
                    editLink +
                    deleteLink
                );
        
                if(aData[5] == 3) {
                    \$(\"td:eq(4)\", nRow).html(\"-\");
                }
                else {
                    \$(\"td:eq(4)\", nRow).html(
                        (aData[5] == 0 ? \"<b>Primary choice</b><br>\" : \"\") + aData[9] + \"<br>\" + aData[10]
                    );
                }
                
               lastIndexEndBracket = aData[0].lastIndexOf(\")\");               
               lastIndexStartBracket = aData[0].lastIndexOf(\"(\");               
               workRatio = aData[0].substr(parseInt(lastIndexStartBracket)+1,parseInt(lastIndexEndBracket)-parseInt(lastIndexStartBracket)-1);               
               empInfo = aData[0].substr(0,parseInt(lastIndexStartBracket)-1);              
               
                var user = \"\";
                if(typeof workRatio !== 'undefined' && workRatio !== null && workRatio !== '') {
                    if(workRatio < 100){    
                        user = empInfo + '<span style=\"color: orange;\"> (' + workRatio + '%)</span>'
                    }                  
                    else if (workRatio == 100) {           
                        user = empInfo + ' (' + workRatio + '%)'      
                    }
                }
                else
                {
                    user = empInfo
                }
                              
                \$(\"td:eq(0)\", nRow).html(
                   user
                );
                    
                var state = \"\";
                switch(aData[5]) {
                    case 0 : state = '<span class=\"badge badge-info\">Request in progress</span>'; break;
                    case 1 : state = '<span class=\"badge badge-danger\">Request refused</span>'; break;
                    case 2 : state = '<span class=\"badge badge-success\">Request validated</span>'; break;
                }
                \$(\"td:eq(5)\", nRow).html(
                   state
                );
        
                var \$th = \$(this).find(\"tr:first th\");
                \$(\"td\", nRow).each(function(id, field) {
                    if(\$th.eq(id).hasClass(\"hidden-xs\")) \$(this).addClass('hidden-xs');
                });
                
            }
        });        
    });  
    
</script>
{% endblock specificJs %}
        
{% block container %}

<!-- Modal -->
    <div id=\"deleteEmailModal\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Confirm</h4>
                </div>
                <form action=\"{{url('eleave_wishes_delete')}}\" method=\"PUT\">
                    <input type=\"hidden\" name=\"id\" id=\"email-id\">
                    <div class=\"modal-body\">
                        <p>Do you really want to delete this record?</p>
                    </div>
                    <div class=\"modal-footer\">
                        <button type=\"button\" class=\"btn btn-danger\" data-dismiss=\"modal\">No</button>
                        <button type=\"submit\" class=\"btn btn-success\">Yes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<!-- End Modal -->  

    \t
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Cabins / Pilots eleave requests</h1>  
        <div id=\"description_help\">Please enter your leave wish. Just click the \"Add a leave request\" button on the top of table.</div>
    </div>
    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            {% if not myself.isOffice %}
                <div class=\"alert alert-info\">You have {{ myself.remainingDays }} days remaining</div>
            {% endif %}
         
            <!-- BEGIN SEARCH_ENGINE -->
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-search\"></i>
                    </span>
                    <h5>Search</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <form class=\"form-horizontal\" action=\"\" method=\"get\">
                        
                            <div class=\"form-group\">
                                <label class=\"control-label\">State</label>                
                                <div class=\"controls\">
                                    <select name=\"state\" id=\"state\">
                                        <option value=\"all\"{{ state == \"all\" or state == \"\" ? ' selected=\"selected\" ' : \"\" }}>-- All --</option>
                                        <option value=\"0\" {{ state is not null and state == \"0\" ? ' selected=\"selected\" ' : \"\" }}>Blue</option>
                                        <option value=\"1\" {{ state == \"1\" ? ' selected=\"selected\" ' : \"\" }}>Red</option>
                                        <option value=\"2\" {{ state == \"2\" ? ' selected=\"selected\" ' : \"\" }}>Green</option>
                                    </select>
                                </div>
                            </div>
                                    
                            <div class=\"form-group\">
                                <label class=\"control-label\">Leave Preference </label>                
                                <div class=\"controls\">
                                    <select name=\"choice1_leave_preference[]\" id=\"choice1_leave_preference\" multiple=\"multiple\">
                                       {% for key, value in preferenceList %}
                                            <option {{ key in selectedLeavePreference ? ' selected=\"selected\" ' : \"\" }} value=\"{{ key }}\">{{ value }}</option>
                                       {% endfor %}
                                     </select>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\">From</label>                
                                <div class=\"controls\">
                                    <input class=\"form-control input-sm date-input\" name=\"from\" type=\"text\" id=\"date-from\" value=\"{{ from }}\" placeholder=\"dd/mm/yyyy\" data-enable-datepicker=\"true\">
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\">To</label>                
                                <div class=\"controls\">
                                    <input class=\"form-control input-sm date-input\" name=\"to\" type=\"text\" id=\"date-to\" value=\"{{ to }}\" placeholder=\"dd/mm/yyyy\" data-enable-datepicker=\"true\">
                                </div>
                            </div>
                        
                            {% if  adminAccess %}
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"eleaveUser\">User</label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"eleaveUser\" name=\"eleaveUser\" value=\"{{ eleaveUser }}\" class=\"form-control\">
                                </div>
                            </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Base</label>                
                                    <div class=\"controls\">
                                        <select name=\"id_station\" id=\"id_station\">
                                            <option value=\"\"></option>
                                            {% for base in stationsList %}
                                                <option {{ base.idStation == currentBase ? ' selected=\"selected\" ' : \"\" }}  value=\"{{ base.idStation }}\">{{ base.iataCode }}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Contract</label>                
                                    <div class=\"controls\">
                                        <select name=\"type_eftr[]\" id=\"types_eftr\" multiple=\"\">
                                            {% for typeEftr in typeEftrList %}
                                                <option {{ typeEftr.id in currentEftrType ? ' selected=\"selected\" ' : \"\" }}  value=\"{{ typeEftr.id }}\">{{ typeEftr.type }}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>
                            {% endif %}
                        <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-primary\" name=\"btn-to-display\"><i class=\"icon-search\"></i> Search</button>
                            {% if not is_granted('ROLE_ELEAVE_SIMPLE_USER') %}
                                <button type=\"submit\" class=\"btn btn-warning\" name=\"btn-to-csv\"><i class=\"icon-file\"></i> To csv</button>
                            {% endif %}
                        </div>
                        <div id=\"submitted\"></div>
                    </form>
                </div>
            </div>
            <!-- END SEARCH_ENGINE -->
        </div>
    </div>
    
    
    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ macros.wizz() }}
        </div>
        <div class=\"col-xs-12\">
            <a href=\"{{ url('eleave_wishes_add') }}\" class=\"btn btn-primary\"><i class=\"icon-add\"></i> Add a leave request</a>
        </div>
        
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>List of leaves</h5>
                    
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"call-types-list\">
                        <thead>
                            <tr>
                                    <th>User</th>
                                    <th>Contract</th>
                                    <th>Date of request</th>
                                    <th>Comment</th>
                                    <th>Accepted period</th>
                                    <th>State</th>
                                    <th>Type</th>
                                    <th style=\"width:20%;\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>        
    </div>
</div>
            
{% endblock container %}", "@EasyjetEleave/Wishes/index.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EleaveBundle\\Resources\\views\\Wishes\\index.html.twig");
    }
}
