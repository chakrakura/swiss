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

/* @EasyjetOtp/Admin/ImportBatch/list.html.twig */
class __TwigTemplate_7183fcba9fdcfcecc3050e96c4f7254d28e3b0dbac046f451ca967a534e38a44 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Admin/ImportBatch/list.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Admin/ImportBatch/list.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetOtp/Admin/ImportBatch/list.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetOtp/Base/structure.html.twig", "@EasyjetOtp/Admin/ImportBatch/list.html.twig", 1);
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

        echo " Batches list ";
        
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
        $context["dropUrl"] = $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("admin_otp_batch_drop", ["batch" => "0"]);
        // line 8
        echo "
";
        // line 9
        $context["csrfOtpManagement"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("admin_otp_management");
        // line 10
        echo "
<script type=\"text/javascript\">

    \$(function() {

    swissinside.simpleDataTable(\$(\"#otp-list\"), {
            pagingType: 'full_numbers',
        });
    });  

    var otp_remove_batch = function(id) {
        bootbox.confirm(\"This will remove an entire import. Are you really sure to proceed ?\", function(validation) {
            if (validation === true) {
                var url = \"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["dropUrl"]) || array_key_exists("dropUrl", $context) ? $context["dropUrl"] : (function () { throw new RuntimeError('Variable "dropUrl" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\" + id + \"?_token=";
        echo twig_escape_filter($this->env, (isset($context["csrfOtpManagement"]) || array_key_exists("csrfOtpManagement", $context) ? $context["csrfOtpManagement"] : (function () { throw new RuntimeError('Variable "csrfOtpManagement" does not exist.', 23, $this->source); })()), "html", null, true);
        echo "\";
                window.location.href = url;
            }
        });
    };

    var otp_publish_status = function(id, status) {
        var url = \"/OTP/admin/batch/publish/\" + id + '/' + status;
        window.location.href = url + \"?_token=";
        // line 31
        echo twig_escape_filter($this->env, (isset($context["csrfOtpManagement"]) || array_key_exists("csrfOtpManagement", $context) ? $context["csrfOtpManagement"] : (function () { throw new RuntimeError('Variable "csrfOtpManagement" does not exist.', 31, $this->source); })()), "html", null, true);
        echo "\";
    };

</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 39
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 40
        echo "
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Batches management</h1>  
        <div id=\"description_help\">
            Here you can enable / disable batches access. Change read only mode or remove any import batch (you can remove only batches which does not have any data yet).
        </div>
    </div>


    <!-- Results to show -->
    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 53
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 53, $context, $this->getSourceContext());
        echo "
        </div>        

        <div class=\"col-xs-12\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-th\"></i>
                    </span>
                    <h5>Batches list</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"otp-list\">
                        <thead>
                            <tr>
                                <th>Import date</th>
                                <th>Cvp month</th>
                                <th>Effective date</th>
                                <th>Imported by</th>
                                <th>Published</th>
                                <th>Locked</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 78
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["batches"]) || array_key_exists("batches", $context) ? $context["batches"] : (function () { throw new RuntimeError('Variable "batches" does not exist.', 78, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 79
            echo "                                <tr>
                                    <td>";
            // line 80
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "importDate", [], "any", false, false, false, 80), "d M Y"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 81
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "cvpMonth", [], "any", false, false, false, 81), "d M Y"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 82
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "effectiveDate", [], "any", false, false, false, 82), "d M Y"), "html", null, true);
            echo "</td>
                                    <td>";
            // line 83
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "importedBy", [], "any", false, false, false, 83), "html", null, true);
            echo "</td>
                                    <td>";
            // line 84
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "published", [], "any", false, false, false, 84)) ? ("Yes") : ("No"));
            echo "</td>
                                    <td>";
            // line 85
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "locked", [], "any", false, false, false, 85)) ? ("Yes") : ("No"));
            echo "</td>
                                    <td>
                                        <a href=\"javascript:otp_publish_status('";
            // line 87
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 87), "html", null, true);
            echo "', '";
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "published", [], "any", false, false, false, 87)) ? ("0") : ("1"));
            echo "');\" class=\"btn ";
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "published", [], "any", false, false, false, 87)) ? ("btn-primary") : ("btn-default"));
            echo " \"><i class=\"icon-";
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "published", [], "any", false, false, false, 87)) ? ("eye-close") : ("eye-open"));
            echo "\"></i> ";
            echo ((twig_get_attribute($this->env, $this->source, $context["item"], "published", [], "any", false, false, false, 87)) ? ("Unpublish") : ("Publish"));
            echo "</a>
                                        <a href=\"javascript:otp_remove_batch('";
            // line 88
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "id", [], "any", false, false, false, 88), "html", null, true);
            echo "')\" class=\"btn btn-danger\"><i class=\"icon-trash\"></i> Remove</a>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "                        </tbody>
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
        return "@EasyjetOtp/Admin/ImportBatch/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  254 => 92,  244 => 88,  232 => 87,  227 => 85,  223 => 84,  219 => 83,  215 => 82,  211 => 81,  207 => 80,  204 => 79,  200 => 78,  172 => 53,  157 => 40,  147 => 39,  131 => 31,  118 => 23,  103 => 10,  101 => 9,  98 => 8,  96 => 7,  82 => 5,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetOtp/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %} Batches list {% endblock %}
{% block specificJs %}{{ parent() }}

