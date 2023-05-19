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

/* @EasyjetUman/Admin/Applications/list.html.twig */
class __TwigTemplate_bec2e982d8d8dedd71cef0092ca49f06f4e55de2690336d4582bf81173ffbb7d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetUman/Admin/Applications/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetUman/Admin/Applications/list.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetUman/Admin/Applications/list.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetUman/Base/structure.html.twig", "@EasyjetUman/Admin/Applications/list.html.twig", 1);
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

        echo "Applications";
        
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

        var url = '";
        // line 12
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("uman_admin_application_edit", ["id" => ":id"]);
        echo "';

         swissinside.simpleDataTable(\$(\"#applications-list\"), {
            \"bProcessing\": true,
            \"aoColumns\" : [
                null, // Application
                null, // Action
            ],
            \"aaSorting\" : [[0, \"ASC\"]],
            \"sAjaxSource\": \"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("uman_admin_applications_all_search");
        echo "\",
            \"columnDefs\": [ {\"targets\": 'no-sort',\"orderable\": false} ],

            \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
              
                \$(\"td:eq(0)\", nRow).html(
                   '<div>'+ aData[0] + ' : '+ aData[1] + '</div> <div>'+ aData[2] + '</div>'
                );
                \$(\"td:eq(1)\", nRow).html(
                    '<a href='+ url.replace(\":id\", aData[3]) +' class=\"btn btn-primary\"><i class=\"icon-edit\"></i> Edit</a> <a class=\"btn btn-danger applicationsID\" data-applications-id='+aData[3]+' data-toggle=\"modal\" data-target=\"#applicationsModal\"><i class=\"icon-remove\"></i> Remove</a> '
                );
            },
            
        } );
    });

    \$(document).on(\"click\", \".applicationsID\", function () {
        var id = \$(this).data('applications-id');
        \$('#applications-id').val(id);
    });
    
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 46
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 47
        echo "
<!-- Modal -->
<div id=\"applicationsModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Confirm</h4>
      </div>
      <form action=\"";
        // line 58
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("uman_admin_application_remove");
        echo "\" method=\"POST\">
          <input type=\"hidden\" name=\"applicationsId\" id=\"applications-id\">
          <div class=\"modal-body\">
            <p>Are you sure that you want to remove this application ?</p>
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
        <h1 id=\"titre_help\">Applications</h1>         
        <div id=\"description_help\">List of applications managed via uMan.</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 83
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 83, $context, $this->getSourceContext());
        echo "
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a class=\"btn btn-primary\"  href=\"";
        // line 89
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("uman_admin_application_add");
        echo "\" ><i class=\"icon-plus\"></i> Add a application</a>
        </div>
    </div>
        
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Applications List</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"applications-list\">
                        <thead>
                        <tr>
                        <th>Application</th>
                        <th class=\"no-sort\" style=\"width:250px\">Actions</th>
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
        return "@EasyjetUman/Admin/Applications/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  206 => 89,  197 => 83,  169 => 58,  156 => 47,  146 => 46,  112 => 21,  100 => 12,  92 => 7,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetUman/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Applications{% endblock %}

{% block specificJs %}
{{ parent() }}

<script>
    \$(function() {

        var url = '{{ url('uman_admin_application_edit', {\"id\" : \":id\"}) }}';

         swissinside.simpleDataTable(\$(\"#applications-list\"), {
            \"bProcessing\": true,
            \"aoColumns\" : [
                null, // Application
                null, // Action
            ],
            \"aaSorting\" : [[0, \"ASC\"]],
            \"sAjaxSource\": \"{{ url('uman_admin_applications_all_search') }}\",
            \"columnDefs\": [ {\"targets\": 'no-sort',\"orderable\": false} ],

            \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
              
                \$(\"td:eq(0)\", nRow).html(
                   '<div>'+ aData[0] + ' : '+ aData[1] + '</div> <div>'+ aData[2] + '</div>'
                );
                \$(\"td:eq(1)\", nRow).html(
                    '<a href='+ url.replace(\":id\", aData[3]) +' class=\"btn btn-primary\"><i class=\"icon-edit\"></i> Edit</a> <a class=\"btn btn-danger applicationsID\" data-applications-id='+aData[3]+' data-toggle=\"modal\" data-target=\"#applicationsModal\"><i class=\"icon-remove\"></i> Remove</a> '
                );
            },
            
        } );
    });

    \$(document).on(\"click\", \".applicationsID\", function () {
        var id = \$(this).data('applications-id');
        \$('#applications-id').val(id);
    });
    
</script>

{% endblock specificJs %}
        
{% block container %}

<!-- Modal -->
<div id=\"applicationsModal\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Confirm</h4>
      </div>
      <form action=\"{{ url('uman_admin_application_remove') }}\" method=\"POST\">
          <input type=\"hidden\" name=\"applicationsId\" id=\"applications-id\">
          <div class=\"modal-body\">
            <p>Are you sure that you want to remove this application ?</p>
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
        <h1 id=\"titre_help\">Applications</h1>         
        <div id=\"description_help\">List of applications managed via uMan.</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ macros.wizz() }}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a class=\"btn btn-primary\"  href=\"{{ url('uman_admin_application_add') }}\" ><i class=\"icon-plus\"></i> Add a application</a>
        </div>
    </div>
        
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Applications List</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"applications-list\">
                        <thead>
                        <tr>
                        <th>Application</th>
                        <th class=\"no-sort\" style=\"width:250px\">Actions</th>
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
   
{% endblock container %}", "@EasyjetUman/Admin/Applications/list.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\UmanBundle\\Resources\\views\\Admin\\Applications\\list.html.twig");
    }
}
