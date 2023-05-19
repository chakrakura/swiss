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

/* @EasyjetUman/Admin/Rostering/rosteringAll.html.twig */
class __TwigTemplate_553aeac7c715074f0db6c640bba4703f57034a54b130fb46d4bf4f8ac26dd408 extends Template
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
        return "@EasyjetUman/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetUman/Admin/Rostering/rosteringAll.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetUman/Admin/Rostering/rosteringAll.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetUman/Admin/Rostering/rosteringAll.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetUman/Base/structure.html.twig", "@EasyjetUman/Admin/Rostering/rosteringAll.html.twig", 1);
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

        echo "Rostering team";
        
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

        // line 7
        $this->displayParentBlock("specificJs", $context, $blocks);
        echo "

<script>
    \$(function() {
        \$(\"#employees-list\").dataTable( {
            \"bJQueryUI\": true,
            \"sPaginationType\": \"full_numbers\",
            \"sDom\": '<\"\"l>t<\"F\"fpr>',
            \"bProcessing\": true,
            \"sAjaxSource\": \"";
        // line 16
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("uman_admin_rostering_all_search");
        echo "\",
            \"aaSorting\" : [[0, \"desc\"]],
            \"columnDefs\": [ {\"targets\": 'no-sort',\"orderable\": false} ],

            \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                // Generate buttons
                var typeRow = \$(\"td:eq(2)\", nRow);
                switch(aData[2]) {
                    case \"success\":
                        typeRow.html('<span class=\"badge badge-success\">' + aData[2] + '</span>');
                        break;
                    case \"error\" :
                        typeRow.html('<span class=\"badge badge-danger\">' + aData[2] + '</span>');
                        break;
                }

                \$(\"td:eq(3)\", nRow).html(
                    \$('<input type=\"checkbox\">').attr(\"checked\", aData[3] == 1).data(\"idUser\", aData[4])
                );
                    
                \$(\"td:eq(4)\", nRow).html(
                    '<a  class=\"btn btn-danger rosteringTeamID\" data-rostering-id='+aData[4]+' data-toggle=\"modal\" data-target=\"#rosteringModal\"><i class=\"icon-remove\"></i> Remove</a> '
                );
                var \$th = \$(this).find(\"tr:first th\");
                \$(\"td\", nRow).each(function(id, field) {
                    if(\$th.eq(id).hasClass(\"hidden-xs\")) \$(this).addClass('hidden-xs');
                });
            },
            \"fnDrawCallback\" : function() {
                var checkboxClass = 'icheckbox_flat-blue';
                var radioClass = 'iradio_flat-blue';
                \$('#employees-list input[type=checkbox]').iCheck({
                    checkboxClass: checkboxClass,
                    radioClass: radioClass
                }).on(\"ifToggled\", function() {
                    
                    var url = \"rostering-admin/assoc-\" + \$(this).data(\"idUser\") + \"/\" + ((\$(this).is(\":checked\")) ? \"yes\" : \"no\");
                    \$.ajax({
                        type: \"POST\",
                        url: url,
                        success: function(jsonResponse) {
                            if(jsonResponse.success) {
                                \$(\"#employees-list\").dataTable().fnReloadAjax();
                            }
                            else {
                                bootbox.alert(jsonResponse.error);
                            }
                            
                        },
                        error: function() {
                            bootbox.alert(\"Unable to change admin tag\");
                        },
                        dataType: \"json\"
                    });
                });
            }
        } );
    });

    \$(document).on(\"click\", \".rosteringTeamID\", function () {
        var id = \$(this).data('rostering-id');
        \$('#rostering-id').val(id);
    });
    
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 85
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 86
        echo "
<!-- Modal -->
<div id=\"rosteringModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Confirm</h4>
      </div>
      <form action=\"";
        // line 97
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("uman_admin_rostering_remove");
        echo "\" method=\"POST\">
          <input type=\"hidden\" name=\"rostering-id\" id=\"rostering-id\">
          <div class=\"modal-body\">
            <p>Are you sure that you want to remove this employee from the rostering team ?</p>
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
        <h1 id=\"titre_help\">Rostering team</h1>         
        <div id=\"description_help\">Here, you can select the employee whose are in the rostering team. These employees will receive the tasks assigned to the \"rostering\" team.</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 122
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 122, $context, $this->getSourceContext());
        echo "
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a class=\"btn btn-primary\" data-toggle=\"modal\" href=\"";
        // line 128
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("uman_admin_rostering_add_member");
        echo "\" data-target=\"#myModal\"><i class=\"icon-plus\"></i> Add a rostering member</a>
        </div>
    </div>
        
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Employees</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"employees-list\">
                        <thead>
                        <tr>
                        <th class=\"hidden-xs\">Empno</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th class=\"no-sort\">Rostering admin</th>
                        <th class=\"no-sort\" style=\"width:180px\">Actions</th>
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

