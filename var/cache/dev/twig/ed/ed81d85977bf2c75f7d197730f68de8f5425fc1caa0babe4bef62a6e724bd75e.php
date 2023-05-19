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

/* @EasyjetEleave/EmailTemplates/mailRefused.html.twig */
class __TwigTemplate_9d5061c5c5d92d9e21c924b918cb886c27b6bba741653fc3ebc967369c59fe72 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/EmailTemplates/mailRefused.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/EmailTemplates/mailRefused.html.twig"));

        // line 1
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html>
<head>
<title>Mail</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
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

<p>We are sorry to inform you that none of the choices were granted and we invite you to send another request.</p>

<p>You will find your holidays details below</p>

<p>If you have any query on this email, please respond to Swiss Rostering : <a href=\"mailto:swissrostering@easyjet.com.\">swissrostering@easyjet.com.</a>. Thank you</p>

<p>Best regards<br />
The rostering team</p>

<div  style=\"text-align:center\">
  <table width=\"480\"  border=\"1\" cellpadding=\"0\" cellspacing=\"0\" bordercolor=\"#ff6600\" style=\"border-collapse:collapse \">
    <tr>
      <td><table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\">
          <tr bgcolor=\"#ff6600\">
            <td colspan=\"2\" align=\"left\" valign=\"top\" class=\"menu_tableau\">eLeave request refused ";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 120, $this->source); })()), "html", null, true);
        echo ": </td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Refuse reason : </td>
            <td class=\"normal\">";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["refuse"]) || array_key_exists("refuse", $context) ? $context["refuse"] : (function () { throw new RuntimeError('Variable "refuse" does not exist.', 124, $this->source); })()), "html", null, true);
        echo "</td>
          </tr>
          <tr class=\"ajouts\">
            <td width=\"200\" align=\"left\" valign=\"top\" class=\"fonce\">Total leave days due : </td>
            <td class=\"normal\">";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["totalLeaveDayDue"]) || array_key_exists("totalLeaveDayDue", $context) ? $context["totalLeaveDayDue"] : (function () { throw new RuntimeError('Variable "totalLeaveDayDue" does not exist.', 128, $this->source); })()), "html", null, true);
        echo "</td>
          </tr>
\t\t  <tr class=\"ajouts\">
            <td width=\"200\" align=\"left\" valign=\"top\" class=\"fonce\">Leave request period : </td>
            <td class=\"normal\">";
        // line 132
        echo twig_escape_filter($this->env, (isset($context["choice1"]) || array_key_exists("choice1", $context) ? $context["choice1"] : (function () { throw new RuntimeError('Variable "choice1" does not exist.', 132, $this->source); })()), "html", null, true);
        echo "<br />
              ";
        // line 133
        echo twig_escape_filter($this->env, (isset($context["choice2"]) || array_key_exists("choice2", $context) ? $context["choice2"] : (function () { throw new RuntimeError('Variable "choice2" does not exist.', 133, $this->source); })()), "html", null, true);
        echo "<br />
              ";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["choice3"]) || array_key_exists("choice3", $context) ? $context["choice3"] : (function () { throw new RuntimeError('Variable "choice3" does not exist.', 134, $this->source); })()), "html", null, true);
        echo "</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Total leave days confirmed : </td>
            <td class=\"normal\">";
        // line 138
        echo twig_escape_filter($this->env, (isset($context["totalLeaveDayConfirmed"]) || array_key_exists("totalLeaveDayConfirmed", $context) ? $context["totalLeaveDayConfirmed"] : (function () { throw new RuntimeError('Variable "totalLeaveDayConfirmed" does not exist.', 138, $this->source); })()), "html", null, true);
        echo "</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Total leave days taken : </td>
            <td class=\"normal\">";
        // line 142
        echo twig_escape_filter($this->env, (isset($context["totalLeaveDayTaken"]) || array_key_exists("totalLeaveDayTaken", $context) ? $context["totalLeaveDayTaken"] : (function () { throw new RuntimeError('Variable "totalLeaveDayTaken" does not exist.', 142, $this->source); })()), "html", null, true);
        echo "</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Remaining leave : </td>
            <td class=\"normal\">";
        // line 146
        echo twig_escape_filter($this->env, (isset($context["remainingLeave"]) || array_key_exists("remainingLeave", $context) ? $context["remainingLeave"] : (function () { throw new RuntimeError('Variable "remainingLeave" does not exist.', 146, $this->source); })()), "html", null, true);
        echo "</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Remaining request : </td>
            <td class=\"normal\">";
        // line 150
        echo twig_escape_filter($this->env, (isset($context["remainingRequest"]) || array_key_exists("remainingRequest", $context) ? $context["remainingRequest"] : (function () { throw new RuntimeError('Variable "remainingRequest" does not exist.', 150, $this->source); })()), "html", null, true);
        echo "</td>
          </tr>
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
        return "@EasyjetEleave/EmailTemplates/mailRefused.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  221 => 150,  214 => 146,  207 => 142,  200 => 138,  193 => 134,  189 => 133,  185 => 132,  178 => 128,  171 => 124,  164 => 120,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Strict//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd\">
<html>
<head>
<title>Mail</title>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
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

<p>We are sorry to inform you that none of the choices were granted and we invite you to send another request.</p>

<p>You will find your holidays details below</p>

<p>If you have any query on this email, please respond to Swiss Rostering : <a href=\"mailto:swissrostering@easyjet.com.\">swissrostering@easyjet.com.</a>. Thank you</p>

<p>Best regards<br />
The rostering team</p>

<div  style=\"text-align:center\">
  <table width=\"480\"  border=\"1\" cellpadding=\"0\" cellspacing=\"0\" bordercolor=\"#ff6600\" style=\"border-collapse:collapse \">
    <tr>
      <td><table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\">
          <tr bgcolor=\"#ff6600\">
            <td colspan=\"2\" align=\"left\" valign=\"top\" class=\"menu_tableau\">eLeave request refused {{ date }}: </td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Refuse reason : </td>
            <td class=\"normal\">{{ refuse }}</td>
          </tr>
          <tr class=\"ajouts\">
            <td width=\"200\" align=\"left\" valign=\"top\" class=\"fonce\">Total leave days due : </td>
            <td class=\"normal\">{{ totalLeaveDayDue }}</td>
          </tr>
\t\t  <tr class=\"ajouts\">
            <td width=\"200\" align=\"left\" valign=\"top\" class=\"fonce\">Leave request period : </td>
            <td class=\"normal\">{{ choice1 }}<br />
              {{ choice2 }}<br />
              {{ choice3 }}</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Total leave days confirmed : </td>
            <td class=\"normal\">{{ totalLeaveDayConfirmed }}</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Total leave days taken : </td>
            <td class=\"normal\">{{ totalLeaveDayTaken }}</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Remaining leave : </td>
            <td class=\"normal\">{{ remainingLeave }}</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Remaining request : </td>
            <td class=\"normal\">{{ remainingRequest }}</td>
          </tr>
      </table></td>
    </tr>
  </table>
</div>
</body>
</html>
", "@EasyjetEleave/EmailTemplates/mailRefused.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EleaveBundle\\Resources\\views\\EmailTemplates\\mailRefused.html.twig");
    }
}
