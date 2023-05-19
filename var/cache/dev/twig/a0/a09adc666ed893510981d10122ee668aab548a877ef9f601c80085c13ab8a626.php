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

/* @EasyjetEleave/EmailTemplates/mailResourcesGroupConfirm.html.twig */
class __TwigTemplate_0b45d890579960c9385ea611988d69fbe932aadb4ecb4479c193a3540f7402d7 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/EmailTemplates/mailResourcesGroupConfirm.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetEleave/EmailTemplates/mailResourcesGroupConfirm.html.twig"));

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

<p>Dear Rostering </p>
<p>This request has been made by the employee '";
        // line 107
        echo twig_escape_filter($this->env, (isset($context["nom_prenom"]) || array_key_exists("nom_prenom", $context) ? $context["nom_prenom"] : (function () { throw new RuntimeError('Variable "nom_prenom" does not exist.', 107, $this->source); })()), "html", null, true);
        echo "' </p>

<p>";
        // line 109
        echo twig_escape_filter($this->env, (isset($context["choiceList"]) || array_key_exists("choiceList", $context) ? $context["choiceList"] : (function () { throw new RuntimeError('Variable "choiceList" does not exist.', 109, $this->source); })()), "html", null, true);
        echo "</p>

<p>Ressource group has just accepted this choice :</p>

<p>- ";
        // line 113
        echo twig_escape_filter($this->env, (isset($context["choice"]) || array_key_exists("choice", $context) ? $context["choice"] : (function () { throw new RuntimeError('Variable "choice" does not exist.', 113, $this->source); })()), "html", null, true);
        echo "/p>

<p>You will find your holidays details below</p>

<p>If you have any query on this email, please respond to Swiss Rostering : <a href=\"mailto:swissrostering@easyjet.com.\">swissrostering@easyjet.com.</a>. Thank you</p>

<p>Best regards<br />
The rostering team</p>

<br />
<br />

Thanks to confirm or refuse this request and complete the remaining days left for this user in eLeave.

</body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetEleave/EmailTemplates/mailResourcesGroupConfirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  163 => 113,  156 => 109,  151 => 107,  43 => 1,);
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

<p>Dear Rostering </p>
<p>This request has been made by the employee '{{ nom_prenom }}' </p>

<p>{{ choiceList }}</p>

<p>Ressource group has just accepted this choice :</p>

<p>- {{ choice }}/p>

<p>You will find your holidays details below</p>

<p>If you have any query on this email, please respond to Swiss Rostering : <a href=\"mailto:swissrostering@easyjet.com.\">swissrostering@easyjet.com.</a>. Thank you</p>

<p>Best regards<br />
The rostering team</p>

<br />
<br />

Thanks to confirm or refuse this request and complete the remaining days left for this user in eLeave.

</body>
</html>
", "@EasyjetEleave/EmailTemplates/mailResourcesGroupConfirm.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\EleaveBundle\\Resources\\views\\EmailTemplates\\mailResourcesGroupConfirm.html.twig");
    }
}
