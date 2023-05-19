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

/* @EasyjetSfsu/Files/download.html.twig */
class __TwigTemplate_4c3e07a5e4aa0459c22240af7db340713608674affcf2c1cdaefdd07bee3ccef extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'specificJs' => [$this, 'block_specificJs'],
            'container' => [$this, 'block_container'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@EasyjetSfsu/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSfsu/Files/download.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSfsu/Files/download.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetSfsu/Files/download.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetSfsu/Base/structure.html.twig", "@EasyjetSfsu/Files/download.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Uploaded file";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_specificJs($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificJs"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "specificJs"));

        $this->displayParentBlock("specificJs", $context, $blocks);
        echo "

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 13
        echo "        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Uploaded file</h1>         
        <div id=\"description_help\">You are on this page because you got invited to download a sensitive file. Please connect to your europr account if you have any or provide your email address to receive a token to download the file</div>
    </div>

     <div class=\"row\">
        <div class=\"col-lg-6\">
            ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
            ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'errors');
        echo "
                <div class=\"col-xs-12\">
                    ";
        // line 25
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 25, $context, $this->getSourceContext());
        echo "
                </div>            

                <div class=\"col-xs-12\">
                    <div class=\"widget-box\">
                        <div class=\"widget-title\">
                            <span class=\"icon\">
                                <i class=\"icon-envelope\"></i>
                            </span>
                            <h5>You have no account</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                            <div class=\"alert alert-info\">If you have no account in our system. Just provide us with your email address and you will get a token to download the file</div>
                             <div class=\"form-group\">
                                    <label class=\"control-label\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 39, $this->source); })()), "emailAddress", [], "any", false, false, false, 39), 'label');
        echo " :</label>
                                    <div class=\"controls\">
                                        ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 41, $this->source); })()), "emailAddress", [], "any", false, false, false, 41), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                                    </div>
                                </div> 
                            <div class=\"form-actions\">
                                <input type=\"submit\" class=\"btn btn-primary\" />
                            </div>
                        </div>
                    </div>
                </div>           
            ";
        // line 50
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 50, $this->source); })()), 'form_end');
        echo "
        </div>

        <div class=\"col-lg-6\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-key\"></i>
                    </span>
                    <h5>You have an europe account</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <div class=\"alert alert-info\">If you have an europe account. Fill free to enter your credentials to get the file</div>
                    <form class=\"form-horizontal\"  action=\"";
        // line 63
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("_swissinside_login");
        echo "?redirectTo=";
        echo twig_escape_filter($this->env, (isset($context["redirectTo"]) || array_key_exists("redirectTo", $context) ? $context["redirectTo"] : (function () { throw new RuntimeError('Variable "redirectTo" does not exist.', 63, $this->source); })()), "html", null, true);
        echo "\" method=\"post\" autocomplete=\"off\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\" />

                            <div class=\"form-group\">
                                <label for=\"\" class=\"control-label hover\">User</label>
                                <div class=\"controls\">
                                    <div class=\"input-group input-group-sm\">
                                        <span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
                                        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" placeholder=\"Username\" autocomplete=\"off\" />
                                    </div>
                                    <span class=\"help-block text-left\">Use your Europe credentials (like for the crew portal)</span>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"\" class=\"control-label hover\">Password</label>
                                <div class=\"controls\">
                                    <div class=\"input-group input-group-sm\">
                                        <span class=\"input-group-addon\"><i class=\"icon-lock\"></i></span>
                                        <input class=\"form-control\" type=\"password\" id=\"password\"  name=\"_password\" placeholder=\"Password\" autocomplete=\"off\" />
                                    </div>
                                </div>
                            </div>

                        <div class=\"form-actions\">
                            <input type=\"submit\" class=\"btn btn-primary btn-default\" value=\"Login\" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetSfsu/Files/download.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 64,  184 => 63,  168 => 50,  156 => 41,  151 => 39,  134 => 25,  129 => 23,  125 => 22,  114 => 13,  104 => 12,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"@EasyjetSfsu/Base/structure.html.twig\" %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Uploaded file{% endblock %}

{% block specificJs %}{{ parent() }}

{% endblock specificJs %}



{% block container %}
        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Uploaded file</h1>         
        <div id=\"description_help\">You are on this page because you got invited to download a sensitive file. Please connect to your europr account if you have any or provide your email address to receive a token to download the file</div>
    </div>

     <div class=\"row\">
        <div class=\"col-lg-6\">
            {{ form_start(form, {'attr': {'class': 'form-horizontal'}} ) }}
            {{ form_errors(form) }}
                <div class=\"col-xs-12\">
                    {{ macros.wizz() }}
                </div>            

                <div class=\"col-xs-12\">
                    <div class=\"widget-box\">
                        <div class=\"widget-title\">
                            <span class=\"icon\">
                                <i class=\"icon-envelope\"></i>
                            </span>
                            <h5>You have no account</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                            <div class=\"alert alert-info\">If you have no account in our system. Just provide us with your email address and you will get a token to download the file</div>
                             <div class=\"form-group\">
                                    <label class=\"control-label\">{{ form_label(form.emailAddress) }} :</label>
                                    <div class=\"controls\">
                                        {{ form_widget(form.emailAddress, { 'attr': {'class': 'form-control'} }) }}
                                    </div>
                                </div> 
                            <div class=\"form-actions\">
                                <input type=\"submit\" class=\"btn btn-primary\" />
                            </div>
                        </div>
                    </div>
                </div>           
            {{ form_end(form) }}
        </div>

        <div class=\"col-lg-6\">
            <div class=\"widget-box\">
                <div class=\"widget-title\">
                    <span class=\"icon\">
                        <i class=\"icon-key\"></i>
                    </span>
                    <h5>You have an europe account</h5>
                </div>
                <div class=\"widget-content nopadding\">
                    <div class=\"alert alert-info\">If you have an europe account. Fill free to enter your credentials to get the file</div>
                    <form class=\"form-horizontal\"  action=\"{{ url('_swissinside_login') }}?redirectTo={{redirectTo}}\" method=\"post\" autocomplete=\"off\">
                            <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token('authenticate') }}\" />

                            <div class=\"form-group\">
                                <label for=\"\" class=\"control-label hover\">User</label>
                                <div class=\"controls\">
                                    <div class=\"input-group input-group-sm\">
                                        <span class=\"input-group-addon\"><i class=\"icon-user\"></i></span>
                                        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" placeholder=\"Username\" autocomplete=\"off\" />
                                    </div>
                                    <span class=\"help-block text-left\">Use your Europe credentials (like for the crew portal)</span>
                                </div>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"\" class=\"control-label hover\">Password</label>
                                <div class=\"controls\">
                                    <div class=\"input-group input-group-sm\">
                                        <span class=\"input-group-addon\"><i class=\"icon-lock\"></i></span>
                                        <input class=\"form-control\" type=\"password\" id=\"password\"  name=\"_password\" placeholder=\"Password\" autocomplete=\"off\" />
                                    </div>
                                </div>
                            </div>

                        <div class=\"form-actions\">
                            <input type=\"submit\" class=\"btn btn-primary btn-default\" value=\"Login\" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
   
{% endblock container %}", "@EasyjetSfsu/Files/download.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\SfsuBundle\\Resources\\views\\Files\\download.html.twig");
    }
}
