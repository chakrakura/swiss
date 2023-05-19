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

/* @EasyjetEleave/OfficeWishes/index.html.twig */
class __TwigTemplate_946c5f302940defa5bf3c3f5b1bea3172303b6babe924b273b6e1213f3c8407f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/OfficeWishes/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/OfficeWishes/index.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetEleave/OfficeWishes/index.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetEleave/Base/structure.html.twig", "@EasyjetEleave/OfficeWishes/index.html.twig", 1);
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

        echo "Offices eleave";
        
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
        swissinside.menuSelected(\"menu-office-wish-offices\");
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
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_office_wishes_search");
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
                {\"bSortable\": false}, // Action
                {\"bSortable\": false, \"bVisible\": false} , // deletable
                {\"bSortable\": false, \"bVisible\": false} , // selectedFrom
                {\"bSortable\": false, \"bVisible\": false}  // selectedTo
            ],
            \"aaSorting\" : [[2, \"asc\"]],
             \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                // Generate buttons                
                var editUrl =  \"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_office_wishes_edit", ["id" => ":id"]);
        echo "\";
                editUrl = editUrl.replace(\":id\", aData[6]); 
                var editLink = '<a class=\"btn btn-default\" href='+editUrl+'><i class=\"icon-edit\"></i> Edit</a> ';
                var deleteLink = aData[7] ? '<a class=\"btn btn-danger\" href=\"javascript:del_wish(\\'' + aData[6]  + '\\')\"><i class=\"icon-remove\"></i> Delete</a>' : \"\";
                \$(\"td:eq(6)\", nRow).html(
                    editLink
                );
        
                if(aData[5] == 3) {
                    \$(\"td:eq(4)\", nRow).html(\"-\");
                }
                else {
                    \$(\"td:eq(4)\", nRow).html(
                        (aData[5] == 0 ? \"<b>Primary choice</b><br>\" : \"\") + aData[8] + \"<br>\" + aData[9]
                    );
                }
                
        
                var state = \"\";
                switch(aData[5]) {
                    case 0 : state = '<span class=\"badge badge-info\">Waiting LM validation</span>'; break;
                    case 1 : state = '<span class=\"badge badge-warning\">Waiting office validation</span>'; break;
                    case 2 : state = '<span class=\"badge badge-success\">Request validated</span>'; break;
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

    // line 96
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 97
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
        // line 122
        echo ((((0 === twig_compare((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 122, $this->source); })()), "all")) || (0 === twig_compare((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 122, $this->source); })()), "")))) ? (" selected=\"selected\" ") : (""));
        echo ">-- All --</option>
                                        <option value=\"0\" ";
        // line 123
        echo ((( !(null === (isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 123, $this->source); })())) && (0 === twig_compare((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 123, $this->source); })()), "0")))) ? (" selected=\"selected\" ") : (""));
        echo ">Blue</option>
                                        <option value=\"1\" ";
        // line 124
        echo (((0 === twig_compare((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 124, $this->source); })()), "1"))) ? (" selected=\"selected\" ") : (""));
        echo ">Orange</option>
                                        <option value=\"2\" ";
        // line 125
        echo (((0 === twig_compare((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 125, $this->source); })()), "2"))) ? (" selected=\"selected\" ") : (""));
        echo ">Green</option>
                                        <option value=\"3\" ";
        // line 126
        echo (((0 === twig_compare((isset($context["state"]) || array_key_exists("state", $context) ? $context["state"] : (function () { throw new RuntimeError('Variable "state" does not exist.', 126, $this->source); })()), "3"))) ? (" selected=\"selected\" ") : (""));
        echo ">Red</option>
                                    </select>
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"control-label\">From</label>                
                                <div class=\"controls\">
                                    <input class=\"form-control input-sm date-input\" name=\"from\" type=\"text\" id=\"date-from\" value=\"";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 134, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"dd/mm/yyyy\" data-enable-datepicker=\"true\">
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"control-label\">To</label>                
                                <div class=\"controls\">
                                    <input class=\"form-control input-sm \" name=\"to\" type=\"text\" id=\"date-to\" value=\"";
        // line 141
        echo twig_escape_filter($this->env, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 141, $this->source); })()), "html", null, true);
        echo "\"  data-enable-datepicker=\"true\">
                                </div>
                            </div>
                        
                            ";
        // line 145
        if ((isset($context["adminAccess"]) || array_key_exists("adminAccess", $context) ? $context["adminAccess"] : (function () { throw new RuntimeError('Variable "adminAccess" does not exist.', 145, $this->source); })())) {
            // line 146
            echo "                                <div class=\"form-group\">
                                    <label class=\"control-label\">Base</label>                
                                    <div class=\"controls\">
                                        <select name=\"id_station\" id=\"id_station\">
                                            <option value=\"\"></option>
                                            ";
            // line 151
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stationsList"]) || array_key_exists("stationsList", $context) ? $context["stationsList"] : (function () { throw new RuntimeError('Variable "stationsList" does not exist.', 151, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["base"]) {
                // line 152
                echo "                                                <option ";
                echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["base"], "idStation", [], "any", false, false, false, 152), (isset($context["currentBase"]) || array_key_exists("currentBase", $context) ? $context["currentBase"] : (function () { throw new RuntimeError('Variable "currentBase" does not exist.', 152, $this->source); })())))) ? (" selected=\"selected\" ") : (""));
                echo "  value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["base"], "idStation", [], "any", false, false, false, 152), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["base"], "iataCode", [], "any", false, false, false, 152), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['base'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 154
            echo "                                        </select>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"control-label\">Contract</label>                
                                    <div class=\"controls\">
                                        <select name=\"type_eftr[]\" id=\"types_eftr\" multiple=\"\">
                                            ";
            // line 162
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["typeEftrList"]) || array_key_exists("typeEftrList", $context) ? $context["typeEftrList"] : (function () { throw new RuntimeError('Variable "typeEftrList" does not exist.', 162, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["typeEftr"]) {
                // line 163
                echo "                                                <option ";
                echo ((twig_in_filter(twig_get_attribute($this->env, $this->source, $context["typeEftr"], "id", [], "any", false, false, false, 163), (isset($context["currentEftrType"]) || array_key_exists("currentEftrType", $context) ? $context["currentEftrType"] : (function () { throw new RuntimeError('Variable "currentEftrType" does not exist.', 163, $this->source); })()))) ? (" selected=\"selected\" ") : (""));
                echo "  value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typeEftr"], "id", [], "any", false, false, false, 163), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typeEftr"], "type", [], "any", false, false, false, 163), "html", null, true);
                echo "</option>
                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeEftr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 165
            echo "                                        </select>
                                    </div>
                                </div>
                            ";
        }
        // line 169
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
        // line 186
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 186, $context, $this->getSourceContext());
        echo "
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
        return "@EasyjetEleave/OfficeWishes/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  352 => 186,  333 => 169,  327 => 165,  314 => 163,  310 => 162,  300 => 154,  287 => 152,  283 => 151,  276 => 146,  274 => 145,  267 => 141,  257 => 134,  246 => 126,  242 => 125,  238 => 124,  234 => 123,  230 => 122,  203 => 97,  193 => 96,  142 => 52,  118 => 31,  82 => 7,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetEleave/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Offices eleave{% endblock %}


