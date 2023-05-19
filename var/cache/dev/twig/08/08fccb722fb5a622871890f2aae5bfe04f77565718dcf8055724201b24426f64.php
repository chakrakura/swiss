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

/* @EasyjetEleave/EmailTemplates/mailAccepted.html.twig */
class __TwigTemplate_67c846c00dc42d7aa15d824edaff8945980872526079f0571c61d51b3fcc6d59 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/EmailTemplates/mailAccepted.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/EmailTemplates/mailAccepted.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>Mail</title>
<style type=\"text/css\">
.menu 
{
\tfont-family:Verdana, Arial, Helvetica, sans-serif;
\tcolor:black;
\tfont-size:10px; 
}

.info
{
\tfont-family:Verdana, Arial, Helvetica, sans-serif;
\tfont-size:12px;
\tfont-style:italic ;
\tcolor:#006666 ;
}

.texte_normal
{
\tcolor:#000000; 
\tfont-family:Verdana, Arial, Helvetica, sans-serif;
\tfont-size:12px;
}
\t

.menu a
{
\tfont-family:Verdana, Arial, Helvetica, sans-serif; 
\tcolor:#000000
}

.menu a:hover
{
\tcolor:#ff6600
}

.menu_tableau
{
\tfont-family:Verdana, Arial, Helvetica, sans-serif;
\tcolor:white;
\tfont-size:10px; 
}

.menu_tableau a
{
\tfont-family:Verdana, Arial, Helvetica, sans-serif;
\tcolor:white;
\tfont-size:10px; 
\ttext-decoration:none;
}

.menu_tableau a:hover
{
\tfont-family:Verdana, Arial, Helvetica, sans-serif;
\tcolor:black;
\tfont-size:10px; 
\ttext-decoration:none;
}




.ajouts
{
\tcolor:black; 
\ttext-decoration:none;
\tfont-size:10px;
\tfont-family:Verdana, Arial, Helvetica, sans-serif;
}

td.normal
{
\tbackground-color:#E9E9E9;
}

td.fonce
{
\tbackground-color:#CECECE;
}


.ajouts a
{
\tcolor:black; 
\ttext-decoration:none;
\tfont-size:10px;
\tfont-family:Verdana, Arial, Helvetica, sans-serif;
}

.ajouts a:hover 
{
\tcolor:#ff6600;
}



</style>
</head>

<body>

<p>Dear ";
        // line 106
        echo twig_escape_filter($this->env, (isset($context["nomPrenom"]) || array_key_exists("nomPrenom", $context) ? $context["nomPrenom"] : (function () { throw new RuntimeError('Variable "nomPrenom" does not exist.', 106, $this->source); })()), "html", null, true);
        echo " </p>
<p>You have requested the following holidays requests :</p>

<p>";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["choice1"]) || array_key_exists("choice1", $context) ? $context["choice1"] : (function () { throw new RuntimeError('Variable "choice1" does not exist.', 109, $this->source); })()), "html", null, true);
        echo "<br />";
        echo twig_escape_filter($this->env, (isset($context["choice2"]) || array_key_exists("choice2", $context) ? $context["choice2"] : (function () { throw new RuntimeError('Variable "choice2" does not exist.', 109, $this->source); })()), "html", null, true);
        echo "<br />";
        echo twig_escape_filter($this->env, (isset($context["choice3"]) || array_key_exists("choice3", $context) ? $context["choice3"] : (function () { throw new RuntimeError('Variable "choice3" does not exist.', 109, $this->source); })()), "html", null, true);
        echo "<br /></p>

<p>We are glad to inform you that the following choice has been granted :</p>

<p> ";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 113, $this->source); })()), "html", null, true);
        echo "</p>

<p>If you have any query on this email, please respond to Swiss Rostering : <a href=\"mailto:swissrostering@easyjet.com.\">swissrostering@easyjet.com.</a>. Thank you</p>

<p>Best regards<br />
The rostering team</p>

<br />
<br />

<div style=\"text-align:center\">
  <table width=\"480\"  border=\"1\" cellpadding=\"0\" cellspacing=\"0\" bordercolor=\"#ff6600\" style=\"border-collapse:collapse \">
    <tr>
      <td><table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\">
          <tr bgcolor=\"#ff6600\">
            <td colspan=\"2\" align=\"left\" valign=\"top\" class=\"menu_tableau\">eLeave request accepted ";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 128, $this->source); })()), "html", null, true);
        echo ": </td>
          </tr>
          <tr class=\"ajouts\">
            <td width=\"200\" align=\"left\" valign=\"top\" class=\"fonce\">Total leave days due : </td>
            <td class=\"normal\">";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["totalLeaveDayDue"]) || array_key_exists("totalLeaveDayDue", $context) ? $context["totalLeaveDayDue"] : (function () { throw new RuntimeError('Variable "totalLeaveDayDue" does not exist.', 132, $this->source); })()), "html", null, true);
        echo "</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Total leave days confirmed : </td>
            <td class=\"normal\">";
        // line 136
        echo twig_escape_filter($this->env, (isset($context["totalLeaveDayConfirmed"]) || array_key_exists("totalLeaveDayConfirmed", $context) ? $context["totalLeaveDayConfirmed"] : (function () { throw new RuntimeError('Variable "totalLeaveDayConfirmed" does not exist.', 136, $this->source); })()), "html", null, true);
        echo "</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Total leave days taken this year : </td>
            <td class=\"normal\">";
        // line 140
        echo twig_escape_filter($this->env, (isset($context["totalLeaveDayTaken"]) || array_key_exists("totalLeaveDayTaken", $context) ? $context["totalLeaveDayTaken"] : (function () { throw new RuntimeError('Variable "totalLeaveDayTaken" does not exist.', 140, $this->source); })()), "html", null, true);
        echo "</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Remaining leave : </td>
            <td class=\"normal\">";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["remainingLeave"]) || array_key_exists("remainingLeave", $context) ? $context["remainingLeave"] : (function () { throw new RuntimeError('Variable "remainingLeave" does not exist.', 144, $this->source); })()), "html", null, true);
        echo "</td>
          </tr>
