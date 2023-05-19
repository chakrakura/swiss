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

/* @EasyjetFdtr/Admin/rights.html.twig */
class __TwigTemplate_a254f28b295a0bf80a18617deedfdcce3abb5b247c48ac8b0188cfa7fa6195d9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetFdtr/Admin/rights.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetFdtr/Admin/rights.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetFdtr/Admin/rights.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetFdtr/Base/structure.html.twig", "@EasyjetFdtr/Admin/rights.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
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
        var user = \$(\"#fdtrUser\").val();
        
        \$('#fdtr-user-list').on('preXhr.dt', function ( e, settings, data ) {
            data.selectedUser = user;
            return data;
        });

        swissinside.simpleDataTable(\$(\"#fdtr-user-list\"), {
            \"bProcessing\": true,
            \"bServerSide\": true,
            \"sAjaxSource\": \"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fdtr_admin_list_search");
        echo "\",
            \"aoColumns\" : [
                null, // Empno
                null, // First name
                null, // Last name
                null, // allowDtimeRequest
                null, // dtimeUserBlock
               {\"bSortable\": false} // Id,
                
            ],
            \"aaSorting\" : [[0, \"desc\"]],
            \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
              
            var allowDtimeRequestValue = aData[3];
                switch (allowDtimeRequestValue) {
                    case 1 :
                        allowDtimeRequestValue = '<span class=\"badge badge-success\">YES</span>';
                        break;
                    case 0 :
                        allowDtimeRequestValue = '<span class=\"badge badge-danger\">NO</span>';
                        break;
                    default :
                        allowDtimeRequestValue = '<span class=\"badge badge-info\">' + aData[3] + '</span>';
                        break;
                }

                \$(\"td:eq(3)\", nRow).html(allowDtimeRequestValue ); 
                
                var dtimeUserBlock = aData[4];
                switch (dtimeUserBlock) {
                    case 1 :
                        dtimeUserBlock = '<span class=\"badge badge-danger\">YES</span>';
                        break;
                    case 0 :
                        dtimeUserBlock = '<span class=\"badge badge-success\">NO</span>';
                        break;
                    default :
                        dtimeUserBlock = '<span class=\"badge badge-info\">' + aData[4] + '</span>';
                        break;
                }
                
                \$(\"td:eq(4)\", nRow).html(dtimeUserBlock ); 
                
                \$(\"td:eq(5)\", nRow).html(
                            ' <a data-toggle=\"modal\" data-id-user='+aData[5]+'#'+aData[3]+'#'+aData[4]+' class=\"allowDtimeAccessID\"><button type=\"button\" class=\"btn btn-primary btn-small\" id=\"allow-dtime\" data-toggle=\"modal\" data-target=\"#allowDtimeModel\" ><i class=\"icon-time\"></i> Access Window</button></a>'
                        );
                
                
                var \$th = \$(this).find(\"tr:first th\");
                \$(\"td\", nRow).each(function(id, field) {
                    if(\$th.eq(id).hasClass(\"hidden-xs\")) \$(this).addClass('hidden-xs');
                });


            }
        });
    });

    \$(document).on(\"click\", \".allowDtimeAccessID\", function () {
    var id_access = \$(this).data('id-user');
    var arr_var = id_access.split(\"#\");
    \$('#id-user').val(arr_var[0]);
    \$('input[name=allow_dtime_request][value='+arr_var[1]+']').prop('checked', 'checked');
    \$('input[name=dtime_user_block][value='+arr_var[2]+']').prop('checked', 'checked');
    });
 
</script>


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 90
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 92
        echo "<!-- Allow Dtime model -->
<form action=\"";
        // line 93
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("fdtr_allow_dtime");
        echo "\" method=\"PUT\">
    <input type=\"hidden\" name=\"id-user\" id=\"id-user\">
    <div id=\"allowDtimeModel\" class=\"modal fade\" role=\"dialog\">
      <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h4 class=\"modal-title\"><div id=\"modelID\">User Rights</div></h4>
          </div>
          <div class=\"modal-body\">
            <p>Allow Dtime</p>
            <input type=\"radio\" name=\"allow_dtime_request\" value=\"1\" >YES
            <input type=\"radio\" name=\"allow_dtime_request\" value=\"0\" >NO
            <p>&nbsp;</p>
            <p>Block User</p>
            <input type=\"radio\" name=\"dtime_user_block\" value=\"1\">YES
            <input type=\"radio\" name=\"dtime_user_block\" value=\"0\">NO
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
            <input type=\"submit\"  class=\"btn btn-success\" value=\"Save\"/>
          </div>
        </div>

      </div>
    </div>
</form>
<!-- End Allow Dtime model -->


    <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">List of users</h1>  
            <div id=\"description_help\">Here you can edit the users and setup their dtime access. You can also block/unblock the user.</div>
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
                    
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"fdtrUser\">User</label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"fdtrUser\" name=\"fdtrUser\" value=\"";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["fdtrUser"]) || array_key_exists("fdtrUser", $context) ? $context["fdtrUser"] : (function () { throw new RuntimeError('Variable "fdtrUser" does not exist.', 148, $this->source); })()), "html", null, true);
        echo "\" class=\"form-control\">
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
        // line 167
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 167, $context, $this->getSourceContext());
        echo "
            </div>
        </div>
            
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>List of users</h5>
                </div>
               
               <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"fdtr-user-list\">
                        <thead>
                            <tr>
                                <th>Employee number</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Dtime Access</th>
                                <th>User Block</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
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
        return "@EasyjetFdtr/Admin/rights.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 167,  241 => 148,  183 => 93,  180 => 92,  170 => 90,  90 => 20,  62 => 4,  51 => 1,  49 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@EasyjetFdtr/Base/structure.html.twig\" %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block specificJs %}{{ parent() }}