{% block specificJs %}{{ parent() }}
<script>
    \$(function() {
        swissinside.menuSelected(\"menu-office-wish-offices\");
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
            \"sAjaxSource\": \"{{ url('eleave_office_wishes_search') }}\",
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
                {\"bSortable\": false}, // Action
                {\"bSortable\": false, \"bVisible\": false} , // deletable
                {\"bSortable\": false, \"bVisible\": false} , // selectedFrom
                {\"bSortable\": false, \"bVisible\": false}  // selectedTo
            ],
            \"aaSorting\" : [[2, \"asc\"]],
             \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                // Generate buttons                
                var editUrl =  \"{{ url('eleave_office_wishes_edit', {'id' : ':id'} )}}\";
                editUrl = editUrl.replace(\":id\", aData[6]); 
                var editLink = '<a class=\"btn btn-default\" href='+editUrl+'><i class=\"icon-edit\"></i> Edit</a> ';
                var deleteLink = aData[7] ? '<a class=\"btn btn-danger\" href=\"javascript:del_wish(\\'' + aData[6]  + '\\')\"><i class=\"icon-remove\"></i> Delete</a>' : \"\";
                \$(\"td:eq(6)\", nRow).html(
                    editLink
                );
        
                if(aData[5] == 3) {
                    \$(\"td:eq(4)\", nRow).html(\"-\");
                }
                else {
                    \$(\"td:eq(4)\", nRow).html(
                        (aData[5] == 0 ? \"<b>Primary choice</b><br>\" : \"\") + aData[8] + \"<br>\" + aData[9]
                    );
                }
                
        
                var state = \"\";
                switch(aData[5]) {
                    case 0 : state = '<span class=\"badge badge-info\">Waiting LM validation</span>'; break;
                    case 1 : state = '<span class=\"badge badge-warning\">Waiting office validation</span>'; break;
                    case 2 : state = '<span class=\"badge badge-success\">Request validated</span>'; break;
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
                                        <option value=\"all\"{{ state == \"all\" or state == \"\" ? ' selected=\"selected\" ' : \"\" }}>-- All --</option>
                                        <option value=\"0\" {{ state is not null and state == \"0\" ? ' selected=\"selected\" ' : \"\" }}>Blue</option>
                                        <option value=\"1\" {{ state == \"1\" ? ' selected=\"selected\" ' : \"\" }}>Orange</option>
                                        <option value=\"2\" {{ state == \"2\" ? ' selected=\"selected\" ' : \"\" }}>Green</option>
                                        <option value=\"3\" {{ state == \"3\" ? ' selected=\"selected\" ' : \"\" }}>Red</option>
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
                                    <input class=\"form-control input-sm \" name=\"to\" type=\"text\" id=\"date-to\" value=\"{{ to }}\"  data-enable-datepicker=\"true\">
                                </div>
                            </div>
                        
                            {% if adminAccess %}
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
            
{% endblock container %}", "@EasyjetEleave/OfficeWishes/index.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EleaveBundle\\Resources\\views\\OfficeWishes\\index.html.twig");
    }
}
