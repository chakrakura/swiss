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

/* @EasyjetSwissinsideCore/Default/dashboard.html.twig */
class __TwigTemplate_800a8e6c20e72f7be33f6144af38311244bd41c78afe7ddee9194ec9d5094fb0 extends Template
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
        return "@EasyjetSwissinsideCore/Base/swissinsideStructure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSwissinsideCore/Default/dashboard.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSwissinsideCore/Default/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("@EasyjetSwissinsideCore/Base/swissinsideStructure.html.twig", "@EasyjetSwissinsideCore/Default/dashboard.html.twig", 1);
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

        // line 4
        echo "    ";
        if ((0 === twig_compare((isset($context["easyjetEnv"]) || array_key_exists("easyjetEnv", $context) ? $context["easyjetEnv"] : (function () { throw new RuntimeError('Variable "easyjetEnv" does not exist.', 4, $this->source); })()), "swissinside"))) {
            // line 5
            echo "    Swissinside dashboard
    ";
        } else {
            // line 7
            echo "        Dashboard
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_specificJs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificJs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificJs"));

        // line 13
        echo "    ";
        $this->displayParentBlock("specificJs", $context, $blocks);
        echo "
    ";
        // line 14
        if (((null === (isset($context["supportConfirmation"]) || array_key_exists("supportConfirmation", $context) ? $context["supportConfirmation"] : (function () { throw new RuntimeError('Variable "supportConfirmation" does not exist.', 14, $this->source); })())) && (0 === twig_compare((isset($context["easyjetEnv"]) || array_key_exists("easyjetEnv", $context) ? $context["easyjetEnv"] : (function () { throw new RuntimeError('Variable "easyjetEnv" does not exist.', 14, $this->source); })()), "swissinside")))) {
            // line 15
            echo "    <script>
        \$(function() { 
            bootbox.dialog({
            message: \"Please note that any <b>IT issues</b> must be reported to the easyJet IT Service Desk by <b>calling +44 (0) 1582 525247</b>. To open a <b>service request</b>, you can use the online support form by clicking the <b>\\\"IT SSP\\\" link on top right of Swissinside extranet main page</b>.<br /><br />\" +
                        \"Thank you for your understanding.<br /><br />\" +
                        \"IT support team.<br /><br />\" +
                        \"<input value='hide' type='checkbox' name='support_message_hide' id='support_message_hide' /> Don't show again\",
            title: \"Reminder\",
            buttons: {
              main: {
                label: \"I understand\",
                className: \"btn-primary\",
                callback: function() {
                    if(\$('#support_message_hide').is(\":checked\")) {
                        swissinside.SupportMessageConfirmation('";
            // line 29
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("dashboard_confirm_support_message");
            echo "');
                    }
                }
              }
            }
          });
        });
    </script>
    ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 42
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 43
        echo "
";
        // line 44
        if ((0 === twig_compare((isset($context["easyjetEnv"]) || array_key_exists("easyjetEnv", $context) ? $context["easyjetEnv"] : (function () { throw new RuntimeError('Variable "easyjetEnv" does not exist.', 44, $this->source); })()), "swissinside"))) {
            // line 45
            echo "    <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">Dashboard</h1>
            <div id=\"description_help\">Welcome to SwissInside. ";
            // line 48
            if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["myself"]) || array_key_exists("myself", $context) ? $context["myself"] : (function () { throw new RuntimeError('Variable "myself" does not exist.', 48, $this->source); })()), "manuel", [], "any", false, false, false, 48), 0))) {
                echo "Please find your personal data below and ensure that everything is up to date.";
            }
            echo "</div>
        </div>


        ";
            // line 58
            echo "

        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\"><span class=\"icon\"><i class=\"icon-home\"></i></span><h5>Information security</h5></div>
                    <div class=\"widget-content\">
                        <p>Dear ";
            // line 65
            echo twig_escape_filter($this->env, (isset($context["myself"]) || array_key_exists("myself", $context) ? $context["myself"] : (function () { throw new RuntimeError('Variable "myself" does not exist.', 65, $this->source); })()), "html", null, true);
            echo ",</p>
                        <p>
                            Information security is a <strong>major concern at easyJet</strong>.
                        </p>
                        <p>
                            How to be infoSafe ?
                        </p>
                        <p>
                            Please have a look to the infoSafe documentation.
                            You can reach it from the shield icon in the top right of the screen.
                        </p>
                        <p>
                            Or you can click <a href=\"http://inside/infosafehub/Pages/index.html\">here</a>.
                        </p>
                        <p>
                            Best regards,<br>
                            The IT depts.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        ";
            // line 87
            if (true) {
                // line 88
                echo "            ";
                if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["myself"]) || array_key_exists("myself", $context) ? $context["myself"] : (function () { throw new RuntimeError('Variable "myself" does not exist.', 88, $this->source); })()), "manuel", [], "any", false, false, false, 88), 0))) {
                    // line 89
                    echo "                <div class=\"row\">
                    <div class=\"col-xs-12\">

                        ";
                    // line 92
                    if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["myself"]) || array_key_exists("myself", $context) ? $context["myself"] : (function () { throw new RuntimeError('Variable "myself" does not exist.', 92, $this->source); })()), "external", [], "any", false, false, false, 92), 1))) {
                        // line 93
                        echo "                            <div class=\"alert alert-info\">
                                <h4 class=\"alert-heading\">Non swissinside user access detected</h4>
                                should you be an easyJet Switzerland employee, you should not get this message at your login.
                                Please open a Request to the IT service desk, You will have to use the \"support\" tab located just above.
                            </div>
                        ";
                    }
                    // line 99
                    echo "
                        <div class=\"widget-box\">
                            <div class=\"widget-title\"><span class=\"icon\"><i class=\"icon-file\"></i></span><h5>News</h5></div>
                            <div class=\"widget-content nopadding\">
                                <ul class=\"recent-posts\">
                                    ";
                    // line 104
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["news"]) || array_key_exists("news", $context) ? $context["news"] : (function () { throw new RuntimeError('Variable "news" does not exist.', 104, $this->source); })()));
                    foreach ($context['_seq'] as $context["_key"] => $context["currentNews"]) {
                        // line 105
                        echo "                                        <li>
                                            <div class=\"\">
                                                <span class=\"user-info\"> By: easyjet on ";
                        // line 107
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentNews"], "date", [], "any", false, false, false, 107), "d/m/Y"), "html", null, true);
                        echo " </span>
                                                <p>
                                                    ";
                        // line 109
                        if (twig_get_attribute($this->env, $this->source, $context["currentNews"], "lien", [], "any", false, false, false, 109)) {
                            // line 110
                            echo "                                                        <a href=\"#\">";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentNews"], "titre", [], "any", false, false, false, 110), "html", null, true);
                            echo "</a>
                                                    ";
                        } else {
                            // line 112
                            echo "                                                        ";
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["currentNews"], "titre", [], "any", false, false, false, 112), "html", null, true);
                            echo "
                                                    ";
                        }
                        // line 114
                        echo "                                                </p>
                                            </div>
                                        </li>
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['currentNews'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 118
                    echo "
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            ";
                }
                // line 125
                echo "        ";
            }
            // line 126
            echo "        </div>

    </div>
