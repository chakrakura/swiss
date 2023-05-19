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

/* @EasyjetOtp/SectAdjClaimsRequest/edit.html.twig */
class __TwigTemplate_6a4902b451ed209031a44daebf50c27920eea43f1be55bca060011ef3eab7613 extends Template
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
        return "@EasyjetOtp/Base/structure.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/SectAdjClaimsRequest/edit.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetOtp/SectAdjClaimsRequest/edit.html.twig"));

        // line 2
        $macros["macros"] = $this->macros["macros"] = $this->loadTemplate("@EasyjetSwissinsideCore/Base/macros.html.twig", "@EasyjetOtp/SectAdjClaimsRequest/edit.html.twig", 2)->unwrap();
        // line 1
        $this->parent = $this->loadTemplate("@EasyjetOtp/Base/structure.html.twig", "@EasyjetOtp/SectAdjClaimsRequest/edit.html.twig", 1);
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

        echo "Make a claim adjsutment";
        
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

    // line 13
    public function block_container($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "container"));

        // line 14
        echo "        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Sector adjustment</h1>         
        <div id=\"description_help\">Below you can set the claim adjustment for the selected employee.</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            ";
        // line 23
        echo twig_call_macro($macros["macros"], "macro_wizz", [], 23, $context, $this->getSourceContext());
        echo "
        </div>  
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a href=\"";
        // line 29
        echo twig_escape_filter($this->env, (isset($context["claimsListUrl"]) || array_key_exists("claimsListUrl", $context) ? $context["claimsListUrl"] : (function () { throw new RuntimeError('Variable "claimsListUrl" does not exist.', 29, $this->source); })()), "html", null, true);
        echo "\" class=\"btn btn-default\"><i class=\"icon-home\"></i> Return to the list</a>
        </div>
    </div>

    
    ";
        // line 34
        if ((isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 34, $this->source); })())) {
            // line 35
            echo "        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>Global information</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        <form action=\"\" class=\"form-horizontal\">
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Firstname</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"form-control\" value=\"";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 51, $this->source); })()), "firstname", [], "any", false, false, false, 51), "html", null, true);
            echo "\" disabled=\"disabled\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xs-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Lastname</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"form-control\" value=\"";
            // line 59
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 59, $this->source); })()), "lastname", [], "any", false, false, false, 59), "html", null, true);
            echo "\" disabled=\"disabled\">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Compensation grade</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"form-control\" value=\"";
            // line 70
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 70, $this->source); })()), "compensationGrade", [], "any", false, false, false, 70), "html", null, true);
            echo "\" disabled=\"disabled\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xs-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Contract</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"form-control\" value=\"";
            // line 78
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 78, $this->source); })()), "typeEftr", [], "any", false, false, false, 78), "type", [], "any", false, false, false, 78), "html", null, true);
            echo "\" disabled=\"disabled\">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Cvp month</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"form-control\" value=\"";
            // line 89
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 89, $this->source); })()), "batch", [], "any", false, false, false, 89), "cvpMonth", [], "any", false, false, false, 89), "M Y"), "html", null, true);
            echo "\" disabled=\"disabled\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xs-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Concerned date</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"form-control\" value=\"";
            // line 97
            ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sectAdj"]) || array_key_exists("sectAdj", $context) ? $context["sectAdj"] : (function () { throw new RuntimeError('Variable "sectAdj" does not exist.', 97, $this->source); })()), "request", [], "any", false, false, false, 97), "concernedDate", [], "any", false, false, false, 97)) ? (print (twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sectAdj"]) || array_key_exists("sectAdj", $context) ? $context["sectAdj"] : (function () { throw new RuntimeError('Variable "sectAdj" does not exist.', 97, $this->source); })()), "request", [], "any", false, false, false, 97), "concernedDate", [], "any", false, false, false, 97), "d/m/Y"), "html", null, true))) : (print ("Unknown")));
            echo "\" disabled=\"disabled\">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">                
            ";
            // line 108
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_message"]) || array_key_exists("form_message", $context) ? $context["form_message"] : (function () { throw new RuntimeError('Variable "form_message" does not exist.', 108, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
            echo "
            ";
            // line 109
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form_message"]) || array_key_exists("form_message", $context) ? $context["form_message"] : (function () { throw new RuntimeError('Variable "form_message" does not exist.', 109, $this->source); })()), 'errors');
            echo "

            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-comment\"></i>
                        </span>
                        <h5>Comments</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        ";
            // line 120
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["sectAdj"]) || array_key_exists("sectAdj", $context) ? $context["sectAdj"] : (function () { throw new RuntimeError('Variable "sectAdj" does not exist.', 120, $this->source); })()), "comments", [], "any", false, false, false, 120));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 121
                echo "                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"sectorAdjustmentMessage\">
                                    ";
                // line 123
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "postedBy", [], "any", false, false, false, 123), "prenomUser", [], "any", false, false, false, 123), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "postedBy", [], "any", false, false, false, 123), "logUser", [], "any", false, false, false, 123), "html", null, true);
                echo "
                                    <span class=\"help-inline-inalterable\">";
                // line 124
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "postDate", [], "any", false, false, false, 124), "M d Y - H:i"), "html", null, true);
                echo "</span>
                                </label>
                                <div class=\"controls\">
                                    <p>";
                // line 127
                echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 127), "html", null, true));
                echo "</p>
                                </div>
                            </div>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 131
            echo "
                        ";
            // line 132
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["sectAdj"]) || array_key_exists("sectAdj", $context) ? $context["sectAdj"] : (function () { throw new RuntimeError('Variable "sectAdj" does not exist.', 132, $this->source); })()), "exportedAt", [], "any", false, false, false, 132)) {
                // line 133
                echo "                            <div class=\"form-group\">
                                <label class=\"control-label\">";
                // line 134
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_message"]) || array_key_exists("form_message", $context) ? $context["form_message"] : (function () { throw new RuntimeError('Variable "form_message" does not exist.', 134, $this->source); })()), "message", [], "any", false, false, false, 134), 'label');
                echo ":</label>
                                <div class=\"controls\">
                                    ";
                // line 136
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form_message"]) || array_key_exists("form_message", $context) ? $context["form_message"] : (function () { throw new RuntimeError('Variable "form_message" does not exist.', 136, $this->source); })()), "message", [], "any", false, false, false, 136), 'widget', ["attr" => ["class" => "form-control"]]);
                echo "
                                </div>
\t\t\t\t\t\t    </div> 
                           
                        ";
            }
            // line 141
            echo "
                        ";
            // line 142
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["sectAdj"]) || array_key_exists("sectAdj", $context) ? $context["sectAdj"] : (function () { throw new RuntimeError('Variable "sectAdj" does not exist.', 142, $this->source); })()), "exportedAt", [], "any", false, false, false, 142)) {
                // line 143
                echo "                            <div class=\"form-actions\">
                                <button type=\"submit\" class=\"btn btn-primary\">Send message</button>
                            </div>
                        ";
            }
            // line 147
            echo "
                    </div>
                </div>
            </div> 
        </div>

        ";
            // line 153
            if ( !twig_get_attribute($this->env, $this->source, (isset($context["sectAdj"]) || array_key_exists("sectAdj", $context) ? $context["sectAdj"] : (function () { throw new RuntimeError('Variable "sectAdj" does not exist.', 153, $this->source); })()), "exportedAt", [], "any", false, false, false, 153)) {
                // line 154
                echo "            ";
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form_message"]) || array_key_exists("form_message", $context) ? $context["form_message"] : (function () { throw new RuntimeError('Variable "form_message" does not exist.', 154, $this->source); })()), 'form_end');
                echo "
        ";
            } else {
                // line 156
                echo "            </form>
        ";
            }
            // line 158
            echo "    ";
        } else {
            // line 159
            echo "        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>Global information</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        <form action=\"\" class=\"form-horizontal\">
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Firstname</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"form-control\" value=\"";
            // line 175
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sectAdj"]) || array_key_exists("sectAdj", $context) ? $context["sectAdj"] : (function () { throw new RuntimeError('Variable "sectAdj" does not exist.', 175, $this->source); })()), "request", [], "any", false, false, false, 175), "concernedUser", [], "any", false, false, false, 175), "prenomUser", [], "any", false, false, false, 175), "html", null, true);
            echo "\" disabled=\"disabled\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xs-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Lastname</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"form-control\" value=\"";
            // line 183
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["sectAdj"]) || array_key_exists("sectAdj", $context) ? $context["sectAdj"] : (function () { throw new RuntimeError('Variable "sectAdj" does not exist.', 183, $this->source); })()), "request", [], "any", false, false, false, 183), "concernedUser", [], "any", false, false, false, 183), "nomUser", [], "any", false, false, false, 183), "html", null, true);
            echo "\" disabled=\"disabled\">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <form class=\"form-horizontal\">
            
                <div class=\"col-xs-12\">
                    <div class=\"widget-box\">
                        <div class=\"widget-title\">
                            <span class=\"icon\">
                                <i class=\"icon-comment\"></i>
                            </span>
                            <h5>Comments</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                            ";
            // line 205
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["sectAdj"]) || array_key_exists("sectAdj", $context) ? $context["sectAdj"] : (function () { throw new RuntimeError('Variable "sectAdj" does not exist.', 205, $this->source); })()), "comments", [], "any", false, false, false, 205));
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 206
                echo "                                <div class=\"form-group\">
                                    <label class=\"control-label\" for=\"sectorAdjustmentMessage\">
                                        ";
                // line 208
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "postedBy", [], "any", false, false, false, 208), "prenomUser", [], "any", false, false, false, 208), "html", null, true);
                echo " - ";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["message"], "postedBy", [], "any", false, false, false, 208), "logUser", [], "any", false, false, false, 208), "html", null, true);
                echo "
                                        <span class=\"help-inline-inalterable\">";
                // line 209
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "postDate", [], "any", false, false, false, 209), "M d Y - H:i"), "html", null, true);
                echo "</span>
                                    </label>
                                    <div class=\"controls\">
                                        <p>";
                // line 212
                echo twig_nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["message"], "message", [], "any", false, false, false, 212), "html", null, true));
                echo "</p>
                                    </div>
                                </div>
                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 216
            echo "
                        </div>
                    </div>
                </div> 
            </form>
        </div>    
        ";
        }
        // line 223
        echo "              
    
    

    ";
        // line 227
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_CLAIMS_ADMIN")) {
            // line 228
            echo "        ";
            if ((isset($context["row"]) || array_key_exists("row", $context) ? $context["row"] : (function () { throw new RuntimeError('Variable "row" does not exist.', 228, $this->source); })())) {
                // line 229
                echo "            
            ";
                // line 230
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 230, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
                echo "
            ";
                // line 231
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 231, $this->source); })()), 'errors');
                echo "
            
            ";
                // line 233
                if ((isset($context["multipleRequestsForDay"]) || array_key_exists("multipleRequestsForDay", $context) ? $context["multipleRequestsForDay"] : (function () { throw new RuntimeError('Variable "multipleRequestsForDay" does not exist.', 233, $this->source); })())) {
                    // line 234
                    echo "                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"alert alert-warning\">
                            <button class=\"close\" data-dismiss=\"alert\">×</button>
                            <strong>Warning</strong>  This user has multiple sector adjustment requests for this date.
                        </div>
                    </div>
                </div>
            ";
                }
                // line 243
                echo "
            <div class=\"row\">

                <div class=\"col-xs-12\">
                    <div class=\"widget-box\">
                        <div class=\"widget-title\">
                            <span class=\"icon\">
                                <i class=\"icon-th\"></i>
                            </span>
                            <h5>Adjustments</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">";
                // line 256
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 256, $this->source); })()), "sectN", [], "any", false, false, false, 256), 'label');
                echo ":</label>
                                <div class=\"controls\">
                                    ";
                // line 258
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 258, $this->source); })()), "sectN", [], "any", false, false, false, 258), 'widget', ["attr" => ["class" => "form-control"]]);
                echo "
                                </div>