{% set dropUrl = url('admin_otp_batch_drop', {\"batch\" : \"0\"} ) %}

{% set csrfOtpManagement = csrf_token('admin_otp_management') %}

<script type=\"text/javascript\">

    \$(function() {

    swissinside.simpleDataTable(\$(\"#otp-list\"), {
            pagingType: 'full_numbers',
        });
    });  

    var otp_remove_batch = function(id) {
        bootbox.confirm(\"This will remove an entire import. Are you really sure to proceed ?\", function(validation) {
            if (validation === true) {
                var url = \"{{ dropUrl }}\" + id + \"?_token={{ csrfOtpManagement }}\";
                window.location.href = url;
            }
        });
    };

    var otp_publish_status = function(id, status) {
        var url = \"/OTP/admin/batch/publish/\" + id + '/' + status;
        window.location.href = url + \"?_token={{ csrfOtpManagement }}\";
    };

</script>

{% endblock %}


{% block container %}

<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Batches management</h1>  
        <div id=\"description_help\">
            Here you can enable / disable batches access. Change read only mode or remove any import batch (you can remove only batches which does not have any data yet).
        </div>
    </div>


    <!-- Results to show -->
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
                    <h5>Batches list</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"otp-list\">
                        <thead>
                            <tr>
                                <th>Import date</th>
                                <th>Cvp month</th>
                                <th>Effective date</th>
                                <th>Imported by</th>
                                <th>Published</th>
                                <th>Locked</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for item in batches %}
                                <tr>
                                    <td>{{ item.importDate|date(\"d M Y\") }}</td>
                                    <td>{{ item.cvpMonth|date(\"d M Y\") }}</td>
                                    <td>{{ item.effectiveDate|date(\"d M Y\") }}</td>
                                    <td>{{ item.importedBy }}</td>
                                    <td>{{ item.published ? 'Yes' : 'No' }}</td>
                                    <td>{{ item.locked ? 'Yes' : 'No' }}</td>
                                    <td>
                                        <a href=\"javascript:otp_publish_status('{{item.id}}', '{{ item.published ? '0' : '1'}}');\" class=\"btn {{ item.published ? 'btn-primary' : 'btn-default'}} \"><i class=\"icon-{{ item.published ? 'eye-close' : 'eye-open' }}\"></i> {{ item.published ? 'Unpublish' : 'Publish'}}</a>
                                        <a href=\"javascript:otp_remove_batch('{{ item.id }}')\" class=\"btn btn-danger\"><i class=\"icon-trash\"></i> Remove</a>
                                    </td>
                                </tr>
                            {% endfor %}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>        
    </div>
</div>
            
{% endblock container %}", "@EasyjetOtp/Admin/ImportBatch/list.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\OtpBundle\\Resources\\views\\Admin\\ImportBatch\\list.html.twig");
    }
}
