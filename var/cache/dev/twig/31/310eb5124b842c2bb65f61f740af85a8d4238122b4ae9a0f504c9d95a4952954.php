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

/* @EasyjetSwissinsideCore/AdGroup/index.html.twig */
class __TwigTemplate_57c8383947aa18acbe4d871441e29d48744ef296019afd36a50c0e93623bb540 extends Template
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
            'specificCss' => [$this, 'block_specificCss'],
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "EasyjetSwissinsideCoreBundle:Base:swissinsideStructure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSwissinsideCore/AdGroup/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSwissinsideCore/AdGroup/index.html.twig"));

        $this->parent = $this->loadTemplate("EasyjetSwissinsideCoreBundle:Base:swissinsideStructure.html.twig", "@EasyjetSwissinsideCore/AdGroup/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Manage hrdb user data";
        
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

        // line 6
        echo "
<script>
    ";
        // line 8
        if ((isset($context["loading"]) || array_key_exists("loading", $context) ? $context["loading"] : (function () { throw new RuntimeError('Variable "loading" does not exist.', 8, $this->source); })())) {
            // line 9
            echo "
        var width = 50;
        var complete = false;
        var intervalFunction = function() {
            if (!complete) {
                width++;
                if (width >= 98) {
                    width = 98;
                }
                \$(\"#loading-bar\").css({
                    'width': width + '%'
                });

                timer = 700;

                if (width <= 75) {
                    timer = 300;
                }
                
                setTimeout(intervalFunction, timer);
            }
            
        };

        intervalFunction();

        \$.ajax({
            dataType: \"json\",
            url: \"";
            // line 37
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ad_groups_list");
            echo "\"
        }).done(function(data) {
            if (data.success) {
                window.location.reload(true);
            } else {
                bootbox.alert(\"An error occured : \" + data.error);
                \$(\"#loading-bar\").removeClass('progress-bar-dark-green').addClass('progress-bar-dark-red');
            }
            
        }).fail(function() {
            bootbox.alert(\"An unknown error occured\");
            \$(\"#loading-bar\").removeClass('progress-bar-dark-green').addClass('progress-bar-dark-red');
        }).complete(function() {
            complete = true;
            \$(\"#loading-bar\").css({
                'width': '100%'
            }).parent().removeClass('active');
        });

        
    ";
        }
        // line 58
        echo "    swissinside.menuSelected('menu_ad_groups');
</script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 62
    public function block_specificCss($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificCss"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificCss"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 66
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 67
        echo "
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Active directory groups</h1>
        <div id=\"description_help\">Hereafter, you can see the list of active directory groups that you can manage.</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 76
        if ((isset($context["loading"]) || array_key_exists("loading", $context) ? $context["loading"] : (function () { throw new RuntimeError('Variable "loading" does not exist.', 76, $this->source); })())) {
            // line 77
            echo "                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>Loading ldap manageable groups</h5>
                    </div>
                    <div class=\"widget-content\">
                        Loading group list. Please wait ...
                        <div class=\"progress progress-striped active\">
                            <div style=\"width: 50%;\" class=\"progress-bar progress-bar-dark-green\" id=\"loading-bar\"></div>
                        </div>
                    </div>
                </div>
            ";
        } else {
            // line 92
            echo "                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>Active directory groups</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"\">
                            <thead>
                                <tr>
                                    <th>Group Name</th>
                                    <th>Application Name</th>
                                    <th>Right level</th>
                                    <th style=\"width:180px\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) || array_key_exists("groups", $context) ? $context["groups"] : (function () { throw new RuntimeError('Variable "groups" does not exist.', 110, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 111
                echo "                                    <tr>
                                        <td>
                                            ";
                // line 113
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "group_name", [], "any", false, false, false, 113), "html", null, true);
                echo "
                                            <span class=\"help-block text-left\">";
                // line 114
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "group_description", [], "any", false, false, false, 114), "html", null, true);
                echo "</span>
                                        </td>
                                        <td>";
                // line 116
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "app_name", [], "any", false, false, false, 116), "html", null, true);
                echo "</td>
                                        <td>";
                // line 117
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["group"], "type_user", [], "any", false, false, false, 117), "html", null, true);
                echo "</td>
                                        <td>
                                            <a class=\"btn btn-mini btn-default\" href=\"";
                // line 119
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("ad_right_edit");
                echo "?adGroup=";
                echo twig_escape_filter($this->env, twig_urlencode_filter(twig_get_attribute($this->env, $this->source, $context["group"], "ldap_group_name", [], "any", false, false, false, 119)), "html", null, true);
                echo "\" data-toggle=\"popover\">
                                                <i class=\"icon-align-justify\"></i> Users list
                                            </a>
                                        </td>
                                    </tr>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 125
            echo "                            </tbody>
                        </table>
                    </div>
                </div>
            ";
        }
        // line 130
        echo "            
        </div>
    </div>