\t\t\t\t\t\t    </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\">";
                // line 262
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 262, $this->source); })()), "sectS", [], "any", false, false, false, 262), 'label');
                echo ":</label>
                                <div class=\"controls\">
                                    ";
                // line 264
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 264, $this->source); })()), "sectS", [], "any", false, false, false, 264), 'widget', ["attr" => ["class" => "form-control"]]);
                echo "
                                </div>
\t\t\t\t\t\t    </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\">";
                // line 268
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 268, $this->source); })()), "sectM", [], "any", false, false, false, 268), 'label');
                echo ":</label>
                                <div class=\"controls\">
                                    ";
                // line 270
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 270, $this->source); })()), "sectM", [], "any", false, false, false, 270), 'widget', ["attr" => ["class" => "form-control"]]);
                echo "
                                </div>
\t\t\t\t\t\t    </div> 
                            <div class=\"form-group\">
                                <label class=\"control-label\">";
                // line 274
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 274, $this->source); })()), "sectL", [], "any", false, false, false, 274), 'label');
                echo ":</label>
                                <div class=\"controls\">
                                    ";
                // line 276
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 276, $this->source); })()), "sectL", [], "any", false, false, false, 276), 'widget', ["attr" => ["class" => "form-control"]]);
                echo "
                                </div>
