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

/* @EasyjetEleave/Admin/Files/index.html.twig */
class __TwigTemplate_faf6661a6ad7b5264117ebbe83d54892a30ebd28b5ac27ece2b4c01b0cd6b987 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/Admin/Files/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/Admin/Files/index.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetEleave/Admin/Files/index.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetEleave/Base/structure.html.twig", "@EasyjetEleave/Admin/Files/index.html.twig", 1);
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

        echo "Availibility files administration";
        
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
<script>
    \$(function() {
        swissinside.menuSelected(\"admin-upload-files\");
    });
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 17
        echo "    \t
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">HR Database</h1>  
        <div id=\"description_help\">In this section you may update every important data about the employees.</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 26
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 26, $context, $this->getSourceContext());
        echo "
        </div>
    </div>    

    <form class=\"form-horizontal\" action=\"";
        // line 30
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_admin_upload_help_files");
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <input type=\"hidden\" name=\"token\" value=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("upload"), "html", null, true);
        echo "\" />
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <h5>GVA availibility</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        
                        <div class=\"form-group\">
                            <label class=\"control-label\">FA file *:</label>                
                            <div class=\"controls\">
                                <input class=\"form-control\" name=\"gva_fa\" type=\"file\"  value=\"\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">PU file *: </label>                
                            <div class=\"controls\">
                                <input class=\"form-control\" name=\"gva_pu\" type=\"file\"  value=\"\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">FO file *:</label>                
                            <div class=\"controls\">
                                <input class=\"form-control\" name=\"gva_fo\" type=\"file\"  value=\"\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">CP file *:</label>                
                            <div class=\"controls\">
                                <input class=\"form-control\" name=\"gva_cp\" type=\"file\"  value=\"\">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <h5>BSL availibility</h5>
                    </div>
                    <div class=\"widget-content nopadding\">

                        <div class=\"form-group\">
                            <label class=\"control-label\">FA file *:</label>                
                            <div class=\"controls\">
                                <input class=\"form-control\" name=\"bsl_fa\" type=\"file\"  value=\"\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">PU file *: </label>                
                            <div class=\"controls\">
                                <input class=\"form-control\" name=\"bsl_pu\" type=\"file\"  value=\"\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">FO file *:</label>                
                            <div class=\"controls\">
                                <input class=\"form-control\" name=\"bsl_fo\" type=\"file\"  value=\"\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">CP file *:</label>                
                            <div class=\"controls\">
                                <input class=\"form-control\" name=\"bsl_cp\" type=\"file\" value=\"\">
                            </div>
                        </div>

                        <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-primary\">Send</button>
                            * Select a file only for the files you want to replace. The others won't be removed.
                        </div>

                        <div id=\"submitted\"></div>

                    </div>
                </div>
            </div>
        </div>
    </form>
   
</div>
            
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetEleave/Admin/Files/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 31,  136 => 30,  129 => 26,  118 => 17,  108 => 16,  82 => 7,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetEleave/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Availibility files administration{% endblock %}


{% block specificJs %}{{ parent() }}
<script>
    \$(function() {
        swissinside.menuSelected(\"admin-upload-files\");
    });
</script>
{% endblock specificJs %}


{% block container %}
    \t
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">HR Database</h1>  
        <div id=\"description_help\">In this section you may update every important data about the employees.</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ macros.wizz() }}
        </div>
    </div>    

    <form class=\"form-horizontal\" action=\"{{url('eleave_admin_upload_help_files')}}\" method=\"post\" enctype=\"multipart/form-data\">
        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('upload') }}\" />
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <h5>GVA availibility</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        
                        <div class=\"form-group\">
                            <label class=\"control-label\">FA file *:</label>                
                            <div class=\"controls\">
                                <input class=\"form-control\" name=\"gva_fa\" type=\"file\"  value=\"\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">PU file *: </label>                
                            <div class=\"controls\">
                                <input class=\"form-control\" name=\"gva_pu\" type=\"file\"  value=\"\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">FO file *:</label>                
                            <div class=\"controls\">
                                <input class=\"form-control\" name=\"gva_fo\" type=\"file\"  value=\"\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">CP file *:</label>                
                            <div class=\"controls\">
                                <input class=\"form-control\" name=\"gva_cp\" type=\"file\"  value=\"\">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <h5>BSL availibility</h5>
                    </div>
                    <div class=\"widget-content nopadding\">

                        <div class=\"form-group\">
                            <label class=\"control-label\">FA file *:</label>                
                            <div class=\"controls\">
                                <input class=\"form-control\" name=\"bsl_fa\" type=\"file\"  value=\"\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">PU file *: </label>                
                            <div class=\"controls\">
                                <input class=\"form-control\" name=\"bsl_pu\" type=\"file\"  value=\"\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">FO file *:</label>                
                            <div class=\"controls\">
                                <input class=\"form-control\" name=\"bsl_fo\" type=\"file\"  value=\"\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">CP file *:</label>                
                            <div class=\"controls\">
                                <input class=\"form-control\" name=\"bsl_cp\" type=\"file\" value=\"\">
                            </div>
                        </div>

                        <div class=\"form-actions\">
                            <button type=\"submit\" class=\"btn btn-primary\">Send</button>
                            * Select a file only for the files you want to replace. The others won't be removed.
                        </div>

                        <div id=\"submitted\"></div>

                    </div>
                </div>
            </div>
        </div>
    </form>
   
</div>
            
{% endblock container %}", "@EasyjetEleave/Admin/Files/index.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EleaveBundle\\Resources\\views\\Admin\\Files\\index.html.twig");
    }
}
