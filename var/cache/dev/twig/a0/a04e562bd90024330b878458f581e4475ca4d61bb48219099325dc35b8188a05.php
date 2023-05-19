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

/* @EasyjetOtp/OtpRequest/index.html.twig */
class __TwigTemplate_e7d83d6ac06eb3b5b1cde9e34ecc0efb32bb1466c3eca898a50f09bbdd241334 extends Template
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
        return "@EasyjetOtp/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/OtpRequest/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/OtpRequest/index.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetOtp/OtpRequest/index.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetOtp/Base/structure.html.twig", "@EasyjetOtp/OtpRequest/index.html.twig", 1);
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

        echo "Disruption claim and sector adjustments List";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

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
        $context["sectAdjEditUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("otp_sect_adj_edit", ["sectAdj" => "0"]);
        // line 8
        $context["sectAdjDelUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("otp_sect_adj_delete", ["sectAdj" => "0"]);
        // line 9
        $context["disrupitonEditUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("otp_disruption_adj_edit", ["disruption" => "0"]);
        // line 10
        $context["disrupitonRemoveUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("otp_disruption_adj_delete", ["disruption" => "0"]);
        // line 11
        $context["crsfToken"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("REMOVE_EXPENSE");
        // line 12
        echo "
<style>
    .align-center label {
        text-align: center !important;
    }
    .icheckbox_flat-blue {
        margin: -5px 10px !important;
    }
</style>
<script>
    \$(document).ready(function() {
        // you may need to change this code if you are not using Bootstrap Datepicker
        \$('.js-datepicker').datepicker({
            autoclose: true
        });
    });
    \$(function() {
        \$('input[type=\"checkbox\"').addClass('icheckbox_flat-blue');
       
        var concernedUser = \$(\"#requests_search_form_user\").val();
        var createdFrom = \$(\"#requests_search_form_createdFrom\").val();
        var createdTo = \$(\"#requests_search_form_createdTo\").val();
        var concernedFrom = \$(\"#requests_search_form_concernedDateFrom\").val();
        var concernedTo = \$(\"#requests_search_form_concernedDateTo\").val();
        var status = \$(\"[name=\\\"requests_search_form[status][]\\\"]:checked\").map(function(){
            return \$(this).val();
        }).get();
        var type = \$(\"[name=\\\"requests_search_form[type][]\\\"]:checked\").map(function(){
            return \$(this).val();
        }).get();

        \$(\"body\").on(\"click\", \"[data-remove-href]\", function() {
            var link = \$(this);
          
            bootbox.confirm(\"Do you really want to remove this claim ?\", function(confirmation) {
                if (confirmation) {
                    link =  link.data(\"removeHref\");
                    link += \"?csrfToken=";
        // line 49
        echo twig_escape_filter($this->env, (isset($context["crsfToken"]) || array_key_exists("crsfToken", $context) ? $context["crsfToken"] : (function () { throw new RuntimeError('Variable "crsfToken" does not exist.', 49, $this->source); })()), "html", null, true);
        echo "\";
                    window.location.href = link;
                }
            });
        });

        \$(\"body\").on(\"click\", \"[data-disruption-remove-href]\", function() {
            var url = \$(this).data(\"disruption-remove-href\");
            url += \"?csrfToken=";
        // line 57
        echo twig_escape_filter($this->env, (isset($context["crsfToken"]) || array_key_exists("crsfToken", $context) ? $context["crsfToken"] : (function () { throw new RuntimeError('Variable "crsfToken" does not exist.', 57, $this->source); })()), "html", null, true);
        echo "\";
            bootbox.confirm(\"Do you really want to remove this claim ?\", function(confirmation) {
                if (confirmation) {
                    window.location.href = url;
                }
            });
        });

        \$('#otp-list').on('preXhr.dt', function ( e, settings, data ) {
            data.concernedUser = concernedUser;
            data.createdFrom = createdFrom;
            data.createdTo = createdTo;
            data.concernedFrom = concernedFrom;
            data.concernedTo = concernedTo;
            data.status = status;
            data.type = type;

            return data;
        });    

        \$(\"body\").on(\"click\", \"a[data-remove-item]\",function(e) { 
            e.preventDefault();
            var url = \$(this).attr(\"href\");
            bootbox.confirm(\"Do you really want remove this row ?\", function(result) {
                if (result) {
                    window.location.href = url;
                };
                
            });
        });

        swissinside.simpleDataTable(\$(\"#otp-list\"), {
            \"bProcessing\": true,
            \"bServerSide\": true,
            \"sAjaxSource\": \"";
        // line 91
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("otp_request_search");
        echo "\",
            \"aoColumns\" : [
                null, //<th>Concerned date</th>
                null, //<th>Date of request</th>
                null, //<th>Employee</th>
                null, //<th>Type of request</th>
                null, //<th>Status</th>
                {\"bSortable\": false}, //<th>Month of payment</th>
                {\"bSortable\": false}// id
            ],
            \"aaSorting\" : [[1, \"asc\"], [2, \"asc\"]],
            \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                var link = \"\";
                switch(aData[3]) {
                    case \"disruption\" :
                    if(aData[4] == \"pending\"){
                        link = '<a class=\"btn btn-default btn-sm\" href=\"";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["disrupitonEditUrl"]) || array_key_exists("disrupitonEditUrl", $context) ? $context["disrupitonEditUrl"] : (function () { throw new RuntimeError('Variable "disrupitonEditUrl" does not exist.', 107, $this->source); })()), "html", null, true);
        echo "'+ aData[6] + '\"><i class=\"icon-eye-open\"></i> Edit</a> '
                        ";
        // line 108
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLAIMS_ADMIN")) {
            // line 109
            echo "                            link += '<a class=\"btn btn-danger btn-sm\" data-id=\"'+aData[6]+'\" href=\"javascript:;\" data-disruption-remove-href=\"";
            echo twig_escape_filter($this->env, (isset($context["disrupitonRemoveUrl"]) || array_key_exists("disrupitonRemoveUrl", $context) ? $context["disrupitonRemoveUrl"] : (function () { throw new RuntimeError('Variable "disrupitonRemoveUrl" does not exist.', 109, $this->source); })()), "html", null, true);
            echo "'+aData[6]+'\"><i class=\"icon-remove\"></i>Remove</a>'
                        ";
        }
        // line 110
        echo "           
                    }             
                    else{
                        link = '<a class=\"btn btn-default btn-sm\" href=\"";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["disrupitonEditUrl"]) || array_key_exists("disrupitonEditUrl", $context) ? $context["disrupitonEditUrl"] : (function () { throw new RuntimeError('Variable "disrupitonEditUrl" does not exist.', 113, $this->source); })()), "html", null, true);
        echo "'+ aData[6] + '\"><i class=\"icon-eye-open\"></i> Edit</a> '
                    }
                        break;
                    case \"sect_adjustment\" :
                    if(aData[4] == \"pending\"){
                        link = '<a class=\"btn btn-default btn-sm\" href=\"";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["sectAdjEditUrl"]) || array_key_exists("sectAdjEditUrl", $context) ? $context["sectAdjEditUrl"] : (function () { throw new RuntimeError('Variable "sectAdjEditUrl" does not exist.', 118, $this->source); })()), "html", null, true);
        echo "'+ aData[6] + '\"><i class=\"icon-eye-open\"></i> Edit</a> '
                        ";
        // line 119
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLAIMS_ADMIN")) {
            // line 120
            echo "                            link += '<a class=\"btn btn-danger\" href=\"javascript:;\" data-remove-href=\"";
            echo twig_escape_filter($this->env, (isset($context["sectAdjDelUrl"]) || array_key_exists("sectAdjDelUrl", $context) ? $context["sectAdjDelUrl"] : (function () { throw new RuntimeError('Variable "sectAdjDelUrl" does not exist.', 120, $this->source); })()), "html", null, true);
            echo "' + aData[6] + '\"><i class=\"icon-remove\"></i> Remove</a>'
                        ";
        }
        // line 122
        echo "                    }
                    else{
                        link = '<a class=\"btn btn-default btn-sm\" href=\"";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["sectAdjEditUrl"]) || array_key_exists("sectAdjEditUrl", $context) ? $context["sectAdjEditUrl"] : (function () { throw new RuntimeError('Variable "sectAdjEditUrl" does not exist.', 124, $this->source); })()), "html", null, true);
        echo "'+ aData[6] + '\"><i class=\"icon-eye-open\"></i> Edit</a> '
                    }
                        break;
                    
                    default : btnSectorAdjClass = \"btn-default\"; break;
                }                

                \$(\"td:eq(6)\", nRow).html(
                    link 
                ); 
            
            }
        }); 
    });  
    
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 143
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 144
        echo "        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Disruption claim and sector adjustments</h1>  
        <div id=\"description_help\">
            Here you can claim you disruption and make comments regarding sectors adjustments for the previous month.
        </div>
    </div>

    ";
        // line 153
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 153, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
    ";
        // line 154
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 154, $this->source); })()), 'errors');
        echo "

        <div class=\"row\">

            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>Search form</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\"> ";
        // line 170
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 170, $this->source); })()), "status", [], "any", false, false, false, 170), 'label');
        echo " :</label> 
                                     <div class=\"controls\">
                                        ";
        // line 172
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 172, $this->source); })()), "status", [], "any", false, false, false, 172), 'widget');
        echo "
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 176
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 176, $this->source); })()), "type", [], "any", false, false, false, 176), 'label');
        echo " :</label>
                                    <div class=\"controls\">
                                        ";
        // line 178
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 178, $this->source); })()), "type", [], "any", false, false, false, 178), 'widget');
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 187
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 187, $this->source); })()), "createdFrom", [], "any", false, false, false, 187), 'label');
        echo " :</label>
                                    <div class=\"controls\">
                                        ";
        // line 189
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 189, $this->source); })()), "createdFrom", [], "any", false, false, false, 189), 'widget', ["attr" => ["class" => "form-control js-datepicker"]]);
        echo "
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-xs-6 align-center\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 196
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 196, $this->source); })()), "createdTo", [], "any", false, false, false, 196), 'label');
        echo " :</label>
                                    <div class=\"controls\">
                                        ";
        // line 198
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 198, $this->source); })()), "createdTo", [], "any", false, false, false, 198), 'widget', ["attr" => ["class" => "form-control js-datepicker"]]);
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 207
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 207, $this->source); })()), "concernedDateFrom", [], "any", false, false, false, 207), 'label');
        echo " :</label>
                                    <div class=\"controls\">
                                        ";
        // line 209
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 209, $this->source); })()), "concernedDateFrom", [], "any", false, false, false, 209), 'widget', ["attr" => ["class" => "form-control js-datepicker"]]);
        echo "
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-xs-6 align-center\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 216
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 216, $this->source); })()), "concernedDateTo", [], "any", false, false, false, 216), 'label');
        echo " :</label>
                                    <div class=\"controls\">
                                        ";
        // line 218
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 218, $this->source); })()), "concernedDateTo", [], "any", false, false, false, 218), 'widget', ["attr" => ["class" => "form-control js-datepicker"]]);
        echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        // line 223
        if ((isset($context["isAdmin"]) || array_key_exists("isAdmin", $context) ? $context["isAdmin"] : (function () { throw new RuntimeError('Variable "isAdmin" does not exist.', 223, $this->source); })())) {
            // line 224
            echo "                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
            // line 227
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 227, $this->source); })()), "user", [], "any", false, false, false, 227), 'label');
            echo " :</label>
                                    <div class=\"controls\">
                                        ";
            // line 229
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 229, $this->source); })()), "user", [], "any", false, false, false, 229), 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                                    </div>
                                </div>
                            </div>
                        </div>
                        ";
        }
        // line 235
        echo "                        <div class=\"form-actions\">
                            <input type=\"submit\" class=\"btn btn-primary\" />
                        </div>
                    </div>
                </div>
            </div>           
        </div>

    ";
        // line 243
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 243, $this->source); })()), 'form_end');
        echo "
    
    ";
        // line 245
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 245, $this->source); })()), "request", [], "any", false, false, false, 245), "get", [0 => "d"], "method", false, false, false, 245)) {
            // line 246
            echo "        <div class=\"row\">
            <div class=\"alert alert-success\">
                <button class=\"close\" data-dismiss=\"alert\">×</button>
                <strong>Success</strong> The disruption expense has been removed successfully.
            </div>
        </div>
    ";
        }
        // line 253
        echo "
    <!-- Results to show -->
     <div class=\"row\">
        <div class=\"col-xs-12\">            
            <div class=\"btn-group\">
                <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                    New request
                    <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"";
        // line 263
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("otp_disruption_adj_new");
        echo "\">Disruption</a></li>
                    <li><a href=\"";
        // line 264
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("otp_sect_adj_new");
        echo "\">Sector adjustment</a></li>
                </ul>
            </div>
        </div>        
     </div>
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 271
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 271, $context, $this->getSourceContext());
        echo "
        </div>        

        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Claims list</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"otp-list\">
                        <thead>
                            <tr>
                                <th>Concerned date</th>
                                <th>Date of request</th>
                                <th>Employee</th>
                                <th>Type of request</th>
                                <th>Status</th>
                                <th>Month of payment</th>
                                <th style=\"width:150px\">Action</th>
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
        return "@EasyjetOtp/OtpRequest/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  486 => 271,  476 => 264,  472 => 263,  460 => 253,  451 => 246,  449 => 245,  444 => 243,  434 => 235,  425 => 229,  420 => 227,  415 => 224,  413 => 223,  405 => 218,  400 => 216,  390 => 209,  385 => 207,  373 => 198,  368 => 196,  358 => 189,  353 => 187,  341 => 178,  336 => 176,  329 => 172,  324 => 170,  305 => 154,  301 => 153,  290 => 144,  280 => 143,  253 => 124,  249 => 122,  243 => 120,  241 => 119,  237 => 118,  229 => 113,  224 => 110,  218 => 109,  216 => 108,  212 => 107,  193 => 91,  156 => 57,  145 => 49,  106 => 12,  104 => 11,  102 => 10,  100 => 9,  98 => 8,  96 => 7,  82 => 5,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetOtp/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Disruption claim and sector adjustments List{% endblock %}
{% block specificJs %}{{ parent() }}

