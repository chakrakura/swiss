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

/* @EasyjetWorkingSheet/WorkingSheetActualWork/index.html.twig */
class __TwigTemplate_62bf0e6fda8c4273d33b571047470513c29afebf021946bd6c18398e2e8fae89 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'specificJs' => [$this, 'block_specificJs'],
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@EasyjetWorkingSheet/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/WorkingSheetActualWork/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetWorkingSheet/WorkingSheetActualWork/index.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetWorkingSheet/WorkingSheetActualWork/index.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetWorkingSheet/Base/structure.html.twig", "@EasyjetWorkingSheet/WorkingSheetActualWork/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_specificJs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificJs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificJs"));

        $this->displayParentBlock("specificJs", $context, $blocks);
        echo "
    
";
        // line 5
        $context["actualWorkShowUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("working_sheet_actual_work_show", ["id" => ":id"]);
        // line 6
        $context["actualWorkEditUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("working_sheet_actual_work_edit", ["id" => ":id"]);
        // line 7
        echo "    
    

<script>

    \$(function() {
        var user = \$(\"#workingsheetUser\").val();
        var workingHistoryFrom = \$(\"#workingHistoryFrom\").val();
        var workingHistoryTo = \$(\"#workingHistoryTo\").val();
        
        var globalData = null;
        
        var actualWorkShowUrl = '";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["actualWorkShowUrl"]) || array_key_exists("actualWorkShowUrl", $context) ? $context["actualWorkShowUrl"] : (function () { throw new RuntimeError('Variable "actualWorkShowUrl" does not exist.', 19, $this->source); })()), "html", null, true);
        echo "';
        var actualWorkEditUrl = '";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["actualWorkEditUrl"]) || array_key_exists("actualWorkEditUrl", $context) ? $context["actualWorkEditUrl"] : (function () { throw new RuntimeError('Variable "actualWorkEditUrl" does not exist.', 20, $this->source); })()), "html", null, true);
        echo "';

        \$('#workingsheet-list').on('preXhr.dt', function ( e, settings, data ) {
            data.selectionedUser = user;
            data.workingHistoryFrom = workingHistoryFrom;
            data.workingHistoryTo = workingHistoryTo;
            
           
            globalData = data;
            return data;
        });    

        swissinside.simpleDataTable(\$(\"#workingsheet-list\"), {
            \"bProcessing\": true,
            \"bServerSide\": true,
            \"sAjaxSource\": \"";
        // line 35
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("workingsheet_list_search");
        echo "\",
            \"aoColumns\" : [
                null, // Empno
                null, // First name
                null, // Last name
                null, // Working  date

                {\"bSortable\": false}, // Morning From
                {\"bSortable\": false}, // Morning To
                {\"bSortable\": false}, // Afternoon From
                {\"bSortable\": false}, // Afternoon To
                {\"bSortable\": false}, // Total
                {\"bSortable\": false}, // getIsHolliday
                {\"bSortable\": false},// getIsBankHolliday
                {\"bSortable\": false}, // id
                {\"bVisible\":  false} // user id
            ],
            \"aaSorting\" : [[3, \"desc\"]],
            \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                // Generate buttons
                
                
                var isHolidayValue = aData[9];
                switch (isHolidayValue) {
                    case 1 :
                        isHolidayValue = '<span class=\"badge badge-success\">Full day</span>';
                        break;
                    case 0.5 :
                        isHolidayValue = '<span class=\"badge badge-success\">Half a day</span>';
                        break;
                    default :
                        isHolidayValue = '<span class=\"badge badge-danger\">No</span>';
                        break;
                }
                
                \$(\"td:eq(9)\", nRow).html(isHolidayValue);
                
                var isBankHolidayValue = aData[10];
                isBankHolidayValue = (isBankHolidayValue)? '<span class=\"badge badge-success\">Yes</span>' : '<span class=\"badge badge-danger\">No</span>' ;
                
                \$(\"td:eq(10)\", nRow).html(isBankHolidayValue);
                
                var isLocked = aData[13];
                if(isLocked){
                    var urlShow = actualWorkShowUrl.replace(\":id\", aData[11]);
                    isLocked = '<a href=\"' + urlShow + '\"  class=\"btn btn-default\">show</a>';
                }
                else{
                    var urlEdit = actualWorkEditUrl.replace(\":id\", aData[11]);
                    isLocked = '<a href=\"' + urlEdit + '\" class=\"btn btn-default\">Edit</a>';
                }
                    
                \$(\"td:eq(11)\", nRow).html(isLocked);
                
                
                var \$th = \$(this).find(\"tr:first th\");
                \$(\"td\", nRow).each(function(id, field) {
                    if(\$th.eq(id).hasClass(\"hidden-xs\")) \$(this).addClass('hidden-xs');
                });
  
            }
        });  

    \$(\"#get-csv-btn\").on(\"click\", function() {
            if (!globalData) { return ; }
            var url = \"";
        // line 100
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("workingsheet_generate_csv");
        echo "?\" + \$.param(globalData);
            \$(this).attr(\"disabled\", \"disabled\");
            \$(this).text(\"Please change top filter to download new csv ...\");
            window.location.href = url;
        });
    });

 
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 112
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 113
        echo "<div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">Your working history list</h1>  
            <div id=\"description_help\">List of all you working days. Thanks to adjust the working time if they are different to the one you specified on your active pattern.</div>
        </div>
        
        

        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
        // line 123
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 123, $context, $this->getSourceContext());
        echo "
            </div>
            <div class=\"col-xs-12\">
                <a href=\"";
        // line 126
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("working_sheet_actual_work_new");
        echo "\" class=\"btn btn-primary\"><i class=\"icon-add\"></i> 
                    New working day
                </a>
            </div>
        </div>
                    
        <!-- Search form -->
        <form method=\"get\" action=\"\" class=\"form-horizontal\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"widget-box\">
                        <div class=\"widget-title\">
                            <span class=\"icon\">
                                <i class=\"icon-search\"></i>
                            </span>
                            <h5>Search form</h5>
                        </div>
                        <div class=\"widget-content nopadding\">

                            ";
        // line 145
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_WORKING_SHEET_ADMIN")) {
            // line 146
            echo "                                <div class=\"form-group\">
                                    <label class=\"control-label\" for=\"workingsheetUser\">User</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" id=\"workingsheetUser\" name=\"workingsheetUser\" value=\"";
            // line 149
            echo twig_escape_filter($this->env, (isset($context["workingsheetUser"]) || array_key_exists("workingsheetUser", $context) ? $context["workingsheetUser"] : (function () { throw new RuntimeError('Variable "workingsheetUser" does not exist.', 149, $this->source); })()), "html", null, true);
            echo "\" class=\"form-control\">
                                    </div>
                                </div>
                            ";
        }
        // line 153
        echo "
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"workingHistoryFrom\">From</label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"workingHistoryFrom\" name=\"workingHistoryFrom\" value=\"";
        // line 157
        echo twig_escape_filter($this->env, (isset($context["workingHistoryFrom"]) || array_key_exists("workingHistoryFrom", $context) ? $context["workingHistoryFrom"] : (function () { throw new RuntimeError('Variable "workingHistoryFrom" does not exist.', 157, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" data-enable-datepicker=\"true\">
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"workingHistoryTo\">To</label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"workingHistoryTo\" name=\"workingHistoryTo\" value=\"";
        // line 164
        echo twig_escape_filter($this->env, (isset($context["workingHistoryTo"]) || array_key_exists("workingHistoryTo", $context) ? $context["workingHistoryTo"] : (function () { throw new RuntimeError('Variable "workingHistoryTo" does not exist.', 164, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" data-enable-datepicker=\"true\">
                                </div>
                            </div>

                            <div class=\"form-actions\">
                                <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon-search\"></i> Search</button>
                            </div>
                        </div>
                    </div>
                </div>           
            </div>

        </form>
                                
         
        <!-- Results to show -->
        <div class=\"row\">
          <div class=\"col-xs-12\">
              ";
        // line 182
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 182, $context, $this->getSourceContext());
        echo "
          </div>       
          <div class=\"col-xs-12\">
              <div class=\"widget-box\">
                  <div class=\"widget-title\">
                      <span class=\"icon\">
                          <i class=\"icon-th\"></i>
                      </span>
                      <h5>List of working days</h5>
                  </div>
                  <div class=\"widget-content nopadding\">
                      <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"workingsheet-list\">
                          <thead>
                              <tr>
                                  <th>Empno</th>
                                  <th>First name</th>
                                  <th>Last name</th>
                                  <th>Date</th>
                                  <th>Morning From</th>
                                  <th>Morning To</th>
                                  <th>Afternoon From</th>
                                  <th>Afternoon To</th>
                                  <th>Total</th>
                                  <th>Off</th>
                                  <th>Bank holliday</th>
                                  <th style=\"width:5%;\">Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                          
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
       </div>
        <div class=\"row\">
            <div class=\"col-xs-12\">
            <button id=\"get-csv-btn\" class=\"btn btn-success pull-right\"><i class=\"icon-download\"> Get CSV</i></button>
            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetWorkingSheet/WorkingSheetActualWork/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  305 => 182,  284 => 164,  274 => 157,  268 => 153,  261 => 149,  256 => 146,  254 => 145,  232 => 126,  226 => 123,  214 => 113,  204 => 112,  184 => 100,  116 => 35,  98 => 20,  94 => 19,  80 => 7,  78 => 6,  76 => 5,  62 => 3,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetWorkingSheet/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}
{% block specificJs %}{{ parent() }}
    
{% set actualWorkShowUrl = url('working_sheet_actual_work_show', {\"id\" : \":id\"} ) %}
{% set actualWorkEditUrl = url('working_sheet_actual_work_edit', {\"id\" : \":id\"} ) %}
    
    

<script>

    \$(function() {
        var user = \$(\"#workingsheetUser\").val();
        var workingHistoryFrom = \$(\"#workingHistoryFrom\").val();
        var workingHistoryTo = \$(\"#workingHistoryTo\").val();
        
        var globalData = null;
        
        var actualWorkShowUrl = '{{ actualWorkShowUrl }}';
        var actualWorkEditUrl = '{{ actualWorkEditUrl }}';

        \$('#workingsheet-list').on('preXhr.dt', function ( e, settings, data ) {
            data.selectionedUser = user;
            data.workingHistoryFrom = workingHistoryFrom;
            data.workingHistoryTo = workingHistoryTo;
            
           
            globalData = data;
            return data;
        });    

        swissinside.simpleDataTable(\$(\"#workingsheet-list\"), {
            \"bProcessing\": true,
            \"bServerSide\": true,
            \"sAjaxSource\": \"{{ url('workingsheet_list_search') }}\",
            \"aoColumns\" : [
                null, // Empno
                null, // First name
                null, // Last name
                null, // Working  date

                {\"bSortable\": false}, // Morning From
                {\"bSortable\": false}, // Morning To
                {\"bSortable\": false}, // Afternoon From
                {\"bSortable\": false}, // Afternoon To
                {\"bSortable\": false}, // Total
                {\"bSortable\": false}, // getIsHolliday
                {\"bSortable\": false},// getIsBankHolliday
                {\"bSortable\": false}, // id
                {\"bVisible\":  false} // user id
            ],
            \"aaSorting\" : [[3, \"desc\"]],
            \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                // Generate buttons
                
                
                var isHolidayValue = aData[9];
                switch (isHolidayValue) {
                    case 1 :
                        isHolidayValue = '<span class=\"badge badge-success\">Full day</span>';
                        break;
                    case 0.5 :
                        isHolidayValue = '<span class=\"badge badge-success\">Half a day</span>';
                        break;
                    default :
                        isHolidayValue = '<span class=\"badge badge-danger\">No</span>';
                        break;
                }
                
                \$(\"td:eq(9)\", nRow).html(isHolidayValue);
                
                var isBankHolidayValue = aData[10];
                isBankHolidayValue = (isBankHolidayValue)? '<span class=\"badge badge-success\">Yes</span>' : '<span class=\"badge badge-danger\">No</span>' ;
                
                \$(\"td:eq(10)\", nRow).html(isBankHolidayValue);
                
                var isLocked = aData[13];
                if(isLocked){
                    var urlShow = actualWorkShowUrl.replace(\":id\", aData[11]);
                    isLocked = '<a href=\"' + urlShow + '\"  class=\"btn btn-default\">show</a>';
                }
                else{
                    var urlEdit = actualWorkEditUrl.replace(\":id\", aData[11]);
                    isLocked = '<a href=\"' + urlEdit + '\" class=\"btn btn-default\">Edit</a>';
                }
                    
                \$(\"td:eq(11)\", nRow).html(isLocked);
                
                
                var \$th = \$(this).find(\"tr:first th\");
                \$(\"td\", nRow).each(function(id, field) {
                    if(\$th.eq(id).hasClass(\"hidden-xs\")) \$(this).addClass('hidden-xs');
                });
  
            }
        });  

    \$(\"#get-csv-btn\").on(\"click\", function() {
            if (!globalData) { return ; }
            var url = \"{{ url('workingsheet_generate_csv') }}?\" + \$.param(globalData);
            \$(this).attr(\"disabled\", \"disabled\");
            \$(this).text(\"Please change top filter to download new csv ...\");
            window.location.href = url;
        });
    });

 
</script>
{% endblock specificJs %}


{% block container -%}
    <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">Your working history list</h1>  
            <div id=\"description_help\">List of all you working days. Thanks to adjust the working time if they are different to the one you specified on your active pattern.</div>
        </div>
        
        

        <div class=\"row\">
            <div class=\"col-xs-12\">
                {{ macros.wizz() }}
            </div>
            <div class=\"col-xs-12\">
                <a href=\"{{ path('working_sheet_actual_work_new') }}\" class=\"btn btn-primary\"><i class=\"icon-add\"></i> 
                    New working day
                </a>
            </div>
        </div>
                    
        <!-- Search form -->
        <form method=\"get\" action=\"\" class=\"form-horizontal\">
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"widget-box\">
                        <div class=\"widget-title\">
                            <span class=\"icon\">
                                <i class=\"icon-search\"></i>
                            </span>
                            <h5>Search form</h5>
                        </div>
                        <div class=\"widget-content nopadding\">

                            {% if is_granted(\"ROLE_WORKING_SHEET_ADMIN\") %}
                                <div class=\"form-group\">
                                    <label class=\"control-label\" for=\"workingsheetUser\">User</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" id=\"workingsheetUser\" name=\"workingsheetUser\" value=\"{{ workingsheetUser }}\" class=\"form-control\">
                                    </div>
                                </div>
                            {% endif %}

                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"workingHistoryFrom\">From</label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"workingHistoryFrom\" name=\"workingHistoryFrom\" value=\"{{ workingHistoryFrom }}\" class=\"form-control\" data-enable-datepicker=\"true\">
                                </div>
                            </div>

                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"workingHistoryTo\">To</label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"workingHistoryTo\" name=\"workingHistoryTo\" value=\"{{ workingHistoryTo }}\" class=\"form-control\" data-enable-datepicker=\"true\">
                                </div>
                            </div>

                            <div class=\"form-actions\">
                                <button type=\"submit\" class=\"btn btn-primary\"><i class=\"icon-search\"></i> Search</button>
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
                      <h5>List of working days</h5>
                  </div>
                  <div class=\"widget-content nopadding\">
                      <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"workingsheet-list\">
                          <thead>
                              <tr>
                                  <th>Empno</th>
                                  <th>First name</th>
                                  <th>Last name</th>
                                  <th>Date</th>
                                  <th>Morning From</th>
                                  <th>Morning To</th>
                                  <th>Afternoon From</th>
                                  <th>Afternoon To</th>
                                  <th>Total</th>
                                  <th>Off</th>
                                  <th>Bank holliday</th>
                                  <th style=\"width:5%;\">Actions</th>
                              </tr>
                          </thead>
                          <tbody>
                          
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
       </div>
        <div class=\"row\">
            <div class=\"col-xs-12\">
            <button id=\"get-csv-btn\" class=\"btn btn-success pull-right\"><i class=\"icon-download\"> Get CSV</i></button>
            </div>
        </div>
    </div>
{% endblock %}
", "@EasyjetWorkingSheet/WorkingSheetActualWork/index.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\WorkingSheetBundle\\Resources\\views\\WorkingSheetActualWork\\index.html.twig");
    }
}
