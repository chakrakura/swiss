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

/* @EasyjetHris/Mail/deactivateMover.html.twig */
class __TwigTemplate_b4bc3632609505fcf1e190d83b91cbdde8e223330ce52fda6f6cc97bb30646b9 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@EasyjetSwissinsideCore/Mail/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/Mail/deactivateMover.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetHris/Mail/deactivateMover.html.twig"));

        $this->parent = $this->loadTemplate("@EasyjetSwissinsideCore/Mail/structure.html.twig", "@EasyjetHris/Mail/deactivateMover.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "
";
        // line 6
        echo "    <p>Dear SD, </p>
    <p>This is to inform you that below users have been moved from swiss pay group. It is now requested to remove all the ad groups related to swissinside from AD for these users.</p>
    <p>The related SwissInside AD groups are starting with : (EZS swissinside xwz)</p>
    <p>Please proceed for the following users :</p>
    
    <h3>List of movers who will be marked as new leavers in swissinside</h3>
    
        ";
        // line 13
        if (twig_length_filter($this->env, (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 13, $this->source); })()))) {
            // line 14
            echo "            <table class=\"table table-bordered table-striped table-hover data-table\" >
                <thead>
                    <tr>
                        <th>Station</th>
                        <th>Employee ID</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    ";
            // line 25
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 25, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 26
                echo "                        <tr>
                            <td>";
                // line 27
                echo twig_get_attribute($this->env, $this->source, $context["user"], "station", [], "any", false, false, false, 27);
                echo "</td>
                            <td>";
                // line 28
                echo twig_get_attribute($this->env, $this->source, $context["user"], "employeeId", [], "any", false, false, false, 28);
                echo "</td>
                            <td>";
                // line 29
                echo twig_get_attribute($this->env, $this->source, $context["user"], "firstname", [], "any", false, false, false, 29);
                echo "</td>
                            <td>";
                // line 30
                echo twig_get_attribute($this->env, $this->source, $context["user"], "lastname", [], "any", false, false, false, 30);
                echo "</td>
                            <td>";
                // line 31
                echo twig_get_attribute($this->env, $this->source, $context["user"], "email", [], "any", false, false, false, 31);
                echo "</td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "                </tbody>
            </table>
        ";
        } else {
            // line 37
            echo "            <p>No new employee found</p>
        ";
        }
        // line 39
        echo "
    <p>
        Best regards,<br>
        Swissinside Robot
    </p>
";
        // line 45
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetHris/Mail/deactivateMover.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 45,  136 => 39,  132 => 37,  127 => 34,  118 => 31,  114 => 30,  110 => 29,  106 => 28,  102 => 27,  99 => 26,  95 => 25,  82 => 14,  80 => 13,  71 => 6,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@EasyjetSwissinsideCore/Mail/structure.html.twig\" %}

{% block content %}

{% autoescape false %}
    <p>Dear SD, </p>
    <p>This is to inform you that below users have been moved from swiss pay group. It is now requested to remove all the ad groups related to swissinside from AD for these users.</p>
    <p>The related SwissInside AD groups are starting with : (EZS swissinside xwz)</p>
    <p>Please proceed for the following users :</p>
    
    <h3>List of movers who will be marked as new leavers in swissinside</h3>
    
        {% if content|length %}
            <table class=\"table table-bordered table-striped table-hover data-table\" >
                <thead>
                    <tr>
                        <th>Station</th>
                        <th>Employee ID</th>
                        <th>First name</th>
                        <th>Last name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    {% for user in content %}
                        <tr>
                            <td>{{ user.station }}</td>
                            <td>{{ user.employeeId }}</td>
                            <td>{{ user.firstname }}</td>
                            <td>{{ user.lastname }}</td>
                            <td>{{ user.email }}</td>
                        </tr>
                    {% endfor %}
                </tbody>
            </table>
        {% else %}
            <p>No new employee found</p>
        {% endif %}

    <p>
        Best regards,<br>
        Swissinside Robot
    </p>
{% endautoescape %}

{% endblock %}
", "@EasyjetHris/Mail/deactivateMover.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\HrisBundle\\Resources\\views\\Mail\\deactivateMover.html.twig");
    }
}