\t\t\t\t\t\t    </div> 
                            <div class=\"form-group\">
                                <label class=\"control-label\">";
                // line 280
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 280, $this->source); })()), "sectXL", [], "any", false, false, false, 280), 'label');
                echo ":</label>
                                <div class=\"controls\">
                                    ";
                // line 282
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 282, $this->source); })()), "sectXL", [], "any", false, false, false, 282), 'widget', ["attr" => ["class" => "form-control"]]);
                echo "
                                </div>
\t\t\t\t\t\t    </div> 
                            <div class=\"form-group\">
                                <label class=\"control-label\">";
                // line 286
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 286, $this->source); })()), "sectManualTaxedChf", [], "any", false, false, false, 286), 'label');
                echo ":</label>
                                <div class=\"controls\">
                                    ";
                // line 288
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 288, $this->source); })()), "sectManualTaxedChf", [], "any", false, false, false, 288), 'widget', ["attr" => ["class" => "form-control"]]);
                echo "
                                </div>
\t\t\t\t\t\t    </div> 
                            <div class=\"form-group\">
                                <label class=\"control-label\">";
                // line 292
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 292, $this->source); })()), "sectManualNotTaxedChf", [], "any", false, false, false, 292), 'label');
                echo ":</label>
                                <div class=\"controls\">
                                    ";
                // line 294
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 294, $this->source); })()), "sectManualNotTaxedChf", [], "any", false, false, false, 294), 'widget', ["attr" => ["class" => "form-control"]]);
                echo "
                                </div>
