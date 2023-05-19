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

/* @EasyjetEwish/Gdo/list.html.twig */
class __TwigTemplate_318453a3e0acea3b0904ea69e4a49970bb20fe917a71fb26642383404213df2f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEwish/Gdo/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEwish/Gdo/list.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetEwish/Gdo/list.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetEwish/Base/structure.html.twig", "@EasyjetEwish/Gdo/list.html.twig", 1);
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

        echo "Manage GDO list";
        
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

    function showMoreContent(id) {
       \$(\"#cutComment_\"+id).hide();
       \$(\"#showMore_\"+id).hide();
       \$(\"#fullComment_\"+id).show();
    }

    \$(function() {

        var user = \$(\"#ewishUser\").val();
        var ewishFrom = \$(\"#ewishFrom\").val();
        var ewishTo = \$(\"#ewishTo\").val();
        var ewishStatus = \$(\"#ewishStatus\").val();
        var ewishStations = \$('#ewishStations').find(\":selected\").val();
        var typesEftrIds = \$('#typesEftr').val();
        var globalData = null;
        var isAdmin = '";
        // line 26
        echo twig_escape_filter($this->env, (isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 26, $this->source); })()), "html", null, true);
        echo "';

        if( isAdmin ) {
             Columns =   [
                null, //Nom
                null, //Prenom
                null, //Request Date
                null, //GDo
                null, //Commnet
                null, //state
              
            ]
        } else {
             Columns =   [
                null, //Nom
                null, //Prenom
                null, //Request Date
                null, //GDo
                null, //Commnet
              
            ]
        }
       
        \$('#ewish-gdo-list').on('preXhr.dt', function ( e, settings, data ) {
            data.selectedUser = user;
            data.ewishFrom = ewishFrom;
            data.ewishTo = ewishTo;
            data.selectedStation = ewishStations;
            data.selectedStatus = ewishStatus;
            data.typesEftrIds = typesEftrIds;
            globalData = data;
            return data;
        });

        swissinside.simpleDataTable(\$(\"#ewish-gdo-list\"), {
            \"processing\": true,
            \"sAjaxSource\": \"";
        // line 62
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ewish_gdo_list_search");
        echo "\",
            \"columns\":Columns,

            \"fnRowCallback\": function( nRow, aData, iDisplayIndex ) {
                var url =  \"";
        // line 66
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ewish_gdo_do_request", ["id" => ":id", "type" => "edit"]), "html", null, true);
        echo " \";
                url = url.replace(\":id\", aData[6]);
                
                if(aData[5] == 0) {
                    if ( isAdmin ) {
                        \$('td:eq(5)', nRow).html( '<a style=\"color:blue\" href=\"' + url + '\" >In progress ...</a>' );
                    } 
                } else if(aData[5] == 1) {
                    if ( isAdmin ) {
                        \$('td:eq(5)', nRow).html( '<a style=\"color:red\" href=\"' + url + '\" >Refused</a>' );
                    }
                    
                } else if(aData[5] == 2) {
                    if ( isAdmin ) { 
                        \$('td:eq(5)', nRow).html( '<a style=\"color:green\" href=\"' + url + '\" >Accepted</a>' );
                    } 
                }
                
                if(aData[7]) {
                    \$('td:eq(4)', nRow).html(\"<p id ='cutComment_\"+aData[6]+\"'>\" + aData[7] +' </p><p id =\"fullComment_'+aData[6]+'\" style=\"display:none; \">' + aData[4] + ' </p><p id=\"showMore_'+aData[6]+'\" style=\"cursor:pointer; color:#2a6496;\" onclick=\"showMoreContent('+aData[6]+')\"> [+More]</p>');
                } 

            },

            \"columnDefs\": [ {\"targets\": 'no-sort',\"orderable\": false} ]
        });
      
    });

    function advancedSearch() {
        if(\$(\"#advanced_search_pannel\").is(':hidden')) {
            \$(\"#advanced_search_pannel\").slideDown();
            \$(\"#advanceShowStatus\").val(1);
        }
        else {
            \$(\"#advanced_search_pannel\").slideUp();
            \$(\"#advanceShowStatus\").val(0);
        }
    }

</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 110
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 111
        echo "    <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">GDO request list</h1>  
        </div>

    <!-- Search form -->
        <form method=\"get\" action=\"\" class=\"form-horizontal\">
            <input type=\"hidden\" name=\"advanceShowStatus\" id=\"advanceShowStatus\" value=\"";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["advanceShowStatus"]) || array_key_exists("advanceShowStatus", $context) ? $context["advanceShowStatus"] : (function () { throw new RuntimeError('Variable "advanceShowStatus" does not exist.', 118, $this->source); })()), "html", null, true);
        echo "\" />
            
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <p id=\"description_help\">
                        Here, you can validate / refuse each GDO.
                    </p>
                    <div class=\"widget-box\">
                        <div class=\"widget-title\">
                            <span class=\"icon\">
                                <i class=\"icon-search\"></i>
                            </span>
                            <h5>Search</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                        
                            ";
        // line 134
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EWISH_ADMIN")) {
            // line 135
            echo "                                <div class=\"form-group\">
                                    <label class=\"control-label\" for=\"ewishUser\">Search</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" placeholder=\"Search user\" id = \"ewishUser\"  name=\"ewishUser\" value=\"";
            // line 138
            echo twig_escape_filter($this->env, (isset($context["ewishUser"]) || array_key_exists("ewishUser", $context) ? $context["ewishUser"] : (function () { throw new RuntimeError('Variable "ewishUser" does not exist.', 138, $this->source); })()), "html", null, true);
            echo "\" class=\"form-control\" >
                                    </div>
                                </div>
                            ";
        }
        // line 142
        echo "
                            <div style=\"display:";
        // line 143
        echo twig_escape_filter($this->env, (isset($context["hideAdvancedSearch"]) || array_key_exists("hideAdvancedSearch", $context) ? $context["hideAdvancedSearch"] : (function () { throw new RuntimeError('Variable "hideAdvancedSearch" does not exist.', 143, $this->source); })()), "html", null, true);
        echo "\" id=\"advanced_search_pannel\">
                                
                                <div class=\"form-group\">
                                    <label class=\"control-label\" for=\"ewishStatus\">State</label>                
                                    <div class=\"controls\">
                                        <select name=\"status\" id =\"ewishStatus\">
                                            ";
        // line 149
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statusList"]) || array_key_exists("statusList", $context) ? $context["statusList"] : (function () { throw new RuntimeError('Variable "statusList" does not exist.', 149, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 150
            echo "                                                <option ";
            echo ((twig_in_filter($context["key"], (isset($context["currentStatus"]) || array_key_exists("currentStatus", $context) ? $context["currentStatus"] : (function () { throw new RuntimeError('Variable "currentStatus" does not exist.', 150, $this->source); })()))) ? (" selected=\"selected\" ") : (""));
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
        // line 152
        echo "                                        </select>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"control-label\" for=\"ewishFrom\">From</label>                
                                    <div class=\"controls\">
                                        <input class=\"form-control input-sm date-input\" data-enable-datepicker type=\"text\" id=\"ewishFrom\" name=\"from\" value=\"";
        // line 159
        echo twig_escape_filter($this->env, (isset($context["from"]) || array_key_exists("from", $context) ? $context["from"] : (function () { throw new RuntimeError('Variable "from" does not exist.', 159, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"dd/mm/yyyy\">
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"control-label\" for=\"ewishTo\">To</label>                
                                    <div class=\"controls\">
                                        <input class=\"form-control input-sm date-input\" data-enable-datepicker name=\"to\" type=\"text\" id=\"ewishTo\" value=\"";
        // line 166
        echo twig_escape_filter($this->env, (isset($context["to"]) || array_key_exists("to", $context) ? $context["to"] : (function () { throw new RuntimeError('Variable "to" does not exist.', 166, $this->source); })()), "html", null, true);
        echo "\" placeholder=\"dd/mm/yyyy\">
                                    </div>
                                </div>

                                ";
        // line 170
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EWISH_ADMIN")) {
            // line 171
            echo "
                                    <div class=\"form-group\">
                                        <label class=\"control-label\" for=\"ewishStations\">Base</label>                
                                        <div class=\"controls\">
                                            <select name=\"stations\" id=\"ewishStations\">
                                            <option value=\"0\" >-- All --</option>
                                            ";
            // line 177
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["stations"]) || array_key_exists("stations", $context) ? $context["stations"] : (function () { throw new RuntimeError('Variable "stations" does not exist.', 177, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["station"]) {
                // line 178
                echo "                                            <option value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "idStation", [], "any", false, false, false, 178), "html", null, true);
                echo "\" ";
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["station"], "idStation", [], "any", false, false, false, 178), (isset($context["selectedStation"]) || array_key_exists("selectedStation", $context) ? $context["selectedStation"] : (function () { throw new RuntimeError('Variable "selectedStation" does not exist.', 178, $this->source); })())))) {
                    echo "selected=\"selected\"";
                }
                echo ">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["station"], "iataCode", [], "any", false, false, false, 178), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['station'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 180
            echo "                                            </select>
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"control-label\" for=\"ewishContract\">Contract</label>                
                                        <div class=\"controls\">
                                            <select name=\"typesEftr[]\" multiple=\"\" id=\"typesEftr\">
                                                ";
            // line 188
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["typesEftr"]) || array_key_exists("typesEftr", $context) ? $context["typesEftr"] : (function () { throw new RuntimeError('Variable "typesEftr" does not exist.', 188, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["eftr"]) {
                // line 189
                echo "                                                    <option ";
                if (twig_get_attribute($this->env, $this->source, $context["eftr"], "selected", [], "any", false, false, false, 189)) {
                    echo " selected=\"selected\"";
                }
                echo " value=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eftr"], "id", [], "any", false, false, false, 189), "html", null, true);
                echo "\" >";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["eftr"], "type", [], "any", false, false, false, 189), "html", null, true);
                echo "</option>
                                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eftr'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 191
            echo "                                            </select>
                                        </div>
                                    </div>

                               ";
        }
        // line 196
        echo "                            </div>

                            <div class=\"form-actions\">
                                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon-search\"></i> Search</button>
                                     ";
        // line 200
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EWISH_ADMIN")) {
            // line 201
            echo "                                        <a class=\"pull-right\" id=\"link_advanced_search\" href=\"javascript:advancedSearch()\">Advanced search</a>
                                    ";
        }
        // line 203
        echo "                            </div>

                        </div>
                    </div>
                </div>           
            </div>

        </form>


    <!-- Results to show -->
            <div class=\"row\">

                <div class=\"col-xs-12\">
                    ";
        // line 217
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 217, $context, $this->getSourceContext());
        echo "
                </div>

                <div class=\"col-xs-12\">

                    <div class=\"widget-box\">
                    
                        <div class=\"widget-title\">
                            <span class=\"icon\">
                                <i class=\"icon-th\"></i>
                            </span>
                            <h5>Your Results</h5>
                        </div>

                        <div class=\"widget-content nopadding\">

                            <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"ewish-gdo-list\">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Pr&eacute;nom</th>
                                        <th>Request date</th>
                                        <th class=\"no-sort\">GDO</th>
                                        <th width=\"200px\" class=\"no-sort\" >Comment</th>
                                        ";
        // line 241
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EWISH_ADMIN")) {
            // line 242
            echo "                                            <th class=\"no-sort\">State</th>
                                        ";
        }
        // line 244
        echo "                                    </tr>
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
        return "@EasyjetEwish/Gdo/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  445 => 244,  441 => 242,  439 => 241,  412 => 217,  396 => 203,  392 => 201,  390 => 200,  384 => 196,  377 => 191,  362 => 189,  358 => 188,  348 => 180,  333 => 178,  329 => 177,  321 => 171,  319 => 170,  312 => 166,  302 => 159,  293 => 152,  280 => 150,  276 => 149,  267 => 143,  264 => 142,  257 => 138,  252 => 135,  250 => 134,  231 => 118,  222 => 111,  212 => 110,  159 => 66,  152 => 62,  113 => 26,  82 => 7,  63 => 5,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetEwish/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}


{% block title %}Manage GDO list{% endblock %}

{% block specificJs %}{{ parent() }}

<script>

    function showMoreContent(id) {
       \$(\"#cutComment_\"+id).hide();
       \$(\"#showMore_\"+id).hide();
       \$(\"#fullComment_\"+id).show();
    }

    \$(function() {

        var user = \$(\"#ewishUser\").val();
        var ewishFrom = \$(\"#ewishFrom\").val();
        var ewishTo = \$(\"#ewishTo\").val();
        var ewishStatus = \$(\"#ewishStatus\").val();
        var ewishStations = \$('#ewishStations').find(\":selected\").val();
        var typesEftrIds = \$('#typesEftr').val();
        var globalData = null;
        var isAdmin = '{{isAdmin}}';

        if( isAdmin ) {
             Columns =   [
                null, //Nom
                null, //Prenom
                null, //Request Date
                null, //GDo
                null, //Commnet
                null, //state
              
            ]
        } else {
             Columns =   [
                null, //Nom
                null, //Prenom
                null, //Request Date
                null, //GDo
                null, //Commnet
              
            ]
        }
       
        \$('#ewish-gdo-list').on('preXhr.dt', function ( e, settings, data ) {
            data.selectedUser = user;
            data.ewishFrom = ewishFrom;
            data.ewishTo = ewishTo;
            data.selectedStation = ewishStations;
            data.selectedStatus = ewishStatus;
            data.typesEftrIds = typesEftrIds;
            globalData = data;
            return data;
        });

        swissinside.simpleDataTable(\$(\"#ewish-gdo-list\"), {
            \"processing\": true,
            \"sAjaxSource\": \"{{ url('ewish_gdo_list_search') }}\",
            \"columns\":Columns,

            \"fnRowCallback\": function( nRow, aData, iDisplayIndex ) {
                var url =  \"{{ url('ewish_gdo_do_request', {\"id\" : \":id\", \"type\" : \"edit\"} )}} \";
                url = url.replace(\":id\", aData[6]);
                
                if(aData[5] == 0) {
                    if ( isAdmin ) {
                        \$('td:eq(5)', nRow).html( '<a style=\"color:blue\" href=\"' + url + '\" >In progress ...</a>' );
                    } 
                } else if(aData[5] == 1) {
                    if ( isAdmin ) {
                        \$('td:eq(5)', nRow).html( '<a style=\"color:red\" href=\"' + url + '\" >Refused</a>' );
                    }
                    
                } else if(aData[5] == 2) {
                    if ( isAdmin ) { 
                        \$('td:eq(5)', nRow).html( '<a style=\"color:green\" href=\"' + url + '\" >Accepted</a>' );
                    } 
                }
                
                if(aData[7]) {
                    \$('td:eq(4)', nRow).html(\"<p id ='cutComment_\"+aData[6]+\"'>\" + aData[7] +' </p><p id =\"fullComment_'+aData[6]+'\" style=\"display:none; \">' + aData[4] + ' </p><p id=\"showMore_'+aData[6]+'\" style=\"cursor:pointer; color:#2a6496;\" onclick=\"showMoreContent('+aData[6]+')\"> [+More]</p>');
                } 

            },

            \"columnDefs\": [ {\"targets\": 'no-sort',\"orderable\": false} ]
        });
      
    });

    function advancedSearch() {
        if(\$(\"#advanced_search_pannel\").is(':hidden')) {
            \$(\"#advanced_search_pannel\").slideDown();
            \$(\"#advanceShowStatus\").val(1);
        }
        else {
            \$(\"#advanced_search_pannel\").slideUp();
            \$(\"#advanceShowStatus\").val(0);
        }
    }

</script>

{% endblock specificJs %}
        
{% block container %}
    <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">GDO request list</h1>  
        </div>

    <!-- Search form -->
        <form method=\"get\" action=\"\" class=\"form-horizontal\">
            <input type=\"hidden\" name=\"advanceShowStatus\" id=\"advanceShowStatus\" value=\"{{ advanceShowStatus }}\" />
            
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <p id=\"description_help\">
                        Here, you can validate / refuse each GDO.
                    </p>
                    <div class=\"widget-box\">
                        <div class=\"widget-title\">
                            <span class=\"icon\">
                                <i class=\"icon-search\"></i>
                            </span>
                            <h5>Search</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                        
                            {% if is_granted(\"ROLE_EWISH_ADMIN\") %}
                                <div class=\"form-group\">
                                    <label class=\"control-label\" for=\"ewishUser\">Search</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" placeholder=\"Search user\" id = \"ewishUser\"  name=\"ewishUser\" value=\"{{ ewishUser }}\" class=\"form-control\" >
                                    </div>
                                </div>
                            {% endif %}

                            <div style=\"display:{{hideAdvancedSearch}}\" id=\"advanced_search_pannel\">
                                
                                <div class=\"form-group\">
                                    <label class=\"control-label\" for=\"ewishStatus\">State</label>                
                                    <div class=\"controls\">
                                        <select name=\"status\" id =\"ewishStatus\">
                                            {% for key, value in statusList %}
                                                <option {{ key in currentStatus ? ' selected=\"selected\" ' : \"\" }} value=\"{{ key }}\">{{ value }}</option>
                                            {% endfor %}
                                        </select>
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"control-label\" for=\"ewishFrom\">From</label>                
                                    <div class=\"controls\">
                                        <input class=\"form-control input-sm date-input\" data-enable-datepicker type=\"text\" id=\"ewishFrom\" name=\"from\" value=\"{{ from }}\" placeholder=\"dd/mm/yyyy\">
                                    </div>
                                </div>

                                <div class=\"form-group\">
                                    <label class=\"control-label\" for=\"ewishTo\">To</label>                
                                    <div class=\"controls\">
                                        <input class=\"form-control input-sm date-input\" data-enable-datepicker name=\"to\" type=\"text\" id=\"ewishTo\" value=\"{{ to }}\" placeholder=\"dd/mm/yyyy\">
                                    </div>
                                </div>

                                {% if is_granted(\"ROLE_EWISH_ADMIN\") %}

                                    <div class=\"form-group\">
                                        <label class=\"control-label\" for=\"ewishStations\">Base</label>                
                                        <div class=\"controls\">
                                            <select name=\"stations\" id=\"ewishStations\">
                                            <option value=\"0\" >-- All --</option>
                                            {% for station in stations %}
                                            <option value=\"{{ station.idStation }}\" {% if station.idStation == selectedStation %}selected=\"selected\"{% endif %}>{{ station.iataCode }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>

                                    <div class=\"form-group\">
                                        <label class=\"control-label\" for=\"ewishContract\">Contract</label>                
                                        <div class=\"controls\">
                                            <select name=\"typesEftr[]\" multiple=\"\" id=\"typesEftr\">
                                                {% for eftr in typesEftr %}
                                                    <option {% if eftr.selected %} selected=\"selected\"{% endif %} value=\"{{ eftr.id }}\" >{{ eftr.type }}</option>
                                                {% endfor %}
                                            </select>
                                        </div>
                                    </div>

                               {% endif %}
                            </div>

                            <div class=\"form-actions\">
                                    <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon-search\"></i> Search</button>
                                     {% if is_granted(\"ROLE_EWISH_ADMIN\") %}
                                        <a class=\"pull-right\" id=\"link_advanced_search\" href=\"javascript:advancedSearch()\">Advanced search</a>
                                    {% endif %}
                            </div>

                        </div>
                    </div>
                </div>           
            </div>

        </form>


    <!-- Results to show -->
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
                            <h5>Your Results</h5>
                        </div>

                        <div class=\"widget-content nopadding\">

                            <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"ewish-gdo-list\">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Pr&eacute;nom</th>
                                        <th>Request date</th>
                                        <th class=\"no-sort\">GDO</th>
                                        <th width=\"200px\" class=\"no-sort\" >Comment</th>
                                        {% if is_granted(\"ROLE_EWISH_ADMIN\") %}
                                            <th class=\"no-sort\">State</th>
                                        {% endif %}
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
            
{% endblock container %}", "@EasyjetEwish/Gdo/list.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EwishBundle\\Resources\\views\\Gdo\\list.html.twig");
    }
}