{% set sectAdjEditUrl = url('otp_sect_adj_edit', {\"sectAdj\" : \"0\"} ) %}
{% set sectAdjDelUrl = url('otp_sect_adj_delete', {\"sectAdj\" : \"0\"} ) %}
{% set disrupitonEditUrl = url('otp_disruption_adj_edit', {\"disruption\" : \"0\"} ) %}
{% set disrupitonRemoveUrl = url('otp_disruption_adj_delete', {\"disruption\" : \"0\"} ) %}
{% set crsfToken = csrf_token('REMOVE_EXPENSE') %}

<style>
    .align-center label {
        text-align: center !important;
    }
    .icheckbox_flat-blue {
        margin: -5px 10px !important;
    }
</style>
<script>
    \$(document).ready(function() {
        // you may need to change this code if you are not using Bootstrap Datepicker
        \$('.js-datepicker').datepicker({
            autoclose: true
        });
    });
    \$(function() {
        \$('input[type=\"checkbox\"').addClass('icheckbox_flat-blue');
       
        var concernedUser = \$(\"#requests_search_form_user\").val();
        var createdFrom = \$(\"#requests_search_form_createdFrom\").val();
        var createdTo = \$(\"#requests_search_form_createdTo\").val();
        var concernedFrom = \$(\"#requests_search_form_concernedDateFrom\").val();
        var concernedTo = \$(\"#requests_search_form_concernedDateTo\").val();
        var status = \$(\"[name=\\\"requests_search_form[status][]\\\"]:checked\").map(function(){
            return \$(this).val();
        }).get();
        var type = \$(\"[name=\\\"requests_search_form[type][]\\\"]:checked\").map(function(){
            return \$(this).val();
        }).get();

        \$(\"body\").on(\"click\", \"[data-remove-href]\", function() {
            var link = \$(this);
          
            bootbox.confirm(\"Do you really want to remove this claim ?\", function(confirmation) {
                if (confirmation) {
                    link =  link.data(\"removeHref\");
                    link += \"?csrfToken={{ crsfToken }}\";
                    window.location.href = link;
                }
            });
        });

        \$(\"body\").on(\"click\", \"[data-disruption-remove-href]\", function() {
            var url = \$(this).data(\"disruption-remove-href\");
            url += \"?csrfToken={{ crsfToken }}\";
            bootbox.confirm(\"Do you really want to remove this claim ?\", function(confirmation) {
                if (confirmation) {
                    window.location.href = url;
                }
            });
        });

        \$('#otp-list').on('preXhr.dt', function ( e, settings, data ) {
            data.concernedUser = concernedUser;
            data.createdFrom = createdFrom;
            data.createdTo = createdTo;
            data.concernedFrom = concernedFrom;
            data.concernedTo = concernedTo;
            data.status = status;
            data.type = type;

            return data;
        });    

        \$(\"body\").on(\"click\", \"a[data-remove-item]\",function(e) { 
            e.preventDefault();
            var url = \$(this).attr(\"href\");
            bootbox.confirm(\"Do you really want remove this row ?\", function(result) {
                if (result) {
                    window.location.href = url;
                };
                
            });
        });

        swissinside.simpleDataTable(\$(\"#otp-list\"), {
            \"bProcessing\": true,
            \"bServerSide\": true,
            \"sAjaxSource\": \"{{ url('otp_request_search') }}\",
            \"aoColumns\" : [
                null, //<th>Concerned date</th>
                null, //<th>Date of request</th>
                null, //<th>Employee</th>
                null, //<th>Type of request</th>
                null, //<th>Status</th>
                {\"bSortable\": false}, //<th>Month of payment</th>
                {\"bSortable\": false}// id
            ],
            \"aaSorting\" : [[1, \"asc\"], [2, \"asc\"]],
            \"fnRowCallback\" : function( nRow, aData, iDisplayIndex, iDisplayIndexFull ) {
                var link = \"\";
                switch(aData[3]) {
                    case \"disruption\" :
                    if(aData[4] == \"pending\"){
                        link = '<a class=\"btn btn-default btn-sm\" href=\"{{ disrupitonEditUrl }}'+ aData[6] + '\"><i class=\"icon-eye-open\"></i> Edit</a> '
                        {% if is_granted(\"ROLE_CLAIMS_ADMIN\") %}
                            link += '<a class=\"btn btn-danger btn-sm\" data-id=\"'+aData[6]+'\" href=\"javascript:;\" data-disruption-remove-href=\"{{ disrupitonRemoveUrl }}'+aData[6]+'\"><i class=\"icon-remove\"></i>Remove</a>'
                        {% endif %}           
                    }             
                    else{
                        link = '<a class=\"btn btn-default btn-sm\" href=\"{{ disrupitonEditUrl }}'+ aData[6] + '\"><i class=\"icon-eye-open\"></i> Edit</a> '
                    }
                        break;
                    case \"sect_adjustment\" :
                    if(aData[4] == \"pending\"){
                        link = '<a class=\"btn btn-default btn-sm\" href=\"{{ sectAdjEditUrl }}'+ aData[6] + '\"><i class=\"icon-eye-open\"></i> Edit</a> '
                        {% if is_granted(\"ROLE_CLAIMS_ADMIN\") %}
                            link += '<a class=\"btn btn-danger\" href=\"javascript:;\" data-remove-href=\"{{ sectAdjDelUrl }}' + aData[6] + '\"><i class=\"icon-remove\"></i> Remove</a>'
                        {% endif %}
                    }
                    else{
                        link = '<a class=\"btn btn-default btn-sm\" href=\"{{ sectAdjEditUrl }}'+ aData[6] + '\"><i class=\"icon-eye-open\"></i> Edit</a> '
                    }
                        break;
                    
                    default : btnSectorAdjClass = \"btn-default\"; break;
                }                

                \$(\"td:eq(6)\", nRow).html(
                    link 
                ); 
            
            }
        }); 
    });  
    
</script>
{% endblock specificJs %}


{% block container %}
        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Disruption claim and sector adjustments</h1>  
        <div id=\"description_help\">
            Here you can claim you disruption and make comments regarding sectors adjustments for the previous month.
        </div>
    </div>

    {{ form_start(form, {'attr': {'class': 'form-horizontal'}} ) }}
    {{ form_errors(form) }}

        <div class=\"row\">

            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>Search form</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\"> {{ form_label(form.status) }} :</label> 
                                     <div class=\"controls\">
                                        {{ form_widget(form.status) }}
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{ form_label(form.type) }} :</label>
                                    <div class=\"controls\">
                                        {{ form_widget(form.type) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{ form_label(form.createdFrom) }} :</label>
                                    <div class=\"controls\">
                                        {{ form_widget(form.createdFrom, { 'attr': {'class': 'form-control js-datepicker'} }) }}
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-xs-6 align-center\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{ form_label(form.createdTo) }} :</label>
                                    <div class=\"controls\">
                                        {{ form_widget(form.createdTo, { 'attr': {'class': 'form-control js-datepicker'} }) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{ form_label(form.concernedDateFrom) }} :</label>
                                    <div class=\"controls\">
                                        {{ form_widget(form.concernedDateFrom, { 'attr': {'class': 'form-control js-datepicker'} }) }}
                                    </div>
                                </div>
                            </div>

                            <div class=\"col-xs-6 align-center\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{ form_label(form.concernedDateTo) }} :</label>
                                    <div class=\"controls\">
                                        {{ form_widget(form.concernedDateTo, { 'attr': {'class': 'form-control js-datepicker'} }) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% if  isAdmin %}
                        <div class=\"row\">
                            <div class=\"col-xs-12\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{ form_label(form.user) }} :</label>
                                    <div class=\"controls\">
                                        {{ form_widget(form.user, { 'attr': {'class': 'form-control'} }) }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        {% endif %}
                        <div class=\"form-actions\">
                            <input type=\"submit\" class=\"btn btn-primary\" />
                        </div>
                    </div>
                </div>
            </div>           
        </div>

    {{ form_end(form) }}
    
    {% if app.request.get(\"d\") %}
        <div class=\"row\">
            <div class=\"alert alert-success\">
                <button class=\"close\" data-dismiss=\"alert\">×</button>
                <strong>Success</strong> The disruption expense has been removed successfully.
            </div>
        </div>
    {% endif %}

    <!-- Results to show -->
     <div class=\"row\">
        <div class=\"col-xs-12\">            
            <div class=\"btn-group\">
                <a class=\"btn btn-primary dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                    New request
                    <span class=\"caret\"></span>
                </a>
                <ul class=\"dropdown-menu\">
                    <li><a href=\"{{ url('otp_disruption_adj_new') }}\">Disruption</a></li>
                    <li><a href=\"{{ url('otp_sect_adj_new') }}\">Sector adjustment</a></li>
                </ul>
            </div>
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
                    <h5>Claims list</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"otp-list\">
                        <thead>
                            <tr>
                                <th>Concerned date</th>
                                <th>Date of request</th>
                                <th>Employee</th>
                                <th>Type of request</th>
                                <th>Status</th>
                                <th>Month of payment</th>
                                <th style=\"width:150px\">Action</th>
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
            
{% endblock container %}", "@EasyjetOtp/OtpRequest/index.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\OtpBundle\\Resources\\views\\OtpRequest\\index.html.twig");
    }
}
