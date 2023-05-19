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

/* @EasyjetEleave/EmailTemplates/Mails/accepted.html.twig */
class __TwigTemplate_48674b35e91fd6a14795a6c4c9420c8c03fa5085ffa0edc26fbb55cb0088dc33 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/EmailTemplates/Mails/accepted.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/EmailTemplates/Mails/accepted.html.twig"));

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
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishResult"]) || array_key_exists("wishResult", $context) ? $context["wishResult"] : (function () { throw new RuntimeError('Variable "wishResult" does not exist.', 106, $this->source); })()), "prenomUser", [], "any", false, false, false, 106), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishResult"]) || array_key_exists("wishResult", $context) ? $context["wishResult"] : (function () { throw new RuntimeError('Variable "wishResult" does not exist.', 106, $this->source); })()), "nomUser", [], "any", false, false, false, 106), "html", null, true);
        echo "</p>
<p>You have requested the following holidays requests :</p>
<p>";
        // line 108
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishResult"]) || array_key_exists("wishResult", $context) ? $context["wishResult"] : (function () { throw new RuntimeError('Variable "wishResult" does not exist.', 108, $this->source); })()), "choice1", [], "any", false, false, false, 108), "html", null, true);
        echo "<br/>
";
        // line 109
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishResult"]) || array_key_exists("wishResult", $context) ? $context["wishResult"] : (function () { throw new RuntimeError('Variable "wishResult" does not exist.', 109, $this->source); })()), "choice2", [], "any", false, false, false, 109), "html", null, true);
        echo "<br/>
";
        // line 110
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishResult"]) || array_key_exists("wishResult", $context) ? $context["wishResult"] : (function () { throw new RuntimeError('Variable "wishResult" does not exist.', 110, $this->source); })()), "choice3", [], "any", false, false, false, 110), "html", null, true);
        echo "
</p>
<p>We are glad to inform you that the following choice has been granted :";
        // line 112
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishResult"]) || array_key_exists("wishResult", $context) ? $context["wishResult"] : (function () { throw new RuntimeError('Variable "wishResult" does not exist.', 112, $this->source); })()), "acceptedPeriod", [], "any", false, false, false, 112), "html", null, true);
        echo "</p>
<p>You will find your holidays details below</p>

<p>If you have any query on this email, please respond to Swiss Rostering : <a href=\"mailto:swissrostering@easyjet.com.\">swissrostering@easyjet.com.</a>. Thank you</p>

<p>Best regards<br />
The rostering team</p>
<br />
<br />

<div style=\"text-align:center\">
  <table width=\"480\"  border=\"1\" cellpadding=\"0\" cellspacing=\"0\" bordercolor=\"#ff6600\" style=\"border-collapse:collapse \">
    <tr>
      <td><table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\">
         
          <tr class=\"ajouts\">
            <td width=\"200\" align=\"left\" valign=\"top\" class=\"fonce\">Total leave days due : </td>
            <td class=\"normal\">";
        // line 129
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishResult"]) || array_key_exists("wishResult", $context) ? $context["wishResult"] : (function () { throw new RuntimeError('Variable "wishResult" does not exist.', 129, $this->source); })()), "totalLeaveDayDue", [], "any", false, false, false, 129), "html", null, true);
        echo "</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Total leave days confirmed : </td>
            <td class=\"normal\">";
        // line 133
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishResult"]) || array_key_exists("wishResult", $context) ? $context["wishResult"] : (function () { throw new RuntimeError('Variable "wishResult" does not exist.', 133, $this->source); })()), "totalLeaveDayConfirmed", [], "any", false, false, false, 133), "html", null, true);
        echo "</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Total leave days taken this year : </td>
            <td class=\"normal\">";
        // line 137
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishResult"]) || array_key_exists("wishResult", $context) ? $context["wishResult"] : (function () { throw new RuntimeError('Variable "wishResult" does not exist.', 137, $this->source); })()), "totalLeaveDayTaken", [], "any", false, false, false, 137), "html", null, true);
        echo "</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Remaining leave : </td>
            <td class=\"normal\">";
        // line 141
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishResult"]) || array_key_exists("wishResult", $context) ? $context["wishResult"] : (function () { throw new RuntimeError('Variable "wishResult" does not exist.', 141, $this->source); })()), "remainingLeave", [], "any", false, false, false, 141), "html", null, true);
        echo "</td>
          </tr>
\t\t  <tr class=\"ajouts\">
\t\t    <td align=\"left\" valign=\"top\" class=\"fonce\">Selected choice   : </td>
\t\t    <td class=\"normal\"><p>";
        // line 145
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishResult"]) || array_key_exists("wishResult", $context) ? $context["wishResult"] : (function () { throw new RuntimeError('Variable "wishResult" does not exist.', 145, $this->source); })()), "acceptedPeriod", [], "any", false, false, false, 145), "html", null, true);
        echo "</p></td>
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
        return "@EasyjetEleave/EmailTemplates/Mails/accepted.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  218 => 145,  211 => 141,  204 => 137,  197 => 133,  190 => 129,  170 => 112,  165 => 110,  161 => 109,  157 => 108,  150 => 106,  43 => 1,);
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

<p>Dear {{ wishResult.prenomUser }} {{wishResult.nomUser }}</p>
<p>You have requested the following holidays requests :</p>
<p>{{ wishResult.choice1 }}<br/>
{{ wishResult.choice2 }}<br/>
{{ wishResult.choice3 }}
</p>
<p>We are glad to inform you that the following choice has been granted :{{ wishResult.acceptedPeriod }}</p>
<p>You will find your holidays details below</p>

<p>If you have any query on this email, please respond to Swiss Rostering : <a href=\"mailto:swissrostering@easyjet.com.\">swissrostering@easyjet.com.</a>. Thank you</p>

<p>Best regards<br />
The rostering team</p>
<br />
<br />

<div style=\"text-align:center\">
  <table width=\"480\"  border=\"1\" cellpadding=\"0\" cellspacing=\"0\" bordercolor=\"#ff6600\" style=\"border-collapse:collapse \">
    <tr>
      <td><table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\">
         
          <tr class=\"ajouts\">
            <td width=\"200\" align=\"left\" valign=\"top\" class=\"fonce\">Total leave days due : </td>
            <td class=\"normal\">{{ wishResult.totalLeaveDayDue }}</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Total leave days confirmed : </td>
            <td class=\"normal\">{{ wishResult.totalLeaveDayConfirmed }}</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Total leave days taken this year : </td>
            <td class=\"normal\">{{ wishResult.totalLeaveDayTaken }}</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Remaining leave : </td>
            <td class=\"normal\">{{ wishResult.remainingLeave }}</td>
          </tr>
\t\t  <tr class=\"ajouts\">
\t\t    <td align=\"left\" valign=\"top\" class=\"fonce\">Selected choice   : </td>
\t\t    <td class=\"normal\"><p>{{ wishResult.acceptedPeriod }}</p></td>
\t      </tr>
      </table></td>
    </tr>
  </table>
</div>

</body>
</html>
", "@EasyjetEleave/EmailTemplates/Mails/accepted.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EleaveBundle\\Resources\\views\\EmailTemplates\\Mails\\accepted.html.twig");
    }
}