\t\t\t\t\t\t    </div> 
                            
                            <div class=\"form-group\">
                                <label class=\"control-label\">Status:</label>
                                <div class=\"controls\">
                                    <select name=\"status\" id=\"status\">
                                        <option ";
                // line 302
                echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["sectAdj"]) || array_key_exists("sectAdj", $context) ? $context["sectAdj"] : (function () { throw new RuntimeError('Variable "sectAdj" does not exist.', 302, $this->source); })()), "status", [], "any", false, false, false, 302), "accepted"))) ? ("selected=\"selected\"") : (""));
                echo " value=\"accepted\">Accepted</option>
                                        <option ";
                // line 303
                echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["sectAdj"]) || array_key_exists("sectAdj", $context) ? $context["sectAdj"] : (function () { throw new RuntimeError('Variable "sectAdj" does not exist.', 303, $this->source); })()), "status", [], "any", false, false, false, 303), "refused"))) ? ("selected=\"selected\"") : (""));
                echo " value=\"refused\">Refused</option>
                                        <option ";
                // line 304
                echo (((0 === twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["sectAdj"]) || array_key_exists("sectAdj", $context) ? $context["sectAdj"] : (function () { throw new RuntimeError('Variable "sectAdj" does not exist.', 304, $this->source); })()), "status", [], "any", false, false, false, 304), "pending"))) ? ("selected=\"selected\"") : (""));
                echo " value=\"pending\">Pending</option>
                                </select>
                                </div>
