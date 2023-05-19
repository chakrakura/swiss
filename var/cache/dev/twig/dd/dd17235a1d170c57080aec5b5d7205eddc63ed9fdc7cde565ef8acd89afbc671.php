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

/* @EasyjetEleave/ResourcesGroupWishes/index.html.twig */
class __TwigTemplate_19d6e9daf7326a0f23b27584838f30e76cbcc7c82207ad2e86a810204a6f8763 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/ResourcesGroupWishes/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/ResourcesGroupWishes/index.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetEleave/ResourcesGroupWishes/index.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetEleave/Base/structure.html.twig", "@EasyjetEleave/ResourcesGroupWishes/index.html.twig", 1);
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

        echo "Resource Group Leaves";
        
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

   

    \$(function() {
        swissinside.menuSelected(\"menu-ec-wishes\");
    });

    \$(function() {
        var contracts = [];
        \$(\"#types_eftr option:selected\").each(function() {
            contracts.push(\$(this).val());
        });
        
        var eleaveAjaxParams = [];

        eleaveAjaxParams.push({name : \"id_station\", value: \$(\"#id_station\").val() });
        eleaveAjaxParams.push({name : \"state\", value: \$(\"#state\").val() });
        eleaveAjaxParams.push({name : \"from\", value: \$(\"#date-from\").val() });
        eleaveAjaxParams.push({name : \"to\", value: \$(\"#date-to\").val() });
        eleaveAjaxParams.push({name : \"contracts\", value: contracts });
            
        
        swissinside.simpleDataTable(\$(\"#call-types-list\"), {
            \"bProcessing\": true,
            \"bServerSide\": true,
            \"sAjaxSource\": \"";
        // line 34
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ressources_group_wishes_search");
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
        // line 56
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_resource_group_wishes_edit", ["id" => ":id"]);
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
                    case 0 : state = '<span class=\"badge badge-info\">Waiting RG approbation</span>'; break;
                    case 1 : state = '<span class=\"badge badge-warning\">Waiting rostering team approbation</span>'; break;
                    case 2 : state = '<span class=\"badge badge-success\">Request accepted</span>'; break;
                    case 3 : state = '<span class=\"badge badge-danger\">Request refused</span>'; break;
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

    // line 123
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 124
        echo "    \t
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Offices eleave requests</h1>  
        <div id=\"description_help\">Please enter your leave wish. Just click the \"Add a leave request\" button on the top of table.</div>
    </div>
    
    <div class=\"row\">
        <div class=\"col-xs-12\">
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
        // line 149
        echo (((0 === twig_compare((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 149, $this->source); })()), "all"))) ? (" selected=\"selected\" ") : (""));
        echo ">-- All --</option>
                                        <option value=\"0\" ";
        // line 150
        echo ((( !(null === (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 150, $this->source); })())) && (0 === twig_compare((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 150, $this->source); })()), "0")))) ? (" selected=\"selected\" ") : (""));
        echo ">Waiting RG approbation (Blue)</option>
                                        <option value=\"1\" ";
        // line 151
        echo (((0 === twig_compare((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 151, $this->source); })()), "1"))) ? (" selected=\"selected\" ") : (""));
        echo ">Waiting rostering team approbation (Orange)</option>
                                        <option value=\"2\" ";
        // line 152
        echo (((0 === twig_compare((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 152, $this->source); })()), "2"))) ? (" selected=\"selected\" ") : (""));
        echo ">Request accepted (Green)</option>
                                        <option value=\"3\" ";
        // line 153
        echo (((0 === twig_compare((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 153, $this->source); })()), "3"))) ? (" selected=\"selected\" ") : (""));
        echo ">Request refused (Red)</option>
                                    </select>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"control-label\">From</label>                
                                <div class=\"controls\">
                                    <input class=\"form-control input-sm date-input\" name=\"from\" type=\"text\" id=\"date-from\" value=\"";
        // line 161
        echo twig_escape_filter($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 161, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"dd/mm/yyyy\" data-enable-datepicker=\"true\">
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"control-label\">To</label>                
                                <div class=\"controls\">
                                    <input class=\"form-control input-sm date-input\" name=\"to\" type=\"text\" id=\"date-to\" value=\"";
        // line 168
        echo twig_escape_filter($this->env, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 168, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"dd/mm/yyyy\" data-enable-datepicker=\"true\">
                                </div>
                            </div>
                        
                            ";
        // line 172
        if ((isset($context["adminAccess"]) || array_key_exists("adminAccess", $context) ? $context["adminAccess"] : (function () { throw new RuntimeError('Variable "adminAccess" does not exist.', 172, $this->source); })())) {
            // line 173
            echo "                                <div class=\"form-group\">
                                    <label class=\"control-label\">Base</label>                
                                    <div class=\"controls\">
                                        <select name=\"id_station\" id=\"id_station\">
                                            <option value=\"\"></option>
                                            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stationsList"]) || array_key_exists("stationsList", $context) ? $context["stationsList"] : (function () { throw new RuntimeError('Variable "stationsList" does not exist.', 178, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["base"]) {
                // line 179
                echo "                                                <option ";
                echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["base"], "idStation", [], "any", false, false, false, 179), (isset($context["currentBase"]) || array_key_exists("currentBase", $context) ? $context["currentBase"] : (function () { throw new RuntimeError('Variable "currentBase" does not exist.', 179, $this->source); })())))) ? (" selected=\"selected\" ") : (""));
                echo "  value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["base"], "idStation", [], "any", false, false, false, 179), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["base"], "iataCode", [], "any", false, false, false, 179), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['base'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "                                        </select>
                                    </div>
                                </div>

                            ";
        }
        // line 186
        echo "

                        <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon-search\"></i> Search</button>
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
            ";
        // line 203
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 203, $context, $this->getSourceContext());
        echo "
        </div>
        
        ";
        // line 206
        if ( !$this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ELEAVE_CREW")) {
            // line 207
            echo "        <div class=\"col-xs-12\">
            <a href=\"";
            // line 208
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_resource_group_wishes_add");
            echo "\" class=\"btn btn-primary\"><i class=\"icon-add\"></i> Add a leave request</a>
        </div>
        ";
        }
        // line 211
        echo "        
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
        return "@EasyjetEleave/ResourcesGroupWishes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 211,  364 => 208,  361 => 207,  359 => 206,  353 => 203,  334 => 186,  327 => 181,  314 => 179,  310 => 178,  303 => 173,  301 => 172,  294 => 168,  284 => 161,  273 => 153,  269 => 152,  265 => 151,  261 => 150,  257 => 149,  230 => 124,  220 => 123,  146 => 56,  121 => 34,  82 => 7,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetEleave/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Resource Group Leaves{% endblock %}


