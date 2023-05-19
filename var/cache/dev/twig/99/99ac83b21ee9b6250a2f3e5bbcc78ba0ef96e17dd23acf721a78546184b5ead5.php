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

/* @EasyjetEpayslip/Epayslip/list.html.twig */
class __TwigTemplate_fba8f4769957c50960ed22fdb408e6b4840f09381a23399695d275be514a8ddf extends Template
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
        return "@EasyjetEpayslip/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEpayslip/Epayslip/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEpayslip/Epayslip/list.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetEpayslip/Epayslip/list.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetEpayslip/Base/structure.html.twig", "@EasyjetEpayslip/Epayslip/list.html.twig", 1);
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

        echo "View ePayslips";
        
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

    \$(function() {
        var user = \$(\"#epaySlipUser\").val();
        var epaySlipFrom = \$(\"#epaySlipFrom\").val();
        var epaySlipTo = \$(\"#epaySlipTo\").val();
        var globalData = null;

        \$('#epay-slip-list').on('preXhr.dt', function ( e, settings, data ) {
            data.selectedUser = user;
            data.epaySlipFrom = epaySlipFrom;
            data.epaySlipTo = epaySlipTo;
            globalData = data;
            return data;
        });

        \$('#epay-slip-list').on('xhr.dt', function (e, settings, json, xhr) {
               \$(\"#totalGgccChf\").html(json.totalGgccChf);
        });  

        swissinside.simpleDataTable(\$(\"#epay-slip-list\"), {

            \"processing\": true,
            \"sAjaxSource\": \"";
        // line 31
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("epayslip_list_search");
        echo "\",
            \"columns\": [
                {data: 'nom', \"width\": \"25%\"},
                {data: 'prenom'},
                {data: 'from'},
                {data: 'to'},
                {data: null}
            ],

            \"fnRowCallback\": function( nRow, aData, iDisplayIndex ) {
                var cCReportUrl =  \"";
        // line 41
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("epayslip_cc_report", ["cCReportId" => ":id"]);
        echo " \";
                var paySlipUrl =  \"";
        // line 42
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("epayslip_report", ["paySlipId" => ":id"]);
        echo " \";
                
                if ( aData['cc_report_id']  && aData['payslip_id']  )
                {
                    cCReportUrl = cCReportUrl.replace(\":id\", aData['cc_report_id']);
                    paySlipUrl = paySlipUrl.replace(\":id\", aData['payslip_id']);
                    \$('td:eq(4)', nRow).html( '<a href=\"' + paySlipUrl + '\" target=\"_blank\"><img src= \"/images/epayslip/payslip_grey.png\" alt=\"cCReport\" /></a>  <a href=\"' + cCReportUrl + '\" target=\"_blank\"><img src= \"/images/epayslip/ggcc_blue.png\" alt=\"ePayslip\" /></a>' );
                }
                else if ( aData['cc_report_id'] )
                {
                    cCReportUrl = cCReportUrl.replace(\":id\", aData['cc_report_id']);
                    \$('td:eq(4)', nRow).html( '<a href= \"' + cCReportUrl + '\" target=\"_blank\"><img src= \"/images/epayslip/ggcc_blue.png\" alt=\"cCReport\" /></a>' );
                }
                else if ( aData['payslip_id'] )
                {
                    paySlipUrl = paySlipUrl.replace(\":id\", aData['payslip_id']);
                    \$('td:eq(4)', nRow).html( '<a href=\"' + paySlipUrl + '\" target=\"_blank\"><img src= \"/images/epayslip/payslip_grey.png\" alt=\"ePayslip\" /></a>' );
                }
            },

            \"columnDefs\": [ {\"targets\": 'no-sort', \"orderable\": false } ]
        });    
     
    });

    \$('#epaySlipFrom').datepicker({
        format: 'dd/mm/yyyy',
        endDate: '30/09/2016',
        autoclose: true

    });

    \$('#epaySlipTo').datepicker({
        format: 'dd/mm/yyyy',
        endDate: '30/09/2016',
        autoclose: true

    });
 
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 87
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 88
        echo "
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">View epaySlip</h1>  
        <div id=\"description_help\">
            <div class=\"alert alert-info\">
                The payslips will now be available in Workday (<a href=\"https://wd3.myworkday.com/easyjet/d/home.htmld\">https://wd3.myworkday.com/easyjet/d/home.htmld</a>).<br>Any payslips prior to Oct 16 will still be available in ePayslips
            </div>
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
                        <h5>Search</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        
                        ";
        // line 112
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EPAYSLIP_ADMIN")) {
            // line 113
            echo "                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"epaySlipUser\">Search a payslip prior to October 2016</label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"epaySlipUser\" placeholder = \"Search User\" name=\"epaySlipUser\" value=\"";
            // line 116
            echo twig_escape_filter($this->env, (isset($context["epaySlipUser"]) || array_key_exists("epaySlipUser", $context) ? $context["epaySlipUser"] : (function () { throw new RuntimeError('Variable "epaySlipUser" does not exist.', 116, $this->source); })()), "html", null, true);
            echo "\" class=\"form-control\">
                                </div>
                            </div>
                        ";
        }
        // line 120
        echo "
                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"epaySlipFrom\">From</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"epaySlipFrom\" name=\"epaySlipFrom\" value=\"";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["epaySlipFrom"]) || array_key_exists("epaySlipFrom", $context) ? $context["epaySlipFrom"] : (function () { throw new RuntimeError('Variable "epaySlipFrom" does not exist.', 124, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\" data-enable-datepicker=\"true\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"epaySlipTo\">To</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"epaySlipTo\" name=\"epaySlipTo\" value=\"";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["epaySlipTo"]) || array_key_exists("epaySlipTo", $context) ? $context["epaySlipTo"] : (function () { throw new RuntimeError('Variable "epaySlipTo" does not exist.', 131, $this->source); })()), "html", null, true);
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
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Your Results</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"epay-slip-list\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Pr&eacute;nom</th>
                                <th>From</th>
                                <th>To</th>
                                <th class=\"no-sort\">Actions</th>
                            </tr>
                        </thead>

                        <tbody>

                        </tbody>
                        ";
        // line 172
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_EPAYSLIP_ADMIN")) {
            // line 173
            echo "                            <tr>
                                <td colspan=\"4\" style=\"text-align:right\"><b>Total GGCC : </b></td>
                                <td id =\"totalGgccChf\"></td>
                            </tr> 
                        ";
        }
        // line 178
        echo "                    </table>
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
        return "@EasyjetEpayslip/Epayslip/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 178,  300 => 173,  298 => 172,  254 => 131,  244 => 124,  238 => 120,  231 => 116,  226 => 113,  224 => 112,  198 => 88,  188 => 87,  136 => 42,  132 => 41,  119 => 31,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetEpayslip/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}View ePayslips{% endblock %}

{% block specificJs %}{{ parent() }}

<script>

    \$(function() {
        var user = \$(\"#epaySlipUser\").val();
        var epaySlipFrom = \$(\"#epaySlipFrom\").val();
        var epaySlipTo = \$(\"#epaySlipTo\").val();
        var globalData = null;

        \$('#epay-slip-list').on('preXhr.dt', function ( e, settings, data ) {
            data.selectedUser = user;
            data.epaySlipFrom = epaySlipFrom;
            data.epaySlipTo = epaySlipTo;
            globalData = data;
            return data;
        });

        \$('#epay-slip-list').on('xhr.dt', function (e, settings, json, xhr) {
               \$(\"#totalGgccChf\").html(json.totalGgccChf);
        });  

        swissinside.simpleDataTable(\$(\"#epay-slip-list\"), {

            \"processing\": true,
            \"sAjaxSource\": \"{{ url('epayslip_list_search') }}\",
            \"columns\": [
                {data: 'nom', \"width\": \"25%\"},
                {data: 'prenom'},
                {data: 'from'},
                {data: 'to'},
                {data: null}
            ],

            \"fnRowCallback\": function( nRow, aData, iDisplayIndex ) {
                var cCReportUrl =  \"{{ url('epayslip_cc_report', {\"cCReportId\" : \":id\"} )}} \";
                var paySlipUrl =  \"{{ url('epayslip_report', {\"paySlipId\" : \":id\"} )}} \";
                
                if ( aData['cc_report_id']  && aData['payslip_id']  )
                {
                    cCReportUrl = cCReportUrl.replace(\":id\", aData['cc_report_id']);
                    paySlipUrl = paySlipUrl.replace(\":id\", aData['payslip_id']);
                    \$('td:eq(4)', nRow).html( '<a href=\"' + paySlipUrl + '\" target=\"_blank\"><img src= \"/images/epayslip/payslip_grey.png\" alt=\"cCReport\" /></a>  <a href=\"' + cCReportUrl + '\" target=\"_blank\"><img src= \"/images/epayslip/ggcc_blue.png\" alt=\"ePayslip\" /></a>' );
                }
                else if ( aData['cc_report_id'] )
                {
                    cCReportUrl = cCReportUrl.replace(\":id\", aData['cc_report_id']);
                    \$('td:eq(4)', nRow).html( '<a href= \"' + cCReportUrl + '\" target=\"_blank\"><img src= \"/images/epayslip/ggcc_blue.png\" alt=\"cCReport\" /></a>' );
                }
                else if ( aData['payslip_id'] )
                {
                    paySlipUrl = paySlipUrl.replace(\":id\", aData['payslip_id']);
                    \$('td:eq(4)', nRow).html( '<a href=\"' + paySlipUrl + '\" target=\"_blank\"><img src= \"/images/epayslip/payslip_grey.png\" alt=\"ePayslip\" /></a>' );
                }
            },

            \"columnDefs\": [ {\"targets\": 'no-sort', \"orderable\": false } ]
        });    
     
    });

    \$('#epaySlipFrom').datepicker({
        format: 'dd/mm/yyyy',
        endDate: '30/09/2016',
        autoclose: true

    });

    \$('#epaySlipTo').datepicker({
        format: 'dd/mm/yyyy',
        endDate: '30/09/2016',
        autoclose: true

    });
 
</script>

{% endblock specificJs %}
        


{% block container %}

<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">View epaySlip</h1>  
        <div id=\"description_help\">
            <div class=\"alert alert-info\">
                The payslips will now be available in Workday (<a href=\"https://wd3.myworkday.com/easyjet/d/home.htmld\">https://wd3.myworkday.com/easyjet/d/home.htmld</a>).<br>Any payslips prior to Oct 16 will still be available in ePayslips
            </div>
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
                        <h5>Search</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        
                        {% if is_granted(\"ROLE_EPAYSLIP_ADMIN\") %}
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"epaySlipUser\">Search a payslip prior to October 2016</label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"epaySlipUser\" placeholder = \"Search User\" name=\"epaySlipUser\" value=\"{{ epaySlipUser }}\" class=\"form-control\">
                                </div>
                            </div>
                        {% endif %}

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"epaySlipFrom\">From</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"epaySlipFrom\" name=\"epaySlipFrom\" value=\"{{ epaySlipFrom }}\" class=\"form-control\" data-enable-datepicker=\"true\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\" for=\"epaySlipTo\">To</label>
                            <div class=\"controls\">
                                <input type=\"text\" id=\"epaySlipTo\" name=\"epaySlipTo\" value=\"{{ epaySlipTo }}\" class=\"form-control\" data-enable-datepicker=\"true\">
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
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Your Results</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"epay-slip-list\">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Pr&eacute;nom</th>
                                <th>From</th>
                                <th>To</th>
                                <th class=\"no-sort\">Actions</th>
                            </tr>
                        </thead>

                        <tbody>

                        </tbody>
                        {% if is_granted(\"ROLE_EPAYSLIP_ADMIN\") %}
                            <tr>
                                <td colspan=\"4\" style=\"text-align:right\"><b>Total GGCC : </b></td>
                                <td id =\"totalGgccChf\"></td>
                            </tr> 
                        {% endif %}
                    </table>
                </div>
            </div>
        </div>        
    </div>
</div>
            
{% endblock container %}", "@EasyjetEpayslip/Epayslip/list.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EpayslipBundle\\Resources\\views\\Epayslip\\list.html.twig");
    }
}
