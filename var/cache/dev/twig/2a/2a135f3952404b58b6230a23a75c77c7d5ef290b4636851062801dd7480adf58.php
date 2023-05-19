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

/* @EasyjetOtp/Mails/otpExportSuccess.html.twig */
class __TwigTemplate_a4b9c59d5b7d191273dd097b950ac44745ddf4b3a715a44233a166f2f1c2cd6d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Mails/otpExportSuccess.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/Mails/otpExportSuccess.html.twig"));

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

    <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">Claims Export</h1>         
            <div id=\"description_help\">Sector correction and disruption EIB file has been sent</div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
                <p>Hi PTT,</p>

                <p>This is to confirm that the CHE sector correction and disruption EIB file has been sent.</p>

                <p>It is available for you in the folder.
                <br>This has now to be checked, validated and tranmitted to WD</p>

                <p>Many thanks</p>

                <p>Swiss HR team</p>
            </div>         
        </div>
    </div>

 </body>
</html> ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetOtp/Mails/otpExportSuccess.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
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

    <div id=\"content\">
        <div id=\"content-header\">
            <h1 id=\"titre_help\">Claims Export</h1>         
            <div id=\"description_help\">Sector correction and disruption EIB file has been sent</div>
        </div>

        <div class=\"row\">
            <div class=\"col-xs-12\">
                <p>Hi PTT,</p>

                <p>This is to confirm that the CHE sector correction and disruption EIB file has been sent.</p>

                <p>It is available for you in the folder.
                <br>This has now to be checked, validated and tranmitted to WD</p>

                <p>Many thanks</p>

                <p>Swiss HR team</p>
            </div>         
        </div>
    </div>

 </body>
</html> ", "@EasyjetOtp/Mails/otpExportSuccess.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\OtpBundle\\Resources\\views\\Mails\\otpExportSuccess.html.twig");
    }
}
