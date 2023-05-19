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

/* @EasyjetSfsu/Mail/sendDocumentUrl.txt.twig */
class __TwigTemplate_374f12b9a02925e8313c1ffb296d25a65e499032eb027cd8087a9f4ffd9bcf39 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSfsu/Mail/sendDocumentUrl.txt.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSfsu/Mail/sendDocumentUrl.txt.twig"));

        // line 1
        echo (isset($context["content"]) || array_key_exists("content", $context) ? $context["content"] : (function () { throw new RuntimeError('Variable "content" does not exist.', 1, $this->source); })());
        echo "

--------------------------

Open the following link in your browser to download \"";
        // line 5
        echo twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 5, $this->source); })()), "originalFilename", [], "any", false, false, false, 5);
        echo "\"
";
        // line 6
        echo (isset($context["sfsu_public_swissinside_prefix"]) || array_key_exists("sfsu_public_swissinside_prefix", $context) ? $context["sfsu_public_swissinside_prefix"] : (function () { throw new RuntimeError('Variable "sfsu_public_swissinside_prefix" does not exist.', 6, $this->source); })());
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("sfsu_download_link", ["accessKey" => twig_get_attribute($this->env, $this->source, (isset($context["file"]) || array_key_exists("file", $context) ? $context["file"] : (function () { throw new RuntimeError('Variable "file" does not exist.', 6, $this->source); })()), "accessKey", [], "any", false, false, false, 6)]);
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetSfsu/Mail/sendDocumentUrl.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 6,  50 => 5,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ content }}

--------------------------

Open the following link in your browser to download \"{{ file.originalFilename }}\"
{{ sfsu_public_swissinside_prefix }}{{ path('sfsu_download_link', {'accessKey': file.accessKey }) }}", "@EasyjetSfsu/Mail/sendDocumentUrl.txt.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\SfsuBundle\\Resources\\views\\Mail\\sendDocumentUrl.txt.twig");
    }
}
