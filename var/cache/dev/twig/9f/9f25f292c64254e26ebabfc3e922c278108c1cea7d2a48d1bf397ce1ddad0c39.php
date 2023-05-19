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

/* @EasyjetUman/ThirdPartyUsers/showAll.html.twig */
class __TwigTemplate_b3cd7a86a46575d00b42f342518d28bb3c0ac2270419314f4f36f3a08c655320 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetUman/ThirdPartyUsers/showAll.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetUman/ThirdPartyUsers/showAll.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetUman/ThirdPartyUsers/showAll.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetUman/Base/structure.html.twig", "@EasyjetUman/ThirdPartyUsers/showAll.html.twig", 1);
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

        echo "List of third party users";
        
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
        echo "
";
        // line 8
        $this->displayParentBlock("specificJs", $context, $blocks);
        echo "

<script>

    \$(function() {
        \$(\"#third-party-users-list\").dataTable( {
            \"bJQueryUI\": true,
            \"sPaginationType\": \"full_numbers\",
            \"sDom\": '<\"\"l>t<\"F\"fpr>',
            \"bProcessing\": true,
            \"bServerSide\": false,
            \"columnDefs\": [ { \"targets\": 'no-sort', \"orderable\": false } ]
        });
        
    });

    \$(document).on(\"click\", \"#delete-third-party-user\", function () {
        var id = \$(this).data('user-id');
        \$('#delete-user-id').val(id);
    });
   
</script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 33
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 34
        echo "
<!-- Modal -->
<div id=\"thirdPartyUserModel\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Confirm</h4>
      </div>
      <form action=\"";
        // line 45
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("uman_third_party_users_delete");
        echo "\" method=\"PUT\">
        <input type = \"hidden\" name=\"userId\" id=\"delete-user-id\"> 
          <div class=\"modal-body\">
            <p>Do you really wan to delete this third party ?</p>
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
        <h1 id=\"titre_help\">List of Third party users</h1>
        <div id=\"description_help\">Manage the users third party.</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 69
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 69, $context, $this->getSourceContext());
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
                    <h5>Users third party list</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"third-party-users-list\">
                        <thead>
                            <tr>
                                <th>Login</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th class=\"no-sort\">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 93
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["thirdPartyUsers"]) || array_key_exists("thirdPartyUsers", $context) ? $context["thirdPartyUsers"] : (function () { throw new RuntimeError('Variable "thirdPartyUsers" does not exist.', 93, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 94
            echo "                                <tr>
                                    <td>";
            // line 95
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "log_user", [], "any", false, false, false, 95), "html", null, true);
            echo "</td>
                                    <td>";
            // line 96
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "prenom_user", [], "any", false, false, false, 96), "html", null, true);
            echo "</td>
                                    <td>";
            // line 97
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "nom_user", [], "any", false, false, false, 97), "html", null, true);
            echo "</td>
                                    <td><a class=\"btn btn-primary\" href=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("uman_third_party_users_edit", ["user" => twig_get_attribute($this->env, $this->source, $context["person"], "id_user", [], "any", false, false, false, 98)]), "html", null, true);
            echo "\"><i class=\"icon-edit\"> Edit</i></a> <a class=\"btn btn-danger\" id=\"delete-third-party-user\" data-toggle=\"modal\" data-user-id = \"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["person"], "id_user", [], "any", false, false, false, 98), "html", null, true);
            echo "\" data-target=\"#thirdPartyUserModel\" ><i class=\"icon-remove\"> Delete</i></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
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
        return "@EasyjetUman/ThirdPartyUsers/showAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 101,  225 => 98,  221 => 97,  217 => 96,  213 => 95,  210 => 94,  206 => 93,  179 => 69,  152 => 45,  139 => 34,  129 => 33,  95 => 8,  92 => 7,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetUman/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}List of third party users{% endblock %}

{% block specificJs %}

{{ parent() }}

<script>

    \$(function() {
        \$(\"#third-party-users-list\").dataTable( {
            \"bJQueryUI\": true,
            \"sPaginationType\": \"full_numbers\",
            \"sDom\": '<\"\"l>t<\"F\"fpr>',
            \"bProcessing\": true,
            \"bServerSide\": false,
            \"columnDefs\": [ { \"targets\": 'no-sort', \"orderable\": false } ]
        });
        
    });

    \$(document).on(\"click\", \"#delete-third-party-user\", function () {
        var id = \$(this).data('user-id');
        \$('#delete-user-id').val(id);
    });
   
</script>

{% endblock specificJs %}

{% block container %}

<!-- Modal -->
<div id=\"thirdPartyUserModel\" class=\"modal fade\" role=\"dialog\">
  <div class=\"modal-dialog\">

    <!-- Modal content-->
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
        <h4 class=\"modal-title\">Confirm</h4>
      </div>
      <form action=\"{{ url('uman_third_party_users_delete') }}\" method=\"PUT\">
        <input type = \"hidden\" name=\"userId\" id=\"delete-user-id\"> 
          <div class=\"modal-body\">
            <p>Do you really wan to delete this third party ?</p>
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
        <h1 id=\"titre_help\">List of Third party users</h1>
        <div id=\"description_help\">Manage the users third party.</div>
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
                    <h5>Users third party list</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"third-party-users-list\">
                        <thead>
                            <tr>
                                <th>Login</th>
                                <th>First name</th>
                                <th>Last name</th>
                                <th class=\"no-sort\">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for person in thirdPartyUsers %}
                                <tr>
                                    <td>{{ person.log_user }}</td>
                                    <td>{{ person.prenom_user }}</td>
                                    <td>{{ person.nom_user }}</td>
                                    <td><a class=\"btn btn-primary\" href=\"{{ url('uman_third_party_users_edit', {\"user\": person.id_user}) }}\"><i class=\"icon-edit\"> Edit</i></a> <a class=\"btn btn-danger\" id=\"delete-third-party-user\" data-toggle=\"modal\" data-user-id = \"{{ person.id_user }}\" data-target=\"#thirdPartyUserModel\" ><i class=\"icon-remove\"> Delete</i></a></td>
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
", "@EasyjetUman/ThirdPartyUsers/showAll.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\UmanBundle\\Resources\\views\\ThirdPartyUsers\\showAll.html.twig");
    }
}
