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

/* @EasyjetUman/Admin/Applications/edit.html.twig */
class __TwigTemplate_efa3a368ea4fee65699e6eb9ddac59fb0d3e1520b2f6b5fcfda66a40ac82fd3a extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetUman/Admin/Applications/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetUman/Admin/Applications/edit.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetUman/Admin/Applications/edit.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetUman/Base/structure.html.twig", "@EasyjetUman/Admin/Applications/edit.html.twig", 1);
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

        echo "Edit Application";
        
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

    \$(document).on(\"click\", \".applicationsTypesUsersID\", function () {
        var id = \$(this).data('applications-types-users-id');
        \$('#applications-types-users-id').val(id);
    });
    
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 21
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 22
        echo "
<!-- Modal -->
<div id=\"applicationsTypesUsersModal\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h4 class=\"modal-title\">Confirm</h4>
        </div>
            <form action=\"";
        // line 33
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("uman_admin_application_type_remove");
        echo "\" method=\"POST\">
            <input type=\"hidden\" name=\"applicationsTypesUsersId\" id=\"applications-types-users-id\">
            <input type=\"hidden\" name=\"applicationId\" value = \"";
        // line 35
        echo twig_escape_filter($this->env, (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 35, $this->source); })()), "html", null, true);
        echo "\">
            <div class=\"modal-body\">
                <p>Are you sure that you want to remove this application Type User ?</p>
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
        <h1 id=\"titre_help\">Edit Applications</h1>         
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 57
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 57, $context, $this->getSourceContext());
        echo "
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a class=\"btn btn-primary\"  href=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("uman_admin_add_application_type_users", ["id" => (isset($context["id"]) || array_key_exists("id", $context) ? $context["id"] : (function () { throw new RuntimeError('Variable "id" does not exist.', 63, $this->source); })()), "type" => "add"]), "html", null, true);
        echo "\" ><i class=\"icon-plus\"></i> Add a type</a>
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
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"employees-list\">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Description</th>
                                <th>Value</th>
                                <th>Ad group</th>
                                <th class=\"no-sort\" style=\"width:250px\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["applicationTypeUsers"]) || array_key_exists("applicationTypeUsers", $context) ? $context["applicationTypeUsers"] : (function () { throw new RuntimeError('Variable "applicationTypeUsers" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 89
            echo "                                <tr>
                                    <td>";
            // line 90
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "type", [], "any", false, false, false, 90), "html", null, true);
            echo "</td>
                                    <td>";
            // line 91
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "commentaire", [], "any", false, false, false, 91), "html", null, true);
            echo "</td>
                                    <td>";
            // line 92
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getValeur", [], "any", false, false, false, 92), "html", null, true);
            echo "</td>
                                    <td>";
            // line 93
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getAdGroup", [], "any", false, false, false, 93), "html", null, true);
            echo "</td>
                                    <td><a class=\"btn btn-primary\" href=\"";
            // line 94
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("uman_admin_add_application_type_users", ["id" => twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 94), "type" => "edit"]), "html", null, true);
            echo "\"><i class=\"icon-edit\"> Edit </i></a> <a class=\"btn btn-danger applicationsTypesUsersID\" data-applications-types-users-id= ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "id", [], "any", false, false, false, 94), "html", null, true);
            echo " data-toggle=\"modal\" data-target=\"#applicationsTypesUsersModal\" ><i class=\"icon-remove\"> Remove</i></a></td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 97
        echo "                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>        
    </div>

    
    ";
        // line 106
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">

                    <div class=\"widget-title\">
                        <h5>Application description</h5>
                    </div>

                    <div class=\"widget-content nopadding\">

                        <div class=\"form-group\">
                            <label class=\"control-label\"> ";
        // line 118
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 118, $this->source); })()), "initiaux", [], "any", false, false, false, 118), 'label');
        echo " :</label>
                            <div class=\"controls\">
                                ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), "initiaux", [], "any", false, false, false, 120), 'widget', ["attr" => ["class" => "form-control", "readonly" => "true"]]);
        echo "
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\"> ";
        // line 125
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 125, $this->source); })()), "nom", [], "any", false, false, false, 125), 'label');
        echo " :</label>
                            <div class=\"controls\">
                                ";
        // line 127
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "nom", [], "any", false, false, false, 127), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\"> ";
        // line 132
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 132, $this->source); })()), "description", [], "any", false, false, false, 132), 'label');
        echo " :</label>
                            <div class=\"controls\">
                                ";
        // line 134
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 134, $this->source); })()), "description", [], "any", false, false, false, 134), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                            </div>
                        </div>

                        <div class=\"form-actions\">
                            <input type=\"submit\" class=\"btn btn-primary\" />
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    ";
        // line 145
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 145, $this->source); })()), 'form_end');
        echo "
    
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetUman/Admin/Applications/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  308 => 145,  294 => 134,  289 => 132,  281 => 127,  276 => 125,  268 => 120,  263 => 118,  248 => 106,  237 => 97,  226 => 94,  222 => 93,  218 => 92,  214 => 91,  210 => 90,  207 => 89,  203 => 88,  175 => 63,  166 => 57,  141 => 35,  136 => 33,  123 => 22,  113 => 21,  92 => 7,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetUman/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Edit Application{% endblock %}