<script>
    
    
    \$(function() {
        var user = \$(\"#fdtrUser\").val();
        
        \$('#fdtr-user-list').on('preXhr.dt', function ( e, settings, data ) {
            data.selectedUser = user;
            return data;
        });

        swissinside.simpleDataTable(\$(\"#fdtr-user-list\"), {
            \"bProcessing\": true,
            \"bServerSide\": true,
            \"sAjaxSource\": \"{{ url('fdtr_admin_list_search') }}\",
            \"aoColumns\" : [
                null, // Empno
                null, // First name
                null, // Last name
                null, // allowDtimeRequest
                null, // dtimeUserBlock
               {\"bSortable\": false} // Id,
                
            ],
            \"aaSorting\" : [[0, \"desc\"]],
            \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
              
            var allowDtimeRequestValue = aData[3];
                switch (allowDtimeRequestValue) {
                    case 1 :
                        allowDtimeRequestValue = '<span class=\"badge badge-success\">YES</span>';
                        break;
                    case 0 :
                        allowDtimeRequestValue = '<span class=\"badge badge-danger\">NO</span>';
                        break;
                    default :
                        allowDtimeRequestValue = '<span class=\"badge badge-info\">' + aData[3] + '</span>';
                        break;
                }

                \$(\"td:eq(3)\", nRow).html(allowDtimeRequestValue ); 
                
                var dtimeUserBlock = aData[4];
                switch (dtimeUserBlock) {
                    case 1 :
                        dtimeUserBlock = '<span class=\"badge badge-danger\">YES</span>';
                        break;
                    case 0 :
                        dtimeUserBlock = '<span class=\"badge badge-success\">NO</span>';
                        break;
                    default :
                        dtimeUserBlock = '<span class=\"badge badge-info\">' + aData[4] + '</span>';
                        break;
                }
                
                \$(\"td:eq(4)\", nRow).html(dtimeUserBlock ); 
                
                \$(\"td:eq(5)\", nRow).html(
                            ' <a data-toggle=\"modal\" data-id-user='+aData[5]+'#'+aData[3]+'#'+aData[4]+' class=\"allowDtimeAccessID\"><button type=\"button\" class=\"btn btn-primary btn-small\" id=\"allow-dtime\" data-toggle=\"modal\" data-target=\"#allowDtimeModel\" ><i class=\"icon-time\"></i> Access Window</button></a>'
                        );
                
                
                var \$th = \$(this).find(\"tr:first th\");
                \$(\"td\", nRow).each(function(id, field) {
                    if(\$th.eq(id).hasClass(\"hidden-xs\")) \$(this).addClass('hidden-xs');
                });


            }
        });
    });

    \$(document).on(\"click\", \".allowDtimeAccessID\", function () {
    var id_access = \$(this).data('id-user');
    var arr_var = id_access.split(\"#\");
    \$('#id-user').val(arr_var[0]);
    \$('input[name=allow_dtime_request][value='+arr_var[1]+']').prop('checked', 'checked');
    \$('input[name=dtime_user_block][value='+arr_var[2]+']').prop('checked', 'checked');
    });
 
</script>


{% endblock specificJs %}
{% block container -%}
    
<!-- Allow Dtime model -->
<form action=\"{{ url('fdtr_allow_dtime') }}\" method=\"PUT\">
    <input type=\"hidden\" name=\"id-user\" id=\"id-user\">
    <div id=\"allowDtimeModel\" class=\"modal fade\" role=\"dialog\">
      <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h4 class=\"modal-title\"><div id=\"modelID\">User Rights</div></h4>
          </div>
          <div class=\"modal-body\">
            <p>Allow Dtime</p>
            <input type=\"radio\" name=\"allow_dtime_request\" value=\"1\" >YES
            <input type=\"radio\" name=\"allow_dtime_request\" value=\"0\" >NO
            <p>&nbsp;</p>
            <p>Block User</p>
            <input type=\"radio\" name=\"dtime_user_block\" value=\"1\">YES
            <input type=\"radio\" name=\"dtime_user_block\" value=\"0\">NO
          </div>
          <div class=\"modal-footer\">
            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Cancel</button>
            <input type=\"submit\"  class=\"btn btn-success\" value=\"Save\"/>
          </div>
        </div>

      </div>
    </div>
</form>
<!-- End Allow Dtime model -->


    <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">List of users</h1>  
            <div id=\"description_help\">Here you can edit the users and setup their dtime access. You can also block/unblock the user.</div>
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
                    
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"fdtrUser\">User</label>
                                <div class=\"controls\">
                                    <input type=\"text\" id=\"fdtrUser\" name=\"fdtrUser\" value=\"{{ fdtrUser }}\" class=\"form-control\">
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
        </div>
            
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>List of users</h5>
                </div>
               
               <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"fdtr-user-list\">
                        <thead>
                            <tr>
                                <th>Employee number</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th>Dtime Access</th>
                                <th>User Block</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
                   
            </div>
        </div>
    </div>
{% endblock %}
", "@EasyjetFdtr/Admin/rights.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\FdtrBundle\\Resources\\views\\Admin\\rights.html.twig");
    }
}