</div>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetSwissinsideCore/AdGroup/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 130,  280 => 125,  266 => 119,  261 => 117,  257 => 116,  252 => 114,  248 => 113,  244 => 111,  240 => 110,  220 => 92,  203 => 77,  201 => 76,  190 => 67,  180 => 66,  162 => 62,  150 => 58,  126 => 37,  96 => 9,  94 => 8,  90 => 6,  80 => 5,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"EasyjetSwissinsideCoreBundle:Base:swissinsideStructure.html.twig\" %}

{% block title %}Manage hrdb user data{% endblock %}

{% block specificJs %}

<script>
    {% if loading %}

        var width = 50;
        var complete = false;
        var intervalFunction = function() {
            if (!complete) {
                width++;
                if (width >= 98) {
                    width = 98;
                }
                \$(\"#loading-bar\").css({
                    'width': width + '%'
                });

                timer = 700;

                if (width <= 75) {
                    timer = 300;
                }
                
                setTimeout(intervalFunction, timer);
            }
            
        };

        intervalFunction();

        \$.ajax({
            dataType: \"json\",
            url: \"{{ url('ad_groups_list') }}\"
        }).done(function(data) {
            if (data.success) {
                window.location.reload(true);
            } else {
                bootbox.alert(\"An error occured : \" + data.error);
                \$(\"#loading-bar\").removeClass('progress-bar-dark-green').addClass('progress-bar-dark-red');
            }
            
        }).fail(function() {
            bootbox.alert(\"An unknown error occured\");
            \$(\"#loading-bar\").removeClass('progress-bar-dark-green').addClass('progress-bar-dark-red');
        }).complete(function() {
            complete = true;
            \$(\"#loading-bar\").css({
                'width': '100%'
            }).parent().removeClass('active');
        });

        
    {% endif %}
    swissinside.menuSelected('menu_ad_groups');
</script>
{% endblock specificJs %}

{% block specificCss %}
{% endblock specificCss %}


{% block container %}

<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Active directory groups</h1>
        <div id=\"description_help\">Hereafter, you can see the list of active directory groups that you can manage.</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            {% if loading %}
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>Loading ldap manageable groups</h5>
                    </div>
                    <div class=\"widget-content\">
                        Loading group list. Please wait ...
                        <div class=\"progress progress-striped active\">
                            <div style=\"width: 50%;\" class=\"progress-bar progress-bar-dark-green\" id=\"loading-bar\"></div>
                        </div>
                    </div>
                </div>
            {% else %}
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>Active directory groups</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        <table width=\"100%\" class=\"table table-bordered table-striped table-hover data-table\" id=\"\">
                            <thead>
                                <tr>
                                    <th>Group Name</th>
                                    <th>Application Name</th>
                                    <th>Right level</th>
                                    <th style=\"width:180px\">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                {% for group in groups %}
                                    <tr>
                                        <td>
                                            {{ group.group_name }}
                                            <span class=\"help-block text-left\">{{ group.group_description }}</span>
                                        </td>
                                        <td>{{ group.app_name }}</td>
                                        <td>{{ group.type_user }}</td>
                                        <td>
                                            <a class=\"btn btn-mini btn-default\" href=\"{{ url('ad_right_edit') }}?adGroup={{ group.ldap_group_name|url_encode }}\" data-toggle=\"popover\">
                                                <i class=\"icon-align-justify\"></i> Users list
                                            </a>
                                        </td>
                                    </tr>
                                {% endfor %}
                            </tbody>
                        </table>
                    </div>
                </div>
            {% endif %}
            
        </div>
    </div>
</div>

{% endblock container %}
", "@EasyjetSwissinsideCore/AdGroup/index.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\SwissinsideCoreBundle\\Resources\\views\\AdGroup\\index.html.twig");
    }
}
