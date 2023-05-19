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

/* @EasyjetSfsu/Mail/downloadToken.txt.twig */
class __TwigTemplate_ab2597bc0ddee485ad38186baf2a9bf6058db2c00f46a8d77435d684ae1c93b9 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSfsu/Mail/downloadToken.txt.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSfsu/Mail/downloadToken.txt.twig"));

        // line 1
        echo "Hello,

Attached you will find your link to download the file \"";
        // line 3
        echo twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 3, $this->source); })()), "file", [], "any", false, false, false, 3), "originalFilename", [], "any", false, false, false, 3);
        echo "\".
Use the following link in your browser to start the download :
";
        // line 5
        echo (isset($context["swissinside_prefix"]) || array_key_exists("swissinside_prefix", $context) ? $context["swissinside_prefix"] : (function () { throw new RuntimeError('Variable "swissinside_prefix" does not exist.', 5, $this->source); })());
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sfsu_download_link_confirm_key", ["accessKey" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 5, $this->source); })()), "file", [], "any", false, false, false, 5), "accessKey", [], "any", false, false, false, 5), "token" => twig_get_attribute($this->env, $this->source, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 5, $this->source); })()), "token", [], "any", false, false, false, 5), "token_request" => twig_get_attribute($this->env, $this->source, (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new RuntimeError('Variable "token" does not exist.', 5, $this->source); })()), "requestId", [], "any", false, false, false, 5)]);
        echo "

Kind regards,
Swissinside Robot";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetSfsu/Mail/downloadToken.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 5,  47 => 3,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("Hello,

Attached you will find your link to download the file \"{{ token.file.originalFilename }}\".
Use the following link in your browser to start the download :
{{ swissinside_prefix}}{{ path('sfsu_download_link_confirm_key', {'accessKey': token.file.accessKey, 'token': token.token, 'token_request' : token.requestId }) }}

Kind regards,
Swissinside Robot", "@EasyjetSfsu/Mail/downloadToken.txt.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\SfsuBundle\\Resources\\views\\Mail\\downloadToken.txt.twig");
    }
}