\t\t  <tr class=\"ajouts\">
\t\t    <td align=\"left\" valign=\"top\" class=\"fonce\">Selected choice   : </td>
\t\t    <td class=\"normal\">";
        // line 148
        echo twig_escape_filter($this->env, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 148, $this->source); })()), "html", null, true);
        echo "</td>
\t      </tr>
      </table></td>
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
        return "@EasyjetEleave/EmailTemplates/mailAccepted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  220 => 148,  213 => 144,  206 => 140,  199 => 136,  192 => 132,  185 => 128,  167 => 113,  156 => 109,  150 => 106,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>Mail</title>
<style type=\"text/css\">
.menu 
{
\tfont-family:Verdana, Arial, Helvetica, sans-serif;
\tcolor:black;
\tfont-size:10px; 
}

.info
{
\tfont-family:Verdana, Arial, Helvetica, sans-serif;
\tfont-size:12px;
\tfont-style:italic ;
\tcolor:#006666 ;
}

.texte_normal
{
\tcolor:#000000; 
\tfont-family:Verdana, Arial, Helvetica, sans-serif;
\tfont-size:12px;
}
\t

.menu a
{
\tfont-family:Verdana, Arial, Helvetica, sans-serif; 
\tcolor:#000000
}

.menu a:hover
{
\tcolor:#ff6600
}

.menu_tableau
{
\tfont-family:Verdana, Arial, Helvetica, sans-serif;
\tcolor:white;
\tfont-size:10px; 
}

.menu_tableau a
{
\tfont-family:Verdana, Arial, Helvetica, sans-serif;
\tcolor:white;
\tfont-size:10px; 
\ttext-decoration:none;
}

.menu_tableau a:hover
{
\tfont-family:Verdana, Arial, Helvetica, sans-serif;
\tcolor:black;
\tfont-size:10px; 
\ttext-decoration:none;
}




.ajouts
{
\tcolor:black; 
\ttext-decoration:none;
\tfont-size:10px;
\tfont-family:Verdana, Arial, Helvetica, sans-serif;
}

td.normal
{
\tbackground-color:#E9E9E9;
}

td.fonce
{
\tbackground-color:#CECECE;
}


.ajouts a
{
\tcolor:black; 
\ttext-decoration:none;
\tfont-size:10px;
\tfont-family:Verdana, Arial, Helvetica, sans-serif;
}

.ajouts a:hover 
{
\tcolor:#ff6600;
}



</style>
</head>

<body>

<p>Dear {{ nomPrenom }} </p>
<p>You have requested the following holidays requests :</p>

<p>{{ choice1 }}<br />{{ choice2 }}<br />{{ choice3 }}<br /></p>

<p>We are glad to inform you that the following choice has been granted :</p>

<p> {{ choice }}</p>

<p>If you have any query on this email, please respond to Swiss Rostering : <a href=\"mailto:swissrostering@easyjet.com.\">swissrostering@easyjet.com.</a>. Thank you</p>

<p>Best regards<br />
The rostering team</p>

<br />
<br />

<div style=\"text-align:center\">
  <table width=\"480\"  border=\"1\" cellpadding=\"0\" cellspacing=\"0\" bordercolor=\"#ff6600\" style=\"border-collapse:collapse \">
    <tr>
      <td><table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\">
          <tr bgcolor=\"#ff6600\">
            <td colspan=\"2\" align=\"left\" valign=\"top\" class=\"menu_tableau\">eLeave request accepted {{ date }}: </td>
          </tr>
          <tr class=\"ajouts\">
            <td width=\"200\" align=\"left\" valign=\"top\" class=\"fonce\">Total leave days due : </td>
            <td class=\"normal\">{{ totalLeaveDayDue }}</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Total leave days confirmed : </td>
            <td class=\"normal\">{{ totalLeaveDayConfirmed }}</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Total leave days taken this year : </td>
            <td class=\"normal\">{{ totalLeaveDayTaken }}</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Remaining leave : </td>
            <td class=\"normal\">{{ remainingLeave }}</td>
          </tr>
\t\t  <tr class=\"ajouts\">
\t\t    <td align=\"left\" valign=\"top\" class=\"fonce\">Selected choice   : </td>
\t\t    <td class=\"normal\">{{ choice }}</td>
\t      </tr>
      </table></td>
    </tr>
  </table>
</div>
</body>
</html>
", "@EasyjetEleave/EmailTemplates/mailAccepted.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EleaveBundle\\Resources\\views\\EmailTemplates\\mailAccepted.html.twig");
    }
}