";
        } else {
            // line 130
            echo "     <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">Dashboard</h1>
            <div id=\"description_help\">Welcome to OrangeFile. </div>
        </div>


        ";
            // line 143
            echo "

        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\"><span class=\"icon\"><i class=\"icon-home\"></i></span><h5>Information security</h5></div>
                    <div class=\"widget-content\">
                       <p>
                                Welcome to the easyJet <strong>OrangeFile</strong>. Use this to safely and securely transfer
                                data to your colleagues within easyJet, or to external 3 rd parties.
                            </p>
                            <p>
                                Once you’ve uploaded your file, you’ll need to add the email addresses of the
                                recipients. The recipient will then receive an email with a link to the file which they
                                can download. First time 3 rd party users will receive an additional email to register
                                their details before they can download.
                            </p>
                            <p>
                                The file is held in the <strong>OrangeFile</strong> for 7 days, after which it’s deleted.
                                GDPR compliant and ideally used for sending large files containing personal or
                                sensitive data, <strong>OrangeFile</strong> helps to reduce your data footprint by avoiding having
                                emails with confidential attachments in your sent items or inbox.
                            </p>
                            <p>
                                If you have an issue please email <a href=\"mailto:easyjetITservicedesk@easyjet.com\">easyjetITservicedesk@easyjet.com</a>, if you have questions related to the functionalities, you can email <a href=\"mailto:ezs-it@easyjet.com\">ezs-it@easyjet.com</a>
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetSwissinsideCore/Default/dashboard.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  295 => 143,  286 => 130,  280 => 126,  277 => 125,  268 => 118,  259 => 114,  253 => 112,  247 => 110,  245 => 109,  240 => 107,  236 => 105,  232 => 104,  225 => 99,  217 => 93,  215 => 92,  210 => 89,  207 => 88,  205 => 87,  180 => 65,  171 => 58,  162 => 48,  157 => 45,  155 => 44,  152 => 43,  142 => 42,  122 => 29,  106 => 15,  104 => 14,  99 => 13,  89 => 12,  77 => 7,  73 => 5,  70 => 4,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@EasyjetSwissinsideCore/Base/swissinsideStructure.html.twig\" %} 

{% block title %}
    {% if easyjetEnv == \"swissinside\" %}
    Swissinside dashboard
    {% else %}
        Dashboard
    {% endif %}
{% endblock %}


{% block specificJs %}
    {{ parent() }}
    {% if supportConfirmation is null and easyjetEnv == \"swissinside\" %}
    <script>
        \$(function() { 
            bootbox.dialog({
            message: \"Please note that any <b>IT issues</b> must be reported to the easyJet IT Service Desk by <b>calling +44 (0) 1582 525247</b>. To open a <b>service request</b>, you can use the online support form by clicking the <b>\\\"IT SSP\\\" link on top right of Swissinside extranet main page</b>.<br /><br />\" +
                        \"Thank you for your understanding.<br /><br />\" +
                        \"IT support team.<br /><br />\" +
                        \"<input value='hide' type='checkbox' name='support_message_hide' id='support_message_hide' /> Don't show again\",
            title: \"Reminder\",
            buttons: {
              main: {
                label: \"I understand\",
                className: \"btn-primary\",
                callback: function() {
                    if(\$('#support_message_hide').is(\":checked\")) {
                        swissinside.SupportMessageConfirmation('{{ url('dashboard_confirm_support_message') }}');
                    }
                }
              }
            }
          });
        });
    </script>
    {% endif %}
{% endblock specificJs %}



{% block container %}

{% if easyjetEnv == \"swissinside\" %}
    <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">Dashboard</h1>
            <div id=\"description_help\">Welcome to SwissInside. {% if myself.manuel == 0 %}Please find your personal data below and ensure that everything is up to date.{% endif %}</div>
        </div>


        {# No longer needed
        {% if transitionStatus == \"current\" and myself.manuel == 0 %}
            {% include '@EasyjetSwissinsideCore/Default/dashboardTransition.html.twig' %}
        {% elseif transitionStatus == \"after\" and myself.manuel == 0 %}
            {% include '@EasyjetSwissinsideCore/Default/dashboardFinal.html.twig' %}
        #}


        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\"><span class=\"icon\"><i class=\"icon-home\"></i></span><h5>Information security</h5></div>
                    <div class=\"widget-content\">
                        <p>Dear {{ myself }},</p>
                        <p>
                            Information security is a <strong>major concern at easyJet</strong>.
                        </p>
                        <p>
                            How to be infoSafe ?
                        </p>
                        <p>
                            Please have a look to the infoSafe documentation.
                            You can reach it from the shield icon in the top right of the screen.
                        </p>
                        <p>
                            Or you can click <a href=\"http://inside/infosafehub/Pages/index.html\">here</a>.
                        </p>
                        <p>
                            Best regards,<br>
                            The IT depts.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        {% if true %}
            {% if myself.manuel != 0 %}
                <div class=\"row\">
                    <div class=\"col-xs-12\">

                        {% if myself.external == 1 %}
                            <div class=\"alert alert-info\">
                                <h4 class=\"alert-heading\">Non swissinside user access detected</h4>
                                should you be an easyJet Switzerland employee, you should not get this message at your login.
                                Please open a Request to the IT service desk, You will have to use the \"support\" tab located just above.
                            </div>
                        {% endif %}

                        <div class=\"widget-box\">
                            <div class=\"widget-title\"><span class=\"icon\"><i class=\"icon-file\"></i></span><h5>News</h5></div>
                            <div class=\"widget-content nopadding\">
                                <ul class=\"recent-posts\">
                                    {% for currentNews in news %}
                                        <li>
                                            <div class=\"\">
                                                <span class=\"user-info\"> By: easyjet on {{ currentNews.date|date(\"d/m/Y\") }} </span>
                                                <p>
                                                    {% if currentNews.lien %}
                                                        <a href=\"#\">{{ currentNews.titre }}</a>
                                                    {% else %}
                                                        {{ currentNews.titre }}
                                                    {% endif %}
                                                </p>
                                            </div>
                                        </li>
                                    {% endfor %}

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            {% endif %}
        {% endif %}
        </div>

    </div>
{% else %}
     <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">Dashboard</h1>
            <div id=\"description_help\">Welcome to OrangeFile. </div>
        </div>


        {# No longer needed
        {% if transitionStatus == \"current\" and myself.manuel == 0 %}
            {% include 'EasyjetSwissinsideCoreBundle:Default:dashboardTransition.html.twig' %}
        {% elseif transitionStatus == \"after\" and myself.manuel == 0 %}
            {% include 'EasyjetSwissinsideCoreBundle:Default:dashboardFinal.html.twig' %}
        #}


        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\"><span class=\"icon\"><i class=\"icon-home\"></i></span><h5>Information security</h5></div>
                    <div class=\"widget-content\">
                       <p>
                                Welcome to the easyJet <strong>OrangeFile</strong>. Use this to safely and securely transfer
                                data to your colleagues within easyJet, or to external 3 rd parties.
                            </p>
                            <p>
                                Once you’ve uploaded your file, you’ll need to add the email addresses of the
                                recipients. The recipient will then receive an email with a link to the file which they
                                can download. First time 3 rd party users will receive an additional email to register
                                their details before they can download.
                            </p>
                            <p>
                                The file is held in the <strong>OrangeFile</strong> for 7 days, after which it’s deleted.
                                GDPR compliant and ideally used for sending large files containing personal or
                                sensitive data, <strong>OrangeFile</strong> helps to reduce your data footprint by avoiding having
                                emails with confidential attachments in your sent items or inbox.
                            </p>
                            <p>
                                If you have an issue please email <a href=\"mailto:easyjetITservicedesk@easyjet.com\">easyjetITservicedesk@easyjet.com</a>, if you have questions related to the functionalities, you can email <a href=\"mailto:ezs-it@easyjet.com\">ezs-it@easyjet.com</a>
                            </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
{% endif %}
{% endblock container %}
", "@EasyjetSwissinsideCore/Default/dashboard.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\SwissinsideCoreBundle\\Resources\\views\\Default\\dashboard.html.twig");
    }
}
