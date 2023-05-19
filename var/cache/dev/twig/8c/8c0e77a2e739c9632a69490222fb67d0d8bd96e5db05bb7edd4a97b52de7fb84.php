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

/* @EasyjetEleave/EmailTemplates/mailRequestResourceGroup.html.twig */
class __TwigTemplate_9bd99f2d857e6598178b009a637709ba103d6694acb5a2f8b970dcb2362870d8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/EmailTemplates/mailRequestResourceGroup.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/EmailTemplates/mailRequestResourceGroup.html.twig"));

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
<div style=\"text-align:center\">
  <table width=\"480\"  border=\"1\" cellpadding=\"0\" cellspacing=\"0\" bordercolor=\"#ff6600\" style=\"border-collapse:collapse \">
    <tr>
      <td>
      \t<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\">
          <tr bgcolor=\"#ff6600\">
            <td colspan=\"2\" align=\"left\" valign=\"top\" class=\"menu_tableau\">eLeave request ";
        // line 111
        echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 111, $this->source); })()), "html", null, true);
        echo ": </td>
          </tr>
          <tr class=\"ajouts\">
            <td width=\"120\" align=\"left\" valign=\"top\" class=\"fonce\">From :</td>
            <td class=\"normal\">";
        // line 115
        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 115, $this->source); })()), "html", null, true);
        echo "</td>
          </tr>
\t\t  <tr class=\"ajouts\">
\t\t    <td align=\"left\" valign=\"top\" class=\"fonce\">Primary choice  : </td>
\t\t    <td class=\"normal\">";
        // line 119
        echo twig_escape_filter($this->env, (isset($context["choice1"]) || array_key_exists("choice1", $context) ? $context["choice1"] : (function () { throw new RuntimeError('Variable "choice1" does not exist.', 119, $this->source); })()), "html", null, true);
        echo "</td>
\t      </tr>
\t\t  <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Second choice  :</td>
            <td class=\"normal\">";
        // line 123
        echo twig_escape_filter($this->env, (isset($context["choice2"]) || array_key_exists("choice2", $context) ? $context["choice2"] : (function () { throw new RuntimeError('Variable "choice2" does not exist.', 123, $this->source); })()), "html", null, true);
        echo "</td>
          </tr>
\t\t  <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Third choice   :</td>
            <td class=\"normal\">";
        // line 127
        echo twig_escape_filter($this->env, (isset($context["choice3"]) || array_key_exists("choice3", $context) ? $context["choice3"] : (function () { throw new RuntimeError('Variable "choice3" does not exist.', 127, $this->source); })()), "html", null, true);
        echo "</td>
          </tr>
\t\t  <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Comment :</td>
            <td class=\"normal\">";
        // line 131
        echo twig_escape_filter($this->env, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 131, $this->source); })()), "html", null, true);
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
        return "@EasyjetEleave/EmailTemplates/mailRequestResourceGroup.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 131,  183 => 127,  176 => 123,  169 => 119,  162 => 115,  155 => 111,  43 => 1,);
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
<div style=\"text-align:center\">
  <table width=\"480\"  border=\"1\" cellpadding=\"0\" cellspacing=\"0\" bordercolor=\"#ff6600\" style=\"border-collapse:collapse \">
    <tr>
      <td>
      \t<table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\">
          <tr bgcolor=\"#ff6600\">
            <td colspan=\"2\" align=\"left\" valign=\"top\" class=\"menu_tableau\">eLeave request {{ date }}: </td>
          </tr>
          <tr class=\"ajouts\">
            <td width=\"120\" align=\"left\" valign=\"top\" class=\"fonce\">From :</td>
            <td class=\"normal\">{{ user }}</td>
          </tr>
\t\t  <tr class=\"ajouts\">
\t\t    <td align=\"left\" valign=\"top\" class=\"fonce\">Primary choice  : </td>
\t\t    <td class=\"normal\">{{ choice1 }}</td>
\t      </tr>
\t\t  <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Second choice  :</td>
            <td class=\"normal\">{{ choice2 }}</td>
          </tr>
\t\t  <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Third choice   :</td>
            <td class=\"normal\">{{ choice3 }}</td>
          </tr>
\t\t  <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Comment :</td>
            <td class=\"normal\">{{ comment }}</td>
          </tr>
      </table></td>
    </tr>
  </table>
</div>
</body>
</html>
", "@EasyjetEleave/EmailTemplates/mailRequestResourceGroup.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EleaveBundle\\Resources\\views\\EmailTemplates\\mailRequestResourceGroup.html.twig");
    }
}