\t\t\t\t\t\t    </div>                         
                            ";
                // line 308
                if ( !twig_get_attribute($this->env, $this->source, (isset($context["sectAdj"]) || array_key_exists("sectAdj", $context) ? $context["sectAdj"] : (function () { throw new RuntimeError('Variable "sectAdj" does not exist.', 308, $this->source); })()), "exportedAt", [], "any", false, false, false, 308)) {
                    // line 309
                    echo "                                <div class=\"form-actions\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Set data</button>
                                </div>
                            ";
                }
                // line 313
                echo "
                        </div>
                    </div>
                </div>           
            </div>

            ";
                // line 319
                echo                 $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 319, $this->source); })()), 'form_end');
                echo "
        ";
            } else {
                // line 321
                echo "            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"alert alert-warning\">
                        <button class=\"close\" data-dismiss=\"alert\">×</button>
                        <strong>Read only</strong> This request is not assigned to any month yet. Please wait until the month has been imported in the system in order to manage this request.
                    </div>
                </div>
            </div>
        ";
            }
            // line 330
            echo "    ";
        } else {
            // line 331
            echo "        <div class=\"row\">
            
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>Allowed adjustments</h5>
                    </div>
                    <div class=\"widget-content\">
                        <p>
                            <span class=\"badge badge-info\">N:  ";
            // line 343
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sectAdj"]) || array_key_exists("sectAdj", $context) ? $context["sectAdj"] : (function () { throw new RuntimeError('Variable "sectAdj" does not exist.', 343, $this->source); })()), "sectN", [], "any", false, false, false, 343), "html", null, true);
            echo "</span>
                            <span class=\"badge badge-info\">S:  ";
            // line 344
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sectAdj"]) || array_key_exists("sectAdj", $context) ? $context["sectAdj"] : (function () { throw new RuntimeError('Variable "sectAdj" does not exist.', 344, $this->source); })()), "sectS", [], "any", false, false, false, 344), "html", null, true);
            echo "</span>
                            <span class=\"badge badge-info\">M:  ";
            // line 345
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sectAdj"]) || array_key_exists("sectAdj", $context) ? $context["sectAdj"] : (function () { throw new RuntimeError('Variable "sectAdj" does not exist.', 345, $this->source); })()), "sectM", [], "any", false, false, false, 345), "html", null, true);
            echo "</span>
                            <span class=\"badge badge-info\">L:  ";
            // line 346
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sectAdj"]) || array_key_exists("sectAdj", $context) ? $context["sectAdj"] : (function () { throw new RuntimeError('Variable "sectAdj" does not exist.', 346, $this->source); })()), "sectL", [], "any", false, false, false, 346), "html", null, true);
            echo "</span>
                            <span class=\"badge badge-info\">XL: ";
            // line 347
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["sectAdj"]) || array_key_exists("sectAdj", $context) ? $context["sectAdj"] : (function () { throw new RuntimeError('Variable "sectAdj" does not exist.', 347, $this->source); })()), "sectXL", [], "any", false, false, false, 347), "html", null, true);
            echo "</span>
                            ";
            // line 348
            $context["amount"] = (twig_get_attribute($this->env, $this->source, (isset($context["sectAdj"]) || array_key_exists("sectAdj", $context) ? $context["sectAdj"] : (function () { throw new RuntimeError('Variable "sectAdj" does not exist.', 348, $this->source); })()), "sectManualTaxedChf", [], "any", false, false, false, 348) + twig_get_attribute($this->env, $this->source, (isset($context["sectAdj"]) || array_key_exists("sectAdj", $context) ? $context["sectAdj"] : (function () { throw new RuntimeError('Variable "sectAdj" does not exist.', 348, $this->source); })()), "sectManualNotTaxedChf", [], "any", false, false, false, 348));
            // line 349
            echo "                            <span class=\"badge badge-info\">Manual : ";
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["amount"]) || array_key_exists("amount", $context) ? $context["amount"] : (function () { throw new RuntimeError('Variable "amount" does not exist.', 349, $this->source); })()), 2, ".", ","), "html", null, true);
            echo " CHF</span>
                        </p>
                       
                    </div>
                </div>
            </div>           
        </div>
    ";
        }
        // line 357
        echo "    
