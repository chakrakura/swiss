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

/* @EasyjetEleave/EmailTemplates/Mails/refused.html.twig */
class __TwigTemplate_d1491592721be5dfbae0e793197ae8951f8f8ca6fd141a385277743e4e67d1d9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/EmailTemplates/Mails/refused.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/EmailTemplates/Mails/refused.html.twig"));

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
         
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Refuse reason : </td>
            <td class=\"normal\">";
        // line 122
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishResult"]) || array_key_exists("wishResult", $context) ? $context["wishResult"] : (function () { throw new RuntimeError('Variable "wishResult" does not exist.', 122, $this->source); })()), "label", [], "any", false, false, false, 122), "html", null, true);
        echo " </td>
          </tr>
          <tr class=\"ajouts\">
            <td width=\"200\" align=\"left\" valign=\"top\" class=\"fonce\">Total leave days due : </td>
            <td class=\"normal\">";
        // line 126
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishResult"]) || array_key_exists("wishResult", $context) ? $context["wishResult"] : (function () { throw new RuntimeError('Variable "wishResult" does not exist.', 126, $this->source); })()), "totalLeaveDayDue", [], "any", false, false, false, 126), "html", null, true);
        echo "</td>
          </tr>
\t\t  <tr class=\"ajouts\">
            <td width=\"200\" align=\"left\" valign=\"top\" class=\"fonce\">Leave request period : </td>
            <td class=\"normal\">";
        // line 130
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishResult"]) || array_key_exists("wishResult", $context) ? $context["wishResult"] : (function () { throw new RuntimeError('Variable "wishResult" does not exist.', 130, $this->source); })()), "choice1", [], "any", false, false, false, 130), "html", null, true);
        echo "<br />
              ";
        // line 131
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishResult"]) || array_key_exists("wishResult", $context) ? $context["wishResult"] : (function () { throw new RuntimeError('Variable "wishResult" does not exist.', 131, $this->source); })()), "choice2", [], "any", false, false, false, 131), "html", null, true);
        echo "<br />
              ";
        // line 132
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishResult"]) || array_key_exists("wishResult", $context) ? $context["wishResult"] : (function () { throw new RuntimeError('Variable "wishResult" does not exist.', 132, $this->source); })()), "choice3", [], "any", false, false, false, 132), "html", null, true);
        echo "</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Total leave days confirmed : </td>
            <td class=\"normal\">";
        // line 136
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishResult"]) || array_key_exists("wishResult", $context) ? $context["wishResult"] : (function () { throw new RuntimeError('Variable "wishResult" does not exist.', 136, $this->source); })()), "totalLeaveDayConfirmed", [], "any", false, false, false, 136), "html", null, true);
        echo "</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Total leave days taken : </td>
            <td class=\"normal\">";
        // line 140
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishResult"]) || array_key_exists("wishResult", $context) ? $context["wishResult"] : (function () { throw new RuntimeError('Variable "wishResult" does not exist.', 140, $this->source); })()), "totalLeaveDayTaken", [], "any", false, false, false, 140), "html", null, true);
        echo "</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Remaining leave : </td>
            <td class=\"normal\">";
        // line 144
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishResult"]) || array_key_exists("wishResult", $context) ? $context["wishResult"] : (function () { throw new RuntimeError('Variable "wishResult" does not exist.', 144, $this->source); })()), "remainingLeave", [], "any", false, false, false, 144), "html", null, true);
        echo "</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Remaining request : </td>
            <td class=\"normal\">";
        // line 148
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["wishResult"]) || array_key_exists("wishResult", $context) ? $context["wishResult"] : (function () { throw new RuntimeError('Variable "wishResult" does not exist.', 148, $this->source); })()), "remainingRequest", [], "any", false, false, false, 148), "html", null, true);
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
        return "@EasyjetEleave/EmailTemplates/Mails/refused.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  216 => 148,  209 => 144,  202 => 140,  195 => 136,  188 => 132,  184 => 131,  180 => 130,  173 => 126,  166 => 122,  43 => 1,);
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
         
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Refuse reason : </td>
            <td class=\"normal\">{{ wishResult.label }} </td>
          </tr>
          <tr class=\"ajouts\">
            <td width=\"200\" align=\"left\" valign=\"top\" class=\"fonce\">Total leave days due : </td>
            <td class=\"normal\">{{ wishResult.totalLeaveDayDue }}</td>
          </tr>
\t\t  <tr class=\"ajouts\">
            <td width=\"200\" align=\"left\" valign=\"top\" class=\"fonce\">Leave request period : </td>
            <td class=\"normal\">{{ wishResult.choice1 }}<br />
              {{ wishResult.choice2 }}<br />
              {{ wishResult.choice3 }}</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Total leave days confirmed : </td>
            <td class=\"normal\">{{ wishResult.totalLeaveDayConfirmed }}</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Total leave days taken : </td>
            <td class=\"normal\">{{ wishResult.totalLeaveDayTaken }}</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Remaining leave : </td>
            <td class=\"normal\">{{ wishResult.remainingLeave }}</td>
          </tr>
          <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Remaining request : </td>
            <td class=\"normal\">{{ wishResult.remainingRequest }}</td>
          </tr>
      </table></td>
    </tr>
  </table>
</div>
</body>
</html>
", "@EasyjetEleave/EmailTemplates/Mails/refused.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EleaveBundle\\Resources\\views\\EmailTemplates\\Mails\\refused.html.twig");
    }
}
