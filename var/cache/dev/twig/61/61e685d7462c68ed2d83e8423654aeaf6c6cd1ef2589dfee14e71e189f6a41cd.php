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

/* @EasyjetUman/ExternalUsers/showAll.html.twig */
class __TwigTemplate_f09595edd925bc28a8ac5f6c1fbe35f15579f176b80c110b284ab11d0e1ff3af extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetUman/ExternalUsers/showAll.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetUman/ExternalUsers/showAll.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetUman/ExternalUsers/showAll.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetUman/Base/structure.html.twig", "@EasyjetUman/ExternalUsers/showAll.html.twig", 1);
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

        echo "List of external users";
        
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
        \$(\"#external-users-list\").dataTable( {
            \"bJQueryUI\": true,
            \"sPaginationType\": \"full_numbers\",
            \"sDom\": '<\"\"l>t<\"F\"fpr>',
            \"bProcessing\": true,
            \"bServerSide\": false,
            \"columnDefs\": [ { \"targets\": 'no-sort', \"orderable\": false } ]
        });
    });
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 24
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 25
        echo "
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">List of external users</h1>
        <div id=\"description_help\">Here is the list of people who connected to swissinside with their AD account and don't have a swissinside account. You can edit them in order to set them as swiss employees</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 34
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 34, $context, $this->getSourceContext());
        echo "
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
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"external-users-list\">
                        <thead>
                            <tr>
                                <th>Employee Id</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th class=\"no-sort\">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            ";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["externalUsers"]) || array_key_exists("externalUsers", $context) ? $context["externalUsers"] : (function () { throw new RuntimeError('Variable "externalUsers" does not exist.', 59, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 60
            echo "                                <tr>
                                    <td>";
            // line 61
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "log_user", [], "any", false, false, false, 61), "html", null, true);
            echo "</td>
                                    <td>";
            // line 62
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "prenom_user", [], "any", false, false, false, 62), "html", null, true);
            echo "</td>
                                    <td>";
            // line 63
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "nom_user", [], "any", false, false, false, 63), "html", null, true);
            echo "</td>
                                    <td><a class=\"btn btn-primary\" href=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("uman_external_users_edit", ["user" => twig_get_attribute($this->env, $this->source, $context["person"], "id_user", [], "any", false, false, false, 64)]), "html", null, true);
            echo "\"><i class=\"icon-edit\"> Edit</i></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
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
        return "@EasyjetUman/ExternalUsers/showAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  195 => 67,  186 => 64,  182 => 63,  178 => 62,  174 => 61,  171 => 60,  167 => 59,  139 => 34,  128 => 25,  118 => 24,  92 => 7,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetUman/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}List of external users{% endblock %}

{% block specificJs %}
{{ parent() }}

<script>
    \$(function() {
        \$(\"#external-users-list\").dataTable( {
            \"bJQueryUI\": true,
            \"sPaginationType\": \"full_numbers\",
            \"sDom\": '<\"\"l>t<\"F\"fpr>',
            \"bProcessing\": true,
            \"bServerSide\": false,
            \"columnDefs\": [ { \"targets\": 'no-sort', \"orderable\": false } ]
        });
    });
</script>

{% endblock specificJs %}

{% block container %}

<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">List of external users</h1>
        <div id=\"description_help\">Here is the list of people who connected to swissinside with their AD account and don't have a swissinside account. You can edit them in order to set them as swiss employees</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ macros.wizz() }}
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
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"external-users-list\">
                        <thead>
                            <tr>
                                <th>Employee Id</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th class=\"no-sort\">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                            {% for person in externalUsers %}
                                <tr>
                                    <td>{{ person.log_user }}</td>
                                    <td>{{ person.prenom_user }}</td>
                                    <td>{{ person.nom_user }}</td>
                                    <td><a class=\"btn btn-primary\" href=\"{{ url('uman_external_users_edit', {\"user\": person.id_user}) }}\"><i class=\"icon-edit\"> Edit</i></a></td>
                                </tr>
                            {% endfor %}

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

{% endblock container %}
", "@EasyjetUman/ExternalUsers/showAll.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\UmanBundle\\Resources\\views\\ExternalUsers\\showAll.html.twig");
    }
}
