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

/* @EasyjetEleave/Admin/Rules/list.html.twig */
class __TwigTemplate_40883d78bb84255e93a5a23a95d386cd143ea4161c091f4219ac01d05a5d3014 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/Admin/Rules/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/Admin/Rules/list.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetEleave/Admin/Rules/list.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetEleave/Base/structure.html.twig", "@EasyjetEleave/Admin/Rules/list.html.twig", 1);
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

        echo "Rules List";
        
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

    \$(document).on(\"click\", \".deleteRulesID\", function () {
        var id = \$(this).data('rules-id');
        \$('#rules-id').val(id);
    });
    
    \$(function() {

        swissinside.simpleDataTable(\$(\"#rules-list\"), {
            \"sAjaxSource\": \"";
        // line 18
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_admin_rules_list");
        echo "\",
            \"aoColumns\" : [
                null, // Reason
                null, // Action
            ],
            \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                
                 if(aData[1]) {
                    var editUrl =  \"";
        // line 26
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_admin_rules_edit", ["id" => ":id"]);
        echo " \";
                    editUrl = editUrl.replace(\":id\", aData[1]); 
                    \$('td:eq(1)', nRow).html( '<a href=\"' + editUrl + '\"\" class=\"btn btn-primary\"><i class=\"icon-edit\"></i> Edit</a> <a  class=\"btn btn-danger delete-btn deleteRulesID\" data-rules-id=\"'+aData[1]+'\" id=\"deleteRulesID\" data-toggle=\"modal\" data-target=\"#deleteRulesModal\"><i class=\"icon-trash\"></i> Remove</a> ' );
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

    // line 44
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 45
        echo "
    <!-- Modal -->
    <div id=\"deleteRulesModal\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Confirm</h4>
                </div>
                <form action=\"";
        // line 55
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_admin_rules_delete");
        echo "\" method=\"PUT\">
                    <input type=\"hidden\" name=\"id\" id=\"rules-id\">
                    <div class=\"modal-body\">
                        <p>Are you sure that you want to delete rule?</p>
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
           Here you are abble to manage the rules.
        </div>
    </div>
 
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 81
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 81, $context, $this->getSourceContext());
        echo "
        </div>
    </div>

    <div class=\"row\">    
        <div class=\"col-xs-12\">
            <a href=\"";
        // line 87
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_admin_rules_add");
        echo "\" class=\"btn btn-primary x\">Add a rule</a>  
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
                    <h5>Rules list</h5>
                </div>
                <div class=\"widget-content nopadding\">
                
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"rules-list\">
                        <thead>
                            <tr>
                                <th>Rule</th>
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
        return "@EasyjetEleave/Admin/Rules/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 87,  194 => 81,  165 => 55,  153 => 45,  143 => 44,  117 => 26,  106 => 18,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetEleave/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Rules List{% endblock %}

{% block specificJs %}{{ parent() }}

<script>

    \$(document).on(\"click\", \".deleteRulesID\", function () {
        var id = \$(this).data('rules-id');
        \$('#rules-id').val(id);
    });
    
    \$(function() {

        swissinside.simpleDataTable(\$(\"#rules-list\"), {
            \"sAjaxSource\": \"{{ url('eleave_admin_rules_list') }}\",
            \"aoColumns\" : [
                null, // Reason
                null, // Action
            ],
            \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                
                 if(aData[1]) {
                    var editUrl =  \"{{ url('eleave_admin_rules_edit', {\"id\" : \":id\"} )}} \";
                    editUrl = editUrl.replace(\":id\", aData[1]); 
                    \$('td:eq(1)', nRow).html( '<a href=\"' + editUrl + '\"\" class=\"btn btn-primary\"><i class=\"icon-edit\"></i> Edit</a> <a  class=\"btn btn-danger delete-btn deleteRulesID\" data-rules-id=\"'+aData[1]+'\" id=\"deleteRulesID\" data-toggle=\"modal\" data-target=\"#deleteRulesModal\"><i class=\"icon-trash\"></i> Remove</a> ' );
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
    <div id=\"deleteRulesModal\" class=\"modal fade\" role=\"dialog\">
        <div class=\"modal-dialog\">
            <!-- Modal content-->
            <div class=\"modal-content\">
                <div class=\"modal-header\">
                    <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
                    <h4 class=\"modal-title\">Confirm</h4>
                </div>
                <form action=\"{{ url('eleave_admin_rules_delete') }}\" method=\"PUT\">
                    <input type=\"hidden\" name=\"id\" id=\"rules-id\">
                    <div class=\"modal-body\">
                        <p>Are you sure that you want to delete rule?</p>
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
           Here you are abble to manage the rules.
        </div>
    </div>
 
    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ macros.wizz() }}
        </div>
    </div>

    <div class=\"row\">    
        <div class=\"col-xs-12\">
            <a href=\"{{ url('eleave_admin_rules_add') }}\" class=\"btn btn-primary x\">Add a rule</a>  
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
                    <h5>Rules list</h5>
                </div>
                <div class=\"widget-content nopadding\">
                
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"rules-list\">
                        <thead>
                            <tr>
                                <th>Rule</th>
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


{% endblock container %}", "@EasyjetEleave/Admin/Rules/list.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EleaveBundle\\Resources\\views\\Admin\\Rules\\list.html.twig");
    }
}