{% block specificJs %}{{ parent() }}
<script>

   

    \$(function() {
        swissinside.menuSelected(\"menu-ec-wishes\");
    });

    \$(function() {
        var contracts = [];
        \$(\"#types_eftr option:selected\").each(function() {
            contracts.push(\$(this).val());
        });
        
        var eleaveAjaxParams = [];

        eleaveAjaxParams.push({name : \"id_station\", value: \$(\"#id_station\").val() });
        eleaveAjaxParams.push({name : \"state\", value: \$(\"#state\").val() });
        eleaveAjaxParams.push({name : \"from\", value: \$(\"#date-from\").val() });
        eleaveAjaxParams.push({name : \"to\", value: \$(\"#date-to\").val() });
        eleaveAjaxParams.push({name : \"contracts\", value: contracts });
            
        
        swissinside.simpleDataTable(\$(\"#call-types-list\"), {
            \"bProcessing\": true,
            \"bServerSide\": true,
            \"sAjaxSource\": \"{{ url('ressources_group_wishes_search') }}\",
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
                var editUrl =  \"{{ url('eleave_resource_group_wishes_edit', {'id' : ':id'} )}} \";
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
                    case 0 : state = '<span class=\"badge badge-info\">Waiting RG approbation</span>'; break;
                    case 1 : state = '<span class=\"badge badge-warning\">Waiting rostering team approbation</span>'; break;
                    case 2 : state = '<span class=\"badge badge-success\">Request accepted</span>'; break;
                    case 3 : state = '<span class=\"badge badge-danger\">Request refused</span>'; break;
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
    \t
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Offices eleave requests</h1>  
        <div id=\"description_help\">Please enter your leave wish. Just click the \"Add a leave request\" button on the top of table.</div>
    </div>
    
    <div class=\"row\">
        <div class=\"col-xs-12\">
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
                                        <option value=\"all\"{{ state == \"all\" ? ' selected=\"selected\" ' : \"\" }}>-- All --</option>
                                        <option value=\"0\" {{ state is not null and state == \"0\" ? ' selected=\"selected\" ' : \"\" }}>Waiting RG approbation (Blue)</option>
                                        <option value=\"1\" {{ state == \"1\" ? ' selected=\"selected\" ' : \"\" }}>Waiting rostering team approbation (Orange)</option>
                                        <option value=\"2\" {{ state == \"2\" ? ' selected=\"selected\" ' : \"\" }}>Request accepted (Green)</option>
                                        <option value=\"3\" {{ state == \"3\" ? ' selected=\"selected\" ' : \"\" }}>Request refused (Red)</option>
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

                            {% endif %}


                        <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon-search\"></i> Search</button>
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
        
        {% if not is_granted(\"ROLE_ELEAVE_CREW\") %}
        <div class=\"col-xs-12\">
            <a href=\"{{ url('eleave_resource_group_wishes_add') }}\" class=\"btn btn-primary\"><i class=\"icon-add\"></i> Add a leave request</a>
        </div>
        {% endif %}
        
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
            
{% endblock container %}", "@EasyjetEleave/ResourcesGroupWishes/index.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EleaveBundle\\Resources\\views\\ResourcesGroupWishes\\index.html.twig");
    }
}
