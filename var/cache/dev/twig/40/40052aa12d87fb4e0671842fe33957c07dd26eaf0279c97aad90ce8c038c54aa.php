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

/* @EasyjetSwissinsideCore/Base/macros.html.twig */
class __TwigTemplate_4d8dbe2182016187b46b472230a0a976121d9383266a59d44e0796011892b93c extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSwissinsideCore/Base/macros.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetSwissinsideCore/Base/macros.html.twig"));

        // line 38
        echo "

";
        // line 61
        echo "

";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function macro_show_general_menu($__menuItemsList__ = null, $__selectedItem__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "menuItemsList" => $__menuItemsList__,
            "selectedItem" => $__selectedItem__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "show_general_menu"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "show_general_menu"));

            // line 2
            echo "    <ul id=\"swissinside-applications\">
        ";
            // line 3
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["menuItemsList"]) || array_key_exists("menuItemsList", $context) ? $context["menuItemsList"] : (function () { throw new RuntimeError('Variable "menuItemsList" does not exist.', 3, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 4
                echo "        ";
                $context["appName"] = twig_get_attribute($this->env, $this->source, $context["item"], "name", [], "any", false, false, false, 4);
                // line 5
                echo "        ";
                if ((((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "initials", [], "any", false, false, false, 5), "UM")) && ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "transition_status", [], "any", false, false, false, 5), "after")) || (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "transition_status", [], "any", false, false, false, 5), "current")))) && (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "right_level", [], "any", false, false, false, 5), 1)))) {
                    // line 6
                    echo "            ";
                    $context["appName"] = "Home";
                    // line 7
                    echo "        ";
                }
                // line 8
                echo "
        ";
                // line 9
                if (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "initials", [], "any", false, false, false, 9), "UM")) && (0 !== twig_compare((isset($context["easyjetEnv"]) || array_key_exists("easyjetEnv", $context) ? $context["easyjetEnv"] : (function () { throw new RuntimeError('Variable "easyjetEnv" does not exist.', 9, $this->source); })()), "swissinside")))) {
                    // line 10
                    echo "            ";
                    $context["appName"] = "Home";
                    // line 11
                    echo "        ";
                }
                // line 12
                echo "        
        ";
                // line 13
                if ((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "initials", [], "any", false, false, false, 13), "BR"))) {
                    // line 14
                    echo "            ";
                    $context["appName"] = "SWITSS";
                    // line 15
                    echo "        ";
                }
                // line 16
                echo "
        <li class=\"";
                // line 17
                echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["item"], "initials", [], "any", false, false, false, 17), (isset($context["selectedItem"]) || array_key_exists("selectedItem", $context) ? $context["selectedItem"] : (function () { throw new RuntimeError('Variable "selectedItem" does not exist.', 17, $this->source); })())))) ? ("active") : (""));
                echo "\"><a href=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "link", [], "any", false, false, false, 17), "html", null, true);
                echo "\"><i class=\"";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 17), "html", null, true);
                echo "\"></i>";
                echo twig_escape_filter($this->env, (isset($context["appName"]) || array_key_exists("appName", $context) ? $context["appName"] : (function () { throw new RuntimeError('Variable "appName" does not exist.', 17, $this->source); })()), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 19
            echo "        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 20
                echo "                <li id=\"logout-button\"><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("_swissinside_logout");
                echo "\"><i class=\"icon-off\"></i>Logout</a></li>
        ";
            } else {
                // line 22
                echo "                <li class=\"active\"><a href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("index");
                echo "\"><i class=\"icon-home\"></i>Back home</a></li>
        ";
            }
            // line 24
            echo "    </ul>

    ";
            // line 26
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                // line 27
                echo "    <div class=\"dropdown\" id=\"my-profile-button\">
      <a href=\"#\" class=\"btn btn-danger\" data-toggle=\"dropdown\"><i class=\"icon-user\"></i> ";
                // line 28
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 28, $this->source); })()), "user", [], "any", false, false, false, 28), "getAuthname", [], "method", false, false, false, 28), "html", null, true);
                echo " <span class=\"caret\"></span></a>
      <ul class=\"dropdown-menu pull-right\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
          ";
                // line 30
                if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 30, $this->source); })()), "session", [], "any", false, false, false, 30), "get", [0 => "user_switch_allowed"], "method", false, false, false, 30)) {
                    // line 31
                    echo "              <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"javascript:swissinside.switch_user()\"><i class=\"icon-rotate-right\"></i> Switch user</a></li>
          ";
                }
                // line 33
                echo "          <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("_swissinside_logout");
                echo "\"><i class=\"icon-off\"></i> Logout</a></li>
      </ul>
    </div>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 40
    public function macro_wizz(...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "wizz"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "wizz"));

            // line 41
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 41, $this->source); })()), "session", [], "any", false, false, false, 41), "flashbag", [], "any", false, false, false, 41), "get", [0 => "error"], "method", false, false, false, 41));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 42
                echo "        <div class=\"alert alert-danger\">
                <button class=\"close\" data-dismiss=\"alert\">×</button>
                <strong>Notice</strong> ";
                // line 44
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo ".
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 47, $this->source); })()), "session", [], "any", false, false, false, 47), "flashbag", [], "any", false, false, false, 47), "get", [0 => "success"], "method", false, false, false, 47));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 48
                echo "        <div class=\"alert alert-success\">
                <button class=\"close\" data-dismiss=\"alert\">×</button>
                <strong>Success</strong> ";
                // line 50
                echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
                echo ".
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            echo "
    ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 54, $this->source); })()), "session", [], "any", false, false, false, 54), "flashbag", [], "any", false, false, false, 54), "all", [], "method", false, false, false, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
                // line 55
                echo "        <div class=\"alert alert-info\">
                <button class=\"close\" data-dismiss=\"alert\">×</button>
                <strong>Info</strong> ";
                // line 57
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["flashMessage"], 0, [], "array", false, false, false, 57), "html", null, true);
                echo ".
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 63
    public function macro_display_error($__form__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "form" => $__form__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "display_error"));

            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "macro", "display_error"));

            // line 64
            echo "    ";
            $macros["forms"] = $this;
            // line 65
            echo "
    ";
            // line 66
            $context["nb"] = 0;
            // line 67
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 68
                echo "        ";
                if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 68), "valid", [], "any", false, false, false, 68)) {
                    // line 69
                    echo "            ";
                    $context["nb"] = ((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 69, $this->source); })()) + 1);
                    // line 70
                    echo "        ";
                }
                // line 71
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 72
            echo "
    ";
            // line 73
            if ((1 === twig_compare((isset($context["nb"]) || array_key_exists("nb", $context) ? $context["nb"] : (function () { throw new RuntimeError('Variable "nb" does not exist.', 73, $this->source); })()), 0))) {
                // line 74
                echo "    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"alert alert-danger\">
                <p>The following fileds has errors. Please check your form values before to submit it again.</p>
                <ul>
                    ";
                // line 79
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 79, $this->source); })()));
                foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                    // line 80
                    echo "                        ";
                    if ( !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 80), "valid", [], "any", false, false, false, 80)) {
                        // line 81
                        echo "                            <li>
                                ";
                        // line 82
                        if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 82), "compound", [], "any", false, false, false, 82) &&  !twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 82), "valid", [], "any", false, false, false, 82))) {
                            // line 83
                            echo "                                    ";
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 83), "label", [], "any", false, false, false, 83))), "html", null, true);
                            echo ":
                                    ";
                            // line 84
                            echo twig_call_macro($macros["forms"], "macro_display_error", [$context["child"]], 84, $context, $this->getSourceContext());
                            echo "
                                ";
                        } else {
                            // line 86
                            echo "                                    <h5>
                                        <a href=\"#";
                            // line 87
                            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 87), "id", [], "any", false, false, false, 87), "html", null, true);
                            echo "\">
                                            ";
                            // line 88
                            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 88), "label", [], "any", false, false, false, 88))), "html", null, true);
                            echo ":
                                        </a>
                                        <small>
                                            ";
                            // line 91
                            $context['_parent'] = $context;
                            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["child"], "vars", [], "any", false, false, false, 91), "errors", [], "any", false, false, false, 91));
                            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                                // line 92
                                echo "                                                ";
                                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, twig_get_attribute($this->env, $this->source, $context["error"], "message", [], "any", false, false, false, 92)), "html", null, true);
                                echo "
                                            ";
                            }
                            $_parent = $context['_parent'];
                            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
                            $context = array_intersect_key($context, $_parent) + $_parent;
                            // line 94
                            echo "                                        </small>
                                    </h5>
                                ";
                        }
                        // line 97
                        echo "                            </li>
                        ";
                    }
                    // line 99
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 100
                echo "                </ul>
            </div>
        </div>
    </div>
    ";
            }
            
            $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

            
            $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);


            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "@EasyjetSwissinsideCore/Base/macros.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  402 => 100,  396 => 99,  392 => 97,  387 => 94,  378 => 92,  374 => 91,  368 => 88,  364 => 87,  361 => 86,  356 => 84,  351 => 83,  349 => 82,  346 => 81,  343 => 80,  339 => 79,  332 => 74,  330 => 73,  327 => 72,  321 => 71,  318 => 70,  315 => 69,  312 => 68,  307 => 67,  305 => 66,  302 => 65,  299 => 64,  280 => 63,  258 => 57,  254 => 55,  250 => 54,  247 => 53,  238 => 50,  234 => 48,  229 => 47,  220 => 44,  216 => 42,  211 => 41,  193 => 40,  172 => 33,  168 => 31,  166 => 30,  161 => 28,  158 => 27,  156 => 26,  152 => 24,  146 => 22,  140 => 20,  137 => 19,  123 => 17,  120 => 16,  117 => 15,  114 => 14,  112 => 13,  109 => 12,  106 => 11,  103 => 10,  101 => 9,  98 => 8,  95 => 7,  92 => 6,  89 => 5,  86 => 4,  82 => 3,  79 => 2,  59 => 1,  47 => 61,  43 => 38,);
    }

    public function getSourceContext()
    {
        return new Source("{% macro show_general_menu(menuItemsList, selectedItem) %}
    <ul id=\"swissinside-applications\">
        {% for item in menuItemsList %}
        {% set appName = item.name %}
        {% if item.initials == \"UM\" and (item.transition_status == \"after\" or item.transition_status == \"current\") and item.right_level == 1 %}
            {% set appName = \"Home\" %}
        {% endif %}

        {% if item.initials == \"UM\" and easyjetEnv != \"swissinside\" %}
            {% set appName = \"Home\" %}
        {% endif %}
        
        {% if item.initials == \"BR\" %}
            {% set appName = \"SWITSS\" %}
        {% endif %}

        <li class=\"{{ item.initials == selectedItem ? \"active\" : \"\" }}\"><a href=\"{{ item.link }}\"><i class=\"{{ item.icon }}\"></i>{{ appName }}</a></li>
        {% endfor %}
        {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}
                <li id=\"logout-button\"><a href=\"{{ url('_swissinside_logout') }}\"><i class=\"icon-off\"></i>Logout</a></li>
        {% else %}
                <li class=\"active\"><a href=\"{{ url('index') }}\"><i class=\"icon-home\"></i>Back home</a></li>
        {% endif %}
    </ul>

    {% if is_granted(\"IS_AUTHENTICATED_FULLY\") %}
    <div class=\"dropdown\" id=\"my-profile-button\">
      <a href=\"#\" class=\"btn btn-danger\" data-toggle=\"dropdown\"><i class=\"icon-user\"></i> {{ app.user.getAuthname() }} <span class=\"caret\"></span></a>
      <ul class=\"dropdown-menu pull-right\" role=\"menu\" aria-labelledby=\"dropdownMenu1\">
          {% if app.session.get('user_switch_allowed') %}
              <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"javascript:swissinside.switch_user()\"><i class=\"icon-rotate-right\"></i> Switch user</a></li>
          {% endif %}
          <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"{{ url('_swissinside_logout') }}\"><i class=\"icon-off\"></i> Logout</a></li>
      </ul>
    </div>
    {% endif %}
{% endmacro %}


{% macro wizz() %}
    {% for flashMessage in app.session.flashbag.get('error') %}
        <div class=\"alert alert-danger\">
                <button class=\"close\" data-dismiss=\"alert\">×</button>
                <strong>Notice</strong> {{ flashMessage }}.
        </div>
    {% endfor %}
    {% for flashMessage in app.session.flashbag.get('success') %}
        <div class=\"alert alert-success\">
                <button class=\"close\" data-dismiss=\"alert\">×</button>
                <strong>Success</strong> {{ flashMessage }}.
        </div>
    {% endfor %}

    {% for flashMessage in app.session.flashbag.all() %}
        <div class=\"alert alert-info\">
                <button class=\"close\" data-dismiss=\"alert\">×</button>
                <strong>Info</strong> {{ flashMessage[0] }}.
        </div>
    {% endfor %}
{% endmacro %}


{% macro display_error(form) %}
    {% import _self as forms %}

    {% set nb = 0 %}
    {% for child in form %}
        {% if not child.vars.valid %}
            {% set nb = nb +1 %}
        {% endif %}
    {% endfor %}

    {% if nb > 0 %}
    <div class=\"row\">
        <div class=\"col-xs-12\">
            <div class=\"alert alert-danger\">
                <p>The following fileds has errors. Please check your form values before to submit it again.</p>
                <ul>
                    {% for child in form %}
                        {% if not child.vars.valid %}
                            <li>
                                {% if child.vars.compound and not child.vars.valid %}
                                    {{ child.vars.label|trans|capitalize }}:
                                    {{ forms.display_error(child) }}
                                {% else %}
                                    <h5>
                                        <a href=\"#{{ child.vars.id }}\">
                                            {{ child.vars.label|trans|capitalize }}:
                                        </a>
                                        <small>
                                            {% for error in child.vars.errors %}
                                                {{ error.message|capitalize }}
                                            {% endfor %}
                                        </small>
                                    </h5>
                                {% endif %}
                            </li>
                        {% endif %}
                    {% endfor %}
                </ul>
            </div>
        </div>
    </div>
    {% endif %}
{% endmacro %}
", "@EasyjetSwissinsideCore/Base/macros.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\SwissinsideCoreBundle\\Resources\\views\\Base\\macros.html.twig");
    }
}