</div>
   
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetOtp/SectAdjClaimsRequest/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  671 => 357,  659 => 349,  657 => 348,  653 => 347,  649 => 346,  645 => 345,  641 => 344,  637 => 343,  623 => 331,  620 => 330,  609 => 321,  604 => 319,  596 => 313,  590 => 309,  588 => 308,  581 => 304,  577 => 303,  573 => 302,  562 => 294,  557 => 292,  550 => 288,  545 => 286,  538 => 282,  533 => 280,  526 => 276,  521 => 274,  514 => 270,  509 => 268,  502 => 264,  497 => 262,  490 => 258,  485 => 256,  470 => 243,  459 => 234,  457 => 233,  452 => 231,  448 => 230,  445 => 229,  442 => 228,  440 => 227,  434 => 223,  425 => 216,  415 => 212,  409 => 209,  403 => 208,  399 => 206,  395 => 205,  370 => 183,  359 => 175,  341 => 159,  338 => 158,  334 => 156,  328 => 154,  326 => 153,  318 => 147,  312 => 143,  310 => 142,  307 => 141,  299 => 136,  294 => 134,  291 => 133,  289 => 132,  286 => 131,  276 => 127,  270 => 124,  264 => 123,  260 => 121,  256 => 120,  242 => 109,  238 => 108,  224 => 97,  213 => 89,  199 => 78,  188 => 70,  174 => 59,  163 => 51,  145 => 35,  143 => 34,  135 => 29,  126 => 23,  115 => 14,  105 => 13,  82 => 6,  63 => 4,  52 => 1,  50 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@EasyjetOtp/Base/structure.html.twig' %}
{% import \"@EasyjetSwissinsideCore/Base/macros.html.twig\" as macros %}

{% block title %}Make a claim adjsutment{% endblock %}

{% block specificJs %}{{ parent() }}


{% endblock specificJs %}
        


{% block container %}
        
<div id=\"content\">
    <div id=\"content-header\">
        <h1 id=\"titre_help\">Sector adjustment</h1>         
        <div id=\"description_help\">Below you can set the claim adjustment for the selected employee.</div>
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            {{ macros.wizz() }}
        </div>  
    </div>

    <div class=\"row\">
        <div class=\"col-xs-12\">
            <a href=\"{{ claimsListUrl }}\" class=\"btn btn-default\"><i class=\"icon-home\"></i> Return to the list</a>
        </div>
    </div>

    
    {% if row %}
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>Global information</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        <form action=\"\" class=\"form-horizontal\">
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Firstname</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"form-control\" value=\"{{ row.firstname }}\" disabled=\"disabled\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xs-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Lastname</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"form-control\" value=\"{{ row.lastname }}\" disabled=\"disabled\">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Compensation grade</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"form-control\" value=\"{{ row.compensationGrade }}\" disabled=\"disabled\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xs-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Contract</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"form-control\" value=\"{{ row.typeEftr.type }}\" disabled=\"disabled\">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Cvp month</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"form-control\" value=\"{{ row.batch.cvpMonth|date(\"M Y\") }}\" disabled=\"disabled\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xs-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Concerned date</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"form-control\" value=\"{{ sectAdj.request.concernedDate ? sectAdj.request.concernedDate|date(\"d/m/Y\") : \"Unknown\" }}\" disabled=\"disabled\">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">                
            {{ form_start(form_message, {'attr': {'class': 'form-horizontal'}} ) }}
            {{ form_errors(form_message) }}

            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-comment\"></i>
                        </span>
                        <h5>Comments</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        {% for message in sectAdj.comments %}
                            <div class=\"form-group\">
                                <label class=\"control-label\" for=\"sectorAdjustmentMessage\">
                                    {{ message.postedBy.prenomUser }} - {{ message.postedBy.logUser }}
                                    <span class=\"help-inline-inalterable\">{{ message.postDate|date(\"M d Y - H:i\") }}</span>
                                </label>
                                <div class=\"controls\">
                                    <p>{{ message.message|nl2br }}</p>
                                </div>
                            </div>
                        {% endfor %}

                        {% if not sectAdj.exportedAt %}
                            <div class=\"form-group\">
                                <label class=\"control-label\">{{ form_label(form_message.message) }}:</label>
                                <div class=\"controls\">
                                    {{ form_widget(form_message.message, { 'attr': {'class': 'form-control'} }) }}
                                </div>
\t\t\t\t\t\t    </div> 
                           
                        {% endif %}

                        {% if not sectAdj.exportedAt %}
                            <div class=\"form-actions\">
                                <button type=\"submit\" class=\"btn btn-primary\">Send message</button>
                            </div>
                        {% endif %}

                    </div>
                </div>
            </div> 
        </div>

        {% if not sectAdj.exportedAt %}
            {{ form_end(form_message) }}
        {% else %}
            </form>
        {% endif %}
    {% else %}
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>Global information</h5>
                    </div>
                    <div class=\"widget-content nopadding\">
                        <form action=\"\" class=\"form-horizontal\">
                        <div class=\"row\">
                            <div class=\"col-xs-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Firstname</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"form-control\" value=\"{{ sectAdj.request.concernedUser.prenomUser }}\" disabled=\"disabled\">
                                    </div>
                                </div>
                            </div>
                            <div class=\"col-xs-6\">
                                <div class=\"form-group\">
                                    <label class=\"control-label\">Lastname</label>
                                    <div class=\"controls\">
                                        <input type=\"text\" class=\"form-control\" value=\"{{ sectAdj.request.concernedUser.nomUser }}\" disabled=\"disabled\">
                                    </div>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <form class=\"form-horizontal\">
            
                <div class=\"col-xs-12\">
                    <div class=\"widget-box\">
                        <div class=\"widget-title\">
                            <span class=\"icon\">
                                <i class=\"icon-comment\"></i>
                            </span>
                            <h5>Comments</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                            {% for message in sectAdj.comments %}
                                <div class=\"form-group\">
                                    <label class=\"control-label\" for=\"sectorAdjustmentMessage\">
                                        {{ message.postedBy.prenomUser }} - {{ message.postedBy.logUser }}
                                        <span class=\"help-inline-inalterable\">{{ message.postDate|date(\"M d Y - H:i\") }}</span>
                                    </label>
                                    <div class=\"controls\">
                                        <p>{{ message.message|nl2br }}</p>
                                    </div>
                                </div>
                            {% endfor %}

                        </div>
                    </div>
                </div> 
            </form>
        </div>    
        {% endif %}
              
    
    

    {% if  is_granted('ROLE_CLAIMS_ADMIN') %}
        {% if row %}
            
            {{ form_start(form, {'attr': {'class': 'form-horizontal'}} ) }}
            {{ form_errors(form) }}
            
            {% if multipleRequestsForDay %}
                <div class=\"row\">
                    <div class=\"col-xs-12\">
                        <div class=\"alert alert-warning\">
                            <button class=\"close\" data-dismiss=\"alert\">×</button>
                            <strong>Warning</strong>  This user has multiple sector adjustment requests for this date.
                        </div>
                    </div>
                </div>
            {% endif  %}

            <div class=\"row\">

                <div class=\"col-xs-12\">
                    <div class=\"widget-box\">
                        <div class=\"widget-title\">
                            <span class=\"icon\">
                                <i class=\"icon-th\"></i>
                            </span>
                            <h5>Adjustments</h5>
                        </div>
                        <div class=\"widget-content nopadding\">
                            <div class=\"form-group\">
                                <label class=\"control-label\">{{ form_label(form.sectN) }}:</label>
                                <div class=\"controls\">
                                    {{ form_widget(form.sectN, { 'attr': {'class': 'form-control'} }) }}
                                </div>
\t\t\t\t\t\t    </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\">{{ form_label(form.sectS) }}:</label>
                                <div class=\"controls\">
                                    {{ form_widget(form.sectS, { 'attr': {'class': 'form-control'} }) }}
                                </div>
\t\t\t\t\t\t    </div>
                            <div class=\"form-group\">
                                <label class=\"control-label\">{{ form_label(form.sectM) }}:</label>
                                <div class=\"controls\">
                                    {{ form_widget(form.sectM, { 'attr': {'class': 'form-control'} }) }}
                                </div>
\t\t\t\t\t\t    </div> 
                            <div class=\"form-group\">
                                <label class=\"control-label\">{{ form_label(form.sectL) }}:</label>
                                <div class=\"controls\">
                                    {{ form_widget(form.sectL, { 'attr': {'class': 'form-control'} }) }}
                                </div>
\t\t\t\t\t\t    </div> 
                            <div class=\"form-group\">
                                <label class=\"control-label\">{{ form_label(form.sectXL) }}:</label>
                                <div class=\"controls\">
                                    {{ form_widget(form.sectXL, { 'attr': {'class': 'form-control'} }) }}
                                </div>
\t\t\t\t\t\t    </div> 
                            <div class=\"form-group\">
                                <label class=\"control-label\">{{ form_label(form.sectManualTaxedChf) }}:</label>
                                <div class=\"controls\">
                                    {{ form_widget(form.sectManualTaxedChf, { 'attr': {'class': 'form-control'} }) }}
                                </div>
\t\t\t\t\t\t    </div> 
                            <div class=\"form-group\">
                                <label class=\"control-label\">{{ form_label(form.sectManualNotTaxedChf) }}:</label>
                                <div class=\"controls\">
                                    {{ form_widget(form.sectManualNotTaxedChf, { 'attr': {'class': 'form-control'} }) }}
                                </div>
\t\t\t\t\t\t    </div> 
                            
                            <div class=\"form-group\">
                                <label class=\"control-label\">Status:</label>
                                <div class=\"controls\">
                                    <select name=\"status\" id=\"status\">
                                        <option {{ sectAdj.status == \"accepted\" ? 'selected=\"selected\"' : '' }} value=\"accepted\">Accepted</option>
                                        <option {{ sectAdj.status == \"refused\" ? 'selected=\"selected\"' : '' }} value=\"refused\">Refused</option>
                                        <option {{ sectAdj.status == \"pending\" ? 'selected=\"selected\"' : '' }} value=\"pending\">Pending</option>
                                </select>
                                </div>
\t\t\t\t\t\t    </div>                         
                            {% if not sectAdj.exportedAt %}
                                <div class=\"form-actions\">
                                    <button type=\"submit\" class=\"btn btn-primary\">Set data</button>
                                </div>
                            {% endif %}

                        </div>
                    </div>
                </div>           
            </div>

            {{ form_end(form) }}
        {% else %}
            <div class=\"row\">
                <div class=\"col-xs-12\">
                    <div class=\"alert alert-warning\">
                        <button class=\"close\" data-dismiss=\"alert\">×</button>
                        <strong>Read only</strong> This request is not assigned to any month yet. Please wait until the month has been imported in the system in order to manage this request.
                    </div>
                </div>
            </div>
        {% endif %}
    {% else %}
        <div class=\"row\">
            
            <div class=\"col-xs-12\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-th\"></i>
                        </span>
                        <h5>Allowed adjustments</h5>
                    </div>
                    <div class=\"widget-content\">
                        <p>
                            <span class=\"badge badge-info\">N:  {{ sectAdj.sectN }}</span>
                            <span class=\"badge badge-info\">S:  {{ sectAdj.sectS }}</span>
                            <span class=\"badge badge-info\">M:  {{ sectAdj.sectM }}</span>
                            <span class=\"badge badge-info\">L:  {{ sectAdj.sectL }}</span>
                            <span class=\"badge badge-info\">XL: {{ sectAdj.sectXL }}</span>
                            {% set amount = sectAdj.sectManualTaxedChf + sectAdj.sectManualNotTaxedChf %}
                            <span class=\"badge badge-info\">Manual : {{ amount|number_format(2, '.', ',') }} CHF</span>
                        </p>
                       
                    </div>
                </div>
            </div>           
        </div>
    {% endif %}
    
</div>
   
{% endblock container %}", "@EasyjetOtp/SectAdjClaimsRequest/edit.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\OtpBundle\\Resources\\views\\SectAdjClaimsRequest\\edit.html.twig");
    }
}
