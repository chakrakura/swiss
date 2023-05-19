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

/* @EasyjetFdtr/Fdtr/index.html.twig */
class __TwigTemplate_9891847d98f5337d96550e5a7ab4b4f7410fd5a0b80a56dc86216e1b8c82ac75 extends Template
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
        return "@EasyjetFdtr/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetFdtr/Fdtr/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetFdtr/Fdtr/index.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetFdtr/Fdtr/index.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetFdtr/Base/structure.html.twig", "@EasyjetFdtr/Fdtr/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
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
        // line 7
        $context["externalDutyUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fdtr_external_duty", ["monthlyReport" => ":monthlyReport"]);
        // line 8
        echo "

<script>

    \$(function() {
        var user = \$(\"#fdtrUser\").val();
        var fdtrFrom = \$(\"#fdtrFrom\").val();
        var fdtrTo = \$(\"#fdtrTo\").val();
        //var fdtrStatus = \$(\"#fdtrStatus\").val();
        var fdtrStatusSelected = [];
        \$(\"#fdtrStatus option:selected\").each(function() {
            fdtrStatusSelected.push(\$(this).val());            
        });

        var noExternalDutyHrs = \"\";
         if(\$(\"#noExternalDutyHrs\").prop(\"checked\") == true)
                 noExternalDutyHrs =\$(\"#noExternalDutyHrs\").val() ;
        
        var globalData = null;

        var externalDutyUrl = '";
        // line 28
        echo twig_escape_filter($this->env, (isset($context["externalDutyUrl"]) || array_key_exists("externalDutyUrl", $context) ? $context["externalDutyUrl"] : (function () { throw new RuntimeError('Variable "externalDutyUrl" does not exist.', 28, $this->source); })()), "html", null, true);
        echo "';

        \$('#fdtr-list').on('preXhr.dt', function ( e, settings, data ) {
            data.selectedUser = user;
            data.fdtrFrom = fdtrFrom;
            data.fdtrTo = fdtrTo;
            data.fdtrStatus = fdtrStatusSelected;
            data.noExternalDutyHrs = noExternalDutyHrs;
            globalData = data;
            return data;
        });    

        swissinside.simpleDataTable(\$(\"#fdtr-list\"), {
            \"bProcessing\": true,
            \"bServerSide\": true,
            \"sAjaxSource\": \"";
        // line 43
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fdtr_list_search");
        echo "\",
            \"aoColumns\" : [
                null, // Empno
                null, // First name
                null, // Last name
                null, // Period

                null, // Easyjet Duty time
                null, // External Duty time
                null, // Total duty time

                {\"bSortable\": false}, // status

                {\"bSortable\": false}, // Id
                {\"bVisible\": false}, // date for those who have access to dtime request
                {\"bVisible\": false}, // user id
            ],
            \"aaSorting\" : [[3, \"desc\"]],
            \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                // Generate buttons
                if(aData[13] == 1){
                    \$(\"td:eq(8)\", nRow).html(
                            '<span class=\"text text-danger\">You have been locked out for now. Please contact to HR</span>'
                        );
                }
                else{
                    if (aData[9]) {
                        if(aData[11] == 1){
                            \$(\"td:eq(8)\", nRow).html(
                                '<span class=\"text text-warning\">You have selected no external duty for this month</span>'
                            );
                        }
                    } else {
                        \$(\"td:eq(8)\", nRow).html('');
                    } 
                    switch(aData[7]) {
                        case \"nofilled\" :
                            \$(\"td:eq(7)\", nRow).html(
                                '<div class=\"badge badge-warning\">Not filled</div>'
                            );
                            var url = externalDutyUrl.replace(\":monthlyReport\", aData[8]);
                            \$(\"td:eq(8)\", nRow).html(
                                '<a class=\"btn btn-primary btn-small\" href=\"' + url + '\"><i class=\"icon-time\"></i> Add External DTime</a><a data-toggle=\"modal\" data-monthly-report-id=\"'+aData[8]+'\" class=\"noExternalDtimeID\"><button type=\"button\" class=\"btn btn-primary btn-small\" id=\"no-external-dtime\" data-toggle=\"modal\" data-target=\"#noExternalDutyModal\" ><i class=\"icon-time\"></i> No External DTime</button></a>'
                            );
                            break;

                        case \"rejected\" :
                            \$(\"td:eq(7)\", nRow).html(
                                '<div class=\"badge badge-danger\">Rejected</div>'
                            );
                            break;
                        case \"validated\" :
                            \$(\"td:eq(7)\", nRow).html(
                                '<div class=\"badge badge-success\">Validated</div>'
                            );
                            var url = externalDutyUrl.replace(\":monthlyReport\", aData[8]);
                            if(aData[11] == 1  && aData[13] != 1 ){
                                \$(\"td:eq(8)\", nRow).html(
                                    '<span class=\"text text-warning\">You have selected no external duty for this month</span>'
                                );
                            } else {
                                \$(\"td:eq(8)\", nRow).html(
                                    '<a class=\"btn btn-primary btn-small\" href=\"' + url + '\"><i class=\"icon-time\"></i> View External DTime</a>'
                                );
                            }
                            break;
                        case \"pending\" :
                            \$(\"td:eq(7)\", nRow).html(
                                '<div class=\"badge badge-info\">Pending</div>'
                            );
                            var url = externalDutyUrl.replace(\":monthlyReport\", aData[8]);
                            \$(\"td:eq(8)\", nRow).html(
                                '<a class=\"btn btn-primary btn-small\" href=\"' + url + '\"><i class=\"icon-time\"></i> Edit External DTime</a>'
                            );
                            break;
                    }
                }

                if (aData[7] != \"validated\") {
                    \$(\"td:eq(5)\", nRow).html(
                        '<span style=\"text-decoration: line-through; color:#aaa;\">' + aData[5] + '</span>'
                    );
                };

                if (aData[7] == \"\") {
                    \$(\"td:eq(5)\", nRow).html(
                        '-'
                    );
                };
                
                              

                var \$th = \$(this).find(\"tr:first th\");
                \$(\"td\", nRow).each(function(id, field) {
                    if(\$th.eq(id).hasClass(\"hidden-xs\")) \$(this).addClass('hidden-xs');
                });


                
                
            }
        });  

        \$(\"#get-csv-btn\").on(\"click\", function() {
            if (!globalData) { return };
            var url = \"";
        // line 148
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fdtr_generate_csv");
        echo "?\" + \$.param(globalData);
            \$(this).attr(\"disabled\", \"disabled\");
            \$(this).text(\"Please change top filter to download new csv ...\");
            window.location.href = url;
        });
    });

    \$(document).on(\"click\", \".noExternalDtimeID\", function () {
     var id = \$(this).data('monthly-report-id');
     \$('#monthly-report-id').val(id);
    });
 
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 165
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 166
        echo " <!-- Modal -->
<div id=\"noExternalDutyModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Confirm</h4>
      </div>
      <form action=\"";
        // line 176
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("no_external_duty");
        echo "\" method=\"PUT\">
          <input type=\"hidden\" name=\"monthly-report-id\" id=\"monthly-report-id\">
          <div class=\"modal-body\">
            <p>Are you sure that you don't have any external duty hrs for this month?</p>
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

<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">EDTR data.</h1>  
        <div id=\"description_help\">Welcome to EDTR system. Here you can check all your External Duty. They are updated each month around the 2nd.</div>
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
        // line 211
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FDTR_ADMIN")) {
            // line 212
            echo "                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"fdtrUser\">User</label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"fdtrUser\" name=\"fdtrUser\" value=\"";
            // line 215
            echo twig_escape_filter($this->env, (isset($context["fdtrUser"]) || array_key_exists("fdtrUser", $context) ? $context["fdtrUser"] : (function () { throw new RuntimeError('Variable "fdtrUser" does not exist.', 215, $this->source); })()), "html", null, true);
            echo "\" class=\"form-control\">
                                </div>
                            </div>
                        ";
        }
        // line 219
        echo "
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"fdtrFrom\">From</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"fdtrFrom\" name=\"fdtrFrom\" value=\"";
        // line 223
        echo twig_escape_filter($this->env, (isset($context["fdtrFrom"]) || array_key_exists("fdtrFrom", $context) ? $context["fdtrFrom"] : (function () { throw new RuntimeError('Variable "fdtrFrom" does not exist.', 223, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" data-enable-datepicker=\"true\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"fdtrTo\">To</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"fdtrTo\" name=\"fdtrTo\" value=\"";
        // line 230
        echo twig_escape_filter($this->env, (isset($context["fdtrTo"]) || array_key_exists("fdtrTo", $context) ? $context["fdtrTo"] : (function () { throw new RuntimeError('Variable "fdtrTo" does not exist.', 230, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" data-enable-datepicker=\"true\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"fdtrTo\">External duty time status</label>
                            <div class=\"controls\">
                                <select name=\"fdtrStatus[]\" id=\"fdtrStatus\" multiple=\"multiple\">
                                    ";
        // line 238
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["statusList"]) || array_key_exists("statusList", $context) ? $context["statusList"] : (function () { throw new RuntimeError('Variable "statusList" does not exist.', 238, $this->source); })()));
        foreach ($context['_seq'] as $context["key"] => $context["value"]) {
            // line 239
            echo "                                        <option ";
            echo ((twig_in_filter($context["key"], (isset($context["selectedStatus"]) || array_key_exists("selectedStatus", $context) ? $context["selectedStatus"] : (function () { throw new RuntimeError('Variable "selectedStatus" does not exist.', 239, $this->source); })()))) ? (" selected=\"selected\" ") : (""));
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
        // line 241
        echo "                                </select>
                            </div>
                        </div>
                        
                        ";
        // line 245
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_FDTR_ADMIN")) {
            echo "        
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"fdtrExternalDuty\">No External duty Hours</label>
                                <div class=\"controls\">
                                    <input type=\"checkbox\" value =\"1\" ";
            // line 249
            if ((0 === twig_compare((isset($context["noExternalDutyHrs"]) || array_key_exists("noExternalDutyHrs", $context) ? $context["noExternalDutyHrs"] : (function () { throw new RuntimeError('Variable "noExternalDutyHrs" does not exist.', 249, $this->source); })()), 1))) {
                echo "checked=\"checked\"";
            }
            echo " name=\"noExternalDutyHrs\" id=\"noExternalDutyHrs\">
                                </div>
                            </div>
                        ";
        }
        // line 253
        echo "                        
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
        // line 269
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 269, $context, $this->getSourceContext());
        echo "
        </div>        
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>EDTR history</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"fdtr-list\">
                        <thead>
                            <tr>
                                <th>Empno</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Period</th>
                                <th>DT</th>
                                <th>external DT</th>
                                <th>Total DT</th>
                                <th>Status</th>
                                <th style=\"width:20%;\">Action</th>
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
        return "@EasyjetFdtr/Fdtr/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  408 => 269,  390 => 253,  381 => 249,  374 => 245,  368 => 241,  355 => 239,  351 => 238,  340 => 230,  330 => 223,  324 => 219,  317 => 215,  312 => 212,  310 => 211,  272 => 176,  260 => 166,  250 => 165,  226 => 148,  118 => 43,  100 => 28,  78 => 8,  76 => 7,  62 => 5,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@EasyjetFdtr/Base/structure.html.twig\" %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}


{% block specificJs %}{{ parent() }}

{% set externalDutyUrl = url('fdtr_external_duty', {\"monthlyReport\" : \":monthlyReport\"} ) %}


<script>

    \$(function() {
        var user = \$(\"#fdtrUser\").val();
        var fdtrFrom = \$(\"#fdtrFrom\").val();
        var fdtrTo = \$(\"#fdtrTo\").val();
        //var fdtrStatus = \$(\"#fdtrStatus\").val();
        var fdtrStatusSelected = [];
        \$(\"#fdtrStatus option:selected\").each(function() {
            fdtrStatusSelected.push(\$(this).val());            
        });

        var noExternalDutyHrs = \"\";
         if(\$(\"#noExternalDutyHrs\").prop(\"checked\") == true)
                 noExternalDutyHrs =\$(\"#noExternalDutyHrs\").val() ;
        
        var globalData = null;

        var externalDutyUrl = '{{ externalDutyUrl }}';

        \$('#fdtr-list').on('preXhr.dt', function ( e, settings, data ) {
            data.selectedUser = user;
            data.fdtrFrom = fdtrFrom;
            data.fdtrTo = fdtrTo;
            data.fdtrStatus = fdtrStatusSelected;
            data.noExternalDutyHrs = noExternalDutyHrs;
            globalData = data;
            return data;
        });    

        swissinside.simpleDataTable(\$(\"#fdtr-list\"), {
            \"bProcessing\": true,
            \"bServerSide\": true,
            \"sAjaxSource\": \"{{ url('fdtr_list_search') }}\",
            \"aoColumns\" : [
                null, // Empno
                null, // First name
                null, // Last name
                null, // Period

                null, // Easyjet Duty time
                null, // External Duty time
                null, // Total duty time

                {\"bSortable\": false}, // status

                {\"bSortable\": false}, // Id
                {\"bVisible\": false}, // date for those who have access to dtime request
                {\"bVisible\": false}, // user id
            ],
            \"aaSorting\" : [[3, \"desc\"]],
            \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                // Generate buttons
                if(aData[13] == 1){
                    \$(\"td:eq(8)\", nRow).html(
                            '<span class=\"text text-danger\">You have been locked out for now. Please contact to HR</span>'
                        );
                }
                else{
                    if (aData[9]) {
                        if(aData[11] == 1){
                            \$(\"td:eq(8)\", nRow).html(
                                '<span class=\"text text-warning\">You have selected no external duty for this month</span>'
                            );
                        }
                    } else {
                        \$(\"td:eq(8)\", nRow).html('');
                    } 
                    switch(aData[7]) {
                        case \"nofilled\" :
                            \$(\"td:eq(7)\", nRow).html(
                                '<div class=\"badge badge-warning\">Not filled</div>'
                            );
                            var url = externalDutyUrl.replace(\":monthlyReport\", aData[8]);
                            \$(\"td:eq(8)\", nRow).html(
                                '<a class=\"btn btn-primary btn-small\" href=\"' + url + '\"><i class=\"icon-time\"></i> Add External DTime</a><a data-toggle=\"modal\" data-monthly-report-id=\"'+aData[8]+'\" class=\"noExternalDtimeID\"><button type=\"button\" class=\"btn btn-primary btn-small\" id=\"no-external-dtime\" data-toggle=\"modal\" data-target=\"#noExternalDutyModal\" ><i class=\"icon-time\"></i> No External DTime</button></a>'
                            );
                            break;

                        case \"rejected\" :
                            \$(\"td:eq(7)\", nRow).html(
                                '<div class=\"badge badge-danger\">Rejected</div>'
                            );
                            break;
                        case \"validated\" :
                            \$(\"td:eq(7)\", nRow).html(
                                '<div class=\"badge badge-success\">Validated</div>'
                            );
                            var url = externalDutyUrl.replace(\":monthlyReport\", aData[8]);
                            if(aData[11] == 1  && aData[13] != 1 ){
                                \$(\"td:eq(8)\", nRow).html(
                                    '<span class=\"text text-warning\">You have selected no external duty for this month</span>'
                                );
                            } else {
                                \$(\"td:eq(8)\", nRow).html(
                                    '<a class=\"btn btn-primary btn-small\" href=\"' + url + '\"><i class=\"icon-time\"></i> View External DTime</a>'
                                );
                            }
                            break;
                        case \"pending\" :
                            \$(\"td:eq(7)\", nRow).html(
                                '<div class=\"badge badge-info\">Pending</div>'
                            );
                            var url = externalDutyUrl.replace(\":monthlyReport\", aData[8]);
                            \$(\"td:eq(8)\", nRow).html(
                                '<a class=\"btn btn-primary btn-small\" href=\"' + url + '\"><i class=\"icon-time\"></i> Edit External DTime</a>'
                            );
                            break;
                    }
                }

                if (aData[7] != \"validated\") {
                    \$(\"td:eq(5)\", nRow).html(
                        '<span style=\"text-decoration: line-through; color:#aaa;\">' + aData[5] + '</span>'
                    );
                };

                if (aData[7] == \"\") {
                    \$(\"td:eq(5)\", nRow).html(
                        '-'
                    );
                };
                
                              

                var \$th = \$(this).find(\"tr:first th\");
                \$(\"td\", nRow).each(function(id, field) {
                    if(\$th.eq(id).hasClass(\"hidden-xs\")) \$(this).addClass('hidden-xs');
                });


                
                
            }
        });  

        \$(\"#get-csv-btn\").on(\"click\", function() {
            if (!globalData) { return };
            var url = \"{{ url('fdtr_generate_csv') }}?\" + \$.param(globalData);
            \$(this).attr(\"disabled\", \"disabled\");
            \$(this).text(\"Please change top filter to download new csv ...\");
            window.location.href = url;
        });
    });

    \$(document).on(\"click\", \".noExternalDtimeID\", function () {
     var id = \$(this).data('monthly-report-id');
     \$('#monthly-report-id').val(id);
    });
 
</script>
{% endblock specificJs %}
        


{% block container %}
 <!-- Modal -->
<div id=\"noExternalDutyModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Confirm</h4>
      </div>
      <form action=\"{{ url('no_external_duty') }}\" method=\"PUT\">
          <input type=\"hidden\" name=\"monthly-report-id\" id=\"monthly-report-id\">
          <div class=\"modal-body\">
            <p>Are you sure that you don't have any external duty hrs for this month?</p>
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

<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">EDTR data.</h1>  
        <div id=\"description_help\">Welcome to EDTR system. Here you can check all your External Duty. They are updated each month around the 2nd.</div>
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
                        
                        {% if is_granted(\"ROLE_FDTR_ADMIN\") %}
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"fdtrUser\">User</label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"fdtrUser\" name=\"fdtrUser\" value=\"{{ fdtrUser }}\" class=\"form-control\">
                                </div>
                            </div>
                        {% endif %}

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"fdtrFrom\">From</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"fdtrFrom\" name=\"fdtrFrom\" value=\"{{ fdtrFrom }}\" class=\"form-control\" data-enable-datepicker=\"true\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"fdtrTo\">To</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"fdtrTo\" name=\"fdtrTo\" value=\"{{ fdtrTo }}\" class=\"form-control\" data-enable-datepicker=\"true\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"fdtrTo\">External duty time status</label>
                            <div class=\"controls\">
                                <select name=\"fdtrStatus[]\" id=\"fdtrStatus\" multiple=\"multiple\">
                                    {% for key, value in statusList %}
                                        <option {{ key in selectedStatus ? ' selected=\"selected\" ' : \"\" }} value=\"{{ key }}\">{{ value }}</option>
                                    {% endfor %}
                                </select>
                            </div>
                        </div>
                        
                        {% if is_granted(\"ROLE_FDTR_ADMIN\") %}        
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"fdtrExternalDuty\">No External duty Hours</label>
                                <div class=\"controls\">
                                    <input type=\"checkbox\" value =\"1\" {% if noExternalDutyHrs==1 %}checked=\"checked\"{% endif %} name=\"noExternalDutyHrs\" id=\"noExternalDutyHrs\">
                                </div>
                            </div>
                        {% endif %}
                        
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
                    <h5>EDTR history</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"fdtr-list\">
                        <thead>
                            <tr>
                                <th>Empno</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Period</th>
                                <th>DT</th>
                                <th>external DT</th>
                                <th>Total DT</th>
                                <th>Status</th>
                                <th style=\"width:20%;\">Action</th>
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
            
{% endblock container %}", "@EasyjetFdtr/Fdtr/index.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\FdtrBundle\\Resources\\views\\Fdtr\\index.html.twig");
    }
}
