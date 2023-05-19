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

/* @EasyjetUman/Admin/Rostering/modalRosteringAdd.html.twig */
class __TwigTemplate_289c42f45466ac9f7f326dd108f22eef992aa5ebb8d1fd1ddb3c7cfd63087b11 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetUman/Admin/Rostering/modalRosteringAdd.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@EasyjetUman/Admin/Rostering/modalRosteringAdd.html.twig"));

        // line 1
        echo "<form class=\"form-horizontal\" action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getUrl("uman_admin_rostering_add_member");
        echo "\" method=\"post\" name=\"form_search\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Add a rostering member</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-search\"></i>
                        </span>
                        <h5>Select the employee to add</h5>
                    </div>
                    <div class=\"widget-content nopadding\">

                            <div class=\"form-group\">
                                <label class=\"control-label\">Employee</label>                
                                <div class=\"controls\">
                                    <select required=\"required\" id=\"userToAdd\" class=\"select2\" name=\"user\">
                                        <option value=\"\">-- Select --</option>
                                    ";
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["usersList"]) || array_key_exists("usersList", $context) ? $context["usersList"] : (function () { throw new RuntimeError('Variable "usersList" does not exist.', 23, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 24
            echo "                                        <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "logUser", [], "any", false, false, false, 24), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $context["user"], "html", null, true);
            echo "</option>
                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                                    </select>
                                </div>
                            </div>
                            <div id=\"submitted\"></div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                <button type=\"submit\" class=\"btn btn-primary\">Add</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</form>

<script>
    \$(function() {
       \$(\"#userToAdd\").select2();
    });
</script>";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@EasyjetUman/Admin/Rostering/modalRosteringAdd.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 26,  73 => 24,  69 => 23,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<form class=\"form-horizontal\" action=\"{{ url('uman_admin_rostering_add_member') }}\" method=\"post\" name=\"form_search\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                <h4 class=\"modal-title\" id=\"myModalLabel\">Add a rostering member</h4>
            </div>
            <div class=\"modal-body\">
                <div class=\"widget-box\">
                    <div class=\"widget-title\">
                        <span class=\"icon\">
                            <i class=\"icon-search\"></i>
                        </span>
                        <h5>Select the employee to add</h5>
                    </div>
                    <div class=\"widget-content nopadding\">

                            <div class=\"form-group\">
                                <label class=\"control-label\">Employee</label>                
                                <div class=\"controls\">
                                    <select required=\"required\" id=\"userToAdd\" class=\"select2\" name=\"user\">
                                        <option value=\"\">-- Select --</option>
                                    {% for user in usersList %}
                                        <option value=\"{{ user.logUser }}\">{{ user }}</option>
                                    {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div id=\"submitted\"></div>
                    </div>
                </div>
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button>
                <button type=\"submit\" class=\"btn btn-primary\">Add</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</form>

<script>
    \$(function() {
       \$(\"#userToAdd\").select2();
    });
</script>", "@EasyjetUman/Admin/Rostering/modalRosteringAdd.html.twig", "C:\\xampp\\htdocs\\swissinside\\src\\Easyjet\\UmanBundle\\Resources\\views\\Admin\\Rostering\\modalRosteringAdd.html.twig");
    }
}
