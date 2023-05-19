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

/* @EasyjetEleave/Admin/Refuses/list.html.twig */
class __TwigTemplate_062ef161500f82de2b9f9c1e017c879d9b7109689467537cac6f0d3fa246b20a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/Admin/Refuses/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/Admin/Refuses/list.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetEleave/Admin/Refuses/list.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetEleave/Base/structure.html.twig", "@EasyjetEleave/Admin/Refuses/list.html.twig", 1);
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

        echo "Refuses List";
        
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
    \$(document).on(\"click\", \".deleteRefusesID\", function () {
        var id = \$(this).data('refuses-id');
        \$('#refuses-id').val(id);
    });
    
    \$(function() {

        swissinside.simpleDataTable(\$(\"#refuses-list\"), {
            \"sAjaxSource\": \"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_admin_refuses_list");
        echo "\",
            \"aoColumns\" : [
                null, // Reason
                null, // Action
            ],
            \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                
                 if(aData[1]) {
                    var editUrl =  \"";
        // line 25
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_admin_refuses_edit", ["id" => ":id"]);
        echo "\";
                    editUrl = editUrl.replace(\":id\", aData[1]); 
                    \$('td:eq(1)', nRow).html( '<a href=\"' + editUrl + '\"\" class=\"btn btn-primary\"><i class=\"icon-edit\"></i> Edit</a> <a  class=\"btn btn-danger delete-btn deleteRefusesID\" data-refuses-id=\"'+aData[1]+'\" id=\"deleteRefusesID\" data-toggle=\"modal\" data-target=\"#deleteRefusesModal\"><i class=\"icon-trash\"></i> Remove</a> ' );
                }
            },
            \"columnDefs\": [ {
                \"targets\": 'no-sort',
                \"orderable\": false,
            } ]
           
        });  

    });  
    
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 43
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 44
        echo "
    <!-- Modal -->
    <div id=\"deleteRefusesModal\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Confirm</h4>
                </div>
                <form action=\"";
        // line 54
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_admin_refuses_delete");
        echo "\" method=\"PUT\">
                    <input type=\"hidden\" name=\"id\" id=\"refuses-id\">
                    <div class=\"modal-body\">
                        <p>Are you sure that you want to delete Refus reason?</p>
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
        <h1 id=\"titre_help\">Administration</h1>
        <div id=\"description_help\">
           Here you are abble to manage the refuse reason(s).
        </div>
    </div>
 
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 80
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 80, $context, $this->getSourceContext());
        echo "
        </div>
    </div>

    <div class=\"row\">    
        <div class=\"col-xs-12\">
            <a href=\"";
        // line 86
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_admin_refuses_add");
        echo "\" class=\"btn btn-primary x\">Add a refuse reason</a>  
        </div>
    </div>

    <!-- Results to show -->
    <div class=\"row\">    
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Refuse reason list</h5>
                </div>
                <div class=\"widget-content nopadding\">
                
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"refuses-list\">
                        <thead>
                            <tr>
                                <th>Label</th>
                                <th class=\"no-sort\">Action</th>
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
        return "@EasyjetEleave/Admin/Refuses/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 86,  193 => 80,  164 => 54,  152 => 44,  142 => 43,  116 => 25,  105 => 17,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetEleave/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Refuses List{% endblock %}

{% block specificJs %}{{ parent() }}

<script>
    \$(document).on(\"click\", \".deleteRefusesID\", function () {
        var id = \$(this).data('refuses-id');
        \$('#refuses-id').val(id);
    });
    
    \$(function() {

        swissinside.simpleDataTable(\$(\"#refuses-list\"), {
            \"sAjaxSource\": \"{{ url('eleave_admin_refuses_list') }}\",
            \"aoColumns\" : [
                null, // Reason
                null, // Action
            ],
            \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                
                 if(aData[1]) {
                    var editUrl =  \"{{ url('eleave_admin_refuses_edit', {'id' : ':id'} )}}\";
                    editUrl = editUrl.replace(\":id\", aData[1]); 
                    \$('td:eq(1)', nRow).html( '<a href=\"' + editUrl + '\"\" class=\"btn btn-primary\"><i class=\"icon-edit\"></i> Edit</a> <a  class=\"btn btn-danger delete-btn deleteRefusesID\" data-refuses-id=\"'+aData[1]+'\" id=\"deleteRefusesID\" data-toggle=\"modal\" data-target=\"#deleteRefusesModal\"><i class=\"icon-trash\"></i> Remove</a> ' );
                }
            },
            \"columnDefs\": [ {
                \"targets\": 'no-sort',
                \"orderable\": false,
            } ]
           
        });  

    });  
    
</script>
{% endblock specificJs %}


{% block container %}

    <!-- Modal -->
    <div id=\"deleteRefusesModal\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Confirm</h4>
                </div>
                <form action=\"{{ url('eleave_admin_refuses_delete') }}\" method=\"PUT\">
                    <input type=\"hidden\" name=\"id\" id=\"refuses-id\">
                    <div class=\"modal-body\">
                        <p>Are you sure that you want to delete Refus reason?</p>
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
        <h1 id=\"titre_help\">Administration</h1>
        <div id=\"description_help\">
           Here you are abble to manage the refuse reason(s).
        </div>
    </div>
 
    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ macros.wizz() }}
        </div>
    </div>

    <div class=\"row\">    
        <div class=\"col-xs-12\">
            <a href=\"{{ url('eleave_admin_refuses_add') }}\" class=\"btn btn-primary x\">Add a refuse reason</a>  
        </div>
    </div>

    <!-- Results to show -->
    <div class=\"row\">    
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Refuse reason list</h5>
                </div>
                <div class=\"widget-content nopadding\">
                
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"refuses-list\">
                        <thead>
                            <tr>
                                <th>Label</th>
                                <th class=\"no-sort\">Action</th>
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


{% endblock container %}", "@EasyjetEleave/Admin/Refuses/list.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EleaveBundle\\Resources\\views\\Admin\\Refuses\\list.html.twig");
    }
}
