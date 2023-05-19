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

/* @EasyjetEleave/EmailTemplates/updateDoRequest.html.twig */
class __TwigTemplate_a279b4454d5acc5b9b6b5254a9751bc38b5ba5a86196400038c0e7677042f9ba extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/EmailTemplates/updateDoRequest.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/EmailTemplates/updateDoRequest.html.twig"));

        // line 1
        echo "<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
        <style type=\"text/css\">
            .menu
            {
                font-family:Verdana, Arial, Helvetica, sans-serif;
                color:black;
                font-size:10px;
            }

            .info
            {
                font-family:Verdana, Arial, Helvetica, sans-serif;
                font-size:12px;
                font-style:italic ;
                color:#006666 ;
            }s

            .texte_normal
            {
                color:#000000;
                font-family:Verdana, Arial, Helvetica, sans-serif;
                font-size:12px;
            }


            .menu a
            {
                font-family:Verdana, Arial, Helvetica, sans-serif;
                color:#000000
            }

            .menu a:hover
            {
                color:#ff6600
            }

            .menu_tableau
            {
                font-family:Verdana, Arial, Helvetica, sans-serif;
                color:white;
                font-size:10px;
            }

            .menu_tableau a
            {
                font-family:Verdana, Arial, Helvetica, sans-serif;
                color:white;
                font-size:10px;
                text-decoration:none;
            }

            .menu_tableau a:hover
            {
                font-family:Verdana, Arial, Helvetica, sans-serif;
                color:black;
                font-size:10px;
                text-decoration:none;
            }




            .ajouts
            {
                color:black;
                text-decoration:none;
                font-size:10px;
                font-family:Verdana, Arial, Helvetica, sans-serif;
            }

            td.normal
            {
                background-color:#E9E9E9;
            }

            td.fonce
            {
                background-color:#CECECE;
            }


            .ajouts a
            {
                color:black;
                text-decoration:none;
                font-size:10px;
                font-family:Verdana, Arial, Helvetica, sans-serif;
            }

            .ajouts a:hover
            {
                color:#ff6600;
            }



        </style>
    </head>

    <body>
        <div align=\"center\">
            <table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\">
                            <tr bgcolor=\"#ff6600\">
                                <td colspan=\"2\" align=\"left\" valign=\"top\" class=\"menu_tableau\">&nbsp;Day off Request </td>
                            </tr>
                            <tr class=\"ajouts\">
                                <td width=\"120\" align=\"left\" valign=\"top\" class=\"fonce\">Status :</td>
                                <td class=\"normal\">";
        // line 110
        echo twig_escape_filter($this->env, (isset($context["status"]) || array_key_exists("status", $context) ? $context["status"] : (function () { throw new RuntimeError('Variable "status" does not exist.', 110, $this->source); })()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr class=\"ajouts\">
                                <td align=\"left\" valign=\"top\" class=\"fonce\">Date :</td>
                                <td class=\"normal\">";
        // line 114
        echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 114, $this->source); })()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr class=\"ajouts\">
                                <td align=\"left\" valign=\"top\" class=\"fonce\">Requested day  :</td>
                                <td class=\"normal\">";
        // line 118
        echo twig_escape_filter($this->env, (isset($context["requestedDate"]) || array_key_exists("requestedDate", $context) ? $context["requestedDate"] : (function () { throw new RuntimeError('Variable "requestedDate" does not exist.', 118, $this->source); })()), "html", null, true);
        echo "</td>
                            </tr>
                            <tr class=\"ajouts\">
                                <td align=\"left\" valign=\"top\" class=\"fonce\">Comment :</td>
                                <td class=\"normal\">";
        // line 122
        echo twig_escape_filter($this->env, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 122, $this->source); })()), "html", null, true);
        echo "</td>
                            </tr>
            </table>
        </div>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetEleave/EmailTemplates/updateDoRequest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 122,  168 => 118,  161 => 114,  154 => 110,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
        <style type=\"text/css\">
            .menu
            {
                font-family:Verdana, Arial, Helvetica, sans-serif;
                color:black;
                font-size:10px;
            }

            .info
            {
                font-family:Verdana, Arial, Helvetica, sans-serif;
                font-size:12px;
                font-style:italic ;
                color:#006666 ;
            }s

            .texte_normal
            {
                color:#000000;
                font-family:Verdana, Arial, Helvetica, sans-serif;
                font-size:12px;
            }


            .menu a
            {
                font-family:Verdana, Arial, Helvetica, sans-serif;
                color:#000000
            }

            .menu a:hover
            {
                color:#ff6600
            }

            .menu_tableau
            {
                font-family:Verdana, Arial, Helvetica, sans-serif;
                color:white;
                font-size:10px;
            }

            .menu_tableau a
            {
                font-family:Verdana, Arial, Helvetica, sans-serif;
                color:white;
                font-size:10px;
                text-decoration:none;
            }

            .menu_tableau a:hover
            {
                font-family:Verdana, Arial, Helvetica, sans-serif;
                color:black;
                font-size:10px;
                text-decoration:none;
            }




            .ajouts
            {
                color:black;
                text-decoration:none;
                font-size:10px;
                font-family:Verdana, Arial, Helvetica, sans-serif;
            }

            td.normal
            {
                background-color:#E9E9E9;
            }

            td.fonce
            {
                background-color:#CECECE;
            }


            .ajouts a
            {
                color:black;
                text-decoration:none;
                font-size:10px;
                font-family:Verdana, Arial, Helvetica, sans-serif;
            }

            .ajouts a:hover
            {
                color:#ff6600;
            }



        </style>
    </head>

    <body>
        <div align=\"center\">
            <table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\">
                            <tr bgcolor=\"#ff6600\">
                                <td colspan=\"2\" align=\"left\" valign=\"top\" class=\"menu_tableau\">&nbsp;Day off Request </td>
                            </tr>
                            <tr class=\"ajouts\">
                                <td width=\"120\" align=\"left\" valign=\"top\" class=\"fonce\">Status :</td>
                                <td class=\"normal\">{{status}}</td>
                            </tr>
                            <tr class=\"ajouts\">
                                <td align=\"left\" valign=\"top\" class=\"fonce\">Date :</td>
                                <td class=\"normal\">{{date}}</td>
                            </tr>
                            <tr class=\"ajouts\">
                                <td align=\"left\" valign=\"top\" class=\"fonce\">Requested day  :</td>
                                <td class=\"normal\">{{requestedDate}}</td>
                            </tr>
                            <tr class=\"ajouts\">
                                <td align=\"left\" valign=\"top\" class=\"fonce\">Comment :</td>
                                <td class=\"normal\">{{comment}}</td>
                            </tr>
            </table>
        </div>
    </body>
</html>
", "@EasyjetEleave/EmailTemplates/updateDoRequest.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EleaveBundle\\Resources\\views\\EmailTemplates\\updateDoRequest.html.twig");
    }
}
