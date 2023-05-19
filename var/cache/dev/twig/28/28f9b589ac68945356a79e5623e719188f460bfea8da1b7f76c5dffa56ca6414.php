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

/* @EasyjetEwish/EmailTemplates/addDoRequest.html.twig */
class __TwigTemplate_d45193a271e53083028498b8f4a70fe6e05d855f1df7c8b899ad222fdd1e73d8 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEwish/EmailTemplates/addDoRequest.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEwish/EmailTemplates/addDoRequest.html.twig"));

        // line 1
        echo "<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
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
<div align=\"center\">
  <table width=\"480\"  border=\"1\" cellpadding=\"0\" cellspacing=\"0\" bordercolor=\"#ff6600\" style=\"border-collapse:collapse \">
    <tr>
      <td><table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\">
          <tr bgcolor=\"#ff6600\">
            <td colspan=\"2\" align=\"left\" valign=\"top\" class=\"menu_tableau\">&nbsp;Day off Request </td>
          </tr>
          <tr class=\"ajouts\">
            <td width=\"120\" align=\"left\" valign=\"top\" class=\"fonce\">From :</td>
            <td class=\"normal\">";
        // line 112
        echo twig_escape_filter($this->env, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 112, $this->source); })()), "html", null, true);
        echo "</td>
          </tr>
\t\t  <tr class=\"ajouts\">
\t\t    <td align=\"left\" valign=\"top\" class=\"fonce\">Base : </td>
\t\t    <td class=\"normal\">";
        // line 116
        echo twig_escape_filter($this->env, (isset($context["base"]) || array_key_exists("base", $context) ? $context["base"] : (function () { throw new RuntimeError('Variable "base" does not exist.', 116, $this->source); })()), "html", null, true);
        echo "</td>
\t      </tr>
\t\t  <tr class=\"ajouts\">
\t\t    <td align=\"left\" valign=\"top\" class=\"fonce\">Contract : </td>
\t\t    <td class=\"normal\">";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["contrat"]) || array_key_exists("contrat", $context) ? $context["contrat"] : (function () { throw new RuntimeError('Variable "contrat" does not exist.', 120, $this->source); })()), "html", null, true);
        echo "</td>
\t      </tr>
\t\t  <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Date :</td>
            <td class=\"normal\">";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["date"]) || array_key_exists("date", $context) ? $context["date"] : (function () { throw new RuntimeError('Variable "date" does not exist.', 124, $this->source); })()), "html", null, true);
        echo "</td>
          </tr>
\t\t  <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Requested day  :</td>
            <td class=\"normal\">";
        // line 128
        echo twig_escape_filter($this->env, (isset($context["requestedDate"]) || array_key_exists("requestedDate", $context) ? $context["requestedDate"] : (function () { throw new RuntimeError('Variable "requestedDate" does not exist.', 128, $this->source); })()), "html", null, true);
        echo " </td>
          </tr>
          
          
\t\t  <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Comment :</td>
            <td class=\"normal\">";
        // line 134
        echo twig_escape_filter($this->env, (isset($context["comment"]) || array_key_exists("comment", $context) ? $context["comment"] : (function () { throw new RuntimeError('Variable "comment" does not exist.', 134, $this->source); })()), "html", null, true);
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
        return "@EasyjetEwish/EmailTemplates/addDoRequest.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 134,  184 => 128,  177 => 124,  170 => 120,  163 => 116,  156 => 112,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=iso-8859-1\" />
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
<div align=\"center\">
  <table width=\"480\"  border=\"1\" cellpadding=\"0\" cellspacing=\"0\" bordercolor=\"#ff6600\" style=\"border-collapse:collapse \">
    <tr>
      <td><table width=\"100%\" border=\"0\" cellspacing=\"1\" cellpadding=\"0\">
          <tr bgcolor=\"#ff6600\">
            <td colspan=\"2\" align=\"left\" valign=\"top\" class=\"menu_tableau\">&nbsp;Day off Request </td>
          </tr>
          <tr class=\"ajouts\">
            <td width=\"120\" align=\"left\" valign=\"top\" class=\"fonce\">From :</td>
            <td class=\"normal\">{{ user }}</td>
          </tr>
\t\t  <tr class=\"ajouts\">
\t\t    <td align=\"left\" valign=\"top\" class=\"fonce\">Base : </td>
\t\t    <td class=\"normal\">{{ base }}</td>
\t      </tr>
\t\t  <tr class=\"ajouts\">
\t\t    <td align=\"left\" valign=\"top\" class=\"fonce\">Contract : </td>
\t\t    <td class=\"normal\">{{ contrat }}</td>
\t      </tr>
\t\t  <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Date :</td>
            <td class=\"normal\">{{ date }}</td>
          </tr>
\t\t  <tr class=\"ajouts\">
            <td align=\"left\" valign=\"top\" class=\"fonce\">Requested day  :</td>
            <td class=\"normal\">{{ requestedDate }} </td>
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
", "@EasyjetEwish/EmailTemplates/addDoRequest.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EwishBundle\\Resources\\views\\EmailTemplates\\addDoRequest.html.twig");
    }
}
