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

/* @EasyjetOtp/Mails/mailRefuseDisruption.html.twig */
class __TwigTemplate_1372757b07881d45720ca31fbddacc88b82c780f0b37e16c4ff7e5354d87d05d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Mails/mailRefuseDisruption.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Mails/mailRefuseDisruption.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        <title>Document sans titre</title>
        <style>
            a:link, a:visited {
                text-decoration: none;
                color: #cc0000;
            }
            a:hover {
                color: #000;
            }
            html, body, form, fieldset, h1, h2, h3, h4, h5, h6, p, pre, blockquote, ul, ol, li, dl, dt, dd, address {
                margin:0;
                padding:0;
            }
            ul,li {
                list-style-type:none;
            }
            .hide {
                display: none;
            }
            img {
                border: none;
            }
            a img {
                border: none;
            }

            #help {
                padding: 10px;
                margin: 5px 10px 10px 10px;
            }
            #help h1 {
                font-family: \"Lucida Sans Unicode\", Tahoma, Geneva, sans-serif;
                font-size:1em;
                color:#262626;
                font-weight:normal;
                padding:0;
                margin:0 0 10px 0;
            }

            #contenu_page {
                margin:0 10px 10px 10px;
                padding:0;
                background-color:#f9f9f9;
                text-align:center;
                border-top: 1px solid #999;
                border-bottom: 1px solid #999;
                overflow:hidden;
            }
            table.normal_table {
                border:none;
                width: 95%;
                border-collapse:collapse;
                margin-left:20px;
                margin-bottom:40px;
            }
            .normal_table th {
                border-bottom: 1px solid #333333;
                font-family:Verdana, Arial, Helvetica, sans-serif;
                color:#333333;
                font-size:.94em;
                vertical-align:bottom;
                height:25px;
                text-align:right;
            }
            .normal_table td {
                color:#333333;
                padding:3px 0 2px 0;
                text-align:right;
                border-bottom: 1px dashed #b3b3b3;
                font-size:1em;
            }
            .normal_table tr.survol:hover {
                background-color:#E5E5E5;
                cursor:pointer;
            }

        </style>
    </head>

    <body>

        <div id=\"rightcol\">
            <!-- Champ d'aide pour expliquer la page  l'utilisateur -->
            <div id=\"help\">

                <h1>Dear ";
        // line 90
        echo twig_escape_filter($this->env, (isset($context["user_firstname"]) || array_key_exists("user_firstname", $context) ? $context["user_firstname"] : (function () { throw new RuntimeError('Variable "user_firstname" does not exist.', 90, $this->source); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["user_lastname"]) || array_key_exists("user_lastname", $context) ? $context["user_lastname"] : (function () { throw new RuntimeError('Variable "user_lastname" does not exist.', 90, $this->source); })()), "html", null, true);
        echo "</h1>
                <div id=\"description_help\">
                    <p>
                        You have submitted a disruption claim on the ";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["submission_date"]) || array_key_exists("submission_date", $context) ? $context["submission_date"] : (function () { throw new RuntimeError('Variable "submission_date" does not exist.', 93, $this->source); })()), "html", null, true);
        echo " 
                        After investigation, you claim has been rejected.
                        The reason for this is :
                    </p>
                    <p><strong>";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["refuse_reason"]) || array_key_exists("refuse_reason", $context) ? $context["refuse_reason"] : (function () { throw new RuntimeError('Variable "refuse_reason" does not exist.', 97, $this->source); })()), "html", null, true);
        echo "</strong></p>
                    <p>
                        We hope that this is acceptable for you<br>
                        Many thanks.<br><br>

                        On behalf of the swiss HR team<br>
                        ";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["admin_user"]) || array_key_exists("admin_user", $context) ? $context["admin_user"] : (function () { throw new RuntimeError('Variable "admin_user" does not exist.', 103, $this->source); })()), "html", null, true);
        echo "
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetOtp/Mails/mailRefuseDisruption.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 103,  149 => 97,  142 => 93,  134 => 90,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE HTML PUBLIC \"-//W3C//DTD HTML 4.01 Transitional//EN\" \"http://www.w3.org/TR/html4/loose.dtd\">
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\">
        <title>Document sans titre</title>
        <style>
            a:link, a:visited {
                text-decoration: none;
                color: #cc0000;
            }
            a:hover {
                color: #000;
            }
            html, body, form, fieldset, h1, h2, h3, h4, h5, h6, p, pre, blockquote, ul, ol, li, dl, dt, dd, address {
                margin:0;
                padding:0;
            }
            ul,li {
                list-style-type:none;
            }
            .hide {
                display: none;
            }
            img {
                border: none;
            }
            a img {
                border: none;
            }

            #help {
                padding: 10px;
                margin: 5px 10px 10px 10px;
            }
            #help h1 {
                font-family: \"Lucida Sans Unicode\", Tahoma, Geneva, sans-serif;
                font-size:1em;
                color:#262626;
                font-weight:normal;
                padding:0;
                margin:0 0 10px 0;
            }

            #contenu_page {
                margin:0 10px 10px 10px;
                padding:0;
                background-color:#f9f9f9;
                text-align:center;
                border-top: 1px solid #999;
                border-bottom: 1px solid #999;
                overflow:hidden;
            }
            table.normal_table {
                border:none;
                width: 95%;
                border-collapse:collapse;
                margin-left:20px;
                margin-bottom:40px;
            }
            .normal_table th {
                border-bottom: 1px solid #333333;
                font-family:Verdana, Arial, Helvetica, sans-serif;
                color:#333333;
                font-size:.94em;
                vertical-align:bottom;
                height:25px;
                text-align:right;
            }
            .normal_table td {
                color:#333333;
                padding:3px 0 2px 0;
                text-align:right;
                border-bottom: 1px dashed #b3b3b3;
                font-size:1em;
            }
            .normal_table tr.survol:hover {
                background-color:#E5E5E5;
                cursor:pointer;
            }

        </style>
    </head>

    <body>

        <div id=\"rightcol\">
            <!-- Champ d'aide pour expliquer la page  l'utilisateur -->
            <div id=\"help\">

                <h1>Dear {{ user_firstname }} {{ user_lastname }}</h1>
                <div id=\"description_help\">
                    <p>
                        You have submitted a disruption claim on the {{ submission_date }} 
                        After investigation, you claim has been rejected.
                        The reason for this is :
                    </p>
                    <p><strong>{{ refuse_reason }}</strong></p>
                    <p>
                        We hope that this is acceptable for you<br>
                        Many thanks.<br><br>

                        On behalf of the swiss HR team<br>
                        {{ admin_user }}
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>
", "@EasyjetOtp/Mails/mailRefuseDisruption.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\OtpBundle\\Resources\\views\\Mails\\mailRefuseDisruption.html.twig");
    }
}
