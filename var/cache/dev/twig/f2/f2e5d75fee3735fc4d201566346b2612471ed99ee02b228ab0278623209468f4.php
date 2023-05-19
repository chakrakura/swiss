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

/* @EasyjetSfsu/Files/show.html.twig */
class __TwigTemplate_5e7387c7ab04fc7c947a09c65f4639f92bac056b009d5f58e10f39acb973ae6e extends Template
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
        return "@EasyjetSfsu/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSfsu/Files/show.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSfsu/Files/show.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetSfsu/Files/show.html.twig", 2)->unwrap();
        // line 4
        $context["file"] = twig_get_attribute($this->env, $this->source, (isset($context["filesToShow"]) || array_key_exists("filesToShow", $context) ? $context["filesToShow"] : (function () { throw new RuntimeError('Variable "filesToShow" does not exist.', 4, $this->source); })()), 0, [], "array", false, false, false, 4);
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetSfsu/Base/structure.html.twig", "@EasyjetSfsu/Files/show.html.twig", 1);
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

        echo "Uploaded file";
        
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
<script type=\"text/javascript\">
    \$(function() {
        \$(\"#copy-to-clipboard\").bind(\"click\", function() {
            window.getSelection().removeAllRanges
        });
        
        \$(\".show-hide-logs\").on(\"click\", function() {
           \$(this).toggleClass(\"inversed\"); 
           if (\$(this).hasClass(\"inversed\")) {
               \$(\"#logs-section\").stop().slideDown();
           } else {
               \$(\"#logs-section\").stop().slideUp();
           }
        });
        
        \$(\"#logs-section\").slideUp();
        
        new Clipboard('#copy-to-clipboard');

        swissinside.simpleDataTable(\$(\"#logs-table\"));
        \$(\"#logs-table_length\").hide();

        \$(\"#remove-file\").bind(\"click\", function(e) {
            e.preventDefault();
            bootbox.confirm(\"You are about to remove your file. Do you confirm ?\", function(result) {
                if (result === true) {
                    window.location.href = \"";
        // line 34
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("sfsu_files_delete", ["file" => twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 34, $this->source); })()), "id", [], "any", false, false, false, 34)]), "html", null, true);
        echo "\";
                };
            });
        });
        
        \$(\"#sfsu_file_mail_form_recipient\").multiple_emails();
    });
    
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 47
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 48
        echo "        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">View file</h1>         
    </div>
    
    ";
        // line 54
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "user", [], "any", false, false, false, 54), "id", [], "any", false, false, false, 54), twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 54, $this->source); })()), "createdBy", [], "any", false, false, false, 54), "idUser", [], "any", false, false, false, 54))))) {
            // line 55
            echo "        <div class=\"row\">
            <div class=\"col-xs-12\">
                ";
            // line 57
            echo twig_call_macro($macros["macros"], "macro_wizz", [], 57, $context, $this->getSourceContext());
            echo "
            </div>

            
            ";
            // line 61
            if (((isset($context["fileExists"]) || array_key_exists("fileExists", $context) ? $context["fileExists"] : (function () { throw new RuntimeError('Variable "fileExists" does not exist.', 61, $this->source); })()) && (0 === twig_compare((isset($context["easyjetEnv"]) || array_key_exists("easyjetEnv", $context) ? $context["easyjetEnv"] : (function () { throw new RuntimeError('Variable "easyjetEnv" does not exist.', 61, $this->source); })()), "swissinside")))) {
                // line 62
                echo "                ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
                echo "
                ";
                // line 63
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), 'errors');
                echo "
                <div class=\"col-xs-12\">
                    <div class=\"widget-box\">
                        <div class=\"widget-title\">
                            <span class=\"icon\">
                                <i class=\"icon-pencil\"></i>
                            </span>
                            <h5>Define your file properties</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                         
                            <div class=\"form-group\">
                                <label class=\"control-label\">";
                // line 75
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "retentionDuration", [], "any", false, false, false, 75), 'label');
                echo " :</label>
                                <div class=\"controls\">
                                    ";
                // line 77
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 77, $this->source); })()), "retentionDuration", [], "any", false, false, false, 77), 'widget', ["attr" => ["class" => "form-control"]]);
                echo "
                                </div>
                            </div> 
                            <div class=\"form-group\">
                                <label class=\"control-label\">";
                // line 81
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "deleteAfterDownload", [], "any", false, false, false, 81), 'label');
                echo " :</label>
                                <div class=\"controls\">
                                    ";
                // line 83
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 83, $this->source); })()), "deleteAfterDownload", [], "any", false, false, false, 83), 'widget');
                echo "
                                </div>
                           </div> 
                            
                            <div class=\"form-actions\">
                                <input type=\"submit\" class=\"btn btn-primary\" />
                                <button class=\"btn btn-danger pull-right\" id=\"remove-file\"><i class=\"icon-trash\"></i> Remove now</button>
                            </div>
                        </div>
                    </div>
                </div> 
                ";
                // line 94
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form_end');
                echo "
            ";
            }
            // line 95
            echo "          
        </div>
        
    

        ";
            // line 100
            if ((isset($context["fileExists"]) || array_key_exists("fileExists", $context) ? $context["fileExists"] : (function () { throw new RuntimeError('Variable "fileExists" does not exist.', 100, $this->source); })())) {
                // line 101
                echo "            ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 101, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
                echo "
            ";
                // line 102
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 102, $this->source); })()), 'errors');
                echo "
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"widget-box\">
                        <div class=\"widget-title\">
                            <span class=\"icon\">
                                <i class=\"icon-envelope\"></i>
                            </span>

                            <h5>Send the file by mail</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                                <div class=\"alert alert-info\">The link will be automatically included in the bottom of the mail</div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
                // line 116
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 116, $this->source); })()), "subject", [], "any", false, false, false, 116), 'label');
                echo " :</label>
                                    <div class=\"controls\">
                                        ";
                // line 118
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 118, $this->source); })()), "subject", [], "any", false, false, false, 118), 'widget', ["attr" => ["class" => "form-control"]]);
                echo "
                                    </div>
                                </div> 
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
                // line 122
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 122, $this->source); })()), "recipient", [], "any", false, false, false, 122), 'label');
                echo " :</label>
                                    <div class=\"controls\">
                                        ";
                // line 124
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 124, $this->source); })()), "recipient", [], "any", false, false, false, 124), 'widget', ["attr" => ["class" => "form-control"]]);
                echo "
                                        <div class=\"form-error\">
                                            ";
                // line 126
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 126, $this->source); })()), "recipient", [], "any", false, false, false, 126), 'errors');
                echo "
                                        </div>
                                    </div>
                                </div> 
                                <div class=\"form-group\">
                                    <label class=\"control-label\">";
                // line 131
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 131, $this->source); })()), "mailContent", [], "any", false, false, false, 131), 'label');
                echo " :</label>
                                    <div class=\"controls\">
                                        ";
                // line 133
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 133, $this->source); })()), "mailContent", [], "any", false, false, false, 133), 'widget', ["attr" => ["class" => "form-control"]]);
                echo "
                                        <div class=\"form-error\">
                                            ";
                // line 135
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 135, $this->source); })()), "mailContent", [], "any", false, false, false, 135), 'errors');
                echo "
                                        </div>
                                    </div>
                                </div>

                                <div class=\"form-actions\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Send file link by email</button>
                                    
                                </div>
                            </div>
                    </div>
                </div>  
            </div>
            ";
                // line 148
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["emailForm"]) || array_key_exists("emailForm", $context) ? $context["emailForm"] : (function () { throw new RuntimeError('Variable "emailForm" does not exist.', 148, $this->source); })()), 'form_end');
                echo "
        ";
            }
            // line 150
            echo "    ";
        }
        // line 151
        echo "
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th-list\"></i>
                    </span>
                    <h5>Log concerning the file</h5>
                    <i class=\"show-hide-logs icon-upload pull-right\"></i>
                    <span class=\"badge badge-info\">Hits: ";
        // line 161
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 161, $this->source); })()), "nbDownloads", [], "any", false, false, false, 161), "html", null, true);
        echo "</span>
                    <span class=\"badge\">Last download: ";
        // line 162
        ((twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 162, $this->source); })()), "getLastDownload", [], "any", false, false, false, 162)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 162, $this->source); })()), "getLastDownload", [], "any", false, false, false, 162), "d/mY - H:i:s"), "html", null, true))) : (print ("none")));
        echo "</span>
                    
                </div>
                <div class=\"widget-content nopadding\" style=\"display: none;\" id=\"logs-section\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"logs-table\">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>User</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 175
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 175, $this->source); })()), "logs", [], "any", false, false, false, 175));
        foreach ($context['_seq'] as $context["_key"] => $context["log"]) {
            // line 176
            echo "                                <tr>
                                    <td>";
            // line 177
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "date", [], "any", false, false, false, 177), "d/m/Y - H:i"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 178
            ((twig_get_attribute($this->env, $this->source, $context["log"], "user", [], "any", false, false, false, 178)) ? (print (twig_escape_filter($this->env, (((((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["log"], "user", [], "any", false, false, false, 178), "logUser", [], "any", false, false, false, 178) . " (") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["log"], "user", [], "any", false, false, false, 178), "preNomUser", [], "any", false, false, false, 178)) . " ") . twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["log"], "user", [], "any", false, false, false, 178), "nomUser", [], "any", false, false, false, 178)) . ")"), "html", null, true))) : (print ("Not authenticated")));
            echo "<br /><small class=\"help-block text-left\">IP : ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "ip", [], "any", false, false, false, 178), "html", null, true);
            echo " - Email : ";
            if (twig_get_attribute($this->env, $this->source, $context["log"], "emailAddress", [], "any", false, false, false, 178)) {
                echo "<a href=\"mailto:";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "emailAddress", [], "any", false, false, false, 178), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "emailAddress", [], "any", false, false, false, 178), "html", null, true);
                echo "</a>";
            }
            echo "</small></td>
                                    <td>";
            // line 179
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["log"], "action", [], "any", false, false, false, 179), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['log'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 182
        echo "                            
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
        return "@EasyjetSfsu/Files/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  393 => 182,  384 => 179,  370 => 178,  366 => 177,  363 => 176,  359 => 175,  343 => 162,  339 => 161,  327 => 151,  324 => 150,  319 => 148,  303 => 135,  298 => 133,  293 => 131,  285 => 126,  280 => 124,  275 => 122,  268 => 118,  263 => 116,  246 => 102,  241 => 101,  239 => 100,  232 => 95,  227 => 94,  213 => 83,  208 => 81,  201 => 77,  196 => 75,  181 => 63,  176 => 62,  174 => 61,  167 => 57,  163 => 55,  161 => 54,  153 => 48,  143 => 47,  123 => 34,  84 => 7,  65 => 5,  54 => 1,  52 => 4,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@EasyjetSfsu/Base/structure.html.twig\" %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% set file = filesToShow[0] %}
{% block title %}Uploaded file{% endblock %}

{% block specificJs %}{{ parent() }}
<script type=\"text/javascript\">
    \$(function() {
        \$(\"#copy-to-clipboard\").bind(\"click\", function() {
            window.getSelection().removeAllRanges
        });
        
        \$(\".show-hide-logs\").on(\"click\", function() {
           \$(this).toggleClass(\"inversed\"); 
           if (\$(this).hasClass(\"inversed\")) {
               \$(\"#logs-section\").stop().slideDown();
           } else {
               \$(\"#logs-section\").stop().slideUp();
           }
        });
        
        \$(\"#logs-section\").slideUp();
        
        new Clipboard('#copy-to-clipboard');

        swissinside.simpleDataTable(\$(\"#logs-table\"));
        \$(\"#logs-table_length\").hide();

        \$(\"#remove-file\").bind(\"click\", function(e) {
            e.preventDefault();
            bootbox.confirm(\"You are about to remove your file. Do you confirm ?\", function(result) {
                if (result === true) {
                    window.location.href = \"{{ url('sfsu_files_delete', {file: file.id}) }}\";
                };
            });
        });
        
        \$(\"#sfsu_file_mail_form_recipient\").multiple_emails();
    });
    
</script>
{% endblock specificJs %}



{% block container %}
        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">View file</h1>         
    </div>
    
    {% if app.user and app.user.id == file.createdBy.idUser %}
        <div class=\"row\">
            <div class=\"col-xs-12\">
                {{ macros.wizz() }}
            </div>

            
            {% if fileExists and easyjetEnv == \"swissinside\" %}
                {{ form_start(form, {'attr': {'class': 'form-horizontal'}} ) }}
                {{ form_errors(form) }}
                <div class=\"col-xs-12\">
                    <div class=\"widget-box\">
                        <div class=\"widget-title\">
                            <span class=\"icon\">
                                <i class=\"icon-pencil\"></i>
                            </span>
                            <h5>Define your file properties</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                         
                            <div class=\"form-group\">
                                <label class=\"control-label\">{{ form_label(form.retentionDuration) }} :</label>
                                <div class=\"controls\">
                                    {{ form_widget(form.retentionDuration, { 'attr': {'class': 'form-control'} }) }}
                                </div>
                            </div> 
                            <div class=\"form-group\">
                                <label class=\"control-label\">{{ form_label(form.deleteAfterDownload) }} :</label>
                                <div class=\"controls\">
                                    {{ form_widget(form.deleteAfterDownload) }}
                                </div>
                           </div> 
                            
                            <div class=\"form-actions\">
                                <input type=\"submit\" class=\"btn btn-primary\" />
                                <button class=\"btn btn-danger pull-right\" id=\"remove-file\"><i class=\"icon-trash\"></i> Remove now</button>
                            </div>
                        </div>
                    </div>
                </div> 
                {{ form_end(form) }}
            {% endif %}          
        </div>
        
    

        {% if fileExists %}
            {{ form_start(emailForm, {'attr': {'class': 'form-horizontal'}} ) }}
            {{ form_errors(emailForm) }}
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"widget-box\">
                        <div class=\"widget-title\">
                            <span class=\"icon\">
                                <i class=\"icon-envelope\"></i>
                            </span>

                            <h5>Send the file by mail</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                                <div class=\"alert alert-info\">The link will be automatically included in the bottom of the mail</div>
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{ form_label(emailForm.subject) }} :</label>
                                    <div class=\"controls\">
                                        {{ form_widget(emailForm.subject, { 'attr': {'class': 'form-control'} }) }}
                                    </div>
                                </div> 
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{ form_label(emailForm.recipient) }} :</label>
                                    <div class=\"controls\">
                                        {{ form_widget(emailForm.recipient, { 'attr': {'class': 'form-control'} }) }}
                                        <div class=\"form-error\">
                                            {{ form_errors(emailForm.recipient) }}
                                        </div>
                                    </div>
                                </div> 
                                <div class=\"form-group\">
                                    <label class=\"control-label\">{{ form_label(emailForm.mailContent) }} :</label>
                                    <div class=\"controls\">
                                        {{ form_widget(emailForm.mailContent, { 'attr': {'class': 'form-control'} }) }}
                                        <div class=\"form-error\">
                                            {{ form_errors(emailForm.mailContent) }}
                                        </div>
                                    </div>
                                </div>

                                <div class=\"form-actions\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Send file link by email</button>
                                    
                                </div>
                            </div>
                    </div>
                </div>  
            </div>
            {{ form_end(emailForm) }}
        {% endif %}
    {% endif %}

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th-list\"></i>
                    </span>
                    <h5>Log concerning the file</h5>
                    <i class=\"show-hide-logs icon-upload pull-right\"></i>
                    <span class=\"badge badge-info\">Hits: {{ file.nbDownloads }}</span>
                    <span class=\"badge\">Last download: {{ file.getLastDownload ? file.getLastDownload|date('d/mY - H:i:s') : 'none' }}</span>
                    
                </div>
                <div class=\"widget-content nopadding\" style=\"display: none;\" id=\"logs-section\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"logs-table\">
                        <thead>
                            <tr>
                                <th>Date</th>
                                <th>User</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for log in file.logs %}
                                <tr>
                                    <td>{{ log.date|date('d/m/Y - H:i') }}</td>
                                    <td>{{ log.user ? log.user.logUser ~ ' (' ~ log.user.preNomUser ~ ' ' ~ log.user.nomUser ~ ')' : 'Not authenticated' }}<br /><small class=\"help-block text-left\">IP : {{log.ip}} - Email : {% if log.emailAddress %}<a href=\"mailto:{{ log.emailAddress }}\">{{ log.emailAddress }}</a>{% endif %}</small></td>
                                    <td>{{ log.action }}</td>
                                </tr>
                            {% endfor %}
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>  
    </div>    

</div>


   
{% endblock container %}", "@EasyjetSfsu/Files/show.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\SfsuBundle\\Resources\\views\\Files\\show.html.twig");
    }
}