<!-- Add Modal -->
<div class=\"modal fade\" id=\"myModal\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Add a rostering member</h4>
      </div>
      <div class=\"modal-body\">
        ...
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetUman/Admin/Rostering/rosteringAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  240 => 128,  231 => 122,  203 => 97,  190 => 86,  180 => 85,  104 => 16,  92 => 7,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetUman/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Rostering team{% endblock %}

{% block specificJs %}
{{ parent() }}

<script>
    \$(function() {
        \$(\"#employees-list\").dataTable( {
            \"bJQueryUI\": true,
            \"sPaginationType\": \"full_numbers\",
            \"sDom\": '<\"\"l>t<\"F\"fpr>',
            \"bProcessing\": true,
            \"sAjaxSource\": \"{{ url('uman_admin_rostering_all_search') }}\",
            \"aaSorting\" : [[0, \"desc\"]],
            \"columnDefs\": [ {\"targets\": 'no-sort',\"orderable\": false} ],

            \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                // Generate buttons
                var typeRow = \$(\"td:eq(2)\", nRow);
                switch(aData[2]) {
                    case \"success\":
                        typeRow.html('<span class=\"badge badge-success\">' + aData[2] + '</span>');
                        break;
                    case \"error\" :
                        typeRow.html('<span class=\"badge badge-danger\">' + aData[2] + '</span>');
                        break;
                }

                \$(\"td:eq(3)\", nRow).html(
                    \$('<input type=\"checkbox\">').attr(\"checked\", aData[3] == 1).data(\"idUser\", aData[4])
                );
                    
                \$(\"td:eq(4)\", nRow).html(
                    '<a  class=\"btn btn-danger rosteringTeamID\" data-rostering-id='+aData[4]+' data-toggle=\"modal\" data-target=\"#rosteringModal\"><i class=\"icon-remove\"></i> Remove</a> '
                );
                var \$th = \$(this).find(\"tr:first th\");
                \$(\"td\", nRow).each(function(id, field) {
                    if(\$th.eq(id).hasClass(\"hidden-xs\")) \$(this).addClass('hidden-xs');
                });
            },
            \"fnDrawCallback\" : function() {
                var checkboxClass = 'icheckbox_flat-blue';
                var radioClass = 'iradio_flat-blue';
                \$('#employees-list input[type=checkbox]').iCheck({
                    checkboxClass: checkboxClass,
                    radioClass: radioClass
                }).on(\"ifToggled\", function() {
                    
                    var url = \"rostering-admin/assoc-\" + \$(this).data(\"idUser\") + \"/\" + ((\$(this).is(\":checked\")) ? \"yes\" : \"no\");
                    \$.ajax({
                        type: \"POST\",
                        url: url,
                        success: function(jsonResponse) {
                            if(jsonResponse.success) {
                                \$(\"#employees-list\").dataTable().fnReloadAjax();
                            }
                            else {
                                bootbox.alert(jsonResponse.error);
                            }
                            
                        },
                        error: function() {
                            bootbox.alert(\"Unable to change admin tag\");
                        },
                        dataType: \"json\"
                    });
                });
            }
        } );
    });

    \$(document).on(\"click\", \".rosteringTeamID\", function () {
        var id = \$(this).data('rostering-id');
        \$('#rostering-id').val(id);
    });
    
</script>
{% endblock specificJs %}
        


{% block container %}

<!-- Modal -->
<div id=\"rosteringModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Confirm</h4>
      </div>
      <form action=\"{{ url('uman_admin_rostering_remove') }}\" method=\"POST\">
          <input type=\"hidden\" name=\"rostering-id\" id=\"rostering-id\">
          <div class=\"modal-body\">
            <p>Are you sure that you want to remove this employee from the rostering team ?</p>
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
        <h1 id=\"titre_help\">Rostering team</h1>         
        <div id=\"description_help\">Here, you can select the employee whose are in the rostering team. These employees will receive the tasks assigned to the \"rostering\" team.</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ macros.wizz() }}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a class=\"btn btn-primary\" data-toggle=\"modal\" href=\"{{ url('uman_admin_rostering_add_member') }}\" data-target=\"#myModal\"><i class=\"icon-plus\"></i> Add a rostering member</a>
        </div>
    </div>
        
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Employees</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"employees-list\">
                        <thead>
                        <tr>
                        <th class=\"hidden-xs\">Empno</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th class=\"no-sort\">Rostering admin</th>
                        <th class=\"no-sort\" style=\"width:180px\">Actions</th>
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

<!-- Add Modal -->
<div class=\"modal fade\" id=\"myModal\" role=\"dialog\" aria-labelledby=\"myModalLabel\" aria-hidden=\"true\">
  <div class=\"modal-dialog\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
        <h4 class=\"modal-title\" id=\"myModalLabel\">Add a rostering member</h4>
      </div>
      <div class=\"modal-body\">
        ...
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
        <button type=\"button\" class=\"btn btn-primary\">Save changes</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
   
{% endblock container %}", "@EasyjetUman/Admin/Rostering/rosteringAll.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\UmanBundle\\Resources\\views\\Admin\\Rostering\\rosteringAll.html.twig");
    }
}