{% block specificJs %}
{{ parent() }}

<script>

    \$(document).on(\"click\", \".applicationsTypesUsersID\", function () {
        var id = \$(this).data('applications-types-users-id');
        \$('#applications-types-users-id').val(id);
    });
    
</script>
{% endblock specificJs %}
        


{% block container %}

<!-- Modal -->
<div id=\"applicationsTypesUsersModal\" class=\"modal fade\" role=\"dialog\">
    <div class=\"modal-dialog\">

        <!-- Modal content-->
        <div class=\"modal-content\">
        <div class=\"modal-header\">
            <button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>
            <h4 class=\"modal-title\">Confirm</h4>
        </div>
            <form action=\"{{ url('uman_admin_application_type_remove') }}\" method=\"POST\">
            <input type=\"hidden\" name=\"applicationsTypesUsersId\" id=\"applications-types-users-id\">
            <input type=\"hidden\" name=\"applicationId\" value = \"{{ id }}\">
            <div class=\"modal-body\">
                <p>Are you sure that you want to remove this application Type User ?</p>
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
        <h1 id=\"titre_help\">Edit Applications</h1>         
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ macros.wizz() }}
        </div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a class=\"btn btn-primary\"  href=\"{{ url('uman_admin_add_application_type_users', {\"id\": id, \"type\": 'add'}) }}\" ><i class=\"icon-plus\"></i> Add a type</a>
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
                    <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"employees-list\">
                        <thead>
                            <tr>
                                <th>Type</th>
                                <th>Description</th>
                                <th>Value</th>
                                <th>Ad group</th>
                                <th class=\"no-sort\" style=\"width:250px\">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {% for user in applicationTypeUsers %}
                                <tr>
                                    <td>{{ user.type }}</td>
                                    <td>{{ user.commentaire }}</td>
                                    <td>{{ user.getValeur }}</td>
                                    <td>{{ user.getAdGroup }}</td>
                                    <td><a class=\"btn btn-primary\" href=\"{{ url('uman_admin_add_application_type_users', {\"id\": user.id, \"type\": 'edit'}) }}\"><i class=\"icon-edit\"> Edit </i></a> <a class=\"btn btn-danger applicationsTypesUsersID\" data-applications-types-users-id= {{ user.id }} data-toggle=\"modal\" data-target=\"#applicationsTypesUsersModal\" ><i class=\"icon-remove\"> Remove</i></a></td>
                                </tr>
                            {% endfor %}
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>        
    </div>

    
    {{ form_start(form, {'attr': {'class': 'form-horizontal'}} ) }}
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">

                    <div class=\"widget-title\">
                        <h5>Application description</h5>
                    </div>

                    <div class=\"widget-content nopadding\">

                        <div class=\"form-group\">
                            <label class=\"control-label\"> {{ form_label(form.initiaux) }} :</label>
                            <div class=\"controls\">
                                {{ form_widget(form.initiaux, { 'attr': {'class': 'form-control', 'readonly':'true'} } ) }}
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\"> {{ form_label(form.nom) }} :</label>
                            <div class=\"controls\">
                                {{ form_widget(form.nom, { 'attr': {'class': 'form-control'} } ) }}
                            </div>
                        </div>

                        <div class=\"form-group\">
                            <label class=\"control-label\"> {{ form_label(form.description) }} :</label>
                            <div class=\"controls\">
                                {{ form_widget(form.description, { 'attr': {'class': 'form-control'} } ) }}
                            </div>
                        </div>

                        <div class=\"form-actions\">
                            <input type=\"submit\" class=\"btn btn-primary\" />
                        </div>
                    </div>
                </div>
            </div>        
        </div>
    {{ form_end(form) }}
    
</div>

{% endblock container %}", "@EasyjetUman/Admin/Applications/edit.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\UmanBundle\\Resources\\views\\Admin\\Applications\\edit.html.twig");
    }
}
