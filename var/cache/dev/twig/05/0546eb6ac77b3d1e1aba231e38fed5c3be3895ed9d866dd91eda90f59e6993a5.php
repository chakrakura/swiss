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

/* @EasyjetEleave/Admin/Reports/index.html.twig */
class __TwigTemplate_0c437bb5996e722bc73fea5a1ee1bd57fd65074f3bde2adb42d2f005b6d3ad2f extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/Admin/Reports/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/Admin/Reports/index.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetEleave/Admin/Reports/index.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetEleave/Base/structure.html.twig", "@EasyjetEleave/Admin/Reports/index.html.twig", 1);
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

        echo " Generate CSV reports ";
        
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
<script src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("bundles/eleave/js/autocomplete.js"), "html", null, true);
        echo "\"></script>
<script>
    \$(\".date-picker\").datepicker({
        format: 'dd/mm/yyyy',
        }).on('changeDate', function(selected){
            updateDate(\$(this).closest('.form-group').next().find('.date-picker').attr('id'), selected);
    });

    function updateDate(input, selected){
        var minDate = new Date(selected.date.valueOf());
        \$('#'+input).datepicker('setStartDate', minDate);
    }

    window.onload = function(){
        initAutoComplete(document.getElementById('form1'),
        document.getElementById('user'),document.getElementById('submit_button'));
    };

</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 32
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 33
        echo "    \t
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Generate CSV reports</h1>  
        <div id=\"description_help\">Select the person that you want to export or leave blank to export all offices.</div>
    </div>
    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <h5>Individual monthly productivity report</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <form class=\"form-horizontal\" action=\"";
        // line 47
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("eleave_admin_csv_report");
        echo "\" method=\"get\" id ='form1'>
                        <input type=\"hidden\" name=\"token\" value=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("report"), "html", null, true);
        echo "\" />
                        <div class=\"form-group\">
                            <label class=\"control-label\">User :</label>                
                            <div class=\"controls\">
                                <input class=\"form-control input-sm\" id=\"user\" autocomplete=\"off\" name=\"user\" type=\"text\" value=\"\" >
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">From :</label>                
                            <div class=\"controls\">
                                <input class=\"form-control input-sm date-input date-picker\" name=\"from\" type=\"text\" id=\"date-from\" value=\"\"  placeholder=\"dd/mm/yyyy\" data-enable-datepicker=\"true\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">To :</label>                
                            <div class=\"controls\">
                                <input class=\"form-control input-sm date-input date-picker\" name=\"to\" type=\"text\" id=\"date-to\" value=\"\"  placeholder=\"dd/mm/yyyy\" data-enable-datepicker=\"true\">
                            </div>
                        </div>
                   
                        <div class=\"form-actions\">
                            <button type=\"submit\" id=\"submit_button\"  class=\"btn btn-primary\">Send</button>
                        </div>

                    </form>
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
        return "@EasyjetEleave/Admin/Reports/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  156 => 48,  152 => 47,  136 => 33,  126 => 32,  95 => 8,  82 => 7,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetEleave/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %} Generate CSV reports {% endblock %}


{% block specificJs %}{{ parent() }}
<script src=\"{{ asset('bundles/eleave/js/autocomplete.js')  }}\"></script>
<script>
    \$(\".date-picker\").datepicker({
        format: 'dd/mm/yyyy',
        }).on('changeDate', function(selected){
            updateDate(\$(this).closest('.form-group').next().find('.date-picker').attr('id'), selected);
    });

    function updateDate(input, selected){
        var minDate = new Date(selected.date.valueOf());
        \$('#'+input).datepicker('setStartDate', minDate);
    }

    window.onload = function(){
        initAutoComplete(document.getElementById('form1'),
        document.getElementById('user'),document.getElementById('submit_button'));
    };

</script>

{% endblock specificJs %}
        


{% block container %}
    \t
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Generate CSV reports</h1>  
        <div id=\"description_help\">Select the person that you want to export or leave blank to export all offices.</div>
    </div>
    
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <h5>Individual monthly productivity report</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <form class=\"form-horizontal\" action=\"{{url('eleave_admin_csv_report')}}\" method=\"get\" id ='form1'>
                        <input type=\"hidden\" name=\"token\" value=\"{{ csrf_token('report') }}\" />
                        <div class=\"form-group\">
                            <label class=\"control-label\">User :</label>                
                            <div class=\"controls\">
                                <input class=\"form-control input-sm\" id=\"user\" autocomplete=\"off\" name=\"user\" type=\"text\" value=\"\" >
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">From :</label>                
                            <div class=\"controls\">
                                <input class=\"form-control input-sm date-input date-picker\" name=\"from\" type=\"text\" id=\"date-from\" value=\"\"  placeholder=\"dd/mm/yyyy\" data-enable-datepicker=\"true\">
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\">To :</label>                
                            <div class=\"controls\">
                                <input class=\"form-control input-sm date-input date-picker\" name=\"to\" type=\"text\" id=\"date-to\" value=\"\"  placeholder=\"dd/mm/yyyy\" data-enable-datepicker=\"true\">
                            </div>
                        </div>
                   
                        <div class=\"form-actions\">
                            <button type=\"submit\" id=\"submit_button\"  class=\"btn btn-primary\">Send</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
   
</div>
            
{% endblock container %}", "@EasyjetEleave/Admin/Reports/index.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EleaveBundle\\Resources\\views\\Admin\\Reports\\index.html.twig");
    }
}
